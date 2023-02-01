<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
        'email',
        'image',
        'number',
        'facebook',
        'instagram',
        'youtube',
        'linkedin',
        'desription',
        'copyright',
    ];

}
