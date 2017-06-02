<?php

namespace App\Http\Controllers;

use App\Models\Names;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class NamesController extends Controller
{
  public function index()
  {
    $names = Names::all();

    return view('names.index', ['names' => $names]);
  }

  /**
   * @param Request $request
   *
   * @return Names
   */
  public function edit(Request $request)
  {
    $data = $request->input('data');

    $name = Names::where('id', '=', $data['id'])->first();

    return $name;
   /* if (!empty($name)) {
      $name->first_name = $data['first_name'];
      $name->last_name = $data['last_name'];
    }
    $name->save();

    return redirect('/names');*/
  }
}
