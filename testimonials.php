<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once 'head.php' ?>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />    
    <title>Testimonials - Gmoscape Contractor LLC</title>
</head>
<body>
    <?php include_once 'header.php' ?>
    <main>
        <section class="banner" style="background-image: url(./assets/images/Banner\ testimonials.png);">
            <div class="banner-title">
                <h1>TESTIMONIALS</h1>
                <hr>
            </div>
        </section>
        <section class="testimonials__content container">
            <div class="services__text">
                <h2>testimonials</h2>
                <hr>
                <p>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci
                </p>
            </div>
            <div class="testimonials__container swiper-container">
                <div class="swiper-wrapper">
                    <div class="testimonial__item swiper-slide">
                        <figure>
                            <img src="./assets/images/Grupo 143.png" alt="">
                        </figure>
                        <div>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis eius libero maiores commodi cupiditate excepturi repudiandae minima nulla. Et numquam voluptas impedit perspiciatis. Error quia quae nostrum consequatur aut dolorum?
                            </p>
                            <p><strong>Petronila Maria</strong></p>
                        </div>
                    </div>

                    <div class="testimonial__item swiper-slide">
                        <figure>
                            <img src="./assets/images/Grupo 143.png" alt="">
                        </figure>
                        <div>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis eius libero maiores commodi cupiditate excepturi repudiandae minima nulla. Et numquam voluptas impedit perspiciatis. Error quia quae nostrum consequatur aut dolorum?
                            </p>
                            <p><strong>Petronila Maria</strong></p>
                        </div>
                    </div>

                    <div class="testimonial__item swiper-slide">
                        <figure>
                            <img src="./assets/images/Grupo 143.png" alt="">
                        </figure>
                        <div>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis eius libero maiores commodi cupiditate excepturi repudiandae minima nulla. Et numquam voluptas impedit perspiciatis. Error quia quae nostrum consequatur aut dolorum?
                            </p>
                            <p><strong>Petronila Maria</strong></p>
                        </div>
                    </div>

                    <div class="testimonial__item swiper-slide">
                        <figure>
                            <img src="./assets/images/Grupo 143.png" alt="">
                        </figure>
                        <div>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis eius libero maiores commodi cupiditate excepturi repudiandae minima nulla. Et numquam voluptas impedit perspiciatis. Error quia quae nostrum consequatur aut dolorum?
                            </p>
                            <p><strong>Petronila Maria</strong></p>
                        </div>
                    </div>

                    <div class="testimonial__item swiper-slide">
                        <figure>
                            <img src="./assets/images/Grupo 143.png" alt="">
                        </figure>
                        <div>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis eius libero maiores commodi cupiditate excepturi repudiandae minima nulla. Et numquam voluptas impedit perspiciatis. Error quia quae nostrum consequatur aut dolorum?
                            </p>
                            <p><strong>Petronila Maria</strong></p>
                        </div>
                    </div>

                    <div class="testimonial__item swiper-slide">
                        <figure>
                            <img src="./assets/images/Grupo 143.png" alt="">
                        </figure>
                        <div>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis eius libero maiores commodi cupiditate excepturi repudiandae minima nulla. Et numquam voluptas impedit perspiciatis. Error quia quae nostrum consequatur aut dolorum?
                            </p>
                            <p><strong>Petronila Maria</strong></p>
                        </div>
                    </div>
                </div>
                
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </section>
    </main>
    <?php include_once 'footer.php' ?>
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper('.swiper-container', {
            loop: true,
            spaceBetween: 10,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            breakpoints: {
                640: {
                slidesPerView: 1,
                spaceBetween: 20,
                },
                768: {
                slidesPerView: 2,
                spaceBetween: 40,
                },
                1024: {
                slidesPerView: 2,
                spaceBetween: 40,
                },
                1250: {
                slidesPerView: 3,
                spaceBetween: 50,
                }
            },
            pagination: {
                el: '.swiper-pagination',
            },
        });
    </script>
</body>
</html>