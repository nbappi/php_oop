<?php
  abstract class php {
      public function framework(){
      	echo "Base Class __class__ : ". __class__. " <br />";
      	echo "Base Class get_class() : ". get_class($this). " <br />";
      }
  }

  class phpClass extends php{
      public function cms(){
      	echo "Child class __class__ : ".__class__."<br />";
      	echo "Child class get_class() : ".get_class($this)."<br />";
      }

      public function details(){
      	echo parent::framework();
      }
  }

  $childPhp = new phpClass;
  $childPhp->framework();
  echo "<hr />";
  $childPhp->cms();
  echo "<hr />";
  $childPhp->details();
?>