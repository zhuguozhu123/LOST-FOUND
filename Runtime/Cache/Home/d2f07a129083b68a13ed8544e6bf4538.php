<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<title>
个人失物
</title>
</head>
<body>
<span><h1>个人失物</h1></span><hr>
<button onclick="back()" >返回</button>
<button onclick="fullMsg()" >个人信息</button>
<button onclick="lostlist()" >我的报失</button>
<button onclick="lostadd()" >新建报失</button>
<div style="visibility:hidden;display:none">
<div id="userindex">
<?php echo U('Home/User/index');?>
</div>
<div id="fullMsg">
<?php echo U('Home/User/fullMsg');?>
</div>
<div id="personallostlist">
<?php echo U('Home/Personal/lostlist');?>
</div>
<div id="personallostadd">
<?php echo U('Home/Personal/lostadd');?>
</div>
</div>
	    <script type="text/javascript" src="/campus/Public/js/jquery-2.2.4.min.js"></script>
		<script type="text/javascript" src="/campus/Public/js/bootstrap.min.js"></script>
		<script type="text/javascript">
		var back = function(){
			window.location.href = $('#userindex').html();
		}
		var fullMsg = function(){
			window.location.href = $('#fullMsg').html();
		}
		var lostlist = function(){
			window.location.href = $('#personallostlist').html();
		}
		var lostadd = function(){
			window.location.href = $('#personallostadd').html();
		}

</script>
</body>
</html>