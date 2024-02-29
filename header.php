<!DOCTYPE html>
<html>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <?php wp_head(); ?>
</head>
<header class="flex space-between" x-data="{ isOpen: false }">
    <div class="header-left w-1/3">
        <h1><?php bloginfo( 'name' ); ?></h1>
    </div>
    <div class="header-right grow flex">
        <nav class="hidden md:block">
            <?php wp_nav_menu( array('theme_location' => 'header' ) ); ?>
        </nav>
        <button class="md:hidden ms-auto" aria-label="Menu" @click="isOpen = !isOpen">
            Menu
        </button>

    </div>

    <nav class="absolute top-0 right-0 w-96 h-fit p-4 bg-white" 
    x-show="isOpen" 
    @click.away="isOpen = false"
    x-transition:enter="transition ease-out duration-300 -mr-96"
    x-transition:enter-start=""
    x-transition:enter-end="transform -translate-x-96"
    x-transition:leave="transition ease-out duration-300"
    x-transition:leave-start=""
    x-transition:leave-end="transform translate-x-96"
    >
        <div class="flex justify-end">
            <button class="text-3xl mr-3 mt-1" 
            @click="isOpen = false"
            >&times;</button>
        </div>
        <?php wp_nav_menu( array('theme_location' => 'header' ) ); ?> 
    </nav>
</header>
<body>
    <main>