<?php
    include("cn.php");
    $usuarios = "SELECT * FROM bd_cpu";
    header("Content-Type: application/vnd.ms-excel; charset=iso-8859-1");
    header("Content-Disposition: attachment; filename=relevamientos.xls");
?>
<link rel="stylesheet" href="mostrar.css">
<meta charset="UTF-8">
<table border="1" >   
            <caption >Datos de Relevamiento</caption>
            <h2>Instituto de Educacion Nuevo Horizonte</h2>
            <tr>            
                <th>establecimiento</th>
                <th>tipo</th>
                <th>fecha relevamiento</th>
                <th>encargado</th>
                <th>ID producto</th>
                <th>aula</th>
                <th>N° de maquina</th> 
                
            </tr>

            <?php $resultado = mysqli_query($conexion , $usuarios);
            while($row=mysqli_fetch_assoc($resultado)) { ?>
            <tr>
                <td><?php echo $row["nombre"];?></td>
                <td><?php echo $row["tipo"];?></td>
                <td><?php echo $row["fecha"];?></td>
                <td><?php echo $row["nombreE"];?></td>
                <td><?php echo $row["numero"];?></td>
                <td><?php echo $row["aula"];?></td>
                <td><?php echo $row["maquina"];?></td>

                
            </tr>
                <?php } mysqli_free_result($resultado);?>
</table>