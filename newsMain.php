<!DOCTYPE html>
<html lang="ko">
 <head>
  <meta charset="utf-8"/>
  <title> BARCELONA NEWS </title>
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
	

		/*##################### container ##########################*/
		#container{width:100%;}
			
			/*##################### mainNewsWrap ##########################*/
			#mainNewsWrap{width:100%; margin-top:125px; overflow:hidden;}
				#mainNews{width:100%; margin:0 auto;}
					#mainNews ul{width:100%; overflow:hidden;}
						#mainNews ul li{width:33.33%; height:350px; float:left; position:relative;}
						#mainNews ul li:before{content:""; display:block; position:absolute; left:-1px; top:0; bottom:0; border-left:1px solid #000; z-index:1;}
							#mainNews li a{display:block; width:100%;}
								#mainNews a .img{display:block; width:100%; height:350px; position:relative; overflow:hidden;}
									#mainNews a .img img{position:absolute; left:50%; margin-left:-320px; width:650px; height:100%;}
									
								#mainNews a .textArea{display:block; width:96%; padding:2% 2%; height:26%; background-color:rgba(0,0,0,0.5); position:absolute; right:0; bottom:0; transition:all .5s;}
									#mainNews a .title{display:block; color:#fff;}
									#mainNews a strong{display:block; color:#fff; font-weight:700; font-size:1.4em; padding:5px 0; white-space:nowrap; text-overflow:ellipsis; overflow:hidden;}
									#mainNews a em{display:block; font-style:normal; color:#fff; font-size:1em;}

								#mainNews a:hover .textArea{height:50%; background-color:rgba(0,0,0,0.8);}

			
			/*##################### newsWrap1 ##########################*/
			#newsWrap1{width:100%; background-color:#fff;}

			/*################### news1 + area3영역 ##################*/
			#news1{width:100%; max-width:1180px; margin:40px auto;}
				#news1 h3{width:100%; margin:0 auto; height:40px; padding:10px 0 30px; font-size:40px; font-family:"saria"; color:#222;}
				#news1 ul{width:100%; overflow:hidden; padding:1px 1px;}
					#news1 ul li{float:left; margin-bottom:25px; outline:1px solid #ddd;}
						#news1 ul li:hover{box-shadow:2px 2px 10px rgba(0,0,0,0.5);}
					#news1 ul .area3{width:68%; height:550px;}
						#news1 ul .area3 a{display:block; width:100%; height:100%;}
						#news1 .area3 .img{display:block; width:100%; height:380px; position:relative; overflow:hidden;}
							#news1 .area3 .img img{width:820px; position:absolute; left:50%; margin-left:-410px; transition:all 1s;}
							#news1 li .img:hover img{transform:scale(1.1);}
						#news1 .area3 .textArea{display:block; width:96%; padding:10px 2% 0; height:160px;}
							#news1 a .title{display:block; color:#333; padding-top:6px;}
							#news1 a strong{display:block; color:#333; font-weight:700; font-size:1.2em; padding:5px 0 10px; white-space:nowrap; text-overflow:ellipsis; overflow:hidden; font-family:"saria"; font-weight:400; text-transform:uppercase;}
							#news1 a em{display:block; font-style:normal; color:#333; font-size:1em;}

			/*################### news1 + area2영역 ##################*/
			#news1 ul .area2_1{width:40%; margin-right:2%; height:480px;}
			#news1 ul .area2_2{width:58%; height:480px; margin-right:0;}
				#news1 ul .area2 a{display:block; width:100%; height:100%; color:#333;}
					#news1 .area2 .img{display:block;  width:100%; height:300px; overflow:hidden; position:relative;}
						#news1 .area2_1 .img img{width:600px; position:absolute; left:50%; margin-left:-300px; transition:all 1s;}
						#news1 .area2_2 .img img{width:820px; position:absolute; left:50%; margin-left:-430px; transition:all 1s;}
						
						#news1 .area2 .textArea{display:block; padding:10px 4% 0;width:92%; height:140px;}
						#news1 .area2_2 .textArea{display:block; padding:10px 3% 0;width:94%; height:140px;}


			/*################### news1 + scheduleWrap +경기일정 표시 영역 ##################*/
			#news1 ul .scheduleWrap{cursor:pointer; width:30%; height:550px; margin-left:2%; outline:1px solid #ddd;}
				#news1 ul .scheduleWrap h4{width:100%; height:50px; line-height:50px; text-align:center; outline:1px solid #ddd;}
				#news1 .schedule{width:100%; padding:0;}
					#news1 .schedule li{width:100%; height:100px; margin:0; float:none; outline:1px solid #ddd; overflow:hidden;}
						
						
						.clickOff{width:100%; height:100px; overflow:hidden; background-color:#eee;}
							.clickOff .imgArea{width:85px; padding:30px 10px; overflow:hidden; float:left;}
								.clickOff .team1{width:40px; height:40px; float:left;}
									.clickOff .team1 img{width:100%; height:100%;}
								.clickOff .team2{width:40px; padding-left:5px; height:40px; float:left;}
									.clickOff .team2 img{width:100%; height:100%;}
							.clickOff .text1{display:block; float:left; width:124px; height:40px; padding:30px 0;}
								.clickOff .text1 span{display:block;}
							.clickOff .text2{display:block; float:left; width:125px; height:80px; padding:10px 0;}
								.clickOff .text2 span{display:block;}
						

						.clickOn{width:100%; height:301px; background-color:#fff; overflow:hidden;}
							.clickOn .matchArea{width:100%; display:block; margin-top:40px; color:#333;}
								.clickOn .versusWrap{display:block;}
									.clickOn .versus{display:block; width:330px; height:90px; overflow:hidden; margin:0 auto; text-align:center; font-size:15px;}
										.clickOn .homeT{display:block; width:110px; height:90px; float:left; font-weight:700;}
											.clickOn .home{display:block; height:20px; width:100%;}
											.clickOn .homeImg{display:block; width:70px; height:70px; margin:0 auto;}
												.clickOn .homeImg img{width:100%; height:100%;}
										
										.clickOn .leagueLogo{display:block; padding:10px 30px; width:50px; height:70px; float:left;}
											.clickOn .leagueLogo img{width:100%; height:100%;}

										
								.clickOn .textArea{display:block; width:100%; text-align:center;}
									.clickOn .textArea .date{display:block; font-weight:700; font-size:18px; padding-top:20px;}
									.clickOn .textArea .time{display:block; padding-top:5px;}
									.clickOn .textArea .stadium{display:block; padding-top:5px; font-size:14px;}

							.buyBtn{width:90%; height:40px; line-height:40px; background-color:#0255A5; margin:20px auto 0; text-align:center;}
								.buyBtn a{display:block;width:100%; height:100%; color:#fff;}


						
		
		/*##################### newsWrap2 ##########################*/
		#newsWrap2{width:100%; background-color:#eee;}

		/*##################### news2 ##########################*/
		#news2{width:100%; max-width:1180px; margin:0 auto; padding:100px 0 50px;}
			#news2 ul{width:100%; overflow:hidden; padding:1px 1px;}
				#news2 ul li{float:left; margin-bottom:25px; outline:1px solid #ddd;}
					#news2 ul li:hover{box-shadow:2px 2px 10px rgba(0,0,0,0.5);}
				#news2 ul .area1{width:32%; margin-right:2%; height:350px;}
				#news2 ul .area1_3{margin-right:0;}
					#news2 ul .area1 a{display:block; width:100%; height:100%;}
					#news2 .area1 .img{display:block; background-color:pink; width:100%; height:210px; overflow:hidden; position:relative;}					
						#news2 .area1 .img img{width:400px; position:absolute; left:50%; margin-left:-200px; transition:all 1s;}
						#news2 li .img:hover img{transform:scale(1.1);}
					#news2 .area1 .textArea{display:block; width:92%; padding:10px 4% 0; height:130px; background-color:#fff;}

				#news2 ul .area2{width:49%; margin-right:2%; height:390px;}
				#news2 ul .area2_2{margin-right:0;}
					#news2 ul .area2 a{display:block; width:100%; height:100%;}
					#news2 .area2 .img{display:block; background-color:pink; width:100%; height:250px; overflow:hidden; position:relative;}
						#news2 .area2 .img img{width:600px; position:absolute; left:50%; margin-left:-300px; transition:all 1s;}
					#news2 .area2 .textArea{display:block; width:94%; padding:10px 3% 0; height:130px; background-color:#fff;}
							#news2 a .title{display:block; color:#333; padding-top:6px; font-size:0.8em;}
							#news2 a strong{display:block; color:#333; font-family:"saria"; font-size:1em; padding:5px 0 10px; white-space:nowrap; text-overflow:ellipsis; overflow:hidden; font-weight:400; text-transform:uppercase;}
							#news2 a em{display:block; font-style:normal; color:#333; font-size:0.8em;}

			
  </style>
  <script>
	jQuery(document).ready(function(){
			



			////////////////////// 아코디언 기능 구현하기전에 필요한 CSS 영역 셋팅/////////////////////////
			/*
				 전체 .clickOn 을 display none 시키기

				 대상: .clickOn
				 이벤트: css display:none
				 이벤트 핸들러: .clickOn
			*/
			$(".clickOn").css({"display":"none"});
			/*
				.schedule1의 높이값을 301로 만들어주기

				대상: .schedule1 
				이벤트: css 높이가 301px
				이벤트 핸들러: .schedule1 (첫번째 객체의 높이값 301px로)
			*/
			$(".schedule1").css({"height":"301px"});

			/*
				.schedule1의 자녀요소인 .clickOn display:block

				대상:.schedule1의 자녀요소인 .clickOn
				이벤트: css  
				이벤트 핸들러 .schedule1의 자녀인 .clickOn만 display block 시켜주기
			*/
			$(".schedule1").children(".clickOn").css({"display":"block"});
			
			/*
				.schedule1의 자녀요소인 .clickOff display:none

				대상:.schedule1의 자녀요소인 .clickOff
				이벤트: css  
				이벤트 핸들러 .schedule1의 자녀인 .clickOff만 display none시켜주기
			*/
			$(".schedule1").children(".clickOff").css({"display":"none"});

			

			/////////////////////////////// 아코디언 기능 ////////////////////////////////////////
			/*
				아코디언 기능 만드는중
					.schedule li를 클릭하면 
						01) 모든 .schedule li는 높이값이 100px, (this)의 높이값은 301px로 만들기
						02) .clickOff는 display:block
						03) .clickOn은 display:none 
						04) this의 자녀요소인 .clickOff는 display:none
						05) this의 자녀요소인 .clickOn은 display:block
			*/

			/*
				01) .schedule li 클릭하면 기능 위의 기능 구현하기
					
					대상: .schedule li
					이벤트 click
					이벤트 핸들러 : .clickOff, .clickOn, this의 자녀요소인 .clickOff, this의 자녀요소인 .clickOn
			*/
			$(".schedule li").click(function(){

				/*
					01-1) 모든 .schedule li는 높이값이 100px
						대상: .schedule li
						이벤트: css
						이벤트 핸들러: .schedule li

					01-2) (this)의 높이값은 301px로 만들기
						대상:this
						이벤트: css
						이벤트 핸들러:301px;
				*/
				$(".schedule li").css({"height":"100px"});
				$(this).css({"height":"301px","transition":"height 0.5s"});
				/*
					패딩을 이용하면 중간부터 나타나게 할 수 있음
				*/


				/*
					02) .clickOff는 display:block
						대상:.clickOff
						이벤트: css
						이벤트 핸들러: .clickOff
				*/
				$(".clickOff").css({"display":"block"});
				

				/*
					03) .clickOn은 display:none
						대상:.clickOn
						이벤트: css
						이벤트 핸들러: .clickOn

				*/
				$(".clickOn").css({"display":"none"});
					


				/*
					04) this의 자녀요소인 .clickOff는 display:none
						대상: this의 자녀요소인 .clickOff
						이벤트: css
						이벤트 핸들러: this의 자녀요소인 .clickOff
				*/
				$(this).children(".clickOff").css({"display":"none"});

				/*
					05) this의 자녀요소인 .clickOn은 display:block
						대상: this의 자녀요소인 .clickOn
						이벤트: css
						이벤트 핸들러: this의 자녀요소인 .clickOn
				*/
				$(this).children(".clickOn").css({"display":"block"});			
				
				

			});
		
	});
  </script>
 </head>
 <body>
	<div id="wrap">
<?php include "00_headerWrap.php"; ?>
		<div id="container">
			<section id="mainNewsWrap">
				<h2>메인 뉴스 영역</h2>
				<div id="mainNews">
					<ul>
						<li>
							<a href="news1.php" title="new1">
								<span class="img"><img src="img/new1.jpg" alt="new1 이미지"/></span>
								<span class="textArea">
									<span class="title">NEWS</span>
									<strong>
										Coutinho, Messi and Suárez, a new alliance at the Camp Nou
									</strong>
									<em>
										Philippe Coutinho started his first League match with FC Barcelona at the Camp Nou against Alavés, a game that finished 2-1. The Brazilian, who played 66 minutes, continues adapting to the Barça style with great players such as Iniesta, Suárez and Messi.
									</em>
								</span>
								<!--
									https://www.fcbarcelona.com/football/first-team/news/2017-2018/inside-view-coutinho-messi-suarez-fc-barcelona-alaves-league-camp-nou
								-->
							</a>
						</li>
						<li>
							<a href="news2.php" title="new2">
								<span class="img"><img src="img/new2.jpg" alt="new2 이미지"/></span>
								<span class="textArea">
									<span class="title">NEWS</span>
									<strong>
										Leo Messi reaches 20 goals in the league for the 10th season in a row
									</strong>
									<em>
										It never stops. Leo Messi’s latest match-winning contribution, his free-kick in the second half to give Barça a 2-1 come from behind win against Alavés, means he has reached 20 league goals for the 10th successive season. He reached the figure in his 200th league game at Camp Nou, thus equalling a feat he first achieved back in the 2008/09 season when scored 23 goals in La Liga in 31 appearances.
									</em>
								</span>
								<!--
									https://www.fcbarcelona.com/football/first-team/news/2017-2018/leo-messi-reaches-20-goals-in-the-league-for-the-10th-season-in-a-row-fcbarcelona
								-->
							</a>
						</li>
						<li>
							<a href="news3.php" title="new3">
								<span class="img"><img src="img/new3.jpg" alt="new3 이미지"/></span>
								<span class="textArea">
									<span class="title">NEWS</span>
									<strong>
										Philippe Coutinho: 'It's going to be a special, but tough, match'
									</strong>
									<em>
										Philippe Coutinho, who made his Barça debut just over a week ago in the Copa del Rey, will be facing Espanyol in La Liga for the first time since signing with Barça. The 25-year-old Brazilian spoke to La Liga on Saturday about his memories there and his expectations for his first La Liga derby.
									</em>
								</span>
								<!--
									https://www.fcbarcelona.com/football/first-team/news/2017-2018/la-liga-philippe-coutinho-it-s-going-to-be-a-special-but-tough-match-
								-->
							</a>
						</li>
					</ul>
				</div>
			</section>
			<section id="newsWrap1">
				<h2>서브 뉴스 영역</h2>
				<div id="news1">
					<h3>FCB NEWS</h3>
					<ul>
						<li class="area3">
							<a href="barTv.php" title="barTv">
								<span class="img"><img src="img/barTv.jpg" alt="barTv 이미지"/></span>
								<span class="textArea">
									<span class="title">Match Report</span>
									<strong>
										FC Barcelona v Espanyol: Derby delight (2-0)
									</strong>
									<em>
										It was business as usual for Barça in this Catalan derby as Lionel Messi and Luis Suárez scored the goals which took them into the Copa del Rey semi-finals. Philippe Coutinho would also bring the crowd to its feet in what was a superb cameo appearance on his debut.
									</em>
									<!--
										https://www.fcbarcelona.com/football/first-team/news/2017-2018/match-report-fc-barcelona-v-espanyol-derby-delight-2-0-
									-->
								</span>
							</a>
						</li>
						<li class="scheduleWrap">
							<h4>All event</h4>
							<ul class="schedule">
								<li class="schedule1">
									<div class="clickOff">
										<div class="imgArea">
											<p class="team1">
												<img src="img/logo.png" alt="바로셀로나 로고"/>
											</p>
											<p class="team2">
												<img src="img/logo3.png" alt="레알 로고"/>
											</p>
										</div>
										<p class="text1">
											<span class="team">Barcelona</span>
											<span class="team">Real Madrid</span>
										</p>
										<p class="text2">
											<span class="league">LA LIGA</span>
											<span class="day">Sat. 12 April</span>
											<span class="time">18:30H</span>
											<span class="stadium">Camp Nou</span>
										</p>
									</div>
									<div class="clickOn">
										<a class="matchArea" href="#none" title="구매 페이지">
											<span class="versusWrap">
												<span class="versus">
													<span class="homeT">
														<span class="home">FC Barcelona</span>
														<span class="homeImg"><img src="img/logo.png" alt="바로셀로나 로고"/></span>
													</span>
													<span class="leagueLogo">
														<img src="img/liga_logo.png" alt="라리가 로고"/>
													</span>
													<span class="homeT">
														<span class="home">Real Madrid</span>
														<span class="homeImg"><img src="img/logo3.png" alt="레알마드리드 로고"/></span>
													</span>
												</span>
											</span>
											<span class="textArea">
												<span class="date">Sat. 12 April</span>
												<span class="time">18:30H</span>
												<span class="stadium">Camp Nou</span>
											</span>
										</a>
										<p class="buyBtn">
											<a href="#none" title="구매페이지">BUY TICKET</a>
										</p>
									</div>
								</li>
								<li class="schedule2">
									<div class="clickOff">
										<div class="imgArea">
											<p class="team1">
												<img src="img/logo.png" alt="바로셀로나 로고"/>
											</p>
											<p class="team2">
												<img src="img/logo2.png" alt="발렌시아 로고"/>
											</p>
										</div>
										<p class="text1">
											<span class="team">Barcelona</span>
											<span class="team">Valencia</span>
										</p>
										<p class="text2">
											<span class="league">LA LIGA</span>
											<span class="day">Sat. 19 April</span>
											<span class="time">16:45H</span>
											<span class="stadium">Camp Nou</span>
										</p>
									</div>
									<div class="clickOn">
										<a class="matchArea" href="#none" title="구매 페이지">
											<span class="versusWrap">
												<span class="versus">
													<span class="homeT">
														<span class="home">FC Barcelona</span>
														<span class="homeImg"><img src="img/logo.png" alt="바로셀로나 로고"/></span>
													</span>
													<span class="leagueLogo">
														<img src="img/liga_logo.png" alt="라리가 로고"/>
													</span>
													<span class="homeT">
														<span class="home">Valencia</span>
														<span class="homeImg"><img src="img/logo2.png" alt="발렌시아 로고"/></span>
													</span>
												</span>
											</span>
											<span class="textArea">
												<span class="date">Sat. 19 April</span>
												<span class="time">16:45H</span>
												<span class="stadium">Camp Nou</span>
											</span>
										</a>
										<p class="buyBtn">
											<a href="#none" title="구매페이지">BUY TICKET</a>
										</p>
									</div>
								</li>
								<li class="schedule3">
									<div class="clickOff">
										<div class="imgArea">
											<p class="team1">
												<img src="img/logo.png" alt="바로셀로나 로고"/>
											</p>
											<p class="team2">
												<img src="img/logo5.png" alt="비아레알 로고"/>
											</p>
										</div>
										<p class="text1">
											<span class="team">Barcelona</span>
											<span class="team">Villarreal</span>
										</p>
										<p class="text2">
											<span class="league">LA LIGA</span>
											<span class="day">Sat. 26 Aprill</span>
											<span class="time">18:45H</span>
											<span class="stadium">Camp Nou</span>
										</p>
									</div>
									<div class="clickOn">
										<a class="matchArea" href="#none" title="구매 페이지">
											<span class="versusWrap">
												<span class="versus">
													<span class="homeT">
														<span class="home">FC Barcelona</span>
														<span class="homeImg"><img src="img/logo.png" alt="바로셀로나 로고"/></span>
													</span>
													<span class="leagueLogo">
														<img src="img/liga_logo.png" alt="라리가 로고"/>
													</span>
													<span class="homeT">
														<span class="home">Villarreal</span>
														<span class="homeImg"><img src="img/logo5.png" alt="비아레알 로고"/></span>
													</span>
												</span>
											</span>
											<span class="textArea">
												<span class="date">Sat. 26 February</span>
												<span class="time">20:45H</span>
												<span class="stadium">Camp Nou</span>
											</span>
										</a>
										<p class="buyBtn">
											<a href="#none" title="구매페이지">BUY TICKET</a>
										</p>
									</div>
								</li>
							</ul>
						</li>
						<li class="area2 area2_1">
							<a href="news4.php" title="new4">
								<span class="img"><img src="img/new4.jpg" alt="new4 이미지"/></span>
								<span class="textArea">
									<span class="title">VIDEO</span>
									<strong>
										Luis Suárez hits jackpot with pinball goal
									</strong>
									<em>
										Everybody knows Luis Suárez has the eye of the tiger in front of the net. We've seen him score with both feet, his head, by scissors kick, volley, bicycle kick, you name it. But this time he does it a little bit differently.
									</em>
									<!--
										https://www.fcbarcelona.com/football/first-team/news/2017-2018/video-luis-suarez-pinball-goal-in-training
									-->
								</span>
							</a>						
						</li>
						<li class="area2 area2_2">
							<a href="news5.php" title="new5">
								<span class="img"><img src="img/new5.jpg" alt="new5 이미지"/></span>
								<span class="textArea">
									<span class="title">MAGIC OF BARÇA</span>
									<strong>
										Do you believe in BARÇA's magic?
									</strong>
									<em>
										FC Barcelona have provided plenty of magical nights on the pitch but when it comes to magic Barça’s first team players are equally as amazed as the rest of us. Five members of the squad were bamboozled by some incredible tricks which were as unbelievable as Barça’s epic comeback against PSG.
									</em>
									<!--
										https://www.fcbarcelona.com/football/first-team/news/2016-2017/magic-sergio-sergi-roberto-alba-luis-suarez-pique-magic-dynamo
									-->
								</span>
							</a>						
						</li>
					</ul>
				</div>
			</section>
			<section id="newsWrap2">
				<h2>서브 뉴스 영역2</h2>
				<div id="news2">
					<ul>
						<li class="area1">
							<a href="news6.php" title="new6">
								<span class="img"><img src="img/new6.jpg" alt="new6 이미지"/></span>
								<span class="textArea">
									<span class="title">NEWS</span>
									<strong>
										The team congratulate coach Valverde on his birthday
									</strong>
									<em>
										Smiles all round at the Ciutat Esportiva with Barça having reached their fifth Copa del Rey final in a row thanks to their 0-3 aggregate win over Valencia in the semi-finals...<!-- The players returned to work and took the opportunity to congratulate coach Ernesto Valverde on the day of this 54th birthday.-->
									</em>
								</span>
								<!-- https://www.fcbarcelona.com/football/first-team/news/2017-2018/video-fc-barcelona-players-praise-ernesto-valverde
								-->
							</a>
						</li>
						<li class="area1">
							<a href="news7.php" title="new7">
								<span class="img"><img src="img/new7.jpg" alt="new7 이미지"/></span>
								<span class="textArea">
									<span class="title">NEWS</span>
									<strong>
										Valencia 0-2 FC Barcelona (0-3 on aggregate): Cup finalists once again!
									</strong>
									<em>
										Philippe Coutinho’s goal just after the break pretty much settled things before Ivan Rakitic brushed away any remaining shadows of doubt with an 82nd minute clincher.
									</em>
								</span>
								<!--
									https://www.fcbarcelona.com/football/first-team/news/2017-2018/copa-del-rey-semi-final-second-leg-match-report-valencia-0-2-fc-barcelona-0-3-on-aggregate-
								-->
							</a>						
						</li>
						<li class="area1 area1_3">
							<a href="news8.php" title="new8">
								<span class="img"><img src="img/new8.jpg" alt="new8 이미지"/></span>
								<span class="textArea">
									<span class="title">NEWS</span>
									<strong>
										Squad announced to face Valencia in Copa del Rey second leg
									</strong>
									<em>
										Ernesto Valverde has named his squad for the second leg of the Copa del Rey semi-final against Valencia (Thursday at 9.30pm CET), for which he is going to have to make do... <!--without the injured Ousmane Dembélé and Thomas Vermaelen.-->
									</em>
								</span>
								<!--
									https://www.fcbarcelona.com/football/first-team/news/2017-2018/squad-announced-to-face-valencia-in-copa-del-rey-second-leg
								-->
							</a>						
						</li>
						<li class="area2">
							<a href="news9.php" title="new9">
								<span class="img"><img src="img/new9.jpg" alt="new9 이미지"/></span>
								<span class="textArea">
									<span class="title">NEWS</span>
									<strong>
										Copa del Rey final, 21 April
									</strong>
									<em>
										Barça are in the Copa del Rey final yet again. Ernesto Valverde’s team have seen off Valencia in the semi-finals of the competition and will face Sevilla in the final after Vincezo Montella’s team defeated Leganés in the other semi-final... <!--The blaugranes will be looking for their 30th Copa del Rey title and their fourth in a row in the competition.-->
									</em>
								</span>
								<!--
									https://www.fcbarcelona.com/football/first-team/news/2017-2018/fc-barcelona-sevilla-copa-del-rey-final-21-april
								-->
							</a>						
						</li>
						<li class="area2 area2_2">
							<a href="news10.php" title="new10">
								<span class="img"><img src="img/new10.jpg" alt="new10 이미지"/></span>
								<span class="textArea">
									<span class="title">NEWS</span>
									<strong>
										Messi’s exhibition at the Calderón
									</strong>
									<em>
										Leo Messi once again showed he is the man for the big occasion with another brilliant display to help Barça claim the Copa del Rey against Alavés.
										Messi scored the opener after an intricate one-two with Neymar before caressing the ball into the corner of the net.
									</em>
								</span>
								<!--
									https://www.fcbarcelona.com/football/first-team/news/2016-2017/messi-s-exhibition-at-the-calderon
								-->
							</a>						
						</li>
					</ul>
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
