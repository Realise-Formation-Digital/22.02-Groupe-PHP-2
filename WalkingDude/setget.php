<?php
   class Person{
      private $name;
      public function setName($name){
         $this->name = $name;
      }
      public function getName(){
         return 'Welcome '. $this->name;
      }
   }
   $person = new Person();
   $person->setName('Pat');
   $name = $person->getName();
   echo $name;
?>