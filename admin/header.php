<?php
session_start();
// if(!isset($_SESSION['admin'])) header('Location: login.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Admin - Mezcal N'B</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <link rel="stylesheet" href="../css/admin-styles.css">
</head>
<body class="admin-body">

    <button id="sidebarToggleMobile">
        Menu
    </button>
<div class="container">
    <?php include 'sidebar.php'; ?>
    <div class="main-content">

