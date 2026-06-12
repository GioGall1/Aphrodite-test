<?php get_header(); ?>

<div class="page-layout">
    <?php get_template_part('template-parts/layout/sidebar'); ?>

    <main class="site-main">
        <?php get_template_part('template-parts/sections/hero'); ?>
        <?php get_template_part('template-parts/sections/advantages'); ?>
        <?php get_template_part('template-parts/sections/slots-slider'); ?>
    </main>
</div>

<?php get_footer(); ?>