<?php
    // LLAMAR A UNA API
    const API_URL = "https://whenisthenextmcufilm.com/api";
    //Inicializar una nueva sesión de cURL; ch = cURL handle
    $ch = curl_init(API_URL);
    //Indicar recibir el resultado de la Petición y no mostrarla en pantalla
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    //Ejecutar la petición y guardar el resultado de la Petición
    $result = curl_exec($ch);

    $data = json_decode($result, true);

    curl_close($ch);

    // var_dump(value: $data);

    // $result = file_get_contents(API_URL); //Si solo se hará un get de la API
?>  

<head>
    <meta charset="UTF-8">
    <title>La próxima película de marvel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- PICO CSS Class Less Version -->
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css"
    >   
</head>

<body>
    <main>
        <section>
            <img src="<?= $data["poster_url"] ?>" width="300" alt="Poster de <?= $data["title"] ?>" style="border-radius: 16px;">
            <hgroup>
                <?= $data["title"]; ?>
                <p>Se estrena en: <?= $data["days_until"]; ?> días</p>
                <h3>Fecha de estreno <?= $data["release_date"]; ?></h3>
                <p>La siguiente es: <?= $data["following_production"]["title"]; ?></p>
            </hgroup>
        </section>
        <!-- <pre style="font-size: 10px; overflow:scroll; height:200px;">
            <?= var_dump(value: $data); ?>
        </pre> -->
    </main>
</body>

<style>
    :root {
        color-scheme: light dark;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }

    body {
        display: grid;
        place-content: center;
    }

    section {
        display: flex;
        justify-content: center;
    }

    hgroup {
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
    img {
        margin-right: 24px;
    }
</style>