<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $table = 'translate_team';
    protected $fillable = ['translate_team'];
    public $timestamps = false;
}