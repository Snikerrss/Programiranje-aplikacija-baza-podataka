<?php include ("php/povezivanje.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <style>
        .fixed-header {
            position: fixed;
            top: 0;
            width: 100%;
            background-color: #343a40;
            padding: 10px 0;
            z-index: 1000;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }


        .back-to-panel {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
        }
    </style>
</head>

<body>

    <div class="fixed-header text-center text-white">
        <h3 class="mb-0">U ponudi modeli:</h3>
        <a href="panel.php" class="btn btn-secondary back-to-panel">Nazad na panel</a>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card text-white bg-dark">
                    <div class="card-header">
                    </div>
                    <div class="card-body text-dark">
                        <?php
                        $query = $mysqli->query("SELECT modeli.*, proizvodjaci.ime AS proizvodjaci_ime FROM modeli JOIN proizvodjaci ON modeli.ProizvodjacID = proizvodjaci.ProizvodjacID");
                        while ($data = $query->fetch_object()) {
                            echo '<div class="card mb-3">';
                            echo '<div class="card-body">';
                            echo '<div class="row align-items-center">';
                            echo '<div class="col-md-8">';
                            echo '<h5 class="card-text">Ime Modela: ' . $data->Ime . '</h5>';
                            echo '<h5 class="card-text">Proizvodjac: ' . $data->proizvodjaci_ime . '</h5>';
                            echo '</div>';
                            echo '<div class="col-md-4">';
                            echo '<img class="img-fluid" src="img/' . $data->slika . '" />';
                            echo '</div>';
                            echo '</div>';
                            echo '<input type="hidden" name="ModelID" value="' . $data->ModelID . '">';
                            echo '</form>';
                            echo '</div>';
                            echo '</div>';
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>
<script type="text/javascript">
      var nav = document.getElementById('sticky-nav');
      window.onscroll = () => {
        nav.style.opacity = (window.pageYOffset > 0) ? 0.9 : 1;
      };
    </script>

</html>