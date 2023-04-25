<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComicTags extends Model
{
    protected $table = 'comic_tags';
    protected $fillable = ['comic_tags'];
    public $timestamps = false;
}
