<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
    <div class="site-header__desktop">
        <form class="site-search" role="search" aria-label="Search games">
            <label class="screen-reader-text" for="site-search-input">Search</label>

            <input
                id="site-search-input"
                class="site-search__input"
                type="search"
                placeholder="Rechercher un jeu"
            >

            <button class="site-search__button" type="submit" aria-label="Submit search">
                🔍
            </button>
        </form>

        <nav class="header-actions" aria-label="User actions">
            <a class="button button--ghost" href="#">Connexion</a>
            <a class="button button--primary" href="#">Inscription</a>
        </nav>
    </div>

    <div class="site-header__mobile">
        <div class="site-header__mobile-bar">
            <button class="mobile-menu-toggle js-mobile-menu-toggle" type="button" aria-controls="mobile-sidebar" aria-expanded="false" aria-label="Open menu">
                <span class="mobile-menu-toggle__line"></span>
                <span class="mobile-menu-toggle__line"></span>
                <span class="mobile-menu-toggle__line"></span>
            </button>

            <a class="site-header__mobile-brand" href="<?php echo esc_url(home_url('/')); ?>" aria-label="Go to homepage">
                <img
                    class="site-header__mobile-logo"
                    src="https://aphrodite8.casino/assets/themes/aphrodite/img/logo/default.svg"
                    alt="Aphrodite"
                    loading="lazy"
                    decoding="async"
                >
            </a>

            <a class="site-header__mobile-login" href="#">Log in</a>
        </div>

        <form id="mobile-search" class="site-search site-search--mobile" role="search" aria-label="Mobile search games">
            <label class="screen-reader-text" for="mobile-search-input">Search</label>

            <input
                id="mobile-search-input"
                class="site-search__input"
                type="search"
                placeholder="Search for game"
            >

            <button class="site-search__button" type="submit" aria-label="Submit mobile search">
                🔍
            </button>
        </form>
    </div>
</header>

<div class="mobile-sidebar-backdrop js-mobile-menu-close" aria-hidden="true"></div>
