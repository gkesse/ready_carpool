<?php
//===============================================
session_start();
//===============================================
spl_autoload_register(function ($_className) {
    $lPrefix = 'App\\';
    $lLength = strlen($lPrefix);
    if (strncmp($lPrefix, $_className, $lLength) !== 0) {
        return;
    }
    $lRelativeClass = substr($_className, $lLength);
    require $lRelativeClass . ".php";
});
//===============================================
?>