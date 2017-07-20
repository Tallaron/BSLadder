<?php

set_time_limit(120); //extends the exec time from 30s (default) to 120s.

require_once 'inc/functions.inc.php';
require_once 'inc/bootstrap.inc.php';
require_once 'inc/settings.inc.php';



$data = [];
foreach($settings->get('BNET_CLASSES') as $key => $value) {
    $ladder = new \Entities\LadderData($key);
    $data[] = $ladder;
}



\Views\View::getInstance()->assign('data', $data);
\Views\View::getInstance()->assign('settings', $settings);
\Views\View::getInstance()->display('index.tpl');
