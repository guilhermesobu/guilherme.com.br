<?php 
include '../defaultTop.php';
?>

<div class="container pt-5">

    <div class="row rounded mschange">

        <div class="col pb-4 px-5" id="am">
            <h1>Meus serviços realizados</h1>
            <p>teste</p>
            <ul>
                <li>Projetos e páginas</li>
                <li>Logos e artes</li>
                <li>Eu tentei reproduzir alguns ícones comuns, todos os icones foram feitos a partir do zero na extenção .odg de desenho do LibreOffice (Desenho OpenDocument). Dei umas "arranhadas", mas não sou artista, então tive algumas limitações. Note que em nenhum caso a parte central (como por exemplo o F do facebook) do ícone está transparente, eles são "solidos" e o fundo é transparente. Deixarei eles disponíveis para download para quem se interessar por eles. É possível mudar as cores deles da maneira que desejar usando alguns apps existentes por ai!</li>
            </ul>
        </div>
        <div class="col align-self-center p-1 mx-4 bg-dark rounded">
            <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100 p-1 rounded" src="/src/img/asamericana.png" alt="asamericana.com.br">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 p-1 rounded" src="/src/img/candidaadv.png" alt="candidaadv.com.br">
                    </div>
                    
                </div>
                <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

    </div>
</div>

<?php 
include '../defaultBotton.php';
?>