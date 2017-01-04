<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>首页</title>
    <!-- load stylesheets -->
    <!--<link rel="stylesheet" href="http://fonts.useso.com/css?family=Open+Sans:300,400">    &lt;!&ndash; Google web font "Open Sans" &ndash;&gt;-->
    <link rel="stylesheet" href="/shetuan/Public/font-awesome-4.6.3/css/font-awesome.min.css">            <!-- Font awesome -->
    <link rel="stylesheet" href="/shetuan/Public/css/bootstrap.min.css">                                  <!-- Bootstrap style -->
    <link rel="stylesheet" href="/shetuan/Public/css/hi.css">                                  <!-- Bootstrap style -->
    <link rel="stylesheet" href="/shetuan/Public/css/hero-slider-style.css">                              <!-- Hero slider style (https://codyhouse.co/gem/hero-slider/) -->
    <link rel="stylesheet" href="/shetuan/Public/css/magnific-popup.css">                                 <!-- Magnific popup style (http://dimsemenov.com/plugins/magnific-popup/) -->

    <link rel="stylesheet" href="/shetuan/Public/css/templatemo-style.css">                               <!-- Templatemo style -->
    <style>
        b{
            color: lightskyblue;
        }
        span{
            color: #00E8D7;
        }
        #info a{
            color: #00E8D7;
        }
        #info a:hover{
            color:hotpink;
        }
        #info a:active {
            color:#FFFFFF;
            text-decoration:none;
        }
    </style>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <!--<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>-->
    <!--<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>-->
    <![endif]-->
</head>

<body>

<!-- Content -->
<div class="cd-hero">

    <!-- Navigation -->
    <div class="cd-slider-nav">
        <nav class="navbar">

            <button class="navbar-toggler hidden-md-up" type="button" data-toggle="collapse" data-target="#tmNavbar">
                &#9776;
            </button>
            <div class="collapse navbar-toggleable-sm text-xs-center text-uppercase tm-navbar" id="tmNavbar">
                <ul class="nav navbar-nav">
                    <li class="nav-item active selected">
                        <a class="nav-link" href="#0" data-no="1"> 社团介绍<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#0" data-no="2">INFO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#0" data-no="3">精彩瞬间</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#0" data-no="4">活动介绍</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#0" data-no="5">一些操作</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>


    <ul class="cd-hero-slider">  <!-- autoplay -->

        <!--首页简介-->
        <li class="selected">


            <div class="cd-full-width">

                <div class="container-fluid js-tm-page-content" data-page-no="2">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="tm-2-col-container">
                                <?php if(is_array($res)): foreach($res as $k=>$val): ?><div class="tm-bg-white-translucent text-xs-left tm-textbox tm-2-col-textbox">
                                        <h2 class="tm-text-title">社团名称: <?php echo ($val["departname"]); ?></h2>
                                        <p class="tm-text"> 社团简介：<?php echo ($val["departintroduction"]); ?></p>
                                        <a href="<?php echo U('Joinapply/userjoinapply');?>?departid=<?php echo ($val["departid"]); ?>">
                                            <button data-id="<?php echo ($val["departid"]); ?>">申请加入</button></a>
                                    </div><?php endforeach; endif; ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12" style="padding-top: 20px" id="info">
                                <<?php echo ($pageinfo); ?>>
                                </div>
                        </div>
                    </div>
                </div>

            </div> <!-- .cd-full-width -->


        </li>
        <!--社团信息-->
        <li>
            <div class="cd-full-width">
                <div class="container-fluid js-tm-page-content tm-page-1" data-page-no="1">

                    <div class="row">
                        <div class="col-xs-12">
                            <i class="fa fa-4x fa-camera tm-icon"></i>
                            <h2 class="tm-site-name">社团之家</h2>
                            <div class="tm-bg-white-translucent text-xs-left tm-textbox tm-textbox-1-col">
                                <p class="tm-text">Hi~guys</p>
                                <p class="tm-text">希望你能在这里找到你想要的快乐</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div> <!-- .cd-full-width -->

        </li>

        <!-- Page 3 -->
        <li>

            <div class="cd-full-width">

                <div class="container-fluid js-tm-page-content" data-page-no="3">

                    <div class="row tm-img-gallery">
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                            <a href="/shetuan/Public/img/tm-img-01.jpg">
                                <img src="/shetuan/Public/img/tm-img-01-tn.jpg" alt="Image" class="img-fluid tm-img">
                            </a>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                            <a href="/shetuan/Public/img/tm-img-02.jpg">
                                <img src="/shetuan/Public/img/tm-img-02-tn.jpg" alt="Image" class="img-fluid tm-img">
                            </a>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                            <a href="/shetuan/Public/img/tm-img-03.jpg">
                                <img src="/shetuan/Public/img/tm-img-03-tn.jpg" alt="Image" class="img-fluid tm-img">
                            </a>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                            <a href="/shetuan/Public/img/tm-img-04.jpg">
                                <img src="/shetuan/Public/img/tm-img-04-tn.jpg" alt="Image" class="img-fluid tm-img">
                            </a>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                            <a href="/shetuan/Public/img/tm-img-05.jpg">
                                <img src="/shetuan/Public/img/tm-img-05-tn.jpg" alt="Image" class="img-fluid tm-img">
                            </a>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                            <a href="/shetuan/Public/img/tm-img-06.jpg">
                                <img src="/shetuan/Public/img/tm-img-06-tn.jpg" alt="Image" class="img-fluid tm-img">
                            </a>
                        </div>
                    </div>

                </div>

            </div>

        </li>

        <li>
            <div class="cd-full-width">

                <div class="container-fluid js-tm-page-content" data-page-no="2">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="tm-2-col-container">
                                <?php if(is_array($ares)): foreach($ares as $k=>$val): ?><div class="tm-bg-white-translucent text-xs-left tm-textbox tm-2-col-textbox">
                                        <h2 class="tm-text-title">活动名称: <?php echo ($val["activityname"]); ?></h2>
                                        <p class="tm-text"> 活动内容：<?php echo ($val["activitycontent"]); ?></p>
                                        <p class="tm-text"> 活动地点：<?php echo ($val["activityaddr"]); ?></p>
                                        <p class="tm-text"> 活动时间：<?php echo ($val["activitytime"]); ?></p>
                                    </div><?php endforeach; endif; ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12" style="padding-top: 20px" id="info">
                                <<?php echo ($pageinfo); ?>>
                            </div>
                        </div>
                    </div>
                </div>

            </div> <!-- .cd-full-width -->

        </li>

        <li>
            <div class="cd-full-width">

                <div class="container-fluid js-tm-page-content" data-page-no="5">
                    <div class="tm-contact-page">
                        <!-- contact form -->
                        <div class="row">
                            <div  class="tm-contact-form">

                                <div class="col-xs-12 col-sm-6 ">
                                    <div class="form-group">
                                        <a href="<?php echo U('home/index/register');?>"><input type="button"   class="form-control" value="注册" /></a>
                                    </div>
                                    <div class="form-group">
                                        <a href="<?php echo U('home/index/login');?>"><input type="button"   class="form-control"  value="登录"/></a>
                                    </div>
                                    <div class="form-group">
                                        <a href="<?php echo U('home/userinfo/myinfo');?>"><input type="button"   class="form-control"  value="个人信息完善"/></a>
                                    </div>
                                    <div class="form-group">
                                        <a href="<?php echo U('home/departapply/departapply');?>"><input type="button"   class="form-control"  value="社团创建申请"/></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div> <!-- .cd-full-width -->
        </li>
    </ul> <!-- .cd-hero-slider -->

</div> <!-- .cd-hero -->


<!-- Preloader, https://ihatetomatoes.net/create-custom-preloading-screen/ -->
<div id="loader-wrapper">

    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>

</div>

<!-- load JS files -->

<script src="/shetuan/Public/js/jquery-1.11.3.min.js"></script>         <!-- jQuery (https://jquery.com/download/) -->
<script src="/shetuan/Public/js/hi.js"></script>         <!-- jQuery (https://jquery.com/download/) -->
<script src="/shetuan/Public/js/hii.js"></script>         <!-- jQuery (https://jquery.com/download/) -->
<script src="/shetuan/Public/ja/tether.min.js"></script> <!-- Tether for Bootstrap (http://stackoverflow.com/questions/34567939/how-to-fix-the-error-error-bootstrap-tooltips-require-tether-http-github-h) -->
<script src="/shetuan/Public/js/bootstrap.min.js"></script>             <!-- Bootstrap js (v4-alpha.getbootstrap.com/) -->
<script src="/shetuan/Public/js/hero-slider-main.js"></script>          <!-- Hero slider (https://codyhouse.co/gem/hero-slider/) -->
<script src="/shetuan/Public/js/jquery.magnific-popup.min.js"></script> <!-- Magnific popup (http://dimsemenov.com/plugins/magnific-popup/) -->

<script>

    function adjustHeightOfPage(pageNo) {

        // Get the page height
        var totalPageHeight = 15 + $('.cd-slider-nav').height()
                + $(".cd-hero-slider li:nth-of-type(" + pageNo + ") .js-tm-page-content").height() + 160
                + $('.tm-footer').height();

        // Adjust layout based on page height and window height
        if(totalPageHeight > $(window).height())
        {
            $('.cd-hero-slider').addClass('small-screen');
            $('.cd-hero-slider li:nth-of-type(' + pageNo + ')').css("min-height", totalPageHeight + "px");
        }
        else
        {
            $('.cd-hero-slider').removeClass('small-screen');
            $('.cd-hero-slider li:nth-of-type(' + pageNo + ')').css("min-height", "100%");
        }

    }

    /*
     Everything is loaded including images.
     */
    $(window).load(function(){

        adjustHeightOfPage(1); // Adjust page height

        /* Gallery pop up
         -----------------------------------------*/
        $('.tm-img-gallery').magnificPopup({
            delegate: 'a', // child items selector, by clicking on it popup will open
            type: 'image',
            gallery:{enabled:true}
        });

        /* Collapse menu after click
         -----------------------------------------*/
        $('#tmNavbar a').click(function(){
            $('#tmNavbar').collapse('hide');

            adjustHeightOfPage($(this).data("no")); // Adjust page height
        });

        /* Browser resized
         -----------------------------------------*/
        $( window ).resize(function() {
            var currentPageNo = $(".cd-hero-slider li.selected .js-tm-page-content").data("page-no");
            adjustHeightOfPage( currentPageNo );
        });

        // Remove preloader
        // https://ihatetomatoes.net/create-custom-preloading-screen/
        $('body').addClass('loaded');

    });

</script>

</body>
</html>