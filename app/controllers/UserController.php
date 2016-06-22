<?php

class UserController {

    function render($f3) {
      $f3->set('pagetitle','Login');
      $view=new View;
      echo $view->render('login.htm');
    }
}
?>
