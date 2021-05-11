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
<meta name="author" content="www.cssmoban.com" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Cache-Control" content="no-siteapp" />
<meta name="description" content="<?php echo $web_info['description'];?>" />
<meta name="keywords" content="<?php echo $web_info['keywords'];?>" />
<link rel="stylesheet" href="css/default.css">

</head>

<body>

<!-- header -->
<?php include("header.php");?>

<main>
    <div>
        <div class="main-head">
            <p><span>美食资讯</span></p>
        </div>
    </div>
    <ul class="main-submenu main-submenu-second">
        <li><a href="productlist.html">寿司展示</a></li>
        <li><a href="about.html">关于我们</a></li>
    </ul>
    <ul class="article-list">

    <?php
        $result=mysqli_query($link,"select * from b_news order by shij desc limit 0,6");
        while($info=mysqli_fetch_array($result)){?>
        <li>
            <div class="article-date">
                <strong>06</strong>
                <p><?php echo $info['shij'];?></p>
            </div>
            <div class="article-info">
                <a href="#">
                    <h3><a href="info.html?id=<?php echo $info['id'];?>" target="_blank" title="<?php echo $info['title'];?>"><?php echo $info['title'];?></a></h3>
                    <p><?php echo $info['descr'];?></p>
                </a>
            </div>
        </li>
    <?php }?>

    </ul>
    <section class="article-btn">
        <span class="article-prev-btn"></span>
        <span class="article-next-btn"></span>
    </section>
    <nav aria-label="Page navigation" class="article-page">
        <ul class="pagination">

            <li><a href="article.html?page=1">首页</a></li> 
               <?php if($page<=1){?>
               <li>上一页</li> 
               <?php }else{?>
               <li><a href="article.html?page=<?php echo $page-1;?>">上一页</a></li>
               <?php
        //echo  '<li><a href="search.php?page='.($page-1).'">上一页</a></li>';
             } ?>
             <?php for($i=1;$i<=$pagenum;$i++){
              if($i==$page){?>
              <li>
               <?php echo $i;?>
             </li>

               <?php }else{?>
               <li>
                 <a href="article.html?page=<?php echo $i;?>"><?php echo $i;?></a>
               </li>
                 <?php }
               }?>

               <?php if($page>=$pagenum){?>
               <li>下一页</li>
               <?php }else{?>
               <li><a href="article.html?page=<?php echo $page+1;?>">下一页</a></li>
               <?php }?>

               <li><a href="article.html?page=<?php echo $pagenum;?>">末页</a></li>

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