<header class="main_header_area">
    <div class="top_header_area row m0">
        <div class="container">
            <div class="float-left">
                <a href="tell:00421911315659"><i class="fa fa-phone" aria-hidden="true"></i> +421 911 315 659</a>
                <a href="mainto:info@tart.sk"><i class="fa fa-envelope-o" aria-hidden="true"></i> info@tart.sk</a>
            </div>
            <div class="float-right">
                <ul class="h_social list_style">
                    <li><a href="https://www.facebook.com/tartcakestudio" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://www.instagram.com/Tart_cakestudio/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                </ul>
                <ul class="h_search list_style">
                    <li class="shop_cart">
                        <a href="cart.php">
								<span style="
								height: 18px;
								width: 18px;
								font-size: 11px;
								text-align: center;
								border-radius: 50%;
								background: #fff;
								color: #242424;
								font-weight: bold;
								display: inline-block;
								line-height: 18px;
								position: absolute;
								right: -8px;
								top: 5px;"><?php cart_number(); ?></span>
                            <img src="img/basket-white.svg"  style="width: 25px;">
                        </a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="main_menu_two">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="index.php"><img src="img/logo_final_1.png" style="width: 170px;" alt="Tart logo"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="my_toggle_menu">
                      <span></span>
                      <span></span>
                      <span></span>
                    </span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav justify-content-end">
                        <li class="<?php echo $page_activ_index; ?>"><a href="index.php" style="text-transform: uppercase;">Domov</a></li>
                        <li class="<?php echo $page_activ_shop; ?>"><a href="shop.php" style="text-transform: uppercase;">E-shop</a></li>
                        <li class="<?php echo $page_activ_svadby; ?>"><a href="svadby_eventy.php" style="text-transform: uppercase;">Svadby & eventy</a></li>
                        <li class="<?php echo $page_activ_novinky; ?>"><a href="novinky.php" style="text-transform: uppercase;">Novinky</a></li>
                        <li class="<?php echo $page_activ_galeria; ?>"><a href="galeria.php" style="text-transform: uppercase;">Galéria</a></li>
                        <li class="<?php echo $page_activ_kontakt; ?>"><a href="kontakt.php" style="text-transform: uppercase;">Kontakt</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>