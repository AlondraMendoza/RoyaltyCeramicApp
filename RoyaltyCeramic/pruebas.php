<?php

require_once 'Config/Autoload.php';
Config\Autoload::run();
$modelo = new Models\Modelos();
$modelo->set("IdModelo", "1");
$info = $modelo->Vista();
print $info["Nombre"];
?>