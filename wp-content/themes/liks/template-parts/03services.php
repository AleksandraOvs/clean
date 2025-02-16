<?php
$services_query = new WP_Query(array(
    'post_type' => 'services',
    'order' => 'DESC',
    'orderby' => 'date',
    'posts_per_page' => -1
));

if ($services_query->have_posts()) {
?>
    <section class="section _services-section" id="services">
        <div class="fixed-container">
            <h2 class="title">Наши услуги</h2>
            <div class="_services-section__services-list">
                <?php
                while ($services_query->have_posts()) : $services_query->the_post();
                ?>
                    <?php get_template_part('template-parts/service/service-item') ?>
                <?php
                endwhile;
                ?>
            </div>
        </div>
    </section>
<?php
    wp_reset_postdata();
}
?>