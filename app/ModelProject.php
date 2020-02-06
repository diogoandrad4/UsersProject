<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelProject extends Model
{
    protected $fillable = ['name', 'role', 'email'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'user';
}
