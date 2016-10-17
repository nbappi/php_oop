<?php
$arr = array("HTML", "PHP", "Javascript");
$coding = ArrayObject($arr);
$coding->append("Java");
$iterator = $coding->getIterator();

while($iterator->valid()){
   echo $iterator->current()."<br />";
   $iterator->next();
}