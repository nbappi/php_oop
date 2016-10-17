<?php
class php{
	private $cat, $frame;

	public function setCat($a){
		$this->cat = $a;
	}

	public function getCat(){
		return $this->cat;
	}

	public function setFrame($a){
		$this->frame = $a;
	}

	public function getFrame(){
		return $this->frame;
	}
}

$php = new php;
$php->setCat("OOP");
$php->setFrame("Spring");

// $java = $php;   // copy by reference, not val
$java = clone $php;
$java->setFrame("Codeigniter");

echo $php->getCat()."<br />";
echo $php->getFrame()."<br />";

echo $java->getCat()."<br />";
echo $java->getFrame()."<br />";