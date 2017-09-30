<?php

session_start();
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', realpath(dirname(__FILE__)) . DS);
define('URL', "http://localhost/royaltyceramic/RoyaltyCeramicApp/royaltyceramic/");
require_once 'Config/Autoload.php';
Config\Autoload::run();
if (!isset($_REQUEST["withouttem"])) {
    if (isset($_SESSION["usuario"])) {
        require_once 'Views/templatedentro.php';
    } else {
        require_once 'Views/template.php';
    }
}
Config\Enrutador::run(new Config\Request());
?>