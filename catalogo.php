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
            // Lista de productos para no repetir código
            $productos = [
                [
                    "nombre" => "Mezcal Aurora",
                    "desc" => "Perfil delicado con notas frutales maduras, un toque ahumado elegante y un final aterciopelado.",
                    "precio" => "$549 MXN",
                    "img" => "https://images.unsplash.com/photo-1583993737005-09ff9f95147d"
                ],
                [
                    "nombre" => "Mezcal Tempestad",
                    "desc" => "Agave silvestre con aromas herbales intensos, un cuerpo robusto y un final largo y profundo.",
                    "precio" => "$699 MXN",
                    "img" => "https://images.unsplash.com/photo-1601924582971-dc4b692d4979"
                ],
                [
                    "nombre" => "Mezcal Mística",
                    "desc" => "Añejo de 3 años con matices cálidos de cacao, madera tostada y un aroma redondo.",
                    "precio" => "$950 MXN",
                    "img" => "https://images.unsplash.com/photo-1612197527762-5a78d7a9a187"
                ],
                [
                    "nombre" => "Mezcal Sierra Negra",
                    "desc" => "Ahumado intenso con carácter firme, ideal para paladares que buscan fuerza auténtica.",
                    "precio" => "$1,199 MXN",
                    "img" => "https://images.unsplash.com/photo-1624935700823-b3d831bdb55d"
                ],
                [
                    "nombre" => "Mezcal Espadín Real",
                    "desc" => "Clásico oaxaqueño: suave, aromático y equilibrado. Perfecto para cualquier ocasión.",
                    "precio" => "$480 MXN",
                    "img" => "https://images.unsplash.com/photo-1590158747921-e637a1dfd3db"
                ],
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
                        <span class='price'>{$p['precio']}</span>
                        <a href='#' class='btn-buy' onclick='event.stopPropagation()'>Agregar al Carrito</a>
                    </div>
                </div>
                ";
            }
            ?>

        </div>
    </div>
</main>

<!-- =============== MODAL =============== -->
<div id="modal" class="modal-overlay">
    <div class="modal-window">
        <span class="modal-close" onclick="cerrarModal()">&times;</span>

        <div class="modal-content">
            <div id="modal-img" class="modal-img"></div>

            <div class="modal-info">
                <h2 id="modal-nombre"></h2>

                <p id="modal-descripcion" style="line-height: 1.5;"></p>

                <span id="modal-precio" class="modal-price"></span>

                <br>

                <a href="#" class="btn-buy" style="margin-top: 1rem; width: 70%;">Agregar al Carrito</a>
            </div>
        </div>
    </div>
</div>

<footer class="footer">
    <p>&copy; 2025 Mezcal N'B. Todos los derechos reservados.</p>
</footer>

<script>
function verProducto(nombre, descripcion, precio, imagen) {
    // Descripción más completa dentro del modal
    const descCompleta = `
        ${descripcion}<br><br>
        Elaborado artesanalmente a partir de agaves seleccionados y cocidos en hornos tradicionales de tierra. 
        La fermentación se realiza en tinas de madera y se destila en alambique de cobre, conservando el carácter 
        auténtico del mezcal oaxaqueño. Su perfil aromático revela notas minerales, hierbas frescas y un toque 
        ahumado natural, logrando un equilibrio perfecto entre suavidad y profundidad.
    `;

    document.getElementById("modal-nombre").innerText = nombre;
    document.getElementById("modal-descripcion").innerHTML = descCompleta;
    document.getElementById("modal-precio").innerText = precio;
    document.getElementById("modal-img").style.backgroundImage = `url('${imagen}')`;

    document.getElementById("modal").style.display = "flex";
}

function cerrarModal() {
    document.getElementById("modal").style.display = "none";
}
</script>

</body>
</html>
