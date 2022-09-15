<?php

namespace Database\Seeders;

use App\Models\Permiso;
use App\Models\Rol;
use Illuminate\Database\Seeder;

class PermisoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permiso::insert([
            ['permiso'=>'publicar'],
            ['permiso' => 'editar'],
            ['permiso' => 'gestión']
        ]);
    }
}
