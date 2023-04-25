<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComicStatus extends Model
{
    protected $table = 'comic_status';
    protected $fillable = ['comic_status'];
    public $timestamps = false;
}
