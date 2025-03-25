<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactModel extends Model
{
    protected $table = 'contact_models';
    protected $fillable = ['id', 'nim',  'nama', 'link', 'status', 'created_at'];
}
