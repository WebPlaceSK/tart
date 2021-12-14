<?php $page_activ_svadby = 'active'; $page_title='Svadby & Eventy'; include '_inc/head.php'; include '_inc/header.php';
$sql_svadby = "SELECT * FROM text_page WHERE page='svadby_event'";
$result_svadby = $connection->query($sql_svadby);
$data = $result_svadby->fetch_assoc();
$nadpis_1 = $data['nadpis_1'];
$text = $data['text'];
?>
    <section class="banner_area">
        <div class="container">
            <div class="banner_text">
                <h3>Svadby & Eventy</h3>
                <ul>
                    <li><a href="index.php">Domov</a></li>
                    <li><a href="svadby_eventy.php.php">Svadby & Eventy</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!--================End Main Header Area =================-->

    <!--================Product Area =================-->
    <section class="product_area p_100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="p_w_title">
                        <h3><?php echo $nadpis_1; ?></h3>
                    </div>
                    <p><?php echo $text; ?></p>
                </div>
                <div class="col-lg-6">
                   <div class="row">
                       <div class="col-lg-6" style="margin-top: 25px;"><img src="adm/img_galeria/IMG_20190125_112802-min.jpg" style="width: 100%;" alt=""></div>
                       <div class="col-lg-6" style="margin-top: 25px;"><img src="adm/img_galeria/20200604_175911-min.jpg" style="width: 100%;" alt=""></div>
                       <div class="col-lg-6" style="margin-top: 25px;"><img src="adm/img_galeria/FB_IMG_1546979187847-min.jpg" style="width: 100%;" alt=""></div>
                       <div class="col-lg-6" style="margin-top: 25px;"><img src="adm/img_galeria/18595585_1691428417817398_4895409165286733260_o.jpg" style="width: 100%;" alt=""></div>
                   </div>
                </div>
                <div class="col-lg-12">
                    <div class="p_w_title">
                        <h3>Špecialna ponuka na Svadby & Eventy</h3>
                    </div>
                    <div class="row product_item_inner">
                        <?php shop_special(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include '_inc/footer.php'; ?>