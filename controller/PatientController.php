<?php 
require_once './../models/Patient.php';
class PatientController {
      private  Patient  $patientModel;
      public function __construct()
      {
        $this->patientModel=new Patient;
       
      }

      public function save(){
        extract($_POST);//$libelle=$_POST['libelle'];
        $errors=[];
            try {
                $this->patientModel->setLibelle($libelle);
                $this->patientModel->insert(); 
            } catch (\Throwable $th) {
                $errors['libelle'] ="$libelle existe deja ";
            }
    }

    public function index(){
        $categories=$this->patientModel->findAll();
        //Response ==> Html+Css
        $this->renderView("categorie/liste.html.php",[
            "categories"=> $categories
        ]);
       
    }
}



    


