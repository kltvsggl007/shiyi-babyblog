<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:65:"D:\wamp\www\tp5\public/../application/index\view\index\index.html";i:1606370000;s:67:"D:\wamp\www\tp5\public/../application/index\view\common\header.html";i:1606441142;s:75:"D:\wamp\www\tp5\public/../application/index\view\common\column_right_1.html";i:1606204796;s:75:"D:\wamp\www\tp5\public/../application/index\view\common\column_right_2.html";i:1606201662;s:67:"D:\wamp\www\tp5\public/../application/index\view\common\footer.html";i:1606210101;}*/ ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>亲爱的十一|可爱的宝宝|小王翦的博客--来自爸爸妈妈的爱！</title>

    <!-- Template CSS -->
    <link rel="stylesheet" href="__CSS__/style-starter.css">
    <link href="__IMG__/favicon.png" rel="shortcut icon">
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

    <div class="w3l-homeblock1 py-5">
        <div class="container pt-lg-5 pt-md-4">
            <!-- block -->
            <div class="row">
                <div class="col-lg-9">
                    <h3 class="section-title-left">最新发布</h3>
                    <div class="row">
                        <div class="col-lg-5 col-md-6 item">
                            <?php if(is_array($latestArticle) || $latestArticle instanceof \think\Collection): $i = 0; $__LIST__ = $latestArticle;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$latest): $mod = ($i % 2 );++$i;?>
                            <div class="card">
                                <div class="card-header p-0 position-relative">
                                    <a href="<?php echo url('article/index',array('artid'=>$latest['id'])); ?>">
                                        <img class="card-img-bottom d-block radius-image" src="<?php if($latest['pic'] != ''): ?>__UPLOADS__/<?php echo $latest['pic']; else: ?>__IMG__/screenshot9.jpg<?php endif; ?>" alt="Card image cap">
                                    </a>
                                </div>
                                <div class="card-body p-0 blog-details">
                                    <a href="<?php echo url('article/index',array('artid'=>$latest['id'])); ?>" class="blog-desc"><?php echo $latest['title']; ?></a>
                                    <div class="description align-items-center mt-3 mb-1">
                                        <p><?php echo $latest['description']; ?></p>
                                    </div>
                                    <ul class="blog-meta">
                                        <li class="meta-item blog-lesson">
                                            <span class="meta-value"> <?php echo date("Y-m-d",$latest['add_time']); ?></span>
                                        </li>
                                        <li class="meta-item blog-students">
                                            热点：<span class="meta-value"> <?php echo $latest['click']; ?></span>
                                        </li>
                                    </ul>
                                    <a href="#" class="btn btn-style btn-outline mt-4">All featured
                                        posts</a>
                                </div>
                            </div>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </div>
                        <div class="col-lg-7 col-md-6 mt-md-0 mt-5">
                            <div class="list-view list-view1">

                                <?php if(is_array($articleRes) || $articleRes instanceof \think\Collection): $i = 0; $__LIST__ = $articleRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$artres): $mod = ($i % 2 );++$i;?>
                                <div class="grids5-info mb-5">
                                    <a href="<?php echo url('article/index',array('artid'=>$artres['id'])); ?>" class="d-block zoom"><img src="<?php if($artres['pic'] != ''): ?>__UPLOADS__/<?php echo $artres['pic']; else: ?>__IMG__/screenshot9.jpg<?php endif; ?>" alt="" class="img-fluid radius-image news-image"></a>
                                    <div class="blog-info align-self">
                                        <a href="<?php echo url('article/index',array('artid'=>$artres['id'])); ?>" class="blog-desc1"><?php echo $artres['title']; ?></a>
                                        <div class="description align-items-center mt-3 mb-1">
                                            <p><?php echo $artres['description']; ?></p>
                                        </div>
                                        <ul class="blog-meta">
                                            <li class="meta-item blog-lesson">
                                                <span class="meta-value"> <?php echo date("Y-m-d",$artres['add_time']); ?> </span>
                                            </li>
                                            <li class="meta-item blog-students">
                                                热点：<span class="meta-value"> <?php echo $artres['click']; ?></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 trending mt-lg-0 mt-5">
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
                    </div>
                </div>
            </div>
            <!-- //block -->


            <!-- block -->
            <div class="item mt-5 pt-4">
                <div class="row">
                    <div class="col-lg-6">
                        <a href="#blog-single">
                            <img class="card-img-bottom d-block radius-image" src="__IMG__/p3.jpg"
                                alt="Card image cap">
                        </a>
                    </div>
                    <div class="col-lg-6 blog-details align-self mt-lg-0 mt-sm-5 mt-4">
                        <a class="blog-desc-big">这里是亲爱的宝宝：小十一的博客</a>
                        <p>希望能在这里能见证和记录宝宝的每一个时刻，还有他的爸爸妈妈为宝宝做的每一件事</p>
                        <div class="author align-items-center mt-4 mb-1">
                            <a><?php echo date("m.j.Y");?></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //block-->


            <!-- block -->
            <!-- <div class="row mt-5 pt-5">
                <div class="col-lg-9 most-recent">
                    <h3 class="section-title-left">Most Recent posts </h3>
                    <div class="list-view ">
                        <div class="grids5-info img-block-mobile">
                            <div class="blog-info align-self">
                                <span class="category">Technology</span>
                                <a href="#blog-single" class="blog-desc mt-0">Curated Collection Post : 8 Examples of
                                    Evolution in Action
                                </a>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt tenetur accusamus
                                    voluptas. Mollitia, natus ipsam maiores placeat elit.</p>
                                <div class="author align-items-center mt-3 mb-1">
                                    <a href="#author">Johnson smith</a> in <a href="#url">Design</a>
                                </div>
                                <ul class="blog-meta">
                                    <li class="meta-item blog-lesson">
                                        <span class="meta-value"> April 13, 2020 </span>
                                    </li>
                                    <li class="meta-item blog-students">
                                        <span class="meta-value"> 6min read</span>
                                    </li>
                                </ul>
                            </div>
                            <a href="#blog-single" class="d-block zoom mt-md-0 mt-3"><img src="__IMG__/8.jpg"
                                    alt="" class="img-fluid radius-image news-image"></a>
                        </div>

                        <div class="grids5-info img-block-mobile mt-5">
                            <div class="blog-info align-self">
                                <span class="category">Based on your reading history</span>
                                <a href="#blog-single" class="blog-desc mt-0">The Key Benefits of Studying Online
                                    [Infographic]
                                </a>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt tenetur accusamus
                                    voluptas. Mollitia, natus ipsam maiores beatae elit.</p>
                                <div class="author align-items-center mt-3 mb-1">
                                    <a href="#author">Johnson smith</a> in <a href="#url">Design</a>
                                </div>
                                <ul class="blog-meta">
                                    <li class="meta-item blog-lesson">
                                        <span class="meta-value"> April 13, 2020 </span>
                                    </li>
                                    <li class="meta-item blog-students">
                                        <span class="meta-value"> 6min read</span>
                                    </li>
                                </ul>
                            </div>
                            <a href="#blog-single" class="d-block zoom mt-md-0 mt-3"><img src="__IMG__/9.jpg"
                                    alt="" class="img-fluid radius-image news-image"></a>
                        </div>

                        <div class="grids5-info img-block-mobile mt-5">
                            <div class="blog-info align-self">
                                <span class="category">Culture</span>
                                <a href="#blog-single" class="blog-desc mt-0">How to Write a Blog Post: A Step-by-Step
                                    Guide
                                </a>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt tenetur accusamus
                                    voluptas. Mollitia, natus ipsam maiores beatae elit.</p>
                                <div class="author align-items-center mt-3 mb-1">
                                    <a href="#author">Johnson smith</a> in <a href="#url">Design</a>
                                </div>
                                <ul class="blog-meta">
                                    <li class="meta-item blog-lesson">
                                        <span class="meta-value"> April 13, 2020 </span>
                                    </li>
                                    <li class="meta-item blog-students">
                                        <span class="meta-value"> 6min read</span>
                                    </li>
                                </ul>
                            </div>
                            <a href="#blog-single" class="d-block zoom mt-md-0 mt-3"><img src="__IMG__/16.jpg"
                                    alt="" class="img-fluid radius-image news-image"></a>
                        </div>

                        <div class="row most-recent-inner my-5 py-lg-4">
                            <div class="col-md-6">
                                <div class="list-view list-view1">
                                    <div class="grids5-info">
                                        <a href="#blog-single" class="d-block zoom"><img src="__IMG__/10.jpg"
                                                alt="" class="img-fluid radius-image news-image"></a>
                                        <div class="blog-info align-self">
                                            <a href="#blog-single" class="blog-desc1">Home to write High-Level blog
                                                posts
                                            </a>
                                            <div class="author align-items-center mt-3 mb-1">
                                                <a href="#author">Johnson smith</a> in <a href="#url">Design</a>
                                            </div>
                                            <ul class="blog-meta">
                                                <li class="meta-item blog-lesson">
                                                    <span class="meta-value"> April 13, 2020 </span>
                                                </li>
                                                <li class="meta-item blog-students">
                                                    <span class="meta-value"> 6min read</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="grids5-info mt-5">
                                        <a href="#blog-single" class="d-block zoom"><img src="__IMG__/11.jpg"
                                                alt="" class="img-fluid radius-image news-image"></a>
                                        <div class="blog-info align-self">
                                            <a href="#blog-single" class="blog-desc1">9 Reasons why your Blog posts are
                                                Hard to Read
                                            </a>
                                            <div class="author align-items-center mt-3 mb-1">
                                                <a href="#author">Johnson smith</a> in <a href="#url">Design</a>
                                            </div>
                                            <ul class="blog-meta">
                                                <li class="meta-item blog-lesson">
                                                    <span class="meta-value"> April 13, 2020 </span>
                                                </li>
                                                <li class="meta-item blog-students">
                                                    <span class="meta-value"> 6min read</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mt-md-0 mt-5">
                                <div class="list-view list-view1">
                                    <div class="grids5-info">
                                        <a href="#blog-single" class="d-block zoom"><img src="__IMG__/12.jpg"
                                                alt="" class="img-fluid radius-image news-image"></a>
                                        <div class="blog-info align-self">
                                            <a href="#blog-single" class="blog-desc1">How to run a Blog lead generation
                                                Analysis
                                            </a>
                                            <div class="author align-items-center mt-3 mb-1">
                                                <a href="#author">Johnson smith</a> in <a href="#url">Design</a>
                                            </div>
                                            <ul class="blog-meta">
                                                <li class="meta-item blog-lesson">
                                                    <span class="meta-value"> April 13, 2020 </span>
                                                </li>
                                                <li class="meta-item blog-students">
                                                    <span class="meta-value"> 6min read</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="grids5-info mt-5">
                                        <a href="#blog-single" class="d-block zoom"><img src="__IMG__/13.jpg"
                                                alt="" class="img-fluid radius-image news-image"></a>
                                        <div class="blog-info align-self">
                                            <a href="#blog-single" class="blog-desc1">The Anatomy of a perfect Blog post
                                            </a>
                                            <div class="author align-items-center mt-3 mb-1">
                                                <a href="#author">Johnson smith</a> in <a href="#url">Design</a>
                                            </div>
                                            <ul class="blog-meta">
                                                <li class="meta-item blog-lesson">
                                                    <span class="meta-value"> April 13, 2020 </span>
                                                </li>
                                                <li class="meta-item blog-students">
                                                    <span class="meta-value"> 6min read</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="grids5-info img-block-mobile mt-5">
                            <div class="blog-info align-self">
                                <span class="category">Sports and Fitness</span>
                                <a href="#blog-single" class="blog-desc mt-0">Ivy Goes Mobile With New App for Designers
                                </a>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt tenetur accusamus
                                    voluptas. Mollitia, natus ipsam maiores beatae elit.</p>
                                <div class="author align-items-center mt-3 mb-1">
                                    <a href="#author">Johnson smith</a> in <a href="#url">Design</a>
                                </div>
                                <ul class="blog-meta">
                                    <li class="meta-item blog-lesson">
                                        <span class="meta-value"> April 13, 2020 </span>
                                    </li>
                                    <li class="meta-item blog-students">
                                        <span class="meta-value"> 6min read</span>
                                    </li>
                                </ul>
                            </div>
                            <a href="#blog-single" class="d-block zoom mt-md-0 mt-3"><img src="__IMG__/14.jpg"
                                    alt="" class="img-fluid radius-image news-image"></a>
                        </div>

                        <div class="grids5-info img-block-mobile mt-5">
                            <div class="blog-info align-self">
                                <span class="category">Health and Food </span>
                                <a href="#blog-single" class="blog-desc mt-0">What I Wish I Had Known Before Writing My
                                    First Book
                                </a>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt tenetur accusamus
                                    voluptas. Mollitia, natus ipsam maiores beatae elit.</p>
                                <div class="author align-items-center mt-3 mb-1">
                                    <a href="#author">Johnson smith</a> in <a href="#url">Design</a>
                                </div>
                                <ul class="blog-meta">
                                    <li class="meta-item blog-lesson">
                                        <span class="meta-value"> April 13, 2020 </span>
                                    </li>
                                    <li class="meta-item blog-students">
                                        <span class="meta-value"> 6min read</span>
                                    </li>
                                </ul>
                            </div>
                            <a href="#blog-single" class="d-block zoom mt-md-0 mt-3"><img src="__IMG__/15.jpg"
                                    alt="" class="img-fluid radius-image news-image"></a>
                        </div>

                    </div>

                </div>
                <div class="col-lg-3 trending mt-lg-0 mt-5 mb-lg-5">
                    <div class="pos-sticky">
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
            </div> -->
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