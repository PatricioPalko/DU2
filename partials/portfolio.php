<?php

?>

<article>
    <header class="post-header">
        <div class="container">
            <h1 class="post-title">Portfólio našich prác</h1>
        </div>
    </header>
    <div class="post-content">
        <div class="container">

            <h2 class="text-center">Toto je veta, ktorá je tu napísaná, ktorá má hovoriť o tom, ako veľmi sme šikovní sme v našom portfóliovaní a tvorbe vecí, ktoré tvoríme a taktiež vyrábame.</h2>

            <ul class="menu controls">

                <?php

                $pages = glob('*.php');

                foreach ($pages as $file) {

                    $page = basename($file, '.php');
                    if ($page == 'index') $page = 'vsetko';

                    echo '<li data-from="left"><a href="'. $file .'">'. $page.'</a></li>';
                }

                ?>

            </ul>

        </div>

        <section class="gallery">
            <div class="gallery-set container">

                <?php
//                $pages = glob('*.php');

                foreach ($pages as $file) {

                    $page = basename($file, '.php');
                }

                if ( $page == $page_name ) {

                    $directory = "asset/img/$page";
                    $images = glob($directory .  "/*.jpg");

                    foreach($images as $image)
                    {
                        echo '<a href="'.$image.'"><img src="'.$image.'" height="192" width="383" alt=""></a>';
                    }
                }

                ?>





<!--                <a href="asset/img/video/image-1.jpg">-->
<!--                    <img src="asset/img/video/thumb-1.jpg" height="192" width="383" alt="training videos">-->
<!--                </a>-->
<!--                <a href="asset/img/video/image-2.jpg">-->
<!--                    <img src="asset/img/video/thumb-2.jpg" height="192" width="383" alt="training videos">-->
<!--                </a>-->
<!--                <a href="asset/img/video/image-3.jpg">-->
<!--                    <img src="asset/img/video/thumb-3.jpg" height="192" width="383" alt="training videos">-->
<!--                </a>-->
<!--                <a href="asset/img/video/image-4.jpg">-->
<!--                    <img src="asset/img/video/thumb-4.jpg" height="192" width="383" alt="training videos">-->
<!--                </a>-->
<!--                <a href="asset/img/video/image-5.jpg">-->
<!--                    <img src="asset/img/video/thumb-5.jpg" height="192" width="383" alt="training videos">-->
<!--                </a>-->
<!--                <a href="asset/img/video/image-6.jpg">-->
<!--                    <img src="asset/img/video/thumb-6.jpg" height="192" width="383" alt="training dragons">-->
<!--                </a>-->
            </div>
        </section>
    </div>
</article>
</main>