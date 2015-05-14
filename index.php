<?php get_header();//middle div started in get_header ?>
   <section>       
        <?php if (have_posts()) : while(have_posts()) : the_post(); //start the loop  ?>    
        <h2><?php the_title(); ?></h2>
        <?php the_content();?>
        <?php endwhile; endif;//end the loop?>
    </section>
    <aside>
        <?php get_sidebar();?>
    </aside>
    <small>index.php</small>

<?php get_footer();//middle div ends in get_footer ?>
