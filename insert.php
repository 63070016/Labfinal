<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'tonklaxi.mysql.database.azure.com', 'tonklazuzu2@tonklaxi' , 'Kla007as', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$Product = $_POST['Product'];
$Price = $_POST['Price'];
$Amount = $_POST['Amount'];


$sql = "INSERT INTO guestbook (Product , Price , Amount , Total) VALUES ('$Product', '$Price', '$Amount' ,$Result['Price']*$Result['Amount'])";


if (mysqli_query($conn, $sql)) {
    header("Location: show.php");
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>