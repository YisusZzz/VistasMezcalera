<?php
session_start();

// ELIMINAR PRODUCTO DEL CARRITO
if (isset($_GET['remove'])) {
    $id = $_GET['remove'];

    if (isset($_SESSION['carrito'][$id])) {
        unset($_SESSION['carrito'][$id]);
    }

    header("Location: carrito.php");
   exit();

}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Carrito de Compras - Mezcal N'B</title>
    <link rel="stylesheet" href="css/styles.css">
    <style>
        .cart-container {
            max-width: 1000px;
            margin: 30px auto;
            padding: 0 15px;
        }
        .cart-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 15px;
            margin-bottom: 15px;
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .cart-item img {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 8px;
            margin-right: 15px;
        }
        .item-info {
            flex: 2;
        }
        .item-info h3 {
            margin: 0 0 5px 0;
            font-size: 18px;
        }
        .item-info p {
            margin: 2px 0;
            color: #555;
        }
        .item-quantity, .item-price, .item-subtotal {
            flex: 1;
            text-align: center;
            font-size: 16px;
        }
        .btn-remove {
            background-color: #b80000;
            color: #fff;
            border: none;
            padding: 6px 12px;
            border-radius: 5px;
            cursor: pointer;
        }
        .cart-summary {
            text-align: right;
            font-size: 22px;
            font-weight: bold;
            margin-top: 25px;
            margin-bottom: 15px;
        }
        .btn-comprar {
            display: block;
            margin-left: auto;
            background-color: #228B22;
            color: white;
            padding: 12px 20px;
            border-radius: 8px;
            text-decoration: none;
            font-size: 18px;
            text-align: center;
            width: 220px;
        }
        .btn-comprar:hover {
            background-color: #1e7a1e;
        }

        @media(max-width:768px){
            .cart-item {
                flex-direction: column;
                align-items: flex-start;
            }
            .item-quantity, .item-price, .item-subtotal {
                text-align: left;
                margin-top: 5px;
            }
            .cart-summary {
                text-align: left;
            }
        }
    </style>
</head>
<body>

<?php include 'header.php'; ?>

<div class="cart-container">
    <h1 style="text-align:center; margin-bottom:30px;">Tu Carrito 🛒</h1>

    <?php
    if (!isset($_SESSION['carrito']) || count($_SESSION['carrito']) === 0) {
        echo "<p style='text-align:center; font-size:18px;'>Tu carrito está vacío</p>";
    } else {
        $total = 0;

        foreach ($_SESSION['carrito'] as $id => $item) {

            // Si no tiene imagen, poner placeholder
            $img = isset($item['img']) ? $item['img'] : 'https://via.placeholder.com/80';

            $cantidad = isset($item['cantidad']) ? $item['cantidad'] : 1;
            $precio = number_format($item['precio'],2);
            $subtotal = number_format($item['precio'] * $cantidad,2);
            $total += $item['precio'] * $cantidad;

            echo "
            <div class='cart-item'>
                <img src='{$img}' alt='{$item['nombre']}'>
                <div class='item-info'>
                    <h3>{$item['nombre']}</h3>
                    <p>Precio unitario: $ {$precio} MXN</p>
                </div>
                <div class='item-quantity'>Cantidad: {$cantidad}</div>
                <div class='item-subtotal'>Subtotal: $ {$subtotal} MXN</div>
                <a href='carrito.php?remove={$id}'><button class='btn-remove'>Eliminar</button></a>
            </div>
            ";
        }

        echo "<div class='cart-summary'>Total: $ ".number_format($total,2)." MXN</div>";

        echo "<a href='comprar.php' class='btn-comprar' onclick=\"mostrarToast('Procesando compra...')\">Comprar</a>";
    }
    ?>
</div>

<footer class="footer">
    <p>&copy; 2025 Mezcal N'B. Todos los derechos reservados.</p>
</footer>

</body>
</html>
