<?php $page_activ_novinky = 'active'; $page_title='Novinky'; include '_inc/head.php'; include '_inc/header.php'; ?>
<section class="banner_area">
    <div class="container">
        <div class="banner_text">
            <h3>Novinky</h3>
            <ul>
                <li><a href="index.php">Domov</a></li>
                <li><a href="novinky.php">Novinky</a></li>
            </ul>
        </div>
    </div>
</section>
<!--================End Main Header Area =================-->


    <section class="main_blog_area p_100">
        <div class="container">
            <div class="blog_area_inner">
                <div class="main_blog_column row">
                    <?php novinky_list(); ?>
                </div>
            </div>
        </div>
    </section>

<?php include '_inc/footer.php'; ?>