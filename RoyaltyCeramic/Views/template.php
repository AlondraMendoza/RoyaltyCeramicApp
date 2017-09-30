<?php

namespace Views;

$template = new Template();

class Template {

    public function __construct() {
        ?>
        <!DOCTYPE html >
        <html>
            <head>
                <meta charset="UTF-8">
                <link href="<?php echo URL; ?>Views/template/css/metro.css" rel="stylesheet">
                <script src="<?php echo URL; ?>Views/template/js/jquery.js"></script>
                <link href="<?php echo URL; ?>Views/template/css/metro-icons.min.css" rel="stylesheet">
                <script src="<?php echo URL; ?>Views/template/js/metro.js"></script>
                <script type="text/javascript">
                    $(document).ready(function () {

                    });
                </script>
                <title>Royalty Ceramic</title>
            </head>
            <body>
                <div class="app-bar" data-role="appbar" style="background-color: #5a0303;padding-right: 20px;">
                    <a class="app-bar-element" href="<?php echo URL; ?>inicio/index"><img src="<?php echo URL; ?>Views/template/img/logo.png" style="height: 45px;width: 180px"></a>
                    <ul class="app-bar-menu">
                        <li><a href="">Inicio</a></li>
                        <li><a href="">Cuenta</a></li>
                        <li><a href="">Contacto</a></li>
                        <ul class="app-bar-menu">
                            <li><a href="">Soporte</a></li>
                            <li>
                                <a href="" class="dropdown-toggle">Productos</a>
                                <ul class="d-menu" data-role="dropdown">
                                    <li><a href="">Línea Residencial</a></li>
                                    <li><a href="">Línea Comercial</a></li>
                                    <li><a href="">Lavabos</a></li>
                                    <li><a href="">Mingitorios</a></li>
                                    <li class="divider"></li>
                                    <li><a href="" class="dropdown-toggle">Otros productos</a>
                                        <ul class="d-menu" data-role="dropdown">
                                            <li><a href="">Accesorios</a></li>
                                            <li><a href="">Producto especial 2</a></li>
                                            <li><a href="">Producto especial 3</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href=""></a></li>
                            <li><a href=""></a></li>
                        </ul>
                    </ul>
                    <div class="app-bar-element place-right">
                        <a class="fg-white" href="<?php echo URL; ?>inicio/Login">Iniciar Sesión</a>
                    </div>
                </div>
                <div class="contenido" style="padding-left: 30px;padding-right: 30px"><br>
                    <?php
                }

                public function __destruct() {
                    ?>
                </div>
            </body>
        </html>

        <?php
    }

}
?>