<?php
    include("cn.php");
    $usuarios = "SELECT * FROM bd_cpu3";
    header("Content-Type: application/vnd.ms-excel; charset=iso-8859-1");
    header("Content-Disposition: attachment; filename=relevamientos.xls");
?>
<link rel="stylesheet" href="mostrar.css">
<meta charset="UTF-8">
<table border="1" >    
            <caption >Datos de Relevamiento</caption>
            <h2>Instituto de Educacion Nuevo Horizonte</h2>
            <tr>            
                <th>ID producto</th>
                <th>Monitor</th>
                <th>Serie</th>
                <th>Teclado</th>
                <th>Estado</th>
                <th>Mouse</th>
                <th>Estado</th>
                <th>Parlante</th>
                <th>Estado</th>
                <th>N° maquina</th>
                
            </tr>

            <?php $resultado = mysqli_query($conexion , $usuarios);
            while($row=mysqli_fetch_assoc($resultado)) { ?>
            <tr>
                <td><?php echo $row["numero"];?></td>
                <td><?php echo $row["marca"];?></td>
                <td><?php echo $row["estado"];?></td>
                <td><?php echo $row["marcaT"];?></td>
                <td><?php echo $row["estadoT"];?></td>
                <td><?php echo $row["marcaMouse"];?></td>
                <td><?php echo $row["estadoMouse"];?></td>
                <td><?php echo $row["marcaP"];?></td>
                <td><?php echo $row["estadoP"];?></td>
                <td><?php echo $row["maquina"];?></td>
                
            </tr>
                <?php } mysqli_free_result($resultado);?>
</table>