<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php
    file_put_contents("pagina.txt","login.php");
    $nom = "";
    file_put_contents("nombre.txt","");
    if(isset($_REQUEST["nom"]) && $_REQUEST["nom"]!=null){
        $nom = $_REQUEST["nom"];
    }  
    echo '
    <form action = "principal.php" method = "POST"><label>Usuario:
        <input type = "text" name = "nom" value ="' . $nom . '"></label><br><br>
        <label>Contraseña:<input type = "password" name = "contra"></label><br><br>
        <input type = "submit" name = "enviar">
    </form>'
        ?>
    
</body>
</html>