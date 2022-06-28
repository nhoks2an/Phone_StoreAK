<?php 
$conn = mysqli_connect ('localhost', 'root', '', 'store_phone');
mysqli_set_charset($conn, 'UTF8'); 
$sql = 'SELECT * FROM footers'; 
$result = $conn->query($sql);
$row = $result->fetch_assoc();
echo $row['noidung'];
mysqli_close($conn);
?>