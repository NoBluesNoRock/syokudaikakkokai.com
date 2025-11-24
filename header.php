<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="sticky top-0 z-50 bg-white/80 backdrop-blur-md border-b border-gray-100 transition-all duration-300">
    <div class="container mx-auto px-6 py-4 flex justify-between items-center">
        <h1 class="text-2xl font-bold uppercase tracking-widest relative group">
            <a href="<?php echo home_url(); ?>" class="text-text transition-colors duration-300 group-hover:text-accent">
                燭台（怪）
            </a>
        </h1>
        <button class="menu-toggle md:hidden p-2 text-text hover:text-accent transition-colors" aria-label="Toggle Menu">
            <span class="block w-6 h-0.5 bg-current mb-1.5 transition-all"></span>
            <span class="block w-6 h-0.5 bg-current mb-1.5 transition-all"></span>
            <span class="block w-6 h-0.5 bg-current transition-all"></span>
        </button>
        <nav class="site-navigation hidden md:block">
            <?php wp_nav_menu(array(
                'theme_location' => 'global',
                'container' => false,
                'menu_class' => 'flex gap-10 font-bold text-sm uppercase tracking-widest text-text [&_a]:relative [&_a]:py-2 [&_a]:transition-colors [&_a:hover]:text-accent [&_a::after]:content-[\'\'] [&_a::after]:absolute [&_a::after]:bottom-0 [&_a::after]:left-0 [&_a::after]:w-0 [&_a::after]:h-0.5 [&_a::after]:bg-accent [&_a::after]:transition-all [&_a::after]:duration-300 [&_a:hover::after]:w-full'
            )); ?>
        </nav>
    </div>
</header>
