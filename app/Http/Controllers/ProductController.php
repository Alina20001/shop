<?php

namespace App\Http\Controllers;
use App\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
	public function getCategory($id=null){
		$cat=Category::find($id);
		return view('products',compact('cat'));	
	}
    //
}
