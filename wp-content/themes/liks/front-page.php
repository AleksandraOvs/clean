<?php get_header() ?>

<?php 
    get_template_part('template-parts/01hero');

    get_template_part('template-parts/02numbers');

    get_template_part('template-parts/03services');

//    if ($forms = carbon_get_post_meta(get_the_ID(), 'crb_forms')){
//     foreach ($forms as $form){
//         echo '<div class="contact-form-container">';
//         if ($form_head = $form['crb_form_head']) {
//             echo '<h3 class="formheading">' . $form_head . '</h3>';
//         }

//         if ($form_desc = $form['crb_form_desc']) {
//             echo '<h3 class="formheading">' . $form_desc . '</h3>';
//         }

//         $form_shortcode = $form['crb_form_shortcode'];
//         echo do_shortcode(" $form_shortcode ") . '</div>';
//     }
//    }

    get_template_part('template-parts/04form-section');

    get_template_part('template-parts/05works-slider');

    get_template_part('template-parts/06about-us');

    get_template_part('template-parts/07our-clients');

    get_template_part('template-parts/08feedback');

    get_template_part('template-parts/09form-section2');

    get_template_part('template-parts/10blog');

    get_template_part('template-parts/11faq');

    get_template_part('template-parts/12form-section3');

    ?>
    <section class="map-section">
        <div class="fixed-container">
            <h2 class="title">Наш адрес</h2>
        <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Adb254151827cc153538120d7b5730d34cd58f00bc8051181f9d5e4eb1ab60a25&amp;source=constructor" width="100%" height="530" frameborder="0"></iframe>
        </div>
    </section>
    

<?php get_footer() ?>