
<?php get_header(); ?>
<?php get_sidebar(); ?>


<div id="right">
        <div class="close" onclick="javascript:history.back(-1);">
        <a >close </a>
        </div>


<!--02 征集启事-->
	<div class="content">
    
    
        <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
       
            <div class="news">
            
            
              <div class="date">
                <span class="month"><?php echo date('M',get_the_time('U')); ?></span>
                <span class="day"><?php the_time('d') ?></span>
                <span class="year"><?php the_time('Y') ?></span>
                </div>
              
              <div class="news_content" id="post">
              
              <h3><?php the_title(); ?></h3>
              
              <p> 

			  
			  <?php  the_content()  ?>
              </p>
         
             
<script>
$(document).ready(function(){
    $("div#post a:has(img)").addClass("fancybox");

});
</script>

<script type="text/javascript">
		(function($) { 
  $(function(){
     $(".fancybox").fancybox();
  });
});
</script>



              </div>
			
            <hr class="newsline">

             

            </div>
             <?php endwhile; ?>

			<?php endif; ?>


<div id="nav-below" class="navigation">
					<div class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . '%title ' . _x( '&larr;', 'Previous post link') .'</span> '); ?></div>
					<div class="nav-next"><?php next_post_link( '%link', ' <span class="meta-nav">' .'%title '. _x( '&rarr;', 'Next post link' ) .'</span> ' ); ?></div>
				</div><!-- #nav-below -->


    </div>
    				

    
</div>

  
<!--02 征集启事结束-->
  
  <?php  get_footer() ?>
  

