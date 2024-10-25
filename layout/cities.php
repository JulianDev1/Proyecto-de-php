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


    include '../layout/header.php'; ?>

    <div class="cities-container">
        <div class="city">
            <img src="./images/valentine.jpg" alt="Valentine">
            <h2>Valentine</h2>
            <p>Una bulliciosa ciudad ganadera en las Heartlands, conocida por sus salones y establos.</p>
        </div>

        <div class="city">
            <img src="./images/saint-denis.jpg" alt="Saint Denis">
            <h2>Saint Denis</h2>
            <p>Una ciudad industrializada y rica en Lemoyne, inspirada en Nueva Orleans.</p>
        </div>

        <div class="city">
            <img src="./images/blackwater.jpg" alt="Blackwater">
            <h2>Blackwater</h2>
            <p>Una ciudad progresista en las orillas del Lago Flat Iron, con bancos y un teatro.</p>
        </div>

        <div class="city">
            <img src="./images/rhodes.jpg" alt="Rhodes">
            <h2>Rhodes</h2>
            <p>Un pequeño pueblo sureño con una historia de familias enfrentadas.</p>
        </div>

        <div class="city">
            <img src="./images/armadillo.jpg" alt="Armadillo">
            <h2>Armadillo</h2>
            <p>Una ciudad desértica afectada por un brote de cólera.</p>
        </div>
    </div>

    <?php include '../layout/footer.php'; ?>
    <script src="../app.js"></script>

</body>

</html>