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

class Food{
     private $vegetable = "potato";
     // getters
     public function getVegetable(){
          return $this->vegetable;
     }
     // setters
     public function setVegetable($newVegetable){
          $this->vegetable = $newVegetable;
     }
}
$vegetable1= new Food;
// getters
echo $vegetable1->getVegetable();
// setters
echo $vegetable1->setVegetable("tomato");
echo $vegetable1->getVegetable();
?>