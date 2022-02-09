<!DOCTYPE html>
<html lang="pt-br">

<head>
<link href="./suporte/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>

<style>
@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@500;900&display=swap');
@import url(“https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css”);

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  text-decoration: none;
}

.header {
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: space-around;
  padding: 0px;
  background-color: #FF8900;
  width: 100%;
  box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
}

.header_logo {
  height: 100px;
}

.header-menu {
  display: flex;
  gap: 35px;
  gap: 35px;
  flex-direction: row;
  flex-wrap: nowrap;
  align-content: center;
  justify-content: center;
  align-items: center;
}

.header-menu-item {
  font-family: 'Sarala', sans-serif;
  color: #FFF2E7;
  font-weight: 400;
  font-size: 18px;
  width: auto;
  height: 70%;
  padding: 10px;
  text-align: center;
  margin-top: 0px;
}

.header-menu-item:hover {
  background-color: white;
  color: #FF8900;
  border-radius: 10px 0px 10px 0px;
  text-shadow: rgba(0, 0, 0, 0.23) 0px 3px 8px;
  text-decoration: none;
}

#nome{
  font-size: 15px;
}
</style>

<header class="header">
    <img class="header_logo" src="./img/Logo Senac Branca.png" alt="Logo Supernac">
    <nav class="header-menu">
      <a href="./login.php" id="Home" class="header-menu-item"> Bem Vindo <br> <p id="nome">Entrar</p> </a>
      <a href="#" id="Carrinho" class="header-menu-item"> Carrinho </a>
    </nav>
</header>
    
</body>

</html>