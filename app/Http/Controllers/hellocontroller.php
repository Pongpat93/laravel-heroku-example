<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
   function showhello($name){
      return '<h1>hello:'.$name.' </h1>';
   }
   function resultproduct($product){
      return '<h1>show:'.$product.' </h1>';
   }
