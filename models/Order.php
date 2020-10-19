<?php

use Illuminate\Database\Eloquent\Model;


class Order  extends  Model  { 
        
        protected  $table='orders';
        protected  $primaryKey='orderNumber';

        public function details(){
           return  $this->hasMany('Orderdetail','orderNumber','orderNumber');
        }
}