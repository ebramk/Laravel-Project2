<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    function home() {
        return view('pages.home');
    }
    function contact() {
        return view('pages.contact');
    }
    function about() {
        return view('pages.about');
    }


    function store(Request $request) {

        $name = $request->name;

        return redirect() ->route('thanks',['name'=>$name]);

    }
    function  thanks($name, Request $request){
        return view('pages.thanks') ->with(compact('name'));
    }

}
