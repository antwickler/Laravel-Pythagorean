<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cookie;

class SolveController extends Controller
{
    public function index(Request $request){
    	return view('solve');
    }
    
    public function calculate(Request $request){
    	$valueA = (int)$request->input('valueA');
    	$valueB = (int)$request->input('valueB');

    	Cookie::queue(cookie('valueA',$valueA,3600));
    	Cookie::queue(cookie('valueB',$valueB,3600));
    	session()->put('valueA', $valueA);
    	session()->put('valueB', $valueB);

        $valueA;
		$valueB;
		$valueA2;
		$valueB2;
		$total;
		$total2;			
		
		$valueA2 = (pow($valueA,2));
		$valueB2 = (pow($valueB,2));
		$total = $valueA2 + $valueB2;
		$total2 = sqrt($total);

		session()->put('valueA',$valueA);
		session()->put('valueB',$valueB);
		session()->put('valueA2',$valueA2);
		session()->put('valueB2',$valueB2);
        session()->put('total',$total);
        session()->put('total2',$total2);
        Cookie::queue(cookie('valueC',$total2,3600));

        return redirect('solve');
    }
}