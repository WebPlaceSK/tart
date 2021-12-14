<?php $page_activ_shop = 'active'; $page_title = 'Nákupný košík'; include '_inc/head.php'; include '_inc/header.php';
$sql_svadby = "SELECT * FROM text_page WHERE page='svadby_event'";
$result_svadby = $connection->query($sql_svadby);
$data = $result_svadby->fetch_assoc();
$nadpis_1 = $data['nadpis_1'];
$text = $data['text'];
?>
<section class="banner_area">
    <div class="container">
        <div class="banner_text">
            <h3>Nákupný košík</h3>
            <ul>
                <li><a href="index.php">Domov</a></li>
                <li><a href="cart.php">Nákupný košík</a></li>
            </ul>
        </div>
    </div>
</section>
<!--================End Main Header Area =================-->


    <!--================Cart Table Area =================-->
    <section class="cart_table_area p_100">
        <div class="container">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col" style="font-size: 17px; line-height: 40px;">Náhľad</th>
                        <th scope="col" style="font-size: 17px; line-height: 40px;">Názov produktu</th>
                        <th scope="col" style="font-size: 17px; line-height: 40px;">Cena</th>
                        <th scope="col" style="font-size: 17px; line-height: 40px;">Množstvo</th>
                        <th scope="col" style="font-size: 17px; line-height: 40px;">Cena spolu</th>
                        <th scope="col" style="line-height: 40px;"></th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php cart_list(); ?>
                    <tr>
                        <td>
                            <form class="form-inline">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Zľavový kód">
                                </div>
                                <button type="submit" class="btn">Použiť kód</button>
                            </form>
                        </td>
                        <td colspan="5"></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="row cart_total_inner">
                <div class="col-lg-7"></div>
                <div class="col-lg-5">
                   <?php cart_summ(); ?>
                </div>
            </div>
        </div>
    </section>
    <!--================End Cart Table Area =================-->

<?php include '_inc/footer.php'; ?>