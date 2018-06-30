<?php

namespace App\Exceptions;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

trait ExceptionTrait{
  public function apiException($request,$e){
    if($this->isModel($e)){
      return $this->responseModel();
    }
    else if($this->isHttp($e)){
      return $this->responseHttp();
    }
  }
  public function isModel($e){
    return $e instanceof ModelNotFoundException;
  }
  public function isHttp($e){
    return $e instanceof NotFoundHttpException;
  }

  public function responseModel(){
    return response()->json([
      'errors'=>'Model Not Found/Kesalahan Saat Melakukan Query'
    ],404);
  }
  public function responseHttp(){
    return response()->json([
      'errors'=>'Kesalahan Route,Periksa kembali route anda'
    ],404);
  }
}
