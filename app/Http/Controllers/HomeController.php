<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App;
class HomeController extends Controller
{
    public function pdff(){
    	
      $pdf = PDF::loadView('abc');
      return $pdf->download('invoice.pdf');
    }
}
/*
 	  $user = User::find($id);
      $pdf = PDF::loadView('backend.pdf', compact('user'));
      return $pdf->download('invoice.pdf');
*/