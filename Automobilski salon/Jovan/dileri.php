<?php

include("php/povezivanje.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="./css/style.css">

    <title>Panel</title>
</head>

<body>

    <div class="container" style="margin-top: 50px">
        <div class="row">
            <div class="col-2">

            </div>
            <div class="col-8">
                
                <div class="card text-white bg-dark">
                    <h3 class="card-header">Dileri:<br></h3>



                    <?php
                    $query=$mysqli->query("SELECT * FROM dileri");
                    
                    while($data=$query->fetch_object()){
                        echo '<div class="card text-white bg-dark">';
                    
                        echo '<div class="card-body">';
                        echo '<h5 class="card-title">' . $data->ime . " " . $data->prezime . '</h5>';
                        echo '<h6 class="card-subtitle text-muted"></h6>';
                        echo '</div>';
                    

                    }
                    ?>
            
                    
                    <h5><a href="panel.php">→Nazad na panel </a>             
                 </div>
            </div>
         </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>

</body>

</html>