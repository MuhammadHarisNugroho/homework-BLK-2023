<?php
// Mendefinisikan variabel
$judulHalaman = "E-commerce Pakaian Responsif - Bedimcode";
$teksLogo = "Toko.";
$itemMenu = array(
    array("id" => "home", "icon" => "ri-home-line", "teks" => "Beranda"),
    array("id" => "new", "icon" => "ri-price-tag-3-line", "teks" => "Baru"),
    array("id" => "collection", "icon" => "ri-compass-line", "teks" => "Koleksi"),
    array("id" => "products", "icon" => "ri-t-shirt-line", "teks" => "Produk")
);
$ikonTema = "ri-moon-line";
$kontenBeranda = array(
    "judul" => "Koleksi Pakaian Baru",
    "deskripsi" => "Koleksi pakaian baru dari merek terbaik tahun ini."
);
$kategoriBaru = array(
    array("gambar" => "assets/img/new1.png", "judul" => "Hoodie & Sweatshirt", "subjudul" => "Koleksi musim dingin"),
    array("gambar" => "assets/img/new2.png", "judul" => "Celana & Jaket", "subjudul" => "Koleksi musim dingin"),
    array("gambar" => "assets/img/new3.png", "judul" => "Kaos & Set Jas", "subjudul" => "Koleksi musim dingin")
);

// Data untuk bagian PRODUCTS
$productsData = array(
    array("image" => "assets/img/product1.png", "title" => "Gotland black Jacket", "price" => "$124.99"),
    array("image" => "assets/img/product2.png", "title" => "Black Sports Shorts", "price" => "$34.99"),
    array("image" => "assets/img/product3.png", "title" => "Knox Quilted Jacket", "price" => "$97.99"),
    array("image" => "assets/img/product4.png", "title" => "Blue Sport Pants", "price" => "$69.99")
);

// Data untuk bagian COLLECTION
$collectionMen = array(
    "men" => array(
        "title" => "Men Collection",
        "link" => "#",
        "image" => "assets/img/collection1.png"
    )
);
$collectionWomen = array(
    "women" => array(
        "title" => "Women Collection",
        "link" => "#",
        "image" => "assets/img/collection2.png"
    )
);

// Data untuk bagian BRANDS
$brandsData = array(
    "assets/img/logo1.png",
    "assets/img/logo2.png",
    "assets/img/logo3.png",
    "assets/img/logo4.png"
);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>
        <?php echo $judulHalaman; ?>
    </title>
</head>

<body>
    <header class="header" id="header">
        <nav class="nav container">
            <a href="#" class="nav__logo">
                <?php echo $teksLogo; ?>
            </a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <?php foreach ($itemMenu as $item): ?>
                        <li class="nav__item">
                            <a href="#<?php echo $item['id']; ?>" class="nav__link active-link">
                                <i class="<?php echo $item['icon']; ?>"></i>
                                <span>
                                    <?php echo $item['teks']; ?>
                                </span>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <i class="<?php echo $ikonTema; ?> change-theme" id="theme-button"></i>
        </nav>
    </header>

    <main class="main">
        <!--==================== HOME ====================-->
        <section class="home section" id="home">
            <div class="home__container container grid">
                <div class="home__data">
                    <h1 class="home__title">
                        <?php echo $kontenBeranda['judul']; ?>
                    </h1>

                    <p class="home__description">
                        <?php echo $kontenBeranda['deskripsi']; ?>
                    </p>

                    <a href="#new" class="button__link">
                        Jelajahi <i class="ri-arrow-right-line"></i>
                    </a>
                </div>

                <div class="home__images">
                    <img src="assets/img/home1.png" alt="home image">
                    <img src="assets/img/home2.png" alt="home image">
                </div>
            </div>
        </section>

        <!--==================== NEW ====================-->
        <section class="new section" id="new">
            <h2 class="section__title">
                New Categories
            </h2>

            <div class="new__container container grid">
                <?php foreach ($kategoriBaru as $kategori): ?>
                    <article class="new__card">
                        <img src="<?php echo $kategori['gambar']; ?>" alt="new image" class="new__img">

                        <a href="#" class="new__link">
                            <div class="new__data">
                                <h2 class="new__title">
                                    <?php echo $kategori['judul']; ?>
                                </h2>
                                <span class="new__subtitle">
                                    <?php echo $kategori['subjudul']; ?>
                                </span>
                            </div>

                            <i class="ri-arrow-right-line"></i>
                        </a>
                    </article>
                <?php endforeach; ?>
            </div>
        </section>

        <!--==================== COLLECTION ====================-->
        <section class="collection section" id="collection">
            <div class="collection__container container">
                <?php foreach ($collectionMen as $men): ?>
                    <div class="collection__explore">
                        <div class="collection__data-men">
                            <h2 class="collection__title">
                                <?php echo $men['title']; ?>
                            </h2>
                            <a href="<?php echo $men['link']; ?>" class="button__link">
                                Explore Clothes <i class="ri-arrow-right-line"></i>
                            </a>
                        </div>

                        <img src="<?php echo $men['image']; ?>" alt="collection image">
                    </div>
                <?php endforeach; ?>

                <?php foreach ($collectionWomen as $women): ?>
                    <div class="collection__explore">
                        <img src="<?php echo $women['image']; ?>" alt="collection image">
                        <div class="collection__data-women">
                            <h2 class="collection__title">
                                <?php echo $women['title']; ?>
                            </h2>
                            <a href="<?php echo $women['link']; ?>" class="button__link">
                                Explore Clothes <i class="ri-arrow-right-line"></i>
                            </a>
                        </div>


                    </div>
                <?php endforeach; ?>
            </div>
        </section>


        <!--==================== PRODUCTS ====================-->
        <section class="products section" id="products">
            <h2 class="section__title">
                Best Products
            </h2>

            <div class="products__container container swiper">
                <div class="swiper-wrapper">
                    <?php foreach ($productsData as $product): ?>
                        <article class="products__card swiper-slide">
                            <img src="<?php echo $product['image']; ?>" alt="product image" class="products__img">

                            <h2 class="products__title">
                                <?php echo $product['title']; ?>
                            </h2>
                            <span class="products__price">
                                <?php echo $product['price']; ?>
                            </span>
                        </article>
                    <?php endforeach; ?>
                </div>

                <div class="swiper-button-next">
                    <i class="ri-arrow-right-line"></i>
                </div>

                <div class="swiper-button-prev">
                    <i class="ri-arrow-left-line"></i>
                </div>
            </div>
        </section>

        <!--==================== BRANDS ====================-->
        <section class="brand section">
            <h2 class="section__title">
                Brands We Sell
            </h2>

            <div class="brand__container container grid">
                <?php foreach ($brandsData as $brand): ?>
                    <img src="<?php echo $brand; ?>" alt="logo image" class="brand__img">
                <?php endforeach; ?>
            </div>
        </section>
    </main>

    <footer class="footer section">
        <div class="footer__container container grid">
            <div>
                <a href="#" class="footer__logo">
                    <?php echo $teksLogo; ?>
                </a>

                <p class="footer__description">
                    Berkomitmen untuk membawa Anda pakaian terbaik dari merek terkenal.
                </p>
            </div>

            <div class="footer__content">
                <!-- Add content for the footer -->
            </div>
        </div>

        <div class="footer__info container">
            <span class="footer__copy">
                &#169; Bedimcode. Semua hak dilindungi
            </span>

            <a href="#" class="footer__privacy">
                Syarat & Ketentuan
            </a>
        </div>
    </footer>

    <!--========== SCROLL UP ==========-->
    <a href="#" class="scrollup" id="scroll-up">
        <i class="ri-arrow-up-line"></i>
    </a>

    <!--=============== SCROLLREVEAL ===============-->
    <script src="assets/js/scrollreveal.min.js"></script>

    <!--=============== SWIPER JS ===============-->
    <script src="assets/js/swiper-bundle.min.js"></script>

    <!--=============== MAIN JS ===============-->
    <script src="assets/js/main.js"></script>
</body>

</html>