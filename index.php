<?php require('./vendor/header.php') ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supernac | Tudo em um só lugar</title>

    <link rel="stylesheet" type="text/css" href="./css/stylesheet.css" media="screen" />
</head>

<body>

    <section id="slider" class="container">

        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="./img/Slider.png" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="./img/Slider.png" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="./img/Slider.png" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </section>

    <section id="categorias" class="w-100 p-3">
        <h1>Conheça nossos produtos</h1>

        <article>
        <button id="Alimentos" type="button">Alimentos</button>
        <button id="Eletronicos" type="button">Eletronicos</button>
        <button id="Informatica" type="button">Informatica</button>
        </article>

    </section>

    <section id="novidades" class="container">
    <h3>Novidades que acabaram de chegar!</h3>

    <article>
        <div class="destaques">
        <img src="./img/produto1.png" alt="Produto 1">
        <p> Xiaomi Poco X3 Pro Dual Sim 128gb 6gb </p>
        <p class="preco"> R$ 2.199,00 </p>
        </div>
        <div class="destaques">
        <img src="./img/produto2.png" alt="Produto 2">
        <p> Smart Tv Box 8gb + 128gb 4k Android 11.1 - Mx Q Pro </p>
        <p class="preco"> R$ 200,00 </p>
        </div>
        <div class="destaques">
        <img src="./img/produto3.png" alt="Produto 3">
        <p> TV LED 24" Philco Linha Marrom 99243059 </p>
        <p class="preco"> R$ 879,00 </p>
        </div>
    </article>

    </section>

    <section id="opcoes" class="w-100 p-3">
        <h1>Mais opções para você!</h1>

        <article>
        <button id="Calc_Churrasco" type="button">Calcula <br> Churrasco</button>
        <button id="Ofertas" type="button">Ofertas</button>
        <button id="Fale_Conosco" type="button">Fale <br> Conosco</button>
        </article>

    </section>

</body>

<?php require('./vendor/footer.php') ?>

</html>