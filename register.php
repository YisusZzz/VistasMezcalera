<?php
include 'header.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Cuenta - Mezcal N'B</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <main class="main-content">
        <div class="register-container">

            <div class="back-link">
                <a href="index.php">← Volver al inicio</a>
            </div>

            <h2>Crear Cuenta</h2>

            <form>
                <div class="form-group">
                    <label for="name">Nombre Completo</label>
                    <input type="text" id="name" name="name" placeholder="Tu nombre completo" required>
                </div>

                <div class="form-group">
                    <label for="email">Correo Electrónico</label>
                    <input type="email" id="email" name="email" placeholder="tu@email.com" required>
                </div>

                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" id="password" name="password" placeholder="••••••••" required>
                </div>

                <div class="form-group">
                    <label for="password2">Confirmar Contraseña</label>
                    <input type="password" id="password2" name="password2" placeholder="••••••••" required>
                </div>

                <button type="submit" class="btn-submit">Registrarse</button>

                <div class="login-link">
                    ¿Ya tienes cuenta? <a href="login.php">Inicia sesión aquí</a>
                </div>
            </form>

        </div>
    </main>

    <footer class="footer">
        <p>&copy; 2025 Mezcal N'B. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
