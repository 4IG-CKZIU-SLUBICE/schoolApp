<?php
 if(isset($_POST['userID'])){
    $userID = $_POST['userID'];
    echo "<p class='userID'>".$userID."</p>";
 }
 if(isset($_POST['answer'])){
    $answer = $_POST['answer'];
 }
    $conn = new mysqli("192.168.128.105:3306", "myuser", "mypass", "4IG");
    if($conn->connect_error){
        die("Nie udało nawiązać się połączenia z bazą danych ".$conn->connect_error);
    }
    if(isset($_POST['userID']) && isset($_POST['answer'])){
    $zapytanie = "INSERT INTO USERS_ANSWER VALUE ($userID, '$answer')";
    $result = $conn->query($zapytanie);
    }
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