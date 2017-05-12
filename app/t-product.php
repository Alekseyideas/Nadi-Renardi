<?php
function product($x){
    echo '<div class="product">
            <a href="#" class="product_image">
               <div class="label"><span>Акцiя</span></div>
                <img src="img/product.jpg" alt="">
            </a>
            <div class="product_btns_name">
                <div class="product-title">Сукня STARLING HAZE '.$x.'</div>
                <div class="btn_price">
                    <div class="row space v-bottom m-column">
                        <div class="product-price">
                            <div class="old_prise">1230<span>&thinsp;грн</span></div>
                            8150 <span>&thinsp;грн</span>
                        </div>
                        <a href="#" class="btn_buy btn"><i class="fa fa-shopping-bag" aria-hidden="true"></i>Купити</a>
                    </div>
                </div>

            </div>
        </div>';
}