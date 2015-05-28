<?php get_header();//middle div started in get_header ?>
   <section>       
        <?php if (have_posts()) : while(have_posts()) : the_post(); //start the loop  ?>    
        <h2><?php the_title(); ?></h2>
        <?php the_content();?>
        <?php endwhile; endif;//end the loop?>
        <div id="scroll-arrow" class="scroll-arrow"></div>
    </section>
    <aside>
        <h2>Latest Postings</h2>
        <ul>
            <?php rewind_posts(); //end first loop?>
            <?php             query_posts('showposts=4');?>
            <?php while (have_posts()) : the_post();//start 2nd loop?>
            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php endwhile; // end 2nd loop ?>
        </ul>
    </aside>
<small>front-page.php</small>
<?php get_footer();//middle div ends in get_footer ?>
