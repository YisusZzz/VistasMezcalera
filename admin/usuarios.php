<?php include 'header.php'; ?>

<div class="main">
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem;">
        <h1 class="page-title">Gestión de Usuarios</h1>
        <button class="btn btn-primary" onclick="openModal('userModal')">
            Nuevo Usuario
        </button>
    </div>

    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Teléfono</th>
                    <th>Rol</th>
                    <th>Fecha Registro</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>#1001</td>
                    <td>Ana López García</td>
                    <td>ana.lopez@mail.com</td>
                    <td>55 1234 5678</td>
                    <td><span class="badge admin">Admin</span></td>
                    <td>12/03/2024</td>
                    <td><span class="badge success">Activo</span></td>
                    <td>
                        <button class="btn btn-warning btn-sm" onclick="openModal('userModal')">Editar</button>
                        <button class="btn btn-danger btn-sm" onclick="confirmDeleteUser()">Eliminar</button>
                    </td>
                </tr>
                <tr>
                    <td>#1056</td>
                    <td>Carlos Ramírez</td>
                    <td>carlos.r@outlook.com</td>
                    <td>81 9876 5432</td>
                    <td><span class="badge client">Cliente</span></td>
                    <td>04/12/2025</td>
                    <td><span class="badge success">Activo</span></td>
                    <td><!-- mismas acciones --></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- Modal Usuario -->
<div class="modal" id="userModal">
    <div class="modal-content">
        <span class="close" onclick="closeModal('userModal')">×</span>
        <h2>Nuevo / Editar Usuario</h2>
        <form>
            <div class="form-group">
                <label>Nombre completo</label>
                <input type="text" required>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" required>
            </div>
            <div class="form-group">
                <label>Teléfono</label>
                <input type="text">
            </div>
            <div class="form-group">
                <label>Rol</label>
                <select>
                    <option>Cliente</option>
                    <option>Administrador</option>
                </select>
            </div>
            <div class="form-group">
                <label>Contraseña (dejar vacío si no se cambia)</label>
                <input type="password">
            </div>
            <button type="submit" class="btn btn-success">Guardar Usuario</button>
        </form>
    </div>
</div>

<?php include 'footer.php'; ?>