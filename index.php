<?php 
    include 'functions.php';
    $bests = get_rows_from("list_produk WHERE is_best_seller = '1'");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MaggotHub</title>
    <link rel="shortcut icon" href="./assets/images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="./assets/css/style.css?v=<?= time(); ?>">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
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
					<a href="#home" class="nav__link active"><li class="nav__item"><strong>Beranda</strong></li></a>
					<a href="produk.php" class="nav__link"><li class="nav__item"><strong>Produk</strong></li></a>
					<a href="index.php#tentang-bsf" class="nav__link"><li class="nav__item"><strong>Tentang BSF</strong></li></a>
				</ul>
			</div>
            <?php if(isset($_GET["user-id"])): ?>
            <div class="nav__menu" id="nav-menu">
				<ul class="nav__list" style="display: flex;">
					<a href="#" class="nav_link">
                        <img src="assets/images/ic-notif.png" alt="">
                    </a>
                    <a href="upload.php" class="nav_link">
                        <img src="assets/images/ic-upload.png" alt="">
                    </a>
                    <a href="#" class="nav_link d-inline-flex">
                        <img src="assets/images/ic-profil.png" alt="">
                    </a>
				</ul>
			</div>
            <?php endif; ?>
            <?php if(!isset($_GET["user-id"])): ?>
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
            <?php endif; ?>
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

    <!--Home-->
	<section class="home section" id="home">
		<div class="home__container isi">
            <div class="home__desc judul">
                <h2 class="home__subtitle">Mengenal Apa Itu <br> MaggotHub</h2>
                <p class="home__text">MaggotHub adalah website yang khusus menjual berbagai macam produk olahan maggot BSF. Visi website ini adalah memperkenalkan produk olahan maggot BSF di Indonesia, membantu memasarkan produk-produk olahan maggot yang terintegrasi dalam satu platform, dan memudahkan pembeli untuk mencari produk olahan maggot BSF sesuai keinginan.</p>
                <a href="#best-seller" class="home__btn"><button>Mulai Belanja</button></a>
            </div>
            <div class="home__img fotosamping">
                <img src="assets/images/maggothub.svg" alt="Logo MaggotHub" class="img-fluid animated">
            </div>
		</div>
	</section>

    <!--Tentang BSF-->
    <section class="tentang-bsf section" id="tentang-bsf">
        <h2 class="section-title">Tentang BSF<h2>
        <div class="tentang__container isi">
            <div class="tentang__img fotosamping">
                <img src="assets/images/siklus-bsf.jpg" alt="Siklus BSF">
            </div>
            <div class="tentang__desc judul">
                <h2 class="tentang__subtitle">Black Soldier Fly (BSF)</h2>
                <p class="tentang__text">Black Soldier Fly (BSF) merupakan jenis lalat yang berukuran 3 kali lalat biasa. Selain berguna untuk mengurangi dampak negatif dari penumpukan material organik di alam, larva/maggot BSF juga sangat baik dan ekonomis untuk dimanfaatkan sebagai pakan hewan dan kotorannya yang biasa disebut kasgot dapat dimanfaatkan sebagai pupuk tanaman.</p>
            </div>
        </div>
    </section>

    <!--Produk Best Seller-->
    <div class="swiper mySwiper best-container">
        <h1 id="best-seller">Best Seller</h1>
        <div class="swiper-wrapper best-wrapper">
            <?php foreach($bests as $best): ?>
            <div class="swiper-slide best-product">
                <img src="assets/images/produk/<?= $best["gambar"]; ?>" alt="" class="gambar">
                <?php 
                $status = "tersedia";
                if($best["stok"] == 0) $status="habis";
                ?>
                <img src="assets/images/<?= $status; ?>.svg" alt="Is Available" class="is-available">
                <h3 class="nama-produk"><?= $best["nama"]; ?></h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <i class="far fa-star"></i>
                    <span>( 3.5 )</span>
                </div>
                <p>Harga</p>
                <div class="price"><?= rupiah($best["harga"]); ?></div>
                <div class="btn-lihat-produk">
                    <a href="detail-produk.php?id=<?= $best["id"]; ?>">Lihat Produk</a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>
    <div class="btn-selengkapnya">
    <a href="produk.php" class="btn-selengkapnya"><button>Lihat Selengkapnya</button></a>
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
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <!--===== MAIN JS =====-->
    <script src="assets/script/main.js?v=<?= time(); ?>"></script>

</body>
</html>