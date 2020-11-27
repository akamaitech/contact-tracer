<?php namespace App\Controllers;

class Home extends BaseController
{
	
/*	public function index()
	{q
		return view('welcome_message');
	} 

	public function try_lang()
	{
		return view('welcome_message');
  }*/
  
  // controller for localhost
public function base(){
	return view('base');
}
public function find(){
	return view('qr');
}
public function ind(){
	return view('scanner');
}
}
