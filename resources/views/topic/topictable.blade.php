
<table id="file_export" class=" table table-hover table-bordered table-striped table-responsive">
    <thead>
        <!-- start row -->
        <tr>


            <th><img width="20" src="https://cdn-icons-png.flaticon.com/512/6671/6671938.png" alt=""
                    srcset=""></th>
            <th>ID</th>
            <th>Descripción</th>
            <th>Url</th>
            <th>Detalle</th>


        </tr>
        <!-- end row -->
    </thead>
    <tbody>
        @foreach ($topic as $topics)
            <tr>


                <td>
                    <a href="#" type="button" class="btn btn-primary fs-4 ti ti-edit"
                    onclick="topicEdit('{{ $topics->id }}'); return false"></a>

                <a href="#" type="button" class="btn btn-danger ti ti-trash"
                    onclick="topicDestroy('{{ $topics->id }}'); return false"></a>

                </td>



                <td>{{ $topics->id }}</td>


                <td>{{ $topics->description }}</td>
                <td>
                    <a href="../blog/{{$topics->url}}">
                        {{ $topics->url }}
                    </a>
                    </td>

                <td>{{ $topics->detail }}</td>




            </tr>
        @endforeach
    </tbody>

</table>








    <script>

      </script>
