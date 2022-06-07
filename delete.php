<?php
include_once "../koneksi.php";

header("Content-Type: application/json; charset=UTF-8");

$isbn = $_POST['isbn'];
$query =  "DELETE FROM `buku` WHERE ISBN = $isbn";
$execute = $koneksi->query($query);
$response = [];

if ($execute) {
    $response['status'] = 'succcess';
    $response['message'] = 'Data Buku BERHASIL dihapus';
} else {
    $response['status'] = 'failed';
    $response['message'] = 'Data Buku GAGAL dihapus';
}
$json = json_encode($response, JSON_PRETTY_PRINT);
echo $json;
?>