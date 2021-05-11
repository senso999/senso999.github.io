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

<main>
    <div>
        <div class="main-head">
            <p><span>搜索关键字“<?php echo $gjz=$_POST['search-keyword'];?>”</span></p>
        </div>
    </div>
    <ul class="main-submenu main-submenu-second">
        <li><a href="../index.html">返回首页</a></li>
        <li><a href="productlist.html">寿司展示</a></li>
        <li><a href="about.html">关于我们</a></li>
    </ul>
    <ul class="article-list" id="pager">

    <?php
     $result=mysqli_query($link,"select * from b_news where title like '%$gjz%' or descr like '%$gjz%'");
  $sum=mysqli_num_rows($result);//得到记录总数
  $pagesize=8;  //每页显示的记录数
  $pagenum=ceil($sum/$pagesize);//得到分页数

  if($_GET['page'])
  $page=$_GET['page'];//当前页
else
  $page=1;


  $pagestart=$pagesize*($page-1);//得到当前页的记录其实位置
  $result=mysqli_query($link,"select * from b_news where title like '%$gjz%' or descr like '%$gjz%'order by shij desc limit $pagestart,$pagesize");

  while($info=mysqli_fetch_array($result)){?>

        <li>
            <div class="article-date">
                <strong><?php echo $info['id'];?></strong>
                <p><?php echo $info['shij'];?></p>
            </div>
            <div class="article-info">
                <a href="#">
                    <h3><a href="info.php?id=<?php echo $info['id'];?>" target="_blank" title="<?php echo $info['title'];?>"><?php echo $info['title'];?></a></h3>
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

            <li><a href="search.html?page=1">首页</a></li> 
               <?php if($page<=1){?>
               <li>上一页</li> 
               <?php }else{?>
               <li><a href="search.html?page=<?php echo $page-1;?>">上一页</a></li>
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
                 <a href="search.html?page=<?php echo $i;?>"><?php echo $i;?></a>
               </li>
                 <?php }
               }?>

               <?php if($page>=$pagenum){?>
               <li>下一页</li>
               <?php }else{?>
               <li><a href="search.html?page=<?php echo $page+1;?>">下一页</a></li>
               <?php }?>

               <li><a href="search.html?page=<?php echo $pagenum;?>">末页</a></li>

        </ul>
    </nav>
</main>

</body>

<script src="lib/jquery/jquery.js"></script>
<script src="lib/bootstrap/bootstrap.js"></script>
<script src="js/main.js"></script>
</html>