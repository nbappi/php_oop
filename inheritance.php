<?php

class user{
   public $name;
   public $email;

   public function __construct($name, $email){
   	  $this->name = $name;
   	  $this->email = $email;
   }

   public function getType(){
      echo $this->name . " is a ". $this->type;
   }
}

class admin extends user {    // use extends keyword for inherite
   public $type = "Admin";

   public function __construct($n, $e){
   	 parent::__construct($n, $e);       // declare parent constructor
   }
}

class member extends user {
   public $type = "Member";

   public function __construct($name, $em){
   	  parent::__construct($name, $em);      // declare parent constructor
   }

   public function getType(){    // override function for parent class
   	  echo $this->name . " is a ". $this->type . " Override";
   }
}

$adminObj = new admin("Abdul", "admin@adv.com");
$memberObj = new member("Rahim", "member@acd.com");

$adminObj->getType();
echo "<br />";

$memberObj->getType();