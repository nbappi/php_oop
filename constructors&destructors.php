<?php 

class UserData{
	public $user, $userid;
	public function __construct($userName, $userid){
        $this->user = $userName;
        $this->userid = $userid;

        echo "Username is $this->user and id is $this->userid";
	}

	public function __destruct(){
       unset($this->user);
       unset($this->userid);
	}
}

$user = "Bappi";
$id = "562";

$userObj = new UserData($user, $id);