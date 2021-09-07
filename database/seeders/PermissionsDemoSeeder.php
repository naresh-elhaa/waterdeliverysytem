<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;
use Illuminate\Support\Facades\Hash;

class PermissionsDemoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'model_index']);
        Permission::create(['name' => 'model_edit']);
        Permission::create(['name' => 'model_add']);
        Permission::create(['name' => 'model_status']);
        Permission::create(['name' => 'model_delete']);

        // create roles and assign existing permissions
        $role1 = Role::create(['name' => 'super_admin']);
        $role1->givePermissionTo('model_index');
        $role1->givePermissionTo('model_edit');
        $role1->givePermissionTo('model_add');
        $role1->givePermissionTo('model_status');
        $role1->givePermissionTo('model_delete');


       
        // gets all permissions via Gate::before rule; see AuthServiceProvider

      
        
       

        $user = \App\Models\User::factory()->create([
            'name' => 'super_admin',
            'email' => 'superadmin@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
        
        $user->assignRole($role1);

    }
}
