<?php

class PresentationController {

    function render($f3){
      $json = file_get_contents('http://app.contellio.com/api/public/random-item');
      $obj = json_decode( $json, true );
      $bkg_url = $obj['cover_url'];
      $pagetitle = $obj['title'];
      $f3->set('pagetitle', $pagetitle);
      $f3->set('bkg_url', $bkg_url);
      $view=new View;
      echo $view->render('presentation.htm');
    }
}
?>
