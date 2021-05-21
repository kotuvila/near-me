<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

       /**
     * Get the comments for the blog post.
     */

    
    protected $fillable = [
        'name',
        'reg_no',
        'photo',
        'photo_path',
        'telephone',
        'description',
        'address',
        'latitude',
        'longitude',
        'status',
    ];

     
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function promotions()
    {
        return $this->hasMany(Promotion::class);
    }

    // public function categories()
    // {
    //     return $this->belongsToMany(Category::class);
    // }

    public function category()
    {
        return $this->belongsTo(\App\Models\Category::class, 'category_id');
    }

    
    public function area()
    {
        return $this->belongsTo(\App\Models\Area::class, 'area_id');
    }
}