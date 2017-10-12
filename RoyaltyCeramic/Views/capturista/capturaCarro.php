<br><br>
<script>
    function AbrirModelos(id)
    {
        $("#MostrarModelos").html('<span style="font-size:5em" class="mif-spinner5 mif-ani-spin"></span> <br>Cargando modelos');
        $("#MostrarModelos").load("capturista/ObtenerModelos", {"id": id, "withouttem": 1});
    }
</script>
<h1><b> CAPTURA DE PRODUCTOS</b></h1><br>
<center>
    <div class="panel warning" data-role="panel">
        <div class="heading">
            <span class="icon mif-stack fg-white bg-darkOrange"></span>
            <span class="title">Ingresar datos</span>
        </div>
        <div class="content">
            <table class="table">
                <tr>
                    <td style="width: 50%" class="center">
                        <b style="font-size: 1.3em" class="fg-darkEmerald">Clave del carro:</b><br> 
                        <div class="input-control text full-size" style="height:80px;font-size: x-large">
                            <input type="text" id="carro" placeholder="Teclea la clave del carro">
                        </div>
                    </td>
                    <td class="center">
                        <b style="font-size: 1.3em" class="fg-darkEmerald">Selecciona el horno:</b><br>
                        <div class="input-control select full-size" style="height: 80px;">   
                            <select id="SeleccionP">
                                <?php
                                $productos = $datos["hornos"];
                                while ($fila = mysqli_fetch_assoc($productos)) {
                                    ?><option value="<?php echo $fila["IdHornos"]; ?>">
                                        <?php echo "Horno " . $fila["NHorno"]; ?></option><?php } ?>
                            </select>
                        </div>
                    </td>
                </tr>
            </table>
            <hr style="background-color: gray;height: 1px;">
            <div id="MostrarProd">
                <br>
                <b style="font-size: 1.3em" class="fg-darkEmerald">Selecciona el Producto:</b>
                <div data-role="group" data-group-type="one-state">   
                    <?php
                    $productos = $datos["listaproductos"];
                    while ($fila = mysqli_fetch_assoc($productos)) {
                        ?>
                        <button class="button" style='width: 210px; height: 210px;' onclick="AbrirModelos(<?php echo $fila["IdCProductos"]; ?>)">
                            <input type="image" src="<?php echo URL; ?>Views/template/imagenes/<?php echo $fila["Imagen"]; ?>" height="190px;" width="190px;" title="<?php echo $fila["Nombre"]; ?>"/><b>
                                <?php echo $fila["Nombre"]; ?></b></button><?php } ?>
                </div>
            </div>
            <hr style="background-color: gray;height: 1px;">
            <div id="MostrarModelos">  
            </div>
        </div>
    </div>
</center>
<div id="prueba"></div>
    <button onclick="hola()">Aquiiiiiií</button>
<script>
function hola(){
    alert("entro");
    $("#prueba").load("capturista/Prueba");
}    
</script>
