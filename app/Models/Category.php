<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    
    use HasFactory;

    public $table = 'categories';

    protected $fillable = [
        'id',
        'name',
    ];

    public function shops()
    {
        return $this->hasMany(Shop::class);
    } //
    
}