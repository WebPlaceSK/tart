<?php $page_activ_shop = 'active';
include "_inc/db.php";
$kat = $_GET['kat'];
$sql_1 = "SELECT * FROM kategorie WHERE id_kategorie='$kat'";
$result_1 = $connection->query($sql_1);
$data_1 = $result_1->fetch_assoc();
$data_1 = $data_1['name_kategorie'];

if ($kat == ''){
    $page_title = 'E-shop';
} else{
    $page_title = $data_1;
}

include '_inc/head.php'; include '_inc/header.php'; ?>

        <section class="banner_area">
        	<div class="container">
        		<div class="banner_text">
        			<h3>E-shop</h3>
        			<ul>
        				<li><a href="index.php">Domov</a></li>
        				<li><a href="shop.php">E-shop</a></li>
        			</ul>
        		</div>
        	</div>
        </section>
        <!--================End Main Header Area =================-->
        
        <!--================Product Area =================-->
        <section class="product_area p_100">
        	<div class="container">
        		<div class="row product_inner_row">
        			<div class="col-lg-9">
        				<div class="row product_item_inner">
                            <?php shop(); ?>
        				</div>
        			</div>
        			<div class="col-lg-3">
        				<div class="product_left_sidebar">
        					<aside class="left_sidebar p_catgories_widget">
        						<div class="p_w_title">
        							<h3>Kategórie</h3>
        						</div>
        						<ul class="list_style">
        						    <?php shop_kategorie(); ?>
        						</ul>
        					</aside>

        				</div>
        			</div>
        		</div>
        	</div>
        </section>

<?php include '_inc/footer.php'; ?>