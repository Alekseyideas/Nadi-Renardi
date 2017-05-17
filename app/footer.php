<footer class="m-top">
    <div class="wrap">
        <div class="row space m-column">
            <a href="/" class="footer-logo"></a>
            <div class="site-map s-m-1 tablet">
                <div class="s-m-title">
                    <h5> Ми </h5>
                </div>
                <div class="s-m-links">
                    <a href="#">Про нас</a>
                    <a href="news.php">Блог Лисички</a>
                    <a href="news.php">Преса</a>
                    <a href="#">Де придбати</a>
                </div>
            </div>
            <div class="site-map s-m-2 tablet">
                <div class="s-m-title">
                    <h5>
                        Допомога
                    </h5>
                </div>
                <div class="s-m-links">
                    <a href="#">Оплата та доставка</a>
                    <a href="#">Обмін та повернення</a>
                    <a href="#">Розмірна сітка</a>
                </div>
            </div>
            <div class="site-map s-m-3">
                <div class="s-m-title">
                    <h5>
                        Контакти
                    </h5>
                </div>
                <div class="s-m-links">
                    <p>
                        м.Київ, <br>
                        вул. Сагайдачного, 12
                    </p>
                    <a href="tel:+380986408690">тел.: +38 098 640 86 90</a>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright m-top">
        © Nadi Renadi 2017
    </div>
</footer>

<div class="fixed-callback_soc_links tablet">
    <div class="row">
        <div class="f-callback">Зворотній зв'язок</div>
        <a href="#" class="soc_link"><i class="fa fa-instagram" aria-hidden="true"></i></a>
        <a href="#" class="soc_link"><i class="fa fa-vk" aria-hidden="true"></i></a>
        <a href="#" class="soc_link"><i class="fa fa-facebook" aria-hidden="true"></i></a>

    </div>
</div>














<!--Popups-->

<div id="callback-form" class="popup-block mfp-hide">
    <div class="popup-name p-pad">
        Зворотній зв'язок
    </div>
  <div class="content p-pad">
      <form action="" id="f-p-callback">
          <div class="form-group">
              <input type="text" required placeholder="Ваш номер телефону" class="in-main" name="tel" id="callback-tel">
          </div>
          <div class="form-group">
              <div class="row right">
                  <input type="submit" class="btn" value="Надіслати">
              </div>
          </div>
      </form>
  </div>
</div>

<div class="popup-block mfp-hide" id="alert-size">
    <div class="popup-name p-pad">
        Виберіть розмір
    </div>
    <div class="content p-pad">
        <div class="row">
            <div class="btn-zize-alert" data-btn="btn-xs">xs</div>
            <div class="btn-zize-alert" data-btn="btn-s">s</div>
            <div class="btn-zize-alert" data-btn="btn-l">l</div>
            <div class="btn-zize-alert" data-btn="btn-m">m</div>
        </div>
    </div>

</div>

<div class="popup-block mfp-hide" id="alert-add_cart">
    <div class="popup-name p-pad">
        ТОВАР ДОДАНИЙ В КОШИК
    </div>

    <div class="content p-pad">
        <div class="row">
            <a href="#" class="btn close-popup">продовжити покупки</a>
            <a href="cart.php" class="btn go-to" >Перейти в корзину</a>
        </div>
    </div>
</div>

<div class="popup-block mfp-hide" id="alert-one_click">
    <div class="popup-name p-pad">
        Купити в 1 клік
    </div>

    <div class="content p-pad">
        <div class="title-alert">
            Залиш свій номер телефона
        </div>
        <form action="" id="form-one_click">
            <div class="form-group">
                <input type="text" id="tel-one_click" class="in-main" required>
            </div>
            <div class="text-f">
                і наші феї зв'яжуться з тобою найближчим
                часом та узгодять всі деталі замовлення
            </div>
            <input type="submit" class="btn" value="Надiслати">
        </form>
    </div>
</div>

<div class="popup-block mfp-hide" id="alert-enter">
    <div class="popup-name p-pad">
        Увійти в Інтернет магазин  <span>Nadi Renardi</span>
    </div>
    <div class="content p-pad">
        <form action="" id="form-enter">
            <div class="row space m-col-rev">
                <div class="enter-shop">
                    <div class="form-group">
                        <input type="email" class="in-main" required placeholder="Email*">
                    </div>
                    <div class="form-group">
                        <input type="password" class="in-main" placeholder="Пароль*" required>
                    </div>
                    <a href="#" id="forgot-pas">Забули пароль ?</a>
                    <div class="form-group">
                        <div class="row v-center">
                            <input type="checkbox" id="remember">
                            <label for="remember" class="btn-rem">Запам`ятати</label>
                        </div>
                    </div>
                </div>
                <div class="enter_soc_register ">
                    <div class="form-group"> <a href="#" class="reg-sh">Вконтакте</a></div>

                   <div class="form-group"><a href="#" class="reg-sh">Facebook</a></div>
                </div>
            </div>
            <div class="btns-reg-enter">
                <div class="row space m-column">
                    <input type="submit" class="btn" value="УВійти">
                    <a href="room.php" class="btn cover-bnt" id="btn-reg">зареєструватися</a>
                </div>
            </div>

        </form>
    </div>


</div>

<div class="popup-block mfp-hide" id="alert-history_order">
    <div class="popup-name p-pad">
        Замовлення № <span id="order-number"></span>
    </div>
    <div class="content p-pad">
        <div class="row space m-column">
            <div class="product-in-cart">
                <div class="tablet">
                    <div class="row">

                        <div class="row v-center w-pr">
                            <div class="col-img n-on"></div>
                            <div class="col-name">Назва</div>
                        </div>

                        <div class="col-size">Розмiр</div>

                        <div class="col-price">Цiна</div>
                        <div class="col-price">Статус</div>
                    </div>
                </div>


                <div class="product-row">
                    <div class="row v-center m-column">
                        <a href="full-product.php" class="row v-center w-pr">
                            <span class="col-img" id="pr-img"></span>
                            <span class="col-name" id="pr-name"></span>
                        </a>
                        <div class="row m-column v-center">
                            <div class="col-size"><span class="o-mobile"><b>Розмiр:</b> </span><span class="size-pr-cart" id="pr-size"></span></div>

                            <div class="col-price"><span class="o-mobile"><b>Цiна:</b> </span><span id="pr-price"></span> <span>грн</span></div>
                            <div class="col-status"><span class="o-mobile"><b>Статус:</b> </span> <span class="" id="pr-status"></span></div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="popup-block mfp-hide" id="open-cart">
    <div class="popup-name p-pad">
        Кошик
    </div>
    <div class="content p-pad">
        <div class="row space m-column">
            <div class="product-in-cart">
                <div class="tablet">
                    <div class="row">

                        <div class="row v-center w-pr">
                            <div class="col-img n-on"></div>
                            <div class="col-name">Назва</div>
                        </div>

                        <div class="col-size">Розмiр</div>

                        <div class="col-price">Цiна</div>
                    </div>
                </div>


                <div class="product-row">
                    <div class="row v-center m-column">
                        <a href="" class="row v-center w-pr">
                            <span class="col-img"><img src="img/product.jpg" alt="s"></span>
                            <span class="col-name">Сукня STARLING HAZE</span>
                        </a>
                        <div class="row m-column v-center">
                            <div class="col-size"><span class="o-mobile"><b>Розмiр:</b> </span><span class="size-pr-cart">xs</span></div>

                            <div class="col-price"><span class="o-mobile"><b>Цiна:</b> </span>2750 <span>грн</span></div>
                        </div>
                        <div class="btn-remove">x</div>
                    </div>
                </div>



                <div class="product-row">
                    <div class="row v-center m-column">
                        <a href="" class="row v-center w-pr">
                            <span class="col-img"><img src="img/product.jpg" alt="s"></span>
                            <span class="col-name">Сукня STARLING HAZE</span>
                        </a>
                        <div class="row m-column v-center">
                            <div class="col-size"><span class="o-mobile"><b>Розмiр:</b> </span><span class="size-pr-cart">m</span></div>

                            <div class="col-price"><span class="o-mobile"><b>Цiна:</b> </span>2750 <span>грн</span></div>
                        </div>
                        <div class="btn-remove">x</div>
                    </div>
                </div>



                <div class="product-row">
                    <div class="row v-center m-column">
                        <a href="" class="row v-center w-pr">
                            <span class="col-img"><img src="img/product.jpg" alt="s"></span>
                            <span class="col-name">Сукня STARLING HAZE</span>
                        </a>
                        <div class="row m-column v-center">
                            <div class="col-size"><span class="o-mobile"><b>Розмiр:</b> </span><span class="size-pr-cart">s</span></div>

                            <div class="col-price"><span class="o-mobile"><b>Цiна:</b> </span>2750 <span>грн</span></div>
                        </div>
                        <div class="btn-remove">x</div>
                    </div>
                </div>


                <div class="full-cost">
                    <div class="row space v-center">
                        <span>Разом</span>
                        <span class="t-prise">10650 <span>грн</span></span>
                    </div>
                </div>

                <div class="btns-o-cart">
                    <div class="row v-center right m-column">
                        <a href="#" class="btn" id="clear">Очистити</a>
                        <a href="#" class="btn" id="one_cl">Купити в 1 клік</a>
                        <a href="cart.php" class="btn cover-bnt to-order">Оформити замовлення</a>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>

<script src="js/libs.min.js?<?php echo rand(0,100)?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.7.0/chosen.jquery.min.js"></script>
<script src="js/main.min.js?<?php echo rand(0,100)?>"></script>
</body>
</html>