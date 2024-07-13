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
                <h3 class="justify-content-center">Ilhéus</h3>
                <p class="text-muted">Ilhéus é uma cidade localizada na região sul do estado da Bahia, no Brasil. É conhecida por suas belas praias, coqueirais, fazendas de cacau e pela sua rica história cultural.
A cidade foi um importante centro de produção de cacau durante o século XIX e início do século XX, o que trouxe grande prosperidade para a região. Hoje, é possível visitar algumas das antigas fazendas de cacau, que preservam a arquitetura e história dessa época.
Além das fazendas de cacau, Ilhéus também possui belas praias, como a Praia dos Milionários, Praia do Sul e a Praia dos Amores, que atraem turistas em busca de sol e mar.
A cidade também é conhecida por ser o cenário dos romances do escritor Jorge Amado, que retratou a vida e os costumes da região em suas obras. É possível visitar a Casa de Cultura Jorge Amado, que preserva a memória do escritor e sua relação com a cidade.
Ilhéus também possui uma rica gastronomia, com pratos típicos da culinária baiana, como o acarajé, a moqueca e o bobó de camarão, que podem ser degustados nos diversos restaurantes da cidade.
Em resumo, Ilhéus é um destino turístico que combina belas paisagens naturais, história e cultura, oferecendo aos visitantes uma experiência única e encantadora.</p>
            </div>
        </main>
        <?php   
            include('php/footer.php');
        ?>
    </body>
</html>