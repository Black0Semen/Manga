<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComicType extends Model
{
    protected $table = 'comic_type';
    protected $fillable = ['comic_type'];
    public $timestamps = false;
}
