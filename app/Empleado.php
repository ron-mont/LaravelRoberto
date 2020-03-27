<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model{
    //
    public $table = 'empleados';

    public $fillable = ["nombre"];
}
