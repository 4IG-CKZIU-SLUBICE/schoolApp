<?php
$userID = $_POST['userID'];
$exerciseID = $_POST['exerciseID'];
echo "ID UŻYTKOWNIKA TO: ".$userID. " ID ZADANIA: ".$_POST['exerciseID']." ODPOWIEDŹ UŻYTKOWNIA TO: ".$_POST['answer'];
session_start();
$_SESSION['userID'] = $userID;
$_SESSION['exerciseID'] = $exerciseID;
require("connect.php");
$query = "INSERT INTO last_user VALUES($userID, $exerciseID, NULL)";
$conn->query($query);
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