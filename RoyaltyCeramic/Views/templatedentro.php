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
                        Nombre();
                    });
                    function Nombre()
                    {
                        $.get("<?php echo URL; ?>usuario/NombreCompleto?withouttem=1", function (data) {
                            $("#nomper").html(data);
                        });
                    }
                </script>
                <title>Royalty Ceramic</title>
            </head>
            <body>

                <div class="app-bar fixed-top" data-role="appbar" style="background-color: #B82134;padding-right: 20px;">
                    <a class="app-bar-element" href="index.html"><img src="logo.png" style="height: 45px;width: 180px"></a>

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
                        <a class="dropdown-toggle fg-white"> <img src="img/user.png" width="35px;" style="border-radius: 50%"> &nbsp;&nbsp;<?php echo $_SESSION["usuario"]; ?></a>
                        <div class="app-bar-drop-container bg-white fg-dark place-right"
                             data-role="dropdown" data-no-close="true">
                            <div class="padding10" style="width: 200px;">
                                <center>
                                    <img src="img/user.png" style="width: 100px;">
                                    <br>
                                    <b id="nomper"></b><br>
                                    Gerencia<br>
                                    <i>Gerente</i>
                                    <br><button class="text-shadow block-shadow-success button success" onclick="window.location = '<?php echo URL . "usuario/Salir" ?>'">Salir</button>
                                </center>
                            </div>
                        </div>
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