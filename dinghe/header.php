<!-- head --><head>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?d1c591d779d3274f3d12dc87721d2184";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
</head>
<!-- header -->

<header>
    <div class="header-nav">
        <div role="navigation">
            <a href="#" rel="home" class="hd-logo" title="美食餐厅"><img src="<?php echo $web_info["logo"];?>"></a>
            <ul class="hd-nav">
                <li class="search-box-li">
                    <div><input type="text" name="search-keyword" placeholder="输入关键词" form="search-keyword"><i
                            class="iconfont search-submit">&#xe617;</i></div>
                    <i class="search-exit"></i></li>
                <li><a href="../index.html" name="index">网站首页<span><i class="iconfont ">&#xe6aa;</i></span></a></li>
                <li><a href="productlist.html" name="productlist">寿司展示<span><i class="iconfont ">&#xe6aa;</i></span></a></li>
                <li><a href="article.html" name="article">最新动态<span><i class="iconfont ">&#xe6aa;</i></span></a></li>
                <li><a href="about.html" name="about">关于我们<span><i class="iconfont ">&#xe6aa;</i></span></a></li>
                <li><a href="contact.html" name="contact">在线留言<span><i class="iconfont ">&#xe6aa;</i></span></a></li>
            </ul>

            <div class="motai"></div>
            <ul>
                <li><a><i class="iconfont search-botton">&#xe617;</i></a></li>
                <li><a>中文</a></li>
                <li><a>En</a></li>
                <li><a><i class="iconfont nav-bottom">&#xe61f;</i></a></li>
            </ul>

        </div>
        <div class="search-box">
            <form method="post" action="search.html" id="search-keyword">
                <input type="text" name="search-keyword" placeholder="请输入您的内容">
                <span>
                    </span>
            </form>

        </div>

    </div>

    <div class="header-carousel container">

        <div id="myCarousel" class="carousel slide">
            <!-- 轮播（Carousel）指标 -->
            <ol class="carousel-indicators">

                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <!-- 轮播（Carousel）项目 -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="images/ban1.jpg" style="width:100%;" alt="First slide">
                </div>
                <div class="item">
                    <img src="images/ban2.jpg" style="width:100%;" alt="Second slide">
                </div>
                <div class="item">
                    <img src="images/ban3.jpg" style="width:100%;" alt="Third slide">
                </div>
            </div>
            <!-- 轮播（Carousel）导航 -->
            <a class="carousel-control left" href="#myCarousel"
               data-slide="prev"></a>
            <a class="carousel-control right" href="#myCarousel"
               data-slide="next"></a>
        </div>

    </div>
</header>


