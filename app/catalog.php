<?php include 'header.php'?>

<section class="section-crambs">
    <div class="wrap">
        <div class="crumbs">
            <ul class="row" itemscope itemtype="https://schema.org/BreadcrumbList">
                <li><a href="/" itemprop="url"><span itemprop="name">Головна</span></a></li>
                <li><a href="catalog.php" itemprop="url"><span itemprop="name">Сукнi</span></a></li>
            </ul>
        </div>
    </div>
</section>
<section class="section-filter">
    <div class="wrap">
        <div class="filter">
            <div class="row space v-center">
                <div class="base-names">
                    <div class="row">
                        <a href="" class="base-name active" >Наряднi</a>
                        <a href="" class="base-name">Базовi</a>
                    </div>
                </div>
                <div class="size ">
                    <a href="#" class="row v-center btn-size down">
                        <span class="t-size">Розмір</span>
                        <span class="i-size"><i class="fa fa-long-arrow-down" aria-hidden="true"></i></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="m-top sec-cat-products main-products">
    <div class="wrap">
        <div class="row row-wrap space">
            <?php
            $i = 0;
            while ($i<12){
                $i++;
                product($i);
            }
            ?>
        </div>

        <div class="pagination desktop m-top">
            <div class="row center v-center">
                <div class="all-pages st-page">
                    Усього: <span>63</span>
                </div>
                <a href="#" class="prev st-page"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
                <a href="#" class="st-page">1</a>
                <a href="#" class="st-page">2</a>
                <a href="#" class="st-page active">3</a>
                <a href="#" class="st-page">4</a>
                <a href="#" class="st-page">5</a>
                <a href="#" class="st-page">6</a>
                <a href="#" class="next st-page"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            </div>
        </div>
        <div class="load-more mobile-tablet">
            <a href="#" class="btn-load">
                <i class="fa fa-refresh" aria-hidden="true"></i>
            </a>
        </div>
    </div>

</section>
<?php include 'footer.php'?>