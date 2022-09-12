<?php get_header(); ?>

<body id="#main__body__page__error">
    <main>
        <section class="page__error">
            <div class="page__error__background--dark">
                <div class="page__error__background__image--wrapper">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/404/bakterie 6.svg" />
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/404/404.png" /></div>
            </div>
            <div class="page__error__background--light">
                <div class="page__error--title">
                    <p> Oops… the page you requested is not exists</p>
                </div>
                <div class="page__error--button">
                    <a href="<?php echo esc_url(home_url('/')); ?>" target="_self"><button class="contact__support__button--dark ">Home Page</button></a>
                </div>
            </div>
        </section>
    </main>

</body>

</html>