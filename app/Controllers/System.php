<?php 
namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\BlogModel;
class System extends BaseController{

    public function index()
    {
        $data=[
            'meta_title'=>'Qr Code System',
            

        ];
        return view ('main/qr_content',$data);
    }
    
   
    public function Qdata(){
        $data=[
            'meta_title' =>'Codeigniter 4 Post Page',
            'title' =>'Create new post',
        ];
    
        if($this->request->getMethod()=='post'){
            $model=new BlogModel();
            $model->save($_POST);
            
        }
        return view('/register/qr_reg',$data);
    
    }

 public function scan()
    {
        $data=[
            'meta_title'=>'Qr Code System',
            

        ];
        
        return view('/main/scan_me',$data);
    }

}