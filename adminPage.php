<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/dashboard.css">
</head>

<body>
    <?php
    $ruta = basename(__DIR__);
    session_start();
    include './layout/header.php';
    require_once './Model/userModel.php';

    $userModel = new UserModel();
    $usuarios = $userModel->obtenerTodosLosUsuarios();
    ?>

    <div class="dashboard-container">
        <h1>Dashboard</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Usuario</th>
                    <th>Correo</th>
                    <th>Rol</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($usuarios as $usuario) : ?>
                    <tr>
                        <td><?php echo $usuario['id']; ?></td>
                        <td><?php echo $usuario['nombre']; ?></td>
                        <td><?php echo $usuario['email']; ?></td>
                        <td><?php echo $usuario['rol'] == 1 ? 'Admin' : 'Usuario Común'; ?></td>
                        <td>
                            <button class="nav-container button edit-btn" data-id="<?php echo $usuario['id']; ?>">Editar</button>
                            <button class="nav-container button delete-btn" data-id="<?php echo $usuario['id']; ?>">Eliminar</button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <div id="edit-form-container" style="display: none;">
        <form id="edit-form" action="./Controller/authController.php" method="POST">
            <input type="hidden" name="action" value="editar">
            <input type="hidden" name="id" id="edit-id">
            <label for="edit-nombre">Nombre:</label>
            <input type="text" name="nombre" id="edit-nombre" required>
            <label for="edit-email">Correo:</label>
            <input type="email" name="email" id="edit-email" required>
            <label for="edit-rol">Rol:</label>
            <input type="text" name="rol" id="edit-rol" required>
            <button type="submit" class="nav-container button">Guardar</button>
        </form>
    </div>

    <script>
        document.querySelectorAll('.edit-btn').forEach(button => {
            button.addEventListener('click', () => {
                const id = button.getAttribute('data-id');
                const row = button.closest('tr');
                const nombre = row.children[1].textContent;
                const email = row.children[2].textContent;
                const rol = row.children[3].textContent === 'Admin' ? 1 : 0;

                document.getElementById('edit-id').value = id;
                document.getElementById('edit-nombre').value = nombre;
                document.getElementById('edit-email').value = email;
                document.getElementById('edit-rol').value = rol;

                document.getElementById('edit-form-container').style.display = 'block';
            });
        });

        document.querySelectorAll('.delete-btn').forEach(button => {
            button.addEventListener('click', () => {
                const id = button.getAttribute('data-id');
                if (confirm('¿Estás seguro de que deseas eliminar este usuario?')) {
                    window.location.href = `./Controller/authController.php?action=eliminar&id=${id}`;
                }
            });
        });
    </script>
</body>

</html>