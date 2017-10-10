<script>
    function CargarHornos(d)
    {
        $("#divclasificacion").html('');
        $("#tdhornos").html('<span style="font-size:5em" class="mif-spinner5 mif-ani-spin"></span> Cargando hornos con productos pendientes de clasificar...');
        $("#tdhornos").load("clasificador/ObtenerHornosPendientes", {"dia": d, "withouttem": 1}, function () {
            CargarProductos();
        });
    }
    function CargarProductos()
    {
        var d = $("#fecha").val();
        var horno = $("#hornos").val();
        $("#divclasificacion").html('<span style="font-size:5em" class="mif-spinner5 mif-ani-spin"></span> <br>Cargando hornos con productos pendientes de clasificar...');
        $("#divclasificacion").load("clasificador/ProductosHornoFecha", {"fecha": d, "withouttem": 1, "horno": horno});
    }
    function CargarModelos(cprod)
    {
        var d = $("#fecha").val();
        var horno = $("#hornos").val();
        $("#divclasificacion").html('<span style="font-size:5em" class="mif-spinner5 mif-ani-spin"></span> <br>Cargando hornos con productos pendientes de clasificar...');
        $("#divclasificacion").load("clasificador/ModelosHornoFechaProducto", {"fecha": d, "withouttem": 1, "horno": horno, "cprod": cprod});
    }
    $(document).ready(function () {
        CargarProductos();
    });
</script>

<h1><b style="color: #333333">CLASIFICACIÓN</b></h1><br>
<center>
    <div class="panel warning" data-role="panel">
        <div class="heading">
            <span class="icon mif-stack fg-white bg-darkOrange"></span>
            <span class="title">Filtros</span>
        </div>
        <div class="content">
            <table class="table">
                <tr>
                    <td style="width: 50%" class="center">
                        <b style="font-size: 1.3em" class="fg-darkEmerald">Selecciona la fecha de captura:</b><br> 
                        <div class="input-control text full-size" style="height:80px;font-size: x-large" data-role="datepicker" data-locale="es" data-format="dd/mm/yyyy" id="datepicker" data-on-select="CargarHornos(d)">
                            <input type="text" id="fecha" value="<?php echo $datos["hoy"]; ?>">
                            <button class="button" style="height: 80px"><span class="mif-calendar"></span></button>
                        </div>
                    </td>
                    <td id="tdhornos" class="center">
                        <b style="font-size: 1.3em" class="fg-darkEmerald">Selecciona el horno de quemado:</b><br>
                        <div id="" class="input-control select full-size" style="height: 80px;">
                            <select onchange="CargarProductos()" id="hornos">
                                <?php
                                $rhornos = $datos["hornos"];
                                if ($rhornos->num_rows == 0) {
                                    ?><option value="0" >No hay productos pendientes de clasificar</option><?php
                                } else {
                                    while ($fila = mysqli_fetch_assoc($rhornos)) {
                                        $pendientes = Models\Hornos::ListaProductosDia($datos["hoyingles"], $fila["IdHornos"]);
                                        $npen = $pendientes->num_rows;
                                        ?>
                                        <option value="<?php echo $fila["IdHornos"]; ?>"><?php echo "Horno " . $fila["NHorno"] . " - " . $npen . " prod. pendiente(s) de clasificar"; ?></option>
                                        <?php
                                    }
                                }
                                ?>
                            </select>
                        </div>
                    </td>
                </tr>
            </table>
            <hr style="background-color: gray;height: 1px;">
            <div id="divclasificacion"></div>

        </div>
    </div>
</center>