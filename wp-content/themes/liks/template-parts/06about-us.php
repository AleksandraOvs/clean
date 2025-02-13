<section class="about-section">
    <div class="fixed-container">
        <?php
        if ($about_head = carbon_get_post_meta(get_the_ID(), 'crb_about_head')) {
            echo '<h2 class="title">' . $about_head . '</h2>';
        }
        ?>
        <div class="about-section__inner">
            <div class="about-section__left">
                <div class="about-section__head">
                    <?php
                    if ($about_desc = carbon_get_post_meta(get_the_ID(), 'crb_about_desc')) {
                        echo '<div class="about-desc">' . $about_desc . '</div>';
                    }
                    ?>
                </div>
                <?php
                if ($about_text = carbon_get_post_meta(get_the_ID(), 'crb_about_text')) {
                    echo '<div class="about-text">' . $about_text . '</div>';
                }
                ?>
            </div>
            <div class="about-section__right">
                <?php if ($about_img = carbon_get_post_meta(get_the_ID(), 'crb_about_image')) {
                    $about_img_url = wp_get_attachment_image_url($about_img, 'full');
                ?>
                    <img class="about-img" src="<?php echo $about_img_url ?>" alt="Клининг в Крыму" />
                <?php
                }
                ?>
            </div>
        </div>

    </div>
</section>