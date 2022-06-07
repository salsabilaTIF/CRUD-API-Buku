<?php 

include_once '../koneksi.php'; 
/** 
 * @var $connection PDO 
 */ 
$query = "select * from buku"; 
//Tentukan query statement 
$statement = $koneksi->query($query); 
//setting the fetch mode 
$result = $statement->fetchAll(); 
//menampilkan hasil ke client 
header('Content-Type: application/json'); 
echo json_encode($result);

?>