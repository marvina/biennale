<?php

/*Template Name:anoucement*/

?>
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
           <p> 首届“中国国际大学生设计双年展”将于2013年10月在中国山东省济南举办。“中国国际大学生设计双年展”致力于为全球大学生搭建一个展示创意、设计和交流的平台，每两年举办一次，展现和推广全球范围内当代大学生的设计成果，鼓励原创性和本土化表达，探索设计在跨文化语境下国际间的交流与合作，启发和推动设计及设计教育的共同发展。</p>
          <h3>作品征集对象</h3>
            <p>参展对象为国内外高等院校相关专业在校本、专科学生及研究生。 </p>
            <h3>作品主题不限，类别包括：</h3>
            <p>视觉传达设计（包装、书籍、海报、字体设计），<br />
              插画设计，产品设计，展示设计，<br />
              环境设计（景观设计、室内外设计、城市规划等），<br />
              服装（服装、服饰设计），<br />
              工艺美术（陶瓷、金属、漆器、玻璃、纤维等），<br />
              数字艺术（动画、视频、界面设计等）。 </p>
            <h3>作品征集细则</h3>
            <p>1、参赛作品内容需健康向上，不得侵犯各国法律、文化或道德规范。</p>
              <p>2、本届展览国内作品须提交作品原件（稿件A4纸打印，无需装裱，在作品背面注明姓名、所在学校、作品类别、作品名称、联系方式）及电子稿件，国外作品只提交电子版。为便于作品展览、播放及出版画册，电子稿件要求如下：
              <br />
              （1）图片电子稿件规格共两种格式：同一幅作品提供A4尺寸，像素精度300dpi，TIFF的印刷格式；同时提供尺寸为60cm×80cm、像素精度300dpi、JPG格式的电子文件。
              <br />
              （2）视频文件统一压缩成flv流媒体格式，屏幕大小不得小于600dpi×800dpi，同时提供视频截图，图片要求同上。 </p >
             <p> 3、参赛作品的图片和视频文件名为：姓名+所在学校+作品类别+作品名称，每位作者投稿作品同一类别不能超过2件（或2个系列）。
              </p>
            <p>  4、每位作者需以Word文档形式，填写《首届“中国国际大学生设计双年展”作品登记表》一份。表格下载： <a class="withbg" href="download/registration_form.doc">首届“中国国际大学生设计双年展”作品登记表</a></p>
              <p>5、作品电子稿投稿方式：按上述要求，通过电子邮件将参赛作品和《首届“中国国际大学生设计双年展”作品登记表》放在以作者姓名命名的文件夹发送到组委会电子邮箱：<a class="withbg" href="mailto:designbiennial@hotmail.com">designbiennial@hotmail.com</a></p>
             <p> 6、作品原件邮寄地址及联系电话：<br />
              中国济南市长清大学城大学路1255号 
              山东工艺美术学院科研处     任谢元先生收
              联系电话15866702368 </p>
             <p> 7、作品征集截止日期：2013年9月25日 。
              </p>
            <p>  8、作品评选及奖项设置：展览评委会对作品进行评选，入选作品将有资格参加展览并编入画册出版，展览设金奖、银奖、铜奖、优秀奖及组织奖，并颁发获奖证书。<br />
        本展览不收取参展费。 </p>
            
           <h3>联系方式：</h3>
            <p> 地址：中国济南市长清大学城大学路1255号
              山东工艺美术学院首届“中国国际大学生设计双年展”组委会
              邮编：250307
              </p >
             <p> 联系人及电话：<br />
              蔡青春 0531-89626207  15154183527 
              于江龙 0531-89626169  15865253969 <br />
              邮箱: designbiennial@hotmail.com </p>
            <h3>版权说明</h3>
            <p>1、参赛作品须为参赛者本人（或团体）创作的作品，如作品发生知识产权或版权纠纷等，组委会将取消其参展资格，并由作者承担相应后果。所有因参展作品引发的版权或知识产权纠纷概与组委会无关。</p>
        <p>2、本届双年展展出的作品，组委会享有作品的印刷、出版（含电子出版）、推广的权利。 </p>
        </div>
        
        
        

</div>

  
<!--02 征集启事结束-->
  
  <?php  get_footer() ?>
  

