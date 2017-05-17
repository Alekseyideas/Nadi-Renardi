<?php
function product($x){
    echo '<div class="product" itemscope itemtype="http://schema.org/Product">
            <a href="full-product.php" class="product_image">
               <div class="label"><span>Акцiя</span></div>
                <img src="img/product.jpg" alt="">
            </a>
                <div class="sizes">
                    <div class="row center">
                        <div class="b-size" id="size-xs">xs</div>
                        <div class="b-size" id="size-s">s</div>
                        <div class="b-size" id="size-l">l</div>
                        <div class="b-size" id="size-m">m</div>
                    </div>
                </div>
            <div class="product_btns_name">

                <div class="product-title" itemprop="name">Сукня STARLING HAZE '.$x.'</div>
                <div class="btn_price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                    <div class="row space v-bottom m-column">
                        <div class="product-price" >
                            <div class="old_prise">11230<span>&thinsp;грн</span></div>
                            <b itemprop="price" content="8150">8150</b> <span itemprop="priceCurrency" content="UAH">&thinsp;грн</span>
                        </div>
                        <a href="full-product.php" class="btn_buy btn"><i class="fa fa-shopping-bag" aria-hidden="true"></i>Купити</a>
                    </div>
                </div>

            </div>
        </div>';
}