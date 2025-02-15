<?php
if ($feedback_form = carbon_get_theme_option('crb_feedback_button_shortcode')) {
    echo '<a href="#form-popup" data-fancybox class="footer-btn btn">Заказать звонок</a>';
}
