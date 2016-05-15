<!DOCTYPE html>
<html>
<head>
	<title>iProgramme</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../css/iProgramme_1.css">
	<script src="../js/jquery.js"></script>
	<script type="text/javascript">
		function openme(){
        document.getElementById('login').style.display='block';
        }
        function closeme(){
        document.getElementById('login').style.display='none';
		document.getElementById("no_name").style.display="none";
		document.getElementById("no_pas").style.display="none";
        }
        function logo_in(){
        //验证
        //转向...
        //myform.action=""
        //myform.submit()
		var user=document.getElementById("name").value;
		var pass=document.getElementById("password").value;
		if(user&&pass)
		{
			if(user!="Admin")
			{
				document.getElementById("name").value="";
				document.getElementById("password").value="";
				document.getElementById("no_name").style.display="";
			}
			else
				if(pass!="12345")
				{
					document.getElementById("no_name").style.display="none";
					document.getElementById("no_pas").style.display="";
					document.getElementById("password").value="";
				}
				else
				{
					document.getElementById("no_name").style.display="none";
					document.getElementById("no_pas").style.display="none";
			   	    alert("Success!");
					closeme();
				}
		
		}
        }

        function opensign(){
        document.getElementById('sign').style.display='block';
        }
         function closesign(){
        document.getElementById('sign').style.display='none';
		document.getElementById("new_name").style.display="none";
		document.getElementById("new_password").style.display="none";
		document.getElementById("newname").value="";
		document.getElementById("password1").value="";
		document.getElementById("password2").value="";
        }
        function sign_up(){
        //验证
        //转向...
        //myform.action=""
        //myform.submit()
		var user=document.getElementById("newname").value;
		var pas1=document.getElementById("password1").value;
		var pas2=document.getElementById("password2").value;
		
		
			if(user=="Admin")
			{
				document.getElementById("new_name").style.display="";
				document.getElementById("new_password").style.display="none";
				document.getElementById("newname").value="";
				document.getElementById("password1").value="";
				document.getElementById("password2").value="";
			}
			else
			if(pas1!=pas2)
			{
				document.getElementById("new_name").style.display="none";
				document.getElementById("new_password").style.display="";
				document.getElementById("password1").value="";
				document.getElementById("password2").value="";
			}
			else
			if(pas1!="")
			{
				document.getElementById("new_name").style.display="none";
				document.getElementById("new_password").style.display="none";
				alert("sign up Success!");
				document.getElementById("newname").value="";
				document.getElementById("password1").value="";
				document.getElementById("password2").value="";
				closesign();
			}
        }
	</script>
</head>
<body>
	<div id="Top">
		<a style="float: left;text-decoration: none;color: white;margin-left: 15px" class="aiprog" href="../page/Homepage.php">
			<!--img id="iprog" src="../image/iprogramme.png"-->
			<h2 style="letter-spacing: 3px">iProgramme</h2>
		</a>
		<ul id="top_nav">
			<li class="top_student"><a id="Stu_a" href="">学生</a></li>
			<li class="top_teacher"><a id="Tea_a" href="">教师</a></li>
			<li class="top_administrator"><a id="Adm_a" href="">管理员</a></li>
			<li class="top_resources"><a id="Res_a" href="">教学资源</a></li>
			<li class="top_personal"><a id="Per_a" href="">个人资料</a></li>
		</ul>
		<ul id="signandlogin_ul">
			<li class="top_log" onclick="openme()">Log In</li>
			<li class="top_sign" onclick="opensign()">Sign Up</li>
		</ul>
	</div>


	<div id="login">
	    
				<p style="background-color: #000 ;color:#fff ;height: 1.8em;line-height: 1.5em" >&nbsp;登陆账号
				<input style="float: right;background-color: #f0f0f0;border:0;border-radius: 5px;height:22px;width:22px;margin-top: 5px;margin-right: 5px" type="button" value="X" onclick="closeme()">
				</p>	
				<form style="margin: 20px;font-weight: bold;font-size: 0.8em;">
					用户名：<b id="no_name" style="display:none;">用户名不存在！</b><br/>
					<input type="text" style="height:37px;width:300px;margin-top: 10px;font-size: 1em" placeholder="账号或邮箱地址" id="name">
					<br/><br/>
					密&nbsp;码：<b id="no_pas" style="display:none;">密码错误！</b><br/>
					<input type="password" style="width: 300px;height: 37px;margin-top: 10px;font-size: 1em" placeholder="密码" id="password">
				</form>
				<button value="取消" style="height:28px;width: 55px;border:0;float: right;margin-right: 20px;font-size: 0.7em;margin-top: 20px;background-color: #ddd" onclick="closeme()">取消</button>
				<button value="确认" style="height:28px;width: 55px;border:0;float: right;margin-right: 20px;font-size: 0.7em;margin-top: 20px;background-color: #5753c3;color: white" onclick="logo_in()">确认</button>

	</div>

	<div id="sign">
	    
				<p style="background-color: #000 ;color:#fff ;height: 1.8em;line-height: 1.5em" >&nbsp;注册账号
				<input style="float: right;background-color: #f0f0f0;border:0;border-radius: 5px;height:22px;width:22px;margin-top: 5px;margin-right: 5px" type="button" value="X" onclick="closesign()">
				</p>	
				<form style="margin: 20px;font-weight: bold;font-size: 0.8em;">
					用户名：<b id="new_name" style="display:none;">用户名已存在！</b><br/>
					<input type="text" style="height:37px;width:300px;margin-top: 10px;font-size: 1em" placeholder="账号或邮箱地址" id="newname">
					<br/><br/>
					密&nbsp;码：<b id="new_password" style="display:none;">密码不一致！</b><br/>
					<input type="password" style="width: 300px;height: 37px;margin-top: 10px;font-size: 1em" placeholder="请输入密码" id="password1">
					<br/><br/>
					密&nbsp;码：<br/>
					<input type="password" style="width: 300px;height: 37px;margin-top: 10px;font-size: 1em" placeholder="请再次输入密码" id="password2">
				</form>
				<button value="取消" style="height:28px;width: 55px;border:0;float: right;margin-right: 20px;font-size: 0.7em;margin-top: 20px;background-color: #ddd" onclick="closesign()">取消</button>
				<button value="确认" style="height:28px;width: 55px;border:0;float: right;margin-right: 20px;font-size: 0.7em;margin-top: 20px;background-color: #5753c3;color: white" onclick="sign_up()">确认</button>

	</div>


	<div class="Notice">
		<div class="notice_top">
			<div class="Notice_1">公告</div>
			<div class="notice_more"><a class="notice_more_a" href="">查看更多</a></div>
		</div>
		<hr/>
			<ul id="notice_ul">
				<li class="notice_li">
					<div class="Notice_content">  <!--公告块模板-->
						<div class="content_nav">
							<div class="notice_img"><img class="speaker" src="../image/speaker.png"></div>
							<div class="notice_class">公告1</div>
						</div>
						<div class="content_title">11111</div>
						<div class="content_main">
						
						</div>
						<div class="content_knowmore"><a class="content_knowmore_a" href="">查看详情</a></div>
					</div>
				</li>
				<li class="notice_li">
					<div class="Notice_content">  <!--公告块模板-->
						<div class="content_nav">
							<div class="notice_img"><img class="speaker" src="../image/speaker.png"></div>
							<div class="notice_class">公告2</div>
						</div>
						<div class="content_title">11111</div>
						<div class="content_main">
							
						</div>
						<div class="content_knowmore"><a class="content_knowmore_a" href="">查看详情</a></div>
					</div>
				</li>
				<li class="notice_li">
					<div class="Notice_content">  <!--公告块模板-->
						<div class="content_nav">
							<div class="notice_img"><img class="speaker" src="../image/speaker.png"></div>
							<div class="notice_class">公告3</div>
						</div>
						<div class="content_title">11111</div>
						<div class="content_main">
							
						</div>
						<div class="content_knowmore"><a class="content_knowmore_a" href="">查看详情</a></div>
					</div>
				</li>
				<li class="notice_li">
					<div class="Notice_content">  <!--公告块模板-->
						<div class="content_nav">
							<div class="notice_img"><img class="speaker" src="../image/speaker.png"></div>
							<div class="notice_class">公告4</div>
						</div>
						<div class="content_title">11111</div>
						<div class="content_main">
							
						</div>
						<div class="content_knowmore"><a class="content_knowmore_a" href="">查看详情</a></div>
					</div>
				</li>
			</ul>
	</div>

	<div id="Bottom"></div>
</body>
</html>
