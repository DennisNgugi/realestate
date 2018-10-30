<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Property;


class PropertyDetailController extends Controller
{

    public function download($id){
      $view = Property::find($id);
      $pdf = PDF::loadView('details', compact('view'));
      return $pdf->download('details.pdf');
    }
    public function print($id){
      $view = Property::find($id);
      return view('details',compact('view'));
    }
}
