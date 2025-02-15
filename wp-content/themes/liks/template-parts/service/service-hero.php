 <?php
    if ($service_slides = carbon_get_post_meta(get_the_ID(), 'crb_service_slider_items')) {
    ?>

     <section class="service-section">
         <div class="fixed-container">
             <div class="service__inner">

                 <div class="swiper service-slider">
                     <div class="swiper-wrapper">
                         <?php
                            foreach ($service_slides as $s_slide) {
                            ?>
                             <div class="swiper-slide service-slider__slide">
                                 <?php
                                    if ($slide_img = $s_slide['crb_service-slide_img']) {
                                        $slide_img_url = wp_get_attachment_image_url($slide_img, 'full');
                                        echo '<img class="service-slide__img" src="' . $slide_img_url . '" alt="alt">';
                                    } else {
                                        echo '<img class="service-slide__img" src="' . get_stylesheet_directory_uri() . '/images/svg/placeholder.svg" alt="alt" />';
                                    }

                                    $slide_link = $slide['crb_slide_link'];
                                    ?>

                                 <?php
                                    if ($slide_head = $s_slide['crb_service-slide_head']) {
                                    ?>
                                     <a href="<?php echo $slide_link ?>" class="service-slide__content">
                                         <div class="service-slide__top">
                                             <?php echo $slide_head ?>
                                         </div>

                                         <div class="service-slide__bottom">
                                             <?php echo $s_slide['crb_service-slide_desc'] ?>
                                         </div>
                                     </a>
                                 <?php
                                    }
                                    ?>

                                 <?php
                                    // if ($slide_url = $slide['crb_slide_link']){
                                    //     echo '<a class="slide" href="'.$slide_url.'"></a>';
                                    // }
                                    ?>

                             </div>
                         <?php
                            }
                            ?>
                     </div>

                     <div class="slider-controls">
                         <div class="service-slider__button-prev">
                             <svg width="27" height="26" viewBox="0 0 27 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M0.373714 11.9639C0.315402 12.0226 0.262814 12.0866 0.216655 12.1552L0.159938 12.2596C0.109495 12.338 0.0739994 12.425 0.0552325 12.5162L0.024692 12.6249C-0.00823288 12.7914 -0.00823289 12.9628 0.024692 13.1293L0.0595964 13.2424L0.0988611 13.3728C0.119636 13.4176 0.142943 13.4612 0.168666 13.5033L0.221019 13.5946C0.269475 13.6666 0.325012 13.7336 0.386806 13.7946L12.114 25.4966C12.2279 25.6426 12.3717 25.7627 12.5358 25.8491C12.6999 25.9354 12.8805 25.986 13.0657 25.9975C13.251 26.009 13.4365 25.981 13.61 25.9156C13.7836 25.8502 13.9412 25.7487 14.0724 25.6179C14.2036 25.4871 14.3054 25.33 14.3711 25.157C14.4367 24.984 14.4648 24.7991 14.4532 24.6145C14.4417 24.4299 14.391 24.2499 14.3043 24.0863C14.2177 23.9228 14.0972 23.7794 13.9507 23.6659L4.45729 14.1904L25.6912 14.1904C26.0383 14.1904 26.3712 14.0529 26.6166 13.8083C26.8621 13.5636 27 13.2318 27 12.8858C27 12.5398 26.8621 12.208 26.6167 11.9633C26.3712 11.7187 26.0383 11.5812 25.6912 11.5812L4.45729 11.5812L13.9507 2.10573C14.1467 1.85475 14.2439 1.54106 14.2241 1.22366C14.2043 0.906247 14.0689 0.606975 13.8433 0.3821C13.6176 0.157226 13.3174 0.0222368 12.9989 0.00251248C12.6805 -0.0172118 12.3658 0.0796866 12.114 0.27499L0.373714 11.9639Z" fill="#202020" />
                             </svg>
                         </div>
                         <div class="service-slider__button-next">

                             <svg width="27" height="26" viewBox="0 0 27 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M26.6263 14.0361C26.6846 13.9774 26.7372 13.9134 26.7833 13.8448L26.8401 13.7404C26.8905 13.662 26.926 13.575 26.9448 13.4838L26.9753 13.3751C27.0082 13.2086 27.0082 13.0372 26.9753 12.8707L26.9404 12.7576L26.9011 12.6272C26.8804 12.5824 26.8571 12.5388 26.8313 12.4967L26.779 12.4054C26.7305 12.3334 26.675 12.2664 26.6132 12.2054L14.886 0.503404C14.7721 0.357437 14.6283 0.23729 14.4642 0.150934C14.3001 0.0645771 14.1195 0.0139845 13.9342 0.00251328C13.749 -0.00895793 13.5635 0.0189546 13.39 0.0843977C13.2164 0.149841 13.0588 0.251317 12.9276 0.382099C12.7964 0.512881 12.6946 0.669977 12.6289 0.842966C12.5632 1.01595 12.5352 1.20088 12.5468 1.38548C12.5583 1.57008 12.609 1.75013 12.6957 1.91368C12.7823 2.07724 12.9028 2.22056 13.0493 2.33414L22.5427 11.8096L1.30884 11.8096C0.96171 11.8096 0.628803 11.9471 0.383349 12.1917C0.137894 12.4364 -5.7838e-07 12.7682 -5.63256e-07 13.1142C-5.48132e-07 13.4602 0.137894 13.792 0.383349 14.0367C0.628803 14.2813 0.96171 14.4188 1.30884 14.4188L22.5427 14.4188L13.0493 23.8943C12.8533 24.1453 12.7561 24.4589 12.7759 24.7763C12.7957 25.0938 12.9311 25.393 13.1567 25.6179C13.3824 25.8428 13.6826 25.9778 14.0011 25.9975C14.3195 26.0172 14.6342 25.9203 14.886 25.725L26.6263 14.0361Z" fill="#202020" />
                             </svg>
                         </div>
                     </div>
                 </div>
                 <div class="hero__contacts">
                     <?php if ($contact_form1 = carbon_get_theme_option('crb_form1_shortcode')) {
                        ?>
                         <?php
                            if ($contact_form1) {
                                echo '<div class="contact-form-container">' . do_shortcode(" $contact_form1 ") . '</div>';
                            }
                            ?>
                     <?php
                        }
                        ?>
                 </div>
             </div>
         </div>
     </section>
 <?php
    } else {
    ?>
     <?php if (current_user_can('administrator')) { ?>
         <div class="fixed-container">
             <div class="admin-notification">
                 <p style="text-align: center;">Блок со слайдером и формой обратной связи отключен, так как не добавлен ни один слайд.</p>

                 <i style="text-align: center;">Контент для слайдера на странице одной услуги находится на странице редактирования услуги</i>
             </div>
         </div>
     <?php } ?>
 <?php
    }
    ?>
 <?php
    if ($service_price_items = carbon_get_post_meta(get_the_ID(), 'crb_service_price')) {
    ?>
     <div class="fixed-container">
        <?php 
            if ($heading = carbon_get_post_meta(get_the_ID(), 'crb_service_heading')){
                echo $heading;
            }else {
                echo '<h2 class="title">'; the_title(); 
                echo '</h2>';
            }
        ?>
         <ul class="services-price">
             <?php
                foreach ($service_price_items as $service_price_item) {
                    $service_title = $service_price_item['crb_service_price_head'];
                    $service_value = $service_price_item['crb_service_price_value'];
                    $service_img = $service_price_item['crb_service_price_img'];
                    $service_img_url = wp_get_attachment_image_url($service_img, 'full');
                    //echo $service_img_url;

                    $service_phone =  carbon_get_post_meta(get_the_ID(), 'crb_service_phone');
                    $service_phone_link =  carbon_get_post_meta(get_the_ID(), 'crb_service_phone_link');
                ?>
                 <li class="services-price__item">
                     <div class="services-price__item__img">
                         <?php
                            if ($service_img) {
                            ?>
                             <img src="<?php echo $service_img_url ?>" alt="<?php echo $service_title ?>">
                         <?php
                            } else {
                            ?>
                             <img src="<?php echo get_stylesheet_directory_uri() ?>/images/svg/placeholder.svg" alt="<?php echo $service_title ?>">
                         <?php
                            }
                            ?>
                     </div>
                     <div class="services-price__item__title">
                         <?php echo '<h3>'. $service_title . '</h3>' ?>
                     </div>

                     <div class="service-price__item__add">
                         <?php echo '<h4>'.$service_value.'</h4>' ?>
                         <?php
                            if ($service_phone_link) {
                                echo '<a href="' . $service_phone_link . '"class="service-price__phone"><svg width="21" height="23" viewBox="0 0 21 23" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M16.4778 10.9888C14.8778 14.1333 12.3 16.7111 9.15555 18.3111L6.71111 15.8666C6.4 15.5555 5.96667 15.4666 5.57778 15.5888C4.33333 16 3 16.2222 1.61111 16.2222C1 16.2222 0.5 16.7222 0.5 17.3333V21.2222C0.5 21.8333 1 22.3333 1.61111 22.3333C12.0444 22.3333 20.5 13.8777 20.5 3.4444C20.5 2.83329 20 2.33329 19.3889 2.33329H15.5C14.8889 2.33329 14.3889 2.83329 14.3889 3.4444C14.3889 4.83329 14.1667 6.16663 13.7556 7.41107C13.6333 7.79996 13.7222 8.23329 14.0333 8.5444L16.4778 10.9888ZM4.94444 2.33329V0.666626L7.44444 3.16663L4.94444 5.66663V3.99996C4.20773 3.99996 3.50119 4.29262 2.98026 4.81355C2.45932 5.33449 2.16667 6.04102 2.16667 6.77774C2.16667 7.22218 2.26667 7.6444 2.45555 8.02218L1.24444 9.23329C0.777777 8.53329 0.5 7.68885 0.5 6.77774C0.5 4.32218 2.48889 2.33329 4.94444 2.33329ZM4.94444 9.55551C5.68116 9.55551 6.3877 9.26286 6.90863 8.74192C7.42956 8.22099 7.72222 7.51445 7.72222 6.77774C7.72222 6.33329 7.62222 5.91107 7.43333 5.53329L8.64444 4.32218C9.11111 5.02218 9.38889 5.86663 9.38889 6.77774C9.38889 9.23329 7.4 11.2222 4.94444 11.2222V12.8888L2.44444 10.3888L4.94444 7.88885V9.55551Z" fill="#323232"/>
</svg></a>';
                            }
                            ?>
                     </div>


                 </li>
             <?php
                }
                ?>
         </ul>
     </div>
 <?php
    }
    ?>