<?php
echo "det virker"; 

echo $text;
echo $category;
echo $id

$host = "sql.freedb.tech"; // Change this
$username = "freedb_rteboluser"; 
$password = "vA!y54DDXRk?nkn"; 
$database = "freedb_rtebol";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Failed to connect: " . $conn->connect_error);
} else {
    echo "Connected successfully!";
}
?>



?>