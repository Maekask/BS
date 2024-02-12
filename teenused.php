<!DOCTYPE html>
<html lang="et">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teenused</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
                            <a class="nav-link active" aria-current="page" href="#">Kontakt</a>
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

    <div class="container mt-5">
        <h1>Teenuse kalkulaator</h1>
        <form action="" method="GET">
            <div class="form-group">
                <label for="toode1">HTML</label>
                <input type="number" class="form-control" id="input1" name="HTML" required>
            </div>
            <div class="form-group">
                <label for="toode2">CSS</label>
                <input type="number" class="form-control" id="input2" name="CSS" required>
            </div>
            <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="noustun" name="noustun">
          <label class="form-check-label" for="noustun">Nõustun teenusetingimustega</label>
        </div>
            <button type="submit" class="btn btn-primary">Arvuta</button>
        </form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Kontrollime, kas vormi väljad on täidetud ja kas kasutaja on nõustunud teenusetingimustega
    if (isset($_GET['HTML']) && isset($_GET['CSS']) && isset($_GET['noustun'])) {
        // Võtame vormist saadud väärtused
        $html = $_GET['HTML'];
        $css = $_GET['CSS'];
        
        // Arvutame tulemuse
        $kokku = $html + $css;

        // Kuvame tulemuse
        echo '<div class="container mt-3">';
        echo '<div class="alert alert-success" role="alert">';
        echo 'Tulemus: ' . $kokku;
        echo '</div>';
        echo '</div>';
    } else {
        // Kui mõni väljadest jäi täitmata või kasutaja ei nõustunud tingimustega, siis kuvame veateate
        echo '<div class="container mt-3">';
        echo '<div class="alert alert-danger" role="alert">';
        echo 'Palun täitke kõik väljad ja nõustuge teenusetingimustega.';
        echo '</div>';
        echo '</div>';
    }
}
?>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>