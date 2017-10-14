<?php
if(isset($_POST['sender_email'])){
$to  = trim($_POST['sender_email']);

$subject = 'Thank You For your Order With Roofing Megastore!';

$message = '</head><body><h2>Hello! Test email.</h2></body>';

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

$headers .= 'To: Man '. $_POST['receipt_email'] . "\r\n";
$headers .= 'From: Bob Garrold <birthday@gmail.com>';

$res = mail($to, $subject, $message, $headers);	

if (!$res) {
	$message	=	"Failed";
} else {	
	$message	=	"Success";
}
echo $message;
	}else{
?>
	<form action="" method="post">
	  <label for="name">Receipt Name</label>
	  <br /><input id="name" name="name" class="text" />
	  <br /><label for="receipt_email">Receipt Email</label>
	  <br /><input id="receipt_email" name="receipt_email" class="text" />
	  <br /><label for="sender_email">Sender Email</label>
	  <br /><input id="sender_email" name="sender_email" class="text" />

      <input type="submit" value="submit" />	                        
    </form>
<?php } ?>
