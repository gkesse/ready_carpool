<?php
//===============================================
spl_autoload_register(function ($_className) {
    $lPrefix = 'dev\\';
    $lLength = strlen($lPrefix);
    if (strncmp($lPrefix, $_className, $lLength) !== 0) {
        return;
    }
    $lRelativeClass = substr($_className, $lLength);
    require $lRelativeClass . ".php";
});
//===============================================
?>