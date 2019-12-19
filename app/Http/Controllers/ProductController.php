<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class ProductController extends Controller
{
 
   public function index(){
   
    $product = Product::with('category')->find(2);
    // $category = Category::find(33);
     
     // $product->category()->attach($category);
  return $product;



  
  }

}
