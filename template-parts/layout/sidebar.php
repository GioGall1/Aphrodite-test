<aside id="mobile-sidebar" class="site-sidebar" aria-label="Sidebar">
    <div class="site-sidebar__header">
        <a class="site-logo" href="<?php echo esc_url(home_url('/')); ?>" aria-label="Go to homepage">
            <span class="site-logo__icon">A</span>
            <span class="site-logo__text">Aphrodite</span>
        </a>

        <button class="site-sidebar__close js-mobile-menu-close" type="button" aria-label="Close menu">
            <span aria-hidden="true">×</span>
        </button>
    </div>

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
