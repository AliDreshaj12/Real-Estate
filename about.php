<?php
class About{
    private $id;
    private $img;

    public function __construct( $i){
        $this->img=$i;
        
    }
    public function getImage(){
        return $this->img;
    }
    public function setImage($i){
        $this->img = $i;
    }
}
?>