<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $roleAdmin= Role::create(['name'=>'Admin']);
       $roleBloger= Role::create(['name'=>'Bloger']);

        Permission::create(['name' => 'admin.index','description'=>'Ver el Panel'])->syncRoles([$roleAdmin, $roleBloger]);

        //Usuarios Permisos
         Permission::create(['name' => 'admin.users.index','description'=>'Ver listado de Usuarios'])->syncRoles([$roleAdmin]);
         Permission::create(['name' => 'admin.users.edit','description'=>'Asginar un Rol'])->syncRoles([$roleAdmin]);

        //Roles Permisos
         //Categorias Permisos
         Permission::create(['name' => 'admin.roles.index','description'=>'Ver listado de Roles'])->syncRoles([$roleAdmin]);
         Permission::create(['name' => 'admin.roles.create','description'=>'Crear Roles'])->syncRoles([$roleAdmin]);
         Permission::create(['name' => 'admin.roles.edit','description'=>'Editar Roles'])->syncRoles([$roleAdmin]);
         Permission::create(['name' => 'admin.roles.destroy','description'=>'Eliminar Roles'])->syncRoles([$roleAdmin]);

       //Categorias Permisos
         Permission::create(['name' => 'admin.categories.index','description'=>'Ver listado de Categorias'])->syncRoles([$roleAdmin,$roleBloger]);
         Permission::create(['name' => 'admin.categories.create','description'=>'Crear Categorias'])->syncRoles([$roleAdmin]);
         Permission::create(['name' => 'admin.categories.edit','description'=>'Editar Categorias'])->syncRoles([$roleAdmin]);
         Permission::create(['name' => 'admin.categories.destroy','description'=>'Eliminar Categorias'])->syncRoles([$roleAdmin]);

        //Tags Permisos
         Permission::create(['name' => 'admin.tags.index','description'=>'Ver listado de Etiquetas'])->syncRoles([$roleAdmin,$roleBloger]);
         Permission::create(['name' => 'admin.tags.create','description'=>'Crear Etiquetas'])->syncRoles([$roleAdmin]);
         Permission::create(['name' => 'admin.tags.edit','description'=>'Editar Etiquetas'])->syncRoles([$roleAdmin]);
         Permission::create(['name' => 'admin.tags.destroy','description'=>'Eliminar Etiquetas'])->syncRoles([$roleAdmin]);

       
        //Post Permisos
         Permission::create(['name' => 'admin.posts.index','description'=>'Ver listado de Posts'])->syncRoles([$roleAdmin, $roleBloger]);
         Permission::create(['name' => 'admin.posts.create','description'=>'Crear Posts'])->syncRoles([$roleAdmin, $roleBloger]);
         Permission::create(['name' => 'admin.posts.edit','description'=>'Editar Posts'])->syncRoles([$roleAdmin, $roleBloger]);
         Permission::create(['name' => 'admin.posts.destroy','description'=>'Eliminar Posts'])->syncRoles([$roleAdmin, $roleBloger]); 

    }
}
