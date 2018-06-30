<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Product;
class Review extends Model
{
    protected $table='review';

    protected $fillable=[
      'user','star','review'
    ];
    public function product(){
      return $this->belongsTo(Product::class);
    }
}
