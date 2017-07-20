<?php

define('SMARTY_TPL_DIR', 'tpl/');
define('SMARTY_COMP_DIR', 'tpl_c/');
define('SMARTY_CACHE_DIR', 'cache/');
define('SMARTY_CACHE', false);
define('SMARTY_CACHE_LIFETIME', 60);

define('CONTENT_RELOAD_TIME', 3600); //seconds

$settings = new \Controllers\Settings();
$settings
        ->addContext('DATA', array(
            'barbarian' => 'http://d3.tallaron.de/ladder/json/eu/1/0/10/barbarian/1/10/1/10000/1',
            'crusader' => 'http://d3.tallaron.de/ladder/json/eu/1/0/10/crusader/1/10/1/10000/1',
            'dh' => 'http://d3.tallaron.de/ladder/json/eu/1/0/10/dh/1/10/1/10000/1',
            'monk' => 'http://d3.tallaron.de/ladder/json/eu/1/0/10/monk/1/10/1/10000/1',
            'necromancer' => 'http://d3.tallaron.de/ladder/json/eu/1/0/10/necromancer/1/10/1/10000/1',
            'wd' => 'http://d3.tallaron.de/ladder/json/eu/1/0/10/wd/1/10/1/10000/1',
            'wizard' => 'http://d3.tallaron.de/ladder/json/eu/1/0/10/wizard/1/10/1/10000/1',
            'team-2' => 'http://d3.tallaron.de/ladder/json/eu/1/0/10/team-2/1/10/1/10000/1',
            'team-3' => 'http://d3.tallaron.de/ladder/json/eu/1/0/10/team-3/1/10/1/10000/1',
            'team-4' => 'http://d3.tallaron.de/ladder/json/eu/1/0/10/team-4/1/10/1/10000/1',
        ))
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
