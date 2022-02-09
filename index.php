<?php require('./vendor/header.php') ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supernac | Tudo em um só lugar</title>
</head>

<style>

#slider{
    margin-top: 50px;
}

#categorias{
    margin-top: 50px;
    background-color: #FF8900;
    height: 400px;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
}

#categorias h1{
    text-align: center;
    padding: 10px;
    color: #00326E;
    font-weight: 600;
    text-shadow: #474747 2px 2px 2px;
}

#categorias article{
    margin-top: 25px;
    text-align: center;
}

#categorias article button{
    text-align: center;
    padding: 10px;
    background-color: #00326E;
    width: 250px;
    height: 250px;
    font-size: 30px;
    font-weight: 600;
    border: none;
    margin-left: 20px;
    margin-right: 20px;
    color: white;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
}

#Alimentos:hover{
    background-image: url(./img/alimentos.png);
    background-size: 500px;
    opacity: 90%;
    text-shadow: #474747 3px 5px 2px;
}
#Eletronicos:hover{
    background-image: url(./img/eletronicos.jpg);
    background-size: 500px;
    opacity: 90%;
    text-shadow: #474747 3px 5px 2px;
}
#Informatica:hover{
    background-image: url(./img/informatica.jpg);
    background-size: 500px;
    opacity: 90%;
    text-shadow: #474747 3px 5px 2px;
}


#novidades{
    margin-top: 50px;
    height: 400px;
}

#novidades h3{
    color:#FF8900;
}

#novidades article{
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    align-content: center;
    justify-content: center;
    align-items: center;
    align-items: center;
    gap: 50px;
    margin-top: 20px;
}

.destaques img{
    width: 150px;
    height: 160px;
    margin-top: 20px;
}

.destaques{
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    align-content: center;
    justify-content: center;
    background-color: white;
    width: 250px;
    height: 350px;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
}

#opcoes{
    margin-top: 100px;
    background-color: #00326E;
    height: 400px;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
}

#opcoes h1{
    text-align: center;
    padding: 10px;
    color: white;
    font-weight: 600;
    text-shadow: #474747 2px 2px 2px;
}

#opcoes article{
    margin-top: 25px;
    text-align: center;
    display: flex;
    margin-top: 25px;
    text-align: center;
    align-content: center;
    flex-direction: row;
    flex-wrap: nowrap;
    justify-content: center;
    align-items: center;
}

#opcoes article button{
    text-align: center;
    padding: 10px;
    background-color: #FF8900;
    width: 250px;
    height: 250px;
    font-size: 30px;
    font-weight: 600;
    border: none;
    margin-left: 20px;
    margin-right: 20px;
    color: white;
    border-radius: 50%;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
}

#Calc_Churrasco{
    background-image: url(./img/calc_churrasco.jpg);
    background-size: 500px;
    text-shadow: #474747 3px 5px 2px;
}
#Calc_Churrasco:hover{
    opacity: 80%;
}

#Ofertas{
    background-image: url(./img/cupons.jpg);
    background-size: 500px;
    text-shadow: #474747 3px 5px 2px;
}
#Ofertas:hover{
    opacity: 80%;
}

#Fale_Conosco{
    background-image: url(./img/telefone.jpg);
    background-size: 500px;
    text-shadow: #474747 3px 5px 2px;
}
#Fale_Conosco:hover{
    opacity: 80%;
}
    
</style>

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
        </div>
        <div class="destaques">
        <img src="./img/produto2.png" alt="Produto 2">
        </div>
        <div class="destaques">
        <img src="./img/produto3.png" alt="Produto 3">
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