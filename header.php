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
</header>