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

    <style>
        .catalog-container {
            max-width: 1200px;
            margin: 4rem auto;
            padding: 0 1rem;
        }

        .catalog-title {
            text-align: center;
            font-size: 2.2rem;
            margin-bottom: 3rem;
            color: var(--primary-color);
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .product-card {
            background: white;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: .3s;
            border-top: 4px solid #000;
            cursor: pointer;
        }

        .product-card:hover {
            transform: translateY(-6px);
        }

        .product-img {
            width: 100%;
            height: 220px;
            background-size: cover;
            background-position: center;
        }

        .product-info {
            padding: 1.2rem;
        }

        .product-info h3 {
            margin: 0;
            font-size: 1.3rem;
            color: var(--primary-color);
        }

        .product-info p {
            margin: .5rem 0 1rem;
            font-size: 0.95rem;
            color: var(--text-light);
        }

        .price {
            font-size: 1.1rem;
            font-weight: bold;
            color: #111;
            margin-bottom: 1rem;
            display: inline-block;
        }

        .btn-buy {
            display: block;
            width: 100%;
            padding: 0.8rem;
            background: black;
            color: white;
            text-align: center;
            border-radius: 8px;
            font-weight: bold;
            cursor: pointer;
            text-decoration: none;
            transition: .3s;
        }

        .btn-buy:hover {
            background: #333;
        }

        /* MODAL ESTILIZADO */
        .modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,.55);
            display: none;
            align-items: center;
            justify-content: center;
            z-index: 1000;
            animation: fadeIn .3s ease;
        }

        .modal-window {
            width: 80%;
            max-width: 900px;
            background: white;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.25);
            position: relative;
            transform: scale(0.9);
            opacity: 0;
            animation: showModal .3s forwards ease;
        }

        @keyframes showModal {
            to { transform: scale(1); opacity: 1; }
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        .modal-close {
            position: absolute;
            top: 10px;
            right: 15px;
            font-size: 2rem;
            cursor: pointer;
            color: #333;
        }

        .modal-content {
            display: flex;
            gap: 2rem;
        }

        .modal-img {
            width: 45%;
            height: 320px;
            background-size: cover;
            background-position: center;
            border-radius: 12px;
        }

        .modal-info {
            width: 55%;
        }

        .modal-info h2 {
            margin-top: 0;
            color: var(--primary-color);
        }

        .modal-price {
            font-size: 1.4rem;
            font-weight: bold;
            margin-top: 1rem;
            display: block;
            color: #111;
        }
    </style>

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

</body>
</html>
