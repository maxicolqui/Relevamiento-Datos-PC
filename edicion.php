<?php
	include("cn.php");
	$usuarios = "SELECT * FROM bd_cpu";
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Carga de Datos</title>
        <link rel="stylesheet" href="mostrar.css">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    


    </head>

    <body>
        <div class="table container-table--edit">
            <div class="table_title table__title--edit">Datos Cargados</div>

            <div class="tabla-header">establecimiento</div>
            <div class="tabla-header">tipo</div>
            <div class="tabla-header">fecha relevamiento</div>
            <div class="tabla-header">encargado</div>
            <div class="tabla-header">ID producto</div> 
            <div class="tabla-header">aula</div>
            <div class="tabla-header">N° de maquina</div>
            <div class="tabla-header"></div>


            <?php $resultado = mysqli_query($conexion , $usuarios);
            while($row=mysqli_fetch_assoc($resultado)) { ?>

                <div class="item"><?php echo $row["nombre"];?></div>
                <div class="item"><?php echo $row["tipo"];?></div>
                <div class="item"><?php echo $row["fecha"];?></div>
                <div class="item"><?php echo $row["nombreE"];?></div>
                <div class="item"><?php echo $row["numero"];?></div>
                <div class="item"><?php echo $row["aula"];?></div>
                <div class="item"><?php echo $row["maquina"];?></div>


                
                <div class="btn-group">
                
                    <a href="actualizar.php?id=<?php echo $row["id"];?>" class="btn btn-primary active" aria-current="page">Editar</a>
                    <a href="eliminar.php?id=<?php echo $row["id"];?>" class="btn btn-primary">Eliminar</a>
                </div>


                <?php } mysqli_free_result($resultado);?>
        </div>
        <script src="confirmacion.js"></script>

        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    
    </body>
</html>