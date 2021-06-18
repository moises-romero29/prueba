<?php
if($_POST)
  {



$to = "eliza_fdr@hotmail.com";
$subject = $_POST['subject'];
$message = $_POST['message'];

mail($to, $subject, $message);
}



  header('Location:index.html');

?>
