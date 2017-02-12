<!DOCTYPE html>
<html>
<head>
  <title>ComCamp#29</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/css.css">
  <link rel="stylesheet" href="./css/responsive.css">
  <link rel="stylesheet" href="./css/animate.min.css">
</head>
<body onload="init();" style="margin:0px;" data-spy="scroll" data-target=".navbar" data-offset="50">
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v2.8&appId=1528156984120005";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<nav class="navbar navbar-inverse navbar-fixed-top" id="background">
  <div class="container" >
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                      
      </button>
      <div style="width: 160px;margin:0!important;padding: 0!important;text-align: center"><img src="img/navlogo.png" alt="comcamp29" style="float: left;height: 56px"><h1 style="font-size: 18px;float: left;">ComCamp</h1> </div>
    </div>
    <div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav" id="menu">
          <li><a data-scroll href="#home">Home</a></li>
          <li><a data-scroll href="#comcamp">What</a></li>
          <li><a data-scroll href="#learning">Learning</a></li>
          <li><a data-scroll href="#schedule">Schedule</a></li>
          <li><a data-scroll href="#qanda">Q&A</a></li>
          <li><a data-scroll href="#contact">Contact</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a data-scroll href="#regis"><span class="glyphicon glyphicon-user"></span> สมัครค่ายเลย !</a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>    
<div id="page">  
  <div id="home" class="section">
      <div id="whatcomcamp" class="wow zoomIn parallaxx"></div>
      <!-- <div class="spotlight"></div>
      <iframe src="./theif.html" frameborder="0" id="thief"></iframe> -->
  </div>
  <div id="comcamp" class="section">
    <div class="container">
      <div class="row">
       
        <div class="col-md-6" align="center">
          <h1 align="center" class="wow bounceInDown" style="color:#ddd">Comcamp คืออะไร ?</h1>
          <div class="wow bounceInLeft text"  data-wow-delay="0.4s" data-wow-duration="0.7s" align="right" style="margin-top: 30px;font-size: 18px">
          <!-- <h2 class="wow bounceInRight"  data-wow-delay="0.5s" data-wow-duration="0.7s">Comcamp 29th</h2> -->
      <br><div align="center">โครงการฝึกอบรมเชิงปฏิบัติการคอมพิวเตอร์เบื้องต้น ครั้งที่29</div><br>
     <div align="left"> &emsp;&emsp;&emsp;น้องๆเคยสงสัยกันบ้างหรือเปล่า ว่าวิศวะคอมทำอะไรกัน? สนุกไหม?  แล้วเสน่ห์ของวิศวะคอมคืออะไรกันนะ?งั้นมาเข้าค่าย Comcamp 29th กันเถอะ!<br><br>
      &emsp;&emsp;&emsp;มาลองสัมผัสความเป็นนักศึกษาวิศวะคอมพิวเตอร์ มาเรียนรู้ มาลงมือทำจริง ซึมซับประสบการณ์ใหม่ๆ และมาพับกบ เอ้ย! พบกับเพื่อนๆมากหน้าหลายตา และที่สำคัญค่ายนี้...ฟรีทั้งค่าย พี่ๆกำลังรอน้องๆมาเป็นส่วนหนึ่งของค่ายอยู่นะ รีบสมัครกันเข้ามาเยอะๆน้า</div>
          </div>
        </div>
         <div data-wow-delay="0.8s" data-wow-duration="0.7s" class="col-md-6 wow flipInX bg" align="center"> 
         <div id="animation_container">
          <canvas id="canvas"></canvas>
          <div id="dom_overlay_container">
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>
  <div id="learning" class="section">
    <div class="container" style="">
      <div class="row">
        <div id="after" class="col-md-6 col-md-push-6">
          <h1 align="center" class="wow bounceInDown" style="color:#ddd;">วิชาที่น้องจะได้เรียน</h1>
          <div class="text"  data-wow-delay="0.8s" data-wow-duration="0.7s" style="margin-top: 30px" align="left">
          <!-- <h2 class="wow bounceInRight"  data-wow-delay="0.5s" data-wow-duration="0.7s">Comcamp 29th</h2> -->
          <div class="container" align="center" style="margin-top: 60px;color: black">
              <div class="row">
                  <div class="col-sm-offset-6 col-sm-4"><img title="Arduino" data-toggle="popover" data-trigger="hover" data-content="เรียนรู้การสั่งการหุ่นยนต์ให้ได้ตามใจนึก โดยใช้อุปกรณ์และคำสั่งที่ง่ายต่อการใช้งาน" data-placement="left" class="wow bounceInRight" src="img/adu.png" width="130px" alt="Arduino">
                  </div>
              </div>
              <div class="row">
                  <div class="col-sm-4"><img title="C Programming" data-toggle="popover" data-trigger="hover" data-content="เรียนรู้ภาษาซี พื้นฐานของทุกสิ่ง ก้าวแรกเปลี่ยนความคิด สู่เส้นทางชีวิตโปรแกรมเมอร์" data-placement="auto" class="wow bounceInLeft" src="img/compro.png" width="130px" alt="C Language"></div>
                  <div class="col-sm-4"><img title="Hardware" data-toggle="popover" data-trigger="hover" data-content="งัดแงะแกะประกอบคอมพิวเตอร์ เรียนรู้อุปกรณ์ภายใน เข้าใจหลักการทำงาน" data-placement="left" class="wow bounceIn" src="img/hardware.png" width="130px" alt="Hardware"></div>
                  <div class="col-sm-4"><img title="Linux" data-toggle="popover" data-trigger="hover" data-content="เรียนรู้วิธีใช้ระบบปฏิบัติการที่สามารถทำงานได้ทั้งพีซีและเซิร์ฟเวอร์ พร้อมกับให้น้องๆได้เห็นว่า ของดีและฟรีก็มีในโลก" data-placement="bottom" class="wow bounceInRight" src="img/linux.png" width="130px" alt="Linux"></div>
              </div>
              <div class="row">
                  <div class="col-sm-offset-2 col-sm-4"><img title="Web Programming" data-toggle="popover" data-trigger="hover" data-content="การสร้างเว็บเบื้องต้น สร้างโลกไร้พรมแดน ติดต่อสื่อสาร เข้าถึงกันได้ง่ายขึ้น ด้วยปลายนิ้วมือในแบบที่น้องเลือกเอง" class="wow bounceInLeft" src="img/web.png" width="130px" alt="Webapp"></div>
              </div>
          </div>
          </div>
          
        </div>
        <div id="before" data-wow-delay="0.8s" data-wow-duration="0.7s" class="col-md-6 col-md-pull-6 wow flipInX bg" align="center"> 
         <!-- <div id="animation_container2">
          <canvas id="canvas2"></canvas>
          <div id="dom_overlay_container2">
          </div>
        </div> -->
        <img src="./img/2.png" width="100%" alt=""> 
        </div>
      </div>
    </div>
  </div>
  <div id="regis" class="section">
    <div class="container">
      <div class="row">
       
        <div class="col-md-6" align="center">
          <h1 align="center" class="wow tada" style="color:#ddd;padding-top: 60px">เปิดรับสมัครแล้ว !!</h1>
          <div class="wow fadeInUp"  data-wow-delay="0.4s" data-wow-duration="0.7s" align="center" style="margin-top: 30px;">
          <!-- <h2 class="wow bounceInRight"  data-wow-delay="0.5s" data-wow-duration="0.7s">Comcamp 29th</h2> -->
          <div class="submit wow pulse infinite" onclick="window.location='regis.php'">สมัครเลย !</div>
          </div><br>
        </div>
         <div data-wow-delay="0.8s" data-wow-duration="0.7s" class="col-md-6 wow flipInX bg" align="center"> 
         <img src="./img/3.png" width="100%" alt="">   
        </div>
      </div>
    </div>
  </div>
  <div id="schedule" class="section">
    <div class="container" style="">
      <div class="row">
        <div id="after" class="col-md-6 col-md-push-6">
          <div class="wow bounceInRight text"  data-wow-delay="0.8s" data-wow-duration="0.7s" style="margin-top: 30px" align="left">
          <!-- <h2 class="wow bounceInRight"  data-wow-delay="0.5s" data-wow-duration="0.7s">Comcamp 29th</h2> -->
          <div class="header">
            <h3 align="left" style="color:#ddd;padding-left: 10%;padding-top: 25px">กำหนดการ (Schedule)</h3>
            </div>
            <div class="question" style="padding-bottom: 20px;background: rgba(255,255,255,0.7);color:black">
            <div class="container">
              <div class="col1">
              <div style="border-bottom: 1px solid #666;padding-bottom: 5px;font-size: 19px">วันที่</div>
              <div class="table1">5555</div>
              <div class="table1">5555</div>
              <div class="table1">5555</div>
              <div class="table1">5555</div>
              <div class="table1">5555</div>
              </div>
              <div class="col2">
              <div style="border-bottom: 1px solid #666;padding-bottom: 5px;font-size: 19px">กำหนดการ</div>
              <div class="table2">5555</div>
              <div class="table2">5555</div>
              <div class="table2">5555</div>
              <div class="table2">5555</div>
              <div class="table2">5555</div>
              </div>
              <div></div>
            </div>
          </div>
          </div>
          
        </div>
        <div id="before" data-wow-delay="0.8s" data-wow-duration="0.7s" class="col-md-6 col-md-pull-6 wow flipInX bg" align="center"> 
         <img src="./img/4.png" width="100%" alt=""> 
        </div>
      </div>
    </div>
  </div>
  <div id="qanda" class="section">
    <div class="container">
      <div class="row">
       
        <div class="col-md-6" align="center">
          <div class="wow bounceInLeft"  data-wow-delay="0.4s" data-wow-duration="0.7s" align="right" style="margin-top: 30px">
          <!-- <h2 class="wow bounceInRight"  data-wow-delay="0.5s" data-wow-duration="0.7s">Comcamp 29th</h2> -->
          <div style=" width: 100%;">
            <div class="header">
            <h3 align="right" style="color:#ddd;padding-right: 10%;padding-top: 25px">คำถามที่พบบ่อย (Q&A)</h3>
            </div>
            <div class="question container"  data-toggle="collapse" data-target=".answer:first">
            <div class="content">
            55555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555
            </div>
            <div class="who"> : Q</div>
            </div>
            <div class="answer container collapse">
            <div class="content">
            55555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555
            </div>
            <div class="who"> : A</div>
            </div>
            <div class="question container" data-toggle="collapse" data-target=".answer:last"">
            <div class="content">
            55555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555
            </div>
            <div class="who"> : Q</div>
            </div>
            <div class="answer container collapse">
            <div class="content">
            55555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555
            </div>
            <div class="who"> : A</div>
            </div>
          </div>
        </div>
        </div>
         <div data-wow-delay="0.8s" data-wow-duration="0.7s" class="col-md-6 wow flipInX bg" align="right"> 
         <img src="./img/5.png" width="100%" alt="">   
        </div>
      </div>
    </div>
  </div>
  <div id="social" class="section">
    <div class="container">
      <div class="row">
       
        <div class="col-md-5" align="center">
          <div align="right" class="text" style="font-size: 30px">ติดตามข่าวสาร<br>
          หรือสอบถามข้อมูลได้ที่
          </div>
          <br><br>
          <div align="right" class="text" style="font-size: 18px">น้อง ๆ สามารถติดตามข่าวสารค่าย Comcamp 29<br>
          หรือน้อง ๆ มีข้อสงสัย สามารถติดตามและสอบถามได้ที่<br>
          Facebook Fanpage : Comcamp KMUTT ตลอด 24 ชั่วโมง
          </div>
        </div>
         <div data-wow-delay="0.8s" data-wow-duration="0.7s" class="wow rollIn col-md-7 marginTop" align="center"> 
          <div class="fb-page" data-href="https://www.facebook.com/KMUTTcomcamp/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" style="float:left;width: 47%;height: 400px" data-height="400"><blockquote cite="https://www.facebook.com/KMUTTcomcamp/?fref=ts" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/KMUTTcomcamp/?fref=ts">Comcamp KMUTT</a></blockquote></div>
         
         <div style="width:47%;float: right" data-wow-delay="0.8s" data-wow-duration="0.7s" class="wow rollIn">  
         <a class="twitter-timeline" data-height="400" href="https://twitter.com/comcamp_kmutt">Tweets by comcamp_kmutt</a>
         </div>
        </div>
      </div>
    </div>
  </div>
  <div id="contact" class="section" style="background: #11182b!important;margin-top: 100px">
      <div class="container">
      <div class="row">
        <div id="after" class="col-md-6 col-md-push-6">
          <div class="wow bounceInRight text"  data-wow-delay="0.8s" data-wow-duration="0.7s" style="margin-top: 30px" align="left">
          <div class="text" style="font-size: 30px">ช่องทางการติดต่อ</div>
          <div class="container conhead"> 
          <div class="conicon"><img src="img/email.png"></div>
          <div class="condetail">comcamp29@comcamp.in.th</div>
          </div>
          <div class="container conhead">
          <div class="conicon"><img src="img/phone.png"></div>
          <div class="condetail">
          พี่นนท์ : 096-3061332<br>
          พี่พู : 095-7588902<br>
          พี่มินโตะ : 088-2962355<br>
          พี่เฌอแตม : 085-9400984<br>
          พี่โอม : 096-0048307
          </div>
          </div>
          <div class="container conhead">
          <div class="conicon"><img src="img/location.png"></div>
          <div class="condetail">คณะวิศวกรรมศาสตร์<br>มหาวิทยาลัยเทคโนโลยีพระจอมเกล้าธนบุรี<br><br>ชั้น10 อาคารวิศวะวัฒนะ 126 ถ.ประขาอุทิศ<br>แขวงบางมด เขตทุ่งครุ กรุงเทพฯ 10140</div>
          </div>
          </div>
          
        </div>
        <div id="before" data-wow-delay="0.8s" data-wow-duration="0.7s" class="col-md-6 col-md-pull-6 wow flipInX" align="center" style="height: 580px"> 
        <div style="margin-top: 100px">
         <img src="./img/com.png" height="300px"> 
         <img src="./img/table.png" width="100%"> 
        </div>
        </div>
      </div>
    </div>
</div>
<div class="space section"> 
    <div class="footer">
     <div class="container" style="height: 100%;display: flex; align-items: center;justify-content: center;color:#fff;background-color: #282828;">
     © 2016 Comcamp 29th All Rights Reserved. Designed and developed by CPE#30
     </div>
    </div>
</div>
</div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-parallax/1.1.3/jquery-parallax-min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
  <script src="https://npmcdn.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
  <script src="./js/smooth-scroll.min.js"></script>
  <script src="./js/scrolling.js"></script>
  <script src="./js/js.js"></script>
  <script src="https://code.createjs.com/createjs-2015.11.26.min.js"></script>
  <script src="./js/Scene1.js"></script> 
  <!-- <script src="./js/Scene2.js"></script> -->
  <script async src="http://platform.twitter.com/widgets.js" charset="utf-8"></script>
<!--   <script src="./js/thief.js"></script> -->
</body>
</html>