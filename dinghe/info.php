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
    <div class="sapce"></div>
    <div>
        <div class="main-head">
            <p><span>美食资讯</span></p>
        </div>
    </div>
    <ul class="main-submenu main-submenu-second">
        <li><a href="../index.html">返回首页</a></li>
        <li><a href="article.html">返回列表</a></li>
        <li><a href="about.html">关于我们</a></li>
    </ul>
</main>
<main>

    <?php $bh=$_GET['id'];
        $result=mysqli_query($link,"select * from b_news where id=$bh");
        $info=mysqli_fetch_array($result);
    ?>

    <div class="article-content-box">
        <header class="article-content-header"><?php echo $info['title'];?></header>
        <div class="share">
            <span>分享到:</span>
            <div class="bdsharebuttonbox sharebox">
                <a href="javascript:void(0);" class="copy-url-btn" data-clipboard-action="copy" data-clipboard-target="#current-url"><div id="current-url" style="width:0px;height:0px;overflow:hidden;"></div>复制网址</a>
                <a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信">微信</a>
                <a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博">新浪微博</a>
                <a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间">QQ空间</a>
                <a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博">腾讯微博</a>
                <a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网">人人网</a>
            </div>
        </div>
        <article class="article-content">
            <p><?php echo $info['content'];?></p>
        </article>
        <footer class="article-footer-btn">

            <?php
            $result=mysqli_query($link,"select * from b_news where id<$bh order by id desc limit 0,1");
            if($info=mysqli_fetch_array($result)){
                ?>
                <a href="info.html?id=<?php echo $info['id'];?>" title="<?php echo $info['title'];?>"> 上一篇 : <?php echo $info['title'];?></a> 
                <?php }else{?>
                上一篇 :没有了
            <?php }?> 

            <?php
            $result=mysqli_query($link,"select * from b_news where id>$bh order by id asc limit 0,1");
            if($info=mysqli_fetch_array($result)){
                ?> 
                <a href="info.html?id=<?php echo $info['id'];?>" title="<?php echo $info['title'];?>"> 下一篇 : <?php echo $info['title'];?></a> 
                <?php }else{?>
                下一篇 :没有了
            <?php }?>  
             
        </footer>
    </div>
</main>

<script>
    var clipBoardContent="";
    clipBoardContent += this.location.href;
    $('#current-url').html(clipBoardContent);

    // button的class的值
    var clipboard = new Clipboard('.copy-url-btn');
    clipboard.on('success', function(e) {
        alert('复制成功');
    });

    clipboard.on('error', function(e) {
        alert('复制失败，请手动进行复制');
    });
</script>
<script>




    window._bd_share_config = {
    "common": {
        "bdSnsKey": {},
        "bdText": "",
        "bdMini": "2",
        "bdPic": "",
        "bdStyle": "0",
        "bdSize": "16"
    }, "share": {}
};
with (document)0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src = 'http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion=' + ~(-new Date() / 36e5)];</script>
</body>

</html>