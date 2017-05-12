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
            <a href="#" class="news blocks-1">
                <div class="news-image">
                        <img src="img/news1.jpg" alt="news">
                </div>
                <div class="news-text row v-center">
                    НАЙГАРЯЧІШІ ПРОПОЗИЦІЇ ВІД NADI RENARDI
                </div>
            </a>
            <a href="#" class="news blocks-2">
                <div class="news-image">
                    <img src="img/news2.jpg" alt="news">
                </div>
                <div class="news-text row v-center">
                    СТИЛИСТ НАДЕЖДА ПАВЛЕНКО: ОБУВЬ
                    В ТОН И ДРУГИЕ ТАБУ
                </div>
            </a>
            <a href="#" class="news blocks-2">
                <div class="news-image">
                    <img src="img/news5.jpg" alt="news">
                </div>
                <div class="news-text row v-center">
                    КАК УДЕРЖАТЬСЯ ОТ ПОКУПКИ БАРХАТНОГО
                    МАНТО? СОВЕТЫ ОТ НАДЕЖДЫ ЛИВИНСКОЙ
                </div>
            </a>
            <a href="#" class="news blocks-3">
                <div class="news-image">
                    <img src="img/news6.jpg" alt="news">
                </div>
                <div class="news-text row v-center">
                    МОДНОЙ ХОЗЯЙКЕ НА ЗАМЕТКУ!
                </div>
            </a>
            <a href="#" class="news blocks-3">
                <div class="news-image">
                    <img src="img/news3.jpg" alt="news">
                </div>
                <div class="news-text row v-center">
                    ПОГОВОРИМ О ... СТИРКЕ!
                </div>
            </a>
            <a href="#" class="news blocks-3">
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

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

<?php include 'footer.php'?>