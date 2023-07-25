<?php
class Rendez_Vous extends Model{
    protected int $id;
    protected String $datedate;
    protected string $type;

 //ManyToOne Navigabilite
 protected Patient $patientModel;

 public function __construct()
 {
     parent::__construct();
     $this->table="article";
 }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of datedate
     */ 
    public function getDatedate()
    {
        return $this->datedate;
    }

    /**
     * Set the value of datedate
     *
     * @return  self
     */ 
    public function setDatedate($datedate)
    {
        $this->datedate = $datedate;

        return $this;
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