<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <title>Home</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <div id="menu">
        <ul>
            <li>Home</li>
            <li class="cerrar-sesion"><a href="includes/logout.php">Cerrar sesión</a></li>
        </ul>
    </div>

    <section>
        <span class="contact1-form-title">
                        Solicitud de empleo
        </span>
    </section>
        <!-- contact1-form   -->
        <form class="form-horizontal validate-form" action="archivo.php" method="post" enctype="multipart/form-data">
               
				<span class="contact1-form-title">
					Datos de la solicitud
				</span>


            <div class="wrap-input1 validate-input">
                <input class="input1" type="text" name="correo" value=" <?php echo $user->getUser(); ?>" readonly>
                <span class="shadow-input1"></span>
            </div>

            <div class="wrap-input1 validate-input" >
                <input class="input1" type="text" name="nombrecompleto" value=" <?php echo $user->getNombre(); ?>" readonly>
                <span class="shadow-input1"></span>
            </div>

            <div class="wrap-input1 validate-input" data-validate = "Las Placas son requeridas">
                <input class="input1" type="text" name="motivo" placeholder="Motivo Solicitud de Empleo">
                <span class="shadow-input1"></span>
            </div>

            <span class="contact1-form-title">
					Datos del Empleado
				</span>


            <div class="container-contact1-form-btn">
                <button class="contact1-form-btn">
						<span>
							Enviar Informacion
							<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						</span>
                </button>
            </div>

            <input type="hidden" name="MAX_FILE_SIZE" value="9000000" />
            <h5 class="bg-white">Seleccione el archivo que da vida a la solicitud, (formato PDF).</h5> 
            <input name="fichero" type="file" class="form-control" />

            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-8"><input type="submit" value="Enviar Archivo" class="btn bg-blue"/></div>

            </div>
            
        </form>
</body>
</html>