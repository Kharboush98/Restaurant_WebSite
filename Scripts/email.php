<?php
ini_set("SMTP","ssl://smtp.gmail.com");
ini_set("smtp_port","465");
$s=mail('amralnagar89@gmail.com','Welcome','Test test');
if($s)
echo "true";
else
echo"F";
?>
