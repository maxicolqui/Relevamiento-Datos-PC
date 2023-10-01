<?php
    include("cn.php");
    $usuarios = "SELECT * FROM bd_cpu2";
    header("Content-Type: application/vnd.ms-excel; charset=iso-8859-1");
    header("Content-Disposition: attachment; filename=relevamientos.xls");
?>
<link rel="stylesheet" href="mostrar.css">
<meta charset="UTF-8">
<table border="1" >    
            <caption >Datos de Relevamiento</caption>
            <h2>Instituto de Educacion Nuevo Horizonte</h2>
            <tr>            
                <th>Procesador</th>
                <th>Modelo</th>
                <th>ID producto</th>
                <th>RAM</th>
                <th>Memoria</th>
                <th>tipo</th>
                <th>SO</th>
                <th>Virus</th>
                <th>conexion</th> 
                <th>N° maquina</th>
                
            </tr>

            <?php $resultado = mysqli_query($conexion , $usuarios);
            while($row=mysqli_fetch_assoc($resultado)) { ?>
            <tr>
                <td><?php echo $row["procesador"];?></td>
                <td><?php echo $row["modelo"];?></td>
                <td><?php echo $row["numero2"];?></td>
                <td><?php echo $row["ram"];?></td>
                <td><?php echo $row["alma"];?></td>
                <td><?php echo $row["tipo"];?></td>
                <td><?php echo $row["so"];?></td>
                <td><?php echo $row["virus"];?></td>
                <td><?php echo $row["inte"];?></td>
                <td><?php echo $row["maquina"];?></td>
                
            </tr>
                <?php } mysqli_free_result($resultado);?>
</table>