<table class="table hovered border">
    <?php
    $productos = $datos["productos"];
    while ($fila = mysqli_fetch_assoc($productos)) {
        ?>
        <tr>
            <td>
                <?php echo $fila["IdProductos"]; ?>
            </td>
            <td>
                <?php echo $fila["NombreModelo"]; ?>
            </td>
        </tr>
    <?php } ?>
</table>