<?php
if ($liks_nums = carbon_get_post_meta(get_the_ID(), 'crb_nums')) {
?>

    <section class="num-section">
        <div class="fixed-container">
            <ul class="num-list">
                <?php
                foreach ($liks_nums as $liks_num) {
                    
                ?>
                    <li class="num-list__item"<?php if ($liks_text_color = $liks_num['crb_num_color_text']){
                            echo 'style="color:'.$liks_text_color.'"';
                        } ?>
                        >
                        <div class="num-block" 
                        <?php if ($liks_bg = $liks_num['crb_num_color']){
                            echo 'style="background-color:'.$liks_bg.'"';
                        } ?>
                        >



                            <?php
                            if ($num_head = $liks_num['crd_num_head']) {
                                echo '<span>' . $num_head . '</span>';
                            }
                            ?>

                            <?php
                            if ($num_text = $liks_num['crb_num_text']) {
                                echo '<span>' . $num_text . '</span>';
                            }
                            ?>

                            <?php
                            if ($num_img = $liks_num['crb_num_img']) {
                                $num_img_url = wp_get_attachment_image_url($num_img, 'full');
                                echo '<img class="num-list__item_pic" src="' . $num_img_url . '" />';
                            }
                            ?>
                        </div>
                    </li>
                <?php
                }
                ?>
            </ul>

        </div>
    </section>

<?php
}
