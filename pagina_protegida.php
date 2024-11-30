<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: index.html');
    exit();
}

// Contenido de la página protegida
echo "Bienvenido, " . $_SESSION['username'];

// Destruimos todas las variables de sesión
//session_unset();

// Destruimos la sesión
//session_destroy();

// Redirigimos al usuario a la página de inicio de sesión o a cualquier otra página que desees
//header('Location: index.html'); // Reemplaza 'login.php' con la URL de tu página de inicio de sesión
//exit();
?>