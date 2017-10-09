<br><br>
<script type="text/javascript">
    function AbrirModelos()
    {
        $("#ModeloProd").fadeIn();
        $("#MostrarProd").fadeOut();
    }
</script>
<h1><b> CAPTURA DE CARRO</b></h1><br>
<h2><center>Ingresar Datos</center></h2><br>
<div id="Inicio">
    <strong><h3>Clave del Carro:</h3></strong>
    <div class="input-control text big-input full-size">
    <input type="text" id="cveCarro" placeholder="Clave del carro">
    </div>
    <strong><h3>Número de horno:</h3></strong>
    <div class="input-control select big-input full-size">   
    <select id="SeleccionP">
    <?php
    $productos = $datos["hornos"];
    while ($fila = mysqli_fetch_assoc($productos)) {
    ?><option value="<?php echo $fila["IdHornos"]; ?>"><?php echo $fila["NHorno"]; ?></option><?php }?>
    </select>
    </div>
</div>
<div id="MostrarProd">
    <strong><h3>Producto:</h3></strong>
    <div data-role="group" data-group-type="one-state">   
    <?php
    $productos = $datos["listaproductos"];
    while ($fila = mysqli_fetch_assoc($productos)) {
    ?>
        <button class="button" style='width: 210px; height: 210px;' onclick="AbrirModelos(<?php echo $fila["IdCProductos"];?>)">
    <input type="image" src="<?php echo URL; ?>Views/template/imagenes/<?php echo $fila["Imagen"];?>" height="190px;" width="190px;" title="<?php echo $fila["Nombre"]; ?>"/><b>
    <?php echo $fila["Nombre"]; ?></b></button><?php }?>
    </div>
</div>
<div id="ModeloProd" style="display: none">
    <strong><h3>Modelos:</h3></strong>
    <div data-role="group" data-group-type="one-state">   
    <?php
    $productos =$datos["modelos"];
    while ($fila = mysqli_fetch_assoc($productos)) {
    ?>
        <button class="button" style='width: 210px; height: 210px;'>
    <input type="image" src="<?php echo URL; ?>Views/template/imagenes/<?php echo $fila["Imagen"];?>" height="190px;" width="190px;" title="<?php echo $fila["Nombre"]; ?>"/><b>
    <?php echo $fila["Nombre"]; ?></b></button><?php }?>
    </div>
</div>