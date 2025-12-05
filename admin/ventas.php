<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>

<div class="main">
    <h1 class="page-title">Ventas y Pedidos</h1>

    <div style="margin-bottom: 1.5rem; display: flex; gap: 1rem; flex-wrap: wrap;">
        <select class="form-control" style="padding: 0.7rem; border-radius: 8px;">
            <option>Todos los estados</option>
            <option>Pendiente</option>
            <option>En preparación</option>
            <option>Enviado</option>
            <option>Entregado</option>
            <option>Cancelado</option>
        </select>
        <input type="date" class="form-control">
        <input type="date" class="form-control">
    </div>

    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Folio</th>
                    <th>Fecha</th>
                    <th>Cliente</th>
                    <th>Productos</th>
                    <th>Total</th>
                    <th>Estado</th>
                    <th>Método Pago</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>#MZ20251205</strong></td>
                    <td>05/12/2025 14:30</td>
                    <td>María Fernández</td>
                    <td>2 productos</td>
                    <td><strong>$2,597</strong></td>
                    <td><span class="badge warning">En preparación</span></td>
                    <td>Tarjeta</td>
                    <td>
                        <a href="pedidos.php?id=MZ20251205" class="btn btn-primary btn-sm">Ver detalle</a>
                    </td>
                </tr>
                <tr>
                    <td><strong>#MZ20251204</strong></td>
                    <td>04/12/2025 19:15</td>
                    <td>José Morales</td>
                    <td>1 producto</td>
                    <td>$1,299</td>
                    <td><span class="badge success">Entregado</span></td>
                    <td>PayPal</td>
                    <td><a href="pedidos.php?id=MZ20251204" class="btn btn-primary btn-sm">Ver</a></td>
                </tr>
            </tbody>
        </table>
    </div>

    <div style="margin-top: 2rem; text-align: center;">
        <strong>Total ventas del mes:</strong> $156,890 MXN
    </div>
</div>

<?php include 'footer.php'; ?>