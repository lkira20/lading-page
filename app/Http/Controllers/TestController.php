<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Support\Facades\URL;

class TestController extends Controller
{
    //
    public function index()
    {
    	return view('test');
    }

    public function hecho(Request $request)
    {
    	if ($request->total) {
    		if ($request->total <= 10 ) {
    			
    			return URL::signedRoute('test.express', ['resultado' => true]);

    		}else if($request->total >= 11 && $request->total <= 21){

    			return URL::signedRoute('test.marketplace', ['resultado' => true]);
    		}else{

    			return URL::signedRoute('test.vtex', ['resultado' => true]);
    		}
    	}else{
    		abort(403);
    	}
    }

    public function navegarexpress()
    {
        return URL::signedRoute('test.express');
    }

     public function navegarmarketplace()
    {
        return URL::signedRoute('test.marketplace');
    }

    public function navegarvtex()
    {
        return URL::signedRoute('test.vtex');
    }

    public function express(Request $request)
    {
    	if (! $request->hasValidSignature()) {
            abort(403);
        }

    	return view('express');
    }

    public function marketplace(Request $request)
    {
    	if (! $request->hasValidSignature()) {
            abort(403);
        }

    	return view('marketplace');
    }

    public function vtex(Request $request)
    {
    	if (! $request->hasValidSignature()) {
            abort(403);
        }
        
    	return view('vtex');
    }
}
