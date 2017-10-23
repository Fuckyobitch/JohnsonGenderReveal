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