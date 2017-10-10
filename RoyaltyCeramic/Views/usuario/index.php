<br><br><br>
<h1>
    Menú 

</h1>
<center>
    <?php
    $lista = $datos["listaperfiles"];
    while ($fila = mysqli_fetch_assoc($lista)) {
        ?>
        <div class = "panel">
            <div class = "heading bg-lightGray " >
                <span class = "icon mif-home bg-darkGray "></span>
                <span class = "title fg-black"><?php echo $fila["Nombre"]; ?></span>
            </div>
            <div class = "content">
                <br><br>
                <?php
                $perfil = new \Models\Perfiles();
                $perfil->set("IdPerfiles", $fila["IdPerfiles"]);
                $menus = $perfil->ObtenerMenus();
                while ($m = mysqli_fetch_assoc($menus)) {
                    ?>
                    <button class = "command-button icon-left bg-<?php echo $m["Color"]; ?> fg-white" onclick = "window.location = '<?php echo $m["Ruta"] ?>'">
                        <span class = "icon mif-<?php echo $m["Icono"]; ?>"></span>
                        <?php echo $m["Nombre"]; ?>
                        <small><?php echo $m["Descripcion"] ?></small>
                    </button>
                <?php } ?>
                <br><br>
                <br><br>

            </div>
        </div>
        <?php
    }
    ?>
    <br><br>


</center>
<br>
