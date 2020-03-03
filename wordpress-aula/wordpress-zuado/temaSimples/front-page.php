<?php get_header(); ?>
<!--
<div class="container">
    <div class="row">
        <div class="col">Esquerda</div>
        <div class="col">Direita</div>
    </div>
</div>
-->
<div class="container">
    <h1><?php the_title(); ?></h1>

    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; endif; ?>
</div

<?php get_footer(); ?>