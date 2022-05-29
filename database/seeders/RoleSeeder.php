<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        foreach ($this->adminPermissions as $adminPermission) {
            Permission::create($adminPermission);
        }

        // gets all permissions via Gate::before rule; see AuthServiceProvider
        $role0 = Role::create(['name' => 'super-admin'])
            ->givePermissionTo(Permission::all());
            
        $role1 = Role::create(['name' => 'admin'])
            ->givePermissionTo(Permission::all());

        $role2 = Role::create(['name' => 'supervisor'])
            ->givePermissionTo($this->supervisorPermission());

        $role3 = Role::create(['name' => 'vendor'])
            ->givePermissionTo($this->vendorPermission());

        $role4 = Role::create(['name' => 'shipper'])
            ->givePermissionTo($this->userPermission());
        // ->givePermissionTo(['name' => 'show shipping']);

        $role5 = Role::create(['name' => 'user'])
            ->givePermissionTo($this->userPermission());
    }

    protected $adminPermissions = [
        ['name' => 'show category'], ['name' => 'create category'], ['name' => 'edit category'], ['name' => 'delete category'], ['name' => 'publish category'],
        ['name' => 'show country'], ['name' => 'create country'], ['name' => 'edit country'], ['name' => 'delete country'], ['name' => 'publish country'],
        ['name' => 'show city'], ['name' => 'create city'], ['name' => 'edit city'], ['name' => 'delete city'], ['name' => 'publish city'],
        ['name' => 'show user'], ['name' => 'create user'], ['name' => 'edit user'], ['name' => 'delete user'], ['name' => 'publish user'],
        ['name' => 'show profile'], ['name' => 'create profile'], ['name' => 'edit profile'], ['name' => 'delete profile'],
        ['name' => 'show setting'], ['name' => 'create setting'], ['name' => 'edit setting'], ['name' => 'delete setting'],
        ['name' => 'show messenger category'], ['name' => 'create messenger category'], ['name' => 'edit messenger category'], ['name' => 'delete messenger category'], ['name' => 'publish messenger category'],
        ['name' => 'show page'], ['name' => 'create page'], ['name' => 'edit page'], ['name' => 'delete page'], ['name' => 'publish page'],
        ['name' => 'show brand'], ['name' => 'create brand'], ['name' => 'edit brand'], ['name' => 'delete brand'], ['name' => 'publish brand'],
        ['name' => 'show option'], ['name' => 'create option'], ['name' => 'edit option'], ['name' => 'delete option'],
        ['name' => 'show option value'], ['name' => 'create option value'], ['name' => 'edit option value'], ['name' => 'delete option value'],
        ['name' => 'show tag'], ['name' => 'create tag'], ['name' => 'edit tag'], ['name' => 'delete tag'],
        ['name' => 'show product'], ['name' => 'create product'], ['name' => 'edit product'], ['name' => 'delete product'], ['name' => 'publish product'],
        ['name' => 'show coupon'], ['name' => 'create coupon'], ['name' => 'edit coupon'], ['name' => 'delete coupon'], ['name' => 'publish coupon'],
        ['name' => 'show order'], ['name' => 'create order'], ['name' => 'edit order'], ['name' => 'delete order'], ['name' => 'publish order'],
        ['name' => 'show order product'], ['name' => 'create order product'], ['name' => 'edit order product'], ['name' => 'delete order product'],
        ['name' => 'show image'], ['name' => 'create image'], ['name' => 'edit image'], ['name' => 'delete image'],
        ['name' => 'show transaction'], ['name' => 'create transaction'], ['name' => 'edit transaction'], ['name' => 'delete transaction'], ['name' => 'publish transaction'],
        ['name' => 'show shipping'], ['name' => 'create shipping'], ['name' => 'edit shipping'], ['name' => 'delete shipping'], ['name' => 'publish shipping'],
        ['name' => 'show comment'], ['name' => 'create comment'], ['name' => 'edit comment'], ['name' => 'delete comment'], ['name' => 'publish comment'],
        ['name' => 'show preview'], ['name' => 'create preview'], ['name' => 'edit preview'], ['name' => 'delete preview'], ['name' => 'publish preview'],
        ['name' => 'show slider'], ['name' => 'create slider'], ['name' => 'edit slider'], ['name' => 'delete slider'], ['name' => 'publish slider'],
        ['name' => 'show wish list'], ['name' => 'create wish list'], ['name' => 'edit wish list'], ['name' => 'delete wish list'],
        ['name' => 'show website content area'], ['name' => 'create website content area'], ['name' => 'edit website content area'], ['name' => 'delete website content area'], ['name' => 'publish website content area'],
        ['name' => 'show website content value'], ['name' => 'create website content value'], ['name' => 'edit website content value'], ['name' => 'delete website content value'],
        ['name' => 'show role'], ['name' => 'create role'], ['name' => 'edit role'], ['name' => 'delete role'],
        ['name' => 'show permission'], ['name' => 'create permission'], ['name' => 'edit permission'], ['name' => 'delete permission']
    ];




    protected function supervisorPermission()
    {
        return [
            'show category', 'create category', 'edit category', 'publish category',
            'show country', 'create country', 'edit country', 'publish country',
            'show city', 'create city', 'edit city', 'publish city',
            'show user', 'create user', 'edit user', 'publish user',
            'show profile', 'create profile', 'edit profile',
            'show messenger category', 'create messenger category', 'publish messenger category',
            'show page', 'create page',
            'show brand', 'create brand', 'edit brand', 'publish brand',
            'show option', 'create option',
            'show option value', 'create option value',
            'show tag', 'create tag',
            'show product', 'create product', 'publish product',
            'show coupon',
            'show order', 'create order', 'publish order',
            'show order product',
            'show image', 'create image', 'edit image',
            'show transaction', 'publish transaction',
            'show shipping', 'publish shipping',
            'show comment', 'create comment', 'edit comment', 'delete comment', 'publish comment',
            'show preview', 'create preview', 'edit preview', 'delete preview', 'publish preview',
            'show slider', 'create slider', 'edit slider', 'publish slider',
            'show wish list', 'create wish list', 'edit wish list'
        ];
    }

    protected function vendorPermission()
    {
        return [
            'show category',
            'show country',
            'show city',
            'show profile',
            'show brand',
            'show option', 'create option',
            'show option value', 'create option value',
            'show tag', 'create tag',
            'show product', 'create product',
            'show coupon', 'create coupon',
            'show order', 'create order',
            'create image',
            'show comment', 'create comment',
            'show preview', 'create preview',
            'show slider'
        ];
    }

    protected function userPermission()
    {
        return [
            'show category',
            'show country',
            'show city',
            'show profile',
            'show brand',
            'show option', 'create option',
            'show option value', 'create option value',
            'show tag', 'create tag',
            'show product', 'create product',
            'show coupon', 'create coupon',
            'show order', 'create order',
            'create image',
            'show comment', 'create comment',
            'show preview', 'create preview',
            'show slider'
        ];
    }
}
