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
                <h3 class="justify-content-center">Rio de Janeiro</h3>
                <p class="text-muted">O Rio de Janeiro é uma cidade localizada no sudeste do Brasil, conhecida por suas belas praias, paisagens deslumbrantes e vida cultural vibrante. A cidade é famosa por pontos turísticos como o Pão de Açúcar, o Cristo Redentor, as praias de Copacabana e Ipanema, e o Maracanã, estádio icônico do futebol brasileiro.

Além das belezas naturais, o Rio de Janeiro também é conhecido por seus eventos culturais, como o Carnaval, considerado um dos maiores e mais animados do mundo, e o festival de música Rock in Rio, que atrai artistas e fãs de todo o mundo.

A cidade também possui uma rica história e arquitetura, com bairros como Santa Teresa, conhecido por suas ruas estreitas e casarões antigos, e o centro histórico, com prédios e monumentos que contam a história do Brasil colonial.

A gastronomia carioca também é um destaque, com uma grande variedade de restaurantes que oferecem pratos da culinária brasileira e internacional.

Em resumo, o Rio de Janeiro é uma cidade que encanta por suas belezas naturais, cultura diversificada e estilo de vida animado, sendo um destino turístico imperdível para quem visita o Brasil.</p>
            </div>
        </main>
        <?php   
            include('php/footer.php');
        ?>
    </body>
</html>