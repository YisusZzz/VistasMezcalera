<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
// Contar productos en el carrito
$cartCount = isset($_SESSION['carrito']) ? count($_SESSION['carrito']) : 0;
?>

<header class="header">
    <div class="header-container">
        <div class="logo-section">
            <img src="img/logoE.jpg" alt="Logo Mezcal N'B" class="logo">
            <h1 class="brand-name">Mezcal N'B</h1>
        </div>

        <nav class="nav-menu">
            <ul>
                <li><a href="index.php" class="nav-link">Inicio</a></li>
                <li><a href="catalogo.php" class="nav-link">Catálogo</a></li>
                <li><a href="sobre-nosotros.php" class="nav-link">Sobre Nosotros</a></li>
                <li><a href="recetas.php" class="nav-link">Recetas</a></li>
            </ul>
        </nav>

        <div class="header-actions">
            <div class="search-box">
                <input type="text" placeholder="Buscar mezcal..." class="search-input">
                <button class="search-btn">🔍</button>
            </div>

            <a href="carrito.php" class="cart-icon" style="position: relative;">
                <i class="fa fa-shopping-cart"></i>

                <?php if ($cartCount > 0): ?>
                    <span class="cart-count" 
                          style="
                              position: absolute;
                              top: -5px;
                              right: -8px;
                              background: #b80000;
                              color: white;
                              font-size: 12px;
                              padding: 2px 6px;
                              border-radius: 50%;
                              font-weight: bold;
                          ">
                        <?= $cartCount ?>
                    </span>
                <?php endif; ?>
            </a>

            <a href="login.php" class="btn-login">Iniciar Sesión</a>
        </div>
    </div>
</header>
