<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MaggotHub</title>
    <link rel="shortcut icon" href="./assets/images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <header>
        <nav class="nav bd-grid">  
            <img src="./assets/images/maggothub.svg" class="logo-maggothub" alt="">
            <div class="nav__logo">
                <h1><a href="index.php"><span>Maggot</span>Hub</a></h1>
            </div>
			<div class="nav__menu" id="nav-menu">
				<ul class="nav__list">
					<a href="index.php#home" class="nav__link active"><li class="nav__item"><strong>Beranda</strong></li></a>
					<a href="produk.php" class="nav__link"><li class="nav__item"><strong>Produk</strong></li></a>
					<a href="index.php#tentang-bsf" class="nav__link"><li class="nav__item"><strong>Tentang BSF</strong></li></a>
				</ul>
			</div>
            <div class="nav__menu" id="nav-menu">
				<ul class="nav__list" style="display: flex;">
					<a href="#" class="nav_link">
                        <img src="assets/images/ic-notif.png" alt="">
                    </a>
                    <a href="#" class="nav_link">
                        <img src="assets/images/ic-upload.png" alt="">
                    </a>
                    <a href="#" class="nav_link d-inline-flex">
                        <img src="assets/images/ic-profil.png" alt="">
                    </a>
				</ul>
			</div>
            <button class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </nav>
	</header>

    <!--Mobile Nav-->
    <div class="mobile-nav">
        <a href="index.php#home" class="nav__link"><strong>Beranda</strong></a>
		<a href="produk.php" class="nav__link"><strong>Produk</strong></a>
        <a href="index.php#tentang-bsf" class="nav__link"><strong>Tentang BSF</strong></a>
        <div class="nav__dropdown">
            <a href="#">
                <strong>Masuk</strong>
                <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
            </a>

            <div class="nav__dropdown-collapse">
                <div class="nav__dropdown-content">
                    <a href="login-penjual.php" class="nav__dropdown-item nav__link">Sebagai Penjual</a>
                    <a href="login-pembeli.php" class="nav__dropdown-item nav__link">Sebagai Pembeli</a>
                </div>
            </div>
        </div>
        <div class="nav__dropdown">
            <a href="#">
                <strong>Daftar</strong>
                <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
            </a>

            <div class="nav__dropdown-collapse">
                <div class="nav__dropdown-content">
                    <a href="register-penjual.php" class="nav__dropdown-item nav__link">Sebagai Penjual</a>
                    <a href="register-pembeli.php" class="nav__dropdown-item nav__link">Sebagai Pembeli</a>
                </div>
            </div>
        </div>
    </div>

     <!--Upload Pembelian-->
     <div class="container anim-left" id="form-upload">
        <div class="form-produk" style="display: flex">
            <div>
                <form>
                    <div class="form-group">
                        <label for="">Nama Produk</label>
                        <input type="name" class="form-control" placeholder="Nama Produk" required="required">
                    </div>
                    <div class="d-inline-flex half">
                        <div class="form-group">
                            <label for="">Harga</label>
                            <input type="name" class="form-control" placeholder="Harga Produk" required="required">
                        </div>
                        <div class="form-group">
                            <label for="">Stok</label>
                            <input type="name" class="form-control" placeholder="Stok Produk" required="required">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Deskripsi</label>
                    <textarea name="" id="" cols="30" rows="10"></textarea>
                    </div>
                </form>
                <button type="submit">Upload Produk</button>
            </div>
            <div class="upload-gambar anim-right">
                <button type="submit">Upload Gambar</button>
                <div class="form-group file-area">
                    <input type="file" name="images" id="images" required="required" multiple="multiple"/>
                </div>
            </div>
        </div>
    </div>

    <!--Footer-->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-desc">
                    <div class="logo-area">
                        <img src="assets/images/logo.png" alt="">
                        <span class="logo-name"> MaggotHub</span>
                    </div>
                    <div class="desc-area">
                        <p>Berkeinginan untuk menyebarluaskan produk - produk maggot BSF sekaligus memperluas pasar penjualan maggot BSF.</p>
                    </div>
                </div>
                <div class="footer-list">
                    <ul class="contacts-area">
                        <li class="list-name">Kontak Kami</li>    
                        <li><img src="assets/images/ic-telepon.svg" alt=""><a href="#">+621234567891</a></li>
                        <li><img src="assets/images/ic-email.svg" alt=""><a href="#">maggotHub@gmail.com</a></li>
                    </ul>
                    
                    <ul class="contacts-area">
                        <li class="list-name">Social Media</li>    
                        <li><img src="assets/images/ic-instagram.svg" alt=""><a href="#">maggot_Hub</a></li>
                        <li><img src="assets/images/ic-facebook.svg" alt=""><a href="#">maggot_Hub</a></li>
                    </ul>
                </div>
            </div>
            <hr>
            <div class="footer-bottom">
                <div class="copyright">
                    <i class='bx bxs-copyright'></i>
                    <span>2022 Altruis Team</span>
                </div>
            </div>
        </div>
    </footer>

    <!--===== SCROLL REVEAL =====-->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!--===== MAIN JS =====-->
    <script src="assets/script/main.js?v=<?= time(); ?>"></script>    

</body>
</html>