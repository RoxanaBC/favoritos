<?php
    require 'includes/funciones.php';

    //crear mensaje de inserscion correcta a la bd
    $resultado = $_GET['resultado'] ?? null;


    incluirTemplate('header');
    ?>

    <!-- sobre-nosotros -->     
    <!-- seccion del catalago -->
    <section class="contenedor">
        <div class="catalago-home">
            <h2>
                    Favoritos
            </h2>
            <div class="catalago-home-container">
                <!-- tarjeta de la casa publicada -->
                
                <?php
                $limite = 4;
                //include 'includes/templates/anuncios.php';
                ?>
            </div>
        </div>
    </section>
    <!-- footer -->
    <footer>
        <p>Bienes<span>Raices</span>Tux Todos los Derechos Reservados &copy;</p>
    </footer>

    <!-- mandamos a llmar js -->
    <script src=" js/script.js"></script>
    </body>

    </html>