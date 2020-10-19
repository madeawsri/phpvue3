<?php

use Illuminate\Database\Eloquent\Model;


class Product  extends  Model  { 
        
        protected  $table='products';
        protected  $primaryKey='productCode';
        protected $keyType = 'string';
}