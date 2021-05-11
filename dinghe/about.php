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
<meta name="description" content="" />
<meta name="keywords" content="" />
<link rel="stylesheet" href="css/default.css">


    <style type="text/css">
        html, body {
            margin: 0;
            padding: 0;
        }

        .iw_poi_title {
            color: #CC5522;
            font-size: 14px;
            font-weight: bold;
            overflow: hidden;
            padding-right: 13px;
            white-space: nowrap
        }

        .iw_poi_content {
            font: 12px arial, sans-serif;
            overflow: visible;
            padding-top: 4px;
            white-space: -moz-pre-wrap;
            word-wrap: break-word
        }

    </style>
    <script type="text/javascript" src="http://api.map.baidu.com/api?key=&v=1.1&services=true"></script>

</head>

<body>

<!-- header -->
<?php include("header.php");?>

<main>
    <div class="main-head">
        <p><span>关于我们</span></p>
    </div>
</main>
<div class="main-all-width">
    <div class="main-about-body">
        <div><img src="images/about1.jpg"></div>
        <div><img src="images/about2.jpg"></div>
    </div>
    <div class="main-about-footer">
        <p class="chinese">&nbsp&nbsp每一种食物来源都经过我们的精挑细选，关于食材我们只选最天然、健康、优质的，只为一份对极致美味的追求，用心做好每一份寿司，是我们不变的宗旨。</p>
        <p class="english">&nbsp&nbspEvery food source has been carefully selected by us. We only choose the most natural, healthy and high-quality food materials for the pursuit of ultimate delicacy. It is our unchanging purpose to make every sushi well.</p>
    </div>
</div>

<main>
    <div class="main-head">
        <p><span>联系我们</span></p>
    </div>
</main>

<div class="main-all-width">
    <div class="main-about-body main-padding">
        <div class="main-about-map">
            <div style="border:#ccc solid 1px;" id="dituContent"></div>
        </div>
        <div class="main-about-info-right">
            <ul class="main-about-info">
                <li><span></span>
                    <p>河北省沧州市青县华兴街与新华路交叉口西100米</p></li>
                <li><span></span>
                    <p>15631789683</p></li>
                <li><span></span>
                    <div class="date-box">
                        <div class="main-about-datetime">
                            <div class="main-about-date">周一至周日</div>
                            <div class="main-about-time">
                                <div>上午9:00-14:00</div>
                                <div>下午17:00-21:00</div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>

<!-- footer -->
<?php include("footer.php");?>

</body>

<script type="text/javascript">
    //创建和初始化地图函数：
    function initMap() {
        createMap();//创建地图
        setMapEvent();//设置地图事件
        addMapControl();//向地图添加控件
        addMarker();//向地图中添加marker
    }

    //创建地图函数：
    function createMap() {
        var map = new BMap.Map("dituContent");//在百度地图容器中创建一个地图
        var point = new BMap.Point(116.824623,38.583097);//定义一个中心点坐标
        map.centerAndZoom(point, 18);//设定地图的中心点和坐标并将地图显示在地图容器中
        window.map = map;//将map变量存储在全局
    }

    //地图事件设置函数：
    function setMapEvent() {
        map.enableDragging();//启用地图拖拽事件，默认启用(可不写)
        map.enableScrollWheelZoom();//启用地图滚轮放大缩小
        map.enableDoubleClickZoom();//启用鼠标双击放大，默认启用(可不写)
        map.enableKeyboard();//启用键盘上下左右键移动地图
    }

    //地图控件添加函数：
    function addMapControl() {
        //向地图中添加缩放控件
        var ctrl_nav = new BMap.NavigationControl({anchor: BMAP_ANCHOR_TOP_LEFT, type: BMAP_NAVIGATION_CONTROL_LARGE});
        map.addControl(ctrl_nav);

    }

    //标注点数组
    var markerArr = [{
        title: "大冶云阿拉丁",
        content: "我的备注",
        point: "114.973835|30.107743",
        isOpen: 0,
        icon: {w: 21, h: 21, l: 0, t: 0, x: 6, lb: 5}
    }
    ];
    //创建marker
    function addMarker() {
        for (var i = 0; i < markerArr.length; i++) {
            var json = markerArr[i];
            var p0 = json.point.split("|")[0];
            var p1 = json.point.split("|")[1];
            var point = new BMap.Point(p0, p1);
            var iconImg = createIcon(json.icon);
            var marker = new BMap.Marker(point, {icon: iconImg});
            var iw = createInfoWindow(i);
            var label = new BMap.Label(json.title, {"offset": new BMap.Size(json.icon.lb - json.icon.x + 10, -20)});
            marker.setLabel(label);
            map.addOverlay(marker);
            label.setStyle({
                borderColor: "#808080",
                color: "#333",
                cursor: "pointer"
            });

            (function () {
                var index = i;
                var _iw = createInfoWindow(i);
                var _marker = marker;
                _marker.addEventListener("click", function () {
                    this.openInfoWindow(_iw);
                });
                _iw.addEventListener("open", function () {
                    _marker.getLabel().hide();
                })
                _iw.addEventListener("close", function () {
                    _marker.getLabel().show();
                })
                label.addEventListener("click", function () {
                    _marker.openInfoWindow(_iw);
                })
                if (!!json.isOpen) {
                    label.hide();
                    _marker.openInfoWindow(_iw);
                }
            })()
        }
    }
    //创建InfoWindow
    function createInfoWindow(i) {
        var json = markerArr[i];
        var iw = new BMap.InfoWindow("<b class='iw_poi_title' title='" + json.title + "'>" + json.title + "</b><div class='iw_poi_content'>" + json.content + "</div>");
        return iw;
    }
    //创建一个Icon
    function createIcon(json) {
        var icon = new BMap.Icon("images/position.png", new BMap.Size(json.w, json.h), {
            imageOffset: new BMap.Size(-json.l, -json.t),
            infoWindowOffset: new BMap.Size(json.lb + 5, 1),
            offset: new BMap.Size(json.x, json.h)
        })
        return icon;
    }

    initMap();//创建和初始化地图
</script>

<script src="lib/jquery/jquery.js"></script>
<script src="lib/bootstrap/bootstrap.js"></script>
<script src="js/main.js"></script>
</html>