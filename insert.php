<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'tonklaxi.mysql.database.azure.com', 'tonklazuzu2@tonklaxi' , 'Kla007as', 'labitf', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$product = $_POST['product'];
$price = $_POST['price'];
$amount = $_POST['amount'];


$sql = "INSERT INTO guestbook (Product , Price , Amount) VALUES ('$product', '$price', '$amount)";


if (mysqli_query($conn, $sql)) {
    header("Location: show.php");
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>
