<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>

<div class="main">
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem;">
        <h1 class="page-title">Detalle del Pedido #MZ20251205</h1>
        <div>
            <select class="form-control" style="padding: 0.8rem; font-size: 1rem; border-radius: 8px;" onchange="cambiarEstado(this.value)">
                <option value="pendiente">Pendiente</option>
                <option value="preparacion">En preparación</option>
                <option value="enviado" selected>Enviado</option>
                <option value="entregado">Entregado</option>
                <option value="cancelado">Cancelado</option>
            </select>
        </div>
    </div>

    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem; margin-bottom: 2rem;">
        <!-- Info Cliente -->
        <div class="card">
            <h3>Cliente</h3>
            <p><strong>María Fernández</strong><br>
            maria.fer@mail.com<br>
            55 9876 5432</p>
        </div>
        <!-- Info Envío -->
        <div class="card">
            <h3>Dirección de Envío</h3>
            <p>Calle Juárez #123, Col. Centro<br>
            Oaxaca de Juárez, Oaxaca<br>
            CP 68000</p>
        </div>
    </div>

    <h3>Productos</h3>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th>Precio unitario</th>
                    <th>Subtotal</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Mezcal Añejo Extra</td>
                    <td>1</td>
                    <td>$1,299</td>
                    <td>$1,299</td>
                </tr>
                <tr>
                    <td>Mezcal Joven Premium</td>
                    <td>2</td>
                    <td>$679</td>
                    <td>$1,358</td>
                </tr>
                <tr style="background: #f8f9fa; font-weight: bold;">
                    <td colspan="3">Total</td>
                    <td>$2,657</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div style="margin-top: 2rem; text-align: right;">
        <button class="btn btn-success" onclick="imprimirFactura()">Imprimir Factura</button>
    </div>
</div>

<script>
function cambiarEstado(estado) {
    const estados = {
        pendiente: "Pendiente",
        preparacion: "En preparación",
        enviado: "Enviado",
        entregado: "Entregado",
        cancelado: "Cancelado"
    };
    Swal.fire({
        title: 'Estado actualizado',
        text: `El pedido ahora está: ${estados[estado]}`,
        icon: 'success',
        timer: 2000,
        showConfirmButton: false
    });
}

function imprimirFactura() {
    window.print();
}
</script>

<?php include 'footer.php'; ?>