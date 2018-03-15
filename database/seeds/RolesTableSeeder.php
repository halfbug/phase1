<?php

use App\User;
use jeremykenedy\LaravelRoles\Models\Role;
use jeremykenedy\LaravelRoles\Models\Permission;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    /**
	     * Add Roles
	     *
	     */
    	if (Role::where('name', '=', 'Admin')->first() === null) {
	        $adminRole = Role::create([
	            'name' => 'Admin',
	            'slug' => 'admin_r',
	            'description' => 'Admin Role',
	            'level' => 5,
        	]);
	    }

    	if (Role::where('name', '=', 'Editor')->first() === null) {
	        $userRole = Role::create([
	            'name' => 'Editor',
	            'slug' => 'editor_r',
	            'description' => 'Editor ',
	            'level' => 1,
	        ]);
	    }

    	if (Role::where('name', '=', 'Student')->first() === null) {
	        $userRole = Role::create([
	            'name' => 'Student',
	            'slug' => 'student_r',
	            'description' => 'Student ',
	            'level' => 0,
	        ]);
	    }

        if (Role::where('name', '=', 'Student')->first() === null) {
            $userRole = Role::create([
                'name' => 'Student',
                'slug' => 'student_r',
                'description' => 'Student ',
                'level' => 0,
            ]);
        }

        if (Role::where('name', '=', 'Teacher')->first() === null) {
            $userRole = Role::create([
                'name' => 'Teacher',
                'slug' => 'teacher_r',
                'description' => 'Teacher ',
                'level' => 0,
            ]);
        }

        if (Role::where('name', '=', 'Guardian')->first() === null) {
            $userRole = Role::create([
                'name' => 'Guardian',
                'slug' => 'guardian_r',
                'description' => 'Parent ',
                'level' => 0,
            ]);
        }


    }

}