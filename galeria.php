<?php $page_activ_galeria = 'active'; $page_title='Galéria'; include '_inc/head.php'; include '_inc/header.php'; ?>
    <section class="banner_area">
        <div class="container">
            <div class="banner_text">
                <h3>Galéria</h3>
                <ul>
                    <li><a href="index.php">Domov</a></li>
                    <li><a href="galeria.php">Galéria</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!--================End Main Header Area =================-->


    <section class="main_blog_area p_100">
        <div class="container">
            <div class="blog_area_inner">
                <div class="row">
                    <?php galeria(); ?>
                </div>
            </div>
        </div>
    </section>

<?php include '_inc/footer.php'; ?>