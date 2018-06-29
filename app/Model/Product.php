<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Review;
class Product extends Model
{
    protected $table='product';

    protected $fillable=[
      'nama','detail','harga','stock','diskon'
    ];
    public function review(){
      return $this->hasMany(Review::class);
    }
}
