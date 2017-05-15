<?php include 'header.php'?>


<div class="slider_desktop owl-carousel">
    <div class="content">
        <div class="desktop">
            <img src="img/slide1.jpg" alt="slide">
        </div>
        <div class="mobile">
            <img src="img/m-slide1.jpg" alt="slide">
        </div>
        <div class="wrapper">
            <div class="wrap">
                <div class="text-blocks">
                    <div class="title">LITTLE BLACK FOX</div>
                    <div class="sub-title">Весна з Nadi Renardi</div>
                    <a href="#" class="bnt_go-to">Дивитися</a>
                </div>

            </div>
        </div>
    </div>
    <div class="content">
        <div class="desktop">
            <img src="img/slide1.jpg" alt="slide">
        </div>
        <div class="mobile">
            <img src="img/m-slide1.jpg" alt="slide">
        </div>
        <div class="wrapper">
            <div class="wrap">
                <div class="text-blocks">
                    <div class="title">LITTLE BLACK FOX</div>
                    <div class="sub-title">Весна з Nadi Renardi</div>
                    <a href="#" class="bnt_go-to">Дивитися</a>
                </div>

            </div>
        </div>
    </div>
</div>


<section class="hits m-top">
    <div class="section_name"><h3>Наші хіти</h3></div>

    <div class="wrapper-products owl-carousel">
        <?php
            $i=0;
        while ($i<6){
                $i++;
                product($i);
        }
        ?>
    </div>


</section>


<section class="section-news m-top">
    <div class="wrap">
        <div class="row row-wrap space top">
            <a href="full-news.php" class="news blocks-1">
                <div class="news-image">
                        <img src="img/news1.jpg" alt="news">
                </div>
                <div class="news-text row v-center">
                    НАЙГАРЯЧІШІ ПРОПОЗИЦІЇ ВІД NADI RENARDI
                </div>
            </a>
            <a href="full-news.php" class="news blocks-2">
                <div class="news-image">
                    <img src="img/news2.jpg" alt="news">
                </div>
                <div class="news-text row v-center">
                    СТИЛИСТ НАДЕЖДА ПАВЛЕНКО: ОБУВЬ
                    В ТОН И ДРУГИЕ ТАБУ
                </div>
            </a>
            <a href="full-news.php" class="news blocks-2">
                <div class="news-image">
                    <img src="img/news5.jpg" alt="news">
                </div>
                <div class="news-text row v-center">
                    КАК УДЕРЖАТЬСЯ ОТ ПОКУПКИ БАРХАТНОГО
                    МАНТО? СОВЕТЫ ОТ НАДЕЖДЫ ЛИВИНСКОЙ
                </div>
            </a>
            <a href="full-news.php" class="news blocks-3">
                <div class="news-image">
                    <img src="img/news6.jpg" alt="news">
                </div>
                <div class="news-text row v-center">
                    МОДНОЙ ХОЗЯЙКЕ НА ЗАМЕТКУ!
                </div>
            </a>
            <a href="full-news.php" class="news blocks-3">
                <div class="news-image">
                    <img src="img/news3.jpg" alt="news">
                </div>
                <div class="news-text row v-center">
                    ПОГОВОРИМ О ... СТИРКЕ!
                </div>
            </a>
            <a href="full-news.php" class="news blocks-3">
                <div class="news-image">
                    <img src="img/news4.jpg" alt="news">
                </div>
                <div class="news-text row v-center">
                    ПРОДОЛЖАЕМ ЗНАКОМСТВО С
                    «ДЕ ЛА МАРК»
                </div>
            </a>

        </div>
    </div>
</section>
<section class="section-subscription">
    <div class="wrap">
        <div class="row space v-center m-column">
            <div class="text-subscription">
                <h1>Підпишись на наші новини та отримай 150 грн </h1>
            </div>
            <div class="wrapper-form-subscription">
                <form action="" id="form-subscription">
                    <div class="row v-center">
                        <div class="form-group">
                            <input id="email-subscription" class="in-subscription" placeholder="Твоя електронна адреса" name="email" required>
                        </div>
                        <button type="submit" class="btn-subscription">Отримати</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


<section class="section-show_room m-top">
    <div class="section_name"><h3>ШОУРУМ</h3></div>
    <div class="section_description_name">
        <p>Київ, Сагайдачного, 12: в арку, ліворуч, 2-й поверх <br> С 12 до 20 щодня</p>
    </div>
<div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2539.9312836045187!2d30.520441915731727!3d50.4610042794769!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4ce46ce9f6b5b%3A0x7338c34a6bdf1956!2z0LLRg9C70LjRhtGPINCf0LXRgtGA0LAg0KHQsNCz0LDQudC00LDRh9C90L7Qs9C-LCAxMiwg0JrQuNGX0LIsIDA0MDcw!5e0!3m2!1sru!2sua!4v1494670861235" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen>
    </iframe>
    <div class="disable"></div>
</div>
</section>
<?php include 'footer.php'?>