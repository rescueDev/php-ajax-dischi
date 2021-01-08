<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Vue Cdn -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
    <!-- Axios Cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
    <link rel="stylesheet" href="main.css">
    <title>PhpDischi</title>
    <!--   GOAL:
    Basandosi sui dati in allegato, sviluppare front-end e back-end nelle due varianti come visto questa mattina:
    - stampa integrale in PHP attraverso l'include
    - stampa attraverso axios su API in PHP
    Bonus: nella versione a API, aggiungere la possibilita' di filtrare per artista, facendo attenzione a filtrare i dati nella location piu' corretta
    Nota1: utilizzare le sole tecnologie viste questa mattina
    Nota2: per chi avesse fatto esercizio simile in precedenza, e' possibile riciclare il CSS -->
    <?php
    include 'data.php'
    ?>
    <?php var_dump($database)  ?>
</head>

<body>
    <div id="app">
        <div class="buttons">
            <button></button>
        </div>
        <div class="dischi">

        </div>
    </div>
    <script src="script.js"></script>
</body>

</html>