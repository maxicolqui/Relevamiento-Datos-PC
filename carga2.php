<?php
	include("cn.php");
	$usuarios = "SELECT * FROM bd_cpu2 ";
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
        
        <form action="insertar2.php" method="post" class="formulario" id="formulario">

            <!--Grupo: carga de datos-->

			<h2 class="formulario__subTitulo">Relevamiento de Componente Interno de Computadora</h2>

            <!--Grupo: Microprocesador-->
            <div class="formulario__grupo" id="grupo__memoriaRam">
				<label for="memoriaRam" class="formulario__label">Marca del Procesador</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="procesador" id="memoriaRam" placeholder="marca del procesador">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">No se reconoce</p>
			</div>

            <div class="formulario__grupo" id="grupo__discoDuro">
				<label for="discoDuro" class="formulario__label">Modelo</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="modelo" id="discoDuro" placeholder="modelo del procesador">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">No se reconoce</p>
			</div>

			
			<div class="formulario__grupo" id="grupo__memoriaRam">
				<label for="memoriaRam" class="formulario__label">ID producto</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="numero2" id="memoriaRam" placeholder="n° del producto">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">No se reconoce</p>
			</div>


			<div class="formulario__grupo-opciones" id="formulario__opciones">
				
				<label for="generacion" class="formulario__label">RAM</label>
				<select class="formulario__select" name="ram" id="generacion" required>
                    <option>2GB</option>
                    <option>4GB</option>
                    <option>8GB</option>
					<option>16GB</option>
					<option>32GB</option>
                </select>
				
				<label for="generacion" class="formulario__label">Almacenamiento</label>
				<select class="formulario__select" name="alma" id="generacion" required>
                    <option>64GB</option>
                    <option>240GB</option>
                    <option>480GB</option>
					<option>1TB</option>
                </select>

				<label for="generacion" class="formulario__label">Tipo</label>
				<select class="formulario__select" name="tipo" id="generacion" required>
                    <option>SSD</option>
                    <option>HDD</option>
                </select>

				<label for="generacion" class="formulario__label">Sistema Operativo</label>
				<select class="formulario__select" name="so" id="generacion" required>
                    <option>Windows</option>
                    <option>Linux</option>
                    <option>Mac OS</option>
                </select>

				
				<label for="generacion" class="formulario__label">Antivirus</label>
				<select class="formulario__select" name="virus" id="generacion" required>
                    <option>SI</option>
                    <option>NO</option>
                </select>

				<label for="generacion" class="formulario__label">Conexion</label>
				<select class="formulario__select" name="inte" id="generacion" required>
                    <option>Ethernet</option>
                    <option>Inalambrico</option>
                </select>

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