<?php namespace App\Controllers;

class Home extends BaseController
{
	
/*	public function index()
	{
		return view('welcome_message');
	} 

	public function try_lang()
	{
		return view('welcome_message');
  }*/
  
  // controller for localhost
public function find(){
	return view('qr');
}

}
