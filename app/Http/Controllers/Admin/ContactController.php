<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
	protected $request;

	public function __construct(Request $request){
		$this->request = $request;
	}

    public function show(){

		$array = $this->request->only('name', 'email');

		if($this->request->has('name')){
			echo '<h1 style="margin-top:100px;">'.$this->request->input('name', 'Default').'</h1>';
		}

		return view('default.contact', ['title'=>'Contacts']);
	}
}
