<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    use HasFactory;
    protected $fillable = [
        'alive',
        'heroName',
        'familyName',
        'age',
        'birthday',
        'culture',
        'children',
    ];
}
