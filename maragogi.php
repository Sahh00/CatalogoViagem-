<!DOCTYPE html>
<html lang="PT-BR">
    <head>
        <meta charset="UTF-8">

        <!-- CSS -->
        <link rel="stylesheet" href="styles.css">

        <!-- BOOTSTRAP -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>

        <!-- FONTE -->
        <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
        <title> Brother's Travel</title>
    </head>
    
    <body>
        <?php
            include('php/header.php');
        ?>
        <main>
            <div>
                <img class="img-fluid" src="img/imagemViagens.jpg" alt="">
            </div>
            <div class="container p-5">
                <h3 class="justify-content-center">Maragogi</h3>
                <p class="text-muted">Maragogi é uma cidade localizada na costa nordeste do Brasil, no estado de Alagoas. É famosa por suas praias de areia branca e águas cristalinas, que fazem parte da chamada "Costa dos Corais", a segunda maior barreira de corais do mundo.

As piscinas naturais de Maragogi são um dos principais pontos turísticos da região, onde os visitantes podem fazer mergulho com snorkel para ver de perto a vida marinha colorida e diversificada que habita os recifes de corais.

Além das belezas naturais, Maragogi também oferece uma infraestrutura turística bem desenvolvida, com uma variedade de hotéis, pousadas, restaurantes e opções de lazer.

A cidade é um destino popular para quem busca um ambiente tranquilo e belas paisagens naturais, sendo um lugar ideal para relaxar e desfrutar das belezas do litoral brasileiro.</p>
            </div>
        </main>
        <?php   
            include('php/footer.php');
        ?>
    </body>
</html>