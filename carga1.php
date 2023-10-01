<?php
	include("cn.php");
	$usuarios = "SELECT * FROM bd_cpu ";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Carga de datos</title>
	<link rel="stylesheet" href="style3.css">
	<link rel="stylesheet" href="normalize.css">
	<link rel="stylesheet" href="estilos.css">
</head> 
<body>
    <main>
        
        <form action="insertar.php" method="post" class="formulario" id="formulario">


			<!--COMPONENTES INTERNOS-->
            <h2 class="formulario__subTitulo">Relevamientos del Establecimiento</h2>


            <div class="formulario__grupo" id="grupo__memoriaRam">
				<label for="memoriaRam" class="formulario__label">Nombre del Establecimiento</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="nombre" id="memoriaRam" placeholder="nombre del establecimiento">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">No se reconoce</p>
			</div>

            <div class="formulario__grupo-opciones" id="formulario__opciones">
                <!--Generacion-->
                <label for="generacion" class="formulario__label">Tipo</label>
				<select class="formulario__select" name="tipo" id="generacion" required>
                    <option >Escritorio</option>
                </select>

            </div>

			<div class="formulario__grupo" id="grupo__garantia">
                <label for="garantia" class="formulario__label">Fecha de relevamiento</label>
                <div class="formulario__grupo-input">
                    <input type="date" class="formulario__input" name="fecha" id="garantia" placeholder="fecha de la BIOS">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">No se reconoce</p>
            </div>

            <div class="formulario__grupo" id="grupo__memoriaRam">
				<label for="memoriaRam" class="formulario__label">Nombre del encargado de Relevamiento</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="nombreE" id="memoriaRam" placeholder="encargado">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">No se reconoce</p>
			</div>

            <div class="formulario__grupo" id="grupo__memoriaRam">
				<label for="memoriaRam" class="formulario__label">ID del Producto</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="numero" id="memoriaRam" placeholder="n° del producto">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">No se reconoce</p>
			</div>

            <div class="formulario__grupo" id="grupo__memoriaRam">
				<label for="memoriaRam" class="formulario__label">Aula</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="aula" id="memoriaRam" placeholder="n° de aula">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">No se reconoce</p>
			</div>

			<div class="formulario__grupo" id="grupo__memoriaRam">
				<label for="memoriaRam" class="formulario__label">N° de Maquina</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="maquina" id="memoriaRam" placeholder="n° de computadora">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">No se reconoce</p>
			</div>

			<!--BOTONES DE ENVIO-->
            <!--boton de envio-->
            <div class="form-boton">
					<input type="submit" value="Enviar" name="registrarse">
				</div>
        </form>
		
        
    </main>

    <script src="js/formulario.js"></script>
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
</body>
</html>