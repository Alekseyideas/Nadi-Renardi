<?php include 'header.php'?>
<section class="section-crambs">
    <div class="wrap">
        <div class="crumbs">
            <ul class="row v-center row-wrap">
                <li><a href="/">Головна</a></li>
                <li><a href="catalog.php">Оформлення замовлення</a></li>
            </ul>
        </div>
    </div>
</section>

<section class="section-order m-top">
    <div class="wrap">
        <div class="text-order">
            Твоє замовлення
        </div>

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



                <div class="coupon">
                    <div class="row v-center m-column">
                        <p>Маєш купон на знижку? <br>
                            Введи його номер</p>
                        <form action="" id="form-coupon">
                            <div class="row m-column">
                                <div class="form-group">
                                    <input type="text" class="in-main">
                                </div>
                                <input type="submit" class="btn" value="Використати">
                            </div>
                        </form>
                    </div>
                </div>



            </div>

            <div class="right-total-price">
                <div class="right-text-total">
                    Разом:
                </div>
                <div class="right-text-price">
                    10 650 <span>грн</span>
                </div>
            </div>

        </div>

        <div class="text-order m-top">
            Доставка
        </div>

        <form action="">
            <div class="toggles-cart-del">
                <div class="del-toggle">
                    <div class="row">
                        <div class="form-group">
                            <input type="radio" value="showroom" id="showroom" name="delivery" checked>
                            <div class="row v-center wr-label active">
                                <label class="in-check" for="showroom"><i class="fa fa-check" aria-hidden="true"></i></label>
                                <span class="name-radio">Шоурум у Києві</span>
                            </div>
                        </div>
                        <div class="del-price"> <span>+ 0 грн</span>
                        </div>
                    </div>

                    <div class="toggle-content">
                        <textarea name="" class="in-main" cols="30" rows="10" placeholder="Коментар"></textarea>
                    </div>
                </div>


                <div class="del-toggle">
                    <div class="row">
                        <div class="form-group">
                            <input type="radio" value="courier" id="courier" name="delivery">
                            <div class="row v-center wr-label">
                                <label class="in-check" for="courier"><i class="fa fa-check" aria-hidden="true"></i></label>
                                <span class="name-radio">Кур'єрська доставка-примірка по Києву </span>
                            </div>
                        </div>
                        <div class="del-price"> <span>+ 0 грн</span>
                        </div>
                    </div>

                    <div class="toggle-content">
                        <div class="form-group">
                            <input class="in-main" type="text" placeholder="Місто *">
                        </div>
                         <div class="form-group">
                            <input class="in-main" type="text" placeholder="Вулиця *">
                         </div>
                         <div class="form-group">
                            <input class="in-main" type="text" placeholder="Будинок *">
                         </div>
                         <div class="form-group">
                            <input class="in-main" type="text" placeholder="Під'їзд">
                         </div>
                         <div class="form-group">
                            <input class="in-main" type="text" placeholder="Поверх">
                         </div>
                         <div class="form-group">
                            <input class="in-main" type="text" placeholder="Квартира *">
                         </div>
                         <div class="form-group">
                            <textarea name="" class="in-main" cols="30" rows="10" placeholder="Коментар"></textarea>
                         </div>
                    </div>
                </div>


                <div class="del-toggle">
                    <div class="row">
                        <div class="form-group">
                            <input type="radio" value="nova-poshta" id="nova-poshta" name="delivery">
                            <div class="row v-center wr-label">
                                <label class="in-check" for="nova-poshta"><i class="fa fa-check" aria-hidden="true"></i></label>
                                <span class="name-radio">Нова Пошта </span>
                            </div>
                        </div>
                        <div class="del-price"> <span>+ 0 грн</span>
                        </div>
                    </div>

                    <div class="toggle-content">
                        <div class="form-group">
                            <input class="in-main" type="text" placeholder="Місто *">
                        </div>
                        <div class="form-group">
                            <input class="in-main" type="text" placeholder="Номер відділення Нової пошти *">
                        </div>
                        <div class="form-group">
                            <textarea name="" class="in-main" cols="30" rows="10" placeholder="Коментар"></textarea>
                        </div>
                    </div>
                </div>



            </div>



            <div class="text-order m-top">
                Оплата
            </div>

            <div class="payment">
                <div class="tog-payment">
                    <div class="form-group">
                        <input type="radio" value="cash" id="cash" name="delivery" checked>
                        <div class="row v-center wr-label2 active">
                            <label class="in-check" for="cash"><i class="fa fa-check" aria-hidden="true"></i></label>
                            <span class="name-radio">Готівкою при отриманні</span>
                        </div>
                    </div>
                </div>
                <div class="tog-payment">
                    <div class="form-group">
                        <input type="radio" value="after-np" id="after-np" name="delivery">
                        <div class="row v-center wr-label2">
                            <label class="in-check" for="after-np"><i class="fa fa-check" aria-hidden="true"></i></label>
                            <span class="name-radio">Післяплатою Нової пошти </span>
                        </div>
                    </div>
                </div>
                <div class="tog-payment">
                    <div class="form-group">
                        <input type="radio" value="visa" id="visa" name="delivery">
                        <div class="row v-center wr-label2">
                            <label class="in-check" for="visa"><i class="fa fa-check" aria-hidden="true"></i></label>
                            <span class="name-radio">Оплата карткою</span>
                        </div>
                    </div>
                </div>
            </div>



            <div class="bot-total-price">
                <div class="row v-center center">
                    <div class="right-text-total">
                        Разом:
                    </div>
                    <div class="right-text-price">
                        10 650 <span>грн</span>
                    </div>
                </div>
            </div>


            <input type="submit" class="btn cover-bnt" id="confirm" value="Підтверджую замовлення">

        </form>


    </div>
</section>
<?php include 'footer.php'?>
