<?php
include 'header.php';
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recetas - Mezcal N'B</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <main class="main-content">
        <section class="recipes-hero">
            <div class="recipes-hero-content">
                <h1>Recetas con Mezcal N'B</h1>
                <p>Descubre deliciosas formas de disfrutar nuestro mezcal</p>
            </div>
        </section>

        <section class="recipes-section">
            <h2>Nuestras Recetas</h2>

            <div class="recipes-grid">
                <!-- Receta 1 -->
                <div class="recipe-card"
                    onclick="abrirReceta('Margarita de Mezcal', 'Fácil', '5 minutos', '2 personas', 'Un clásico reinventado con el sabor ahumado y único de nuestro mezcal. Fresco, elegante y perfecto para cualquier ocasión.', ['60 ml de Mezcal N\'B', '30 ml de jugo de limón fresco', '20 ml de triple sec', '15 ml de jarabe simple', 'Hielo', 'Sal para el borde'], ['Humedece el borde de una copa con limón y pasa por sal', 'En una coctelera, vierte el mezcal, limón, triple sec y jarabe', 'Llena la coctelera con hielo y agita bien por 15 segundos', 'Cuela en la copa y sirve con hielo', 'Decora con una rodaja de limón'])">
                    <div class="recipe-image recipe-1"></div>
                    <div class="recipe-content">
                        <h3>Margarita de Mezcal</h3>
                        <div class="recipe-difficulty">
                            <span class="difficulty-badge">Fácil</span>
                        </div>
                        <div class="recipe-info">
                            <span class="recipe-time">⏱️ 5 minutos</span>
                            <span class="recipe-servings">👥 2 personas</span>
                        </div>
                        <p class="recipe-description">Un clásico reinventado con el sabor ahumado y único de nuestro
                            mezcal.</p>
                        <div class="recipe-view-more">Ver receta completa →</div>
                    </div>
                </div>

                <!-- Receta 2 -->
                <div class="recipe-card"
                    onclick="abrirReceta('Mezcal Paloma', 'Fácil', '5 minutos', '2 personas', 'Una bebida refrescante y cítrica que equilibra perfectamente con el aroma ahumado del mezcal. Ideal para días calurosos.', ['60 ml de Mezcal N\'B', '100 ml de jugo de toronja fresco', '30 ml de jugo de limón', '10 ml de jarabe simple', 'Hielo', 'Tajada de toronja'], ['Llena un vaso con hielo', 'Vierte el mezcal en el vaso', 'Añade el jugo de toronja y limón', 'Agrega el jarabe simple y revuelve bien', 'Decora con una tajada de toronja'])">
                    <div class="recipe-image recipe-2"></div>
                    <div class="recipe-content">
                        <h3>Mezcal Paloma</h3>
                        <div class="recipe-difficulty">
                            <span class="difficulty-badge">Fácil</span>
                        </div>
                        <div class="recipe-info">
                            <span class="recipe-time">⏱️ 5 minutos</span>
                            <span class="recipe-servings">👥 2 personas</span>
                        </div>
                        <p class="recipe-description">Una bebida refrescante y cítrica que equilibra perfectamente con
                            el mezcal.</p>
                        <div class="recipe-view-more">Ver receta completa →</div>
                    </div>
                </div>
            </div>
        </section>

        <section class="tips-section">
            <h2>Consejos para Disfrutar el Mezcal</h2>
            <div class="tips-grid">
                <div class="tip-card">
                    <h4>🍷 Temperatura Perfecta</h4>
                    <p>Disfruta el mezcal a temperatura ambiente o ligeramente frío. Evita temperaturas muy bajas para
                        apreciar completamente sus aromas.</p>
                </div>
                <div class="tip-card">
                    <h4>🥃 Acompañamientos</h4>
                    <p>Los mejores acompañamientos son sal de gusano, naranja, lima o alimentos ahumados que
                        complementan el perfil de sabor del mezcal.</p>
                </div>
                <div class="tip-card">
                    <h4>🎯 Saborea Lentamente</h4>
                    <p>Tómate tu tiempo para apreciar cada sorbo. El mezcal es para disfrutar y compartir, no para
                        consumir apresuradamente.</p>
                </div>
                <div class="tip-card">
                    <h4>🍾 Almacenamiento</h4>
                    <p>Guarda tu botella de Mezcal N'B en un lugar oscuro y fresco. Una vez abierto, mantendrá su
                        calidad durante años.</p>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer">
        <p>&copy; 2025 Mezcal N'B. Todos los derechos reservados.</p>
    </footer>

    <!-- MODAL PARA RECETAS -->
    <div id="receta-modal" class="receta-modal-overlay">
        <div class="receta-modal-window">
            <span class="receta-modal-close" onclick="cerrarReceta()">&times;</span>

            <div class="receta-modal-content">
                <h2 id="receta-titulo"></h2>

                <div class="receta-modal-info">
                    <span id="receta-dificultad" class="difficulty-badge"></span>
                    <span id="receta-tiempo">⏱️</span>
                    <span id="receta-porciones">👥</span>
                </div>

                <p id="receta-descripcion"></p>

                <div class="receta-modal-ingredientes">
                    <h3>Ingredientes</h3>
                    <ul id="receta-ingredientes-lista"></ul>
                </div>

                <div class="receta-modal-instrucciones">
                    <h3>Preparación</h3>
                    <ol id="receta-instrucciones-lista"></ol>
                </div>
            </div>
        </div>
    </div>

    <script>
        function abrirReceta(titulo, dificultad, tiempo, porciones, descripcion, ingredientes, instrucciones) {
            document.getElementById('receta-titulo').innerText = titulo;
            document.getElementById('receta-dificultad').innerText = dificultad;
            document.getElementById('receta-tiempo').innerText = '⏱️ ' + tiempo;
            document.getElementById('receta-porciones').innerText = '👥 ' + porciones;
            document.getElementById('receta-descripcion').innerText = descripcion;

            // Agregar ingredientes
            const ingredientesLista = document.getElementById('receta-ingredientes-lista');
            ingredientesLista.innerHTML = '';
            ingredientes.forEach(ingrediente => {
                const li = document.createElement('li');
                li.textContent = ingrediente;
                ingredientesLista.appendChild(li);
            });

            // Agregar instrucciones
            const instruccionesLista = document.getElementById('receta-instrucciones-lista');
            instruccionesLista.innerHTML = '';
            instrucciones.forEach(instruccion => {
                const li = document.createElement('li');
                li.textContent = instruccion;
                instruccionesLista.appendChild(li);
            });

            document.getElementById('receta-modal').style.display = 'flex';
        }

        function cerrarReceta() {
            document.getElementById('receta-modal').style.display = 'none';
        }

        // Cerrar modal al hacer clic fuera de él
        document.addEventListener('click', function (event) {
            const modal = document.getElementById('receta-modal');
            if (event.target === modal) {
                cerrarReceta();
            }
        });
    </script>
</body>

</html>