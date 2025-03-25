<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServicesModel extends Model
{
    protected $table = 'services_models';
    protected $fillable = ['id','kode_services', 'nama_services', 'deskripsi_services', 'foto_services', 'status'];
}
