<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form method = "POST" action = "principal.php">
        <span><?php if(isset($_REQUEST["aviso"]))echo $_REQUEST["aviso"];?></span><br>
        <label>Usuario: <input type = "text" name = "user"></label><br>
        <label>Contraseña: <input type ="password" name = "password"></label>
        <input type="submit" value="enviar" id="enviar">
    </form>
</body>
</html>