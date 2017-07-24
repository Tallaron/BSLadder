<?php

namespace Controllers;

class IndexController extends AbstractController {

    
    public function indexAction() {
        $this->redirect('ladder/show/eu/1/0/11');
    }
    
    
//    public function restartAction() {
//        $_SESSION = array();
//        unset($_SESSION);
//        session_destroy();
//        $this->redirect('');
//    }
    
}
