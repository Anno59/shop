<?php
require_once '../include.php';
checkLogined();
//var_dump(session_name());
//var_dump($_SESSION['adminName']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>日志分析展示系统</title>
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="../assets/css/ace.min.css"/>
    <script src="../assets/js/ace-extra.min.js"></script>
    <script src="../assets/js/jquery-2.0.3.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/ace.min.js"></script>
    <style>
        .nav-list>li.active:after{
            display: none;
        }
        @media only screen and (max-width: 991px) {
            .menu-toggler > .menu-text:after {
                content: "菜单";
            }

            .menu-toggler::before, .menu-toggler::after {
                display: none;
            }
        }
    </style>
    <script>
        $(function () {
            /*列表点击后显示*/
            var dropDowns = $('.submenu li');
            dropDowns.each(function () {
                $(this).click(function () {
                    dropDowns.removeClass("active");
                    $(this).addClass("active");
                })
            })
        })
    </script>
</head>
<body>
<div class="navbar navbar-default" id="navbar">
    <div class="navbar-container" id="navbar-container">
        <div class="navbar-header pull-left">
            <a href="#" class="navbar-brand">
                <small>
                    <i class="icon-leaf"></i>
                    日志分析展示系统
                </small>
            </a><!-- /.brand -->
        </div><!-- /.navbar-header -->
        <div class="navbar-header pull-right" role="navigation">
            <ul class="nav ace-nav">
                <li class="light-blue">
                    <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                        <span class="user-info">
                            <small>欢迎光临,</small>
                            <?php
                            if(isset($_SESSION['adminName'])){
                                echo $_SESSION['adminName'];
                            }elseif(isset($_COOKIE['adminName'])){
                                echo $_COOKIE['adminName'];
                            }
                            ?>
                        </span>
                        <i class="icon-caret-down"></i>
                    </a>
                    <ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                        <li>
                            <a href="doAdminAction.php?act=logout">
                                <i class="icon-off"></i>
                                退出
                            </a>
                        </li>
                    </ul>
                </li>
            </ul><!-- /.ace-nav -->
        </div><!-- /.navbar-header -->
    </div><!-- /.container -->
</div>

<div class="main-container" id="main-container">
    <div class="main-container-inner">
        <a class="menu-toggler" id="menu-toggler" href="#">
            <span class="menu-text"></span>
        </a>

        <div class="sidebar" id="sidebar">
            <ul class="nav nav-list">
                <li>
                    <a href="#" class="dropdown-toggle">
                        <i class="icon-comments-alt"></i>
                        <span class="menu-text"> 新闻管理 </span>
                        <b class="arrow icon-angle-down"></b>
                    </a>

                    <ul class="submenu">
                        <li>
                            <a href="addNews.php" target="mainFrame">
                                <i class="icon-double-angle-right"></i>
                                添加新闻
                            </a>
                        </li>

                        <li>
                            <a href="listNews.php" target="mainFrame">
                                <i class="icon-double-angle-right"></i>
                                管理新闻
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="dropdown-toggle">
                        <i class="icon-inbox"></i>
                        <span class="menu-text"> 产品管理 </span>

                        <b class="arrow icon-angle-down"></b>
                    </a>

                    <ul class="submenu">
                        <li>
                            <a href="addPro.php" target="mainFrame">
                                <i class="icon-double-angle-right"></i>
                                添加产品
                            </a>
                        </li>

                        <li>
                            <a href="listPro.php" target="mainFrame">
                                <i class="icon-double-angle-right"></i>
                                管理产品
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#" class="dropdown-toggle">
                        <i class="icon-check"></i>
                        <span class="menu-text"> 产品预约管理 </span>

                        <b class="arrow icon-angle-down"></b>
                    </a>

                    <ul class="submenu">
                        <li>
                            <a href="listAdmin.php" target="mainFrame">
                                <i class="icon-double-angle-right"></i>
                                管理产品预约
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#" class="dropdown-toggle">
                        <i class="icon-group"></i>
                        <span class="menu-text"> 用户管理 </span>

                        <b class="arrow icon-angle-down"></b>
                    </a>

                    <ul class="submenu">
                        <li>
                            <a href="addUser.php" target="mainFrame">
                                <i class="icon-double-angle-right"></i>
                                添加用户
                            </a>
                        </li>

                        <li>
                            <a href="listUser.php" target="mainFrame">
                                <i class="icon-double-angle-right"></i>
                                管理用户
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="dropdown-toggle">
                        <i class="icon-desktop"></i>
                        <span class="menu-text"> 管理员管理 </span>

                        <b class="arrow icon-angle-down"></b>
                    </a>

                    <ul class="submenu">
                        <li>
                            <a href="addAdmin.php" target="mainFrame">
                                <i class="icon-double-angle-right"></i>
                                添加管理员
                            </a>
                        </li>

                        <li>
                            <a href="listAdmin.php" target="mainFrame">
                                <i class="icon-double-angle-right"></i>
                                管理管理员
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>

            <div class="sidebar-collapse" id="sidebar-collapse">
                <i class="icon-double-angle-left" data-icon1="icon-double-angle-left"
                   data-icon2="icon-double-angle-right"></i>
            </div>
        </div>

        <div class="main-content">
            <div class="page-content">
                <iframe src="main.php"  frameborder="0" name="mainFrame" width="100%" height="560"></iframe>
            </div>
        </div>
    </div>
    <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
        <i class="icon-double-angle-up icon-only bigger-110"></i>
    </a>
</div>
</body>
</html>

