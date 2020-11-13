<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
   public function ShowResult()
   {
       return "Test::Complete, passed::true";
   }

   public function Add()
   {
       return "Added::true";
   }
}
