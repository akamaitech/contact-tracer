<?php namespace App\Controllers;

class Dashboard extends BaseController {
    public function __construct()
	{
        /*call CodeIgniter's default Constructor*/
        parent::__construct();
        
        /*load database libray manually*/
        $this->load->database();
        
        /*load Model*/
        $this->load->model('User_model');
	}
    
    public function index()
    {
        return view('qr');
    } 

    public function users(){
        return view('user_view');
    }

    function save_data(){
        $json = array();
        $postdata = $this->request->getPost();
        
        $user=$this->db->insert("user",$postdata);

        echo json_encode($json);
    }
}
