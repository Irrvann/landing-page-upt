<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SosmedModels extends Model
{
    protected $table = 'sosmed_models';
    protected $fillable = ['id', 'nama_sosmed_upt','nama_sosmed', 'link_sosmed', 'foto_sosmed' ,'status', 'created_at'];
}
