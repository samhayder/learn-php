<?php

class Controller {
  public function view($path, $data = []) {
    if (file_exists("../app/views/template/" . $path . ".php")){
      include "../app/views/template/" . $path . ".php";
    } else {
      include "../app/views/template/404.php";
    }
  }
}