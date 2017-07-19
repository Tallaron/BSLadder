<?php

define('SMARTY_TPL_DIR', 'tpl/');
define('SMARTY_COMP_DIR', 'tpl_c/');
define('SMARTY_CACHE_DIR', 'cache/');
define('SMARTY_CACHE', false);
define('SMARTY_CACHE_LIFETIME', 60);

$settings = new \Controllers\Settings();
$settings
        ->addContext('DATA', array(
            'http://localhost/D3T/ladder/json/eu/1/0/10/barbarian/1/10/1/10000/1',
            'http://localhost/D3T/ladder/json/eu/1/0/10/crusader/1/10/1/10000/1',
            'http://localhost/D3T/ladder/json/eu/1/0/10/monk/1/10/1/10000/1',
        ));