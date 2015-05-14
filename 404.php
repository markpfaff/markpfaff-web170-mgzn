<?php get_header(); ?>

<?php get_sidebar();?>                
<h2><a href=" <?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<p>Page Not Found</p>
<?php get_search_form();?>
<?php the_content();?>

<?php get_footer(); ?>
