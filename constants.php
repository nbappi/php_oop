<?php 

class UserData{
	public $user, $userid;
	const NAME = "Abdullah Al Mamun";
	public function __construct($userName, $userid){
        $this->user = $userName;
        $this->userid = $userid;

        echo "Username is $this->user and id is $this->userid";
	}

	public function displayName(){
		echo "FullName is ".UserData::NAME;
	}

	public function __destruct(){
       unset($this->user);
       unset($this->userid);
	}
}

$user = "Bappi";
$id = "562";

$userObj = new UserData($user, $id);

echo "</br>";
$userObj->displayName();

echo "<br />";

echo "Outside Constant: ".$userObj::NAME;

// use const keyword

// Deffernce between const vs variable

// 1. const all time public , no access modiffer use    vs variable access modiffer( public, protected, private) use any time
// 2. const name block letter  vs variable with $ and small letter
// 3. No change value  vs can change value .


// Declaration : className :: const_name   and classObj::const_name
