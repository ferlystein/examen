<?php class Presentation extends Rendez_Vous{
     protected string $type;

     public function __construct()
     {
        parent::__construct();
        $this->type='presentation';
     }

     /**
      * Get the value of type
      */ 
     public function getType()
     {
          return $this->type;
     }

     /**
      * Set the value of type
      *
      * @return  self
      */ 
     public function setType($type)
     {
          $this->type = $type;

          return $this;
     }
}