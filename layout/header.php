<header>
    <nav class="nav-container">
        <img src="<?php echo $ruta != "layout" ? "layout/images/logo-rdr2.png" : "images/logo-rdr2.png";?>" alt="Logo de la pagina">
        <ul class="nav-options">

            <li><a href="<?php echo $ruta !="layout" ? "./index.php" : "../index.php";?>">Home</a></li>
            <li><a href="<?php echo $ruta == "layout" ? "cities.php" : "layout/cities.php";?>">Cities</a></li>
            <li><a href="<?php echo $ruta == "layout" ? "characters.php" : "layout/characters.php";?>">Characters</a></li>
        </ul>
        <button onclick="<?php echo $ruta != "layout" ? "window.location.href='layout/logIn.php'" : "window.location.href='logIn.php'";?>">Login!</button>

        <div class="nav-btn">
            <i class="fa-solid fa-bars" style="color: #ffffff;"></i>
        </div>
    </nav>
</header>

<!-- <?php echo $ruta != "layout" ? "window.location.href='layout/logIn.php'" : "window.location.href='logIn.php'";?> -->