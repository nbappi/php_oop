<?php
  class person{
  	public $name, $age;

  	// constructor Method is a magic method
  	// When instance or object create at a time is auto loaded.
    public function __construct( $name , $age){
    	$this->name = $name;
    	$this->age = $age;
    }

    public function personDetails(){
    	echo "Person name is  $this->name and Person age is  $this->age "; 
    }
  }

  $personObj = new person("Atik hassan", 34);
  $personObj->personDetails();