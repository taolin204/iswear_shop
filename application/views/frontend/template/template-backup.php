<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url().'style/bootstrap/3.3.7/dist/css/bootstrap.min.css'; ?>" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="<?php echo base_url().'style/bootstrap/3.3.7/assets/css/ie10-viewport-bug-workaround.css'; ?>" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?php echo base_url().'style/bootstrap/3.3.7/assets/js/ie-emulation-modes-warning.js'; ?>"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="<?php echo base_url().'style/carousel.css'; ?>">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
      .jumbotron{
        background:url(<?php echo base_url().'style/images/bg.jpg'; ?>);
      }
    </style>


  </head>
  <!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Project name</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li role="separator" class="divider"></li>
                    <li class="dropdown-header">Nav header</li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>


    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Example headline.</h1>
              <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>One more for good measure.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
    <style type="text/css">

@media (max-width: 767px){
.yb_conct{ display: none;}

}


.clear:after {
  content: '\20';
  display: block;
  height: 0;
  clear: both;
  visibility: hidden;
}
/*固定的悬浮窗*/
.yb_conct {
  position: fixed;
  z-index: 9999999;
  top: 30%;
  right: -127px;
  cursor: pointer;
  transition: all .3s ease;
}
.yb_bar ul li {
  width: 180px;
  height: 53px;
  font: 16px/53px 'Microsoft YaHei';
  color: #fff;
  text-indent: 54px;
  margin-bottom: 3px;
  border-radius: 3px;
  transition: all .5s ease;
  overflow: hidden;
}
.yb_bar .yb_top {
  background: #8d4f49 url(http://www.dbzgia.com/source/home-assets/images/fixCont.png) no-repeat 0 0;
}
.yb_bar .yb_phone {
  background: #8d4f49 url(http://www.dbzgia.com/source/home-assets/images/fixCont.png) no-repeat 0 -57px;
}
.yb_bar .yb_QQ {
  text-indent: 0;
  background: #8d4f49 url(http://www.dbzgia.com/source/home-assets/images/fixCont.png) no-repeat 0 -113px;
}
.yb_bar .yb_ercode {
  /*height:200px;*/

  background: #8d4f49 url(http://www.dbzgia.com/source/home-assets/images/fixCont.png) no-repeat 0 -169px;
}
.hd_qr {
  padding: 0 29px 25px 29px;
}
.yb_QQ a {
  display: block;
  text-indent: 54px;
  width: 100%;
  height: 100%;
  color: #fff;
}
</style>
<script type="text/javascript">

  $(function() {
    // 悬浮窗口
    $(".yb_conct").hover(function() {
      $(".yb_conct").css("right", "5px");
      $(".yb_bar .yb_ercode").css('height', '200px');
    }, function() {
      $(".yb_conct").css("right", "-127px");
      $(".yb_bar .yb_ercode").css('height', '53px');
    });
    // 返回顶部
    $(".yb_top").click(function() {
      $("html,body").animate({
        'scrollTop': '0px'
      }, 300)
    });
  });
</script>
<script type="text/javascript">
     $(function(){
        $('.carousel-top').carousel({
        interval: 6000
        });
        $('.carousel-course').carousel({
        interval: 4000000
        });
     });

     var toppos = 0; 
      $(window).scroll(function(){
       var scrollTop = $(window).scrollTop();
       if(scrollTop > toppos){
         $("#nav").addClass("navbar3");
         $("#nav .collapse .navbar-nav").addClass("navbar-nav2").siblings().removeClass("navbar-nav");
         return;
       } else {
        $("#nav").removeClass("navbar3");
        $("#nav .collapse .navbar-nav2").removeClass("navbar-nav2").addClass("navbar-nav").siblings();

       }
       toppos = scrollTop;
      });

    </script>
<link href="http://www.dbzgia.com/source/home-assets/css/head.css" rel="stylesheet">


<div class="container">
  <div class="gia-top">
    <h1>裸钻报价查询</h1>
    <p>Dbzgia Diamonds Search Engine</p>
    <li></li>
  </div>
</div>
<div class="news-main">
  <div class="news-main-top">
     <div class="container">
         <div class="row">
           <div class="col-xs-offset-1 col-xs-11 col-md-offset-4 col-md-4">
              <div class="row news-main-bt">
                 <div class="col-xs-5 col-md-5 col-md-offset-1 more"><a href="javascript:void" class="">裸钻查询</a></div>
                 <div class="col-xs-5 col-md-5"><a href="http://www.dbzgia.com/home/fancydiamond.html">彩钻查询</a></div>
              </div>
           </div>
         </div>
     </div>
  </div>
  <div class="container naked-main-cont">
     <div class="row naked-top">
        <li class="col-lg-12 naked-top-1">
          <div class="row">
            <div class="col-lg-1 naked-top-bt">形状</div>
            <div class="col-lg-10">
               <div class="row condition" id="shape">
                  <div class="col-lg-1 col-sm-1 col-xs-2"><a class="cover"><img src="http://www.dbzgia.com/source/home-assets/images/img/0.png" /></a></div>
                  <div class="col-lg-1 col-sm-1 col-xs-2"><a value="Round" title="圆形" ><img src="http://www.dbzgia.com/source/home-assets/images/img/1.png" /></a></div>
                  <div class="col-lg-1 col-sm-1 col-xs-2"><a value="Radiant" title="雷蒂恩" ><img src="http://www.dbzgia.com/source/home-assets/images/img/2.png" /></a></div>
                  <div class="col-lg-1 col-sm-1 col-xs-2"><a value="Princess" title="公主方" ><img src="http://www.dbzgia.com/source/home-assets/images/img/3.png" /></a></div>
                  <div class="col-lg-1 col-sm-1 col-xs-2"><a value="Emerald" title="祖母绿" ><img src="http://www.dbzgia.com/source/home-assets/images/img/4.png" /></a></div>
                  <div class="col-lg-1 col-sm-1 col-xs-2"><a value="Pear" title="水滴形" ><img src="http://www.dbzgia.com/source/home-assets/images/img/5.png" /></a></div>
                  <div class="col-lg-1 col-sm-1 col-xs-2"><a value="Heart" title="心形" ><img src="http://www.dbzgia.com/source/home-assets/images/img/6.png" /></a></div>
                  <div class="col-lg-1 col-sm-1 col-xs-2"><a value="Asscher" title="阿斯切" ><img src="http://www.dbzgia.com/source/home-assets/images/img/7.png" /></a></div>
                  <div class="col-lg-1 col-sm-1 col-xs-2"><a value="Cushion" title="垫型" ><img src="http://www.dbzgia.com/source/home-assets/images/img/8.png" /></a></div>
                  <div class="col-lg-1 col-sm-1 col-xs-2"><a value="Marquise" title="马眼形" ><img src="http://www.dbzgia.com/source/home-assets/images/img/9.png" /></a></div>
                  <div class="col-lg-1 col-sm-1 col-xs-2"><a value="Oval" title="椭圆形" ><img src="http://www.dbzgia.com/source/home-assets/images/img/10.png" /></a></div>
                  <div class="col-lg-1 col-sm-1 col-xs-2"><a value="Triangle" title="三角形" ><img src="http://www.dbzgia.com/source/home-assets/images/img/11.png" /></a></div>
               </div>
            </div>
          </div>
        </li>
        <li class="col-lg-12 naked-top-2">
           <div class="row">
               <div class="col-lg-1 naked-top-bt">颜色</div>
                <div class="col-lg-10">
                   <div class="row condition" id="color">
                      <div class="col-lg-1 col-sm-1 col-xs-2"><a class="cover">全部</a></div>
                      <div class="col-lg-1 col-sm-1 col-xs-2 "><a value="D" >D</a></div>
                      <div class="col-lg-1 col-sm-1 col-xs-2 "><a value="E" >E</a></div>
                      <div class="col-lg-1 col-sm-1 col-xs-2 "><a value="F" >F</a></div>
                      <div class="col-lg-1 col-sm-1 col-xs-2 "><a value="G" >G</a></div>
                      <div class="col-lg-1 col-sm-1 col-xs-2 "><a value="H" >H</a></div>
                      <div class="col-lg-1 col-sm-1 col-xs-2 "><a value="I" >I</a></div>
                      <div class="col-lg-1 col-sm-1 col-xs-2 "><a value="J" >J</a></div>
                      <div class="col-lg-1 col-sm-1 col-xs-2 "><a value="K" >K</a></div>
                      <div class="col-lg-1 col-sm-1 col-xs-2 "><a value="L" >L</a></div>
                      <div class="col-lg-1 col-sm-1 col-xs-2 "><a value="M" >M</a></div>
                      <div class="col-lg-1 col-sm-1 col-xs-2 "><a value="N" >N-Z</a></div>
                   </div>
                </div>
            </div>
        </li>
        <li class="col-lg-12 naked-top-2">
           <div class="row">
               <div class="col-lg-1 naked-top-bt">净度</div>
                <div class="col-lg-10">
                   <div class="row condition" id="clarity">
                      <div class="col-lg-1 col-sm-1 col-xs-2 "><a class="cover">全部</a></div>
                      <div class="col-lg-1 col-sm-1 col-xs-2 "><a value="FL" >FL</a></div>
                      <div class="col-lg-1 col-sm-1 col-xs-2 "><a value="IF" >IF</a></div>
                      <div class="col-lg-1 col-sm-1 col-xs-2 "><a value="VVS1" >VVS1</a></div>
                      <div class="col-lg-1 col-sm-1 col-xs-2"><a value="VVS2" >VVS2</a></div>
                      <div class="col-lg-1 col-sm-1 col-xs-2 "><a value="VS1" >VS1</a></div>
                      <div class="col-lg-1 col-sm-1 col-xs-2 "><a value="VS2" >VS2</a></div>
                      <div class="col-lg-1 col-sm-1 col-xs-2 "><a value="SI1" >SI1</a></div>
                      <div class="col-lg-1 col-sm-1 col-xs-2 "><a value="SI2" >SI2</a></div>
                      <div class="col-lg-1 col-sm-1 col-xs-2 "><a value="SI3" >SI3</a></div>
                      <div class="col-lg-1 col-sm-1 col-xs-2 col-xs-offset-1 col-lg-offset-0 col-sm-offset-0"><a value="I1" >I1</a></div>
                   </div>
                </div>
            </div>
        </li>
        
        <li class="col-lg-6 naked-top-2">
           <div class="row">
               <div class="col-lg-2 naked-top-bt">切工</div>
                <div class="col-lg-10">
                   <div class="row condition" id="cut">
                      <div class="col-lg-2 col-sm-2 col-xs-2 "><a class="cover">全部</a></div>
                      <!-- <div class="col-lg-2 col-sm-2 col-xs-2 "><a>Ideal</a></div> -->
                      <div class="col-lg-2 col-sm-2 col-xs-2 quickEx"><a value="EX" >EX</a></div>
                      <div class="col-lg-2 col-sm-2 col-xs-2 quickVg"><a value="VG" >VG</a></div>
                      <div class="col-lg-2 col-sm-2 col-xs-2 "><a value="GD" >GD</a></div>
                      <!-- <div class="col-lg-2 col-sm-2 col-xs-2 "><a>Fair</a></div> -->
                   </div>
                </div>
            </div>
        </li>
        
        <li class="col-lg-6 naked-top-2">
           <div class="row">
               <div class="col-lg-2 naked-top-bt">抛光</div>
                <div class="col-lg-10">
                   <div class="row condition" id="polish">
                      <div class="col-lg-2 col-sm-2 col-xs-2 "><a class="cover">全部</a></div>
                      <!-- <div class="col-lg-2 col-sm-2 col-xs-2 "><a>Ideal</a></div> -->
                      <div class="col-lg-2 col-sm-2 col-xs-2 quickEx"><a value="EX" >EX</a></div>
                      <div class="col-lg-2 col-sm-2 col-xs-2 quickVg"><a value="VG" >VG</a></div>
                      <div class="col-lg-2 col-sm-2 col-xs-2 "><a value="GD" >GD</a></div>                
                      <!-- <div class="col-lg-2 col-sm-2 col-xs-2 "><a>Fair</a></div> -->
                   </div>
                </div>
            </div>
        </li>
        
        <li class="col-lg-6 naked-top-2">
           <div class="row">
               <div class="col-lg-2 naked-top-bt">对称</div>
                <div class="col-lg-10">
                   <div class="row condition" id="symmetry">
                      <div class="col-lg-2 col-sm-2 col-xs-2 "><a class="cover">全部</a></div>
                      <!-- <div class="col-lg-2 col-sm-2 col-xs-2 "><a>Ideal</a></div> -->
                      <div class="col-lg-2 col-sm-2 col-xs-2 quickEx"><a value="EX" >EX</a></div>
                      <div class="col-lg-2 col-sm-2 col-xs-2 quickVg"><a value="VG" >VG</a></div>
                      <div class="col-lg-2 col-sm-2 col-xs-2 "><a value="GD" >GD</a></div> 
                      <!-- <div class="col-lg-2 col-sm-2 col-xs-2 "><a>Fair</a></div> -->
                   </div>
                </div>
            </div>
        </li>
        
        <li class="col-lg-6 naked-top-2 naked-top-3">
           <div class="row">
               <div class="col-lg-2 naked-top-bt">荧光</div>
                <div class="col-lg-10">
                   <div class="row condition" id="fluor">
                      <div class="col-lg-2 col-sm-2 col-xs-4 quanbu"><a class="cover">全部</a></div>
                      <div class="col-lg-1 col-sm-2 col-xs-4 "><a value="N" >None</a></div>
                      <div class="col-lg-1 col-sm-2 col-xs-4 "><a value="F" >Faint</a></div>
                      <div class="col-lg-2 col-sm-2 col-xs-4 "><a value="M" >Medium</a></div>
                      <div class="col-lg-2 col-sm-2 col-xs-4 "><a value="S" >Strong</a></div>
                      <div class="col-lg-3 col-sm-2 col-xs-4 "><a value="VS" >Very Strong</a></div>
                   </div>
                </div>
            </div>
        </li>
        
        <li class="col-lg-12 naked-top-2">
           <div class="row">
               <div class="col-lg-1 naked-top-bt">证书</div>
                <div class="col-lg-10">
                   <div class="row condition" id="lab">
                      <div class="col-lg-1 col-sm-1 col-xs-2 "><a class="cover">全部</a></div>
                      <div class="col-lg-1 col-sm-1 col-xs-2 "><a value="GIA" >GIA</a></div>
                      <div class="col-lg-1 col-sm-1 col-xs-2 "><a value="AGS" >AGS</a></div>
                      <div class="col-lg-1 col-sm-1 col-xs-2 "><a value="IGI" >IGI</a></div>
                      <div class="col-lg-1 col-sm-1 col-xs-2 "><a value="HRD" >HRD</a></div>
                      <div class="col-lg-1 col-sm-1 col-xs-2 "><a value="EGL" >EGL</a></div>
                      <div class="col-lg-1 col-sm-1 col-xs-2 "><a value="NGTC" >NGTC</a></div>
                      <!-- <div class="col-lg-2 col-sm-2 col-xs-3 gdsj"><a>广东省检</a></div> -->
                      <!-- <div class="col-lg-2 col-sm-2 col-xs-4 "><a>不带证书BAC</a></div> -->
                   </div>
                </div>
            </div>
        </li>

        <li class="col-lg-12 naked-top-2">
           <div class="row">
               <div class="col-lg-1 naked-top-bt">快速搜索</div>
                <div class="col-lg-10">
                   <div class="row condition" id="quick">
                      <div class="col-lg-1 col-sm-1 col-xs-3 "><a id="quickCarat">克拉钻</a></div>
                      <div class="col-lg-1 col-sm-1 col-xs-2 "><a id="quickEx">3EX</a></div>
                      <div class="col-lg-1 col-sm-1 col-xs-2 "><a id="quickVg">3VG</a></div>
                      <div class="col-lg-2 col-sm-2 col-xs-4 "><a id="quickHa" >八心八箭</a></div>
                   </div>
                </div>
            </div>
        </li>
        
        <li class="col-lg-6 naked-top-2">
           <div class="row">
               <div class="col-lg-2 naked-top-bt" style="line-height:31px;">重量</div>
                <div class="col-lg-10">
                   <div class="row">
                      <div class="col-lg-3 col-sm-2 col-xs-4">
                        <select class="form-control" name="carat">
                          <option value="">选择克拉重量</option>
                          <!--<option value="0-0.01" >0-0.01 CT</option>
                          <option value="0.01-0.03" >0.01-0.03 CT</option>
                          <option value="0.04-0.07" >0.04-0.07 CT</option>-->
                          <option value="0.08-0.14" >0.08-0.14 CT</option>
                          <option value="0.15-0.17" >0.15-0.17 CT</option>
                          <option value="0.18-0.22" >0.18-0.22 CT</option>
                          <option value="0.23-0.29" >0.23-0.29 CT</option>
                          <option value="0.30-0.35" >0.30-0.35 CT</option>
                          <option value="0.40-0.45" >0.40-0.45 CT</option>
                          <option value="0.50-0.55" >0.50-0.55 CT</option>
                          <option value="0.60-0.65" >0.60-0.65 CT</option>
                          <option value="0.70-0.75" >0.70-0.75 CT</option>
                          <option value="0.80-0.89" >0.80-0.89 CT</option>
                          <option value="0.90-0.99" >0.90-0.99 CT</option>
                          <option value="1.00-1.019" >1.00-1.01 CT</option>
                          <option value="1.00-1.09" >1.00-1.09 CT</option>
                          <option value="1.10-1.49" >1.10-1.49 CT</option>
                          <option value="1.50-1.99" >1.50-1.99 CT</option>
                          <option value="2.00-2.09" >2.00-2.09 CT</option>
                          <option value="3.00-3.09" >3.00-3.09 CT</option>
                          <option value="4.00-4.99" >4.00-4.99 CT</option>
                          <option value="5.00-1000" >5.00CT以上</option>
                        </select>
                      </div>
                      <div class="col-lg-3 col-xs-offset-1 col-sm-2 col-xs-3 "><input type="text" class="form-control" name="minCarat"  placeholder="0"></div>
                      <div class="col-lg-1 col-sm-1 col-xs-1 " style="text-align:center; line-height:31px;">-</div>
                      <div class="col-lg-3 col-sm-2 col-xs-3 "><input type="text" class="form-control" name="maxCarat"  placeholder="1000"></div>
                   </div>
                </div>
            </div>
        </li>
        
        <li class="col-lg-6 naked-top-2">
           <div class="row">
               <div class="col-lg-2 naked-top-bt" style="line-height:31px;">总价</div>
                <div class="col-lg-10">
                   <div class="row">
                      <div class="col-lg-3 col-sm-2 col-xs-4">
                        <select class="form-control" name="price">
                          <option value="">选择总价范围</option>
                          <option value="1000-5000" >1000-5000</option>
                          <option value="5000-10000" >5000-10000</option>
                          <option value="10000-50000" >10000-50000</option>
                          <option value="50000-100000" >5万-10万</option>
                          <option value="100000-200000" >10万-20万</option>
                          <option value="200000-400000" >20万-40万</option>
                          <option value="400000-800000" >40万-80万</option>
                          <option value="800000-1600000" >80万-160万</option>
                          <option value="1600000-10000000" >160万以上</option>
                        </select>
                      </div>
                      <div class="col-lg-3 col-xs-offset-1 col-sm-2 col-xs-3 "><input type="text" class="form-control" name="minPrice"  value="1"></div>
                      <div class="col-lg-1 col-sm-1 col-xs-1 " style="text-align:center; line-height:31px;">-</div>
                      <div class="col-lg-3 col-sm-2 col-xs-3 "><input type="text" class="form-control" name="maxPrice"  placeholder="5000"></div>
                   </div>
                </div>
            </div>
        </li>
        
        <li class="col-lg-6 naked-top-2">
           <div class="row">
               <div class="col-lg-3 naked-top-bt" style="line-height:31px;">货号或证书号</div>
                <div class="col-lg-5">
                   <input type="text" class="form-control" name="report_no" >
                </div>
            </div>
        </li>
        
        <li class="col-lg-6 naked-top-2">
           <div class="row">
               <div class="col-lg-2 naked-top-bt"  style="height:34px;">货源</div>
                <div class="col-lg-10">
                   <div class="row condition" id="stock">
                      <div class="col-lg-2 col-sm-2 col-xs-2 "><a class="cover">全部</a></div>
                      <div class="col-lg-2 col-sm-2 col-xs-2 "><a value="现货" >仅现货</a></div>
                   </div>
                </div>
            </div>
        </li>
        
        <div class="col-lg-6 col-lg-offset-3 naked-top-foot">
           <div class="row diamond-ss">
             <div class="col-lg-12 col-xs-12"><button class="btn btn-primary  col-lg-5 col-xs-12" id="searchBtn"><span class="icon-ss"></span>搜索 Search </button><button class="btn btn-default col-lg-offset-2 col-lg-5 col-xs-12" id="resetBtn"><span class="icon-ss2"></span>重置 Reset  </button></div>
             <div class="col-lg-12 col-xs-12 naked-top-foot1"><li class="chaxun">共找到<span>153048</span>颗裸钻，今日新增<span>0</span>个</li></div>
          </div>
        </div>
     </div>
           
    <div class="container saixjg">
      <div class="row saixjg-topk">
         <div class="col-lg-1 hidden-xs checkbox">       
            <label>
              <input type="checkbox" name="selectAllLg"> 全选
            </label>
         </div>
         <!-- <div class="hidden-lg col-xs-2 checkbox">       
            <label>
              <input type="checkbox" name="selectAllXs"> 全选
            </label>
         </div> -->
              <div class="col-lg-1 col-lg-offset-6 col-xs-4 col-xs-offset-0" style="text-align:right;">
            展现
         </div>
         <div class="col-lg-1 col-xs-2">
            <select class="form-control" name="perPage">
              <option value="25">25条</option>
              <option value="50" >50条</option>
              <option value="100" >100条</option>
            </select>
         </div>
         <div class="col-lg-1 col-xs-2" style="text-align:right;">
            排序
         </div>
         <div class="col-lg-1 col-xs-2"> 
            <select class="form-control" name="orderBy">
              <option value="inputtime">时间</option>
              <option value="amount" >价格</option>
              <option value="lab" >证书</option>
              <option value="rap_back" selected="selected">折扣</option>
            </select>
         </div>
      </div>
    </div>
    
    <div class="container naked-main">
     <div class="row">
      <table class="table table-bordered table-condensed" width="100%" border="1" style="text-align:center;" id="dataTableLg">
          <tr style="background:#aaa; color:#fff;">
            <td>选择</td>
            <td>形状</td>
            <td>重量</td>
            <td>颜色</td>
            <td>净度</td>
            <td>切工</td>
            <td>抛光</td>
            <td>对称</td>
            <td>荧光</td>
            <td>心箭</td>
            <td>台面</td>
            <td>奶油</td>
            <td>咖色</td>
            <td>尺寸</td>
            <td>证书</td>
            <!--  <td>证书号</td>  -->
            <td>货号</td>
            <td>更新</td>
                      </tr>
          
                    <tr>
            <td><input type="checkbox" title="7176130"></td>
            <td>垫形</td>
            <td>4.01</td>
            <td>D</td>
            <td>VVS2</td>
            <td>GD</td>
            <td>EX</td>
            <td>VG</td>
            <td>FL4</td>
            <td></td>
            <td>0</td>
            <td>待查</td>
            <td>待查</td>
            <td></td>
            <td><a href="http://www.dbzgia.com/home/cert?carat=4.01&report_no=6187006912"  target="_blank" title="6187006912">GIA</a></td>
      <!--  <td>6187006912</td>  -->
            <td>AO-64310065</td>
            <td>3天前</td>
                      </tr>
          
                    <tr>
            <td><input type="checkbox" title="7368166"></td>
            <td>垫形</td>
            <td>4.06</td>
            <td>D</td>
            <td>VVS2</td>
            <td>GD</td>
            <td>EX</td>
            <td>EX</td>
            <td>FL3</td>
            <td></td>
            <td>0</td>
            <td>EX</td>
            <td>无咖</td>
            <td></td>
            <td><a href="http://www.dbzgia.com/home/cert?carat=4.06&report_no=1182058614"  target="_blank" title="1182058614">GIA</a></td>
      <!--  <td>1182058614</td>  -->
            <td>AO-64310089</td>
            <td>3天前</td>
                      </tr>
          
                    <tr>
            <td><input type="checkbox" title="7424629"></td>
            <td>祖母绿</td>
            <td>4.82</td>
            <td>D</td>
            <td>FL</td>
            <td>GD+</td>
            <td>EX</td>
            <td>VG</td>
            <td>FL4</td>
            <td></td>
            <td>0</td>
            <td>待查</td>
            <td>待查</td>
            <td></td>
            <td><a href="http://www.dbzgia.com/home/cert?carat=4.82&report_no=1186067253"  target="_blank" title="1186067253">GIA</a></td>
      <!--  <td>1186067253</td>  -->
            <td>AO-64310061</td>
            <td>3天前</td>
                      </tr>
          
                    <tr>
            <td><input type="checkbox" title="2292571"></td>
            <td>圆形</td>
            <td>1.28</td>
            <td>Y</td>
            <td>VS2</td>
            <td>VG</td>
            <td>EX</td>
            <td>VG</td>
            <td>F</td>
            <td>NO</td>
            <td>55</td>
            <td>无奶</td>
            <td>深咖</td>
            <td>6.87</td>
            <td><a href="http://www.dbzgia.com/home/cert?carat=1.28&report_no=2166658774"  target="_blank" title="2166658774">GIA</a></td>
      <!--  <td>2166658774</td>  -->
            <td>HI-116702101</td>
            <td>3天前</td>
                      </tr>
          
                    <tr>
            <td><input type="checkbox" title="6508096"></td>
            <td>祖母绿</td>
            <td>4.01</td>
            <td>E</td>
            <td>VS2</td>
            <td>EX</td>
            <td>EX</td>
            <td>EX</td>
            <td>FL4</td>
            <td></td>
            <td>0</td>
            <td>待查</td>
            <td>待查</td>
            <td></td>
            <td><a href="http://www.dbzgia.com/home/cert?carat=4.01&report_no=2175750208"  target="_blank" title="2175750208">GIA</a></td>
      <!--  <td>2175750208</td>  -->
            <td>AO-63210077</td>
            <td>3天前</td>
                      </tr>
          
                    <tr>
            <td><input type="checkbox" title="7352970"></td>
            <td>SQ RADIANT</td>
            <td>5.06</td>
            <td>F</td>
            <td>VS1</td>
            <td></td>
            <td>EX</td>
            <td>EX</td>
            <td>VST</td>
            <td></td>
            <td>65</td>
            <td>待查</td>
            <td>待查</td>
            <td>9.55</td>
            <td><a href="http://www.dbzgia.com/home/cert?carat=5.06&report_no=5182060500"  target="_blank" title="5182060500 L">GIA</a></td>
      <!--  <td>5182060500 L</td>  -->
            <td>XWP-5821150265</td>
            <td>2天前</td>
                      </tr>
          
                    <tr>
            <td><input type="checkbox" title="2292509"></td>
            <td>圆形</td>
            <td>1.15</td>
            <td>Y</td>
            <td>SI2</td>
            <td>EX</td>
            <td>EX</td>
            <td>EX</td>
            <td>N</td>
            <td>DF</td>
            <td>58</td>
            <td>无奶</td>
            <td>浅咖</td>
            <td>6.69</td>
            <td><a href="http://www.dbzgia.com/home/cert?carat=1.15&report_no=5176559610"  target="_blank" title="5176559610">GIA</a></td>
      <!--  <td>5176559610</td>  -->
            <td>HI-122902302</td>
            <td>3天前</td>
                      </tr>
          
                    <tr>
            <td><input type="checkbox" title="2292689"></td>
            <td>圆形</td>
            <td>1.71</td>
            <td>U</td>
            <td>SI1</td>
            <td>VG</td>
            <td>EX</td>
            <td>VG</td>
            <td>S</td>
            <td>NO</td>
            <td>56</td>
            <td>无奶</td>
            <td>浅咖</td>
            <td>7.53</td>
            <td><a href="http://www.dbzgia.com/home/cert?carat=1.71&report_no=2176557386"  target="_blank" title="2176557386">GIA</a></td>
      <!--  <td>2176557386</td>  -->
            <td>HI-122701001</td>
            <td>3天前</td>
                      </tr>
          
                    <tr>
            <td><input type="checkbox" title="2292695"></td>
            <td>圆形</td>
            <td>1.76</td>
            <td>Y</td>
            <td>SI1</td>
            <td>VG</td>
            <td>EX</td>
            <td>VG</td>
            <td>S</td>
            <td>DF</td>
            <td>57</td>
            <td>无奶</td>
            <td>浅咖</td>
            <td>7.58</td>
            <td><a href="http://www.dbzgia.com/home/cert?carat=1.76&report_no=2176333098"  target="_blank" title="2176333098">GIA</a></td>
      <!--  <td>2176333098</td>  -->
            <td>HI-121202201</td>
            <td>3天前</td>
                      </tr>
          
                    <tr>
            <td><input type="checkbox" title="2292694"></td>
            <td>圆形</td>
            <td>1.76</td>
            <td>U</td>
            <td>SI2</td>
            <td>EX</td>
            <td>EX</td>
            <td>EX</td>
            <td>M</td>
            <td>NO</td>
            <td>56</td>
            <td>无奶</td>
            <td>浅咖</td>
            <td>7.7</td>
            <td><a href="http://www.dbzgia.com/home/cert?carat=1.76&report_no=1169658699"  target="_blank" title="1169658699">GIA</a></td>
      <!--  <td>1169658699</td>  -->
            <td>HI-116003401</td>
            <td>3天前</td>
                      </tr>
          
                    <tr>
            <td><input type="checkbox" title="7368952"></td>
            <td>圆形</td>
            <td>1.51</td>
            <td>U</td>
            <td>SI1</td>
            <td>VG</td>
            <td>EX</td>
            <td>G</td>
            <td>N</td>
            <td>DF</td>
            <td>57</td>
            <td>无奶</td>
            <td>浅咖</td>
            <td>7.2</td>
            <td><a href="http://www.dbzgia.com/home/cert?carat=1.51&report_no=1179414520"  target="_blank" title="1179414520">GIA</a></td>
      <!--  <td>1179414520</td>  -->
            <td>HI-121900401</td>
            <td>3天前</td>
                      </tr>
          
                    <tr>
            <td><input type="checkbox" title="6792197"></td>
            <td>雷蒂恩</td>
            <td>3.03</td>
            <td>G</td>
            <td>IF</td>
            <td>GD</td>
            <td>EX</td>
            <td>EX</td>
            <td>FL3</td>
            <td></td>
            <td>0</td>
            <td>待查</td>
            <td>待查</td>
            <td></td>
            <td><a href="http://www.dbzgia.com/home/cert?carat=3.03&report_no=5172889769"  target="_blank" title="5172889769">GIA</a></td>
      <!--  <td>5172889769</td>  -->
            <td>AO-64340113</td>
            <td>3天前</td>
                      </tr>
          
                    <tr>
            <td><input type="checkbox" title="7368285"></td>
            <td>祖母绿</td>
            <td>5.01</td>
            <td>D</td>
            <td>VS2</td>
            <td>VG+</td>
            <td>EX</td>
            <td>VG</td>
            <td>FL4</td>
            <td></td>
            <td>0</td>
            <td>VG</td>
            <td>无咖</td>
            <td></td>
            <td><a href="http://www.dbzgia.com/home/cert?carat=5.01&report_no=2185058611"  target="_blank" title="2185058611">GIA</a></td>
      <!--  <td>2185058611</td>  -->
            <td>AO-64300007</td>
            <td>3天前</td>
                      </tr>
          
                    <tr>
            <td><input type="checkbox" title="7192331"></td>
            <td>L RADIANT</td>
            <td>4.04</td>
            <td>E</td>
            <td>VS2</td>
            <td></td>
            <td>VG</td>
            <td>EX</td>
            <td>VST</td>
            <td></td>
            <td>66</td>
            <td>VG</td>
            <td>待查</td>
            <td>10.1</td>
            <td><a href="http://www.dbzgia.com/home/cert?carat=4.04&report_no=2171735536"  target="_blank" title="2171735536 L">GIA</a></td>
      <!--  <td>2171735536 L</td>  -->
            <td>XWP-5817280035</td>
            <td>2天前</td>
                      </tr>
          
                    <tr>
            <td><input type="checkbox" title="7367604"></td>
            <td>祖母绿</td>
            <td>3.01</td>
            <td>D</td>
            <td>VVS1</td>
            <td>VG</td>
            <td>EX</td>
            <td>EX</td>
            <td>VST</td>
            <td></td>
            <td>0</td>
            <td>待查</td>
            <td>待查</td>
            <td>7.98</td>
            <td><a href="http://www.dbzgia.com/home/cert?carat=3.01&report_no=2171750328"  target="_blank" title="2171750328">GIA</a></td>
      <!--  <td>2171750328</td>  -->
            <td>KX-28506</td>
            <td>1天前</td>
                      </tr>
          
                    <tr>
            <td><input type="checkbox" title="2292688"></td>
            <td>圆形</td>
            <td>1.70</td>
            <td>U</td>
            <td>VVS1</td>
            <td>EX</td>
            <td>EX</td>
            <td>EX</td>
            <td>M</td>
            <td>D</td>
            <td>56</td>
            <td>无奶</td>
            <td>浅咖</td>
            <td>7.62</td>
            <td><a href="http://www.dbzgia.com/home/cert?carat=1.70&report_no=2176471699"  target="_blank" title="2176471699">GIA</a></td>
      <!--  <td>2176471699</td>  -->
            <td>HI-122402701</td>
            <td>3天前</td>
                      </tr>
          
                    <tr>
            <td><input type="checkbox" title="7520574"></td>
            <td>阿斯切</td>
            <td>2.00</td>
            <td>E</td>
            <td>SI2</td>
            <td>NONE</td>
            <td>VG</td>
            <td>VG</td>
            <td>Non</td>
            <td></td>
            <td>0</td>
            <td>待查</td>
            <td>待查</td>
            <td>6.99</td>
            <td><a href="javascript:void"  target="_blank" title="113486366">IGI</a></td>
      <!--  <td>113486366</td>  -->
            <td>PWL-110207328504</td>
            <td>2天前</td>
                      </tr>
          
                    <tr>
            <td><input type="checkbox" title="7493426"></td>
            <td>圆形</td>
            <td>4.11</td>
            <td>D</td>
            <td>VVS1</td>
            <td>EX</td>
            <td>EX</td>
            <td>EX</td>
            <td>VS</td>
            <td>NA</td>
            <td>58</td>
            <td>无奶</td>
            <td>无咖</td>
            <td>10.3</td>
            <td><a href="http://www.dbzgia.com/home/cert?carat=4.11&report_no=1233514784"  target="_blank" title="1233514784">GIA</a></td>
      <!--  <td>1233514784</td>  -->
            <td>MP-160384-6</td>
            <td>3天前</td>
                      </tr>
          
                    <tr>
            <td><input type="checkbox" title="7088202"></td>
            <td>水滴形</td>
            <td>3.08</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>61</td>
            <td>待查</td>
            <td>待查</td>
            <td>12.7</td>
            <td><a href="http://www.dbzgia.com/home/cert?carat=3.08&report_no=2155430241"  target="_blank" title="2155430241">GIA</a></td>
      <!--  <td>2155430241</td>  -->
            <td>KX-98038</td>
            <td>1天前</td>
                      </tr>
          
                    <tr>
            <td><input type="checkbox" title="7519621"></td>
            <td>祖母绿</td>
            <td>0.90</td>
            <td>F</td>
            <td>SI2</td>
            <td>NONE</td>
            <td>EX</td>
            <td>VG</td>
            <td>Fnt</td>
            <td></td>
            <td>0</td>
            <td>待查</td>
            <td>待查</td>
            <td>6.02</td>
            <td><a href="http://www.dbzgia.com/home/cert?carat=0.90&report_no=6232140148"  target="_blank" title="6232140148">GIA</a></td>
      <!--  <td>6232140148</td>  -->
            <td>PWL-100719440323</td>
            <td>2天前</td>
                      </tr>
          
                    <tr>
            <td><input type="checkbox" title="6144337"></td>
            <td>雷蒂恩</td>
            <td>3.07</td>
            <td>D</td>
            <td>VVS1</td>
            <td>EX</td>
            <td>EX</td>
            <td>EX</td>
            <td>STG</td>
            <td></td>
            <td>0</td>
            <td>待查</td>
            <td>无咖</td>
            <td>9.45</td>
            <td><a href="http://www.dbzgia.com/home/cert?carat=3.07&report_no=2236140537"  target="_blank" title="2236140537">GIA</a></td>
      <!--  <td>2236140537</td>  -->
            <td>KX-547410631</td>
            <td>1天前</td>
                      </tr>
          
                    <tr>
            <td><input type="checkbox" title="3954403"></td>
            <td>圆形</td>
            <td>1.22</td>
            <td>W</td>
            <td>SI1</td>
            <td>EX</td>
            <td>EX</td>
            <td>VG</td>
            <td>S</td>
            <td>No</td>
            <td>56</td>
            <td>无奶</td>
            <td>深咖</td>
            <td>6.82</td>
            <td><a href="http://www.dbzgia.com/home/cert?carat=1.22&report_no=5226185894"  target="_blank" title="5226185894">GIA</a></td>
      <!--  <td>5226185894</td>  -->
            <td>HI-147404402</td>
            <td>3天前</td>
                      </tr>
          
                    <tr>
            <td><input type="checkbox" title="7496595"></td>
            <td>祖母绿</td>
            <td>3.01</td>
            <td>F</td>
            <td>VVS2</td>
            <td>GD</td>
            <td>EX</td>
            <td>EX</td>
            <td>FL4</td>
            <td></td>
            <td>0</td>
            <td>待查</td>
            <td>待查</td>
            <td></td>
            <td><a href="http://www.dbzgia.com/home/cert?carat=3.01&report_no=2183083056"  target="_blank" title="2183083056">GIA</a></td>
      <!--  <td>2183083056</td>  -->
            <td>AO-64750208</td>
            <td>3天前</td>
                      </tr>
          
                    <tr>
            <td><input type="checkbox" title="6614619"></td>
            <td>祖母绿</td>
            <td>4.01</td>
            <td>D</td>
            <td>VVS2</td>
            <td></td>
            <td>EX</td>
            <td>EX</td>
            <td>STG</td>
            <td></td>
            <td>64</td>
            <td>待查</td>
            <td>无咖</td>
            <td>10.2</td>
            <td><a href="http://www.dbzgia.com/home/cert?carat=4.01&report_no=2175705468"  target="_blank" title="2175705468 L">GIA</a></td>
      <!--  <td>2175705468 L</td>  -->
            <td>XWP-2816980112</td>
            <td>2天前</td>
                      </tr>
          
                    <tr>
            <td><input type="checkbox" title="7519604"></td>
            <td>祖母绿</td>
            <td>1.00</td>
            <td>E</td>
            <td>SI2</td>
            <td>NONE</td>
            <td>EX</td>
            <td>VG</td>
            <td>Non</td>
            <td></td>
            <td>0</td>
            <td>待查</td>
            <td>待查</td>
            <td>6.44</td>
            <td><a href="http://www.dbzgia.com/home/cert?carat=1.00&report_no=2175655682"  target="_blank" title="2175655682">GIA</a></td>
      <!--  <td>2175655682</td>  -->
            <td>PWL-100720038858</td>
            <td>2天前</td>
                      </tr>
                  </table>
    
      </div>
    </div>
    
    <div  class="container naked-main2">
        <div class="row">
                 <li><a href="http://www.dbzgia.com/home/cert?carat=4.01&report_no=6187006912"  target="_blank">
             <table class="table table-bordered" width="100%" border="1" style="text-align:center;">
                  <tr>
                    <td></td>
                    <td>垫形</td>
                    <td>4.01</td>
                    <td>D</td>
                    <td>VVS2</td>
                    <td>GD</td>
                    <td>EX</td>
                    <td>VG</td>   
                                      </tr>
                  <tr>
                    <td><input type="checkbox" class="hidden-xs"></td>
                    <td>FL4</td>
                    <td>奶咖：</td>
                    <td>待查</td>
                    <td>待查</td>   
                    <td colspan="3">AO-64310065</td>
                                      </tr>
                  <tr>
                    <td></td>
                    <td>φ</td>
                    <td>0</td>
                    <td></td>
                    <td>GIA</td>
                    <td colspan="3">6187006912</a></td>
                                      </tr>
            </table></a>
          </li>
                 <li><a href="http://www.dbzgia.com/home/cert?carat=4.06&report_no=1182058614"  target="_blank">
             <table class="table table-bordered" width="100%" border="1" style="text-align:center;">
                  <tr>
                    <td></td>
                    <td>垫形</td>
                    <td>4.06</td>
                    <td>D</td>
                    <td>VVS2</td>
                    <td>GD</td>
                    <td>EX</td>
                    <td>EX</td>   
                                      </tr>
                  <tr>
                    <td><input type="checkbox" class="hidden-xs"></td>
                    <td>FL3</td>
                    <td>奶咖：</td>
                    <td>EX</td>
                    <td>无咖</td>   
                    <td colspan="3">AO-64310089</td>
                                      </tr>
                  <tr>
                    <td></td>
                    <td>φ</td>
                    <td>0</td>
                    <td></td>
                    <td>GIA</td>
                    <td colspan="3">1182058614</a></td>
                                      </tr>
            </table></a>
          </li>
                 <li><a href="http://www.dbzgia.com/home/cert?carat=4.82&report_no=1186067253"  target="_blank">
             <table class="table table-bordered" width="100%" border="1" style="text-align:center;">
                  <tr>
                    <td></td>
                    <td>祖母绿</td>
                    <td>4.82</td>
                    <td>D</td>
                    <td>FL</td>
                    <td>GD+</td>
                    <td>EX</td>
                    <td>VG</td>   
                                      </tr>
                  <tr>
                    <td><input type="checkbox" class="hidden-xs"></td>
                    <td>FL4</td>
                    <td>奶咖：</td>
                    <td>待查</td>
                    <td>待查</td>   
                    <td colspan="3">AO-64310061</td>
                                      </tr>
                  <tr>
                    <td></td>
                    <td>φ</td>
                    <td>0</td>
                    <td></td>
                    <td>GIA</td>
                    <td colspan="3">1186067253</a></td>
                                      </tr>
            </table></a>
          </li>
                 <li><a href="http://www.dbzgia.com/home/cert?carat=1.28&report_no=2166658774"  target="_blank">
             <table class="table table-bordered" width="100%" border="1" style="text-align:center;">
                  <tr>
                    <td></td>
                    <td>圆形</td>
                    <td>1.28</td>
                    <td>Y</td>
                    <td>VS2</td>
                    <td>VG</td>
                    <td>EX</td>
                    <td>VG</td>   
                                      </tr>
                  <tr>
                    <td><input type="checkbox" class="hidden-xs"></td>
                    <td>F</td>
                    <td>奶咖：</td>
                    <td>无奶</td>
                    <td>深咖</td>   
                    <td colspan="3">HI-116702101</td>
                                      </tr>
                  <tr>
                    <td></td>
                    <td>φ6.87</td>
                    <td>55</td>
                    <td>A</td>
                    <td>GIA</td>
                    <td colspan="3">2166658774</a></td>
                                      </tr>
            </table></a>
          </li>
                 <li><a href="http://www.dbzgia.com/home/cert?carat=4.01&report_no=2175750208"  target="_blank">
             <table class="table table-bordered" width="100%" border="1" style="text-align:center;">
                  <tr>
                    <td></td>
                    <td>祖母绿</td>
                    <td>4.01</td>
                    <td>E</td>
                    <td>VS2</td>
                    <td>EX</td>
                    <td>EX</td>
                    <td>EX</td>   
                                      </tr>
                  <tr>
                    <td><input type="checkbox" class="hidden-xs"></td>
                    <td>FL4</td>
                    <td>奶咖：</td>
                    <td>待查</td>
                    <td>待查</td>   
                    <td colspan="3">AO-63210077</td>
                                      </tr>
                  <tr>
                    <td></td>
                    <td>φ</td>
                    <td>0</td>
                    <td></td>
                    <td>GIA</td>
                    <td colspan="3">2175750208</a></td>
                                      </tr>
            </table></a>
          </li>
                 <li><a href="http://www.dbzgia.com/home/cert?carat=5.06&report_no=5182060500"  target="_blank">
             <table class="table table-bordered" width="100%" border="1" style="text-align:center;">
                  <tr>
                    <td></td>
                    <td>SQ RADIANT</td>
                    <td>5.06</td>
                    <td>F</td>
                    <td>VS1</td>
                    <td></td>
                    <td>EX</td>
                    <td>EX</td>   
                                      </tr>
                  <tr>
                    <td><input type="checkbox" class="hidden-xs"></td>
                    <td>VST</td>
                    <td>奶咖：</td>
                    <td>待查</td>
                    <td>待查</td>   
                    <td colspan="3">XWP-5821150265</td>
                                      </tr>
                  <tr>
                    <td></td>
                    <td>φ9.55</td>
                    <td>65</td>
                    <td></td>
                    <td>GIA</td>
                    <td colspan="3">5182060500</a></td>
                                      </tr>
            </table></a>
          </li>
                 <li><a href="http://www.dbzgia.com/home/cert?carat=1.15&report_no=5176559610"  target="_blank">
             <table class="table table-bordered" width="100%" border="1" style="text-align:center;">
                  <tr>
                    <td></td>
                    <td>圆形</td>
                    <td>1.15</td>
                    <td>Y</td>
                    <td>SI2</td>
                    <td>EX</td>
                    <td>EX</td>
                    <td>EX</td>   
                                      </tr>
                  <tr>
                    <td><input type="checkbox" class="hidden-xs"></td>
                    <td>N</td>
                    <td>奶咖：</td>
                    <td>无奶</td>
                    <td>浅咖</td>   
                    <td colspan="3">HI-122902302</td>
                                      </tr>
                  <tr>
                    <td></td>
                    <td>φ6.69</td>
                    <td>58</td>
                    <td>A</td>
                    <td>GIA</td>
                    <td colspan="3">5176559610</a></td>
                                      </tr>
            </table></a>
          </li>
                 <li><a href="http://www.dbzgia.com/home/cert?carat=1.71&report_no=2176557386"  target="_blank">
             <table class="table table-bordered" width="100%" border="1" style="text-align:center;">
                  <tr>
                    <td></td>
                    <td>圆形</td>
                    <td>1.71</td>
                    <td>U</td>
                    <td>SI1</td>
                    <td>VG</td>
                    <td>EX</td>
                    <td>VG</td>   
                                      </tr>
                  <tr>
                    <td><input type="checkbox" class="hidden-xs"></td>
                    <td>S</td>
                    <td>奶咖：</td>
                    <td>无奶</td>
                    <td>浅咖</td>   
                    <td colspan="3">HI-122701001</td>
                                      </tr>
                  <tr>
                    <td></td>
                    <td>φ7.53</td>
                    <td>56</td>
                    <td>A</td>
                    <td>GIA</td>
                    <td colspan="3">2176557386</a></td>
                                      </tr>
            </table></a>
          </li>
                 <li><a href="http://www.dbzgia.com/home/cert?carat=1.76&report_no=2176333098"  target="_blank">
             <table class="table table-bordered" width="100%" border="1" style="text-align:center;">
                  <tr>
                    <td></td>
                    <td>圆形</td>
                    <td>1.76</td>
                    <td>Y</td>
                    <td>SI1</td>
                    <td>VG</td>
                    <td>EX</td>
                    <td>VG</td>   
                                      </tr>
                  <tr>
                    <td><input type="checkbox" class="hidden-xs"></td>
                    <td>S</td>
                    <td>奶咖：</td>
                    <td>无奶</td>
                    <td>浅咖</td>   
                    <td colspan="3">HI-121202201</td>
                                      </tr>
                  <tr>
                    <td></td>
                    <td>φ7.58</td>
                    <td>57</td>
                    <td>A</td>
                    <td>GIA</td>
                    <td colspan="3">2176333098</a></td>
                                      </tr>
            </table></a>
          </li>
                 <li><a href="http://www.dbzgia.com/home/cert?carat=1.76&report_no=1169658699"  target="_blank">
             <table class="table table-bordered" width="100%" border="1" style="text-align:center;">
                  <tr>
                    <td></td>
                    <td>圆形</td>
                    <td>1.76</td>
                    <td>U</td>
                    <td>SI2</td>
                    <td>EX</td>
                    <td>EX</td>
                    <td>EX</td>   
                                      </tr>
                  <tr>
                    <td><input type="checkbox" class="hidden-xs"></td>
                    <td>M</td>
                    <td>奶咖：</td>
                    <td>无奶</td>
                    <td>浅咖</td>   
                    <td colspan="3">HI-116003401</td>
                                      </tr>
                  <tr>
                    <td></td>
                    <td>φ7.7</td>
                    <td>56</td>
                    <td>A</td>
                    <td>GIA</td>
                    <td colspan="3">1169658699</a></td>
                                      </tr>
            </table></a>
          </li>
                 <li><a href="http://www.dbzgia.com/home/cert?carat=1.51&report_no=1179414520"  target="_blank">
             <table class="table table-bordered" width="100%" border="1" style="text-align:center;">
                  <tr>
                    <td></td>
                    <td>圆形</td>
                    <td>1.51</td>
                    <td>U</td>
                    <td>SI1</td>
                    <td>VG</td>
                    <td>EX</td>
                    <td>G</td>   
                                      </tr>
                  <tr>
                    <td><input type="checkbox" class="hidden-xs"></td>
                    <td>N</td>
                    <td>奶咖：</td>
                    <td>无奶</td>
                    <td>浅咖</td>   
                    <td colspan="3">HI-121900401</td>
                                      </tr>
                  <tr>
                    <td></td>
                    <td>φ7.2</td>
                    <td>57</td>
                    <td>A</td>
                    <td>GIA</td>
                    <td colspan="3">1179414520</a></td>
                                      </tr>
            </table></a>
          </li>
                 <li><a href="http://www.dbzgia.com/home/cert?carat=3.03&report_no=5172889769"  target="_blank">
             <table class="table table-bordered" width="100%" border="1" style="text-align:center;">
                  <tr>
                    <td></td>
                    <td>雷蒂恩</td>
                    <td>3.03</td>
                    <td>G</td>
                    <td>IF</td>
                    <td>GD</td>
                    <td>EX</td>
                    <td>EX</td>   
                                      </tr>
                  <tr>
                    <td><input type="checkbox" class="hidden-xs"></td>
                    <td>FL3</td>
                    <td>奶咖：</td>
                    <td>待查</td>
                    <td>待查</td>   
                    <td colspan="3">AO-64340113</td>
                                      </tr>
                  <tr>
                    <td></td>
                    <td>φ</td>
                    <td>0</td>
                    <td></td>
                    <td>GIA</td>
                    <td colspan="3">5172889769</a></td>
                                      </tr>
            </table></a>
          </li>
                 <li><a href="http://www.dbzgia.com/home/cert?carat=5.01&report_no=2185058611"  target="_blank">
             <table class="table table-bordered" width="100%" border="1" style="text-align:center;">
                  <tr>
                    <td></td>
                    <td>祖母绿</td>
                    <td>5.01</td>
                    <td>D</td>
                    <td>VS2</td>
                    <td>VG+</td>
                    <td>EX</td>
                    <td>VG</td>   
                                      </tr>
                  <tr>
                    <td><input type="checkbox" class="hidden-xs"></td>
                    <td>FL4</td>
                    <td>奶咖：</td>
                    <td>VG</td>
                    <td>无咖</td>   
                    <td colspan="3">AO-64300007</td>
                                      </tr>
                  <tr>
                    <td></td>
                    <td>φ</td>
                    <td>0</td>
                    <td></td>
                    <td>GIA</td>
                    <td colspan="3">2185058611</a></td>
                                      </tr>
            </table></a>
          </li>
                 <li><a href="http://www.dbzgia.com/home/cert?carat=4.04&report_no=2171735536"  target="_blank">
             <table class="table table-bordered" width="100%" border="1" style="text-align:center;">
                  <tr>
                    <td></td>
                    <td>L RADIANT</td>
                    <td>4.04</td>
                    <td>E</td>
                    <td>VS2</td>
                    <td></td>
                    <td>VG</td>
                    <td>EX</td>   
                                      </tr>
                  <tr>
                    <td><input type="checkbox" class="hidden-xs"></td>
                    <td>VST</td>
                    <td>奶咖：</td>
                    <td>VG</td>
                    <td>待查</td>   
                    <td colspan="3">XWP-5817280035</td>
                                      </tr>
                  <tr>
                    <td></td>
                    <td>φ10.1</td>
                    <td>66</td>
                    <td></td>
                    <td>GIA</td>
                    <td colspan="3">2171735536</a></td>
                                      </tr>
            </table></a>
          </li>
                 <li><a href="http://www.dbzgia.com/home/cert?carat=3.01&report_no=2171750328"  target="_blank">
             <table class="table table-bordered" width="100%" border="1" style="text-align:center;">
                  <tr>
                    <td></td>
                    <td>祖母绿</td>
                    <td>3.01</td>
                    <td>D</td>
                    <td>VVS1</td>
                    <td>VG</td>
                    <td>EX</td>
                    <td>EX</td>   
                                      </tr>
                  <tr>
                    <td><input type="checkbox" class="hidden-xs"></td>
                    <td>VST</td>
                    <td>奶咖：</td>
                    <td>待查</td>
                    <td>待查</td>   
                    <td colspan="3">KX-28506</td>
                                      </tr>
                  <tr>
                    <td></td>
                    <td>φ7.98</td>
                    <td>0</td>
                    <td></td>
                    <td>GIA</td>
                    <td colspan="3">2171750328</a></td>
                                      </tr>
            </table></a>
          </li>
                 <li><a href="http://www.dbzgia.com/home/cert?carat=1.70&report_no=2176471699"  target="_blank">
             <table class="table table-bordered" width="100%" border="1" style="text-align:center;">
                  <tr>
                    <td></td>
                    <td>圆形</td>
                    <td>1.70</td>
                    <td>U</td>
                    <td>VVS1</td>
                    <td>EX</td>
                    <td>EX</td>
                    <td>EX</td>   
                                      </tr>
                  <tr>
                    <td><input type="checkbox" class="hidden-xs"></td>
                    <td>M</td>
                    <td>奶咖：</td>
                    <td>无奶</td>
                    <td>浅咖</td>   
                    <td colspan="3">HI-122402701</td>
                                      </tr>
                  <tr>
                    <td></td>
                    <td>φ7.62</td>
                    <td>56</td>
                    <td>A</td>
                    <td>GIA</td>
                    <td colspan="3">2176471699</a></td>
                                      </tr>
            </table></a>
          </li>
                 <li><a href="javascript:void"  target="_blank">
             <table class="table table-bordered" width="100%" border="1" style="text-align:center;">
                  <tr>
                    <td></td>
                    <td>阿斯切</td>
                    <td>2.00</td>
                    <td>E</td>
                    <td>SI2</td>
                    <td>NONE</td>
                    <td>VG</td>
                    <td>VG</td>   
                                      </tr>
                  <tr>
                    <td><input type="checkbox" class="hidden-xs"></td>
                    <td>Non</td>
                    <td>奶咖：</td>
                    <td>待查</td>
                    <td>待查</td>   
                    <td colspan="3">PWL-110207328504</td>
                                      </tr>
                  <tr>
                    <td></td>
                    <td>φ6.99</td>
                    <td>0</td>
                    <td></td>
                    <td>IGI</td>
                    <td colspan="3">113486366</a></td>
                                      </tr>
            </table></a>
          </li>
                 <li><a href="http://www.dbzgia.com/home/cert?carat=4.11&report_no=1233514784"  target="_blank">
             <table class="table table-bordered" width="100%" border="1" style="text-align:center;">
                  <tr>
                    <td></td>
                    <td>圆形</td>
                    <td>4.11</td>
                    <td>D</td>
                    <td>VVS1</td>
                    <td>EX</td>
                    <td>EX</td>
                    <td>EX</td>   
                                      </tr>
                  <tr>
                    <td><input type="checkbox" class="hidden-xs"></td>
                    <td>VS</td>
                    <td>奶咖：</td>
                    <td>无奶</td>
                    <td>无咖</td>   
                    <td colspan="3">MP-160384-6</td>
                                      </tr>
                  <tr>
                    <td></td>
                    <td>φ10.3</td>
                    <td>58</td>
                    <td>Available</td>
                    <td>GIA</td>
                    <td colspan="3">1233514784</a></td>
                                      </tr>
            </table></a>
          </li>
                 <li><a href="http://www.dbzgia.com/home/cert?carat=3.08&report_no=2155430241"  target="_blank">
             <table class="table table-bordered" width="100%" border="1" style="text-align:center;">
                  <tr>
                    <td></td>
                    <td>水滴形</td>
                    <td>3.08</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>   
                                      </tr>
                  <tr>
                    <td><input type="checkbox" class="hidden-xs"></td>
                    <td></td>
                    <td>奶咖：</td>
                    <td>待查</td>
                    <td>待查</td>   
                    <td colspan="3">KX-98038</td>
                                      </tr>
                  <tr>
                    <td></td>
                    <td>φ12.7</td>
                    <td>61</td>
                    <td></td>
                    <td>GIA</td>
                    <td colspan="3">2155430241</a></td>
                                      </tr>
            </table></a>
          </li>
                 <li><a href="http://www.dbzgia.com/home/cert?carat=0.90&report_no=6232140148"  target="_blank">
             <table class="table table-bordered" width="100%" border="1" style="text-align:center;">
                  <tr>
                    <td></td>
                    <td>祖母绿</td>
                    <td>0.90</td>
                    <td>F</td>
                    <td>SI2</td>
                    <td>NONE</td>
                    <td>EX</td>
                    <td>VG</td>   
                                      </tr>
                  <tr>
                    <td><input type="checkbox" class="hidden-xs"></td>
                    <td>Fnt</td>
                    <td>奶咖：</td>
                    <td>待查</td>
                    <td>待查</td>   
                    <td colspan="3">PWL-100719440323</td>
                                      </tr>
                  <tr>
                    <td></td>
                    <td>φ6.02</td>
                    <td>0</td>
                    <td></td>
                    <td>GIA</td>
                    <td colspan="3">6232140148</a></td>
                                      </tr>
            </table></a>
          </li>
                 <li><a href="http://www.dbzgia.com/home/cert?carat=3.07&report_no=2236140537"  target="_blank">
             <table class="table table-bordered" width="100%" border="1" style="text-align:center;">
                  <tr>
                    <td></td>
                    <td>雷蒂恩</td>
                    <td>3.07</td>
                    <td>D</td>
                    <td>VVS1</td>
                    <td>EX</td>
                    <td>EX</td>
                    <td>EX</td>   
                                      </tr>
                  <tr>
                    <td><input type="checkbox" class="hidden-xs"></td>
                    <td>STG</td>
                    <td>奶咖：</td>
                    <td>待查</td>
                    <td>无咖</td>   
                    <td colspan="3">KX-547410631</td>
                                      </tr>
                  <tr>
                    <td></td>
                    <td>φ9.45</td>
                    <td>0</td>
                    <td></td>
                    <td>GIA</td>
                    <td colspan="3">2236140537</a></td>
                                      </tr>
            </table></a>
          </li>
                 <li><a href="http://www.dbzgia.com/home/cert?carat=1.22&report_no=5226185894"  target="_blank">
             <table class="table table-bordered" width="100%" border="1" style="text-align:center;">
                  <tr>
                    <td></td>
                    <td>圆形</td>
                    <td>1.22</td>
                    <td>W</td>
                    <td>SI1</td>
                    <td>EX</td>
                    <td>EX</td>
                    <td>VG</td>   
                                      </tr>
                  <tr>
                    <td><input type="checkbox" class="hidden-xs"></td>
                    <td>S</td>
                    <td>奶咖：</td>
                    <td>无奶</td>
                    <td>深咖</td>   
                    <td colspan="3">HI-147404402</td>
                                      </tr>
                  <tr>
                    <td></td>
                    <td>φ6.82</td>
                    <td>56</td>
                    <td>A</td>
                    <td>GIA</td>
                    <td colspan="3">5226185894</a></td>
                                      </tr>
            </table></a>
          </li>
                 <li><a href="http://www.dbzgia.com/home/cert?carat=3.01&report_no=2183083056"  target="_blank">
             <table class="table table-bordered" width="100%" border="1" style="text-align:center;">
                  <tr>
                    <td></td>
                    <td>祖母绿</td>
                    <td>3.01</td>
                    <td>F</td>
                    <td>VVS2</td>
                    <td>GD</td>
                    <td>EX</td>
                    <td>EX</td>   
                                      </tr>
                  <tr>
                    <td><input type="checkbox" class="hidden-xs"></td>
                    <td>FL4</td>
                    <td>奶咖：</td>
                    <td>待查</td>
                    <td>待查</td>   
                    <td colspan="3">AO-64750208</td>
                                      </tr>
                  <tr>
                    <td></td>
                    <td>φ</td>
                    <td>0</td>
                    <td></td>
                    <td>GIA</td>
                    <td colspan="3">2183083056</a></td>
                                      </tr>
            </table></a>
          </li>
                 <li><a href="http://www.dbzgia.com/home/cert?carat=4.01&report_no=2175705468"  target="_blank">
             <table class="table table-bordered" width="100%" border="1" style="text-align:center;">
                  <tr>
                    <td></td>
                    <td>祖母绿</td>
                    <td>4.01</td>
                    <td>D</td>
                    <td>VVS2</td>
                    <td></td>
                    <td>EX</td>
                    <td>EX</td>   
                                      </tr>
                  <tr>
                    <td><input type="checkbox" class="hidden-xs"></td>
                    <td>STG</td>
                    <td>奶咖：</td>
                    <td>待查</td>
                    <td>无咖</td>   
                    <td colspan="3">XWP-2816980112</td>
                                      </tr>
                  <tr>
                    <td></td>
                    <td>φ10.2</td>
                    <td>64</td>
                    <td></td>
                    <td>GIA</td>
                    <td colspan="3">2175705468</a></td>
                                      </tr>
            </table></a>
          </li>
                 <li><a href="http://www.dbzgia.com/home/cert?carat=1.00&report_no=2175655682"  target="_blank">
             <table class="table table-bordered" width="100%" border="1" style="text-align:center;">
                  <tr>
                    <td></td>
                    <td>祖母绿</td>
                    <td>1.00</td>
                    <td>E</td>
                    <td>SI2</td>
                    <td>NONE</td>
                    <td>EX</td>
                    <td>VG</td>   
                                      </tr>
                  <tr>
                    <td><input type="checkbox" class="hidden-xs"></td>
                    <td>Non</td>
                    <td>奶咖：</td>
                    <td>待查</td>
                    <td>待查</td>   
                    <td colspan="3">PWL-100720038858</td>
                                      </tr>
                  <tr>
                    <td></td>
                    <td>φ6.44</td>
                    <td>0</td>
                    <td></td>
                    <td>GIA</td>
                    <td colspan="3">2175655682</a></td>
                                      </tr>
            </table></a>
          </li>
              </div>
    </div>
    
    
    <div class="container saixjg">
      <div class="row saixjg-topk">
              <div class="col-lg-1 col-lg-offset-7 col-xs-4 col-xs-offset-0" style="text-align:right;">
            展现
         </div>
         <div class="col-lg-1 col-xs-2">
            <select class="form-control" name="perPage">
              <option value="25">25条</option>
              <option value="50" >50条</option>
              <option value="100" >100条</option>
            </select>
         </div>
         <div class="col-lg-1 col-xs-2" style="text-align:right;">
            排序
         </div>
         <div class="col-lg-1 col-xs-2"> 
            <select class="form-control" name="orderBy">
              <option value="inputtime">时间</option>
              <option value="amount" >价格</option>
              <option value="lab" >证书</option>
              <option value="rap_back" selected="selected">折扣</option>
            </select>
         </div>
      </div>
    </div>
    
    <div class="page-fenye">
      <p class="fenlink">&nbsp;<strong>1</strong>&nbsp;<a href="http://www.dbzgia.com/home/diamond/25">2</a>&nbsp;<a href="http://www.dbzgia.com/home/diamond/50">3</a>&nbsp;<a href="http://www.dbzgia.com/home/diamond/25">></a>&nbsp;</p>      <link rel="stylesheet" href="http://www.dbzgia.com/source/home-assets/css/pagination.css">
    </div>
  </div>  
</div>

    
    <script src="http://www.dbzgia.com/source/home-assets/js/diamond.js"></script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js'; ?>"><\/script>')</script>
    <script src="<?php echo base_url().'style/bootstrap/3.3.7/dist/js/bootstrap.min.js'; ?>"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="<?php echo base_url().'style/bootstrap/3.3.7/assets/js/vendor/holder.min.js'; ?>"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo base_url().'style/bootstrap/3.3.7/assets/js/ie10-viewport-bug-workaround.js'; ?>"></script>
  </body>
</html>