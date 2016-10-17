<?php 


class userData{
	// static property
	public static $age = 20;  // use static keyword

	public static function display(){
		echo "Method Age is : ". self::$age;  // in class declare property =>   self::propertyName
	}
}

echo "Property Age is : " .userData::$age. "<br />";   // property display  => className::property
userData::display();  // method display => className::methodName

// No object declare for class

// "  :: " is scope resulation