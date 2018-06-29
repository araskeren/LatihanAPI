<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\Resource;

class ProductResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
          'produk'=>$this->nama,
          'deskripsi'=>$this->detail,
          'harga'=>$this->harga,
          'harga_setelah_diskon'=>$this->harga-(($this->harga*$this->diskon)/100),
          'stok'=>$this->stock,
          'diskon'=>$this->diskon,
          'rating'=>$this->review->count()>0? $this->review->sum('star')/$this->review->count():'Belum Ada Ratting',
          'href'=>[
            'review'=>route('review.index',$this->nama)
          ]
        ];
    }
}
