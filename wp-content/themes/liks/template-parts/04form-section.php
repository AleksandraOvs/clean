<?php if ($contact_form2 = carbon_get_post_meta(get_the_ID(), 'crb_form_shortcode2')) {
?>

    <section class="section-form">
        <div class="fixed-container">
            <div class="contact-form-container">
                <?php
                if ($form_head = carbon_get_post_meta(get_the_ID(), 'crb_form_head2')) {
                    echo '<h3 class="formheading">' . $form_head . '</h3>';
                }
                ?>

                <?php
                if ($form_desc = carbon_get_post_meta(get_the_ID(), 'crb_form_desc2')) {
                    echo '<div class="block_description">' . $form_desc . '</div>';
                }
                ?>

                <?php //print_r($contact_form2); ?>
                <?php echo do_shortcode(" $contact_form2 ") ?>
            </div>
        </div>
    </section>

<?php } ?>