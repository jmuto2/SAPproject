<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class NamesController extends Controller
{
  public function index()
  {
    $names = \App\Models\Names::all();

    return view('names.index', ['names' => $names]);
  }
}
