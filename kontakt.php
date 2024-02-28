<!DOCTYPE html>
<html lang="et">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teenused</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<style>

         .progress-wrapper {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 50px;
        }
        .oskusriba {
            width: 50%;
            margin-bottom: 20px;
        }
</style>
    </head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-body">
            <div class="container-fluid">
                <nav class="navbar bg-body">
                    <div class="container">
                        <a class="navbar-brand" href="#">
                            <img src="/drupal.png" alt="Bootstrap" height="50">
                        </a>
                    </div>
                </nav>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.html">Avaleht</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Tooted</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="teenused.php">Teenused</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="kontakt.php">Kontakt</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Otsi" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">
                            Otsi
                        </button>
                    </form>
                </div>
            </div>
        </nav>
    </div>

<div class="container">
    <h1 class="text-center">Minu oskused</h1>
    <div class="progress-wrapper">
        <?php

        $oskused = array("HTML", "CSS", "Bootstrap", "PHP");

        $varvid = array("primary", "secondary", "success", "danger", "warning", "info", "dark");

        foreach ($oskused as $index => $oskus) {
            $riba = rand(10, 100);
            $varviklass = $varvid[array_rand($varvid)];

            echo '<div class="oskusriba">';
            echo '<div class="progress">';
            echo '<div class="progress-bar bg-' . $varviklass . '" role="progressbar" style="width: ' . $riba . '%" aria-valuenow="' . $riba . '" aria-valuemin="0" aria-valuemax="100">';
            echo $oskus;
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
        ?>
    </div>
</div>

<h1 class="text-center mt-5">Meie töötajad</h1>
 <div style="display: flex;">
<?php
$pildikaust = './img/';

$pildid = scandir($pildikaust);

$pildid = array_diff($pildid, array('.', '..'));

echo '<div class="row">';

foreach ($pildid as $pilt) {
    $imagePath = $pildikaust . $pilt;

    if (is_file($imagePath) && in_array(strtolower(pathinfo($pilt, PATHINFO_EXTENSION)), array('jpg', 'jpeg', 'png', 'gif'))) {
        $nimi = ucfirst(pathinfo($pilt, PATHINFO_FILENAME));

        $epost = strtolower(pathinfo($pilt, PATHINFO_FILENAME)) . '@sinunimi.ee';

        echo '<div class="col-md-2">';
        echo '<div class="text-center">';
        echo '<img src="' . $imagePath . '" alt="' . $nimi . '" class="img-fluid mb-2"><br>';
        echo '<strong>' . $nimi . '</strong><br>';
        echo '<em>' . $epost . '</em>';
        echo '</div>';
        echo '</div>';
    }
}

echo '</div>';
?>

</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>