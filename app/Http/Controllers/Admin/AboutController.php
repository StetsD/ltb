<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class AboutController extends Controller
{
    public function show(){
		$view = view('default.about')->withTitle('Maza')->render();
		return (new Response($view))
									->header('Header-One', 'Lalala')
									->header('Header-Two', 'lololo');

		// return redirect('/');

		// return response()->view('default.about', ['title'=>'Hello world']);
		// return response()->download('robots.txt', 'mytext.txt');

		// return view('default.about')->withTitle('Maza');
	}
}
