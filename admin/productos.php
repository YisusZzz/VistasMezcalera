<?php include 'header.php'; ?>


    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem;">
        <h1 class="page-title"><i class="fas fa-bottle-droplet"></i> Productos</h1>
        <button class="btn btn-primary" onclick="openModal('addModal')">
            <i class="fas fa-plus"></i> Agregar Producto
        </button>
    </div>

    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Imagen</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Stock</th>
                    <th>Categoría</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><div class="table-img" style="background: #333;"></div></td>
                    <td>Mezcal Añejo Extra</td>
                    <td>$1,299</td>
                    <td>23</td>
                    <td>Añejo</td>
                    <td>
                        <button class="btn btn-warning btn-sm" onclick="openModal('editModal')">Editar</button>
                        <button class="btn btn-danger btn-sm" onclick="confirmDelete()">Eliminar</button>
                    </td>
                </tr>
                <!-- Más productos -->
            </tbody>
        </table>
    </div>

<!-- Modal Agregar/Editar -->
<div class="modal" id="addModal">
    <div class="modal-content">
        <span class="close" onclick="closeModal('addModal')">×</span>
        <h2>Agregar Nuevo Mezcal</h2>
        <form>
            <div class="form-group">
                <label>Nombre</label>
                <input type="text" required>
            </div>
            <div class="form-group">
                <label>Precio</label>
                <input type="number" required>
            </div>
            <div class="form-group">
                <label>Descripción</label>
                <textarea rows="4"></textarea>
            </div>
            <div class="form-group">
                <label>Imagen</label>
                <input type="file">
            </div>
            <button type="submit" class="btn btn-success">Guardar Producto</button>
        </form>
    </div>
</div>

<?php include 'footer.php'; ?>