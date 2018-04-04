<?php

if(isset($_GET["enviar_btn"]))  //Evalúa si está definita la variable (si se ha creado)
{
    echo "Datos enviados por el método GET. Los datos son:<br /><br />El nombre es: "
    .$_GET["nombre_txt"]."<br />La contraseña es: ".$_GET["password_txt"];
}

else if(isset($_POST["enviar_btn"]))
{
    echo "Datos enviados por el método POST. Los datos son:<br /><br />El nombre es: "
    .$_POST["nombre_txt"]."<br />La contraseña es: ".$_POST["password_txt"];
}

