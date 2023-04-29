<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComicOgr extends Model
{
    protected $table = 'comic_ogr';
    protected $fillable = ['comic_ogr'];
    public $timestamps = false;
}
