<?php
	echo "<meta http-equiv='Refresh' content='4; url=index.php'/>";
?>
<!DOCTYPE html>
<html lang="ko">
 <head>
  <meta charset="utf-8"/>
  <title> Sign Up </title>
  <link rel="shortcut icon" href="img/logo.png"/>
  <link rel="apple-touch-icon" href="img/logo.png"/>  
  <style>
	/*######### 초기화 #########*/
	*{margin:0; padding:0;}
	li{list-style-type:none;}
	a:link, a:visited{text-decoration:none;}
	a:hover, a:focus{text-decoration:underline;}
	/*######### 버리는 영역 #########*/
	h2{width:1px; height:1px; line-height:0; font-size:1px; overflow:hidden; position:absolute; left:-9999px;}
	@font-face{font-family:"exo"; src:url("font/Exo2-Regular.woff");}
	@font-face{font-family:"saria"; src:url("font/Saira-Regular.woff");}
	@font-face{font-family:"pontano"; src:url("font/PontanoSans-Regular.woff");}

	#wrap{width:1920px; margin:0 auto;}
		/*################# header ####################*/
		#header{width:1920px; height:140px; position:absolute;}
			h1{width:300px; height:82px; position:absolute; left:810px; top:80px; margin:0 auto; z-index:1; font-family:"saria";}
				h1 a{display:block; width:100%; height:100%; overflow:hidden;}
				h1 a .logo{display:block; float:left; width:82px; height:82px;}
					h1 a .logo img{width:100%; height:100%;}
				h1 a .logoText{display:block; float:left; width:198px; padding:10px 0 0 20px; height:72px; font-size:25px; color:#fff; letter-spacing:2px; line-height:30px;}
					h1 a .logoText .normal{font-weight:400; color:#eee;}
					h1 a .logoText .gray{font-weight:400; color:#ccc;}

		
		/*################# container + signWrap ####################*/
		#container{width:1920px;}
			#signWrap{width:1920px; height:899px; position:relative; background-image:url("img/ticket_back.png"); overflow:hidden; background-repeat:no-repeat; background-color:#000;}
				.descArea{margin:330px auto 0; width:800px; height:200px; background-color:rgba(255,255,255,1); border-radius:20px;}
					.descArea h3{text-align:center; line-height:200px; font-size:30px; color:#;}

		
				

		/*################# footer ####################*/
		#footer{width:100%; background-color:#131519; position:relative;}
			#copy{position:absolute; top:-50px; left:732px; color:#aaa; width:455px; height:21px; line-height:21px; font-family:"pontano";}
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
						FCB<span class="normal">ARCELONA</span> <span class="gray">Payment</span>
					</span>
				</a>
			</h1>
		</header>
		<div id="container">			
			<div id="signWrap">
				<div class="descArea">
					<h3>Your payment is complete.</h3>
				</div>
			</div>
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
