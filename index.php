<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>农名工管理信息系统</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<script src="js/jquery-3.0.0/jquery-3.0.0.min.js" type="text/javascript" charset="utf-8"></script>
	</head>
<body >
<div class="container">   
<!--头部-->
<?php
	include "head.html";
?>
<!--导航条-->
<?php
	include "nav.html";
?>
<!--轮播图-->
<div id="mycarousel" class="carousel slide">
	<ol class="carousel-indicators">
		<li data-target="#mycarousel" data-slide-to = "0" class="active"></li>
		<li data-target="#mycarousel" data-slide-to = "1"></li>
		<li data-target="#mycarousel" data-slide-to = "2"></li>
	</ol>
	<div class="carousel-inner">
		<div class="item active">
			<a href=""><img src="img/lunbo1.jpg"/></a>
		</div>
		<div class="item">
			<a href=""><img src="img/lunbo2.jpg"/></a>
		</div>
		<div class="item">
			<a href=""><img src="img/lunbo3.jpg"/></a>
		</div>
	</div>
</div>
<!--新闻栏-->
<div class="new">
	<p>全球动态</p>
	<ul class="nav nav-tabs " id="mytab">
		<li class="active">
			<a href="#guonei">国内新闻</a>
		</li>
		<li>
			<a href="#guoji">国际新闻</a>
		</li>
		<li>
			<a href="#nongye">农业新闻</a>
		</li>
	</ul>
	<span class="glyphicon glyphicon-hand-right">
		<a href="../xinwen_all/index.php">更多</a>
	</span>
	<div class="tab-content">
	<!-- 国内新闻 -->
		<div class="tab-pane active" id="guonei">
		<?php
			include "conn.php";
			$sql = "SELECT * FROM xinwen_in order by id desc limit {$offset},{$length}";
			foreach ($pdo->query($sql) as $row) {
				echo "<ul>";
				$s=mb_strcut($row['title'], 0,55);
				if(strlen($s)>50){
				$s=mb_strcut($row['title'], 0,55).'...';}
				$d=date('Y-m-d', strtotime($row['create_time']));
            	echo "<li ><a href='../xinwen_all/xinwen_in/xiangxi.php?id={$row['id']}'>$s</a><label>($d)</label> </li>";}
				echo "<span><a href='../xinwen_all/xinwen_in/index.php'>更多>></a></span>";
				echo "</ul>";
			?>
		</div>
	<div class="tab-pane" id="guoji">
	<!-- 国际新闻 -->
		<?php
			include "conn.php";
			$sql = "SELECT * FROM xinwen_out order by id desc limit {$offset},{$length}";
			foreach ($pdo->query($sql) as $row) {
				echo "<ul>";
				$s=mb_strcut($row['title'], 0,55);
				if(strlen($s)>50){
				$s=mb_strcut($row['title'], 0,55).'...';}
				$d=date('Y-m-d', strtotime($row['create_time']));
            	echo "<li ><a href='../xinwen_all/xinwen_out/xiangxi.php?id={$row['id']}'>$s</a><label>($d)</label> </li>";}
				echo "<span><a href='../xinwen_all/xinwen_out/index.php'>更多>></a></span>";
				echo "</ul>";
			?>
	</div>
	<div class="tab-pane" id="nongye">
	<!-- 农业新闻 -->
		<?php
			include "conn.php";
			$sql = "SELECT * FROM xinwen_nongye order by id desc limit {$offset},{$length}";
			foreach ($pdo->query($sql) as $row) {
				echo "<ul>";
				$s=mb_strcut($row['title'], 0,55);
				if(strlen($s)>50){
				$s=mb_strcut($row['title'], 0,55).'...';}
				$d=date('Y-m-d', strtotime($row['create_time']));
            	echo "<li ><a href='../xinwen_all/xinwen_nongye/xiangxi.php?id={$row['id']}'>$s</a><label>($d)</label> </li>";}
				echo "<span><a href='../xinwen_all/xinwen_nongye/index.php'>更多>></a></span>";
				echo "</ul>";
			?>
	</div>
	</div>	
</div>
<!--滚动字幕-->
<div class="gundong">
 	<marquee width="458" scrollamount="5">本网站招聘信息每周一更新，详细请看招聘求职栏目</marquee>
</div>
<!--三栏部分开始--> 
<div class="sanlan">
<div class="row">
<!--创业版块-->
 	<div class="col-md-4">
	<ul class="nav nav-tabs " id="mytab">
		<li class="active" style="width: 33%">
			<a href="#cyzc">创业政策</a>
		</li>
		<li>
			<a href="#cyxx">创业信息</a>
		</li>
		<li>
			<a href="#cyal">创业案例</a>
		</li>
	</ul>
	<div class="tab-content">
		<div class="tab-pane active" id="cyzc">
			<?php
			include "conn.php";
			$sql = "SELECT * FROM chuangyezhengce order by id desc limit {$offset},{$length}";
			foreach ($pdo->query($sql) as $row) {
				echo "<ul>";
				$s=mb_strcut($row['title'], 0,55);
				if(strlen($s)>50){
				$s=mb_strcut($row['title'], 0,55).'...';}
				$d=date('Y-m-d', strtotime($row['create_time']));
            	echo "<li ><a href='../chuangye/chuangyezhengce/xiangxi.php?id={$row['id']}'>$s</a><label>($d)</label> </li>";}
				echo "<span><a href='../chuangye/index.php'>更多>></a></span>";
				echo "</ul>";
			?>
		</div>
		<div class="tab-pane" id="cyxx">
			<?php
			include "conn.php";
			$sql = "SELECT * FROM chuangyexinxi order by id desc limit {$offset},{$length}";
			foreach ($pdo->query($sql) as $row) {
				echo "<ul>";
				$s=mb_strcut($row['title'], 0,55);
				if(strlen($s)>50){
				$s=mb_strcut($row['title'], 0,55).'...';}
				$d=date('Y-m-d', strtotime($row['create_time']));
            	echo "<li ><a href='../chuangye/chuangyexinxi/xiangxi.php?id={$row['id']}'>$s</a><label>($d)</label> </li>";}
				echo "<span><a href='../chuangye/index.php'>更多>></a></span>";
				echo "</ul>";
			?>
		</div>
		<div class="tab-pane" id="cyal">
			<?php
			include "conn.php";
			$sql = "SELECT * FROM chuangyeanli order by id desc limit {$offset},{$length}";
			foreach ($pdo->query($sql) as $row) {
				echo "<ul>";
				$s=mb_strcut($row['title'], 0,55);
				if(strlen($s)>50){
				$s=mb_strcut($row['title'], 0,55).'...';}
				$d=date('Y-m-d', strtotime($row['create_time']));
            	echo "<li ><a href='../chuangye/chuangyeanli/xiangxi.php?id={$row['id']}'>$s</a><label>($d)</label> </li>";}
				echo "<span><a href='../chuangye/index.php'>更多>></a></span>";
				echo "</ul>";
			?>
		</div>
	</div>
	
	</div>
<!--招聘版块-->
	<div class="col-md-4">
	<ul class="nav nav-tabs " id="mytab">
		<li class="active" style="width: 33%">
			<a href="#zpxx">招聘信息</a>
		</li>
		<li>
			<a href="#qyjs">企业介绍</a>
		</li>
		<li>
			<a href="#msjq">面试技巧</a>
		</li>
	</ul>
	<div class="tab-content">
		<div class="tab-pane active" id="zpxx">
			<?php
			include "conn.php";
			$sql = "SELECT * FROM zhaopinxinxi order by id desc limit {$offset},{$length}";
			foreach ($pdo->query($sql) as $row) {
				echo "<ul>";
				$s=mb_strcut($row['title'], 0,55);
				if(strlen($s)>50){
				$s=mb_strcut($row['title'], 0,55).'...';}
				$d=date('Y-m-d', strtotime($row['create_time']));
            	echo "<li ><a href='../zhaopinxinxi/xiangxi.php?id={$row['id']}'>$s</a><label>($d)</label> </li>";}
				echo "<span><a href='../zhaopinxinxi/index.php'>更多>></a></span>";
				echo "</ul>";
			?>
		</div>
		<div class="tab-pane" id="qyjs">
			<?php
			include "conn.php";
			$sql = "SELECT * FROM qiyexinxi order by id desc limit {$offset},{$length}";
			foreach ($pdo->query($sql) as $row) {
				echo "<ul>";
				$s=mb_strcut($row['title'], 0,55);
				if(strlen($s)>50){
				$s=mb_strcut($row['title'], 0,55).'...';}
				$d=date('Y-m-d', strtotime($row['create_time']));
            	echo "<li ><a href='../zhaopinxinxi/qiyexinxi/xiangxi.php?id={$row['id']}'>$s</a><label>($d)</label> </li>";}
				echo "<span><a href='../zhaopinxinxi/qiyexinxi/index.php'>更多>></a></span>";
				echo "</ul>";
			?>
		</div>
		<div class="tab-pane" id="msjq">
			<?php
			include "conn.php";
			$sql = "SELECT * FROM mianshijiqiao order by id desc limit {$offset},{$length}";
			foreach ($pdo->query($sql) as $row) {
				echo "<ul>";
				$s=mb_strcut($row['title'], 0,55);
				if(strlen($s)>50){
				$s=mb_strcut($row['title'], 0,55).'...';}
				$d=date('Y-m-d', strtotime($row['create_time']));
            	echo "<li ><a href='../jiuye/mianshijiqiao/xiangxi.php?id={$row['id']}'>$s</a><label>($d)</label> </li>";}
				echo "<span><a href='../jiuye/mianshijiqiao/index.php'>更多>></a></span>";
				echo "</ul>";
			?>
		</div>
	</div>
	</div>
<!--登录区域-->
	<div class="col-md-4 login" style="background-color: #E7E7E7" id="zhuce1">
		<p>
			登录后，您可以使用留言等功能
		</p>
		<img src="img/login.jpg"/>
	<form action="../user/logins.php" method="POST" name="login">
		<div class="input-group">
			<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
			<input type="text" class="form-control" placeholder="账号/手机号" name="username"/>
		</div>
		<div class="input-group" style="margin-top: 10px">
			<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
			<input type="password" class="form-control" placeholder="用户密码" name="password"/>
		</div>
		<div class="yzm">
			<label>验证码：</label>
			<input type="text" name="code" size="4" style="float: left;width: 163px;margin-right: 10px;" placeholder="看不清？点击图片换一个">
			<a href="javascript:;" onclick="document.getElementById('captcha_img').src='../user/captcha.php?r='+Math.random()">
			<img id='captcha_img' border="1" src='../user/captcha.php?r=echo rand(); ?>' style="width: 100px;height: 30px"/>
			</a>
		</div>
		<input type="submit" class="btn btn-primary" name="sub" value="登录" />
</form>
		<input type="button" class="btn btn-info"  value="注册" data-toggle="modal" data-target="#register" style="margin-top: -55px;margin-left: 120px;" />
    <!-- 注册窗口 -->
		<div id="register" class="modal fade" tabindex="-1" style="text-align: center">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <button class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-title">
                    <h1 class="text-center">注册</h1>
                </div>
                <div class="modal-body">
                    <form class="form-group" action="/user/zhuce_yanzheng.php" method="post" id="zhuce">
                            <div class="form-group" id="from-group">
                                <label>用&nbsp;户&nbsp;名&nbsp;：</label>
                				<input type="text" name="username" placeholder="请输入注册账号!注册成功后不可修改"/>
                            </div>
                            <div class="form-group">
                                <label>密&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;码：</label>
                				<input type="password" name="password" placeholder="请输入密码"/>
                            </div>
                            <div class="form-group">
                                <label>确认密码：</label>
                				<input type="password" name="confirm" placeholder="请再次输入密码"/>
                            </div>
                            <div class="form-group" id="from-group">
                                <label>邮&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;箱：</label>
                				<input type="text" name="email" placeholder="请输入邮箱"/>
                            </div>
                            <div class="form-group" id="from-group">
                                <label>技&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;能：</label>
               					<input type="text" name="zhiye" placeholder="填写您的技能，格式为司机、搬运；最多两项" maxlength="5" />
                            </div>
                            <div class="form-group" id="from-group">
                                <label>居&nbsp;住&nbsp;地&nbsp;：</label>
                				<input type="text" name="city" placeholder="请填写您目前所在地"/>
                            </div>
                            <div >
                                <label>验&nbsp;证&nbsp;码&nbsp;：</label>
            					<input type="text" name="code" size="4" style="width: 176px" placeholder="看不清？点击图片换一个">
            					<a href="javascript:;" onclick="document.getElementById('captcha_img').src='../user/captcha.php?r='+Math.random()">
            					<img id='captcha_img' border="1" src='../user/captcha.php?r=echo rand(); ?>' style="width: 100px;height: 30px;margin-bottom: 4px"/>
            					</a>
                            </div>
                            <div class="text-right">
                                <button class="btn btn-primary" type="submit">提交</button>
                                <button class="btn btn-danger" data-dismiss="modal">取消</button>
                            </div>
                            <a href="index.php#zhuce1" data-toggle="modal" data-dismiss="modal" data-target="#login">已有账号？点我登录</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
		<input type="button" class="btn btn-danger" value="忘记密码？" onclick="wangji()" style="margin-top:-34px" />
		<script></script>

	
	</div>
</div>
</div>	



<!--底部-->
<?php
	include "foot.html";
?>
</div>
<script src="js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
<script src="js/head.js" type="text/javascript" charset="utf-8"></script>
</body>
</html>
