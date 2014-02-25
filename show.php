<?php

/*Template Name:show*/

?>

<?php get_header(); ?>
<?php get_sidebar(); ?>











<div id="right">
        
<!--02 征集启事-->
	<div class="content">
    
    
        <?php
$limit = get_option('posts_per_page');
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
query_posts('cat=36&showposts=' . $limit=10 . '&paged=' . $paged);
?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


        
		<div class="showpost" >
        
       

        
		<div class="postimg"><a class="postthumbnail" href="<?php the_permalink(); ?>">
        <?php if ( has_post_thumbnail() ) { ?>
		<?php the_post_thumbnail('thumbnail'); ?>
        <?php } else {?>
         <img src="<?php bloginfo('template_url'); ?>/images/posthover.png" />
        <?php } ?>
        </a></div>
        
 <div class="posttitle"> <h3><a  href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3></div>

	  <script type="text/javascript">
			 jQuery(function(){
				$(".posttitle").hide();
             	$("div.postimg").mouseover(function(){
					$(this).next().fadeIn(300);
				$(".posttitle").mouseout(function(){
					$(this).fadeOut(300);
					});
			});
			
			});
      </script>

        
        </div>
        
        
        
        
        
        
        

    <?php endwhile; ?>
	<?php endif; ?>



    <div class="navigation">
    <?php posts_nav_link() ?> 
    </div> 

    </div>
    

    

    
</div>

  

  
<?php  get_footer() ?>
  

