<?php
class equation extends QuadraticEquation{
 public function gpt(){
     return $this->giai();
 }
 public function seta($_a){
     $this->a=$_a;
 }
 public function setb($_b){
     $this->b=$_b;
 }
 public function setc($_c){
     $this->c=$_c;
 }
}
$g=new equation;
if (isset($_POST['giai'])) {
    $g->seta($_POST['a']);
    $g->setb($_POST['b']);
    $g->setc($_POST['c']);
    $g->gpt();
}

