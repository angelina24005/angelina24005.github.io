<?php
    // Conexión con la base de datos MySQL
    $servername = "localhost";
    $username = "root"; // Nombre de usuario por defecto
    $password = ""; // Cambiarlo si se usa otra contraseña
    $dbname = "harvest1";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Verificar si se recibieron los datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar si se recibieron todos los campos necesarios
    if (isset($_POST['nombre']) && isset($_POST['email']) && isset($_POST['password'])) {
        // Obtener los datos del formulario
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Aquí puedes realizar cualquier validación adicional que necesites
        // Por ejemplo, podrías validar el formato del correo electrónico o la fortaleza de la contraseña

        // Insertar los datos en la base de datos
        $sql = "INSERT INTO usuarios (nombre, email, password) VALUES ('$nombre', '$email', '$password')";
        if ($conn->query($sql) === TRUE) {
            echo "Registro exitoso";
        } else {
            echo "Error al registrar el usuario: " . $conn->error;
        }
    } else {
        // Si no se recibieron todos los campos necesarios, puedes mostrar un mensaje de error o redirigir al usuario a otra página
        echo "Error: Todos los campos son obligatorios.";
    }
} else {
    // Si no se accedió al formulario mediante el método POST, puedes mostrar un mensaje de error o redirigir al usuario a otra página
    echo "Error: Acceso no autorizado.";
}

// Cerrar la conexión
$conn->close();
?>
