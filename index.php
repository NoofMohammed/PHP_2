<?php
class Fruit{
     public  $fruit1 = "orange";
     private  $fruit2 = "banana";
     public  $fruit3 = "watermelon";
     // Constructor class(1)
     // public function __construct($fruit1, $fruit3){
     //      $this->fruit1 = $fruit1;
     //      $this->fruit3= $fruit3;
     // }

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
// use Constructor class(1)
// $anotherFruit = new Fruit("Kiwi", "apple");
// echo $anotherFruit->fruit1;
// echo $anotherFruit->fruit3;
// ----------------------------------------------******-----------------------------------------
class Apple extends Fruit{
     public $benefits="Weight Loss";
     // Constructor class (2)
     public function __construct($benefits){
          $this->benefits = $benefits;
     }
}
// $favoriteFruits = new Apple();
// echo $favoriteFruits->fruit1;
// echo $favoriteFruits->benefits;
//  use Constructor class (2)
$useful = new Apple("fastDigestion");
echo $useful->benefits;

// -------------------------------------******------------------------------------------
class Food{
     private $vegetable = "potato";
     public $favoriteVegetable = "zucchini";
     // getters
     public function getVegetable(){
          return $this->vegetable;
     }
     // setters
     public function setVegetable($newVegetable){
          $this->vegetable = $newVegetable;
     }

     // Constructor class(3)
     public function __construct($favoriteVegetable){
          $this->favoriteVegetable = $favoriteVegetable;
     }
}
// $vegetable1= new Food();
// // getters
// echo $vegetable1->getVegetable();
// // setters
// echo $vegetable1->setVegetable("tomato");
// echo $vegetable1->getVegetable();

// use Constructor class(3)
$vegetables = new Food("cucumber");
echo $vegetables->favoriteVegetable;
?>