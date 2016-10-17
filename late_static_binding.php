<?php

// use self parent class define 
// use static parent and child class eccess.
class php{
	public static function framework(){
		echo static::getClass();
	}

	public static function getClass(){
       return __class__;
	}
}

class phpChild extends php{
	public static function getClass(){
		return __class__;
	}
}
echo "Use static :<br />";
$php =  new php;
$php->framework();

echo "<hr />";

$phpChild = new phpChild;
$phpChild->framework();


