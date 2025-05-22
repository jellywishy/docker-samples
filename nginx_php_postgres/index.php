<?php

$postgres_host = getenv("POSTGRES_HOST");
$postgres_port = getenv("POSTGRES_PORT");
$postgres_user = getenv("POSTGRES_USER");
$postgres_password = getenv("POSTGRES_PASSWORD");
$postgres_db = getenv("POSTGRES_DB");

$dsn = "pgsql:host=$postgres_host;port=$postgres_port;dbname=$postgres_db";

$pdo = PDO::connect($dsn, $postgres_user, $postgres_password);

$stmt = $pdo->query("SELECT version();");
$result = $stmt->fetch(PDO::FETCH_ASSOC)["version"];
$postgres = substr($result, 0, 10);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nginx + PHP FPM + PostgreSQL</title>
    <style>
        h1, li, li span { font-family: Roboto, sans-serif; }
        li, li span { font-size: 2.5rem; }
        h1 span { font-size: 5rem; }
        #nginx { background-color: rgb(0 255 0 / 25%); }
        #php { background-color: rgb(0 0 255 / 25%); }
        #postgres { background-color: rgb(0 0 255 / 25%); }
        #html { background-color: rgb(255 127 0 / 25%); }
        #css { background-color: rgb(0 0 255 / 25%); }
        #js { background-color: rgb(255 255 0 / 25%); }
    </style>
</head>
<body>
    <div>
        <h1>
            <span id="nginx">Nginx</span>
            +
            <span id="php"><?= "PHP"; ?></span>
            +
            <span id="postgres"><?= $postgres; ?></span>
        </h1>
        <ul>
            <li>
                <span id="html">HTML</span>
            </li>
            <li>
                <span id="css">CSS</span>
            </li>
            <li>
                <span id="js"></span>
            </li>
        </ul>
    </div>
    <script>
        document.querySelector("#js").textContent = "JS"
    </script>
</body>
</html>