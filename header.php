<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda</title>
    <link rel="website icon" href="img/tienda-icon.png"/>
    <link rel="stylesheet" href="styles.css" />
    <script src="https://kit.fontawesome.com/81581fb069.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <div class="container-encabezado">
            <div class="container encabezado">
                <div class="container-logo">
                    <i class="fa-solid fa-mug-hot"></i>
                    <h1 class="logo"><a href="/">Harvest Coffee</a></h1>
                </div>
                <div class="modal-backdrop"></div>
                <div class="container-user">
        <i class="fa-solid fa-user" id="user-icon"></i>
    </div>
    <!-- El Modal -->
    <div id="myModal" class="modal">
        <!-- Contenido del Modal -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <div class="contenedor">
                <div class="contenido">
                    <div class="contenido-form">
                    <form method="post" action="procesar_registro.php">  
                         <h2>Registrarse</h2>
                            <div class="social-networks">
                                <ion-icon name="logo-twitch"></ion-icon>
                                <ion-icon name="logo-twitter"></ion-icon>
                                <ion-icon name="logo-instagram"></ion-icon>
                                <ion-icon name="logo-tiktok"></ion-icon>
                            </div>
                            <span>Use su correo electrónico para registrarse</span>
                            <div class="contenido-input">
                            <label for="nombre">Nombre:</label>
                            <input type="text" id="nombre" name="nombre" required>
                        </div>
                        <div class="contenido-input">
                            <label for="email">Correo:</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="contenido-input">
                            <label for="password">Contraseña:</label>
                            <input type="password" id="password" name="password" required>
                        </div>
                            <button class="button" type="submit">REGISTRARSE</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
                 <div class="shopping-cart-container">
                        <i class="fa-solid fa-basket-shopping"></i>
                        <div class="content-shopping-cart">
                            <span class="text">Carrito</span>
                            <span class="number" id="productsCount">(0)</span>
                        </div>
                        <div id="carrito">
                            <ul>
                                <li class="submenu">
                                    <div>
                                        <table id="lista-carrito" class="u-full-width">
                                            <thead>
                                                <th>Imagen</th>
                                                <th>Nombre</th>
                                                <th>Precio unit.</th>
                                                <th>Cantidad</th>
                                                <th>Total</th>
                                                <th></th>
                                            </thead>
                                            <tbody></tbody>
                                        </table>
                                        <a href="#" id="vaciar-carrito" class="button u-full-width">Vaciar Carrito</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-navbar">
            <nav class="navbar container">
                <i class="fa-solid fa-bars"></i>
                <ul class="menu">
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="tienda.php">Tienda</a></li>
                    <li><a href="Cafes.php">Cafes</a></li>
                    <li><a href="Postresybowls.php">Postres y Bowls</a></li>
                    <li><a href="Historia.php">Historia</a></li>
                    <li><a href="Blog.php">Blog</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <script src="scripts.js"></script>
