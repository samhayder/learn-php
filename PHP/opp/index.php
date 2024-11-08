<?php

// Constructor
class User
{
  public $name;
  public $password;

  public function __construct($name = 'admin', $password = 'root')
  {
    $this->name = $name;
    $this->$password = $password;
  }

  public function getUser()
  {
    echo $this->password . '<br/>';
    echo $this->name . '<br/>';
  }

  function __destruct(){
    $this->name;
    $this->password;
  }
}

$userMe = new User("samhayder", "se0181133");
$userMe->getUser();
