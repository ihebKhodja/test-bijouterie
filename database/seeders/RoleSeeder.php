<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = Role::create(['name' => 'admin']);
        $operateur = Role::create(['name' => 'operateur']);

        $create_product_permission = Permission::create(['name' => 'create product']);
        $edit_product_permission = Permission::create(['name' => 'edit product']);
        $archive_product_permission = Permission::create(['name' => 'archive product']);
        $import_excel_permission = Permission::create(['name' => 'import excel']);
        $export_excel_permission = Permission::create(['name' => 'export excel']);
        $get_orders_permission = Permission::create(['name' => 'get orders']);
        $edit_order_state_permission = Permission::create(['name' => 'edit order state']);
        
        $permissions=[$create_product_permission,
            $edit_product_permission,
            $archive_product_permission,
            $import_excel_permission,
            $export_excel_permission,
            $get_orders_permission,
            $edit_order_state_permission];
        
         $admin->syncPermissions($permissions);


    }
}
