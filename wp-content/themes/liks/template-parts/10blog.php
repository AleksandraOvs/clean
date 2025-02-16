 <section class="blog-section" id="blog">
    <div class="fixed-container">
         <!-- BLOG -->
        <h2 class="title">Полезная информация</h2>
    <?php
        $args = array(
            'posts_per_page' => 3,
            'post_type' => 'post',
            'category_name' => 'articles'
        );
        $query_blog = new WP_Query($args);
        // Цикл
        if ($query_blog->have_posts()) {
        ?>
        <div class="blog-link"><a class="link" href="<?php echo site_url('/category/articles')?>">Читать все статьи</a></div>
            <div class="blog-section">
                <?php
                while ($query_blog->have_posts()) {
                    $query_blog->the_post();
                    get_template_part('template-parts/content', get_post_type());
                }
                ?>
            </div>
        <?php
        } else {
            get_template_part('template-parts/content', 'none');
        }
        // Возвращаем оригинальные данные поста. Сбрасываем $post.
        wp_reset_postdata();
        ?>
    <!-- END OF BLOG -->
    </div>
 </section>
 
