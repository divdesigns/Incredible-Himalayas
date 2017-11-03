<?php

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$option = $_POST['option'];
$mcomment = $_POST['comment'];
$to = 'divyaravishanker@gmail.com';
$title = 'INCREDIBLE HIMALAYAS website enquiry';
$header = 'From: '. $email;
$msgMail = "fname: $fname\n lname: $lname\n phone: $phone\nEmail: $email\noption: $option \ncomment:\n $comment";


if ($_POST['submit']) {

	if(mail($to, $title, $msgMail, $header)) {

		echo "<script language='javascript'>
			alert('Your message has been sent. Thank you!');
			window.location.href = 'http://divdesigns.com.au/incredible-himalayas';
		</script>";
	} else {
		echo 'There is something wrong';
	}
}
?>
