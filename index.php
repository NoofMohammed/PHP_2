<?php
class Fruit{
     private  $fruit1 = "orange";
     private  $fruit2 = "banana";

   public function getAllFruit(){
          echo  " I like $this->fruit1 and $this->fruit2";
     }
}
$fruit = new Fruit();
$fruit->getAllFruit();
?>