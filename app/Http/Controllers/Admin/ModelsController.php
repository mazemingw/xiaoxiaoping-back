<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ModelsController
{
   function add() {
       return view ('admin.models.add');
   }
   function index() {
       return view ('admin.models.index');
   }
}
