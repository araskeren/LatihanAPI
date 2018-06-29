<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Review;
class Product extends Model
{
    protected $table='product';

    public function review(){
      return $this->hasMany(Review::class);
    }
}
