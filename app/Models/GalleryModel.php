<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GalleryModel extends Model
{
    protected $table = 'gallery_models';
    protected $fillable = ['id', 'kode_foto', 'nama_foto', 'foto_gallery', 'status', 'created_at'];
}
