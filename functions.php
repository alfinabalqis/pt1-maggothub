<?php 
//Koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "maggothub");

function get_rows_from($table) {
    global $koneksi;
    $result = mysqli_query($koneksi, "SELECT * FROM " . $table);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function rupiah($angka){	
	$hasil_rupiah = "Rp " . number_format($angka,0,',','.');
	return $hasil_rupiah;
}

function cari_produk($keyword){
    return get_rows_from("list_produk WHERE nama LIKE '%$keyword%'");
}
?>