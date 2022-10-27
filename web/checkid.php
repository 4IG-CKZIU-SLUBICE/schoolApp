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
                <form action="checkid.php" method="post">
                    <h1>SPRAWDŹ SWOJE ID</h1>
                    <input type="text" class="" name="name" id="name" placeholder="Imię"><br>
                    <input type="text" class="" name="surname" id="surname" placeholder="Nazwisko"><br>
                    <input type="submit" value="ZATWIERDŹ"  class="SubmitButton">
                </form>
                <?php
                
                    $name = $_POST['name'];
                 
             
                    $surname= $_POST['surname'];
                 

                    require('connect.php');
                if($conn->connect_error){
                    die("Nie udało nawiązać się połączenia z bazą danych ".$conn->connect_error);
                }
              
                $zapytanie = "SELECT ID FROM users WHERE NAME= '$name' AND SURNAME='$surname'";
                $result = $conn->query($zapytanie);
                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                        echo "TWOJE ID TO: ".$row['ID'];
                    }
                }
            
           ?> 
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>
</html>