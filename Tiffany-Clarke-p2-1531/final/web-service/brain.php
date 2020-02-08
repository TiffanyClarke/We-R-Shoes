<?php

function getProducts($productType = NULL) {
    global $pdo;
    
    if(!isset($productType)) {
        //get all products
        $q = "SELECT * FROM products";
        $prepared = $pdo->prepare($q);
        
    } else {
        //get category of products
        $q = "SELECT *
        FROM `products`
        WHERE `prod_code` = ?";
        $prepared = $pdo->prepare($q);
        $prepared->bindParam(1, $productType);
    }
    
    $success = $prepared->execute();
    if($success) {
        $data = $prepared->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    } else{
        echo 'try again';
        
    }
    
}

function printHTML() {
    $markUp = "";
    
    if(isset($_GET["prod-id"])) {
        //category
        $collectedShoes = getProducts($_GET["prod-id"]);
    } else {
        //all
        $collectedShoes = getProducts();
    }
    
    foreach($collectedShoes as $value){
        $markUp .= "<div class='col col-12 col-sm-12 col-md-6 col-lg-3 product'>
                      <figure>
                        <img src='{$value['prod_image']}' alt='{$value['prod_name']}' >
                        <figcaption>
                            <ul>
                                <li>{$value['prod_name']}</li>
                                <li>{$value['prod_price']}</li>
                            </ul>
                        </figcaption>
                      </figure>
                    </div>";
    }
    
    echo $markUp;
    
}

?>