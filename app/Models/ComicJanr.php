<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComicJanr extends Model
{
    protected $table = 'comic_janr';
    protected $fillable = ['comic_janr'];
    public $timestamps = false;
}
