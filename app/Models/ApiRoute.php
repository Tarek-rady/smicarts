<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApiRoute extends Model
{
    use HasFactory;

    protected $table='api_routes';
    protected $guarded=[];
}
