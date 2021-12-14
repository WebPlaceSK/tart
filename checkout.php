<?php $page_activ_shop = 'active'; $page_title='Dokončiť objednávku'; include '_inc/head.php'; include '_inc/header.php'; ?>
        <!--================End Main Header Area =================-->
        <section class="banner_area">
        	<div class="container">
        		<div class="banner_text">
        			<h3>Dokončenie objednávky</h3>
        			<ul>
        				<li><a href="index.php">Domov</a></li>
        				<li><a href="cart.php">Košíka</a></li>
        				<li><a href="checkout.php">Dokončenie objednávky</a></li>
        			</ul>
        		</div>
        	</div>
        </section>
        <!--================End Main Header Area =================-->
        
        <!--================Billing Details Area =================-->    
        <section class="billing_details_area p_100">
            <div class="container">
                <div class="row">
                	<div class="col-lg-7">
               	    	<div class="main_title">
               	    		<h2>Kontaktné údaje</h2>
               	    	</div>
                		<div class="billing_form_area">
                			<form class="billing_form row" action="contact_process.php.html" method="post" id="contactForm" novalidate="novalidate">
								<div class="form-group col-md-6">
								    <label for="first">Meno *</label>
									<input type="text" class="form-control" name="meno" placeholder="Meno">
								</div>
								<div class="form-group col-md-6">
								    <label for="last">Priezvisko *</label>
									<input type="text" class="form-control" name="priezvisko" placeholder="Priezvisko">
								</div>
                                <div class="form-group col-md-6">
                                    <label for="zip">Telefón *</label>
                                    <input type="number" class="form-control" name="telefon" placeholder="Telefón">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="email">E-mail *</label>
                                    <input type="email" class="form-control" name="email" placeholder="E-mail">
                                </div>
								<div class="form-group col-md-12">
								    <label for="address">Adresa *</label>
									<input type="text" class="form-control" name="address" placeholder="Ulica">
									<input type="text" class="form-control" name="popisne_cislo" placeholder="Popisné číslo">
								</div>

                                <div class="form-group col-md-12">
								    <label for="city">Mesto / PSČ</label>
									<input type="text" class="form-control" name="city" placeholder="Mesto / PSČ">
                                    <input type="text" class="form-control" name="krajina" value="Slovensko" placeholder="Krajina" disabled>
                                    <input type="hidden" name="krajina" value="Slovensko" required>
                                </div>

								<div class="form-group col-md-12">
									<label for="phone">Poznámka k objednávke</label>
									<textarea class="form-control" name="message" id="message" rows="1" placeholder="Poznámka k objednávke"></textarea>
								</div>
							</form>
                		</div>
                	</div>
                	<div class="col-lg-5">
                		<div class="order_box_price">
                			<div class="main_title">
                				<h2>Prehľad objednávky</h2>
                			</div>
							<div class="payment_list">
                                <?php checkout_final(); ?>
								<div id="accordion" class="accordion_area">
                                    <b>Spôsob doručenia</b>
									<div class="card">
										<div class="card-header" id="headingOne">
											<h5 class="mb-0">
                                                <input class="btn collapsed" type="radio" name="doricenie" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseTwo"> <span style="font-size:15px;">Doručenie na adresu</span>
											</h5>
										</div>
										<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion" style="margin-top:10px;">
											<div class="card-body">Doručenie na adresu zadanú v objednávke formou týždňového rozvozu každý piatok.</div>
										</div>
									</div>
									<div class="card">
										<div class="card-header" id="headingTwo">
											<h5 class="mb-0">
												<input class="btn collapsed" type="radio" name="doricenie" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> <span style="font-size:15px;">Osobný odber</span>
											</h5>
										</div>
										<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion" style="margin-top:10px;">
                                            <div class="card-body">Poznámka</div>
										</div>
									</div>

                                    <div class="card" style="margin-top: 20px;">
                                        <div class="card-header" id="headingTwo">
                                            <h5 class="mb-0">
                                        <input class="btn collapsed" type="checkbox"> <span style="font-size:15px;">Súhlasím so spracovaním osobných údajov <a href="obchodne_podmienky.php" target="_blank">viac info</a></span>
                                            </h5></div>

                                        <div class="card-header" id="headingTwo">
                                            <h5 class="mb-0">
                                                <input class="btn collapsed" type="checkbox"> <span style="font-size:15px;">Súhlasim s VOP tart.sk <a href="gdpr.php" target="_blank">viac info</a></span>
                                            </h5></div></div>
								</div>
								<?php checkout_1(); ?>
							</div>
						</div>
                	</div>
                </div>
            </div>
        </section>
        <!--================End Billing Details Area =================-->   
        


<?php include '_inc/footer.php'; ?>