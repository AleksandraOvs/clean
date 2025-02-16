<?php

if ($clients_slides = carbon_get_post_meta(get_the_ID(), 'crb_clients')) {
?>
    <section class="ourClients-section" id="clients">
        <div class="fixed-container">
            <?php
            if ($сlients_head = carbon_get_post_meta(get_the_ID(), 'crb_clients_head')) {
                echo '<h2 class="title">' . $сlients_head . '</h2>';
            }
            ?>
            <?php
            if ($сlients_desc = carbon_get_post_meta(get_the_ID(), 'crb_сlients_desc')) {
                echo '<div class="block-description">' . $сlients_desc . '</div>';
            }
            ?>

            <div class="swiper ourClients-slider">
                <div class="swiper-wrapper">
                    <?php
                    foreach ($clients_slides as $client_slide) {
                        $logo_img = $client_slide['crb_clients_item'];
                        $logo_img_url = wp_get_attachment_image_url($logo_img, 'full');
                        $logo_link = $client_slide['crb_clients_item_link'];
                    ?>
                    <?php 
                        if ($logo_link){
                            echo '<a href="" class="swiper-slide ourClients-slider__slide _logo-link">
                            <img src="' . $logo_img_url .'" alt="Нам доверяют">
                        </a>';
                        }else{
                            ?>
                           <div class="swiper-slide ourClients-slider__slide">
                            <img src="<?php echo  $logo_img_url ?>" alt="Нам доверяют">
                        </div> 
                        <?php
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
}
