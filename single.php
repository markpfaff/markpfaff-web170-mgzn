<?php get_header(); ?>
<!--middle div started in get_header-->
<section>           
    <?php if (have_posts()) : while(have_posts()) : the_post(); //start the loop  ?>    
    <article>
        <h2><?php the_title(); ?></h2>
        <?php the_content();?>
    </article>
    <?php endwhile; endif;//end the loop?>
    <small>single.php</small>
</section> 
<!-- middle div ends in get_footer-->
<?php get_sidebar();?> 
<?php get_footer(); ?>
