
<!--to do: add styles-->
<div id="sidebar">
    <div id="sub-navigation" class="widget">
        <?php if(is_page()):?>
        <h2><?php echo get_the_title($post->post_parent); ?></h2>
        <ul>
            <?php 

            if ($post->post_parent) { // if page has a parent

            wp_list_pages(array('child_of' => $post->post_parent, 'title_li' => __(''))); // list the sub-pages with no title

            } else { // if the page is a gateway page

            wp_list_pages(array('child_of' => $post->ID, 'title_li' => __(''))); // list the sub-pages with no title

            } ?>
        </ul>
            <?php endif; ?>
            <?php if(!(is_page())) : ?>
        <ul>
            <?php wp_list_categories()?>
        </ul>
            <?php endif; ?>
    </div><!--    end div with id of "sub-navigation"-->
    <!--    Begin Quote-->
    <?php if (get_post_meta($post->ID, 'Quote', true)) :?>
        <blockquote><?php echo get_post_meta($post->ID, 'Quote', true); ?></blockquote>
    <?php endif; ?>

    <!--End Quote-->

    <!--Begin Dynamic Sidebar-->
    <?php dynamic_sidebar(1);//Sidebar 1 is Calendar?>
    <!--End Dynamic Sidebar-->

    <small>sidebar.php</small>                    
</div><!--end sidebar div-->
