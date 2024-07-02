
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Datos del formulario
    $origen = $_POST['origen'];
    $destino = $_POST['destino'];
    $fechaInicio = $_POST['fechaInicio'];
    $fechaFin = $_POST['fechaFin'];

    // Conexión a la base de datos
    $conn = new mysqli("localhost", "root", "", "viajes4");

    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Consulta a la base de datos
    $sql = "SELECT * FROM viajes WHERE origen = '$origen' AND destino = '$destino' AND fecha BETWEEN '$fechaInicio' AND '$fechaFin'";
    $result = $conn->query($sql);

    $stmt = $conn->prepare("SELECT * FROM viajes WHERE origen = ? AND destino = ? AND fecha BETWEEN ? AND ?");
    $stmt->bind_param("ssss", $origen, $destino, $fechaInicio, $fechaFin);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        echo "<div class='gallery'>";
        while($row = $result->fetch_assoc()) {
            echo "<div class='gallery-item'>";
            echo "<h3>" . $row['nombre_viaje'] . "</h3>";
            echo "<p>Fecha: " . $row['fecha'] . "</p>";
            echo "<img src='" . $row['imagen'] . "' alt='Imagen del viaje'>";
            echo "</div>";
        }
        echo "</div>";
    } else {
        echo "No se encontraron viajes disponibles.";
    }

   

    
    $stmt->close();
    $conn->close();

}
?>