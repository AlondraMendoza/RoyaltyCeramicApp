<?php
header("Content-Type: text/html;charset=utf-8");
$productos = $datos["productos"];
?>
<b style="font-size: 1.3em">Selecciona el producto</b>

<div class="grid" >
    <div class="row cells<?php echo $productos->num_rows; ?>">
        <?php
        while ($fila = mysqli_fetch_assoc($productos)) {
            ?>
            <div class="cell" >
                <div class="image-container rounded" style="width: 200px;height: 200px">
                    <div class="frame">
                        <img src="<?php echo URL; ?>Views/template/imagenes/<?php echo $fila["Imagen"]; ?>" height="190px;" width="190px;" title="<?php echo $fila["Nombre"]; ?>">        
                    </div>
                    <div class="image-overlay op-green">
                        <h2><?php echo $fila["Nombre"]; ?></h2>
                        <p>
                            <?php
                            $pendientes = Models\Productos::ListarProductosHornoFechaCProd($datos["dia"], $fila["HornosId"], $fila["CProductosId"]);
                            ?>
                            <?php echo $pendientes; ?> productos pendientes de clasificación
                        </p>
                    </div>
                </div>
            </div>
        <?php }
        ?>
    </div>   
</div>