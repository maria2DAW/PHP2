<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Envío de datos por GET y POST</title>
    </head>
    <body>
        <hgroup><h1>Formlario GET</h1></hgroup>
        
        <form name="envia-get_frm" action="datos.php" method="get" enctype="application\x-www-form-urlencoded" >
            <br /><br />
            <label>Nombre:</label>
            <input type="text" name="nombre_txt" />
            <br /><br />
            <label>Contraseña:</label>
            <input type="password" name="password_txt" />
            <br /><br />
            <input type="submit" name="enviar_btn" value="Enviar GET" />
        </form>
        
        <hgroup><h1>Formlario POST</h1></hgroup>
        
        <form name="envia-post_frm" action="datos.php" method="post" enctype="application\x-www-form-urlencoded" >
            <br /><br />
            <label>Nombre:</label>
            <input type="text" name="nombre_txt" />
            <br /><br />
            <label>Contraseña:</label>
            <input type="password" name="password_txt" />
            <br /><br />
            <input type="submit" name="enviar_btn" value="Enviar POST" />
        </form>
    </body>
</html>
