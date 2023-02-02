<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $fillable =[
        'name',
        'image',
        'description',
        'order',
        'category',
    ];
    protected $primarykey = 'id';
    function category(){
        return $this->hasone(Category::class, 'id');
    }



}
