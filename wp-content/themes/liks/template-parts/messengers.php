<?php
if ($messengers = carbon_get_theme_option('messengers')) {
?>
    <ul class="messengers-list">
        <?php
        foreach ($messengers as $messenger) {
            $mes_img = wp_get_attachment_image_url($messenger['crb_mes_image'], 'full')
        ?>
            <li class="messengers-list__item">
                <a class="link" href="<?php echo $messenger['crb_mes_link'] ?>" class="messengers-list__item__link"
                    <?php
                    if ($contact_color = $messenger['crb_contact_background']) {
                        echo 'style="background-color:' . $contact_color . '; outline-color:' . $contact_color . '"';
                    }
                    ?>>
                    <img src="<?php echo $mes_img; ?>" alt="<?php echo $messenger['crb_mes_name'] ?>">
                    <span><?php echo $messenger['crb_mes_name'] ?></span>
                </a>
            </li>

        <?php
        }
        ?>
    </ul>
<?php
}
?>