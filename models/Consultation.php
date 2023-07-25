<?php
class Consultation extends Rendez_Vous{
    private String $medecin;
    public array $medicaments;

    public function __construct()
    {
       parent::__construct();
       $this->type='consultation';
    }

    /**
     * Get the value of medecin
     */ 
    public function getMedecin()
    {
        return $this->medecin;
    }

    /**
     * Set the value of medecin
     *
     * @return  self
     */ 
    public function setMedecin($medecin)
    {
        $this->medecin = $medecin;

        return $this;
    }

    /**
     * Get the value of medicaments
     */ 
    public function getMedicaments()
    {
        return $this->medicaments;
    }

    /**
     * Set the value of medicaments
     *
     * @return  self
     */ 
    public function setMedicaments($medicaments)
    {
        $this->medicaments = $medicaments;

        return $this;
    }
}