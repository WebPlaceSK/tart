<?php

include "_inc/db.php";

session_start();
/* add kosik  */
if(isset($_POST["add_to_cart"])) {
    if(isset($_SESSION["shopping_cart"])) {
        $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
        if(!in_array($_POST["id_produktu"], $item_array_id)) {
            $id_post = $_POST["id_produktu"];
            $count = count($_SESSION["shopping_cart"]);
            $item_array = array(
                'item_id'          =>     $_POST["id_produktu"], //id_var
                'item_cena'        =>     $_POST["cena_produktu"], // cena produktu
                'item_quantity'    =>     $_POST["qt"], // quota - ks
            );
            $_SESSION["shopping_cart"][$count] = $item_array;
            header('Location: ?pr='.$id_post.'&produkt=add');
        }
        else {
            $id_post = $_POST["id_produktu"];
            $count = count($_SESSION["shopping_cart"]);
            $item_array = array(
                'item_id'          =>     $_POST["id_produktu"], //id_var
                'item_cena'        =>     $_POST["cena_produktu"], // cena produktu
                'item_quantity'    =>     $_POST["qt"], // quota - ks
            );
            $_SESSION["shopping_cart"][$count] = $item_array;
            header('Location: ?pr='.$id_post.'&produkt=add');
        }
    }
    else {
        $id_post = $_POST["id_produktu"];
        $item_array = array(
            'item_id'          =>     $_POST["id_produktu"], //id_var
            'item_cena'        =>     $_POST["cena_produktu"], // cena produktu
            'item_quantity'    =>     $_POST["qt"], // quota - ks
        );
        $_SESSION["shopping_cart"][0] = $item_array;
        header('Location: ?pr='.$id_post.'&produkt=add');
    }
}

/* delete kosik */
if(isset($_GET["action"])) {
    if($_GET["action"] == "delete")
    {
        foreach($_SESSION["shopping_cart"] as $keys => $values)
        {
            if($values["item_id"] == $_GET["id"])
            {
                unset($_SESSION["shopping_cart"][$keys]);

            }
        }
    }
}


function shop_kategorie(){
    include "_inc/db.php";
    $kat = $_GET['kat'];
    $i0=0;
    $sql_pr = "SELECT * FROM produkty WHERE stav='1'";
    $result_pr = $connection->query($sql_pr);
    while ($data_pr = $result_pr->fetch_assoc()) {
        $i0++;
    }
    if ($kat == ''){
        echo '<li><a href="shop.php"><b style="color: #f195b2;">Všetky kategórie</b> <span style="color: darkgray; font-size: 12px;">('.$i0.')</span></a></li>';
    } else{
        echo '<li><a href="shop.php">Všetky kategórie <span style="color: darkgray; font-size: 12px;">('.$i0.')</span></a></li>';
    }

    $sql = "SELECT * FROM kategorie WHERE stav_kategorie='1'";
    $result = $connection->query($sql);
    while ($data = $result->fetch_assoc()) {
        $id_kategorie = $data['id_kategorie'];
        $name_kategorie = $data['name_kategorie'];
        $i=0;
        $sql_pr = "SELECT * FROM produkty WHERE id_kat='$id_kategorie' AND stav='1'";
        $result_pr = $connection->query($sql_pr);
        while ($data_pr = $result_pr->fetch_assoc()) {
           $i++;
        }

        if ($kat == $id_kategorie){
            echo '<li><a href="?kat='.$id_kategorie.'"><b style="color: #f195b2;">'.$name_kategorie.'</b> <span style="color: darkgray; font-size: 12px;">('.$i.')</span></a></li>';
        } else{
            echo '<li><a href="?kat='.$id_kategorie.'">'.$name_kategorie.' <span style="color: darkgray; font-size: 12px;">('.$i.')</span></a></li>';
        }
        $i=0;
    }
}

function shop(){
    include "_inc/db.php";
    $kat = $_GET['kat'];
    if ($kat == ''){
        $i=0;
        $sql = "SELECT * FROM produkty WHERE stav='1'";
        $result = $connection->query($sql);
        while ($data = $result->fetch_assoc()) {
            $id_pr = $data['id_pr'];
            $nazov_pr = $data['nazov_pr'];
            $img_1_title = $data['img_1_title'];
            $predajna_cena = $data['predajna_cena'];

            $predajna_cena_form  = number_format($predajna_cena, 2, ',', ' ');

            echo '<div class="col-lg-4 col-md-4 col-6">
        		<div class="cake_feature_item">
			<div class="cake_img">
                     <a href="product-details.php?pr='.$id_pr.'"><img src="adm/img_produkt/'.$img_1_title.'" style="width: 100%;" alt="'.$nazov_pr.'"></a>
				  </div>	  
				  <div class="cake_text">
                    <h4 style="font-size: 19px;">'.$predajna_cena_form.'€</h4>
                    <h3>'.$nazov_pr.'</h3>
                    <a class="pest_btn" href="product-details.php?pr='.$id_pr.'">Pridať do košíka</a>
				  </div>
				</div>
        	 </div>';
            $i++;
        }
        if ($i == 0){
            echo '<div class="col-lg-12 col-md-12 col-12"><center><p>Nie su priradené žiadne produkty.</p></center></div>';
        } else{

        }
    } else{
        $i=0;
        $sql = "SELECT * FROM produkty WHERE id_kat='$kat' AND stav='1'";
        $result = $connection->query($sql);
        while ($data = $result->fetch_assoc()) {
            $id_pr = $data['id_pr'];
            $nazov_pr = $data['nazov_pr'];
            $img_1_title = $data['img_1_title'];
            $predajna_cena = $data['predajna_cena'];

            $predajna_cena_form  = number_format($predajna_cena, 2, ',', ' ');

            echo '<div class="col-lg-4 col-md-4 col-6">
        		<div class="cake_feature_item">
				  <div class="cake_img">
                     <a href="product-details.php?pr='.$id_pr.'"><img src="adm/img_produkt/'.$img_1_title.'" style="width: 100%;" alt="'.$nazov_pr.'"></a>
				  </div>
				  <div class="cake_text">
                    <h4 style="font-size: 19px;">'.$predajna_cena_form.'€</h4>
                    <h3>'.$nazov_pr.'</h3>
                    <a class="pest_btn" href="product-details.php?pr='.$id_pr.'">Pridať do košíka</a>
				  </div>
				</div>
        	 </div>';
        $i++;
        }
        if ($i == 0){
            echo '<div class="col-lg-12 col-md-12 col-12"><center><p>Nie su priradené žiadne produkty.</p></center></div>';
        } else{

        }
    }
}

function shop_special(){
    include "_inc/db.php";
    $i=0;
    $sql = "SELECT * FROM produkty WHERE special='1' AND stav='1'";
    $result = $connection->query($sql);
    while ($data = $result->fetch_assoc()) {
        $id_pr = $data['id_pr'];
        $nazov_pr = $data['nazov_pr'];
        $img_1_title = $data['img_1_title'];
        $predajna_cena = $data['predajna_cena'];

        $predajna_cena_form  = number_format($predajna_cena, 2, ',', ' ');

        echo '<div class="col-lg-3 col-md-3 col-6">
        		<div class="cake_feature_item">
				  <div class="cake_img">
                   <a href="product-details.php?pr='.$id_pr.'"><img src="adm/img_produkt/'.$img_1_title.'" style="width: 100%;" alt="'.$nazov_pr.'"></a>
				  </div>
				  <div class="cake_text">
                    <h4 style="font-size: 19px;">'.$predajna_cena_form.'€</h4>
                    <h3>'.$nazov_pr.'</h3>
                    <a class="pest_btn" href="product-details.php?pr='.$id_pr.'">Pridať do košíka</a>
				  </div>
				</div>
        	 </div>';
        $i++;
    }
    if ($i == 0){
        echo '<div class="col-lg-12 col-md-12 col-12"><center><p>Nie su priradené žiadne produkty.</p></center></div>';
    } else{

    }

}


function cart_list(){
    include "_inc/db.php";
    $total = 0;
    $i=0;
    foreach ($_SESSION["shopping_cart"] as $keys => $values) {
        $id_produkt = $values["item_id"];
        $mnozstvo = $values["item_quantity"];
        $item_cena = $values["item_cena"];

        $sql = "SELECT * FROM produkty WHERE id_pr='$id_produkt'";
        $result = $connection->query($sql);
        while($data = $result->fetch_assoc()) {
            $id_pr = $data['id_pr'];
            $id_kat = $data['id_kat'];
            $img_1_title = $data['img_1_title'];
            $nazov_pr = $data['nazov_pr'];
            $darcek = $data['darcek'];
            //$predajna_cena = $data['predajna_cena'];

            $total_cena_pr = $total + ($mnozstvo * $item_cena);
            $total_cena_pr_form = number_format($total_cena_pr, 2, ',', ' ');

            $predajna_cena_form  = number_format($item_cena, 2, ',', ' ');

            echo '<tr>
                   <td><img src="adm/img_produkt/'.$img_1_title.'" style="width: 100px;" alt="'.$nazov_pr.'"></td>
                   <td><a href="product-details.php?pr='.$id_pr.'" style="color:#f195b2;">'.$nazov_pr.'</a></td>
                   <td>'.$predajna_cena_form.' €</td>
                   <td>'.$mnozstvo.' ks</td>
                   <td>'.$total_cena_pr_form.' €</td>
                   <td><a href="?action=delete&id='.$id_produkt.'" style="color: red; font-size: 13px;">X</a></td>
                 </tr>';
            $i++;
        }
    }

    if ($i == 0){
        echo '<tr data-aos="fade-up" data-aos-delay="200"><td colspan="6"><p style="text-align: center; color: #8f8f8f;">Váš košík je prázdny.</p></td></tr>';
    } else{

    }
}


function sezona_ponuka_index(){
    include "_inc/db.php";
    $i=0;
    $sql = "SELECT * FROM produkty WHERE aktiv_index='1' AND stav='1'";
    $result = $connection->query($sql);
    while ($data = $result->fetch_assoc()) {
        $id_pr = $data['id_pr'];
        $nazov_pr = $data['nazov_pr'];
        $img_1_title = $data['img_1_title'];
        $predajna_cena = $data['predajna_cena'];

        $predajna_cena_form  = number_format($predajna_cena, 2, ',', ' ');

        echo '<div class="item">
       			<div class="cake_feature_item">
       			   <a href="product-details.php?pr='.$id_pr.'"><img src="adm/img_produkt/'.$img_1_title.'" style="width: 100%;" alt="'.$nazov_pr.'"></a>
       				<div class="cake_text">
       				 <h4 style="font-size: 19px;">'.$predajna_cena_form.'€</h4>
       				 <h3>'.$nazov_pr.'</h3>
       				 <a class="pest_btn" href="product-details.php?pr='.$id_pr.'">Pridať do košíka</a>
       			  </div>
       			</div>
       		 </div>';
        $i++;
    }
    
}

function cart_number(){
    $mnozstvo_array_sum_total = '0';
    foreach ($_SESSION["shopping_cart"] as $keys => $values) {
        $mnozstvo = $values["item_quantity"];
        $mnozstvo_array = array($mnozstvo);
        $mnozstvo_array_sum = array_sum($mnozstvo_array);
        $mnozstvo_array_sum_total += $mnozstvo_array_sum;
    }
    echo $mnozstvo_array_sum_total;
}

function cart_summ(){
    $total = '0';
    foreach($_SESSION["shopping_cart"] as $keys => $values) {
        $total = $total + ($values["item_quantity"] * $values["item_cena"]);
    }

    $total_form  = number_format($total, 2, ',', ' ');
    
    echo '<div class="cart_total_text">
            <div class="cart_head">Prehľad košíka</div>
             <div class="total"><h4>Medzisúčet<span>'.$total_form.' €</span></h4></div>
             <div class="cart_footer"><a class="pest_btn" href="checkout.php" style="text-transform: uppercase; font-family: Arial;">Objednať</a></div>
          </div>';
}

function novinky_list(){
    include "_inc/db.php";

    $sql = "SELECT * FROM blog WHERE stav_blog='1'";
    $result = $connection->query($sql);
    while($data = $result->fetch_assoc()) {
        $id_blog = $data['id'];
        $name_blog = $data['name_blog'];
        $text_mini = $data['text_mini'];
        $date = $data['datee'];
        $img_blog = $data['img_blog'];

        $date_1=date_create($date);
        $date_1_echo=date_format($date_1,"d.m.Y");

        echo '<div class="col-lg-6">
                        <div class="blog_item">
                            <div class="blog_img">
                                <img class="img-fluid" src="adm/img_blog/'.$img_blog.'" alt="">
                            </div>
                            <div class="blog_text">
                                <div class="blog_time">
                                    <div class="float-left">
                                        <a href="#">'.$date_1_echo.'</a>
                                    </div>
                                </div>
                                <a href="#"><h4>'.$name_blog.'</h4></a>
                                <p>'.$text_mini.'</p>
                                <a class="pink_more" href="detail_novinky.php?novinka='.$id_blog.'">Zobraziť novinku</a>
                            </div>
                        </div>
                    </div>';
    }
}


function galeria(){
    include "_inc/db.php";
    $sql = "SELECT * FROM galeria WHERE stav='1' ORDER BY id DESC";
    $result = $connection->query($sql);
    while($data = $result->fetch_assoc()) {
        $img = $data['img'];
        echo '<div class="col-lg-4" style="margin-top: 25px;"><img src="adm/img_galeria/'.$img.'" style="width: 100%;" alt="tart.sk"></div>';
    }
}


function checkout_final(){
    include "_inc/db.pgp";

    $total = '0';
    foreach($_SESSION["shopping_cart"] as $keys => $values) {
        $total = $total + ($values["item_quantity"] * $values["item_cena"]);
    }

    $total_form  = number_format($total, 2, ',', ' ');

    echo '<div class="price_single_cost">
			<h4>Medzisúšet<span>'.$total_form.' €</span></h4>
			<h3><b>Cena celkom</b><span>'.$total_form.' €</span></h3>
		 </div>';
}

function blog_index_new(){
    include "_inc/db.php";
    $sql = "SELECT * FROM blog WHERE stav_blog='1' LIMIT 3";
    $result = $connection->query($sql);
    while($data = $result->fetch_assoc()) {
        $id = $data['id'];
        $name_blog = $data['name_blog'];
        $text_mini = $data['text_mini'];
        $date = $data['datee'];
        $img_blog = $data['img_blog'];

        $date_1=date_create($date);
        $date_1_echo=date_format($date_1,"d.m.Y");

    echo '<div class="col-lg-4 col-md-6">
       		<div class="l_news_item">
       		   <div class="l_news_img"><img class="img-fluid" src="adm/img_blog/'.$img_blog.'" alt="'.$name_blog.'"></div>
       			 <div class="l_news_text">
					<a href="#"><h5>'.$date_1_echo.'</h5></a>
					<a href="detail_novinky.php?novinka='.$id.'"><h4>'.$name_blog.'</h4></a>
       			    <p>'.$text_mini.'</p>
       		    </div>
       		</div>
       	 </div>';
    }
}

function checkout_1(){
    include "_inc/db.php";
    $total = '0';
    foreach($_SESSION["shopping_cart"] as $keys => $values) {
        $total = $total + ($values["item_quantity"] * $values["item_cena"]);
    }
    if ($total == 0){

    } else{
        echo '<button type="submit" value="submit" class="btn pest_btn" style="text-transform: uppercase; font-family: Arial;">Dokončiť objednávku</button>';
    }
}

?>