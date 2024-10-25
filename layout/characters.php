<!-- cities.php -->
<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciudades - RDR2</title>
    <!-- Enlaces a los CSS -->
    <link rel="shortcut icon" href="images/rdr2-ico.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/cities.css">
        <!-- FONTS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>
<body>
<?php 
$ruta = basename(__DIR__);
include '../layout/header.php'; 
?>

    <div class="cities-container">
        <div class="city">
            <img src="./images/arthur_image.jpg" alt="Arthur Morgan">
            <h2>Arthur Morgan</h2>
            <p>Arthur es un hombre fuerte y reservado, con una apariencia ruda que contrasta con su sentido de moralidad interna. Aunque ha llevado una vida violenta, muestra compasión y empatía por aquellos que lo necesitan</p>
        </div>

        <div class="city">
            <img src="./images/john_image.jpg" alt="John Marston">
            <h2>John Marston</h2>
            <p>John es un hombre decidido y testarudo, con un fuerte deseo de hacer lo correcto por su familia. A pesar de sus fallas y su pasado oscuro como forajido, muestra una genuina determinación por cambiar y redimirse</p>
        </div>

        <div class="city">
            <img src="./images/dutch_image.jpg" alt="Dutch Van Del Linde">
            <h2>Dutch Van Del Linde</h2>
            <p>Dutch es carismático y visionario, con una habilidad innata para inspirar a sus seguidores. Es un hombre idealista que se presenta a sí mismo como un defensor de la libertad y la justicia para los marginados</p>
        </div>

        <div class="city">
            <img src="./images/micah_image.jpg" alt="Micah Bell">
            <h2>Micah Bell</h2>
            <p>Micah es astuto, oportunista y peligrosamente ambicioso. Tiende a ser cruel y despectivo hacia los demás, buscando siempre su propio beneficio</p>
        </div>

        <div class="city">
            <img src="./images/javier_image.jpg" alt="Javier Escuella">
            <h2>Javier Escuella</h2>
            <p>Javier es un hombre leal, apasionado y orgulloso de sus raíces mexicanas. Tiene una perspectiva idealista y un gran respeto por Dutch, a quien considera un mentor y líder inspirador</p>
        </div>
    </div>

    <?php include '../layout/footer.php'; ?>
    <script src="../app.js"></script>

</body>
</html>