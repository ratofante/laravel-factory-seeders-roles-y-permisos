<?php

namespace Database\Seeders;

use App\Models\Permiso;
use App\Models\Rol;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Mockery\Undefined;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public $adminId;
    public $editorsId;

    public function run()
    {
        Rol::insert([
            ['rol' => 'admin'],
            ['rol' => 'editor'],
            ['rol' => 'usuario']
        ]);

        /*
        * Se asigna a 1 usuario el rol de Admin (id = 1), luego
        * a 3 usuarios aleatorios, el rol de editor (id = 2)
        * por último, todos los usuarios tienen el rol de usuario
        */

        foreach (Rol::all() as $rol) {
            //Es admin
            if($rol->id === 1) {
                $this->adminId = User::inRandomOrder()->take(1)->pluck('id');
                $rol->users()->attach($this->adminId);

                $permisos = Permiso::all()->pluck('id');
                $rol->permisos()->attach($permisos);
            } elseif($rol->id === 2) {
                $this->editorsId = User::whereNotIn('id', $this->adminId)
                ->inRandomOrder()->take(3)->pluck('id');
                $rol->users()->attach($this->editorsId);

                $permisos = Permiso::where('permiso','editar')
                        ->orWhere('permiso', 'publicar')
                        ->pluck('id');
                $rol->permisos()->attach($permisos);
            } else {
                $users = User::whereNotIn('id', $this->adminId)
                                ->whereNotIn('id', $this->editorsId)
                                ->pluck('id');
                $rol->users()->attach($users);

                $permiso = Permiso::where('permiso','publicar')->pluck('id');
                $rol->permisos()->attach($permiso);
            }
        }
    }
}
