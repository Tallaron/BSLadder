<?php

set_time_limit(120); //extends the exec time from 30s (default) to 120s.

require_once 'inc/functions.inc.php';
require_once 'inc/bootstrap.inc.php';
require_once 'inc/settings.inc.php';

\Controllers\AbstractController::setSettings($settings);

$fc = new \Controllers\FrontController(BASE_DIR);
$fc->run();


\Views\View::getInstance()->assign('settings', $settings);
\Views\View::getInstance()->display('index.tpl');
