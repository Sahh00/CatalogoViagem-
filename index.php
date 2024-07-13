<!DOCTYPE html>

<html lang="pt-BR">

    <head>
        <meta charset="UTF-8">
        <title> Brother's Travel</title>

        <meta name="viewport" content="width=device-width, initial-scale=1">

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

        <!-- ScriptBarraDePesquisa -->
    <script>
        function pesquisar(event) {
            event.preventDefault();
            var searchQuery = document.getElementById("searchInput").value.toLowerCase();
            var destinations = {
                "porto de galinhas": "porto_de_galinhas.php",
                "porto": "porto_de_galinhas.php",
                "galinhas": "porto_de_galinhas.php",
                "maragogi": "maragogi.php",
                "ilhéus": "ilheus.php",
                "rio de janeiro": "rio_de_janeiro.php",
                "rio": "rio_de_janeiro.php",
                "praia da pipa": "praia_da_pipa.php",
                "praia" : "praia_da_pipa.php",
                "beto carrero world": "beto_carrero_world.php",
                "beto carrero": "beto_carrero_world.php",
            };

            if (destinations[searchQuery]) {
                window.location.href = destinations[searchQuery];
            } else {
                alert("Destino não encontrado. Tente novamente.");
            }
        }

        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById("searchForm").addEventListener("submit", pesquisar);
        });
    </script>
</head>

<body>

    <?php include('php/header.php'); ?>

    <main>
        <div class="container p-3">
            <div class="d-flex justify-content-center">
                <form class="d-flex w-50" role="search" id="searchForm">
                    <input class="form-control me-2" type="search" placeholder="Para onde deseja ir?" aria-label="Search" id="searchInput">
                    <button class="btn btn-outline-success" type="submit">Pesquisar</button>
                </form>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="d-flex justify-content-between">
                        <span class="text-start">Ofertas Especiais</span>
                    </h1>
                    <p class="text-muted">Viajar é uma ótima prática para descansar, conhecer diferentes culturas e se divertir.</p>
                </div>
            </div>
        </div>

    <div id="card-container">
        <div class="container d-flex justify-content-center align-items-center">  

            <div class="row g-3 justify-content-center p-3"><!--Catalogo de Viagens--> 

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card" style="width: 18rem;"><!--Card-Porto-->
                        <img class="card-img-top" src="img/destinos/porto-galinhas.jpg" alt="Capa Card-Porto de Galinhas">
                            <div class="card-body">
                                <h5 class="card-title">Porto de Galinhas</h5>
                                <p class="card-text text-muted">Porto de Galinhas é uma das praias mais famosas do Brasil, conhecida por suas águas claras, areias brancas e piscinas naturais.</p>
                                <a href="porto_de_galinhas.php" class="btn btn-primary ">ENTRE EM CONTATO  <svg class="logo-whatsapp" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" >
                                    <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/>
                                </svg></a>
                            </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card" style="width: 18rem;"><!--Card-Maragogi-->
                        <img class="card-img-top" src="img/destinos/maragogi.jpg" alt="Capa Card-Maragogi">
                            <div class="card-body">
                                <h5 class="card-title">Maragogi</h5>
                                <p class="card-text text-muted">Maragogi é uma cidade litorânea conhecida por suas praias paradisíacas e piscinas naturais formadas pelos recifes de corais lindos da região.  </p>
                                <a href="maragogi.php" class="btn btn-primary">ENTRE EM CONTATO  <svg class="logo-whatsapp" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/>
                                </svg></a>
                            </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card" style="width: 18rem;"><!--Card-Ilhéus-->
                        <img class="card-img-top" src="img/destinos/ilheus.jpg" alt="Capa Card-Ilhéus">
                            <div class="card-body">
                                <h5 class="card-title">Ilhéus</h5>
                                <p class="card-text text-muted">Ilhéus é uma cidade histórica localizada no litoral sul da Bahia, conhecida por suas belas praias, arquitetura colonial e influência da cultura do cacau.</p>
                                <a href="ilhéus.php" class="btn btn-primary">ENTRE EM CONTATO  <svg class="logo-whatsapp" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/>
                                </svg></a>
                            </div>
                    </div>
                </div>  

            </div>

        </div>
    
        <div class="container d-flex justify-content-center align-items-center">  

            <div class="row g-3 justify-content-center p-3"><!--Catalogo de Viagens--> 

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card" style="width: 18rem;"><!--Rio de Janeiro-->
                        <img class="card-img-top" src="img/destinos/rio-de-janeiro.jpg" alt="Capa Card-Porto de Galinhas">
                            <div class="card-body">
                                <h5 class="card-title">Rio de Janeiro</h5>
                                <p class="card-text text-muted">A Praia da Pipa é uma charmosa vila de pescadores localizada no litoral sul do Rio Grande do Norte, conhecida por suas belas praias e vida noturna agitada.</p>
                                <a href="rio_de_janeiro.php" class="btn btn-primary">ENTRE EM CONTATO  <svg class="logo-whatsapp" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/>
                                </svg></a>
                            </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card" style="width: 18rem;"><!--Praia da Pipa-->
                        <img class="card-img-top" src="img/destinos/praia-da-pipa.jpg" alt="Capa Card-Maragogi">
                            <div class="card-body">
                                <h5 class="card-title">Praia da Pipa</h5>
                                <p class="card-text text-muted"> A Praia da Pipa é uma charmosa vila de pescadores localizada no litoral sul do Rio Grande do Norte, conhecida por suas belas praias e vida noturna agitada.</p>
                                <a href="praia_da_pipa.php" class="btn btn-primary">ENTRE EM CONTATO  <svg class="logo-whatsapp" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/>
                                </svg></a>
                            </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card" style="width: 18rem;"><!--Beto Carrero World-->
                        <img class="card-img-top" src="img/destinos/beto-carrero-world.jpg" alt="Capa Card-Ilhéus">
                            <div class="card-body">
                                <h5 class="card-title">Beto Carrero World</h5>
                                <p class="card-text text-muted">O Beto Carrero World é o maior parque temático da América Latina, localizado em Penha, Santa Catarina. Com mais de 100 atrações.</p>
                                <a href="beto_carrero_world.php" class="btn btn-primary">ENTRE EM CONTATO  <svg class="logo-whatsapp" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/>
                                </svg></a>
                            </div>
                    </div>
                </div>  

            </div>

        </div>
    </div>

    </main>

            <?php
                include('php/footer.php');
            ?>

</body>

</html>