<?php include 'header.php'?>
<section class="section-crambs">
    <div class="wrap">
        <div class="crumbs">
            <ul class="row" itemscope itemtype="https://schema.org/BreadcrumbList">
                <li><a href="/" itemprop="url"><span itemprop="name">Головна</span></a></li>
                <li><a href="catalog.php" itemprop="url"><span itemprop="name">Кабiнет</span></a></li>
            </ul>
        </div>
    </div>
</section>


<section class="section-room m-top">
    <div class="wrap">
        <div class="row m-column">
            <div class="nav-room">
                <h4>Кабiнет</h4>
                <ul>
                    <li class="" data-tab="os-danni">Особисті данні</li>
                    <li class="" data-tab="wish-list">Список бажань</li>
                    <li class="active" data-tab="cart-room">Кошик</li>
                    <li class="" data-tab="history">Історія заказів</li>
                </ul>
            </div>




            <div class="cont-room">
                <div class="tab-cont" id="os-danni">
                    <div class="title-cont-room">
                        Особисті данні
                    </div>
                    <form action="#" class="in-cont-room" id="form-person-room">
                        <div class="form-group row-cont-room">
                            <div class="row space v-center">
                                <div class="os-title-row">
                                    <b>Iм`я:</b>
                                </div>
                                <div class="os-text">
                                    <span>Андрiй</span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row-cont-room">
                            <div class="row space v-center ">
                                <div class="os-title-row">
                                    <b>Прiзвище:</b>
                                </div>
                                <div class="os-text">
                                    <span>Олiйник</span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row-cont-room">
                            <div class="row space v-center">
                                <div class="os-title-row">
                                    <b>Електрона пошта:</b>
                                </div>
                                <div class="os-text">
                                    <span>example@gmail.com</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group row-cont-room">
                            <div class="row space v-center m-column">
                                <div class="os-title-row">
                                    <b>Телефон:</b>
                                </div>
                                <div class="os-text m-os-text">
                                    <div class="form-group">
                                        <input type="text" name="tel" class="in-main" id="per-tel">
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="form-group row-cont-room">
                            <div class="row space v-top m-column">
                                <div class="os-title-row">

                                    <b>Дата народження:</b>
                                </div>
                                <div class="os-text m-os-text">
                                    <div class="form-group choose-month">
                                        <select name="" id="">
                                            <option value="" disabled selected>Мiсяць</option>
                                            <option value="1" >Січень</option>
                                            <option value="2" >Лютий</option>
                                            <option value="3" >Березень</option>
                                            <option value="4" >Квітень</option>
                                            <option value="5" >Травень</option>
                                            <option value="6" >Червень</option>
                                            <option value="7" >Липень</option>
                                            <option value="8" >Серпень</option>
                                            <option value="9" >Вересень</option>
                                            <option value="10" >Жовтень</option>
                                            <option value="11" >Листопад</option>
                                            <option value="12" >Грудень</option>

                                        </select>
                                    </div>
                                    <div class="row space v-center pl-choose">
                                        <div class="form-group">
                                            <select name="" id="">
                                                <option value="" disabled selected>День</option>
                                                <?php
                                                $i=0;
                                                while ($i<31){
                                                    $i++;
                                                    echo '<option value='.$i.'>'.$i.'</option>';
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <div class="row right">
                                                <select name="" id="">
                                                    <option value="" disabled selected>Рiк</option>
                                                    <?php
                                                    $i=1940;
                                                    while ($i<2009){
                                                        $i++;
                                                        echo '<option value='.$i.'>'.$i.'</option>';
                                                    }
                                                    ?>
                                                </select>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="form-group row-cont-room">
                            <div class="row space v-top m-column">
                                <div class="os-title-row">
                                    <b>Змiнити пароль:</b>
                                </div>
                                <div class="os-text m-os-text">
                                    <div class="form-group pasw">
                                        <input type="password" class="in-main" placeholder="Старий пароль">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="in-main" placeholder="Новий пароль">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="in-main" placeholder="Новий пароль ще раз">
                                    </div>
                                    <div class="form-group">
                                        <br>
                                       <div class="row space m-column">
                                           <a href="#" class="btn" id="annulment"> Вiдмiна</a>
                                           <a href="#" class="btn"> Зберегти</a>
                                       </div>
                                    </div>
                                    <div class="form-group">
                                        <br>
                                        <div class="row right m-column">
                                            <a href="#" class="btn cover-bnt"> Вихiд</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>

                <div  class="tab-cont" id="wish-list">
                    <div class="title-cont-room">
                        Список бажань
                    </div>

                    <div class="row space m-column">
                        <div class="product-in-cart">
                            <div class="tablet">
                                <div class="row">

                                    <div class="row v-center w-pr">
                                        <div class="col-img n-on"></div>
                                        <div class="col-name">Назва</div>
                                    </div>
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

                                        <div class="col-price"><span class="o-mobile"><b>Цiна:</b> </span>2750 <span>грн</span></div>
                                    </div>
                                    <div class="btn-remove">x</div>
                                </div>
                            </div>
                        </div>


                    </div>


                </div>

                <div class="tab-cont" id="cart-room">
                    <div class="title-cont-room">
                     Кошик
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

                                <div class="row right">
                                    <a href="cart.php" class="btn cover-bnt to-order"> Оформити замовлення</a>
                                </div>




                        </div>

                    </div>

                </div>

                <div  class="tab-cont" id="history">
                    <div class="title-cont-room">
                        Історія закказів
                    </div>
                    <div class="history-row-titles">
                        <div class="row space">
                            <div class="name-col-h">
                                <span>Замовлення №.</span>
                            </div>
                            <div class="name-col-h">
                                <span> Дата</span>
                            </div>
                            <div class="name-col-h">
                                <span> Сумма</span>
                            </div>
                            <div class="name-col-h">
                                <span> Статус</span>
                            </div>
                        </div>
                    </div>


                    <div class="status-product-row">
                        <div class="row space">
                            <div class="name-col-h">
                                <a href="#" class="link-pr" data-order="2689"  data-img="img/product.jpg" data-size="xs" data-price="500" data-status="В обробці" data-name="Сукня STARLING HAZE 1">№2689</a>
                            </div>
                            <div class="name-col-h">
                                <span>17.04.2017</span>
                            </div>
                            <div class="name-col-h">
                                <span>500 грн</span>
                            </div>
                            <div class="name-col-h">
                                <span class="in_processing">В обробці</span>
                            </div>
                        </div>
                    </div>

                    <div class="status-product-row">
                        <div class="row space">
                            <div class="name-col-h">
                                <a href="#" class="link-pr" data-order="2688"  data-img="img/product2.jpg" data-size="s" data-price="2500" data-status="Виконане" data-name="Сукня STARLING HAZE 2">№2688</a>
                            </div>
                            <div class="name-col-h">
                                <span>17.04.2017</span>
                            </div>
                            <div class="name-col-h">
                                <span>2500 грн</span>
                            </div>
                            <div class="name-col-h">
                                <span class="ready">Виконане</span>
                            </div>
                        </div>
                    </div>

                    <div class="status-product-row">
                        <div class="row space">
                            <div class="name-col-h">
                                <a href="#" class="link-pr" data-order="2687"  data-img="img/product2.jpg" data-size="m" data-price="12500" data-status="Скасоване" data-name="Сукня STARLING HAZE 3">№2687</a>
                            </div>
                            <div class="name-col-h">
                                <span>17.04.2017</span>
                            </div>
                            <div class="name-col-h">
                                <span>12500 грн</span>
                            </div>
                            <div class="name-col-h">
                                <span class="сanceled">Скасоване</span>
                            </div>
                        </div>
                    </div>

                    <div class="status-product-row">
                        <div class="row space">
                            <div class="name-col-h">
                                <a href="#" class="link-pr" data-order="2686"  data-img="img/product.jpg" data-size="s" data-price="50" data-status="Виконане" data-name="Сукня STARLING HAZE 4">№2686</a>
                            </div>
                            <div class="name-col-h">
                                <span>17.04.2017</span>
                            </div>
                            <div class="name-col-h">
                                <span>50 грн</span>
                            </div>
                            <div class="name-col-h">
                                <span class="ready">Виконане</span>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

</section>
<?php include 'footer.php'?>