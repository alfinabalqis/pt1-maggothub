<?php 
//Koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "maggothub");

function get_rows($table) {
    global $koneksi;
    $result = mysqli_query($koneksi, "SELECT * FROM " . $table);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}
?>