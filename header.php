
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header id="masthead" class="site-header">
    <div class="header-container">
        <div class="site-branding">
            <?php 
            if (has_custom_logo()) {
                the_custom_logo();
            } else {
                echo '<h1 class="site-title"><a href="' . esc_url(home_url('/')) . '">' . __('Aditya Shah', 'portfolio') . '</a></h1>';
            }
            ?>
        </div>

        <nav id="site-navigation" class="main-navigation">
            <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                <span class="menu-icon"><i class="fas fa-bars"></i></span>
                <span class="screen-reader-text"><?php echo __('Menu', 'portfolio'); ?></span>
            </button>
            <div class="nav-menu">
                <ul id="primary-menu" class="menu">
                    <li><a href="#hero"><?php echo __('About', 'portfolio'); ?></a></li>
                    <li><a href="#skills"><?php echo __('Skills', 'portfolio'); ?></a></li>
                    <li><a href="#projects"><?php echo __('Projects', 'portfolio'); ?></a></li>
                    <li><a href="#education"><?php echo __('Education', 'portfolio'); ?></a></li>
                    <li><a href="#certificates"><?php echo __('Certificates', 'portfolio'); ?></a></li>
                    <li><a href="#connect"><?php echo __('Connect', 'portfolio'); ?></a></li>
                    <li><a href="#resume"><?php echo __('Resume', 'portfolio'); ?></a></li>
                </ul>
            </div>
        </nav>
    </div>
</header>