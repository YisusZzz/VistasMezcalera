<?php
// header.php - Encabezado con navegación y logo
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header class="header">
        <div class="header-container">
            <div class="logo-section">
                <img src="logoM.jpg" alt="Logo Mezcal N'B" class="logo">
                <h1 class="brand-name">Mezcal N'B</h1>
            </div>
            
            <nav class="nav-menu">
                <ul>
                    <li><a href="index.php" class="nav-link">Inicio</a></li>
                    <li><a href="#menu" class="nav-link">Catálogo</a></li>
                    <li><a href="#" class="nav-link">Acerca de</a></li>
                    <li><a href="#" class="nav-link">Contacto</a></li>
                </ul>
            </nav>

            <div class="header-actions">
                <div class="search-box">
                    <input type="text" placeholder="Buscar mezcal..." class="search-input">
                    <button class="search-btn">🔍</button>
                </div>
                <div class="cart-icon">🛒</div>
                <a href="login.php" class="btn-login">Iniciar Sesión</a>
            </div>
        </div>
    </header>
</body>
</html>
