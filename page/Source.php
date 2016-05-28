<!DOCTYPE html>
<html>
<head>
	<title>教学资源</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../css/iProgramme_1.css">
	<link rel="stylesheet" type="text/css" href="../css/iProgramme_2.css">
	<script src="../js/jquery-1.12.3.min.js"></script>
	<script src="../js/loginsign.js"></script>
	<script src="../js/notice.js"></script>
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
			<li class="top_resources"><a id="Res_a" href="source.php">教学资源</a></li>
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


	<div class="Main">
		<div id="notice_left">
			<div id="notice_intro">
				<p id="today_intro">今&nbsp;天</p>
				<div id="notice_today">
					<table class="notice_table">
						<tr>
							<td id="today_td1">最新资源</td>
						</tr>
						<tr>
							<td id="today_td2">ddd</td>
						</tr>
						<tr>
							<td>sss</td>
						</tr>
						<tr>
							<td>ddd</td>
						</tr>
						<tr>
							<td>sss</td>
						</tr>
						<tr>
							<td>ddd</td>
						</tr>
					</table>
				</div>

				<p id="yest_intro">昨&nbsp;天</p>
				<div id="notice_yest">
					<table class="notice_table">
						<tr>
							<td>sss</td>
						</tr>
						<tr>
							<td>ddd</td>
						</tr>
						<tr>
							<td>sss</td>
						</tr>
						<tr>
							<td>ddd</td>
						</tr>
						<tr>
							<td>sss</td>
						</tr>
						<tr>
							<td>ddd</td>
						</tr>
					</table>
				</div>

				<p id="week_intro">最近一周</p>
				<div id="notice_week">
					<table class="notice_table">
						<tr>
							<td>sss</td>
						</tr>
						<tr>
							<td>ddd</td>
						</tr>
						<tr>
							<td>sss</td>
						</tr>
						<tr>
							<td>ddd</td>
						</tr>
						<tr>
							<td>sss</td>
						</tr>
						<tr>
							<td>ddd</td>
						</tr>
					</table>
				</div>

				<p id="hist_intro">历史记录</p>
			</div>
		</div>
		
		<div id="wz">
			<div id="wz_title">
				<h1 id="title_style">666</h1>
			</div>
			<div id="wz_text">
				<pre>
   此前，网信办牵头的调查组曾在整改要求中明确表示，最晚在2016年5月31日,对商业推广信息逐条加注醒目标识，并予以风险提示；严格限制商
业推广信息比例，每页面不得超过30%.
   对于这两条硬性要求，百度先后于5月17日和5月23日提前兑现承诺。自5月17日开始，百度搜索结果页面的推广提示全部更改为更为醒目的「商
业推广」字样，并且明显区别于其他区域颜色，同时设置浮标风险提示：「本搜索结果为商业推广信息，请注意可能的风险。百度推出网民权益保
障计划，登录搜索有保障。」
   而在仅仅一周后，百度再次表示，自5月23日夜间开始，百度搜索结果全面实现每页面商业推广信息条数所占比例低于30%，每页推广信息数量
也已实现最多不超过4条。此外，本次整改中，百度还将针对医疗、药品、保健品、食品四大行业的商业推广采取更加严格的审查机制。
   百度的强硬整改举措并非只是说说而已，而这一举措后的百度似乎也让人看到了谷歌的影子。我们知道。自谷歌诞生以来，这家以「不作恶」
著称的搜索巨头对搜索广告上历来都比较克制。百度此次向谷歌看齐，在用户体验上也足以对标谷歌。而这也从这也从侧面印证了李彦宏「用户至
上，牺牲收入在所不惜」的决心。
   回归简单的百度或将倒逼行业变革
   不得不说，百度的整改颇有点「壮士断腕」的决心。要知道在此次如此严厉的整改之后，百度所能展现的广告位数量少了很多，这直接导致的
影响就是「百度推广的收入下降」，短期内对百度的影响可以说非常大。由于百度80%左右的营收都来自于广告，资本市场对百度未来营收增长开始
产生担忧。事实上早前网信办要求百度整改的消息传出来后，百度的股价一段时间内都陷入了低谷。
   但这种影响现在看来只是短时间的，自13日之后，百度股价已经连续多日上涨，截止24日晚间，当日百度股价上涨3.62%。在高盛近期发布的一
份研报中表示，「整改后的百度搜索将拥有一个更好的用户体验，用户忠诚度也将会有显著提升。而从百度的历史来看，此类事件往往都会使投资
者获益。」而此前，汇丰银行、瑞银等投行机构也发布了研报，给予百度买入评级，汇丰给出的目标股价为240美元。
竞价排名风波确实给百度带来了不少困扰，这家公司确实也迫切需要重新思考出一种更加合理的广告商业模式。但对整个行业来说，百度的整改或
许会彻底倒逼整个行业的变革。早前，360和搜狗曾借助百度陷入风波之时，先是360放弃一切消费者医疗商业推广业务，后是搜狗宣布推出「搜狗
明医」，并牵手微软推出英文和学术搜索，这两家公司成功吸引了众多媒体和网友的目光。
此前，网信办牵头的调查组曾在整改要求中明确表示，最晚在2016年5月31日，「对商业推广信息逐条加注醒目标识，并予以风险提示；严格限制商
业推广信息比例，每页面不得超过30%。」
对于这两条硬性要求，百度先后于5月17日和5月23日提前兑现承诺。自5月17日开始，百度搜索结果页面的推广提示全部更改为更为醒目的「商业推
广」字样，并且明显区别于其他区域颜色，同时设置浮标风险提示：「本搜索结果为商业推广信息，请注意可能的风险。百度推出网民权益保障计
划，登录搜索有保障。」
   而在仅仅一周后，百度再次表示，自5月23日夜间开始，百度搜索结果全面实现每页面商业推广信息条数所占比例低于30%，每页推广信息数量也
已实现最多不超过4条。此外，本次整改中，百度还将针对医疗、药品、保健品、食品四大行业的商业推广采取更加严格的审查机制。
百度的强硬整改举措并非只是说说而已，而这一举措后的百度似乎也让人看到了谷歌的影子。我们知道。自谷歌诞生以来，这家以「不作恶」著称
的搜索巨头对搜索广告上历来都比较克制。百度此次向谷歌看齐，在用户体验上也足以对标谷歌。而这也从这也从侧面印证了李彦宏「用户至上，
牺牲收入在所不惜」的决心。

			</pre>
			
			</div>
		</div>
	</div>
	<div id="Bottom"> </div>
</body>
</html>