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
