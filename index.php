<?php
include 'header.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mezcal N'B - Inicio</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <main class="main-content">
        <section class="hero">
            <div class="hero-content">
                <h1>Descubre Nuestros Mezcales Auténticos</h1>
                <p>Tradición y excelencia en cada sorbo</p>
                <a href="#menu" class="btn-primary">Explorar Catálogo</a>
            </div>
        </section>

        <section id="menu" class="menu-section">
            <h2>Nuestros Mezcales</h2>
            
            <div class="menu-grid">
                <div class="menu-card">
                    <div class="card-image mezcal-1"></div>
                    <div class="card-content">
                        <h3>Mezcal Artesanal Oaxaca</h3>
                        <p>100% agave espadin, destilado en alambique de cobre tradicional</p>
                        <span class="price">$499</span>
                        <button class="btn-card">Agregar al Carrito</button>
                    </div>
                </div>

                <div class="menu-card">
                    <div class="card-image mezcal-2"></div>
                    <div class="card-content">
                        <h3>Mezcal Joven Premium</h3>
                        <p>Agave silvestre, envejecido en barrica de roble blanco</p>
                        <span class="price">$679</span>
                        <button class="btn-card">Agregar al Carrito</button>
                    </div>
                </div>

                <div class="menu-card">
                    <div class="card-image mezcal-3"></div>
                    <div class="card-content">
                        <h3>Mezcal Reposado Especial</h3>
                        <p>Mezcla de agaves, perfecto para los paladares exigentes</p>
                        <span class="price">$799</span>
                        <button class="btn-card">Agregar al Carrito</button>
                    </div>
                </div>

                <div class="menu-card">
                    <div class="card-image mezcal-4"></div>
                    <div class="card-content">
                        <h3>Mezcal Añejo Extra</h3>
                        <p>Envejecido 5 años, notas de vainilla y chocolate</p>
                        <span class="price">$1,299</span>
                        <button class="btn-card">Agregar al Carrito</button>
                    </div>
                </div>
            </div>
        </section>

        <section class="about-section">
            <h2>¿Por Qué Elegirnos?</h2>
            <div class="about-grid">
                <div class="about-card">
                    <span class="icon">🔥</span>
                    <h4>100% Auténtico</h4>
                    <p>Mezcal genuino elaborado con métodos tradicionales</p>
                </div>
                <div class="about-card">
                    <span class="icon">🌵</span>
                    <h4>Mejor Calidad</h4>
                    <p>Seleccionamos los mejores agaves de Oaxaca</p>
                </div>
                <div class="about-card">
                    <span class="icon">🚚</span>
                    <h4>Envío Rápido</h4>
                    <p>Entrega a todo el país en 24-48 horas</p>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer">
        <p>&copy; 2025 Mezcal N'B. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
