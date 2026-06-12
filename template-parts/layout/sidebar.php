<aside class="site-sidebar" aria-label="Sidebar">
    <a class="site-logo" href="<?php echo esc_url(home_url('/')); ?>" aria-label="Go to homepage">
        <span class="site-logo__icon">A</span>
        <span class="site-logo__text">Aphrodite</span>
    </a>

    <nav class="sidebar-nav" aria-label="Main navigation">
        <?php
        wp_nav_menu([
            'theme_location' => 'sidebar_menu',
            'container'      => false,
            'menu_class'     => 'sidebar-menu',
            'fallback_cb'    => 'aphrodite_test_fallback_menu',
        ]);
        ?>
    </nav>
</aside>