<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión - Mezcal N'B</title>

    <!-- Estilos globales -->
    <link rel="stylesheet" href="css/styles.css">

    <!-- Íconos Font Awesome (necesario para carrito) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        /* Tus estilos del login tal cual estaban */
        .login-container {
            max-width: 400px;
            margin: 4rem auto;
            padding: 2rem;
            background: white;
            border-radius: 12px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
            border-top: 4px solid #333333;
        }
        .login-container h2 {
            text-align: center;
            color: var(--primary-color);
            margin-bottom: 2rem;
            font-size: 1.8rem;
        }
        .form-group { margin-bottom: 1.5rem; }
        .form-group label { color: var(--text-dark); font-weight: 500; }
        .form-group input {
            width: 100%; padding: 0.75rem;
            border: 2px solid var(--border-color);
            border-radius: 8px;
            transition: var(--transition);
        }
        .btn-submit {
            width: 100%; padding: 0.9rem;
            background: linear-gradient(135deg, var(--primary-color), #2a2a2a);
            color: white; border: 2px solid var(--accent-light);
            border-radius: 8px; cursor: pointer;
        }
    </style>
</head>

<body>

    <main class="main-content">
        <div class="login-container">
            <div class="back-link">
                <a href="index.php">← Volver al inicio</a>
            </div>

            <h2>Iniciar Sesión</h2>

            <form method="POST">
                <div class="form-group">
                    <label for="email">Correo Electrónico</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" id="password" name="password" required>
                </div>

                <button type="submit" class="btn-submit">Iniciar Sesión</button>

                <div class="signup-link">
                    ¿No tienes cuenta? <a href="register.php">Regístrate aquí</a>
                </div>
            </form>
        </div>
    </main>

    <footer class="footer">
        <p>&copy; 2025 Mezcal N'B. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
