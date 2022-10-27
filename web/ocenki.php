<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4 IG | App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
</head>
<body>
<?php
require("./nav.php");
?>
    <div class="container">
        <div class="row">
            <div class="col-md12 text-center content-align-justify">
                <form action="ocenki.php" method="post">
                    <h1>WPROWADŹ Ocene</h1>
                    <input type="text" class="" name="grade" id="grade" placeholder="Ocena ucznia"><br>
                    <input type="number" class="" name="userID" id="userID" placeholder="ID ucznia"><br>
                    <input type="number" class="" name="exerciseID" id="exerciseID" placeholder="ID zadania"><br>
                    <input type="submit" value="ZATWIERDŹ"  class="SubmitButton">
                    <?php

                    $conn = mysqli_connect('192.168.128.105:3306', 'myuser', 'mypass', '4IG');

                    $ocena = $_POST['grade'];
                    $userid = $_POST['userID'];
                    $exerciseid = $_POST['exerciseID'];

                    $q = "INSERT INTO results VALUES (NULL, '$exerciseid', '$userid', '$ocena');";

                    
                    $result = mysqli_query($conn, $q);



                    if($result != false) {
                        echo "Dodano ocene!";
                    }

                    
                    ?>
                </form>
                <div class="row">
                    <div class="col-md3"></div>
                    <div class="col-md-6 align-content-center text-center">
                <table class="table table-dark">
                    <thead>
                        <td>ID</td>
                        <td>IMIĘ</td>
                        <td>NAZWISKO</td>
                    </thead>
                    <tbody>
                        <?php
                            $conn = mysqli_connect('192.168.128.105:3306', 'myuser', 'mypass', '4IG');


                            $q2 = "SELECT * FROM users;";
                            
                            $result2 = mysqli_query($conn, $q2);

                            while($row = mysqli_fetch_array($result2)) {
                                echo "<tr><td>".$row['ID']."</td><td>".$row['NAME']."</td><td>".$row['SURNAME']."</td></tr>";
                            }
                        ?>
                    </tbody>
                </table>
                </div>
                </div>
            </div>
           
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>
</html>