<?php
include 'header.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión - Mezcal N'B</title>
    <link rel="stylesheet" href="styles.css">
    <style>
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

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            color: var(--text-dark);
            font-weight: 500;
        }

        .form-group input {
            width: 100%;
            padding: 0.75rem;
            border: 2px solid var(--border-color);
            border-radius: 8px;
            font-size: 1rem;
            transition: var(--transition);
        }

        .form-group input:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(0, 0, 0, 0.05);
        }

        .remember-forgot {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
            font-size: 0.9rem;
        }

        .remember-forgot input[type="checkbox"] {
            cursor: pointer;
        }

        .remember-forgot a {
            color: var(--primary-color);
            text-decoration: none;
            transition: var(--transition);
        }

        .remember-forgot a:hover {
            color: var(--accent-light);
        }

        .btn-submit {
            width: 100%;
            padding: 0.9rem;
            background: linear-gradient(135deg, var(--primary-color), #2a2a2a);
            color: white;
            border: 2px solid var(--accent-light);
            border-radius: 8px;
            font-size: 1.05rem;
            font-weight: bold;
            cursor: pointer;
            transition: var(--transition);
        }

        .btn-submit:hover {
            background-color: var(--accent-light);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
        }

        .signup-link {
            text-align: center;
            margin-top: 1.5rem;
            color: var(--text-light);
        }

        .signup-link a {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: bold;
            transition: var(--transition);
        }

        .signup-link a:hover {
            color: var(--accent-light);
        }

        .back-link {
            text-align: center;
            margin-bottom: 1.5rem;
        }

        .back-link a {
            color: var(--primary-color);
            text-decoration: none;
            font-size: 0.9rem;
            transition: var(--transition);
        }

        .back-link a:hover {
            color: var(--accent-light);
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

            <form method="POST" action="">
                <div class="form-group">
                    <label for="email">Correo Electrónico</label>
                    <input type="email" id="email" name="email" placeholder="tu@email.com" required>
                </div>

                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" id="password" name="password" placeholder="••••••••" required>
                </div>

                <div class="remember-forgot">
                    <label>
                        <input type="checkbox" name="remember"> Recuérdame
                    </label>
                    <a href="#">¿Olvidaste tu contraseña?</a>
                </div>

                <button type="submit" class="btn-submit">Iniciar Sesión</button>

                <div class="signup-link">
                    ¿No tienes cuenta? <a href="#">Regístrate aquí</a>
                </div>
            </form>
        </div>
    </main>

    <footer class="footer">
        <p>&copy; 2025 Mezcal N'B. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
