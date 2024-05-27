<?php include ("php/povezivanje.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <style>
        
        .card {
            border: 2px solid #007bff; 
        }

        .card-header {
            background-color: #007bff; 
            color: white; 
        }

        .fixed-header {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            background-color: #343a40; 
            padding: 10px 0;
        }

        .back-to-panel {
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div class="fixed-header text-center text-white">
        <h3 class="mb-0">Testirana vozila i komentari</h3>
        <a href="panel.php" class="btn btn-secondary back-to-panel">Nazad na panel</a>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card text-white bg-dark">
                    <div class="card-header">
                        <h2 class="mb-0">Odaberite od ponuđenih:</h2>
                    </div>
                    <div class="card-body text-dark">
                        <ul class="list-group list-group-flush">
                            <?php
                            $query = $mysqli->query("SELECT testvozila.*, modeli.ime AS modeli_ime FROM modeli JOIN testvozila ON testvozila.ModelID = modeli.ModelID");
                            while ($data = $query->fetch_object()) {
                                echo '<li class="list-group-item">';
                                echo '<div class="card text-white bg-dark">';
                                echo '<div class="card-body">';
                                echo '<h3 class="card-title">Test Vozilo ID: ' . $data->TestVoziloID . '</h3>';
                                echo '<p class="card-text">Ime Modela: ' . $data->modeli_ime . '</p>';
                                echo '<p class="card-text">Datum Testiranja: ' . $data->TestDatum . '</p>';
                                echo '<p class="card-text">Komentar: ' . $data->Komentar . '</p>';
                                echo '</div>';
                                echo '</div>';
                                echo '</li>';
                            }
                            ?>
                        </ul>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>
