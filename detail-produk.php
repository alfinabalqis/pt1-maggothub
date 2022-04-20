<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deskripsi Produk</title>
    <link rel="shortcut icon" href="./assets/images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <!--Navbar-->
    <header>
        <nav class="nav bd-grid">  
            <img src="./assets/images/maggothub.svg" class="logo-maggothub" alt="">
            <div class="nav__logo">
                <h1><a href="index.php"><span>Maggot</span>Hub</a></h1>
            </div>
			<div class="nav__menu" id="nav-menu">
				<ul class="nav__list">
					<a href="index.php#home" class="nav__link"><li class="nav__item"><strong>Beranda</strong></li></a>
					<a href="produk.php" class="nav__link active"><li class="nav__item"><strong>Produk</strong></li></a>
					<a href="index.php#tentang-bsf" class="nav__link"><li class="nav__item"><strong>Tentang BSF</strong></li></a>
				</ul>
			</div>
            <div class="nav__menu" id="nav-menu">
				<ul class="nav__list">
					<a class="nav__link active" id="open-masuk" style="cursor: pointer;">
                        <li class="nav__item">Masuk</li>
                    </a>
					<a class="nav__link" id="open-daftar"> 
                        <li class="nav__item"><button class="daftar">Daftar</button></li>
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

    <!--Section modal login dan register-->
    <div class="modal-container" id="modal-masuk">
        <div class="modal">
            <h5 class="modal-close" id="close-masuk">&#10005;</h5>
            <h1>Masuk</h1>
            <h2>Pilih Daftar sebagai Penjual atau Pembeli</h2>
            <div class="card">
                <a href="login-penjual.php" class="kiri">
                    <div>
                        <img src="assets/images/ic-penjual.svg" alt="">
                        <h1>Penjual</h1>
                    </div>
                </a>

                <a href="login-pembeli.php">                        
                    <div style="cursor: pointer;">
                        <img src="assets/images/ic-pembeli.svg" alt="">
                        <h1>Pembeli</h1>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="modal-container" id="modal-daftar">
        <div class="modal">
            <h5 class="modal-close" id="close-daftar">&#10005;</h5>
            <h1><strong>Daftar</strong></h1>
            <h2>Pilih Daftar sebagai Penjual atau Pembeli</h2>
            <div class="card">
                <a href="register-penjual.php" class="kiri">                        
                <div>
                    <img src="assets/images/ic-penjual.svg" alt="">
                    <h1>Penjual</h1>
                </div>
                </a>

                <a href="register-pembeli.php">                        
                <div style="cursor: pointer;">
                    <img src="assets/images/ic-pembeli.svg" alt="">
                    <h1>Pembeli</h1>
                </div>
                </a>
            </div>
        </div>
    </div>

    <!--Produk-->
    <section class="container informasi-produk d-inline-flex">
        <div class="d-inline-flex">
            <div>
                <img src="assets/images/super-magot.png" alt="">
                <div>
                    <h3>Toko Maggot</h3>
                    <div class="d-inline-flex">
                        <img src="assets/images/ic-location.svg" alt="">
                        <p>Sukabirus, Bandung</p>
                    </div>
                </div>
            </div>
            <div class="deskripsi-image">
                <div>
                    <h3>SUPER MAGGOT Kering</h3>
                </div>
                <div class="d-inline-flex row-desc">
                    <div class="d-inline-flex">
                        <img src="assets/images/ic-rating.svg">
                        <p> 4.5</p>
                    </div>
                    <div class="d-inline-flex">
                        <b>Terjual</b>
                        <p> 35</p>
                    </div>
                    <div class="d-inline-flex">
                        <b>Penilaian</b>
                        <p> 20</p>
                    </div>
                </div>
                <div>
                    <h2><b>Rp 25.000</b></h2>
                </div>
            </div>
        </div>
        <div class="jumlah-produk">
            <div>
                <h2>Jumlah Produk</h2>
                <div class="form-group">
                    <label>Jumlah Barang</label> <br>
                    <input type="number" id="quantity" name="quantity" min="1" max="5">
                    <span>Rp. 25.000</span>
                </div>
                <div class="subtotal">
                    <label>Subtotal</label> <br>
                    <button>Rp. 50.000</button>
                </div>
                <div class="button">
                    <a href="https://wa.me/088980077538?text=Halo,%20apakah%20produk%20ini%20masih%20ada?" target="_blank"><button>Chat Penjual</button></a> <br>
                    <button class="beli" onclick="show()">Beli Sekarang</button>
                </div>
            </div>
        </div>
    </section>

    <!--Deskipsi-->
    <div class="container deskripsi-produk">
        <hr>
        <h1>Deskripsi</h1>
        <p>Merupakan satu-satunya produk dengan khasiat pelet dalam bentuk organik Udang & Maggot BSF pilihan kualitas terbaik. Di Formulasikan khusus hasil olah racikan organik dari sari-sari tumbuhan & hewani. ProVitamin, More High Protein - HI-GROWTH, Max Color Enhancer & zat-zat alami dihabitatnya yg mendukung Progress Warna, sisik (arwana), jenong (louhan) marking, STRIP/SPOT/DOT, Bulky pada ikan Koi dan khusus Bakat Bunga (Channa Maru). Progress ikan kesayangan anda semakin optimal. <br><br>
 
        Merupakan satu-satunya produk dengan khasiat pelet dalam bentuk organik Udang & Maggot BSF pilihan kualitas terbaik. Di Formulasikan khusus hasil olah racikan organik dari sari-sari tumbuhan & hewani. ProVitamin, More High Protein - HI-GROWTH, Max Color Enhancer & zat-zat alami dihabitatnya yg mendukung Progress Warna, sisik (arwana), jenong (louhan) marking, STRIP/SPOT/DOT, Bulky pada ikan Koi dan khusus Bakat Bunga (Channa Maru). Progress ikan kesayangan anda semakin optimal.
        </p>
    </div>

    <!--Form Pembelian-->
    <div class="container form-pembelian" id="form-pembelian">
        <h1>Pembelian Produk</h1>
        <div class="form-produk">
            <h2>Form Pembelian Produk</h2>
            <form>
                <div class="form-group">
                    <input type="name" class="form-control" placeholder="Masukkan Email">
                </div>
                <div class="form-group">
                    <input type="name" class="form-control" placeholder="Masukkan Email">
                </div>
                <div class="form-group">
                    <input type="name" class="form-control" placeholder="Masukkan Email">
                </div>
                <div class="form-group">
                    <input type="name" class="form-control" placeholder="Masukkan Email">
                </div>
                <div class="d-inline-flex half">
                    <div class="form-group">
                        <input type="name" class="form-control" placeholder="Masukkan Email">
                    </div>
                    <div class="form-group">
                        <input type="name" class="form-control" placeholder="Masukkan Email">
                    </div>
                </div>
                <div class="form-group">
                   <textarea name="" id="" cols="30" rows="10"></textarea>
                </div>
            </form>  
            <div class="d-inline-flex" style="justify-content: space-between">
                <h1>Total Harga : </h1>
                <h1>Rp 50.000</h1>
            </div> 
            <div>
                <a href="https://wa.me/088980077538?text=Halo,%20apakah%20produk%20ini%20masih%20ada?" target="_blank"><button>Beli Sekarang</button></a> <br>
                <button id="batal" onclick="hide()">Batalkan Pesanan</button>
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
        <script src="assets/script/main.js"></script>
</body>
</html>