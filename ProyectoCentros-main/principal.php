<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
</head>
<body>
<?php
        
        $expresion1 = '/^[a-z][a-z0-9_]*@educastur.(es|org)$/';
        $expresion2 = '/^[a-z][a-z0-9_]*@gmail.[a-z]{2,3}$/';

        $nom = file_get_contents("nombre.txt");
        $contra = file_get_contents("contra.txt");
        file_put_contents("pagina.txt","principal.php");
        file_put_contents("rol.txt","");
            if(isset($_REQUEST["nom"]) && $_REQUEST["nom"]!=null){
                $nom = $_REQUEST["nom"];
            }
            if(isset($_REQUEST["contra"])&& $_REQUEST["contra"]!=null){
                $contra = $_REQUEST["contra"];
            }
            if($nom != ""){

        if(preg_match($expresion1,$nom) && $nom == "lvu50585@educastur.es" && $contra == "1234"){
                echo "<p>Bienvenido Admin </p>";
                file_put_contents("rol.txt","Administrador");
            
        }
        else if(preg_match($expresion2,$nom) && $contra == "1234"){
                echo "<p>Bienvenido Usuario </p>";
                file_put_contents("rol.txt","Usuario");
            
        }
        else{
            header("Location: login.php?nom=$nom");
        }
        echo "<a href = \"alumnado.php\">Ver alumnado </a><br><br>";
        echo "<a href = \"ficheros.php\">Ver ficheros </a><br><br>";
        file_put_contents("nombre.txt",$nom);
        file_put_contents("contra.txt",$contra);
        echo "<a href = \"logout.php\">Cerrar sesión </a><br><br>";
    }
    ?>

</body>
</html>

