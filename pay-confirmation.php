<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once 'head.php' ?>
    <title>Patio Confirmation - Gmoscape Contractor LLC</title>
</head>
<body>
    <?php include_once 'header.php' ?>
    <main>
        <section class="container">
            <form class="pay-patio pay-confirmation">
                <div class="form-container-confirmartion">
                    <h2>CHECK OUT</h2>
                    <p>Getting your order</p>
                    <div class="row g-3">
                        <div class="form-group col-md-12">
                            <label for="inputName">First Name</label>
                            <input type="text" name="nombre" class="form-control" id="nombre" required="">
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="form-group col-md-12">
                            <label for="inputLastName">Last Name</label>
                            <input type="text" class="form-control" name="apellido" id="apellido" required="">
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="form-group col-md-12">
                            <label for="inputAddress">Address</label>
                            <input type="text" class="form-control" name="direccion" id="direccion" required="">
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="form-group col-md-6">
                            <label for="inputCity">City</label>
                            <input type="text" class="form-control" id="ciudad" name="ciudad" required="">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputState">State</label>
                            <input type="text" class="form-control" id="estado" name="estado" required="">
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="form-group col-md-12">
                            <label for="inputZip">ZIP Code</label>
                            <input type="text" class="form-control" id="zip" name="zip" required="">
                        </div>
                    </div>
                    <hr>
                    <p>CONTACT INFORMATION</p>
                    <div class="row g-3">
                        <div class="form-group col-md-12">
                            <label for="inputEmail">Email Address</label>
                            <input type="email" class="form-control" id="correo" name="correo" required="">
                        </div>
                    </div>
                    <div class="row g-3 ">
                        <div class="form-group col-md-12">
                            <label for="inputPhone">Phone Number</label>
                            <input type="text" class="form-control" id="telefono" name="telefono" required="">
                        </div>
                    </div>
                </div>
                <div class="data-service-container">
                    <h2>Order Summary</h2>
                    <div class="img-contenido-servicio">
                        <img src="./assets/images/patio1.jpg" alt="Service image">
                    </div>
                    <h2 style="font-size: 24px; text-align:center;">Small (200 - 300 ft)</h2>
                    <div class="size-servicio">
                        <strong>Size: </strong>
                        <div class="m-size-servicio">201ft</div>
                    </div>

                    <div class="promo-service">
                        <img src="./assets/images/images desconocidas/icon promo.png" alt="Icon promo">
                        <p><strong>Promo : </strong>300.00</p>
                    </div>
                    <div class="especifications-services">
                        <div class="top-especifications-services">
                            <strong class="fuente-verde">Texture:</strong>
                            <div class="option-inner">
                                <img src="./assets/images/images desconocidas/piedra 1.png" alt="">
                                <p>Ledgestone</p>
                            </div>
                        </div>
                        <div class="down-especifications-services">
                            <strong class="fuente-verde">Color: </strong>
                            <div class="option-inner1">
                                <img src="./assets/images/images desconocidas/piedra 1.png" alt="">
                                <p>Bluestone Blend</p>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="discount-texture">
                        <div class="online-payment">
                            <p class="fuente-verde">Online payment fee:  </p>
                            <p>  5.00</p>
                        </div>
                        <div class="down-discount">
                            <p class="fuente-verde">Total:  </p>
                            <p>  3,519.00</p>
                        </div>
                    </div>
                    <button type="submit" name="terminar" id="terminar" class=" btn-green">CONTINUE TO PAYMENT</button>
                </div>
            </form>
        </section>
    </main>
    <?php include_once 'footer.php' ?>
</body>
</html>