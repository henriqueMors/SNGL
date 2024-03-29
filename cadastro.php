<?php

    if (isset($_POST[`submit`])) {
        print_r($_POST[`nome`]);
        print_r($_POST[`email`]);
        print_r($_POST[`telefone`]);
        print_r($_POST[`nascimento`]);
    }
 
?>


<!DOCTYPE HTML>
<html lang="pt-br">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>S N G L</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="Singelo Gabi Barber" />
      <meta name="keywords" content="singelo sngl gabi pais barber" />
      <meta name="author" content="Henrique Mors" />
      <!-- Icone de favoritos -->
      <link rel="shortcut icon" href="/images/favicon_io/favicon-16x16.png">
      <!-- fonts  -->
      <link href="https://fonts.googleapis.com/css?family=Karla:400,700" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700" rel="stylesheet">
      <!-- Animate.css -->
      <link rel="stylesheet" href="css/animate.css">
      <!-- Icomoon Icon Fonts-->
      <link rel="stylesheet" href="css/icomoon.css">
      <!-- Bootstrap  -->
      <link rel="stylesheet" href="css/bootstrap.css">
      <!-- Owl Carousel -->
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <!-- Magnific Popup -->
      <link rel="stylesheet" href="css/magnific-popup.css">
      <link rel="stylesheet" href="css/stylecadastro.css">
      <!-- Modernizr JS -->
      <link rel="stylesheet" href="file:///">
      <script src="js/modernizr-2.6.2.min.js"></script>
      <!-- FOR IE9 below -->
      <!--[if lt IE 9]>
															<script src="js/respond.min.js"></script>
															<!-- [endif] -->
   </head>

    <body>
        <div class="content">
                <div class="text">CADASTRO</div>
            <form action="cadastro.php" method="POST">
                <div class="campo">
                    <span class="fas fa-user"></span>
                    <input type="text" name="nome" id="nome" class="inputUser" required oninvalid="this.setCustomValidity('Insira seu nome completo')" 
                    onchange="try{setCustomValidity('')}catch(e){}">
                    <label for="nome_completo">Nome Completo</label>
                </div>
                <div class="campo">
                    <span class="fas fa-user"></span>
                    <input type="email" name="email" id="email" class="inputUser"required oninvalid="this.setCustomValidity('Insira um email válido')" 
                    onchange="try{setCustomValidity('')}catch(e){}">
                    <label for="email">E-mail</label>
                </div>
                <div class="campo">
                    <span class="fas fa-lock"></span>
                    <input type="number" name="telefone" id="telefone" class="inputUser" required oninvalid="this.setCustomValidity('Insira seu número de telefone com DDD')" 
                    onchange="try{setCustomValidity('')}catch(e){}">
                    <label for="telefone">Telefone</label>
                </div>
                <div class="campo">
                    <span class="fas fa-user"></span>
                    <input type="date"  name="nascimento" id="nascimento" class="inputUser" required oninvalid="this.setCustomValidity('Insira sua data de nascimento')" 
                    onchange="try{setCustomValidity('')}catch(e){}">
                    <label for="nascimento">Nascimento</label>
                </div>
                <div class="campo">
                    <span class="fas fa-lock"></span>
                    <input type="password"  name="senha" id="senha" class="inputUser" required oninvalid="this.setCustomValidity('Insira sua senha')" 
                    onchange="try{setCustomValidity('')}catch(e){}">
                    <label for="senha">Senha</label>
                </div>
                <div class="campo">
                    <span class="fas fa-lock"></span>
                    <input type="password"  name="confsenha" id="confsenha" class="inputUser" required oninvalid="this.setCustomValidity('Confirme sua senha')" 
                    onchange="try{setCustomValidity('')}catch(e){}">
                    <label for="confirmar_senha">Confirmar Senha</label>
                </div>
                <button type="submit" name="submit" id="submit">Cadastrar</button>
                <div class="cadastrar">
                    Já é registrado?
                    <a href="login.html">Faça seu login</a>
                </div>
            </form>
        </div>
    </body>
</html>