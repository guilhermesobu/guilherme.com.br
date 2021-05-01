<?php
include '../defaultTop.php';

$atualHp = 1000;
$maxHp = 10000;

$atualExp = 0;
$maxExp = 100;


?>


<div class="container-fluid">

    <div class="row">
        <div class="col">
            <h1>RPGzinho para brincar</h1>
        </div>
    </div>

    <?php 
    
    include 'personagem.php'; 
    

    include 'botoes.php';

    include 'console.php';
    
    ?>
    



</div>


<?php
include '../defaultBotton.php';
?>