<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutModel extends Model
{
    protected $table = 'about_models';
    protected $fillable = ['id','nama_foto', 'foto_about', 'status'];
}
