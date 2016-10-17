<?php 
final class BaseClass {
   final public function myMethod() {
      echo "BaseClass method called";
   }
}
 
class DerivedClass extends BaseClass {       // no extends BaseClass using final  // error fatal error
   //this will cause Compile error
   public function myMethod() {             // no override function for parent class
      echo "DerivedClass method called";
   }
}
 
$c = new DerivedClass();
$c->myMethod();