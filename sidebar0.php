<!DOCTYPE html >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>2013首届中国国际大学生设计双年展</title>
<meta name="keywords" content="双年展,山东工艺美术学院,设计,征集,比赛" />

<link href="style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/flipmenu.css">

<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/flipmenu-min.js"></script>
<script type="text/javascript" src="js/jquery.scrollTo-1.4.2-min.js"></script>

	    <script type="text/javascript">
            $(document).ready(function(){
                var menu = new Flipmenu("flip_menu");
            });
	    </script>

    


    
</head>

<body >
<!--大背景-->
<div id="wrapper0">

<!--中间对齐-->
  <div id="wrapper">
  
  <!--左面logo栏-->
<div id="left">

<p class="sitelogo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>

  <div class="introduce">
              <div id="flip_menu">
            <ul>
              <li >  <a  href="">征集启事  Entry Rules  </a></li>
               <li class="activeli" > <a class="active"  href="">新闻通讯  News and Events</a></li>
                <li><a href="">作品展示  Show</a></li>
               <li> <a href="">搜索本站  Search</a></li>
</ul>
            </div>
  
  
  </div>
  <div class="orgnizers">
  <p>
  主办单位：<br />

             中国高等教育学会设计教育专业委员会<br />

             中国美术家协会艺术委员会<br />

             中国艺术研究院中国设计艺术院<br />

             中国国家画院公共艺术院<br />

             山东工艺美术学院</p>
             <p><br />

    支持单位：<br />
国际平面设计协会联合会（Icograda）</p>
</div>
</div>
 <!--左面logo栏结束-->

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
    
    
        <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
            <div class="news">
            
            
              <div class="date">
                <span class="month">JUL</span>
                <span class="day">07</span>
                <span class="year">2013</span>
                </div>
              
              <div class="news_content">
              
              <h3><a href=”<?php the_permalink(); ?>“><?php the_title(); ?></a></h3>
              
              <p>7月19日，韩国庆云大学师生访问团在池龙善教授的带领下来到我院长清校区进行参观交流。副院长苗登宇教授，国际合作交流处管维沂处长、马思敏老师、于江龙老师，视觉传达设计学院副院长侯立平教授、品牌教研室主任曲展教授，应用设计学院装扮专业教研室主任赵炜璐老师以及部分学生参加了本次交流活动。 ... <img src="images/201307221374508050.jpg" class="news_titleimg" alt="img"></p>
         
             

              </div>
			
            <hr class="newsline">

             

            </div>
             <?php endwhile; ?>

<?php endif; ?>
    </div>
    

    
</div>

  
<!--02 征集启事结束-->
  
  
  
        <!--版权声明-->
      <div id="about_footer">
			<script type="text/javascript">
			$(function(){
			$("#about").hide();
            $("#icon_about").hover(function(){
			$(this).next().slideToggle(100);
			});
			});
		
      </script>
<span id="icon_about">about</span>
      <span id="about">网页设计：山工艺视传学院交互设计工作室</span>
       <!--版权声明结束-->
  
  
  
  </div>
</div>



</body>
</html>
