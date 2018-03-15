<?php

use App\User;
use jeremykenedy\LaravelRoles\Models\Role;
use jeremykenedy\LaravelRoles\Models\Permission;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


//        $userRole 			= Role::where('name', '=', 'User')->first();
        $adminRole 			= Role::where('name', '=', 'Admin')->first();
		$permissions 		= Permission::all();

	    /**
	     * Add Admin Users
	     *
	     */
        if (User::where('email', '=', 'admin@x2sms.com')->first() === null) {

	        $newUser = User::create([
	            'name' => 'Admin',
	            'email' => 'admin@x2sms.com',
	            'password' => bcrypt('admin'),
	        ]);

	        $newUser->attachRole($adminRole);
			foreach ($permissions as $permission) {
				$newUser->attachPermission($permission);
			}

        }

        if (User::where('email', '=', 'editor@x2sms.com')->first() === null) {

	        $newUser = User::create([
	            'name' => 'Sample Editor Name',
	            'email' => 'editor@x2sms.com',
	            'password' => bcrypt('admin'),
	        ]);


	        $newUser->attachRole(Role::where('name', '=', 'Editor')->first());

        }

        if (User::where('email', '=', 'student@x2sms.com')->first() === null) {

            $newUser = User::create([
                'name' => 'Sample Student One',
                'email' => 'student@x2sms.com',
                'password' => bcrypt('admin'),
            ]);


            $newUser->attachRole(Role::where('name', '=', 'Editor')->first());

        }

        if (User::where('email', '=', 'parent@x2sms.com')->first() === null) {

            $newUser = User::create([
                'name' => 'Sample Parent One',
                'email' => 'parent@x2sms.com',
                'password' => bcrypt('admin'),
            ]);


            $newUser->attachRole(Role::where('name', '=', 'Guardian')->first());

        }

        if (User::where('email', '=', 'teacher@x2sms.com')->first() === null) {

            $newUser = User::create([
                'name' => 'Sample Teacher One',
                'email' => 'teacher@x2sms.com',
                'password' => bcrypt('admin'),
            ]);


            $newUser->attachRole(Role::where('name', '=', 'Teacher')->first());

        }



    }
}