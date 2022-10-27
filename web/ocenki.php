<?php
session_start();
if(isset($_SESSION['userID']) && isset( $_SESSION['exerciseID'])){
    $userID = $_SESSION['userID'];
    $exerciseID = $_SESSION['exerciseID'];
}
?>
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
                    <input type="number" class="" name="grade" id="grade" placeholder="Ocena ucznia"><br>
                    <input type="number" class="" name="userID" id="userID" value="<?= $userID ?>"><br>
                    <input type="number" class="" name="exerciseID" id="exerciseID"  value="<?= $exerciseID?>"><br>
                    <input type="submit" value="DODAJ OCENĘ">
                    <?php
                        require('connect.php');

                        if(isset($_POST['grade']) && isset($_POST['userID']) && isset($_POST['exerciseID'])){
                            $grade = $_POST['grade'];
                            $userID = $_POST['userID'];
                            $exerciseID = $_POST['exerciseID'];
                            $query = "INSERT INTO `results` (`RESULT_ID`, `EXERCISE_ID`, `USER_ID`, `grade`) VALUES (NULL, '$exerciseID', '$userID', '$grade');";
                            $conn->query($query);
                            session_destroy();
                        }
                    ?>
                </form>
                </div>
                </div>
            </div>
           
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>
</html>