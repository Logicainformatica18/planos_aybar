<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use App\Http\Requests\StoreTopicRequest;
use App\Http\Requests\UpdateTopicRequest;
use App\Models\Course;
use App\Models\Category;
use App\Models\CategoryDetail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
class TopicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware('auth');


    }
    public function index()
    {


        $topic = Topic::all();
        $category = Category::all();
        return view("topic.topic", compact("topic", "category"));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $topic = Topic::all();

        return view("topic.topictable", compact("topic"));
    }


    public function topic_list(Request $request)
    {

        $topic_list = Topic::where('course_id', '=', $request->course_id)->get();


        return view("topic.topic_list", compact("topic_list"));
        // return view("student.curso_topic", compact("topic"));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $topic = new Topic;
        $topic->description = $request->description;
        $topic->user_id = Auth::user()->id;
        $topic->detail = $request->detail;
        $topic->post = $request->post;
        $topic->type = $request->type;
        $topic->url =  Str::slug($request->description,'-') . time();
        //file
        if ($request->file('photo') != null) {
            $request->photo = fileStore($request->file('photo'), "resource");
            $topic->image_1 = $request->photo;
        }
        //file
        if ($request->file('file_1') != null) {
            $request->file_1 = fileStore($request->file('file_1'), "file");
            $topic->file_1 = $request->file_1;
        }
        //file
        if ($request->file('file_2') != null) {
            $request->file_2 = fileStore($request->file('file_2'), "file");
            $topic->file_2 = $request->file_2;
        }
        //resource
        if ($request->file('resource_1') != null) {
            $request->resource_1 = fileStore($request->file('resource_1'), "resource");
            $topic->resource_1 = $request->resource_1;
        }
        $topic->save();


        // Garantiza que $request->category sea siempre un array, incluso si solo se seleccionó un valor
        // $category = (array) $request->category;

        foreach ($request->category as $categorys) {

            $categoryDetail = new CategoryDetail;
            $categoryDetail->category_id = $categorys;
            $categoryDetail->topic_id = $topic->id;
            $categoryDetail->save();
        }

        return $this->create();
    }

    /**
     * Display the specified resource.
     */
    public function show(Topic $topic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $topic = Topic::find($request->id);

        $categories = CategoryDetail::where('topic_id', $topic->id)->pluck('category_id');

        return response()->json([
            'id' => $topic->id,
            'description' => $topic->description,
            'detail' => $topic->detail,
            'post' => $topic->post,
            'type' => $topic->type,
            'image_1' => $topic->image_1,
            'categories' => $categories // 👈 esto es lo que necesitas en JS
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {


            $topic = Topic::findOrFail($request->id);

            $topic->description = $request->description;
            $topic->user_id = Auth::id();
            $topic->detail = $request->detail;
            $topic->post = $request->post;
            $topic->type = $request->type;
            $topic->url = Str::slug($request->description, '-') . time();

            // Archivos opcionales
            if ($request->hasFile('photo')) {
                $topic->image_1 = fileStore($request->file('photo'), 'resource');
            }

            if ($request->hasFile('file_1')) {
                $topic->file_1 = fileStore($request->file('file_1'), 'file');
            }

            if ($request->hasFile('file_2')) {
                $topic->file_2 = fileStore($request->file('file_2'), 'file');
            }

            if ($request->hasFile('resource_1')) {
                $topic->resource_1 = fileStore($request->file('resource_1'), 'resource');
            }

            $topic->save();

            // Actualizar las categorías asociadas
            CategoryDetail::where('topic_id', $topic->id)->delete();

            if (is_array($request->category)) {
                foreach ($request->category as $categoryId) {
                    CategoryDetail::create([
                        'topic_id' => $topic->id,
                        'category_id' => $categoryId,
                    ]);
                }
            }

         //   return response()->json(['success' => true, 'message' => 'Actualizado correctamente.']);


        return $this->create();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $table = Topic::find($request["id"]);
        fileDestroy($table->image_1, "resource");
        fileDestroy($table->resource_1, "resource");
        fileDestroy($table->file_1, "file");
        fileDestroy($table->file_2, "file");
        Topic::find($request->id)->delete();
        //  CategoryDetail::where('type_id', $request->id)->delete();

        return $this->create();
    }
}
