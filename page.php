<?php get_header() ?>




<section class="content">

<div class="container">
   
    <div class="row">
        
            
        
        <div class="col-lg-3">
            <div class="sticky-top">
            <?php get_sidebar(); ?>
            </div>
        </div>

        <div class="col-lg-9">
        <img src="<?php the_post_thumbnail_url( 'post_image' ); ?>" alt="<?php the_title(); ?>" class="img-fluid">
        <h1><?php the_title(); ?></h1>

        <?php if(have_posts()) : while(have_posts()) : the_post();?>

        <?php the_content(); ?>

        <?php endwhile; else: endif;?>
        </div>

    </div>

   

</div>

</section>

<?php get_footer() ?>

<?php get_footer() ?>