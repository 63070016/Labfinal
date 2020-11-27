<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'tonklaxi.mysql.database.azure.com', 'tonklazuzu2@tonklaxi' , 'Kla007as', 'labitf', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL PLEASE TRY AGAIN: '.mysqli_connect_error());
}


$ID = $_GET['ID'];


$sql = "DELETE FROM guestbook WHERE ID='$ID'";


if (mysqli_query($conn, $sql)) {
    <button onclick ="location.href='show.php'"> </button> ;
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>
