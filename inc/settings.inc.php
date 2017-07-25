<?php

define('BASE_DIR', '/BSLadder'); //'' if live, if root

define('SMARTY_TPL_DIR', 'tpl/');
define('SMARTY_COMP_DIR', 'tpl_c/');
define('SMARTY_CACHE_DIR', 'cache/');
define('SMARTY_CACHE', false);
define('SMARTY_CACHE_LIFETIME', 60);

define('CONTENT_RELOAD_TIME', 3600); //seconds

define('JSON_URL_PATTERN', 'http://d3.tallaron.de/ladder/json/%s/%d/%d/%d/%s/1/10/1/10000/1');


$settings = new \Controllers\Settings();
$settings
        ->addContext('BNET_CLASSES', array(
            'barbarian'     => 'Barbarian',
            'crusader'      => 'Crusader',
            'dh'            => 'Demon Hunter',
            'monk'          => 'Monk',
            'necromancer'   => 'Necromancer',
            'wd'            => 'Witch Doctor',
            'wizard'        => 'Wizard',
            'team-2'        => '2 Player',
            'team-3'        => '3 Player',
            'team-4'        => '4 Player',));
