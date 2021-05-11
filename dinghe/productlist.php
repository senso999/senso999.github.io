<?php include("conn.php");?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $web_info["title"];?></title>

    <link rel="stylesheet" href="file:///C|/pro2/default.css">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7"/>
<meta name="format-detection" content="telephone=no">
<meta name="renderer" content="webkit">
<meta name="author" content="www.dinghess.cn" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Cache-Control" content="no-siteapp" />
<meta name="description" content="<?php echo $web_info['description'];?>" />
<meta name="keywords" content="<?php echo $web_info['keywords'];?>" />
<link rel="stylesheet" href="css/default.css">

</head>
<body>

<!-- header -->
<?php include("header.php");?>

<main >

    <div>
        <div class="main-head">
            <p>
                <span>寿司展示</span>
            </p>
        </div>
    </div>
</main>

<main>
    <ul class="main-submenu">
        <li><a href="article.html">最新动态</a></li>
        <li><a href="about.html">关于我们</a></li>
    </ul>
    <ul class="main-submenu-info main-submenu-first">
        <li><a href="images/foodfrom1.jpg">
            <div class="food-name">
                <p>寿司拼盘</p>
                <p>Shuo si pin pan</p>
            </div>
            <div class="food-price">
                <p>￥<span>20</span></p>
            </div>
            <div class="img-bg"></div>
            <img src="images/foodfrom1.jpg"></a>
        </li>
        <li><a href="images/foodfrom2.jpg">
            <div class="food-name">
                <p>寿司拼盘</p>
                <p>Shuo si pin pan</p>
            </div>
            <div class="food-price">
                <p>￥<span>20</span></p>
            </div>
            <div class="img-bg"></div>
            <img src="images/foodfrom2.jpg"></a>
        </li>
        <li><a href="images/foodfrom3.jpg">
            <div class="food-name">
                <p>寿司拼盘</p>
                <p>Shuo si pin pan</p>
            </div>
            <div class="food-price">
                <p>￥<span>20</span></p>
            </div>
            <div class="img-bg"></div>
            <img src="images/foodfrom3.jpg"></a>
        </li>
        <li><a href="images/foodfrom4.jpg">
            <div class="food-name">
                <p>寿司拼盘</p>
                <p>Shuo si pin pan</p>
            </div>
            <div class="food-price">
                <p>￥<span>20</span></p>
            </div>
            <div class="img-bg"></div>
            <img src="images/foodfrom4.jpg"></a>
        </li>
        <li><a href="images/foodfrom5.jpg">
            <div class="food-name">
                <p>寿司拼盘</p>
                <p>Shuo si pin pan</p>
            </div>
            <div class="food-price">
                <p>￥<span>20</span></p>
            </div>
            <div class="img-bg"></div>
            <img src="images/foodfrom5.jpg"></a>
        </li>
        <li><a href="images/foodfrom6.jpg">
            <div class="food-name">
                <p>寿司拼盘</p>
                <p>Shuo si pin pan</p>
            </div>
            <div class="food-price">
                <p>￥<span>20</span></p>
            </div>
            <div class="img-bg"></div>
            <img src="images/foodfrom6.jpg"></a>
        </li>
        <li><a href="images/foodfrom7.jpg">
            <div class="food-name">
                <p>寿司拼盘</p>
                <p>Shuo si pin pan</p>
            </div>
            <div class="food-price">
                <p>￥<span>20</span></p>
            </div>
            <div class="img-bg"></div>
            <img src="images/foodfrom7.jpg"></a>
        </li>
        <li><a href="images/foodfrom8.jpg">
            <div class="food-name">
                <p>寿司拼盘</p>
                <p>Shuo si pin pan</p>
            </div>
            <div class="food-price">
                <p>￥<span>20</span></p>
            </div>
            <div class="img-bg"></div>
            <img src="images/foodfrom8.jpg"></a>
        </li>
    </ul>
    <nav aria-label="Page navigation">
        <ul class="pagination">
            
            <?php for($i=1;$i<=$pagenum;$i++){
              if($i==$page){?>
              <li class="thisclass">
                 <?php echo $i;?>
             </li>
             <?php }else{?>
             <li>
               <a href="list.php?page=<?php echo $i;?>" data-ey_fc35fdc="html" data-tmp="1"><?php echo $i;?></a>
           </li>
           <?php }
        }?>

            <li>
                <a href="#" aria-label="Next">
                    <span aria-hidden="true">下一页</span>
                </a>
            </li>
        </ul>
    </nav>
</main>

<!-- footer -->
<?php include("footer.php");?>

</body>

<script src="lib/jquery/jquery.js"></script>
<script src="lib/bootstrap/bootstrap.js"></script>
<script src="js/main.js"></script>
</html>