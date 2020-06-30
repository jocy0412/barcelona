<!DOCTYPE html>
<html lang="ko">
 <head>
  <meta charset="utf-8"/>
  <title> BARCELONA SQUAD</title>  
  <script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
  <script type="text/javascript" src="js/subGnb.js"></script>
  <link rel="stylesheet" href="css/reset.css" type="text/css">
  <link rel="stylesheet" href="css/header.css" type="text/css">
  <link rel="stylesheet" href="css/footer.css" type="text/css"> 
  <link rel="shortcut icon" href="img/logo.png"/>
  <link rel="apple-touch-icon" href="img/logo.png"/>
  <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
  <style>
	/*############### 폰트 영역################*/
	@font-face{font-family:"exo"; src:url("font/Exo2-Regular.woff");}
	@font-face{font-family:"saria"; src:url("font/Saira-Regular.woff");}
	@font-face{font-family:"pontano"; src:url("font/PontanoSans-Regular.woff");}
	
	

	/*############### container + playerWrap #################*/
	#container{width:100%; margin-top:125px;}
		#playerWrap{width:100%;}

	/*############### container + titleWrap #################*/
	#titleWrap{width:100%; height:70px; line-height:70px; border-bottom:4px solid #9C1737; background-color:#E4E6E7;}
		.title{width:54%; margin:0 auto;}
			.title strong{font-size:30px;}
	

	/*############### container + squadWrap #################*/
	#squadWrap{width:100%; background-color:#E4E6E7; overflow:hidden;}
		
	/*############### squadWrap + imgArea #################*/	
	#imgArea{width:100%; background-image:url("img/squadSky.png");text-align:center; overflow:hidden;}
		#imgArea .img{width:100px; height:100px; margin:20px auto;}
			#imgArea .img img{width:100%;}
		#imgArea .text{width:300px; height:100px; font-weight:700; margin:0 auto; color:#fff; font-size:30px;}
			#imgArea .text span{font-weight:400; display:block; font-size:25px;}



	/*############### squadWrap + playerArea #################*/	
	#playerArea{width:1280px; margin:0 auto;}
		.positionBtn{width:825px; margin:70px auto 0; overflow:hidden;}
			.positionBtn li{width:155px; height:40px; margin-right:12px; line-height:40px; font-size:18px; float:left; text-align:center; border-radius:20px; background-color:#1d3b72; transition:all .3s linear .1s;}
				
			.positionBtn .goal{margin-right:0;}
				.positionBtn li a{color:#fff; display:block; width:100%; height:100%;}
			.positionBtn li:hover{background-color:#9C1737;}
				.positionBtn li:hover a{text-decoration:none;}
			
			.positionBtn .red{background-color:#9C1737; font-weight:700;}
		
		
		#player{width:1125px; overflow:hidden; margin:0 auto; margin-bottom:30px;}
				#player li{width:250px; height:360px; margin-top:30px; margin-left:25px; float:left;}

					#player li a {display:block; width:250px; height:360px;}
						
						#player li a .img{display:block; float:left; width:250px; height:281px;}
							#player li a .img img{width:100%; height:100%;}
						
						#player li a .number{display:block; float:left; width:70px; height:79px; text-align:center; line-height:79px; font-size:30px; font-weight:700; color:#fff;  background-color:#72142E; transition:background-color 0.5s;}
						#player li a .playerInfo{display:block; float:left; width:160px; height:59px; padding:10px 0 10px 20px; font-size:20px; background-color:#9C1737; color:#fff; transition:background-color 0.5s;}
							#player li a span.position{font-size:14px;}
							
				#player li:hover a span.number{background-color:#1b3058;}
				#player li:hover a span.playerInfo{background-color:#1d3b72;}
						

  </style>
  <script>
	$(function(){

		/*해당하는 포지션을 누르면 배경색상 빨간색으로 변경하기*/
		$(".positionBtn li").click(function(){
			$(".positionBtn li").removeClass("red");
			$(this).addClass("red");
		});
		
		/*포지션을 누르면 해당 포지션만 보이고 나머지는 숨기기*/
		$(".positionBtn .all").click(function(){
			$("#player .all").show();
		});

		$(".positionBtn .forward").click(function(){
			$("#player li").hide();
			$("#player .forward").show();
		});

		$(".positionBtn .midfielder").click(function(){
			$("#player li").hide();
			$("#player .mid").show();
		});

		$(".positionBtn .defender").click(function(){
			$("#player li").hide();
			$("#player .defend").show();
		});

		$(".positionBtn .goal").click(function(){
			$("#player li").hide();
			$("#player .goal").show();
		});
	});
  </script>
 </head>
 <body>
	<div id="wrap">
<?php include "00_headerWrap.php"; ?>
		<div id="container">
			<section id="playerWrap">
				<h2>선수정보 영역</h2>
				<div id="titleWrap">
					<div class="title">
						<strong>Players</strong>
					</div>
				</div>
				<div id="squadWrap">
					<div id="squad">
						<div id="imgArea">
							<p class="img"><img src="img/fcbLogo_login.png" alt="바로셀로나 로고"/></p>
							<p class="text">
								FC BARCELONA
								<span>2017-2018</span>
							</p>
						</div>
						<div id="playerArea">
							<ul class="positionBtn">
								<li class="all red">
									<a href="#none" title="All">All</a>
								</li>
								<li class="forward">
									<a href="#none" title="FORWARD">FORWARD</a>
								</li>
								<li class="midfielder">
									<a href="#none" title="MIDFIELDER">MIDFIELDER</a>
								</li>
								<li class="defender">
									<a href="#none" title="DEFENDER">DEFENDER</a>
								</li>
								<li class="goal">
									<a href="#none" title="GOALKEEPER">GOALKEEPER</a>
								</li>
							</ul>
							<ul id="player">
								<li class="all forward">
									<a href="player10.php" title="선수이미지10 주소">
										<span class="img">
											<img src="img/player10.jpg" alt="선수이미지10"/>
										</span>
										<span class="number">
											10
										</span>
										<span class="playerInfo">
											Messi<br/>
											<span class="position">FORWARD</span>
										</span>
									</a>
								</li>
								<li class="all goal">
									<a href="player1.php" title="선수이미지1 주소">
										<span class="img">
											<img src="img/player1.jpg" alt="선수이미지1"/>
										</span>
										<span class="number">
											1
										</span>
										<span class="playerInfo">
											Ter Stengen<br/>
											<span class="position">GOALKEEPER</span>
										</span>
									</a>
								</li>
								<li class="all defend">
									<a href="player2.php" title="선수이미지2 주소">
										<span class="img">
											<img src="img/player2.jpg" alt="선수이미지2"/>
										</span>
										<span class="number">
											2
										</span>
										<span class="playerInfo">
											Nélson Semedo<br/>
											<span class="position">DEFENDER</span>
										</span>
									</a>
								</li>
								<li class="all defend">
									<a href="player3.php" title="선수이미지3 주소">
										<span class="img">
											<img src="img/player3.jpg" alt="선수이미지3"/>
										</span>
										<span class="number">
											3
										</span>
										<span class="playerInfo">
											Pique<br/>
											<span class="position">DEFENDER</span>
										</span>
									</a>
								</li>
								<li class="all mid">
									<a href="player4.php" title="선수이미지4 주소">
										<span class="img">
											<img src="img/player4.jpg" alt="선수이미지4"/>
										</span>
										<span class="number">
											4
										</span>
										<span class="playerInfo">
											I. Rakitic<br/>
											<span class="position">MIDFIELDER</span>
										</span>
									</a>
								</li>
								<li class="all mid">
									<a href="player5.php" title="선수이미지5 주소">
										<span class="img">
											<img src="img/player5.jpg" alt="선수이미지5"/>
										</span>
										<span class="number">
											5
										</span>
										<span class="playerInfo">
											Sergio Busquets<br/>
											<span class="position">MIDFIELDER</span>
										</span>
									</a>
								</li>
								<li class="all mid">
									<a href="player6.php" title="선수이미지6 주소">
										<span class="img">
											<img src="img/player6.jpg" alt="선수이미지6"/>
										</span>
										<span class="number">
											6
										</span>
										<span class="playerInfo">
											Denis Suarez<br/>
											<span class="position">MIDFIELDER</span>
										</span>
									</a>
								</li>
								<li class="all mid">
									<a href="player8.php" title="선수이미지8 주소">
										<span class="img">
											<img src="img/player8.jpg" alt="선수이미지8"/>
										</span>
										<span class="number">
											8
										</span>
										<span class="playerInfo">
											A. Iniesta<br/>
											<span class="position">MIDFIELDER</span>
										</span>
									</a>
								</li>
								<li class="all forward">
									<a href="player9.php" title="선수이미지9 주소">
										<span class="img">
											<img src="img/player9.jpg" alt="선수이미지9"/>
										</span>
										<span class="number">
											9
										</span>
										<span class="playerInfo">
											Luis Suarez<br/>
											<span class="position">FORWARD</span>
										</span>
									</a>
								</li>
								<li class="all forward">
									<a href="player11.php" title="선수이미지11 주소">
										<span class="img">
											<img src="img/player11.jpg" alt="선수이미지11"/>
										</span>
										<span class="number">
											11
										</span>
										<span class="playerInfo">
											Dembele<br/>
											<span class="position">FORWARD</span>
										</span>
									</a>
								</li>
								<li class="all goal">
									<a href="player13.php" title="선수이미지13 주소">
										<span class="img">
											<img src="img/player13.jpg" alt="선수이미지13"/>
										</span>
										<span class="number">
											13
										</span>
										<span class="playerInfo">
											Cillessen<br/>
											<span class="position">GOALKEEPER</span>
										</span>
									</a>
								</li>
								<li class="all mid">
									<a href="player14.php" title="선수이미지14 주소">
										<span class="img">
											<img src="img/player14.jpg" alt="선수이미지14"/>
										</span>
										<span class="number">
											14
										</span>
										<span class="playerInfo">
											Coutinho<br/>
											<span class="position">MIDFIELDER</span>
										</span>
									</a>
								</li>
								<li class="all mid">
									<a href="player15.php" title="선수이미지15 주소">
										<span class="img">
											<img src="img/player15.jpg" alt="선수이미지15"/>
										</span>
										<span class="number">
											15
										</span>
										<span class="playerInfo">
											Paulinho<br/>
											<span class="position">MIDFIELDER</span>
										</span>
									</a>
								</li>
								<li class="all forward">
									<a href="player16.php" title="선수이미지16 주소">
										<span class="img">
											<img src="img/player16.jpg" alt="선수이미지16"/>
										</span>
										<span class="number">
											16
										</span>
										<span class="playerInfo">
											Deulofeu<br/>
											<span class="position">FORWARD</span>
										</span>
									</a>
								</li>
								<li class="all forward">
									<a href="player17.php" title="선수이미지17 주소">
										<span class="img">
											<img src="img/player17.jpg" alt="선수이미지17"/>
										</span>
										<span class="number">
											17
										</span>
										<span class="playerInfo">
											Paco Alcacer<br/>
											<span class="position">FORWARD</span>
										</span>
									</a>
								</li>
								<li class="all defend">
									<a href="player18.php" title="선수이미지18 주소">
										<span class="img">
											<img src="img/player18.jpg" alt="선수이미지18"/>
										</span>
										<span class="number">
											18
										</span>
										<span class="playerInfo">
											Jordi Alba<br/>
											<span class="position">DEFENDER</span>
										</span>
									</a>
								</li>
								<li class="all defend">
									<a href="player19.php" title="선수이미지19 주소">
										<span class="img">
											<img src="img/player19.jpg" alt="선수이미지19"/>
										</span>
										<span class="number">
											19
										</span>
										<span class="playerInfo">
											Digne<br/>
											<span class="position">DEFENDER</span>
										</span>
									</a>
								</li>
								<li class="all mid">
									<a href="player20.php" title="선수이미지20 주소">
										<span class="img">
											<img src="img/player20.jpg" alt="선수이미지20"/>
										</span>
										<span class="number">
											20
										</span>
										<span class="playerInfo">
											S. Roberto<br/>
											<span class="position">MIDFIELDER</span>
										</span>
									</a>
								</li>
								<li class="all mid">
									<a href="player21.php" title="선수이미지21 주소">
										<span class="img">
											<img src="img/player21.jpg" alt="선수이미지21"/>
										</span>
										<span class="number">
											21
										</span>
										<span class="playerInfo">
											Andre Gomes<br/>
											<span class="position">MIDFIELDER</span>
										</span>
									</a>
								</li>
								<li class="all mid">
									<a href="player22.php" title="선수이미지22 주소">
										<span class="img">
											<img src="img/player22.jpg" alt="선수이미지22"/>
										</span>
										<span class="number">
											22
										</span>
										<span class="playerInfo">
											Aleix Vidal<br/>
											<span class="position">MIDFIELDER</span>
										</span>
									</a>
								</li>
								<li class="all defend">
									<a href="player23.php" title="선수이미지23 주소">
										<span class="img">
											<img src="img/player23.jpg" alt="선수이미지23"/>
										</span>
										<span class="number">
											23
										</span>
										<span class="playerInfo">
											Umtiti<br/>
											<span class="position">DEFENDER</span>
										</span>
									</a>
								</li>
								<li class="all defend">
									<a href="player24.php" title="선수이미지24 주소">
										<span class="img">
											<img src="img/player24.jpg" alt="선수이미지24"/>
										</span>
										<span class="number">
											24
										</span>
										<span class="playerInfo">
											Y. Mina<br/>
											<span class="position">DEFENDER</span>
										</span>
									</a>
								</li>
								<li class="all defend">
									<a href="player25.php" title="선수이미지25 주소">
										<span class="img">
											<img src="img/player25.jpg" alt="선수이미지25"/>
										</span>
										<span class="number">
											25
										</span>
										<span class="playerInfo">
											Vermaelen<br/>
											<span class="position">DEFENDER</span>
										</span>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</section>
		</div>
		<footer id="footer">
			<div id="sponsers">
				<h2>스폰서 영역</h2>
				<div class="floor0">
					<p class="img">
						<a href="https://www.fcbarcelona.com/" title="바로셀로나 사이트"><img src="img/logo.png" alt="바로셀로나 로고"/></a>
					</p>
					<p class="teamName">FC BARCELONA WITH</p>
				</div>
				<div class="floor1">
					<ul>
						<li><a href="#none" title="스폰서0"><img src="img/spon0_on.png" alt="스폰서0 로고"/></a></li>
						<li><a href="#none" title="스폰서1"><img src="img/spon1_on.png" alt="스폰서1 로고"/></a></li>
						<li><a href="#none" title="스폰서8"><img src="img/spon8_on.png" alt="스폰서8 로고"/></a></li>
					</ul>
				</div>
				<div class="floor2">
					<ul>
						<li><a href="#none" title="스폰서2"><img src="img/spon2_on.png" alt="스폰서2 로고"/></a></li>
						<li><a href="#none" title="스폰서3"><img src="img/spon3_on.png" alt="스폰서3 로고"/></a></li>
						<li><a href="#none" title="스폰서4"><img src="img/spon4_on.png" alt="스폰서4 로고"/></a></li>
						<li><a href="#none" title="스폰서5"><img src="img/spon5_on.png" alt="스폰서5 로고"/></a></li>
						<li><a href="#none" title="스폰서6"><img src="img/spon6_on.png" alt="스폰서6 로고"/></a></li>
						<li><a href="#none" title="스폰서7"><img src="img/spon7_on.png" alt="스폰서7 로고"/></a></li>
					</ul>
				</div>
				<div class="floor3">
					<p>
						<strong>View complete list of sponsors</strong>
					</p>
				</div>
			</div>
			<div id="leftRightWrap">
				<div id="footerArea">				
					<div class="left">
						<p class="img">
							<a href="#none" title="바로셀로나 사이트"><img src="img/fcbLogo_300.png" alt="푸터 로고"/></a>
						</p>
						<span class="copy">&copy; Copyright FC Barcelona | Pàgina Oficial del FC Barcelona</span>
						<ul>
							<li><a href="#none" title="Legal tems 주소">Legal tems</a> |</li>
							<li><a href="#none" title="Accessibility 주소">Accessibility</a> |</li>
							<li><a href="#none" title="Contact 주소">Contact</a> |</li>
							<li><a href="#none" title="FC Barcelona 주소">FC Barcelona</a> |</li>
							<li><a href="#none" title="Historical archive 주소">Historical archive</a></li>	   
						</ul>
					</div>
					<div class="right">
						<p class="img"><a href="#none" title="스폰서 사이트"><img src="img/footerAd.png" alt="푸터 광고"/></a></p>
						<p class="text">Agreement between FC Barcelona and UNICEF</p>		
					</div>
				</div>
			</div>
		</footer>
	</div>
 </body>
</html>
