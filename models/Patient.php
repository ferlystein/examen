<?php
class Patient {
    private String $numPatient;
    private String $nomComplet;
   

    /**
     * Get the value of numPatient
     */ 
    public function getNumPatient()
    {
        return $this->numPatient;
    }

    /**
     * Set the value of numPatient
     *
     * @return  self
     */ 
    public function setNumPatient($numPatient)
    {
        $this->numPatient = $numPatient;
        return $this;
    }

    /**
     * Get the value of nomComplet
     */ 
    public function getNomComplet()
    {
        return $this->nomComplet;
    }

    /**
     * Set the value of nomComplet
     *
     * @return  self
     */ 
    public function setNomComplet($nomComplet)
    {
        $this->nomComplet = $nomComplet;

        return $this;
    }


    protected string $table;
    protected \PDO $pdo;
    
    public function __construct()
     {

         try {
            $this->pdo=new \PDO("mysql:host=localhost:3306;dbname=ratrapage",
            "root",
            "");
         } catch (\Throwable $th) {
                  die("Erreur de Connexion");
           }
         
         
     }

    //Methode Acces au donnees
 public function findAll():array{
   return $this->executeSelect("select * from $this->table" );
}


public function executeSelect(string $sql,array $data=[],$single=false){
   //prepare ==> requete avec parametres
   $stm= $this->pdo->prepare($sql);
   $stm->setFetchMode(\PDO::FETCH_CLASS,get_called_class());
   $stm->execute($data);
    // Helper::dd( $data);
   if($single){
      return  $stm->fetch() ;
   }else{
      return $stm->fetchAll(\PDO::FETCH_CLASS,get_called_class()); 
   }
 
}

public function executeUpdapte(string $sql,array $data=[],$single=false):int{
     return 0;
}


public function remove(int $id):int{
   //$sql="select * from categorie where id=$id" ;Jamais
   $sql="delete from $this->table where id=:x";//Requete preparee
   //prepare ==> requete avec parametres
   $stm= $this->pdo->prepare($sql);
   $stm->execute(["x"=>$id]);
   return  $stm->rowCount() ;
}
}