<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    use HasFactory;

    protected $fillable = ['rol'];


    public function users() {
        return $this->belongsToMany(User::class);
    }
    public function permisos() {
        return $this->belongsToMany(Permiso::class);
    }
}
