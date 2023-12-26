<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forms extends Model
{
    // use HasFactory;
    protected $fillable = [
        'type',
        'title',
        'description',
        'id',
        'maxCharactersEnabled',
        'maxCharacters',
        'settings',
    ];
    protected $casts = [
        'settings' => 'json', 
    ];
}
