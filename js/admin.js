// admin/js/admin.js
function confirmDelete(mensaje = '¿Eliminar este registro?') {
    Swal.fire({
        title: '¿Estás seguro?',
        text: mensaje,
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#e74c3c',
        cancelButtonColor: '#95a5a6',
        confirmButtonText: 'Sí, eliminar',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire('Eliminado', 'El registro ha sido eliminado.', 'success');
            // Aquí pondrás después la petición AJAX real
        }
    });
}

function openModal(id) {
    document.getElementById(id).style.display = 'flex';
}

function closeModal(id) {
    document.getElementById(id).style.display = 'none';
}

// Cerrar modal clic fuera
window.addEventListener('click', function(e) {
    const modales = document.querySelectorAll('.modal');
    modales.forEach(modal => {
        if (e.target === modal) modal.style.display = 'none';
    });
});

// CONTROL DEL SIDEBAR (móvil + escritorio)
document.addEventListener('DOMContentLoaded', function() {
    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('sidebarOverlay');
    const openBtn = document.getElementById('sidebarToggleMobile');
    const closeBtn = document.getElementById('sidebarClose');

    function abrir() {
        sidebar.classList.add('active');
        overlay.classList.add('active');
    }

    function cerrar() {
        sidebar.classList.remove('active');
        overlay.classList.remove('active');
    }

    openBtn?.addEventListener('click', abrir);
    closeBtn?.addEventListener('click', cerrar);
    overlay?.addEventListener('click', cerrar);

    // Tecla ESC
    document.addEventListener('keydown', e => {
        if (e.key === 'Escape') cerrar();
    });
});