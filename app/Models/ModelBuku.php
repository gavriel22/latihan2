<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelBuku extends Model
{
    //atribut
    protected $table = "buku";
    protected $primaryKey = 'id';
    public $timestamps = false;
    public $fillable = ['id', 'judul', 'pengarang'];
}
