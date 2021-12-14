<?php
include "_inc/db.php";
$pr = $_GET['pr'];
$sql_1 = "SELECT * FROM produkty WHERE id_pr='$pr'";
$result_1 = $connection->query($sql_1);
$data_1 = $result_1->fetch_assoc();
$nazov_pr_1 = $data_1['nazov_pr'];
$page_title = $nazov_pr_1;
$page_activ_shop = 'active'; include '_inc/head.php'; include '_inc/header.php';
$sql = "SELECT * FROM produkty WHERE id_pr='$pr'";
$result = $connection->query($sql);
$data = $result->fetch_assoc();
$nazov_pr = $data['nazov_pr'];
$id_kat = $data['id_kat'];
$predajna_cena = $data['predajna_cena'];
$popis = $data['popis'];
$popis_text = $data['popis_text'];
$img_1_title = $data['img_1_title'];
$alergeny = $data['alergeny'];

$predajna_cena_form  = number_format($predajna_cena, 2, ',', ' ');

?>

        <section class="banner_area">
        	<div class="container">
        		<div class="banner_text">
        			<h3><?php echo $nazov_pr; ?></h3>
        			<ul>
        				<li><a href="index.php">Domov</a></li>
        				<li><a href="shop.php?kat=<?php echo $id_kat; ?>">Shop</a></li>
        				<li><a style="color: white;"><?php echo $nazov_pr; ?></a></li>
        			</ul>
        		</div>
        	</div>
        </section>
        <!--================End Main Header Area =================-->
        
        <!--================Product Details Area =================-->
        <section class="product_details_area p_100">
        	<div class="container">
                <?php if (isset($_GET['produkt']) && $_GET['produkt'] == 'add') {
                    echo '<div style="border-radius:0px;padding: 5px;padding-left: 10px;" class="alert alert-success alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close" style="padding: .45rem 1.25rem; font-size: 20px;">&times;</a><b style="font-family: Arial; font-size: 14px;">Produkt bol pridaný do košíka.</b></div>';
                } ?>
        		<div class="row product_d_price">
        			<div class="col-lg-6">
        				<div class="product_img"><img class="img-fluid" src="adm/img_produkt/<?php echo $img_1_title; ?>" alt=""></div>
        			</div>
        			<div class="col-lg-6">
                        <form action="" method="post">
                            <input name="id_produktu" type="hidden" value="<?php echo $pr; ?>">
                            <input name="cena_produktu" type="hidden" value="<?php echo $predajna_cena; ?>">
                            <div class="product_details_text">
                                <h4><?php echo $nazov_pr;?></h4>
                                <p><?php echo $popis; ?></p>
                                <h5><span><?php echo $predajna_cena_form; ?> €</span></h5>
                                <div class="quantity_box">
                                    <label for="quantity">Množstvo :</label>
                                    <input type="text" placeholder="1" value="1" name="qt">
                                </div>
                                <button class="pink_more" name="add_to_cart" type="submit" style="line-height: 39px; border: 1px solid transparent; padding: 0px 30px;font-size: 14px;">Pridať do košíka</button>
                            </div>
                        </form>
        			</div>
        		</div>
        		<div class="product_tab_area">
					<nav>
						<div class="nav nav-tabs" id="nav-tab" role="tablist">
							<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Popis</a>
							<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Alergény</a>
						</div>
					</nav>
					<div class="tab-content" id="nav-tabContent">
						<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
							<p><?php echo $popis_text; ?></p>
						</div>
						<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
						    <p><?php echo $alergeny; ?></p>
                        </div>
					</div>
        		</div>
        	</div>
        </section>

<?php include '_inc/footer.php'; ?>