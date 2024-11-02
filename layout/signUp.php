<?php 
    $ruta = basename(__DIR__);
?>
<!DOCTYPE html>
<html lang="es-ES">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RDR2-Wiki</title>
    <!-- Font -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- FAVICON -->
    <link rel="shortcut icon" href="<?php echo $ruta == "layout" ? "images/rdr2-ico.png" : "layout/images/rdr2-ico.png";?>" type="image/x-icon">
    <!-- STYLES -->
    <link rel="stylesheet" href="../css/sign-up.css">
    <link rel="stylesheet" href="../css/style.css">

</head>

<body>
    <div class="form-container">
        <h1>Sign Up</h1>
        <div class="form-content">
            <form action="../Controller/userController.php" method="POST">
            <input type="hidden" name="action" value="registrar">
                <div class="form-datos">
                    <label for="txtName">User Name:</label>
                    <input name="txtName" type="text" required>
                    <label for="txtEmail">E - Mail:</label>
                    <input name="txtEmail" type="email" required>
                    <label for="txtPassword">Password:</label>
                    <input name="txtPassword" type="password" required>
                </div>
                <button type="submit">Send</button>
            </form>

        </div>
    </div>
</body>

</html>