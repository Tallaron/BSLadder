<?php

require_once 'inc/functions.inc.php';
require_once 'inc/bootstrap.inc.php';
require_once 'inc/settings.inc.php';



$data = [];
foreach($settings->get('DATA') as $key => $file) {
    $ladder = new \Entities\LadderData($file);
    $ladder->setClass($key);
    $data[] = $ladder;
}







\Views\View::getInstance()->assign('data', $data);
\Views\View::getInstance()->assign('settings', $settings);
\Views\View::getInstance()->display('index.tpl');
