<?php
function product($x){
    echo '<div class="product">
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

                <div class="product-title">Сукня STARLING HAZE '.$x.'</div>
                <div class="btn_price">
                    <div class="row space v-bottom m-column">
                        <div class="product-price">
                            <div class="old_prise">11230<span>&thinsp;грн</span></div>
                            8150 <span>&thinsp;грн</span>
                        </div>
                        <a href="#" class="btn_buy btn"><i class="fa fa-shopping-bag" aria-hidden="true"></i>Купити</a>
                    </div>
                </div>

            </div>
        </div>';
}