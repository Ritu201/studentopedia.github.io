<?php
ini_set(varname, newvalue)
if($_POST['message']) {
	$txt = $_POST['message']." Contact No. : ".$_POST["number"];
	$txt = str_replace("\n.", "\n..", $txt);
	$to = 'rituverma8765@gmail.com';
	$subject = "Query regarding studentopedia website";
	$headers = "From:".$_POST["Email"]."\r\n";
	mail($to, $subject, $txt, $headers);
}
?>