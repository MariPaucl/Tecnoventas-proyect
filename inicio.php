<?php
session_start();

if(isset($_SESSION['sessCustomerID'])){
    $idCliente = $_SESSION['sessCustomerID'];
} else {
    header("location:index.html");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo1.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/d3ed00feee.js" crossorigin="anonymous"></script>

    <title>Tecnoventas</title>
    <link rel="website icon" type="png" href="imagenes/Tecnoventas.png">

</head>
<div class="head">
    <div class="logo">
        <a>TECNOVENTAS</a>
    </div>
    <nav class="navbar">
        <ul>
            <li><a href="cerrarSesion.php">Cerrar sesion</a></li>
            <li><a>Productos <i class="icon-abajo2"></i></a>
                <ul class="submenu">
                    <li><a href="cell.php">
                            Celulares
                        </a></li>
                    <li><a href="Portatiles.php">
                            Portatiles
                        </a></li>
                    <li><a href="computadores.php">
                            Computadores
                        </a></li>
                    <li><a href="Tablets.php">
                            Tablets
                        </a></li>
                    <li><a href="parlantes.php">
                            Parlantes
                        </a></li>
                    <li><a href="audifonos.php">
                            Audifonos
                        </a></li>
                </ul>
            </li>
            <li><a href="perfilCliente/perfil.php" title="Mi Perfil"><i class="fa fa-user"></i></a></li>
        </ul>
    </nav>

    </ul>
    </nav>
</div>

<header class="content header">
    <h2 class="title"> Tecnoventas</h2>
    <p>
        Esta pagina esta dirigida para todo tipo de publico, en especial para las personas
        que no saben que comprar o que es lo mejor para comprar y que sea del gusto de la
        persona, esta pagina esta para eso, para poder comprar los productos y asi hacer
        mucho mas facil y menos tedioso el labor de estar buscando pagina por pagina
        comparando producto por producto perdiendo mucho tiempo y asi el cliente
        ahorrara tiempo y podra comprar el producto que necesita sin problema.

    </p>

    <div class="btn-home">
        <a href="masinf/inf.html" class="btn">SABER MÁS</a>
    </div>

</header>
<section class="content sau">
    <h2 class="title">Productos
    </h2>
    <p>
        ¡Tenemos una variedad de productos que puedes escoger para poder compararlos!
    </p>

    <div class="box-container">
        <div class="box">
            <h3>Celulares </h3>
            <img alt="" src="css/img/celulares.png">
            <p> Tenemos una variedad de Celulares que puedes elegir</p>
        </div>

        <div class="box">
            <h3>Portatiles y Computadores</h3>
            <img alt="" src="css/img/portatiles.png">
            <p> Tenemos una variedad de Portatiles y Computadores que puedes elegir</p>
        </div>

        <div class="box">
            <h3>Tablets </h3>
            <img alt="" src="css/img/tablets.png">
            <p> Tenemos una variedad de Tablets que puedes elegir</p>
        </div>

        <div class="box">
            <h3>Parlantes</h3>
            <img alt="" src="css/img/parlantes.png">
            <p> Tenemos una variedad de Parlantes que puedes elegir</p>
        </div>

        <div class="box">
            <h3>Audifonos</h3>
            <img alt="" src="css/img/audifonos.png">
            <p> Tenemos una variedad de Audifonos que puedes elegir</p>
        </div>
    </div>
</section>

<section class="content abaut">

    <h2 class="title">Nosotros</h2>

    <p>
        Tecnoventas: para que la calidad no cueste más, es una página web que le ofrece a las personas están interesadas
        en comprar un producto informático/tecnológicos, y que no tengan mucho conocimiento del tema; el programa le
        dará al usuario la información necesaria para poder solicitar el producto que esté a su disposición que se
        acomode al presupuesto del que dispone, y que tenga la mejor calidad posible que esté en el mercado.

    </p>

</section>

<section class="content price">

    <article class="contain">
        <h2 class="title"> Proposito</h2>
        <p> El presente programa está centrado en ayudar a las personas con poco conocimiento en la
            parte de productos tecnológicos, su comparación y su adquisición en el mercado.



        </p>

    </article>

</section>

<main>
    <section class="gallery" id="portafolio">
        <div class="contenedor">
            <h2 class="subtitulo">Galeria</h2>
            <div class="contenedor-galeria">
                <img src="css/img/imagen1.webp" alt="" class="img-galeria">
                <img src="css/img/imagen2.jpg" alt="" class="img-galeria">
                <img src="css/img/imagen3.jpg" alt="" class="img-galeria">
                <img src="css/img/imagen4.png" alt="" class="img-galeria">
                <img src="css/img/imagen5.jpeg" alt="" class="img-galeria">
                <img src="css/img/imagen6.jpg" alt="" class="img-galeria">
            </div>
        </div>
    </section>

    <section class="imagen-light">
        <img src="inicio/imagenes/close.png" alt="" class="close">
        <img src="inicio/imagenes/galaxy.jpg" alt="" class="agregar-imagen">
    </section>


    <section class="expert" id="expertos">
        <h2 class="subtitulo">Expertos en:</h2>
        <section class="experts">
            <div class="cont-expert">
                <img src="css/img/analytics - copia.png" alt="">
                <h1 class="n-expert">Analytics</h1>
            </div>
            <div class="cont-expert">
                <img src="css/img/marketing.png" alt="">
                <h3 class="n-expert">Marketing</h3>
            </div>
            <div class="cont-expert">
                <img src="css/img/tecnologia - copia.png" alt="">
                <h3 class="n-expert">Tecnologia</h3>
            </div>
        </section>

        <footer>
            <div class="row primary">
                <div class="column about">
                    <h3>Sobre Nosotros</h3>
                    <p>
                        Tecnoventas es un sitio web de venta de productos tecnológicos...
                    </p>
                    <div class="social">
                        <li><a href="https://www.facebook.com/profile.php?id=100094998473176"><i
                                    class="fa-brands fa-facebook-square"></i></a></li>
                        <li><a href="http://www.instagram.com/tecnoventas.la/?next=%2F"><i
                                    class="fa-brands fa-instagram-square"></i></a></li>
                        <li><a href="http://twitter.com/TecnoVentas_La"><i class="fa-brands fa-twitter-square"></i></a>
                        </li>
                        <li><a href="https://wa.me/3504160019?text=Hola, necesito más información."><i
                                    class="fa-brands fa-whatsapp-square"></i></a></li>
                    </div>
                </div>
                <div class="column links">
                    <h3>Otros links</h3>

                    <ul>
                        <li>
                            <a href="Preguntas/Preguntas.html">Ayuda</a>
                        </li>
                        <li>
                            <a href="https://tecnoventaaas.blogspot.com/">Blog</a>
                        </li>
                        <li>
                            <a href="docs/Manual de Usuario.pdf">Manual de Usuario</a>
                        </li>
                        <li>
                            <a href="https://expo.dev/artifacts/eas/cntYZkspixZqUdWY5T1xUh.apk">Descargar la APP</a>
                        </li>
                        <li>
                            <a href="terminos/terminos.html">Terminos & Condiciones</a>
                        </li>
                        <li>
                            <a href="mailto:tecnoventas.ayuda@gmail.com">tecnoventas.ayuda@gmail.com</a>
                        </li>
                    </ul>
                </div>
                <div class="column subscribe">
                    <h3>Comentarios</h3>
                    <div>
                        <form>
                            <input type="text" placeholder="Envía tus comentarios" />
                            <button class="button">Enviar</button>
                    </div>
                    </form>
                </div>
            </div>
            <div class="row copyright">
                <p>copyrigth &copy;2023 codcodeOpacity. designed by <span>nethunt</span></p>
            </div>
            </div>
        </footer>

</main>
<script src="js/lightbox.js"></script>

</body>

</html>