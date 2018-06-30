<?php

namespace App\Exceptions;

use Exception;

class ProductNotBelongsToUser extends Exception
{
    public function render(){
      return ['errors'=>'Anda tidak berhak mengakses data ini'];
    }
}
