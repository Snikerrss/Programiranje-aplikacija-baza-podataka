<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cenovnik</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .table-container {
            background-color: #343a40;
            padding: 20px;
            border-radius: 10px;
            margin-top: 50px;
        }
        .table-container h5 a {
            color: #ffffff;
        }
        .table {
            background-color: #ffffff;
            border-radius: 10px;
            overflow: hidden;
        }
        .table th,
        .table td {
            text-align: center;
            vertical-align: middle;
            color: black; 
        }
        .table th {
            background-color: #f1f1f1;
        }
        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #e9ecef;
        }
        .table-striped tbody tr:nth-of-type(even) {
            background-color: #f8f9fa;
        }
        .table-container h4 {
            color: #ffffff;
            margin-bottom: 20px;
        }
       
        .fixed-header {
            position: fixed;
            top: 0;
            right: 0;
            width: 100%;
            background-color: #343a40; 
            padding: 10px 20px; 
            z-index: 1000; 
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2); 
        }

      
        .back-to-panel {
            color: #ffffff;
        }
    </style>
</head>

<body>
    
    <div class="fixed-header text-right text-white">
        <a href="panel.php" class="btn btn-secondary back-to-panel">Nazad na panel</a>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="table-container card text-white bg-dark">
                    <h4 class="text-center">Cenovnik vozila</h4>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th scope="col" style="color: black">Cena</th>
                                <th scope="col" style="color: black">Godina</th>
                                <th scope="col" style="color: black">Boja</th>
                                <th scope="col" style="color: black">Modeli</th>
                                <th scope="col" style="color: black">Dostupnost</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require ("./php/povezivanje.php");
                            $search_query = isset($_GET['search']) ? $_GET['search'] : '';
                            $sql = "SELECT vozila.*, modeli.Ime AS modeli FROM vozila JOIN modeli ON vozila.ModelID = modeli.ModelID";

                            if (!empty($search_query)) {
                                $search_query = $mysqli->real_escape_string($search_query);
                                $sql .= " WHERE modeli.Ime LIKE '%$search_query%'";
                            }

                            $rezultat = $mysqli->query($sql);

                            while ($rez = mysqli_fetch_assoc($rezultat)) {
                                echo '<tr>';
                                echo '<td>' . $rez["Cena"] . '</td>';
                                echo '<td>' . $rez["Godina"] . '</td>';
                                echo '<td>' . $rez["Boja"] . '</td>';
                                echo '<td>' . $rez["modeli"] . '</td>';
                                echo '<td>' . $rez["Dostupnost"] . '</td>';
                                echo '</tr>';
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8
