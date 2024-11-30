
<?php
include 'config.php';

// Obtener datos del formulario y validar
$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = $_POST['password'];

// Consultar la base de datos
$sql = "SELECT * FROM usuarios WHERE usuario='$username'";
$result = $conn->query($sql);

// Validar si encuentra registro
if ($result->num_rows > 0) {
    // Obtener registro en modo asociativo (mejora el acceso a los datos).
    $row = $result->fetch_assoc();
    if ($password == $row['clave'])
    {
        // Inicio de sesión exitoso
        session_start();
        $_SESSION['username']= $username;
        header('Location: pagina_protegida.php');
        exit();
    } else {
        echo "Contraseña incorrecta";
    }
} else {
    echo "Usuario no encontrado";
}

$conn->close();
?>
