<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <?php wp_head(); ?>
    </head>
<body <?php body_class(); ?>>
    <header class="sticky-top">
        <img src="../temaSimples/css/star.png" alt="" class="img-fluid" id="estrela">
        <?php wp_nav_menu(
            array(
                'theme_location' => 'top-menu'
            )
            ); ?>
    </header>
    
