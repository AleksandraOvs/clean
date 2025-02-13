<?php if ($faq_items = carbon_get_post_meta(get_the_ID(), 'crb_faq_items')) {
?>
    <section class="faq-section">
        <div class="fixed-container">
            <?php
            if ($block_head = carbon_get_post_meta(get_the_ID(), 'crb_faq_head')) {
                echo '<h2 class="title">' . $block_head . '</h2>';
            }
            ?>
            <?php
            if ($block_desc = carbon_get_post_meta(get_the_ID(), 'crb_faq_desc')) {
                echo '<div class="block_description">' . $block_desc . '</div>';
            }
            ?>
            <div id="faq">
                <?php
                foreach ($faq_items as $faq_item) {
                ?>
                  
                        <div class="faq-question-head" class="">
                            <h3><?php echo $faq_item['crb_faq_question'] ?></h3>
                            <div class="faq-marker">
                                <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.5 6.5H11.5M6.5 11.5V1.5" stroke="#202020" stroke-width="1.5" stroke-linecap="round" />
                                </svg>

                            </div>
                        </div>
                        <div class="faq-answer">
                            <p><?php echo $faq_item['crb_faq_answer'] ?></p>
                        </div>
                   
                <?php
                }
                ?>
            </div>
        </div>
    </section>
<?php
}

?>