<?php get_header(); ?>

    <div class="bubbless-bg">
        <div id="bg0"></div>
        <div id="bg1" data-0="background-position:0px 0px;" data-end="background-position:0px -1000px;"></div>
        <div id="bg2" data-0="background-position:0px 0px;" data-end="background-position:0px -1000px;"></div>
        <div id="bg3" data-0="background-position:0px 0px;" data-end="background-position:0px -1000px;"></div>
        <div id="bg4" data-0="background-position:0px 0px;" data-end="background-position:0px -1000px;"></div>
        <div id="bg5" data-0="background-position:0px 0px;" data-end="background-position:0px -1000px;"></div>
        <div id="bg6" data-0="background-position:0px 0px;" data-end="background-position:0px -1000px;"></div>
        <div id="bg7" data-0="background-position:0px 0px;" data-end="background-position:0px -1000px;"></div>
        <div id="bg8" data-0="background-position:0px 0px;" data-end="background-position:0px -1000px;"></div>
        <div id="bg9" data-0="background-position:0px 0px;" data-end="background-position:0px -1000px;"></div>
        <div id="bg10" data-0="background-position:0px 0px;" data-end="background-position:0px -1000px;"></div>
    </div>

    <div class="contacts">
        <div class="container">
            <div class="contacts__wrap">
                <span>Контакты:</span>
                <span><?= carbon_get_theme_option("contacts_mail"); ?></span>
                <span><?= carbon_get_theme_option("contacts_tel"); ?></span>
            </div>
        </div>
    </div>

    <section class="b-txt" id="second-screen">
        <div class="container">
            <h2><?= carbon_get_theme_option("second-screen_title"); ?></h2>
            <p><?= carbon_get_theme_option("second-screen_txt1"); ?></p>
            <p><?= carbon_get_theme_option("second-screen_txt2"); ?></p>
            <p><?= carbon_get_theme_option("second-screen_txt3"); ?></p>
        </div>
    </section>

    <section class="video-section">
        <div class="container">
            <div class="video-section__wrap">
                <div class="overlay"></div>
                <iframe width="100%" height="100%" src="<?= carbon_get_theme_option("video1_src"); ?>?autoplay=1"
                        frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen loop></iframe>
            </div>
            <p><?= carbon_get_theme_option("video1_txt"); ?></p>
        </div>
    </section>

    <!--пЕРВЫЙ БЛОК ВОПРОСОВ-->
<?php foreach (carbon_get_theme_option('questions1_items') as $item): ?>
    <section class="txt-line">
        <div class="container">
            <div class="txt-line--blue">
                <img src="<?= $item["image"]; ?>" alt="">
                <p><?= $item["title"]; ?></p>
            </div>
            <p><?= $item["text"]; ?></p>
        </div>
    </section>
<?php endforeach; ?>

    <!--   -->

    <section class="video-section">
        <div class="container">
            <!--<video src=""></video>-->
            <div class="video-section__wrap">
                <div class="overlay"></div>
                <iframe width="100%" height="100%" src="<?= carbon_get_theme_option("video2_src"); ?>?autoplay=1"
                        frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen loop></iframe>
            </div>
            <p><?= carbon_get_theme_option("video2_txt"); ?></p>
        </div>
    </section>

    <!--ВТОРОЙ БЛОК ВОПРОСОВ-->
<?php foreach (carbon_get_theme_option('questions2_items') as $item): ?>
    <section class="txt-line">
        <div class="container">
            <div class="txt-line--blue">
                <img src="<?= $item["image"]; ?>" alt="">
                <p><?= $item["title"]; ?></p>
            </div>
            <p><?= $item["text"]; ?></p>
        </div>
    </section>
<?php endforeach; ?>

    <section class="video-section">
        <div class="container">
            <!--<video src=""></video>-->
            <div class="video-section__wrap">
                <div class="overlay"></div>
                <iframe width="100%" height="100%" src="<?= carbon_get_theme_option("video3_src"); ?>?autoplay=1"
                        frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen loop></iframe>
            </div>
            <p><?= carbon_get_theme_option("video3_txt"); ?></p>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="promo-txt"><?= carbon_get_theme_option("promo_txt"); ?></div>
        </div>
    </section>

    <section class="ftr-contacts">
        <div class="container">
            <h2>Контактная информация</h2>
            <div class="flex-wrap">
                <div><?= carbon_get_theme_option("contacts_mail"); ?></div>
                <div><?= carbon_get_theme_option("contacts_tel"); ?></div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>