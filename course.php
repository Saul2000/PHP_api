<?php
    $name = "Oso";
    $isDev = true;
    $age = 5;
    $myage = 18;
    $number = (bool) 1;

    echo $number;

    var_dump($name);
    var_dump(value: $isDev);
    var_dump($age);
    
    echo gettype($name);
    echo gettype(value: $isDev);
    echo gettype($age);

    define('LOGO_URL', 'https://cdn.freebiesupply.com/logos/large/2x/php-logo-png-transparent.png');

    $output = "hola " . $name . " feliz " . $age . " cumpleaños";

    const NOMBRE = 'OSO';

    $yourAge = $myage > 18;
    
    echo "<br/>";

    // SINTAXIS BASICA DE IF EN PHP
    if($yourAge){
        echo "Eres mayor de edad";
    } else if ($isDev) {
        echo "Eres desarrollador";
    } else {
        echo "Eres menor de edad";
    }

    echo "<br/>";

    $outputAge = $yourAge
        ? "Eres mayor de edad"
        : "Eres menor de edad";

    $outputMatch = match (true) {
        $myage   < 3  => "Eres un bebé, $name 👶",
        $myage   < 11 => "Eres un niño, $name 🧒",
        $myage   < 18 => "Eres un adolescente, $name 👦",
        $myage === 18 => "Eres mayor de edad, $name 🍻",
        $myage  <= 30 => "Eres un adulto joven 👨‍🦱",
        $myage  <= 60 => "Eres un adulto mayor 👨",
        default       => "Eres un anciano 👴",

        // 0, 1, 2 => "Eres un bebé, $name 👶",
        // 3, 4, 5, 6, 7, 8, 9, 10 => "Eres un niño, $name 🧒",
        // 11, 12, 13, 14, 15, 16, 17 => "Eres un adolescente, $name 👦",
        // 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30 => "Eres un adulto joven 👨",
        // default => "Eres un adulto",
    };

    $bestLanguages = ["PHP", "JS", "Py", 1, 2];
    $bestLanguages[3] = "Java";
    $bestLanguages[] = "Typescript";

    $person = [
        "name" => "Oso",
        "age" => 5,
        "isDev" => true,
        "languages" => ["JS", "HTML", "CSS"],
    ];
    $person["name"] = "che";
    $person["languages"][] = "PHP";
?>  
    <ul>
        <?php foreach($bestLanguages as $key => $language) :  ?>
            <li><?= $key . " " . $language ?></li>
        <?php endforeach;  ?>
    </ul>

    <p><?= $bestLanguages[5] ?></p>

    <p><?= $outputMatch ?></p>

    <br/>

    <p><?= $outputAge ?></p>

    <br/>

<!-- SINTAXIS ALTERNA IF DE PHP -->
    <?php if ($yourAge) : ?>
        <p>Eres mayor de edad</p>

    <?php elseif ($isDev) : ?>
        <p>Eres desarrollador</p>

    <?php else : ?>
        <p>Eres menor de edad</p>

    <?php endif; ?>

<img src="<?= LOGO_URL ?>" alt="PHP Logo" width="200">

<h1>
<!-- <?php echo "hola oso"; ?>  -->
<?= $output ?>
</h1>


<style>
    :root {
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
    }
</style>