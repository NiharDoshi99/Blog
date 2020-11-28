<?php namespace App\Controllers;
use CodeIgniter\Controllers;
use App\Models\blogModel;

class Pages extends BaseController {
  
    

    public function index () {
        echo view('templates/header');
        echo view('pages/home'); 
        echo view('templates/footer');
    }

    public function insert() {
        // echo "OK";
        // $this->load->model('blogModel');
        $image = service('image');
        
        $data = array(
            "title" => $this->request->getVar("title"),
            "description" => $this->request->getVar("description"),
            "body" => $this->request->getVar("body"),
            "image" => $this->request->getFile("img")
        );

        $fileName = $data['image']->getName();
        print_r($fileName);
        
        $data['image']->move('C:/Users/xampp/htdocs/Blog/public/upload',$fileName);
        $path = $data['image'];
        
        
        
        // $image->withFile('C:/Users/xampp/htdocs/Blog/upload/'.$fileName);
            

        // print_r($fileName);
        // exit;
        
        
        // $db = \Config\Database::connect();
        // $builder = $db->table('data');
        // $builder->insert($data);
        $model = new blogModel();
        $model->insert($data);
        echo "Data inserted successfully";

        
        
        
        
    }

    public function show() {
        $model = new blogModel();
        $data['table'] = $model->findAll();
        
        return view('pages/display',$data);
    }

    

}