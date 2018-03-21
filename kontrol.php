<?php
if($_POST){
	$isim = $_POST["isim"];
	$soyisim = $_POST["soyisim"];
	$email = $_POST["email"];
	$sifre = $_POST["sifre"];
	
	if (isset($isim,$soyisim,$email,$sifre)) {
		if (strpos($email, "hotmail.com", 0) > 0) {
			echo "oys.deu.edu.tr";
		}
		else if (strpos($email, "gmail.com", 0) > 0) 
			echo "oys2.deu.edu.tr";
	}	
}
?>
