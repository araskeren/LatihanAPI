<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\Resource;

use App\Model\Product;
class ProductCollection extends Resource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
          'produk'=>$this->nama,
          'harga'=>$this->harga,
          'harga_setelah_diskon'=>$this->harga-(($this->harga*$this->diskon)/100),
          'diskon'=>$this->diskon,
          'rating'=>$this->review->count()>0? $this->review->sum('star')/$this->review->count():'Belum Ada Ratting',
          'href'=>[
            'review'=>route('product.show',$this->id)
          ]
        ];
    }
}
