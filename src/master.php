<?php

    include_once "components/header.php";
    include_once "components/footer.php";
    include_once "lib/php/route.php";

    function imprimirPagina($pagina) {
        include_once "pages/$pagina";
    }

    $pg = empty($_GET["pagina"]) ? "null" : $_GET["pagina"];

    $pagina = tratarRota($pg);

    imprimirCabecalho("Fecitec | $pagina[0]");
    imprimirPagina($pagina[1]);
    imprimirRodape();

