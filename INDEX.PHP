
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agencia de viajes</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>


<header>

<nav class="menu">
        <ul>
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Destinos</a></li>
            <li><a href="#">Ofertas</a></li>
            <li><a href="#">Contacto</a></li>
        </ul>
    </nav>

    <div class="portada">
        <h1>Viaja a donde quieras</h1>
        <div class="banner-animado">
            <img src="https://viajes-caribe.com/wp-content/uploads/2023/04/Portada.jpg" alt="Promoción 1">
            <img src="https://viajero.com.sv/wp-content/uploads/2024/04/punta-cana-todo-incluido-1024x640.png" alt="Promoción 2">
            <img src="https://marketplace.canva.com/EAFACfltv7c/1/0/1600w/canva-portada-de-facebook-vacaciones-playa-familia-marron-crema-A2NFSe7U5Vk.jpg" alt="Promoción 3">
            </div>
    </div>
    <h1>Agencia de viajes</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="origen">Origen:</label>
        <input type="text" id="origen" name="origen">

        <label for="destino">Destino:</label>
        <input type="text" id="destino" name="destino">
        <label for="fechaInicio">Fecha de inicio:</label>
        <input type="date" id="fechaInicio" name="fechaInicio">

        <label for="fechaFin">Fecha de fin:</label>
        <input type="date" id="fechaFin" name="fechaFin">

        <button type="submit">Buscar</button>
    </form>
</header>

<main>
    <section class="paquetes-turisticos">
    <?php include 'resultadoviaje.php'?>
        </section>
</main>



<footer>
    <p>&copy; 2024 Agencia de viajes</p>
    <ul>
        <li><a href="#">Contacto</a></li>
        <li><a href="#">Redes sociales</a></li>
        <li><a href="#">Términos y condiciones</a></li>
    </ul>
</footer>

<script src="script.js"></script>
</body>
</html>