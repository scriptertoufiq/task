<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;


    public function getCategory()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
