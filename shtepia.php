<?php
class Shtepia{
    private $id;
    
    private $Pershkrimi;
    private $Qmimi;
    private $Emri;

    public function __construct( $p, $q, $e){
        $this->Pershkrimi=$p;
        $this->Qmimi=$q;
        $this->Emri=$e;
    }
    

    public function getPershkrimi(){
        return $this->Pershkrimi;
    }
    public function setPershkrimi($p){
        $this->Pershkrimi = $p;
    }

    public function getQmimi(){
        return $this->Qmimi;
    }
    public function setQmkimi($q){
        $this->Qmimi = $q;
    }

    public function getEmri(){
        return $this->Emri;
    }
    public function setEmri($e){
        $this->Emri = $e;
    }

    public function __toString(){
        return "Shtepia: ".$this->Emri." dhe qmimi ".$this->Qmimi;
    }


}
?>