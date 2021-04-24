<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once 'head.php' ?>
    <title>Contact - Gmoscape Contractor LLC</title>
</head>
<body>
    <?php include_once 'header.php' ?>
    <main>
        <section class="contact">
            <div class="contact__content container">
                <form action="" method="POST">
                    <div class="contact-title">
                        <h1>CONTACT US</h1>
                        <hr>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                    </div>
                    <div class="mb-3">
                        <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone number">
                    </div>
                    <div class="row g-3">
                        <div class="col-sm-12">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control" id="message" name="message" placeholder="Your message" rows="3"></textarea>
                    </div>
                    <p>
                        By clicking “Send Message”, you agree to our Terms and Conditions and Privacy Policy.
                    </p>
                    <button type="submit" class="btn-green">SEND MESSAGE</button>
                </form>
            </div>
        </section>
    </main>
    <?php include_once 'footer.php' ?>
</body>
</html>