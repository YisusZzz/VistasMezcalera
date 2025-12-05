<?php include 'header.php'; ?>


        <h1 class="page-title">
            Dashboard
        </h1>
        

<div class="stats-grid">
    <div class="stat-card">
        <i class="fas fa-bottle-droplet"></i>
        <h3>48</h3>
        <p>Productos en Catálogo</p>
    </div>
    <div class="stat-card">
        <i class="fas fa-users"></i>
        <h3>1,234</h3>
        <p>Clientes Registrados</p>
    </div>
    <div class="stat-card">
        <i class="fas fa-shopping-cart"></i>
        <h3>89</h3>
        <p>Pedidos Hoy</p>
    </div>
    <div class="stat-card">
        <i class="fas fa-dollar-sign"></i>
        <h3>$156,890</h3>
        <p>Ventas del Mes</p>
    </div>
</div>

<h2>Actividad Reciente</h2>
<div class="table-container">
    <table>
        <thead>
            <tr>
                <th>Fecha</th>
                <th>Cliente</th>
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Total</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>05/12/2025 14:30</td>
                <td>Juan Pérez</td>
                <td>Mezcal Añejo Extra</td>
                <td>2</td>
                <td>$2,598</td>
                <td><span class="badge success">Entregado</span></td>
            </tr>
        </tbody>
    </table>
</div>

<?php include 'footer.php'; ?>