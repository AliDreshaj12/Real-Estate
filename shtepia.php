<?php
class Shtepia{
    private $id;
    
    private $Pershkrimi;
    private $Qmimi;
    private $Emri;
    private $image;

    public function __construct( $p, $q, $e,$i){
        $this->Pershkrimi=$p;
        $this->Qmimi=$q;
        $this->Emri=$e;
        $this->image=$i;
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
    public function getImage(){
        return $this->image;
    }
    public function setImage($i){
        $this->image = $i;
    }

    public function __toString(){
        return "Shtepia: ".$this->Emri." dhe qmimi ".$this->Qmimi;
    }


}
?>