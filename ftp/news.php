<?php

/*Template Name:news*/

?>
<?php get_header(); ?>

<?php get_sidebar(); ?>


<div id="right">
        

	<div class="content">
    
    
        <?php
$limit = get_option('posts_per_page');
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
query_posts('cat=-4&showposts=' . $limit=10 . '&paged=' . $paged);
?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
       
            <div class="news">
            
            
              <div class="date">
                <span class="month"><?php echo date('M',get_the_time('U')); ?></span>
                <span class="day"><?php the_time('d') ?></span>
                <span class="year"><?php the_time('Y') ?></span>
                </div>
              
              <div class="news_content">
              
              <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
              
              <p> 

			  
			  <?php the_content(__('(more...)')); ?>
              </p>

              </div>
			
            <hr class="newsline">

            </div>
            <?php endwhile; ?>
			<?php endif; ?>



    <div class="navigation">
    <?php posts_nav_link() ?> 
    </div> 

    </div>
    

    

    
</div>

  

  
  <?php  get_footer() ?>
  
