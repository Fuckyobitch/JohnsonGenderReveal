<?php

 function UpdateBC()
{
	require 'C:\xampp\htdocs\ConnectToGenderDB.php';
	$sql=
	"
	UPDATE GenderReveal
	SET BC=BC+1,Total=Total+1
	Where ID=2218
	";
	$conn->query($sql);
	$conn->close();
}

 function UpdateGC()
{
	require 'C:\xampp\htdocs\ConnectToGenderDB.php';
	$sql=
	"
	UPDATE GenderReveal
	SET GC=GC+1,Total=Total+1
	Where ID=2218
	";
	$conn->query($sql);
	$conn->close();
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="JohnsonGenderReveal.css">
	<script type="text/javascript" src="JohnsonGenderReveal.js"></script>
	<title>Johnson Gender Reveal</title>
</head>

<body>
<header class="banner"><div id="banner">Place Your Bets</div></header>
<video class="AutoVideo" autoplay loop muted ><source src="TEST.mp4" type="video/mp4"></video>
<audio src="Silho.mp3" type="audio/mpeg" autoplay loop ></audio>
<main>
<div class="girl">
<a onclick="GirlRun()" href="Timmer.php">GIRL</a>
</div>

<div class="boy">
<a onclick="BoyRun()" href="Timmer.php">BOY</a>
</div>
</main>



</body>



</html>