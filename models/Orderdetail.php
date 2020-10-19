<?php

use Illuminate\Database\Eloquent\Model;


class Orderdetail  extends  Model  { 
        
        protected  $table='orderdetails';
        protected  $primaryKey='orderLineNumber';

        public function product(){
            return $this->hasOne('Product','productCode','productCode');
        }


}