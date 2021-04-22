<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once 'head.php' ?>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" /> 
    <title>Select patio - Gmoscape Contractor LLC</title>
</head>
<body>
    <?php include_once 'header.php' ?>
    <main>
        <section class="container">
            <div class="pay-patio">
                <h1>Select the patio size you want</h1>
                <div class="pay-patio__slider">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class=" card-patio swiper-slide" style="background-image: url(./assets/images/patio1.jpg)">
                                <a class=" card-patio__a" href="#" >
                                    <h2>Small (501 ft or more)</h2>
                                </a>
                            </div>
                            <div class=" card-patio swiper-slide" style="background-image: url(./assets/images/patio2.jpg)">
                                <a class=" card-patio__a" href="" >
                                    <h2>Small (501 ft or more)</h2>
                                </a>
                            </div>
                            <div class=" card-patio swiper-slide" style="background-image: url(./assets/images/patio3.jpg)">
                                <a class=" card-patio__a" href="" >
                                    <h2>Small (501 ft or more)</h2>
                                </a>
                            </div>
                        </div>
                        <!-- Add Arrows -->
                        <div class="swiper-button-next"><i class="fas fa-chevron-right"></i></div>
                        <div class="swiper-button-prev"><i class="fas fa-chevron-left"></i></div>
                    </div>
                </div>
            </div>
            <hr class="separador">
            <form action="">
                <div class="pay-form__top">
                    <figure>
                        <img src="./assets/images/patio1.jpg" alt="">
                    </figure>
                    <div class="descripcion-contenido-servicio">
                        <h1>Small (200 - 300 ft)</h1>
                        <p><b>Description</b></p>
                        <p class="text-descrip-servicio" style="font-size: 14px;">At Gmoscape we work with high quality materials and the most qualified team. With 25 years of experience we will make sure you, your family and your friends, can enjoy your outdoor living space for many years to come. We use materials that exceed standards set by Interlocking Concrete Pavement Institute (ICPI) and ASTM International.</p>
                        <div class="size-servicio">
                            <strong>Size range: </strong>
                            <div class="m-size-servicio">200 - 300ft<sup>2</sup></div>
                        </div>
                        <div class="form-group row size-input">
                            <label for="inputSize" class="col-sm-4 col-form-label">Patio Size (ft<sup>2</sup>):</label>
                            <div class="col-sm-7 size-input-container">
                                <input type="number" class="form-control" min="200" max="300" name="medida" id="medida" placeholder="Enter your patio size here" required="" title="no se puede">
                                <button type="button" class="btn btn-secondary" data-bs-html="true" data-bs-toggle="tooltip" data-bs-placement="top" title="<strong>How many square feet is my patio?</strong> <p>For square or rectangular areas, measure the length and width of the space and multiply them together. For example, a 10-by-10-foot patio would be <strong> 100 square feet.</strong></p>">?</button>
                            </div>
                        </div>
                        <div class="promo-service">
                            <img src="./assets/images/images desconocidas/icon promo.png" alt="">
                            <p><strong>Promo : </strong> $300.00 BONUS</p>
                        </div>
                    </div>
                </div>
                


                <div class="texture-servicio">
                    <h2 class="title-texture-servicio">Select the options and customize your patio:</h2>
                    <h3>Select pavers texture:</h3>
                    <div class="form-check">
                        <label class="option-item">
                        <input type="radio" name="textura" value="Ledgestone" class="checkbox" required="">
                        <div class="option-inner">
                            <div class="tickmark"></div>
                                <img src="./assets/images/images desconocidas/piedra 1.png" alt="Ledgestone">
                                <p>Ledgestone</p>
                            </div>
                        </label>      
                        <label class="option-item">
                        <input type="radio" name="textura" value="Ledgestone" class="checkbox" required="">
                        <div class="option-inner">
                            <div class="tickmark"></div>
                                <img src="./assets/images/images desconocidas/piedra 1.png" alt="Ledgestone">
                                <p>Ladrillo</p>
                            </div>
                        </label>                            
                    </div>
                    <h3>Select color:</h3>
                    <div class="check-colors">
                        <label class="option-item1">
                            <input type="radio" name="color" id="color" value="Onyx" class="checkbox" required="">
                            <div class="option-inner1">
                                <img src="./assets/images/images desconocidas/piedra 1.png" alt="Onyx">
                                <p>Onyx</p>
                            </div>
                        </label>
                        <label class="option-item1">
                            <input type="radio" name="color" id="color" value="Bluestone Blend" class="checkbox" required="">
                            <div class="option-inner1">
                                <img src="./assets/images/images desconocidas/piedra 1.png" alt="Bluestone Blend">
                                <p>Bluestone Blend</p>
                            </div>
                        </label>
                        <label class="option-item1">
                            <input type="radio" name="color" id="color" value="Onyx-Natural" class="checkbox" required="">
                            <div class="option-inner1">
                                <img src="./assets/images/images desconocidas/piedra 1.png" alt="Onyx-Natural">
                                <p>Onyx-Natural</p>
                            </div>
                        </label>
                        <label class="option-item1">
                            <input type="radio" name="color" id="color" value="Sahara-Chestnut" class="checkbox" required="">
                            <div class="option-inner1">
                                <img src="./assets/images/images desconocidas/piedra 1.png" alt="Sahara-Chestnut">
                                <p>Sahara-Chestnut</p>
                            </div>
                        </label>
                        <label class="option-item1">
                            <input type="radio" name="color" id="color" value="Sahara-Chestnut-Lite" class="checkbox" required="">
                            <div class="option-inner1">
                                <img src="./assets/images/images desconocidas/piedra 1.png" alt="Sahara-Chestnut-Lite">
                                <p>Sahara-Chestnut-Lite</p>
                            </div>
                        </label>
                        <label class="option-item1">
                            <input type="radio" name="color" id="color" value="Toffee-Onyx-Lite" class="checkbox" required="">
                            <div class="option-inner1">
                                <img src="./assets/images/images desconocidas/piedra 1.png" alt="Toffee-Onyx-Lite">
                                <p>Toffee-Onyx-Lite</p>
                            </div>
                        </label>
                        <label class="option-item1">
                            <input type="radio" name="color" id="color" value="Limestone Quarry Blend" class="checkbox" required="">
                            <div class="option-inner1">
                                <img src="./assets/images/images desconocidas/piedra 1.png" alt="Limestone Quarry Blend">
                                <p>Limestone Quarry Blend</p>
                            </div>
                        </label>
                    </div>
                    <h3>Specifications:</h3>
                    <textarea rows="4" name="descripcion" id="descripcion" required placeholder="Enter the details about your patio here"></textarea>
                    <div class="discount-texture">
                        <div class="top-discount">
                            <div class="contenedor-precios">
                                <p class="fuente-verde" style="margin-right: 10px;">Price:  </p>
                                <p class="precio-tachado" id="precio_normal">$3,971.00</p>
                            </div>
                        </div>
                        <div class="down-discount">
                            <p class="fuente-verde" style="margin-right: 10px;">Total:  </p>
                            <p id="precio_total">$3,671.00</p>
                        </div>
                    </div>
                </div>
                <button type="submit" id="continuar" name="continuar" class="btn-green btn_continue">CONTINUE</button>
            </form>
        </section>
        <div class="float-container">
            <div class="float-container__text">
                <p><strong>Do you have a special patio design or feature in mind?</strong></p>
                <p>Remember you can apply this promo over any other design, color or texture*</p>
                <p class="term-conditions" >* Terms and Conditions may apply.</p>
            </div>
            <div class="float-container__btn">
                <a href="http://m.me/gmoscape" target="_blank">CONTACT OUR SPECIALIST</a>
            </div>
            <span class="float-container__close">x</span>
        </div>
    </main>
    <?php include_once 'footer.php' ?>
    <script src="./public/js/pay.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 3,
            spaceBetween: 20,
            loop: true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });

        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
  </script>
</body>
</html>