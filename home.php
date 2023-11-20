<!doctype html>
<html lang='en'>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <?php include 'cdn.php' ?>
    <title>Home</title>
    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./css/home.css">
</head>

<body>
    <?php include 'header.php' ?>
    <div class="search-all">
        <div class="search">
            <input type="text" placeholder="Search...">
            <span>
                <i class='bx bx-search'></i>
            </span>
        </div>
        <div class="search-by">
            <span><i class="fa-solid fa-list"></i></span>
        </div>
    </div>

    <div class="categories-all">
        <div class="cat-heading">
            <div class="cat-one">
                <h3>Categories</h3>
            </div>
            <div class="cat-two">

            </div>
        </div>
        <!-- Swiper -->
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide cat-box">
                    <div class="cat-image">
                        <img src="./images/one.png" alt="">
                    </div>
                    <div class="cat-info">
                        <div class="cat-name">
                            <h3>Pringles Original</h3>
                            <p>5kg</p>
                        </div>
                        <div class="cat-p-all">
                            <div class="cat-price">
                                <h3>$56.54</h3>
                            </div>
                            <div class="cat-plus">
                                <span> +</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide cat-box">
                    <div class="cat-image">
                        <img src="./images/one.png" alt="">
                    </div>
                    <div class="cat-info">
                        <div class="cat-name">
                            <h3>Pringles Original</h3>
                            <p>5kg</p>
                        </div>
                        <div class="cat-p-all">
                            <div class="cat-price">
                                <h3>$56.54</h3>
                            </div>
                            <div class="cat-plus">
                                <span> +</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide cat-box">
                    <div class="cat-image">
                        <img src="./images/one.png" alt="">
                    </div>
                    <div class="cat-info">
                        <div class="cat-name">
                            <h3>Pringles Original</h3>
                            <p>5kg</p>
                        </div>
                        <div class="cat-p-all">
                            <div class="cat-price">
                                <h3>$56.54</h3>
                            </div>
                            <div class="cat-plus">
                                <span> +</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <?php include 'footer.php'?>
    <script src="./javascript/home.js"></script>
</body>

</html>