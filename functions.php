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

function register($data, $status) {
    global $koneksi;

    $nama = $data["nama"];
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $no_wa = $data["no-wa"];
    $pass = mysqli_real_escape_string($koneksi, $data["password1"]);
    $pass2 = mysqli_real_escape_string($koneksi, $data["password2"]);
    $alamat = $data["alamat"];

    // Cek email sudah ada atau belum
    $check_email = mysqli_query($koneksi, "SELECT * FROM users 
                                WHERE email = '$email' AND status = '$status'");
    if(mysqli_fetch_assoc($check_email)) {
        echo "<script>
            alert('Email yang anda masukkan sudah terdaftar!');
            </script>";    
        return 0;
    }
    // Cek no-wa sudah ada atau belum
    $check_wa = mysqli_query($koneksi, "SELECT no_wa FROM users 
                            WHERE no_wa = $no_wa  AND status = '$status'");
    if(mysqli_fetch_assoc($check_wa)) {
        echo "<script>
                alert('Nomor Whatsapp sudah terdaftar!');
            </script>";
        return 0;
    }

    // Cek konfirmasi password
    if($pass !== $pass2) {
        echo "<script>
            alert('Konfirmasi password tidak sesuai!');
            </script>";
        return 0;
    } 
    
    // Hash password
    $pass = password_hash($pass, PASSWORD_DEFAULT);

    // Menambahkan user baru ke database
    mysqli_query($koneksi, "INSERT INTO users VALUES('', 
                '$nama', '$no_wa', '$email', '$pass', '$alamat', '$status')");
    if($status === "penjual") {
        $nama_toko = $data["nama-toko"];
        $last_id = mysqli_insert_id($koneksi);

        mysqli_query($koneksi, 
                    "UPDATE penjual 
                    SET nama_toko = '$nama_toko' 
                    WHERE id_users = $last_id");
    }
    return mysqli_affected_rows($koneksi);
}

function login($data, $status) {
    global$koneksi;
    $email = $data["email"];
    $pasword = $data["password"];
    // Cek email
    $check_email = mysqli_query($koneksi, "SELECT * FROM users
                  WHERE email = '$email' AND status = '$status'");
    if(mysqli_num_rows($check_email) === 1) {
      // Cek password
      $row = mysqli_fetch_assoc($check_email);
      if(password_verify($pasword, $row["password"])){
        $_SESSION = $row;
        $_SESSION["login"] = true;
        $id_users = $row["id"];

        // Id penjual
        if($status === "penjual") {
            $id_penjual = mysqli_fetch_row(mysqli_query($koneksi, 
                "SELECT id FROM penjual WHERE id_users = $id_users"))[0];
            $_SESSION["id-penjual"] = $id_penjual;
        }
        // Id pembeli
        if($status === "pembeli") {
            $id_pembeli = mysqli_fetch_row(mysqli_query($koneksi, 
                "SELECT id FROM pembeli WHERE id_users = $id_users"))[0];
            $_SESSION["id-pembeli"] = $id_pembeli;
        }
        header("Location: index.php");
        exit;
      }
    }
    echo "<script>
              alert('Email atau password salah');
          </script>";
}

function tambah($data) {
    global $koneksi;
    $id_users = $data["id-users"];
    $id_penjual = mysqli_fetch_row(mysqli_query($koneksi, 
                "SELECT id FROM penjual WHERE id_users = $id_users"))[0];
    $nama_produk = htmlspecialchars($data["nama-produk"]);
    $harga = htmlspecialchars($data["harga"]);
    $stok = htmlspecialchars($data["stok"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);

    //upload gambar
    $image_file = upload_file();
    if(!$image_file) return false;

    mysqli_query($koneksi, "INSERT INTO product 
                VALUES ('', $id_penjual, '$nama_produk', $harga, $stok, 
                '$deskripsi', '$image_file')");
    
    return mysqli_affected_rows($koneksi);
}

function upload_file() {
    $nama_file = $_FILES['image-file']['name'];
    $ukuran_file = $_FILES['image-file']['size'];
    $tmp_name = $_FILES['image-file']['tmp_name'];

    // Cek ekstensi file
    $ekstensiValid = ['jpg', 'jpeg', 'png'];
    $ekstensiFile = strtolower(pathinfo($nama_file, PATHINFO_EXTENSION));
    if(!in_array($ekstensiFile, $ekstensiValid)) {
        echo "<script>
              alert('Ekstensi file yang diupload harus jpg/jpeg/png');
          </script>";
        return false;
    }

    // Cek ukuran file
    if($ukuran_file >= 5000000) {
        echo "<script>
              alert('Ukuran file max 5MB');
          </script>";
        return false;
    }

    // Lolos pengecekan
    $nama_file_baru = uniqid() . '.' . $ekstensiFile;
    move_uploaded_file($tmp_name,'assets/images/produk/'. $nama_file_baru);
    return $nama_file_baru;
}

function rupiah($angka){	
	$hasil_rupiah = "Rp " . number_format($angka,0,',','.');
	return $hasil_rupiah;
}

function cari_produk($keyword){
    return get_rows_from("products WHERE nama LIKE '%$keyword%'");
}

?>