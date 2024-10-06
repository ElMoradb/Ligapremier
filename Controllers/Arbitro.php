<?php

namespace App\Controllers;

class Arbitro extends BaseController
{
    public function index(): string
    {

        $arbitroM = model('ArbitroM');
            
        $data['arbitro'] = $arbitroM->findAll();
        return  view('head') .
                view('menu') . 
                view('arbitros/show', $data) .
                view('footer');
    }

    public function add(){   //get
        return view('head') .
        view('menu') . 
        view('arbitros/add') .
        view('footer');
    }

    public function edit($idarbitro){   //get
        $idarbitro=$data['idarbitro'] = $idarbitro;
        $arbitroM = model('ArbitroM');
        $data['arbitro'] = $arbitroM->where('idarbitro',$idarbitro)->findAll();
        return view('head') .
        view('menu') . 
        view('arbitros/edit',$data) . 
        view('footer');

       
    }

    public function update(){
        $arbitroM = model('ArbitroM');
        $idarbitro = $_POST['idarbitro'];
           
               $data = [
                   'arbitro' => $_POST['arbitro'],
                   
               ];
           
               $arbitroM->set($data)->where('idarbitro',$idarbitro)->update();
               return redirect()->to(base_url('/arbitros'));
    }


    public function insert (){ //post
        $arbitroM = model('ArbitroM');
        
        $data = [
            "nombre" => $_POST['nombre'] ,
            "aPaterno" => $_POST['aPaterno'] ,
            "aMaterno" => $_POST['aMaterno'] ,
            "fechaNacimiento" => $_POST['fechaNacimiento'] ,
            "telefono" => $_POST['telefono'] ,

          ] ;
  
          $arbitroM = model('CanchaM');
          $arbitroM->insert($data);
          return redirect()->to(base_url('/arbitros'));

        /*if(isset($_POST['Guardar'])){
            $arbitro = [
                'nombre' => $_POST['nombre'],
                'aPaterno' => $_POST['aPaterno'],
                'aMaterno' => $_POST['aMaterno'],
                'fechaNacimiento' => $_POST['fechaNacimiento'],
                'telefono' => $_POST['telefono']
            ];
            
            $arbitroM->insert($arbitro);
            return redirect()->to(base_url('/arbitros'));
        }

        $data['arbitro'] = $arbitroM->findAll();

        return 
         view('head').
         view('menu').
         view('arbitros/show',$data).
         view('footer');
   */
    }       


    public function delete($idarbitro){
       
        $arbitroM = model('ArbitroM');
        $arbitroM->delete($idarbitro);
        return redirect()->to(base_url('/arbitros'));
    }
}