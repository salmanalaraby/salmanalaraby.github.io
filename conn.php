<?php
$servername = "localhost";
$username = "Training supervisor";
$password = "1234@";
$dbname = "user_registration";

$conn = new mysqli($servername, $username, $password, $dbname);

// تحقق من الاتصال
if ($conn)
{echo "نجح الاتصال";} else
 {
    die("فشل الاتصال: " . $conn->connect_error);
}
?>
