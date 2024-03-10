<!doctype html>
<html>

<head>
<?php
    include_once '../analistar/analistar.php';
    include_once 'pg/header.html';
    ?>
    
</head>

<body>
<div class="alertaInicial">
Olá, visitante! Seja bem-vindo ao meu portfólio. Por favor, esteja ciente de que ainda estou trabalhando no aprimoramento da navegação e pode haver alguns bugs. Em breve, estarei lançando a versão completa do meu portfólio. Agradeço pela sua compreensão!
</div>
<div class="fundo-teste"></div>
<div class="fundo-projetos"></div>
<div class="fundo-sistemas"></div>
<div class="central">

<div class="div-viewport">
    <?php
        include_once 'pg/menu.html';
    ?>
   
      <?php
        include_once 'pg/home.html';
    ?>
      <?php
        include_once 'pg/sobre.html';
    ?>
    
      <?php
        include_once 'pg/projetos.html';
    ?>
      <?php
        include_once 'pg/sistemas.html';
    ?>
      <?php
        include_once 'pg/tecnologias.html';
    ?>
      <?php
        include_once 'pg/rodape.html';
    ?>

</body>

</html>