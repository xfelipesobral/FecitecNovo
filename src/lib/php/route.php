<?php

    function tratarRota($rota) {
        // Rotas
        $inicio = ["Início", "inicio.php"];

        // Caso vazio, vá para o inicio
        if (empty($rota)) {
            return $inicio;
        }

        // Retorno das rotas
        switch($rota) {

            default: 
                return $inicio;
        }
    }