<aside class="sidebar" id="sidebar">
    <div class="sidebar-header">
        <img src="../img/logoM.jpg" alt="Mezcal N'B" class="admin-logo">
        <h3>Mezcal N'B</h3>
        <button class="sidebar-close" id="sidebarClose">×</button>
    </div>

    <nav class="sidebar-nav">
        <a href="index.php" class="nav-item <?php echo basename($_SERVER['PHP_SELF'])=='index.php' ? 'active' : ''; ?>">
            <i class="fas fa-home"></i>
            <span>Dashboard</span>
        </a>
        <a href="productos.php" class="nav-item <?php echo basename($_SERVER['PHP_SELF'])=='productos.php' ? 'active' : ''; ?>">
            <i class="fas fa-bottle-droplet"></i>
            <span>Productos</span>
        </a>
        <a href="usuarios.php" class="nav-item <?php echo basename($_SERVER['PHP_SELF'])=='usuarios.php' ? 'active' : ''; ?>">
            <i class="fas fa-users"></i>
            <span>Usuarios</span>
        </a>
        <a href="ventas.php" class="nav-item <?php echo basename($_SERVER['PHP_SELF'])=='ventas.php' ? 'active' : ''; ?>">
            <i class="fas fa-shopping-cart"></i>
            <span>Ventas</span>
        </a>
        <a href="pedidos.php" class="nav-item <?php echo basename($_SERVER['PHP_SELF'])=='pedidos.php' ? 'active' : ''; ?>">
            <i class="fas fa-truck"></i>
            <span>Pedidos</span>
        </a>
        <a href="../index.php" class="nav-item" target="_blank">
            <i class="fas fa-external-link-alt"></i>
            <span>Ver Sitio Web</span>
        </a>
    </nav>

    <div class="sidebar-footer">
        <a href="logout.php" class="logout-btn">
            <i class="fas fa-sign-out-alt"></i>
            <span>Cerrar Sesión</span>
        </a>
    </div>
</aside>

<div class="sidebar-overlay" id="sidebarOverlay"></div>