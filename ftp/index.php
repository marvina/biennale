
<?php get_header(); ?>

<?php get_sidebar(); ?>


<div id="right">
        <div id="datebar" >

<span id="times"></span>

<script type="text/javascript">
//<![CDATA[
function _fresh()
{
var endtime=new Date("2013/09/25,23:00:00");
var nowtime = new Date();
var leftsecond=parseInt((endtime.getTime()-nowtime.getTime())/1000);
__d=parseInt(leftsecond/3600/24);
__h=parseInt((leftsecond/3600)%24);
__m=parseInt((leftsecond/60)%60);
__s=parseInt(leftsecond%60);
document.getElementById("times").innerHTML="距截稿还有&nbsp;"+""+__d+""+"&nbsp;天";
if(leftsecond<=0){
document.getElementById("times").innerHTML="征稿已截止";
clearInterval(sh);
}
}
_fresh()
var sh;
sh=setInterval(_fresh,1000);
//]]>
</script>

        </div>
<!--02 征集启事-->
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

			  
			  <?php  the_content()  ?>
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

  
<!--02 征集启事结束-->
  
  <?php  get_footer() ?>
  

