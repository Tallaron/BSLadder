<?php

namespace Controllers;

class IndexController extends AbstractController {

    
    public function showAction($realm, $season, $hardcore, $index, $highlight = false) {
        $data = [];
        foreach(self::getSettings()->get('BNET_CLASSES') as $key => $value) {
            $ladder = new \Entities\LadderData($key, $realm, $season, $hardcore, $index);
            $data[] = $ladder;
        }
        \Views\View::getInstance()->assign('highlight', $highlight);
        \Views\View::getInstance()->assign('data', $data);
    }
    
    
//    public function restartAction() {
//        $_SESSION = array();
//        unset($_SESSION);
//        session_destroy();
//        $this->redirect('');
//    }
    
}
