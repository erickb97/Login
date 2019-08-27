<?php
include("includes/db.php");
    function enviarInfo (){
        $b= new DB();


        $NOMBRESOLI = $_POST['nombrecompleto'];
        $CORREO = $_POST['correo'];
        $motivo = $_POST['motivo'];

       // if (isset($_POST['submit'])) {   
            if(is_uploaded_file($_FILES['fichero']['tmp_name'])) { 
            
                
                // creamos las variables para subir a la db
                    $ruta = "upload/"; 
                    $nombrefinal= trim ($_FILES['fichero']['name']); //Eliminamos los espacios en blanco
//                    $nombrefinal= ereg_replace (" ", "", $nombrefinal);//Sustituye una expresión regular
                    $upload= $ruta . $nombrefinal;  

                    if(move_uploaded_file($_FILES['fichero']['tmp_name'], $upload)) { //movemos el archivo a su ubicacion 
                                
                        echo "<b>Upload exitoso!. Datos:</b><br>";  
                         echo "Nombre: <i><a href=\"".$ruta . $nombrefinal."\">".$_FILES['fichero']['name']."</a></i><br>";  
                         echo "Tipo MIME: <i>".$_FILES['fichero']['type']."</i><br>";  
                         echo "Peso: <i>".$_FILES['fichero']['size']." bytes</i><br>";  
                        echo "<br><hr><br>";  


                        $query = $b->connect()->prepare("INSERT INTO tb_solicitud (NOMBREINGRESA, CORREOINGRESA, RUTAPDF, NOMBREARCHIVO, MOTIVO)
                        VALUES (?,?,?,?,?)");
                        $query->execute([$NOMBRESOLI,$CORREO,$upload,$nombrefinal,$motivo]); 

                        echo "El archivo '".$nombrefinal."' se ha subido con éxito <br> <br> <br>";   
                        echo "<h3><a href= " ."index.php" .">ir a Home</a></h3>";    
                    }  
            }
            else{
                echo("Errooooooorr <br> <br> <br>");
                echo "<h3><a href= " ."index.php" .">ir a Home</a></h3>"; 
            }
        }
//}  
enviarInfo();


?> 