<?php namespace App\Controllers;

class Dashboard extends BaseController {
	
    public function index()
    {
        return view('qr');
    } 

    public function users(){
        return view('user_view');
    }
}
