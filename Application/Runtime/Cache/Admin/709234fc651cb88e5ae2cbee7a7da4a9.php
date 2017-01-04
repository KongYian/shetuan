<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>


<head>
<title>社团管理系统首页</title>
<meta name="keywords" content="社团管理，首页，常州大学" />

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="本系统基于TP3.2开发，感谢开源">
<link rel="shortcut icon" href="favicon.ico">
<link href="/shetuan/Public/css/bootstrap.min14ed.css?v=3.3.6" rel="stylesheet">
<link href="/shetuan/Public/css/font-awesome.min93e3.css?v=4.4.0" rel="stylesheet">
<link href="/shetuan/Public/css/animate.min.css" rel="stylesheet">
<link href="/shetuan/Public/css/style.min862f.css?v=4.1.0" rel="stylesheet">
<link href="/shetuan/Public/css/plugins/iCheck/custom.css" rel="stylesheet">

    <!--[if lt IE 9]>
<meta http-equiv="refresh" content="0;ie.html" />
<![endif]-->
</head>
<script>if(window.top !== window.self){ window.top.location = window.location;}</script>
<!-- Mirrored from www.zi-han.net/theme/hplus/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jan 2016 14:16:41 GMT -->

<body class="fixed-sidebar full-height-layout gray-bg" style="overflow:hidden">
<div id="wrapper">
    <!--左侧导航开始-->
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="nav-close"><i class="fa fa-times-circle"></i>
        </div>
        <div class="sidebar-collapse">
            <ul class="nav" id="side-menu">
                <li class="nav-header">
                    <!--用户身份信息-->
                    <div class="dropdown profile-element">
                        <span><img alt="image" class="img-circle" src="/shetuan/Public/img/profile_small.jpg" /></span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear">
                               <span class="block m-t-xs"><strong class="font-bold">
                                    <?php echo 'Hello! '.$_SESSION['adminName'];?>
                               </strong></span>
                                <span class="text-muted text-xs block">部门管理员<b class="caret"></b></span>
                                </span>
                        </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a class="J_menuItem" href="JavaScript:void(0);">修改头像</a>
                            </li>
                            <li><a class="J_menuItem" href="JavaScript:void(0)">个人资料</a>
                            </li>
                            <li><a class="J_menuItem" href="JavaScript:void(0)">联系我们</a>
                            </li>
                            <li><a class="J_menuItem" href="JavaScript:void(0)">信箱</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="<?php echo U('admin/index/login');?>">安全退出</a>
                            </li>
                        </ul>
                    </div>
                    <div class="logo-element">H+
                    </div>
                </li>

                <li>
                    <a>
                    <i class="fa fa-columns"></i>
                    <span class="nav-label">社团事物管理</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <i class="fa fa-home"></i>
                        <span class="nav-label">活动管理</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a class="J_menuItem" href="<?php echo U('Departadmin/subactivityapply');?>" data-index="0">活动申请</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#">
                        <i class="fa fa-home"></i>
                        <span class="nav-label">会员管理</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a class="J_menuItem" href="<?php echo U('Member/departmember');?>" data-index="0">我的会员</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#">
                        <i class="fa fa-home"></i>
                        <span class="nav-label">消息管理</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a class="J_menuItem" href="<?php echo U('Message/departmessage');?>" data-index="0">我的消息</a>
                        </li>
                    </ul>
                    <ul class="nav nav-second-level">
                        <li>
                            <a class="J_menuItem" href="<?php echo U('Message/newmessage');?>" data-index="0">新建消息</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#">
                        <i class="fa fa-home"></i>
                        <span class="nav-label">制度管理</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a class="J_menuItem" href="<?php echo U('Institution/departinstitution');?>" data-index="0">我的制度</a>
                        </li>
                    </ul>
                    <ul class="nav nav-second-level">
                        <li>
                            <a class="J_menuItem" href="<?php echo U('Institution/newinstitution');?>" data-index="0">新建制度</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#">
                        <i class="fa fa-home"></i>
                        <span class="nav-label">值班管理</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a class="J_menuItem" href="<?php echo U('Attendance/departattendance');?>" data-index="0">我的值班</a>
                        </li>
                    </ul>
                    <ul class="nav nav-second-level">
                        <li>
                            <a class="J_menuItem" href="<?php echo U('Attendance/newattendance');?>" data-index="0">新建值班</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a>
                        <i class="fa fa-columns"></i>
                        <span class="nav-label">社团财务管理</span>
                    </a>
                </li>


                <li>
                    <a href="#">
                        <i class="fa fa-home"></i>
                        <span class="nav-label">物品管理</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a class="J_menuItem" href="<?php echo U('Goods/departgoods');?>" data-index="0">我的物品</a>
                        </li>
                    </ul>
                    <ul class="nav nav-second-level">
                        <li>
                            <a class="J_menuItem" href="<?php echo U('Goods/newgoods');?>" data-index="0">新建物品记录</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#">
                        <i class="fa fa-home"></i>
                        <span class="nav-label">收支管理</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a class="J_menuItem" href="<?php echo U('Expense/departexpense');?>" data-index="0">我的收支</a>
                        </li>
                    </ul>
                    <ul class="nav nav-second-level">
                        <li>
                            <a class="J_menuItem" href="<?php echo U('Expense/newexpense');?>" data-index="0">新建收支记录</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>


    <!--左侧导航结束-->
    <!--右侧部分开始-->
    <div id="page-wrapper" class="gray-bg dashbard-1">
        <!--顶部搜索栏-->
        <div class="row border-bottom">
            <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header"><a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                    <form role="search" class="navbar-form-custom" method="post" action="http://www.zi-han.net/theme/hplus/search_results.html">
                        <div class="form-group">
                            <input type="text" placeholder="请输入您需要查找的内容 …" class="form-control" name="top-search" id="top-search">
                        </div>
                    </form>
                </div>
            </nav>
        </div>

        <div class="row content-tabs">
            <button class="roll-nav roll-left J_tabLeft"><i class="fa fa-backward"></i>
            </button>
            <nav class="page-tabs J_menuTabs">
                <div class="page-tabs-content">
                    <a href="javascript:;" class="active J_menuTab" data-id="index_v1.html">首页</a>
                </div>
            </nav>
            <button class="roll-nav roll-right J_tabRight"><i class="fa fa-forward"></i>
            </button>

            <!--关闭选项卡设置-->
            <div class="btn-group roll-nav roll-right">
                <button class="dropdown J_tabClose" data-toggle="dropdown">关闭操作<span class="caret"></span>
                </button>
                <ul role="menu" class="dropdown-menu dropdown-menu-right">
                    <li class="J_tabShowActive"><a>定位当前选项卡</a>
                    </li>
                    <li class="divider"></li>
                    <li class="J_tabCloseAll"><a>关闭全部选项卡</a>
                    </li>
                    <li class="J_tabCloseOther"><a>关闭其他选项卡</a>
                    </li>
                </ul>
            </div>
            <a href="<?php echo U('admin/index/login');?>" class="roll-nav roll-right J_tabExit">
                <i class="fa fa fa-sign-out"></i> 退出</a>
        </div>
        <div class="row J_mainContent" id="content-main">
            <iframe class="J_iframe" name="iframe0" width="100%" height="100%" src="" frameborder="0" data-id="index_v1.html" seamless></iframe>
        </div>
    </div>
    <script src="/shetuan/Public/js/jquery.min.js?v=2.1.4"></script>
    <script src="/shetuan/Public/js/bootstrap.min.js?v=3.3.6"></script>
    <script src="/shetuan/Public/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="/shetuan/Public/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="/shetuan/Public/js/plugins/layer/layer.min.js"></script>
    <script src="/shetuan/Public/js/hplus.min.js?v=4.1.0"></script>
    <script type="text/javascript" src="/shetuan/Public/js/contabs.min.js"></script>
    <script src="/shetuan/Public/js/plugins/pace/pace.min.js"></script>
</body>


</html>