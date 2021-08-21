<?php get_header() ?>

<section class="ftco-section">

<div class="container">
        <div class="row">
        
        
      
        <div class="col-md-4 sidebar px-5">
            <div class="sidebar-box d-flex justify-content-center">
                <a href="<?php the_permalink()?>;">
                <div class="img speaker-img"
                                    style="background-image: url('<?php the_post_thumbnail_url( 'post_image' ); ?>' )">
                                    </div>    
            </a>
            </div>
        
        </div>

        <div class="col-md-8 order-md-last px-5">
        <h2><?php the_title(); ?></h2>

        <?php if(have_posts()) : while(have_posts()) : the_post();?>

        <?php the_content(); ?>
        <?php get_template_part('template-parts/post','navigation')?>
        <?php endwhile; else: endif;?>
        </div>
        </div>
    
    </div>

</section>

<?php get_footer() ?>