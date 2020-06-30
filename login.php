<!DOCTYPE html>
<html lang="ko">
 <head>
  <meta charset="utf-8"/>
  <title> Barcelona_Login </title>
  <link rel="shortcut icon" href="img/logo.png"/>
  <link rel="apple-touch-icon" href="img/logo.png"/>
  <style>
	*{margin:0; padding:0;}
	li{list-style-type:none;}
	a:link, a:visited{text-decoration:none;}
	a:hover, a:focus{text-decoration:underline;}

	h2{width:1px; height:1px; line-height:0; font-size:1px; overflow:hidden; position:absolute; left:-9999px;}
	@font-face{font-family:"exo"; src:url("font/Exo2-Regular.woff");}
	@font-face{font-family:"saria"; src:url("font/Saira-Regular.woff");}
	@font-face{font-family:"pontano"; src:url("font/PontanoSans-Regular.woff");}

	#wrap{width:1920px; margin:0 auto;}
		/*################# header ####################*/
		#header{width:1920px; height:140px; position:absolute;}
			h1{width:300px; height:82px; position:absolute; left:810px; top:70px; margin:0 auto; z-index:1; font-family:"saria";}
				h1 a{display:block; width:100%; height:100%; overflow:hidden;}
				h1 a .logo{display:block; float:left; width:82px; height:82px;}
					h1 a .logo img{width:100%; height:100%;}
				h1 a .logoText{display:block; float:left; width:198px; padding:10px 0 0 20px; height:72px; font-size:25px; color:#fff; letter-spacing:2px; line-height:30px;}
					h1 a .logoText .normal{font-weight:400; color:#eee;}
					h1 a .logoText .gray{font-weight:400; color:#ccc;}

		
		/*################# container + loginWrap ####################*/
		#container{width:1920px;}
			#loginWrap{width:1920px; height:1000px; position:relative; background-image:url("img/ticket_back.png"); overflow:hidden;}

		
		/*################# container + loginWrap + ticketVisualWrap ####################*/
		#ticketVisualWrap{width:1391px; height:393px; position:absolute; left:264px; top:300px;}


		/*################# container + ticketVisualWrap + ticket ####################*/
		#ticket{float:left; width:981px; height:393px; background-image:url("img/login_ticket0.png"); background-repeat:no-repeat; position:relative; font-family:"pontano"}
			#ticket h3{position:absolute; width:400px; height:80px; padding:30px 0; top:3px; left:500px; font-size:30px; text-align:center; font-family:"saria";}
				#ticket h3 .normal{font-weight:400; color:#AE0917;}

		
		/*################# container + ticket + nowtime ####################*/
			#nowTime{width:95px; height:140px; position:absolute; top:2px; left:394px; font-family:arial,sans-serif;}
				#nowTime p{width:100%; text-align:center; color:#fff;}
				#nowTime .month{height:30px; line-height:30px;}
				#nowTime .date{height:60px; font-size:50px; line-height:60px; padding-bottom:5px;}
				#nowTime .time{height:20px; width:70px; margin:0 auto; background-color:black; line-height:20px; font-size:15px;}
				#nowTime .day{height:20px; padding-top:5px; line-height:15px;}

		/*################# container + ticket + loginArea ####################*/			
			#loginArea{width:400px; height:180px; position:absolute; top:145px; left:500px;}
				#loginArea fieldset{border:none;}
				#loginArea legend{display:none;}
					.idArea{width:300px; height:30px; margin:10px auto 10px;}
						#userid{width:298px; height:35px; border:1px solid #999; text-indent:10px; font-family:"pontano";}
					.passArea{width:300px; height:35px; margin:15px auto 10px;}
						#userpass{width:298px; height:35px; border:1px solid #999; text-indent:10px; font-family:"pontano";}
					.btn{width:300px; height:35px; text-align:center; margin:0 auto;}
						#btn{width:298px; height:35px; line-height:30px; border:none; background-color:#AE0917; color:#fff; font-size:15px; font-weight:700; font-family:"pontano";}
					.chkbtn{width:300px; height:35px; line-height:40px; text-align:center; margin:0 auto; font-size:14px;}
						.chkbtn input{vertical-align:middle;}
						.chkbtn label{padding:0 10px 0 3px;}



			#searchArea{width:400px; height:30px; position:absolute; top:320px; left:500px;}
				.searchs{width:400px; height:30px; line-height:25px; text-align:center;}
					.searchs li{display:inline; color:#777;}
						.searchs li a{padding:0 5px; font-size:13px; color:#112870; font-weight:bold;}
		
		/*################# container + loginWrap + visual ####################*/
		#visual{float:left; margin-left:10px; width:400px; height:393px; font-family:"pontano";}
			#visual li{width:400px; margin-top:13px; background-color:#ddd;}
			#visual .video{width:400px; height:225px; margin-top:0;}
				#visual .video video{width:100%;}
			#visual .match{width:400px; height:155px;}
				#visual .match h3{text-align:center; font-size:16px; color:#fff; width:100%; height:25px; line-height:25px; background-color:#333; font-family:"saria";}
				#visual .match h4{text-align:center; width:100%; height:25px; line-height:25px; color:#AE0917; font-size:14px; font-family:"saria";}
				#visual .match .date{text-align:center; width:100%; height:20px; line-height:15px; font-weight:700; font-size:13px;}
				#visual .match .home{float:left; padding-left:87px; width:75px; height:75px; text-align:right; padding-bottom:15px;}
					#visual .match .home img{width:100%; height:100%;}
				#visual .match .versus{float:left;width:76px; height:75px; line-height:75px; font-size:25px; text-align:center; padding-bottom:15px;}
				#visual .match .away{float:left; padding-right:87px; width:75px; height:75px; text-align:left; padding-bottom:15px;}
					#visual .match p.away img{width:100%; height:100%;}

		
		/*################# footer ####################*/
		#footer{width:100%; background-color:#131519; position:relative;}
			#copy{position:absolute; top:-160px; left:732px; color:#aaa; width:455px; height:21px; line-height:21px; font-family:"pontano";}
				#copy .copyright{display:block; text-align:center;}
				#copy .copy{font-weight:700;}
				#copy a{color:#fff;}
					#copy a:hover{color:#AE0917;}

			#sponser{width:1170px; height:45px; margin:0 auto; padding:20px 0 20px 20px; background-color:#131519;}
				#sponser ul{width:100%; height:100%; overflow:hidden;}
					#sponser ul li{width:110px; padding-right:20px; height:100%; float:left;}
						#sponser ul li a{display:block; width:100%; height:100%;} 
						#sponser ul li img{width:100%; height:100%;}

	
  </style>
 </head>
 <body>
	<div id="wrap">
		<header id="header">
			<h1>
				<a href="index.php" title="바로셀로나 사이트">
					<span class="logo">
						<img src="img/fcbLogo_login.png" alt="바로셀로나 로고 이미지"/>
					</span>
					<span class="logoText">
						FCB<span class="normal">ARCELONA</span> <span class="gray">LOGIN</span>
					</span>
				</a>
			</h1>
		</header>
		<div id="container">			
			<section id="loginWrap">
				<h2>로그인 영역 및 비주얼영역</h2>
				<div id="ticketVisualWrap">
					<div id="ticket">
						<h3>
							FC BARCELONA<br/>
							<span class="normal">Members</span>			
						</h3>
						<div id="nowTime">
							<p class="month">April</p>
							<p class="date">12</p>
							<p class="time">4:12 PM</p>
							<p class="day">Friday</p>
						</div>
						<div id="loginArea">
							<form action="login_control.php" method="post">
								<fieldset>
									<legend>로그인 영역</legend>
									<p class="idArea">
										<input id="userid" type="text" name="userid" title="아이디입력" required="required" placeholder="ID" autofocus="autofocus"/>
									</p>
									<p class="passArea">
										<input id="userpass" type="password" name="userpass" title="비밀번호입력" required="required" placeholder="Password"/>
									</p>
									<p class="btn">
										<input id="btn" type="submit" value="Sign In" title="로그인 버튼"/>
									</p>
									<p class="chkbtn">
										<input type="checkbox" id="saveId" name="saveId"/><label for="check">Save ID</label>
										<input type="checkbox" id="stayCheck" name="stayCheck"/><label for="check">Stay Signed In</label>
									</p>
								</fieldset>
							</form>
						</div>
						<div id="searchArea">
							<ul class="searchs">
								<li>
									<a href="#" title="아이디 찾기">Search ID</a>
									<span class="gray">|</span>
								</li>
								<li>
									<a href="#" title="비밀번호 찾기">Search password</a>
									<span class="gray">|</span>
								</li>
								<li>
									<a href="signUp.html" title="회원가입">Sign up</a>
								</li>
							</ul>
						</div>
					</div>	
					<ul id="visual">
						<li class="video">
							<video controls autoplay>
								<source src="video/ticketVideo.mp4" type="video/mp4"/>
							</video>
						</li>
						<li class="match">
							<h3>Match Day</h3>
							<h4>Copa del Rey | Round of 17 - 1st Leg</h4>
							<p class="date">01/04/2018 | 18:30 FCB</p>
							<p class="home">
								<img src="img/logo.png" alt="바로셀로나 로고"/>
							</p>
							<p class="versus">
								VS
							</p>
							<p class="away">
								<img src="img/logo4.png" alt="레알마드리드 로고"/>
							</p>
						</li>
					</ul>
				</div>
			</section>
		</div>
		<footer id="footer">
			<div id="copy">
				<h2>카피라이터 영역</h2>
				<span class="copyright">&copy; <span class="copy">Copyright</span> <a href="index.php" title="Barcelona main">FC Barcelona</a> | Pàgina Oficial del FC Barcelona</span>
			</div>
			<section id="sponser">
				<h2>스폰서 영역</h2>
				<ul>
					<li><a href="#" title="스폰서0"><img src="img/spon0_on.png" alt="스폰서0 로고"/></a></li>	
					<li><a href="#" title="스폰서1"><img src="img/spon1_on.png" alt="스폰서1 로고"/></a></li>
					<li><a href="#" title="스폰서3"><img src="img/spon3_on.png" alt="스폰서3 로고"/></a></li>
					<li><a href="#" title="스폰서8"><img src="img/spon8_on.png" alt="스폰서8 로고"/></a></li>
					<li><a href="#" title="스폰서2"><img src="img/spon2_on.png" alt="스폰서2 로고"/></a></li>	
					<li><a href="#" title="스폰서4"><img src="img/spon4_on.png" alt="스폰서4 로고"/></a></li>
					<li><a href="#" title="스폰서5"><img src="img/spon5_on.png" alt="스폰서5 로고"/></a></li>
					<li><a href="#" title="스폰서6"><img src="img/spon6_on.png" alt="스폰서6 로고"/></a></li>
					<li><a href="#" title="스폰서7"><img src="img/spon7_on.png" alt="스폰서7 로고"/></a></li>
				</ul>
			</section>
		</footer>
	</div>  
 </body>
</html>
