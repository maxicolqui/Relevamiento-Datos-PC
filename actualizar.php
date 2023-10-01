<?php
	include("cn.php");
    $id = $_GET["id"];
	$usuarios = "SELECT * FROM bd_cpu WHERE id ='$id' ";
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>actualizar</title>
        <link rel="stylesheet" href="mostrar.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">


    </head>

    <body>
        <form class="table container-table--edit" action="procesar_actualizar.php" method="post">
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

                <input type="hidden" class="item" value="<?php echo $row["id"];?>" name="id">
                <input type="text" class="table__input" value="<?php echo $row["nombre"];?>"name="nombre">
                <input type="text" class="table__input" value="<?php echo $row["tipo"];?>"name="tipo">
                <input type="text" class="table__input" value="<?php echo $row["fecha"];?>"name="fecha">
                <input type="text" class="table__input" value="<?php echo $row["nombreE"];?>"name="nombreE">
                <input type="text" class="table__input" value="<?php echo $row["numero"];?>"name="numero">
                <input type="text" class="table__input" value="<?php echo $row["aula"];?>"name="aula">
                <input type="text" class="table__input" value="<?php echo $row["maquina"];?>"name="maquina">


                <?php } mysqli_free_result($resultado) ;?>
                <button type="submit" value="Actualizar" class="btn btn-outline-primary">Actualizar</button>

            </form>
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    </body>
</html>