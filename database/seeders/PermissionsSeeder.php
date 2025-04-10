<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
//agregar hash
use Illuminate\Support\Facades\Hash;
use App\Models\User;



class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //permisos

        Permission::create(['name' => 'usuarios']);
        Permission::create(['name' => 'blogs']);
        Permission::create(['name' => 'proyectos']);
        Permission::create(['name' => 'recursos']);



        Permission::create(['name' => 'agregar']);
        Permission::create(['name' => 'editar']);
        Permission::create(['name' => 'actualizar']);
        Permission::create(['name' => 'eliminar']);
        Role::create(['name' => 'Visualizacion']);
        $role0 = Role::create(['name' => 'Asistente']);

        // Asignar todos los permisos menos "usuarios" y "administrar"
        $permissions = Permission::whereNotIn('name', ['usuarios', 'administrar'])->get();
        $role0->syncPermissions($permissions);

        Permission::create(['name' => 'administrar']);
        $role = Role::create(['name' => 'Administrador']);
        $role->syncPermissions("administrar");
        // create user
        $user1= User::create([
            'dni' => '44444444',
            'firstname' => 'Cardenas',
            'lastname' => 'Aquino',
            'names' => 'Anthony Robert',
            'password' => Hash::make('sdc123456'),
            'datebirth' => '2000-10-10',
            'cellphone' => '999999999',
            'sex' => 'M',
            'email' => 'admin@gmail.com',
        ]);
        //asignar rol
        $user1->assignRole('Administrador');
        ///////////////////////////////////////////////////////////////////////
        $user2= User::create([
            'dni' => '44444444',
            'firstname' => 'Cardenas1',
            'lastname' => 'Aquino1',
            'names' => 'Anthony Robert1',
            'password' => Hash::make('sdc123456'),
            'datebirth' => '2000-10-10',
            'cellphone' => '999999999',
            'sex' => 'M',
            'email' => 'admin1@gmail.com',
        ]);

        $users = [
            [
                'dni' => '99999999',
                'lastname' => 'Williamzon',
                'name' => 'Stephany',
                'username' => 'Stephany',
                'phone' => '99999999',
                'email' => 'auxiliaradministrativo@aybarsac.com',
                'role' => 'Visualizacion'
            ],
            [
                'dni' => '99999999',
                'lastname' => 'Contreras',
                'name' => 'Diego',
                'username' => 'Diego',
                'phone' => '99999999',
                'email' => 'josecontreras@aybarsac.com',
                'role' => 'Visualizacion'
            ],
            [
                'dni' => '99999999',
                'lastname' => 'Hernandez',
                'name' => 'Mayra',
                'username' => 'Mayra',
                'phone' => '99999999',
                'email' => 'mayrahernandez@credilotesperu.com',
                'role' => 'Administrador'
            ],
            [
                'dni' => '99999999',
                'lastname' => 'Ramirez',
                'name' => 'Yuliana',
                'username' => 'Yuliana',
                'phone' => '99999999',
                'email' => 'YULIANARAMIREZ@aybarsac.com',
                'role' => 'Administrador'
            ],
            [
                'dni' => '99999999',
                'lastname' => 'SANDOVAL',
                'name' => 'AXELL',
                'username' => 'AXELL',
                'phone' => '99999999',
                'email' => 'axellsandoval@aybarsac.com',
                'role' => 'Administrador'
            ],
        ];

        foreach ($users as $data) {
            $user = User::firstOrCreate(
                ['email' => $data['email']],
                [
                    'dni' => $data['dni'],
                    'lastname' => $data['lastname'],
                    'names' => $data['name'],
                    'firstname' => $data['username'],
                    'cellphone' => $data['phone'],
                    'email'=> $data['email'],
                    'password' => Hash::make('12345678'), // Puedes cambiarlo
                ]
            );

            $user->assignRole($data['role']);
        }
    }

}
