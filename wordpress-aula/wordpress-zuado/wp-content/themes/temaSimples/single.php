<?php get_header(); ?>

    <h1><?php single_cat_title(); ?></h1>
    <?php if(have_posts()) : while(have_posts()) : the_post();?>
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <h3><?php the_title(); ?></h3>
                    <?php if(has_post_thumbnail()):?>
                    <img src="<?php the_post_thumbnail_url('largest'); ?>" alt="" class="img-fluid"/>
                ?>
                <?php endif; ?>
                    <?php the_excerpt(); ?>
                    <a href="<?php the_permalink(); ?>" class="btn btn-sucess">Leia mais...</a>
                </div>
            </div>
        </div>
        
    <?php endwhile; endif;?>
<?php get_footer(); ?>