<?php
 if(isset($_POST['userID'])){
    $userID = $_POST['userID'];
    echo "<p class='userID'> ID USERA: ".$userID."</p>";
 }
 if(isset($_POST['idZadania'])){
   $idZadania = $_POST['idZadania'];
   echo "<p class='exerciseID'> ID ZADANIA: ".$idZadania."</p>";

}
 if(isset($_POST['answer'])){
    $answer = $_POST['answer'];
    echo "<p class='answer'>ODPOWIEDŹ: ".$answer."</p>";
 }
 require('connect.php');
    if($conn->connect_error){
        die("Nie udało nawiązać się połączenia z bazą danych ".$conn->connect_error);
    }
    $zapytanie = "INSERT INTO users_answer VALUES ($userID, '$answer', $idZadania)";
    $result = $conn->query($zapytanie);
?>

<script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>


<div id="qrcode-2"></div>
<script type="text/javascript">
var qrcode = new QRCode(document.getElementById("qrcode-2"), {
	text: "https://192.168.128.82/app/ocenki.php",
	width: 128,
	height: 128,
	colorDark : "#5868bf",
	colorLight : "#ffffff",
	correctLevel : QRCode.CorrectLevel.H
});
</script>