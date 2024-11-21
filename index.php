<!DOCTYPE html>
<html lang="es-ES">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RDR2-Wiki</title>
    <!-- FONTS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- ICON -->
    <link rel="shortcut icon" href="layout/images/rdr2-ico.png" type="image/x-icon">
    <!-- STYLES -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./css/banner.css">
    <link rel="stylesheet" href="./css/image-gallery.css">
    <link rel="stylesheet" href="./css/footer.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>
    <?php
    $ruta = basename(__DIR__);
    session_start();

    
    if (isset($_SESSION['logedIn'])) {
        // Eliminar la variable de sesión después de usarla

        unset($_SESSION['logedIn']);
        
        echo "<script>
        Swal.fire({
            icon: 'success',
            title: 'Bienvenido',
            text: 'Has iniciado sesión correctamente',
            confirmButtonText: 'Ok',
            confirmButtonColor: 'red',
            background: '#000',
            color: 'white'
        });
      </script>";
    }

    include './layout/header.php';
    include './layout/banner.php';
    include './layout/gallery.php';
    include './layout/footer.php';

    ?>
    <script src="app.js"></script>

</body>

</html>