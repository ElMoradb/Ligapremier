<?php

namespace App\Controllers;

class Canchas extends BaseController
{
    public function index(): string
    {

        $canchaM = model('CanchaM');
            
        $data['canchas'] = $canchaM->findAll();
        return  view('head') .
                view('menu') . 
                view('canchas/show', $data) .
                view('footer');
    }

    public function add(){   //get
        return view('head') .
        view('menu') . 
        view('canchas/add') .
        view('footer');
    }

    public function edit($idcancha){   //get
        $idcancha=$data['idcancha'] = $idcancha;
        $canchaM = model('CanchaM');
        $data['cancha'] = $canchaM->where('idcancha',$idcancha)->findAll();
        return view('head') .
        view('menu') . 
        view('canchas/edit',$data) . 
        view('footer');

       
    }

    public function update(){
        $canchaM = model('CanchaM');
        $idcancha = $_POST['idcancha'];
           
               $data = [
                   'cancha' => $_POST['cancha'],
                   
               ];
           
               $canchaM->set($data)->where('idcancha',$idcancha)->update();
               return redirect()->to(base_url('/canchas'));
    }


    public function insert(){ //post
        echo "aqui insertamos";
        $data = [
          "cancha" => $_POST['cancha']    
        ] ;

        $canchaM = model('CanchaM');
        $canchaM->insert($data);
        return redirect()->to(base_url('/canchas'));

    }       


    public function delete($idcancha){
       
        $canchaM = model('CanchaM');
        $canchaM->delete($idcancha);
        return redirect()->to(base_url('/canchas'));
    }
}