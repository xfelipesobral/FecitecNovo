<?php

    function imprimirCabecalho($pagina) {
        $titulo = "10ª FECITEC";

        echo "
        <!DOCTYPE html>
            <html lang='pt-br'>

            <head>
                <meta charset='utf-8'>
                <meta name='keywords' content='fecitec, feira, palotina, feira de ciências, ufpr'>
                <meta property='og:site_name' content='$titulo'/>
                <meta name='author' content='Felipe V. Sobral - www.github.com/felipe-sobral'/>
                <meta property='og:title' content='$titulo' >
                <meta property='og:description' content='$titulo - PALOTINA PR'>
                <meta name='viewport' content='width=device-width, initial-scale=1.0' />

                <title>$pagina</title>

                <link href='../src/lib/css/icon.css' rel='stylesheet'>
                <link type='text/css' rel='stylesheet' href='../src/lib/css/materialize.min.css' media='screen,projection' />
                <link type='text/css' rel='stylesheet' href='../src/lib/css/main.css' media='screen,projection' />
            </head>

            <body>
        ";
    }



    