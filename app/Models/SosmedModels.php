<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SosmedModels extends Model
{
    protected $table = 'sosmed_models';
    protected $fillable = ['id', 'nama_sosmed', 'link', 'status', 'created_at'];
}
