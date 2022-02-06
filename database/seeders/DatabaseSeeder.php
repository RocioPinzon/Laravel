<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\User::factory(10)->create();
         \App\Models\Project::factory(10)->create();


        $this->seedRoles();
        $this->seedRelationRolesUser();
    }

    public function seedRoles()
    {
        $roles = [
            "admin"=>"administrador",
            "developer"=>"desarrollador",
            "guest"=>"invitado"
        ];

        foreach ($roles as $name => $display_name) {
            \App\Models\Role::create(compact('name','display_name'));
        }
    }
    public function seedRelationRolesUser()
    {

        $roles = \App\Models\Role::all();
        $users = \App\Models\User::all();


        foreach ($users as $user) {

            for($i=0; $i<random_int(1,3); $i++) {
                $user->roles()->attach($roles->random());
            }
        }
    }
}
