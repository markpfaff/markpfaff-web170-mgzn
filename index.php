<?php get_header();//middle div started in get_header ?>
   <section>       
        <?php if (have_posts()) : while(have_posts()) : the_post(); //start the loop  ?>    
        <article class="post-excerpt">
            <h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
            <small>Posted on <?php the_time('F j, Y');?> by <?php the_author();?> in <?php the_category(', ');?></small>
            <a href="<?php the_permalink();?>"><?php echo get_the_post_thumbnail($post->ID, 'thumbnail');?></a>
            <p><?php echo strip_tags(get_the_excerpt());?>
                 <a href="<?php the_permalink();?>" title="Permanent Link to <?php the_title(); ?>">Read More &raquo;</a></p>
             <?php endwhile; endif;//end the loop?>
        </article>
    </section>
    <aside>
        <?php get_sidebar();?>
    </aside>
    <small>index.php</small>

<?php get_footer();//middle div ends in get_footer ?>
