<?php
include 'view/defaultTop.php';
?>

<div class="row-fluid averia bg-diamond bg-secondary">

<!-- HEADER -->
    <div id="header" class="">
        <?php
        require 'view/header.php';
        ?>
    </div>

<!-- NAVBAR -->
    <div id="navbar" class="sticky-top">
        <?php
        require 'view/navbar.php';
        ?>
    </div>

<!-- CONTENT -->
    <div id="content">

        <?php

        //HOME
        require 'view/wellcome.php';

        //NOTICES
        require 'view/notices.php';

        //QUEM SOU
        require 'view/aboutMe.php';

        //CONHECIMENTOS
        require 'view/technique.php';

        //QUERO CRIAR MEU PALCO
        require 'view/mpw.php';



        //MEU PROPÓSITO
        require 'view/myPurpose.php';
        
        //MEUS TRABALHOS
        require 'view/myServices.php';

        /**
         * Sobre mim
         * Quais meu serviço
         * Meus trabalhos feitos
         * Como trabalho (vitrine, sou autonomo e trabalho sozinho, meus trabalhos são personalizados)
         * Meus conhecimentos tecnicos
         * O que preciso saber para trabalhar
         * Meus horários e contato
         */

        require 'view/copyright.php';

        ?>
    </div>
</div>

<?php
include 'view/defaultBotton.php';
?>