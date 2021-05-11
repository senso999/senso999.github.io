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

<!-- main -->
<main>
    <div class="main-head">
        <p><span>在线预定</span></p>
    </div>
    <div class="main-reserve">
        <form action="#" method="post" id="food-reserve">
            <ul>
                <li>
                    <label for="username">姓名</label>
                    <input type="text" name="username" id="username">
                </li>
                <li>
                    <label for="phonenumber">电话号码</label>
                    <input type="text" name="phonenumber" id="phonenumber">
                </li>
                <li>
                    <label for="email">电子邮件</label>
                    <input type="text" name="email" id="email">
                </li>
                <li>
                    <label for="time">时间</label>
                    <input type="text" name="time" id="time">
                </li>
                <li>
                    <label for="numberofpeople">人数</label>
                    <input type="text" name="numberofpeople" id="numberofpeople">
                </li>
                <li>
                    <label for="date">日期</label>
                    <input type="text" name="date" id="date">
                </li>
                <li>
                    <label for="guestbook">留言</label>
                    <input type="text" name="guestbook" id="guestbook">
                </li>
            </ul>
            <a class="reserve">预定</a>

        </form>
    </div>
</main>

<!-- footer -->
<?php include("footer.php");?>

</body>

<script src="lib/jquery/jquery.js"></script>
<script src="lib/bootstrap/bootstrap.js"></script>
<script src="js/main.js"></script>
</html>