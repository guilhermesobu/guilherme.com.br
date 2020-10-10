<?php
include 'src/default/defaultTop.php';
?>

<div class="row-fluid david bg-diamond">

<!-- HEADER -->
    <div id="header" class="">
        <?php
        require 'src/default/header.php';
        ?>
    </div>

<!-- NAVBAR -->
    <div id="navbar" class="sticky-top">
        <?php
        require 'src/default/navbar.php';
        ?>
    </div>

<!-- CONTENT -->
    <div id="content">

        <?php

        //QUEM SOU
        require 'src/default/aboutMe.php';

        //CONHECIMENTOS
        require 'src/default/technique.php';



        //MEU PROPÓSITO
        require 'src/default/myPurpose.php';
        
        //MEUS TRABALHOS
        require 'src/default/myServices.php';

        /**
         * Sobre mim
         * Quais meu serviço
         * Meus trabalhos feitos
         * Como trabalho (vitrine, sou autonomo e trabalho sozinho, meus trabalhos são personalizados)
         * Meus conhecimentos tecnicos
         * O que preciso saber para trabalhar
         * Meus horários e contato
         */

        require 'src/default/copyright.php';

        ?>
    </div>
</div>

<?php
include 'src/default/defaultBotton.php';
?>