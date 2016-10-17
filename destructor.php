<?php
  class person{
  	public $name, $age, $id;

  	// constructor Method is a magic method
  	// When instance or object create at a time is auto loaded.
    public function __construct( $name , $age){
    	$this->name = $name;
    	$this->age = $age;
    }

    public function setId($id){
       $this->id = $id;
    }

    // destructor Method is also masic method
    // when class destroy while do to the work   
    public function __destruct(){
       if( !empty($this->id)){
          echo "Saving person";
       }
    }
  }

  $personObj = new person("Atik hassan", 34);
  $personObj->setId(12);
  unset($personObj);