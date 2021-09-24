<?php
class Fruit{
     public  $fruit1 = "orange";
     private  $fruit2 = "banana";

   public function getAllFruit(){
     //    return " I like $this->fruit1 and $this->fruit2";
          echo  " I like $this->fruit1 and $this->fruit2";
     }
     public function getFruit1(){
     //     return "give me $this->fruit1";
         echo "give me $this->fruit1";
     }
}
$fruit = new Fruit();
$fruit->getAllFruit(). '<br>';
$fruit->getFruit1();

class Apple extends Fruit{
     public $benefits="Weight Loss";
}
$fruit3 = new Apple;
echo $fruit3->fruit1;
echo $fruit3->benefits;
?>