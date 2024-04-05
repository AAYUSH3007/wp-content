<!doctype html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <!-- Add jQuery and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- Add Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Add custom CSS file -->
    <link rel="stylesheet" href="<?php echo esc_url(home_url('/wp-content/themes/Projectcms/assets/css/custom-styles.css')); ?>">
    <!-- Add custom font (if applicable) -->
</head>
<body <?php body_class(); ?>>
<header>
    <div>
        <a href="<?php echo esc_url(home_url()); ?>">
            <img src="<?php echo esc_url(home_url('/wp-content/uploads/2024/01/aayush_logo.png')); ?>" alt="logo" style="width: 150px; height: 150px;">
        </a>
    </div>
    <nav>
        <?php
        // Display main menu
        wp_nav_menu(array(
            'menu' => 'main',
            'theme_location' => '',
            'depth' => 2,
            'fallback_cb' => false
        ));
        ?>
        <ul class="menu">
            <!-- Main menu items -->
            <li><a href="<?php echo esc_url(home_url()); ?>"></a></li>
            <li><a href="http://localhost/WinterPHP/home-2/">Home</a></li>
            <li><a href="http://localhost/WinterPHP/view-flooring//">View Flooring</a></li>
            <li><a href="http://localhost/WinterPHP/contact-us/">Contact Us</a></li>
            <li><a href="http://localhost/WinterPHP/product/hardwood/">Our Products</a></li>
        </ul>
    </nav>
</header>
<!-- Additional content (if any) -->
<br> <br> <br>

<?php wp_footer(); ?>
</body>
</html>
