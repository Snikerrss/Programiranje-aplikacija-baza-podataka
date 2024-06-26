<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
            background-image: url('Pozadina/pozadina.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            background-attachment: fixed;
            background-size: 100% 100%;

        }

        .logout-link {
            color: red;
            
        }
    </style>
</head>

<body>
    <div class="container" style="margin-top: 50px">
        <div class="row">
            <div class="col-2">

            </div>
            <div class="col-8">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link" href="modeli.php">Modeli</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="testvozila.php">Test vozila</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cenovnik.php">Cenovnik</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="dileri.php">Dileri</a>
                    </li>
                    <li class="nav-item ml-auto">
                        <a href="./php/logout.php" class="nav-link logout-link">Logout</a>
                    </li>
                </ul>
            </div>
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

</html>
