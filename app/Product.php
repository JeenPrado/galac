<?php

namespace App;

use Illuminate\Database\Eloquent\Model; 
use App\Models\User;
use App\Models\Category;

class Product extends Model {

    
    protected $table = 'products';

    protected $fillable = ['cod', 'name', 'description', 'price', 'quantity', 'id_category'];

    public function Category(){
        return $this->belongsTo(Category::class);
    }

}