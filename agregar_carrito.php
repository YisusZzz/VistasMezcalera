<?php
session_start();

// Validar que lleguen los datos necesarios
if (
    !isset($_POST['nombre']) ||
    !isset($_POST['descripcion']) ||
    !isset($_POST['precio']) ||
    !isset($_POST['imagen'])
) {
    header("Location: catalogo.php");
    exit();
}

// Recibir datos del producto
$nombre = $_POST['nombre'];
$precio = floatval($_POST['precio']); // Convertimos el precio a número

// Crear el carrito si no existe
if (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = [];

}

// Crear ID único basado en el nombre
$id = md5($nombre);

// Si el producto ya existe, solo incrementamos la cantidad
if (isset($_SESSION['carrito'][$id])) {
    $_SESSION['carrito'][$id]['cantidad'] += 1;
} else {
    $_SESSION['carrito'][$id] = [
        "nombre" => $nombre,
        "precio" => $precio,
        "cantidad" => 1
    ];
}

// Regresar al catálogo
header("Location: catalogo.php?added=1");
exit();
