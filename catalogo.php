<?php
include 'header.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo - Mezcal N'B</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<main class="main-content">
    <div class="catalog-container">
        <h1 class="catalog-title">Catálogo de Mezcales</h1>

        <div class="product-grid">
            <?php
            $productos = [
                ["nombre" => "Mezcal Aurora", "desc" => "Perfil delicado con notas frutales maduras.", "precio" => 549, "img" => "https://images.unsplash.com/photo-1583993737005-09ff9f95147d"],
                ["nombre" => "Mezcal Tempestad", "desc" => "Agave silvestre con aromas herbales intensos.", "precio" => 699, "img" => "https://images.unsplash.com/photo-1601924582971-dc4b692d4979"],
                ["nombre" => "Mezcal Mística", "desc" => "Añejo de 3 años con matices cálidos de cacao.", "precio" => 950, "img" => "https://images.unsplash.com/photo-1612197527762-5a78d7a9a187"],
                ["nombre" => "Mezcal Sierra Negra", "desc" => "Ahumado intenso con carácter firme.", "precio" => 1199, "img" => "https://images.unsplash.com/photo-1624935700823-b3d831bdb55d"],
                ["nombre" => "Mezcal Espadín Real", "desc" => "Clásico oaxaqueño: suave, aromático y equilibrado.", "precio" => 480, "img" => "https://images.unsplash.com/photo-1590158747921-e637a1dfd3db"],
            ];

            foreach ($productos as $p) {
                echo "
                <div class='product-card' onclick=\"verProducto(
                    '{$p['nombre']}',
                    '{$p['desc']}',
                    '{$p['precio']}',
                    '{$p['img']}'
                )\">
                    <div class='product-img' style=\"background-image: url('{$p['img']}');\"></div>
                    <div class='product-info'>
                        <h3>{$p['nombre']}</h3>
                        <p>{$p['desc']}</p>
                        <span class='price'>$ {$p['precio']} MXN</span>
                        <form action='agregar_carrito.php' method='POST' onClick='event.stopPropagation()'>
                            <input type='hidden' name='nombre' value='{$p['nombre']}'>
                            <input type='hidden' name='descripcion' value='{$p['desc']}'>
                            <input type='hidden' name='precio' value='{$p['precio']}'>
                            <input type='hidden' name='imagen' value='{$p['img']}'>
                            <button type='submit' class='btn-buy'>Agregar al carrito</button>
                        </form>
                    </div>
                </div>
                ";
            }
            ?>
        </div>
    </div>
</main>

<footer class="footer">
    <p>&copy; 2025 Mezcal N'B. Todos los derechos reservados.</p>
</footer>

<script>
function verProducto(nombre, descripcion, precio, imagen) {
    alert(`Producto: ${nombre}\nPrecio: $${precio} MXN`);
}
</script>

</body>
</html>
