<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Mi pag</title>
</head>
<body>
    <main>
    <div id="login">
    <h1>Inicio de Sesion</h1>
    <form action="auth/login.php" method="post">
        <label for="">Nombre de Usuario</label>
        <input type="text" name="name" id="name">

        <label for="">Contraseña</label>
        <input type="password" name="pass" id="pass">

        <input type="submit" value="Inicio De session">
    </form>
    </div>
    <div id="registro">
    <h1>Registro</h1>
    <form action="auth/register.php" method="post">
        <label for="">Nombre de Usuario</label>
        <input type="text" name="name" id="name">

        <label for="">Contraseña</label>
        <input type="password" name="pass" id="pass">

        <label for="">Como se define</label>
        <div>
            <label for="sex1">Masculino</label><input type="radio" name="sex" id="sex1" value="m">
        </div>
        <div>
            <label for="sex2">Femenino</label><input type="radio" name="sex" id="sex2" value="f">
        </div>
        <div>
            <label for="sex3">Otro</label><input type="radio" name="sex" id="sex3" value="o">
        </div>
        

        <label for="">Fecha de nacimiento</label>
        <input type="date" name="birth_date" id="birth_date">

        <label for="photo">Foto</label>
        <input type="file" name="photo" id="photo">

        <?php
        if( isset($_GET['error']))
            echo "<span style='color:red; font-size:30px;' >{$_GET['error']}</span>"
        ?>

        <input type="submit" value="Registrar">
    </form>
    </div>
    </main>
</body>
</html>