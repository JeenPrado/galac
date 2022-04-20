<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\App\Product;

class Category extends Model
{
    use HasFactory;

    protected $table = 'category';
    protected $fillable = ['description'];

    public function Producto(){
        return $this->hasmany(Product::class,'id');
    }
}
