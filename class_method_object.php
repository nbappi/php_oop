<?php
   class Person{
       public $name = "Nuruzzaman Bappi";   // property
       public $age;

       // Method
       public function personName(){
          echo "Person Name is ". $this->name;  // $this gives you access to the object variable
       }

       public function personAge($age){
           $this->age = $age;
           echo "Person age is ". $this->age;
       }
   }

   $objectPerson = new Person;
   echo $objectPerson->name . "<br />";    // Nuruzzaman Bappi
   $objectPerson->name = "Md. Nuruzzaman Bappi";
   $objectPerson->personName();   //  Md. Nuruzzaman Bappi

   echo "<br />";
   $objectPerson->personAge(27);
?>