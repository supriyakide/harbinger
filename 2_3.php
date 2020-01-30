<?php
  class assig1{
   public $name = "priya";

    public function sayHello($newName){
      echo "My Name is :-".$newName;
    }
  }
  $objName = new assig1();
  echo $objName->name;
  echo '<br/>';
  $objName->sayHello('priya');