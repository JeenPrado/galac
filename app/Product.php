<?php

namespace App;

use Illuminate\Database\Eloquent\Model; 
use App\Models\User;

class Product extends Model {

    protected $table = 'products';

    protected $fillable = ['cod', 'name', 'description', 'price', 'quantity'];

}