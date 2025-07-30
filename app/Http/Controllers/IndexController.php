<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
public function index(){




return view("index");

}
public function contact(){

return view("contact",["pageTitle"=>"Contact page"]);


}
public function about(){

return view ("about",["pageTitle"=>"About page"]);

}


}
