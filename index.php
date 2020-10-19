<?php 

define('BASEPATH',__DIR__);
define('PRODUCTION',false);

require __DIR__.'/vendor/autoload.php';
require __DIR__.'/libs/Utils.php';


includeDir(__DIR__.'/libs');
includeDir(__DIR__.'/models');
includeDir(__DIR__.'/services');
includeDir(__DIR__.'/controllers');


$r = new R();
$r->route('/api/v1/products',['ProductController','index']);
$r->route('/api/v1/products/1',['ProductController','view']);
$r->exec();


// use Illuminate\Database\Capsule\Manager as DB;
// $results = DB::select('select * from products ');
// $results = DB::table('products')->where("productName",'ทดสอบภาษาไทย')->get();
// dump($results);
// dump($results[0]->productCode);
// print_r($results);
// $products = Product::get();
// dump($products);


// $orders = Order::with(['details','details.product'])->get();

// dump(json_decode($orders[0]->toJson()));

// echo $orders[0];