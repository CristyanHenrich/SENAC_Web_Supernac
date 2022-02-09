<!DOCTYPE html>
<html lang="pt-br">

<head>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<link href="./suporte/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
</head>

<body>

<style>
@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@500;900&display=swap');

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
}

.header_logo {
  height: 100px;
}

.header-menu {
  display: flex;
  gap: 32px;
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
  margin-top: 20px;
}

.header-menu-item:hover {
  background-color: white;
  color: #FF8900;
  border-radius: 10px 10px 0px 0px;
  text-shadow: rgba(0, 0, 0, 0.23) 0px 3px 8px;
  text-decoration: none;
}
</style>

<header class="header">
    <img class="header_logo" src="./img/Logo Senac Branca.png" alt="Logo Supernac">
    <nav class="header-menu">
      <a href="../painel/index.php" id="Painel" class="header-menu-item"> <i class="fa-solid fa-user"></i> Bem Vindo <br> Cristyan </a>
      <a href="../painel/configuracao.php" id="Configuracao" class="header-menu-item"> <i class="fa-solid fa-cart-shopping-fast"></i> </a>
    </nav>
</header>
    
</body>

</html>