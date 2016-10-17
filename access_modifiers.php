// Access modifiers  (public, protected, private)

<?php
phpinfo();
  //  public use : parent class, childclass, classBject;
  // private use : only in class
  // protected : parent class , childclass , No classObject
  class parent{
  	public $age = 30;

  	public function display(){
       echo "In parent class " .$this->age;
  	}
  }

  class child extends parent{
      public function childDisplay(){
       echo "In child class " .$this->age;
  	}
  }

  $child = new child();
  $child->age;
  $child->display();
  $child->childDisplay();
?>