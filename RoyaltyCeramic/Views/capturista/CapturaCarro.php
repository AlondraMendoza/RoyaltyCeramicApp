<br><br>
<script>
    $(document).ready(function () {
        
    });
    
    function AbrirModelos(id)
    {
        $("#MostrarModelos").html('<span style="font-size:5em" class="mif-spinner5 mif-ani-spin"></span> <br>Cargando modelos');
        $("#MostrarModelos").load("ObtenerModelos", {"id": id, "withouttem": 1});
    }
    
    function AbrirColores(id)
    {
        $("#MostrarColores").html('<span style="font-size:5em" class="mif-spinner5 mif-ani-spin"></span> <br>Cargando colores');
        $("#MostrarColores").load("ObtenerColores", {"id": id, "withouttem": 1});
    }
    
    function VerOtros()
    {
        $("#DivOtros").fadeIn();
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
            <div id="MostrarModelos"></div>
            <hr style="background-color: gray;height: 1px;">
            <div id="MostrarColores"></div>
            <hr style="background-color: gray;height: 1px;">
            <div id="DivOtros" style="display: none">
                <table class="table">
                <tr>
                    <td style="width: 50%" class="center">
                        <b style="font-size: 1.3em" class="fg-darkEmerald">Cantidad de piezas:</b><br> 
                        <div class="input-control text full-size" style="height:80px;font-size: x-large">
                            <input type="text" id="piezas" placeholder="Teclea la cantidad">
                        </div>
                    </td>
                    <td class="center">
                        <b style="font-size: 1.3em" class="fg-darkEmerald">Fecha de quemado:</b><br>
                        <div class="input-control text big-input full-size" data-role="datepicker" id="datepicker" data-locale="es" data-format="dd-mm-yyyy">
                        <input type="text">
                        <button class="button"><span class="mif-calendar"></span></button>
                        </div>
                    </td>
                </tr>
                </table>
            </div>
        </div>
    </div>
</center>
