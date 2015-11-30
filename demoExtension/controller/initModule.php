<?php

define( 'thisModulePath', MODULES . 'demoExtension/' );

// Load standard settings

require_once 'Settings.php';


// Answer request if needed

require_once 'Request.php';


// Page route

require_once 'Route.php';


// Fetch Modals

ob_start();
require_once thisModulePath . 'model/modals.php';
$modals = ob_get_clean();


// Fetch Javascript

ob_start();
require_once thisModulePath . 'model/JS.php';
$JS = ob_get_clean();


// Output in format (not needed, and can't be used, if pageContent is just outputtet)

if(isset($pageContent))
{
    $return = array(
                    'pageContent' => $pageContent
                    );
    if(isset($modals)) $return['modals'] = $modals;
    if(isset($JS)) $return['js'] = $JS;
    exit(json_encode($return));
}
