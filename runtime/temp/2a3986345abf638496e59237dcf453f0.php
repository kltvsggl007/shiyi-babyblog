<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:67:"D:\wamp\www\tp5\public/../application/index\view\search\search.html";i:1606204742;s:67:"D:\wamp\www\tp5\public/../application/index\view\common\header.html";i:1606441142;s:75:"D:\wamp\www\tp5\public/../application/index\view\common\column_right_1.html";i:1606204796;s:75:"D:\wamp\www\tp5\public/../application/index\view\common\column_right_2.html";i:1606201662;s:67:"D:\wamp\www\tp5\public/../application/index\view\common\footer.html";i:1606210101;}*/ ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Lifestyle posts</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Cabin:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">

    <!-- Template CSS -->
    <link rel="stylesheet" href="__CSS__/style-starter.css">
  </head>
  <body>
<!-- header -->
<header class="w3l-header">
    <!--/nav-->
    <nav class="navbar navbar-expand-lg navbar-light fill px-lg-0 py-0 px-3">
        <div class="container">
            <a class="navbar-brand" href="<?php echo url('index/index'); ?>">十一翦宝宝</a>
            <img src="__IMG__/logo.png" alt="十一翦宝宝" title="十一翦宝宝" style="height: 60px;" />
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <!-- <span class="navbar-toggler-icon"></span> -->
                <span class="fa icon-expand fa-bars"></span>
                <span class="fa icon-close fa-times"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo url('index/index'); ?>">首页</a>
                    </li>
                    <?php if(is_array($categoryInfo) || $categoryInfo instanceof \think\Collection): $i = 0; $__LIST__ = $categoryInfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cateIn): $mod = ($i % 2 );++$i;?>
                        <li class="nav-item active">
                            <a class="nav-link" href="<?php echo url('category/index',array('cateid'=>$cateIn['id'])); ?>"><?php echo $cateIn['category_name']; ?></a>
                        </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                    <li class="nav-item dropdown @@category__active">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            目录 <span class="fa fa-angle-down"></span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <?php if(is_array($categoryInfo) || $categoryInfo instanceof \think\Collection): $i = 0; $__LIST__ = $categoryInfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cateIn): $mod = ($i % 2 );++$i;?>
                            <a class="dropdown-item @@ls__active" href="<?php echo url('category/index',array('cateid'=>$cateIn['id'])); ?>"><?php echo $cateIn['category_name']; ?></a>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </div>
                    </li>
                </ul>

                <!--/search-right-->
                <div class="search-right mt-lg-0 mt-2">
                    <a href="#search" title="search"><span class="fa fa-search" aria-hidden="true"></span></a>
                    <!-- search popup -->
                    <div id="search" class="pop-overlay">
                        <div class="popup">
                            <h3 class="hny-title two">Search here</h3>
                            <form action="<?php echo url('search/index'); ?>" method="Get" class="search-box">
                                <input type="search" placeholder="Search for blog posts" name="keywords" required="required" autofocus="">
                                <button type="submit" class="btn">Search</button>
                            </form>
                            <a class="close" href="">×</a>
                        </div>
                    </div>
                    <!-- /search popup -->
                </div>
                <!--//search-right-->

            </div>

            <!-- toggle switch for light and dark theme -->
            <div class="mobile-position">
                <nav class="navigation">
                    <div class="theme-switch-wrapper">
                        <label class="theme-switch" for="checkbox">
                            <input type="checkbox" id="checkbox">
                            <div class="mode-container">
                                <i class="gg-sun"></i>
                                <i class="gg-moon"></i>
                            </div>
                        </label>
                    </div>
                </nav>
            </div>
            <!-- //toggle switch for light and dark theme -->
        </div>
    </nav>
    <!--//nav-->
</header>
<!-- //header -->

<nav id="breadcrumbs" class="breadcrumbs">
	<div class="container page-wrapper">
		<a href="<?php echo url('index/index'); ?>">首页</a> / <span>搜索</span> / <span class="breadcrumb_last"><?php echo $searchKeywords; ?></span>
	</div>
</nav>
<div class="w3l-searchblock w3l-homeblock1 py-5">
    <div class="container py-lg-4 py-md-3">
        <!-- block -->
        <div class="row">
            <div class="col-lg-8 most-recent">
                <h3 class="section-title-left"><?php echo $searchKeywords; ?></h3>
               
                <div class="row">
                    <?php if(is_array($searchRes) || $searchRes instanceof \think\Collection): $i = 0; $__LIST__ = $searchRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$articles): $mod = ($i % 2 );++$i;?>
                    <div class="col-lg-6 col-md-6 item">
                        <div class="card">
                            <div class="card-header p-0 position-relative">
                                <a href="<?php echo url('article/index',array('artid'=>$articles['id'])); ?>">
                                    <img class="card-img-bottom d-block radius-image" src="<?php if($articles['pic'] != ''): ?>__UPLOADS__<?php echo $articles['pic']; else: ?>__IMG__/screenshot9.jpg<?php endif; ?>" alt="<?php echo $articles['title']; ?>">
                                </a>
                            </div>
                            <div class="card-body p-0 blog-details">
                                <a href="<?php echo url('article/index',array('artid'=>$articles['id'])); ?>" class="blog-desc"><?php echo $articles['title']; ?></a>
                                <p><?php echo $articles['description']; ?></p>
                                <div class="buttons-singles tags align-items-center mt-3 mb-1">
                                    <?php
                                        $arr=explode(',',$articles['keywords']);
                                        foreach ($arr as $key=>$value){
                                            echo "<a href='__SEARCH__index.html?keywords=$value'>$value</a>";
                                        }
                                    ?>
                                </div>
                                <ul class="blog-meta">
                                    <li class="meta-item blog-lesson">
                                        <span class="meta-value"> <?php echo date("Y-m-d",$articles['add_time']); ?> </span>
                                    </li>
                                    <li class="meta-item blog-students">
                                        <span class="meta-value"><?php echo $articles['click']; ?></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </div>

                <!-- pagination -->
                <div class="category_paginate pagination-wrapper mt-5">
                    <?php echo $searchRes->render(); ?>
                </div>
                <!-- //pagination -->
            </div>
            <div class="col-lg-4 trending mt-lg-0 mt-5 mb-lg-5">
                <div class="pos-sticky">
                <h3 class="section-title-left">热门点击 </h3>
<?php if(is_array($clickRes) || $clickRes instanceof \think\Collection): $i = 0; $__LIST__ = $clickRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cr): $mod = ($i % 2 );++$i;?>
<div class="grids5-info">
    <h4><?php echo $i; ?></h4>
    <div class="blog-info">
        <a href="<?php echo url('article/index',array('artid'=>$cr['id'])); ?>" class="blog-desc1"> <?php echo $cr['title']; ?></a>
        <div class="author align-items-center mt-2 mb-1">
            <span><?php echo $cr['description']; ?></span>
        </div>
        <ul class="blog-meta">
            <li class="meta-item blog-lesson">
                <span class="meta-value"> <?php echo date("Y-m-d",$cr['add_time']); ?> </span>
            </li>
            <li class="meta-item blog-students">
                <span class="meta-value">热点: <?php echo $cr['click']; ?></span>
            </li>
        </ul>
    </div>
</div>
<?php endforeach; endif; else: echo "" ;endif; ?>
                <h3 class="section-title-left mt-5">相关推荐 </h3>
<?php if(is_array($recommendRes) || $recommendRes instanceof \think\Collection): $i = 0; $__LIST__ = $recommendRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$rr): $mod = ($i % 2 );++$i;?>
<div class="grids5-info">
    <h4><?php echo $i; ?></h4>
    <div class="blog-info">
        <a href="<?php echo url('article/index',array('artid'=>$rr['id'])); ?>" class="blog-desc1"> <?php echo $rr['title']; ?></a>
        <div class="author align-items-center mt-2 mb-1">
            <span><?php echo $rr['description']; ?></span>
        </div>
        <ul class="blog-meta">
            <li class="meta-item blog-lesson">
                <span class="meta-value"> <?php echo date("Y-m-d",$rr['add_time']); ?> </span>
            </li>
            <li class="meta-item blog-students">
                <span class="meta-value">热点: <?php echo $rr['click']; ?></span>
            </li>
        </ul>
    </div>
</div>
<?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
            </div>
        </div>
        <!-- //block-->
    </div>
</div>

<!-- footer -->
<footer class="w3l-footer-16">
    <div class="footer-content py-lg-5 py-4 text-center">
        <div class="container">
            <div class="copy-right">
                <h6>Copyright &copy; 2019.shiyitalent.com All rights reserved.</h6>
            </div>
            <ul class="author-icons mt-4">
                <li><a class="facebook" href="#url"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                </li>
                <li><a class="twitter" href="#url"><span class="fa fa-twitter" aria-hidden="true"></span></a></li>
                <li><a class="google" href="#url"><span class="fa fa-google-plus" aria-hidden="true"></span></a>
                </li>
                <li><a class="linkedin" href="#url"><span class="fa fa-linkedin" aria-hidden="true"></span></a></li>
                <li><a class="github" href="#url"><span class="fa fa-github" aria-hidden="true"></span></a></li>
                <li><a class="dribbble" href="#url"><span class="fa fa-dribbble" aria-hidden="true"></span></a></li>
            </ul>
            <button onclick="topFunction()" id="movetop" title="Go to top">
                <span class="fa fa-angle-up"></span>
            </button>
        </div>
    </div>

    <!-- move top -->
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <!-- //move top -->
</footer>
<!-- //footer -->

<!-- Template JavaScript -->
<script src="__JS__/theme-change.js"></script>

<script src="__JS__/jquery-3.3.1.min.js"></script>

<!-- disable body scroll which navbar is in active -->
<script>
  $(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- disable body scroll which navbar is in active -->

<script src="__JS__/bootstrap.min.js"></script>

</body>

</html>