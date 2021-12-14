<?php $page_activ_kontakt = 'active'; $page_title='Kontakt'; include '_inc/head.php'; include '_inc/header.php'; ?>

    <section class="banner_area">
        <div class="container">
            <div class="banner_text">
                <h3>Kontakt</h3>
                <ul>
                    <li><a href="index.php">Domov</a></li>
                    <li><a style="color: white;">Kontakt</a></li>
                </ul>
            </div>
        </div>
    </section>

    <section class="product_details_area p_100">
        <div class="container">
            <div class="row product_d_price">
                <div class="col-lg-6">
                    <form class="row contact_us_form" action="contact_process.php.html" method="post" id="contactForm" novalidate="novalidate">
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" name="name" placeholder="Meno Priezvisko">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="email" class="form-control" name="email" placeholder="E-mail">
                        </div>
                        <div class="form-group col-md-12">
                            <input type="text" class="form-control" name="subject" placeholder="Telefón">
                        </div>
                        <div class="form-group col-md-12">
                            <textarea class="form-control" name="message" rows="1" placeholder="Poznámka"></textarea>
                        </div>
                        <div class="form-group col-md-12">
                            <button type="submit" value="submit" class="btn order_s_btn form-control">Odoslať</button>
                        </div>
                    </form>
                </div>

                <div class="col-lg-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10513.844833901567!2d19.6397432!3d48.7921756!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x861630394c1a1e45!2sTart!5e0!3m2!1ssk!2ssk!4v1608198032227!5m2!1ssk!2ssk" width="600" height="450" frameborder="0" style="border:0; width: 100%;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
                
            </div>
        </div>
    </section>

<?php include '_inc/footer.php'; ?>