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
            <div class=" offset-3 col-md-6 text-center content-align-justify">
                <form action="generate.php" method="post">
                <select class="form-select bg-dark text-white" id="exerciseID" name="exerciseID" aria-label="Default select example">
                    <option value="0">WYBIERZ ZADANIE</option>
                    <?php
                        require('connect.php');
                        $query = "SELECT ID, CONTENT FROM exercises";
                        $result = $conn->query($query);
                        if($result->num_rows > 0){
                            while($row = $result->fetch_assoc()){
                                echo "<option value='".$row['ID']."'>".$row['CONTENT']."</option>";
                            }
                        }
                    ?>
                </select><br>

                   <input type="text" name="answer" id="answer" placeholder="TWOJA ODPOWIEDŹ"><br><br>

                   <select class="form-select bg-dark text-white"  id="userID" name="userID" aria-label="Default select example">
                    <option >WYBIERZ UŻYTKOWNIKA</option>
                    <?php
                        require('connect.php');
                        $query = "SELECT ID, NAME, SURNAME FROM users";
                        $result = $conn->query($query);
                        if($result->num_rows > 0){
                            while($row = $result->fetch_assoc()){
                                echo "<option value='".$row['ID']."'>".$row['NAME']." ".$row['SURNAME']."</option>";
                            }
                        }
                    ?>
                </select><br>

                   <input type="submit" value="WPROWADŹ ODPOWIEDŹ">

                </form>
            </div>
           
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>
</html>