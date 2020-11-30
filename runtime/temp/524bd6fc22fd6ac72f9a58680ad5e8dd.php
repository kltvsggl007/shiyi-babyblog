<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:66:"D:\wamp\www\tp5\public/../application/admin\view\article\edit.html";i:1606188934;s:72:"D:\wamp\www\tp5\public/../application/admin\view\common\column_left.html";i:1606183464;s:67:"D:\wamp\www\tp5\public/../application/admin\view\common\header.html";i:1605689727;s:67:"D:\wamp\www\tp5\public/../application/admin\view\common\footer.html";i:1605086092;}*/ ?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>文章编辑</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="__CSS__/check_style.css">
    <link rel="stylesheet" href="__CSS__/cs-skin-elastic.css">
    <link rel="stylesheet" href="__CSS__/style.css">
    <link rel="stylesheet" href="__CSS__/lib/chosen/chosen.min.css">

    <script type="text/javascript" src="__JS__/neditor/neditor.config.js"></script>
    <script type="text/javascript" src="__JS__/neditor/neditor.all.min.js"> </script>
    <script type="text/javascript" src="__JS__/neditor/neditor.service.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>
    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li>
                    <a href="<?php echo url('index/index'); ?>"><i class="menu-icon fa fa-laptop"></i>Dashboard</a>
                </li>


                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-users"></i>管理员</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-user"></i><a href="<?php echo url('administrator/lists'); ?>">管理员列表</a></li>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo url('links/lists'); ?>"><i class="menu-icon fa fa-link"></i>友情链接</a>
                </li>

                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-gears"></i>作者列表</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-user"></i><a href="<?php echo url('author/lists'); ?>">编辑作者</a></li>
                    </ul>
                </li>

                <li>
                    <a href="<?php echo url('category/lists'); ?>"><i class="menu-icon fa fa-list"></i>栏目管理</a>
                </li>

                <li>
                    <a href="<?php echo url('article/lists'); ?>"><i class="menu-icon fa fa-edit"></i>编辑博客</a>
                </li>

                <li class="menu-title">UI elements</li><!-- /.menu-title -->
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>Components</a>
                    <ul class="sub-menu children dropdown-menu">                            <li><i class="fa fa-puzzle-piece"></i><a href="ui-buttons.html">Buttons</a></li>
                        <li><i class="fa fa-id-badge"></i><a href="ui-badges.html">Badges</a></li>
                        <li><i class="fa fa-bars"></i><a href="ui-tabs.html">Tabs</a></li>

                        <li><i class="fa fa-id-card-o"></i><a href="ui-cards.html">Cards</a></li>
                        <li><i class="fa fa-exclamation-triangle"></i><a href="ui-alerts.html">Alerts</a></li>
                        <li><i class="fa fa-spinner"></i><a href="ui-progressbar.html">Progress Bars</a></li>
                        <li><i class="fa fa-fire"></i><a href="ui-modals.html">Modals</a></li>
                        <li><i class="fa fa-book"></i><a href="ui-switches.html">Switches</a></li>
                        <li><i class="fa fa-th"></i><a href="ui-grids.html">Grids</a></li>
                        <li><i class="fa fa-file-word-o"></i><a href="ui-typgraphy.html">Typography</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Tables</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-table"></i><a href="tables-basic.html">Basic Table</a></li>
                        <li><i class="fa fa-table"></i><a href="tables-data.html">Data Table</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children active dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Forms</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-th"></i><a href="forms-basic.html">Basic Form</a></li>
                        <li><i class="menu-icon fa fa-th"></i><a href="forms-advanced.html">Advanced Form</a></li>
                    </ul>
                </li>

                <li class="menu-title">Icons</li><!-- /.menu-title -->

                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Icons</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-fort-awesome"></i><a href="font-fontawesome.html">Font Awesome</a></li>
                        <li><i class="menu-icon ti-themify-logo"></i><a href="font-themify.html">Themefy Icons</a></li>
                    </ul>
                </li>
                <li>
                    <a href="widgets.html"> <i class="menu-icon ti-email"></i>Widgets </a>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bar-chart"></i>Charts</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-line-chart"></i><a href="charts-chartjs.html">Chart JS</a></li>
                        <li><i class="menu-icon fa fa-area-chart"></i><a href="charts-flot.html">Flot Chart</a></li>
                        <li><i class="menu-icon fa fa-pie-chart"></i><a href="charts-peity.html">Peity Chart</a></li>
                    </ul>
                </li>

                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-area-chart"></i>Maps</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-map-o"></i><a href="maps-gmap.html">Google Maps</a></li>
                        <li><i class="menu-icon fa fa-street-view"></i><a href="maps-vector.html">Vector Maps</a></li>
                    </ul>
                </li>
                <li class="menu-title">Extras</li><!-- /.menu-title -->
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Pages</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-sign-in"></i><a href="page-login.html">Login</a></li>
                        <li><i class="menu-icon fa fa-sign-in"></i><a href="page-register.html">Register</a></li>
                        <li><i class="menu-icon fa fa-paper-plane"></i><a href="pages-forget.html">Forget Pass</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside><!-- /#left-panel -->
    <!-- Left Panel -->


    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">
    <div class="top-left">
        <div class="navbar-header">
            <a class="navbar-brand" href="./"><img src="__IMG__/logo.png" alt="Logo"></a>
            <a class="navbar-brand hidden" href="./"><img src="__IMG__/logo2.png" alt="Logo"></a>
            <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
        </div>
    </div>
    <div class="top-right">
        <div class="header-menu">
            <div class="header-left">
                <div class="dropdown for-message">
                    <a href="<?php echo url('../index/index/index'); ?>" target="_blank">网站首页</a>
                </div>
                <button class="search-trigger"><i class="fa fa-search"></i></button>
                <div class="form-inline">
                    <form class="search-form">
                        <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                        <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                    </form>
                </div>

                <div class="dropdown for-notification">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-bell"></i>
                        <span class="count bg-danger">3</span>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="notification">
                        <p class="red">You have 3 Notification</p>
                        <a class="dropdown-item media" href="#">
                            <i class="fa fa-check"></i>
                            <p>Server #1 overloaded.</p>
                        </a>
                        <a class="dropdown-item media" href="#">
                            <i class="fa fa-info"></i>
                            <p>Server #2 overloaded.</p>
                        </a>
                        <a class="dropdown-item media" href="#">
                            <i class="fa fa-warning"></i>
                            <p>Server #3 overloaded.</p>
                        </a>
                    </div>
                </div>

                <div class="dropdown for-message">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="message" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-envelope"></i>
                        <span class="count bg-primary">4</span>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="message">
                        <p class="red">You have 4 Mails</p>
                        <a class="dropdown-item media" href="#">
                            <span class="photo media-left"><img alt="avatar" src="__IMG__/avatar/1.jpg"></span>
                            <div class="message media-body">
                                <span class="name float-left">Jonathan Smith</span>
                                <span class="time float-right">Just now</span>
                                <p>Hello, this is an example msg</p>
                            </div>
                        </a>
                        <a class="dropdown-item media" href="#">
                            <span class="photo media-left"><img alt="avatar" src="__IMG__/avatar/2.jpg"></span>
                            <div class="message media-body">
                                <span class="name float-left">Jack Sanders</span>
                                <span class="time float-right">5 minutes ago</span>
                                <p>Lorem ipsum dolor sit amet, consectetur</p>
                            </div>
                        </a>
                        <a class="dropdown-item media" href="#">
                            <span class="photo media-left"><img alt="avatar" src="__IMG__/avatar/3.jpg"></span>
                            <div class="message media-body">
                                <span class="name float-left">Cheryl Wheeler</span>
                                <span class="time float-right">10 minutes ago</span>
                                <p>Hello, this is an example msg</p>
                            </div>
                        </a>
                        <a class="dropdown-item media" href="#">
                            <span class="photo media-left"><img alt="avatar" src="__IMG__/avatar/4.jpg"></span>
                            <div class="message media-body">
                                <span class="name float-left">Rachel Santos</span>
                                <span class="time float-right">15 minutes ago</span>
                                <p>Lorem ipsum dolor sit amet, consectetur</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="user-area dropdown float-right">
                <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="user-avatar rounded-circle" src="__IMG__/admin.jpg" alt="User Avatar">
                </a>

                <div class="user-menu dropdown-menu">
                    <a class="nav-link" href="#"><i class="fa fa-user"></i><?php echo \think\Request::instance()->session('username'); ?></a>

                    <a class="nav-link" href="<?php echo url('administrator/edit',array('id'=>\think\Request::instance()->session('uid'))); ?>"><i class="fa fa-bell-o"></i>修改密码</a>

                    <a class="nav-link" href="#"><i class="fa fa-cog"></i>Settings</a>

                    <a class="nav-link" href="<?php echo url('administrator/logout'); ?>"><i class="fa fa-power-off"></i>退出登陆</a>
                </div>
            </div>
        </div>
    </div>
</header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-8">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <ol class="breadcrumb text-left">
                                    <li><a href="<?php echo url('index/index'); ?>">首页</a></li>
                                    <li><a href="<?php echo url('article/lists'); ?>">文章列表</a></li>
                                    <li class="active">修改文章</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">修改文章</div>
                        <div class="card-body card-block">
                            <form action="#" enctype="multipart/form-data" method="post" class="card-body">
                                <input type="hidden" name="id" value="<?php echo $articleInfos['id']; ?>">
                                <div class="row form-group">
                                    <div class="input-group">
                                        <div class="col col-md-2"><div class="input-group-addon"><i class="ti ti-align-justify"></i>&nbsp;&nbsp;文章标题</div></div>
                                        <div class="col col-md-10"><input type="text" id="title" name="title" value="<?php echo $articleInfos['title']; ?>" class="form-control"></div>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="input-group">
                                        <div class="col col-md-2"><div class="input-group-addon"><i class="ti ti-menu-alt"></i>&nbsp;文章作者</div></div>
                                        <div class="col col-md-10">
                                        <select name="author_id" id="author_id" class="form-control">
                                            <option value="">请选择作者</option>
                                            <?php if(is_array($authorRes) || $authorRes instanceof \think\Collection): $i = 0; $__LIST__ = $authorRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$auRes): $mod = ($i % 2 );++$i;?>
                                            <option <?php if($auRes['id'] == $articleInfos['author_id']): ?> selected="selected" <?php endif; ?> value="<?php echo $auRes['id']; ?>"><?php echo $auRes['author_name']; ?></option>
                                            <?php endforeach; endif; else: echo "" ;endif; ?>
                                        </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="input-group">
                                        <div class="col col-md-2"><div class="input-group-addon"><i class="ti ti-key"></i>&nbsp;关键字</div></div>
                                        <div class="col col-md-10"><input type="text" id="keywords" name="keywords" value="<?php echo $articleInfos['keywords']; ?>" class="form-control"></div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="input-group">
                                        <div class="col col-md-2"><div class="input-group-addon"><i class="ti ti-comment-alt"></i>&nbsp;文章描述</div></div>
                                        <div class="col col-md-10"><textarea name="description" class="form-control"><?php echo $articleInfos['description']; ?></textarea></div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="input-group">
                                        <div class="col col-md-2"><div class="input-group-addon"><i class="ti ti-image"></i>&nbsp;缩略图</div></div>
                                        <div class="col col-md-10">
                                            <input type="file" id="pic" name="pic" class="form-control-file">
                                            <?php if($articleInfos['pic'] != ''): ?>
                                                <div style="float:left;border:1px solid #ced4da; margin-top: 10px;"><img src="__UPLOADS__<?php echo $articleInfos['pic']; ?>" alt="" height="100"></div>
                                            <?php else: ?>
                                                暂无缩略图
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="input-group">
                                        <div class="col col-md-2"><div class="input-group-addon"><i class="ti ti-menu-alt"></i>&nbsp;所属栏目</div></div>
                                        <div class="col col-md-10">
                                        <select name="category_id" id="category_id" class="form-control">
                                            <option value="">请选择栏目</option>
                                            <?php if(is_array($categoryRes) || $categoryRes instanceof \think\Collection): $i = 0; $__LIST__ = $categoryRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cateRes): $mod = ($i % 2 );++$i;?>
                                            <option <?php if($cateRes['id'] == $articleInfos['category_id']): ?> selected="selected" <?php endif; ?> value="<?php echo $cateRes['id']; ?>"><?php echo $cateRes['category_name']; ?></option>
                                            <?php endforeach; endif; else: echo "" ;endif; ?>
                                        </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="input-group">
                                        <div class="col col-md-2"><div class="input-group-addon"><i class="ti ti-check-box"></i>&nbsp;是否推荐</div></div>
                                        <div class="col col-md-10">
                                            <input <?php if($articleInfos['state'] == 1): ?>checked=""<?php endif; ?> type="checkbox" id="s4" name="state" style="display: none;" />
                                            <label class="slider-v2" for="s4"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-2"><div class="input-group-addon"><i class="ti ti-pencil-alt"></i>&nbsp;文章内容</div></div>
                                    <div class="col-12 col-md-10">
                                        <textarea name="contents" id="contents"><?php echo $articleInfos['contents']; ?></textarea>
                                    </div>
                                </div>
                                <div class="row form-actions form-group">
                                    <div class="col col-md-2"></div>
                                    <div class="col-12 col-md-10"><button type="submit"class="btn btn-success btn-sm"><i class="ti ti-settings"></i>&nbsp;修改文章</button></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div><!-- .content -->
        </div>
        <div class="clearfix"></div>

        <footer class="site-footer">
    <div class="footer-inner bg-white">
        <div class="row">
            <div class="col-sm-6">
                Copyright &copy; 2020.Company name All rights reserved.
            </div>
            <div class="col-sm-6 text-right">
                
            </div>
        </div>
    </div>
</footer>


    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="__JS__/main.js"></script>
    <script src="__JS__/lib/chosen/chosen.jquery.min.js"></script>

    <script>
        jQuery(document).ready(function () {
            jQuery(".standardSelect").chosen({
                disable_search_threshold: 10,
                no_results_text: "Oops, nothing found!",
                width: "100%"
            });
        });
    </script>

    <script>
        var ue = UE.getEditor('contents', {
            initialFrameHeight: 400,
        });
    </script>
</body>

</html>