<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once 'head.php' ?>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" /> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">
    <title>Galleries - Gmoscape Contractor LLC</title>
</head>
<body>
    <?php include_once 'header.php' ?>
    <main>
        <section class="banner" style="background-image: url(./assets/images/Banner\ testimonials.png);">
            <div class="banner-title">
                <h1>GALLERIES</h1>
                <hr>
            </div>
        </section>
        <section class="galleries container">
            
            <?php include_once 'nav-galleries.php' ?>

            <div class="service__imgs">
                <a href="./assets/images/Banner testimonials.png" class="service__imgs-items">
                    <img src="./assets/images/Banner testimonials.png" alt="">
                </a >
                <a href="./assets/images/fotos-5.jpg" class="service__imgs-items">
                    <img src="./assets/images/fotos-5.jpg" alt="">
                </a >
                <a href="./assets/images/Banner testimonials.png" class="service__imgs-items">
                    <img src="./assets/images/Banner testimonials.png" alt="">
                </a >
                <a href="./assets/images/Banner About us.png" class="service__imgs-items">
                    <img src="./assets/images/Banner About us.png" alt="">
                </a >
                <a href="./assets/images/banner1.jpg" class="service__imgs-items">
                    <img src="./assets/images/banner1.jpg" alt="">
                </a >
                <a href="./assets/images/Recurso_3.png" class="service__imgs-items">
                    <img src="./assets/images/Recurso_3.png" alt="">
                </a >
                <a href="./assets/images/Grupo 145.png" class="service__imgs-items">
                    <img src="./assets/images/Grupo 145.png" alt="">
                </a >
                <a href="./assets/images/Banner testimonials.png" class="service__imgs-items">
                    <img src="./assets/images/Banner testimonials.png" alt="">
                </a >
            </div>
        </section>
    </main>
    <?php include_once 'footer.php' ?>
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="./public/js/galleries.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js" ></script>
    <script>
        lightGallery(document.querySelector('.service__imgs'))
    </script>
    <script>
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 1,
            spaceBetween: 10,
            loop: true,
            // init: false,
            breakpoints: {
                360: {
                slidesPerView: 1,
                spaceBetween: 10,
                },
                450: {
                slidesPerView: 2,
                spaceBetween: 10,
                },
                640: {
                slidesPerView: 4,
                spaceBetween: 10,
                },
                768: {
                slidesPerView: 5,
                spaceBetween: 10,
                },
                1024: {
                slidesPerView: 8,
                spaceBetween: 10,
                },
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>
</body>
</html>