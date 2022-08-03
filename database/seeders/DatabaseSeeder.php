<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $superadmin = User::firstOrCreate(
            ['email' => env('SUPERADMIN_EMAIL')],
            [
                'fullname' => env('SUPERADMIN_FULLNAME'),
                'email' => env('SUPERADMIN_EMAIL'),
                'password' => Hash::make(env('SUPERADMIN_PASSWORD', 123)),
                'gender' => 'male',
                'birthdate' => '2001-01-30',
                'phone_number' => '083210390123'     
            ]
        );

        Permission::findOrCreate('view users list');
        Permission::findOrCreate('create users');
        Permission::findOrCreate('delete users');
        Permission::findOrCreate('update users');        

        // superadmin
        $role1 = Role::findOrCreate('superadmin');
        $role1->givePermissionTo('view users list');
        $role1->givePermissionTo('create users');
        $role1->givePermissionTo('delete users');
        $role1->givePermissionTo('update users');

        if($superadmin)        
            $superadmin->assignRole('superadmin'); 
    }
}
