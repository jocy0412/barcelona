<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <title> player5 </title>  
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
	
		/*############### container #################*/
		#container{width:100%; margin-top:125px;}

		/*############### container + playerInfo #################*/
		#playerInfo{width:100%;}

		/*############### container + playerInfo + playerTitle #################*/
		#playerTitle{width:100%; height:420px; background-color:#272F4F;}
			#textArea{width:1280px; height:420px; margin:0 auto; position:relative;}
				#textArea .playerImg{width:1280px; height:420px;}
				#textArea .playerImg img{width:100%; height:100%;}

				#textArea .text{width:290px; height:420px; background-color:rgba(0,0,0,0.5); overflow:hidden; position:absolute; left:120px; top:0;}
					#textArea .text span{display:block; color:#fff;}
					#textArea .text .num{width:90px; height:90px; line-height:90px; background-color:#9C1737; font-size:45px; font-weight:700; text-align:center; margin:80px 0 100px 15px; float:left;}
					#textArea .text .name{margin-left:12px; width:170px; height:80px; line-height:70px; font-size:45px; float:left; margin-top:90px;}
					#textArea .text .fullName{margin-left:25px; width:170px; height:30px; line-height:30px; font-size:30px; clear:both;}
					#textArea .text .position{margin-left:25px; width:140px; height:30px; line-height:30px; font-size:20px; color:#999;}

		/*############### playerInfo + playerDesc #################*/
		#playerDesc{width:100%;}

		/*############### playerInfo + infoBtnWrap #################*/
		#infoBtnWrap{width:100%; background-color:#1d3b72;}
			.infoBtn{width:800px; height:40px; margin:0 auto; padding:15px 0 15px 10px;}
				.infoBtn li{float:left;  width:148px; height:38px; line-height:40px; margin-right:10px; border:1px solid #aaa; border-radius:20px; text-align:center;}
				.infoBtn .selected{background-color:#9C1737;}
					.infoBtn li a{display:block; width:100%; height:100%; background-color:#1d3b72; border-radius:20px; color:#fff; outline:none;}
					.infoBtn li a.selected{background-color:#9C1737; font-weight:700;}
				.infoBtn li:hover{background-color:#9C1737;}
		
		/*############### playerInfo + profileWrap #################*/
		#panelWrap{width:100%; background-color:#ddd; overflow:hidden;}
			#panelWrap .panel{width:100%;}
				#panelWrap .panel li{width:1025px; margin:40px auto 40px;}


		/*############### profileArea #################*/
			#profile{width:100%; background-color:#fff;}
				#profile h3{padding:10px 0; text-indent:30px; background-color:#313749; color:#fff; letter-spacing:1px;}
				#profile .descTitle{padding:20px 30px; font-size:27px; text-align:center; border-top:3px solid #9C1737; border-bottom:2px solid #9C1737;}
				#porfile .descTitle strong{font-size:30px;}
				#profile .desc{padding:20px 30px; height:270px; overflow:hidden; font-size:16px; transition:all 1s linear;}
				#profile .btn0,#profile .btn1{display:block; width:100%; height:50px; font-size:18px; background-color:#f3f4f5; border:1px solid #ccc; cursor:pointer; color:#1d3b72;}
				#profile .btn1{color:#9C1737;}



			#profileTech{width:1025px; background-color:#fff; margin:40px auto 20px; overflow:hidden; border-bottom:3px solid #9C1737;}
				#profileTech h3{padding:10px 0; text-indent:30px; background-color:#313749; color:#fff; letter-spacing:1px;}
					#profileTech .img{padding:57px 30px; width:350px; height:200px; float:left;}
						#profileTech .img img{width:100%; height:100%;}
					#profileTech .desc{padding:27px 0; width:615px; height:260px; float:left; font-size:16px;}

		/*############### staticArea #################*/
			#static{width:100%; border:1px solid #D3D6D7; border-collapse: collapse; }
				#static thead{background-color:#313947;}
					#static thead tr{width:100%;}
						#static thead th{width:20%; text-align:center; height:30px; color:#fff;}
				#static tbody{background-color:#fff; }
					#static tbody tr{height:50px; text-indent:10px; border-top:1px solid #ccc;}
						#static tbody th{border-right:1px solid #ccc;}
						#static tbody td{text-align:center;}


		/*############### photoArea #################*/
		#panelWrap #photoArea{width:1920px; margin:0;}
			#photoArea .photoVideo{width:100%; overflow:hidden; margin:40px 0 20px;}
				#photoArea .photoVideo li{width:320px; height:200px; float:left; margin:0;}
				#photoArea .photoVideo li:first-child{width:640px; height:400px;}
				#photoArea .photoVideo .photo7{width:640px; height:400px; float:right;}
					#photoArea .photoVideo li a{display:block; width:100%; height:100%; position:relative;}
						#photoArea .photoVideo li .text{display:block; width:100%; text-indent:30px; height:64px; line-height:64px; position:absolute; left:0; bottom:0; background-color:rgba(0,0,0,0.5); color:#fff; font-weight:700; letter-spacing:1px; transition:all 0.3s;}
						#photoArea .photoVideo li:hover .text{background-color:rgba(0,0,0,0.8);}
						#photoArea .photoVideo li img{width:100%; height:100%;}
			#photoArea .photoVideo:after{content:""; display:block; clear:both;}


		/*############### socialArea #################*/
		#socialArea{width:100%;}
			#socialArea ul{width:900px; height:480px; margin:0 auto;}
				#socialArea .social li{width:280px; height:140px; padding:10px; float:left; background-color:#EBEEf4; margin:0; position:relative;}
					#socialArea .social a{display:block; position:absolute; right:0; bottom:0;}
						#socialArea .social a:before{display:block; content:""; position:absolute; width:0; height:0; border-left:70px solid transparent; border-bottom:70px solid rgba(59,89,150,0.3); right:0; bottom:0;}
						#socialArea .social a .sns{position:absolute; right:0; bottom:0; display:block; width:24px; height:24px; padding:5px;}

					#socialArea .social .desc{width:90%;}

					#socialArea .social a:hover:before{border-bottom:70px solid #325082;}
			#socialArea ul:after{content:""; display:block; clear:both;}



		/*############### newsArea #################*/
		#panelWrap #newsArea{width:1920px; margin:0 auto;}
			#panelWrap #newsArea ul{width:1180px; overflow:hidden; padding:1px 1px; margin:0 auto;}
				#panelWrap #newsArea ul li{float:left; outline:1px solid #ddd;}
				#panelWrap #newsArea ul li:hover{box-shadow:2px 2px 10px rgba(0,0,0,0.5);}
				#panelWrap #newsArea ul .area1{width:32%; margin-right:2%; height:350px;}
				#panelWrap #newsArea ul .area1_3{margin-right:0;}
				#panelWrap #newsArea ul .area1 a{display:block; width:100%; height:100%;}
					#panelWrap #newsArea .area1 .img{display:block; background-color:pink; width:100%; height:210px; overflow:hidden; position:relative;}
						#panelWrap #newsArea .area1 .img img{width:400px; position:absolute; left:50%; margin-left:-200px;}
					#panelWrap #newsArea .area1 .textArea{display:block; width:92%; padding:10px 4% 0; height:130px; background-color:#fff;}

				#newsArea ul .area2{width:49%; margin-top:0; margin-right:2%; height:390px;}
				#newsArea ul .area2_2{margin-right:0;}
					#newsArea ul .area2 a{display:block; width:100%; height:100%;}
					#newsArea .area2 .img{display:block; background-color:pink; width:100%; height:250px; overflow:hidden; position:relative;}
						#newsArea .area2 .img img{width:600px; position:absolute; left:50%; margin-left:-300px;}
					#newsArea .area2 .textArea{display:block; width:94%; padding:10px 3% 0; height:130px; background-color:#fff;}
							#newsArea a .title{display:block; color:#333; padding-top:6px; font-size:0.8em;}
							#newsArea a strong{display:block; color:#333; font-family:"saria"; font-size:1em; padding:5px 0 10px; white-space:nowrap; text-overflow:ellipsis; overflow:hidden; font-weight:400; text-transform:uppercase;}
							#newsArea a em{display:block; font-style:normal; color:#333; font-size:0.8em;}



		/*############### playerDesc + honours #################*/			
		#honours{width:100%; background-image:url("img/squadBack.jpg"); background-attachment:fixed; background-repeat:no-repeat; overflow:hidden;}
			#honours h3{width:1025px; padding:10px 0; text-indent:30px; margin:40px auto 20px; background-color:#313749; color:#fff;}
			#trophy{width:1025px; margin:0 auto;}
				#trophy ul{width:980px; margin:0 auto; overflow:hidden; padding-left:40px;}
					#trophy ul li{width:450px; height:120px; background-color:#fff; margin-right:40px; float:left; margin-bottom:30px;}
						#trophy li p{float:left;}
						#trophy li .img{width:40px; height:66px; margin:7px 10px;}
							#trophy li .img img{width:100%; height:100%;}
						#trophy li .score{width:70px; margin:20px 10px; height:40px; line-height:40px; font-size:30px; color:#fff; text-align:center; background-color:#9C1737;}
						#trophy li .cupName{width:300px; height:80px; line-height:75px; font-size:25px; text-align:center;}
						#trophy li .years{width:100%; height:40px; line-height:40px; font-size:15px; text-indent:15px; color:#999; background-color:#313947; font-size:12px;}		

						

  </style>
  <script>
	$(document).ready(function(){

		var now = 0;
		$(".btn0").click(function(){

			if(now == 0){
				$("#profile .desc").css({"height":"auto"});
				$(".btn0").text("Read Less");
				now = 1;
			}else{
				$("#profile .desc").css({"height":"270px"});
				$(".btn0").text("Read More");
				now = 0;
			}
			
			
		});

		$(".btn1").click(function(){
			
			$("#profile .desc").css({"height":"270px"});
			$(".btn1").hide();
			$(".btn0").show();
		});


		/*###################### 기능2  tap키 접근 #######################*/
		/*모든 내용글 숨기고 첫번째 게시글만 보이게 만들기*/
		$(".panel").children("li:not(:first)").hide();

		/*
			탭키에 click, focus하면 탭에 연결된 해당내용 보이기

			대상: .infoBtn li a
			이벤트: 클릭, 포커스
			이벤트 클래스: this에 연결된 값, this
		*/
		$(".infoBtn li a").on("click focus",function(){

			/*
				01) 내용전부다 숨겨주고 this에 연결된 값의 내용만 보여주기
				02) 탭에 클래스 제거해주고 선택된 this만 클래스 추가하기(selected)

				대상: this에 연결된 값, this
				이벤트: attr, addClass
				이벤트 클래스: this에 연결된 값, this
			*/
			$(".panel").children("li").hide();
			$(".infoBtn li a").removeClass();
			$(this).addClass("selected");
			$($(this).attr("href")).show();
			return false;
		});





	});
	
  </script>
 </head>
 <body>
	<div id="wrap">
<?php include "00_headerWrap.php"; ?>
		<div id="container">
			<section id="playerInfo">
				<h2>선수 소개 영역</h2>
				<section id="playerTitle">
					<h2>선수 핵심 정보</h2>
					<div id="textArea">
						<p class="playerImg">
							<img src="img/profile5.jpg" alt="선수 사진"/>
						</p>
						<p class="text">
							<span class="num">5</span>
							<span class="name">Busquets</span>
							<span class="fullName">Sergio Busquets</span>
							<span class="position">MIDFIELDER</span>
						</p>
					</div>
				</section>
				<section id="playerDesc">
					<h2>선수 상세 정보영역</h2>
					<div id="infoBtnWrap">
						<ul class="infoBtn">
							<li>
								<a class="selected" href="#profileArea" title="PROFILE">PROFILE</a>
							</li>
							<li>
								<a href="#staticArea" title="STATICS">STATICS</a>
							</li>
							<li>
								<a href="#photoArea" title="PHOTO">PHOTO</a>
							</li>
							<li>
								<a href="#socialArea" title="SOCIAL MIDEA">SOCIAL MIDEA</a>
							</li>
							<li>
								<a href="#newsArea" title="NEWS">NEWS</a>
							</li>
						</ul>
					</div>
					<div id="panelWrap">
						<ul class="panel">
							<li id="profileArea">
								<div id="profile">
									<h3>PROFILE</h3>
									<p class="descTitle">
										<strong>Leo Messi is the best player in the world.</strong> Technically perfect, he brings together unselfishness, pace, composure and goals to make him number one
									</p>
									<p class="desc">
										Leo Messi's footballing career started in 1995 at Newell's Old Boys, where he played until the year 2000. At the age of 13, Lionel Messi crossed the Atlantic to try his luck in Barcelona, and joined the Under 14s. Messi made spectacular progress at each of the different age levels, climbing through the ranks to Barça C, followed by Barça B and the first team in record time.<br/><br/>

										In the 2003-2004 season, when he was still only 16, Messi made his first team debut in a friendly with Porto that marked the opening of the new Do Dragao stadium.<br/><br/>

										The following championship-winning season, Messi made his first appearance in an official match on October 16, 2004, in Barcelona's derby win against Espanyol at the Olympic Stadium (0-1). With several first team players seriously injured, the services of several reserve team players were called upon, and Messi became a regular feature of Barça squads.<br/><br/>

										On May 1, 2005, Messi became the youngest player ever to score a league goal for FC Barcelona - against Albacete when he was only 17 years, 10 months and 7 days old. That record would eventually be beaten by Bojan Krkic.<br/><br/>

										At the Under 20 World Cup in Holland, Messi not only won the title with Argentina, but was also the leading goalscorer and was voted best player in the tournament. Aged 18 years, he had become one of the hottest properties in the world game. Shortly after, he made his first full international appearance in a friendly against Hungary.<br/><br/>

										His breakthrough came in the 2005-06 season, starting with an amazing performance in the Joan Gamper Trophy match against Juventus. He was also outstanding at the Santiago Bernabéu, in Barcelona's unforgettable 3-0 win, and also at Stamford Bridge, in the Champions League match against Chelsea. Injury kept him sidelined for much of the latter stage of the season, but Messi still played a total of 17 league games, 6 in the Champions League and 2 in the Copa del Rey, and scored eight goals.<br/>

										The following season Messi moved up a gear and astounded the world with goals such as the one he scored against Getafe in the Copa del Rey. In the 2006/07 season, and even though the team didn't win any titles, the Argentine was second in the FIFA World Player awards and third in the Ballon d’Or. He continued to develop in the 2007/08 campaign, when he scored 16 goals and gave 10 assists in the 40 games he played in. In 2008, Leo Messi was runner up in the FIFA World Player awards for the second season in a row.<br/><br/>

										In the 2008/09 season, and now without Ronaldinho alongside him, Messi became the main star of the Barça show. He managed to stay injury free all season, and played 51 games, scoring 38 goals. The Argentinian was also fundamental in the Copa del Rey and Champions League finals, scoring Barça's second goals in both. In 2009, he finally won both the FIFA World Player and Ballon d’Or.<br/><br/>

										How far can Leo Messi go? He was the league's top scorer in the 2009-10 season and equalled Ronaldo's historic total of 34 goals (96-97). He scored the goal against Estudiantes that won Barça their first Club World Cup.<br/><br/>

										Still hungry for success, the Argentinian went even further in the 2010/11 season, scoring no fewer than 53 official goals, a Spanish record only matched by Cristiano Ronaldo (that very same season). Messi, as in Rome, played a vital role in the Champions League final at Wembley were scored a scorcher from outside the area to put his team ahead. In 2011, he also won the Ballon d’Or for the third time, a feat only previously achieved by Cruyff, Platini and Van Basten and a year later became the first player ever to win it four times.<br/><br/>

										The season 2011/12 is when Messi moved past César Rodríguez's record of 232 official goals to become the Club's all time top goalscorer. He achieved this on the 20 March 2012 in a 5-3 victory over Granada in which he scored a brilliant hat-trick.<br/><br/>

										Two weeks earlier, on March 7, 2012, the football world watched in awe as he scored five goals in a single game against Bayer 04 Leverkusen.<br/><br/>

										On May 5, 2012, the Leo Messi legend was extended in the derby against Espanyol, when he made it to an unprecedented 50 goals in a league season, scoring four goals in a game for the third time in his career. A remarkable season ended with one of the finest goals of his career in the Copa del Rey final against Athletic Club Bilbao. In the 2011/12 season he has scored in every competition he played in, totally an astonishing 73 as Barça conquered the Spanish Super Cup, European Super Cup, Club World Cup and the Copa del Rey. He ended 2012 with the record number of goals in a calendar year (91), thus beating the historic tally established by Gerd Müller (85 for Bayern Munich and Germany in 1972).<br/><br/>

										That was not the only outstanding achievement by Messi in the 2012/13 season, another for the record books. The Argentine scored in 19 consecutive league matches - half a season - until an injury at away at PSG meant he was not at his best in the decisive phase of that campaign’s Champions League. On the domestic front, Messi was also key in Barça claiming the league title with 100 points. He was top scorer with 46 goals in the league, ending with 60 in 50 games in all competitions.<br/><br/>

										The following year, 2013/14, was difficult one for the Barça number 10, due to injuries more than anything else. Messi picked up a hamstring injury in November that forced him to miss more than a month of the campaign. Nevertheless, he still scored 41 goals in 46 matches that year, 28 in the league, 5 in the Copa del Rey and 8 in the Champions League.<br/><br/>

										Messi made his 250th league appearance in that season and in a game in the Copa del Rey against Levante, he played in his 400th match in a Barça shirt, having recorded a staggering 331 goals at that point in his career for the blaugranes.<br/><br/>

										In the same season Messi reached yet another landmark, overtaking Paulino Alcántara’s total of 369 goals to become the leading goalscorer of all time at the Club<br/><br/>

										The 2014/2015 season was one of the Argentine star's most brilliant. Messi was one of the great architects of the second Treble in club history, six years after winning the League, the Spanish Cup, and the UEFA Champions League in the same season. Thanks to his 56 goals in all three competitions, Messi established two almost unattainable records. First, in a game against Sevilla at Camp Nou Messi surpassed Telmo Zarra's 251 career goals to become the all-time leading scorer in league history. Second, with a hat-trick at APOEL Nicosia, Messi passed Raúl's 71 career goals to become the all-time leading scorer in Champions League history. Messi closed the season with 77 goals in 99 career Champions League games. The Argentine’s amazing form had its reward on a personal level when in January 2016 he claimed the Ballon d’Or award for an unprecedented fifth time in his career.<br/><br/>

										Messi also led the tournament in scoring for the fifth time — tied with Neymar and Cristiano Ronaldo at 10 each. The Argentinian also surpassed Luis Figo's all-time La Liga assist record (105).<br/><br/>

										On 23 April, on Saint Jordi’s day, Leo Messi reached 500 goals with the first team thanks to his winner in the final minute of the Clásico in the league at the Santiago Bernabéu (2-3).<br/><br/>

										Messi is also captain of the Argentina national side and has played in three World Cups (2006, 2010 and 2014) and three Copa Américas (2007, 2011 and 2015). In the summer of 2008 he also played at the Beijing Olympics, and came home with a gold medal.
									</p>
									<button class="btn0">
										Read more
									</button>
								</div>
								<div id="profileTech">
									<h3>TECHNICAL PROFILE</h3>
									<p class="img">
										<img src="img/tech01.jpg" alt="포지션 이미지01"/>
									</p>
									<p class="desc">
										Messi is an excellent, sensational, unique player. He is astoundingly creative, has amazing individual skill and is able to constantly put his rivals at unease. A natural left footer, he is stunningly versatile, and can play either in the middle or on whichever of the wings required, although it is out on the right that he feels most comfortable.<br/><br/>

										He may not be very tall, but his speed and physique enable him to cope with even the toughest of defenders. He is surprisingly strong, and can hold on to the ball in style, as if it were stuck to his feet. There is simply nobody like him anywhere else in the game. He is also a specialist at all dead ball situations, especially free kicks and penalties.<br/><br/>

										His cold blood and ability to take on responsibilities are other virtues that make Leo Messi simply the best footballer on the planet.
									</p>
								</div>
							</li>
							<li id="staticArea">
								<table id="static">
									<thead>
										<tr>
											<th>
											</th>				
											<th>
												Spanish Super Cup
											</th>			
											<th>
												La Liga
											</th>
											<th>
												Champions League
											</th>
											<th>
												Copa del Rey
											</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<th class="title">
												Matches played
											</th>
											<td class="spanish">
												2
											</td>
											<td class="liga">
												24
											</td>
											<td class="champion">
												7
											</td>
											<td class="copa">
												5
											</td>
										</tr>
										<tr>
											<th class="title">
												Matches started
											</th>
											<td class="spanish">
												2
											</td>
											<td class="liga">
												23
											</td>
											<td class="champion">
												5
											</td>
											<td class="copa">
												5
											</td>
										</tr>
										<tr>
											<th class="title">
												Matches as substitute
											</th>
											<td class="spanish">
												0
											</td>
											<td class="liga">
												1
											</td>
											<td class="champion">
												2
											</td>
											<td class="copa">
												0
											</td>
										</tr>
										<tr>
											<th class="title">
												Matches substituted
											</th>
											<td class="spanish">
												0
											</td>
											<td class="liga">
												0
											</td>
											<td class="champion">
												0
											</td>
											<td class="copa">
												1
											</td>
										</tr>
										<tr>
											<th class="title">
												Minutes played
											</th>
											<td class="spanish">
												180
											</td>
											<td class="liga">
												2101
											</td>
											<td class="champion">
												513
											</td>
											<td class="copa">
												419
											</td>
										</tr>
										<tr>
											<th class="title">
												Goals scored
											</th>
											<td class="spanish">
												1
											</td>
											<td class="liga">
												20
											</td>
											<td class="champion">
												4
											</td>
											<td class="copa">
												3
											</td>
										</tr>					
										<tr>
											<th class="title">
												Goals with head
											</th>
											<td class="spanish">
												0
											</td>
											<td class="liga">
												0
											</td>
											<td class="champion">
												0
											</td>
											<td class="copa">
												0
											</td>
										</tr>
										<tr>
											<th class="title">
												Goals from penalties
											</th>
											<td class="spanish">
												1
											</td>
											<td class="liga">
												2
											</td>
											<td class="champion">
												0
											</td>
											<td class="copa">
												0
											</td>
										</tr>
										<tr>
											<th class="title">
												Goals from free kicks
											</th>
											<td class="spanish">
												0
											</td>
											<td class="liga">
												2
											</td>
											<td class="champion">
												1
											</td>
											<td class="copa">
												0
											</td>
										</tr>
										<tr>
											<th class="title">
												Goals with left foot
											</th>
											<td class="spanish">
												1
											</td>
											<td class="liga">
												19
											</td>
											<td class="champion">
												4
											</td>
											<td class="copa">
												3
											</td>
										</tr>
										<tr>
											<th class="title">
												Goals with right foot
											</th>
											<td class="spanish">
												2
											</td>
											<td class="liga">
												24
											</td>
											<td class="champion">
												7
											</td>
											<td class="copa">
												5
											</td>
										</tr>
										<tr>
											<th class="title">
												Assists
											</th>
											<td class="spanish">
												2
											</td>
											<td class="liga">
												24
											</td>
											<td class="champion">
												7
											</td>
											<td class="copa">
												5
											</td>
										</tr>
										<tr>
											<th class="title">
												Goal assists
											</th>
											<td class="spanish">
												2
											</td>
											<td class="liga">
												24
											</td>
											<td class="champion">
												7
											</td>
											<td class="copa">
												5
											</td>
										</tr>
										<tr>
											<th class="title">
												Shots
											</th>
											<td class="spanish">
												2
											</td>
											<td class="liga">
												24
											</td>
											<td class="champion">
												7
											</td>
											<td class="copa">
												5
											</td>
										</tr>
										<tr>
											<th class="title">
												Shots on target
											</th>
											<td class="spanish">
												2
											</td>
											<td class="liga">
												24
											</td>
											<td class="champion">
												7
											</td>
											<td class="copa">
												5
											</td>
										</tr>
										<tr>
											<th class="title">
												Shots off target
											</th>
											<td class="spanish">
												2
											</td>
											<td class="liga">
												24
											</td>
											<td class="champion">
												7
											</td>
											<td class="copa">
												5
											</td>
										</tr>
										<tr>
											<th class="title">
												Shots onto woodwork
											</th>
											<td class="spanish">
												2
											</td>
											<td class="liga">
												24
											</td>
											<td class="champion">
												7
											</td>
											<td class="copa">
												5
											</td>
										</tr>
										<tr>
											<th class="title">
												Offsides
											</th>
											<td class="spanish">
												2
											</td>
											<td class="liga">
												24
											</td>
											<td class="champion">
												7
											</td>
											<td class="copa">
												5
											</td>
										</tr>
										<tr>
											<th class="title">
												Yellow cards
											</th>
											<td class="spanish">
												2
											</td>
											<td class="liga">
												24
											</td>
											<td class="champion">
												7
											</td>
											<td class="copa">
												5
											</td>
										</tr>
										<tr>
											<th class="title">
												Direct red cards
											</th>
											<td class="spanish">
												2
											</td>
											<td class="liga">
												24
											</td>
											<td class="champion">
												7
											</td>
											<td class="copa">
												5
											</td>
										</tr>
										<tr>
											<th class="title">
												Red cards for double yellow
											</th>
											<td class="spanish">
												2
											</td>
											<td class="liga">
												24
											</td>
											<td class="champion">
												7
											</td>
											<td class="copa">
												5
											</td>
										</tr>
										<tr>
											<th class="title">
												Fouls committed
											</th>
											<td class="spanish">
												2
											</td>
											<td class="liga">
												24
											</td>
											<td class="champion">
												7
											</td>
											<td class="copa">
												5
											</td>
										</tr>
										<tr>
											<th class="title">
												Fouls received
											</th>
											<td class="spanish">
												2
											</td>
											<td class="liga">
												24
											</td>
											<td class="champion">
												7
											</td>
											<td class="copa">
												5
											</td>
										</tr>
										<tr>
											<th class="title">
												Balls won
											</th>
											<td class="spanish">
												2
											</td>
											<td class="liga">
												24
											</td>
											<td class="champion">
												7
											</td>
											<td class="copa">
												5
											</td>
										</tr>
										<tr>
											<th class="title">
												Balls lost
											</th>
											<td class="spanish">
												40
											</td>
											<td class="liga">
												513
											</td>
											<td class="champion">
												140
											</td>
											<td class="copa">
												95
											</td>
										</tr>
									</tbody>
								</table>
							</li>
							<li id="photoArea">
								<ul class="photoVideo">
									<li>
										<a href="#none" title="사진0">
											<img src="img/photo0.jpg" alt="사진0"/>
											<span class="text">Chelsea FC 1-1 FC Barcelona</span>
										</a>
									</li>
									<li>
										<a href="#none" title="사진1">
											<img src="img/photo1.jpg" alt="사진1"/>
											<span class="text">Training at Stamford Bridge</span>
										</a>
									</li>
									<li>
										<a href="#none" title="사진2">
											<img src="img/photo2.jpg" alt="사진2"/>
											<span class="text">Arrival In London</span>
										</a>
									</li>
									<li>
										<a href="#none" title="사진3">
											<img src="img/photo3.jpg" alt="사진3"/>
											<span class="text">The Champions return journey</span>
										</a>
									</li>
									<li>
										<a href="#none" title="사진4">
											<img src="img/photo4.jpg" alt="사진4"/>
											<span class="text">Copa del Rey celebrations</span>
										</a>
									</li>
									<li>
										<a href="#none" title="사진5">
											<img src="img/photo5.jpg" alt="사진5"/>
											<span class="text">Photos form training and the mixed zone</span>
										</a>
									</li>
									<li>
										<a href="#none" title="사진6">
											<img src="img/photo6.jpg" alt="사진6"/>
											<span class="text">The best photos from first team training</span>
										</a>
									</li>
									<li class="photo7">
										<a href="#none" title="사진7">
											<img src="img/photo7.jpg" alt="사진7"/>
											<span class="text">Last training session before Eibar</span>
										</a>
									</li>
									<li>
										<a href="#none" title="사진8">
											<img src="img/photo8.jpg" alt="사진8"/>
											<span class="text">The trip to Eibar</span>
										</a>
									</li>
									<li>
										<a href="#none" title="사진9">
											<img src="img/photo9.jpg" alt="사진9"/>
											<span class="text">Eibar - FC Barcelona (0-2)</span>
										</a>
									</li>
									<li>
										<a href="#none" title="사진10">
											<img src="img/barTv.jpg" alt="사진10"/>
											<span class="text">Derby delight(2-0)</span>
										</a>
									</li>
									<li>
										<a href="#none" title="사진11">
											<img src="img/n2.jpg" alt="사진11"/>
											<span class="text">Training at Camp Nou</span>
										</a>
									</li>
								</ul>
							</li>
							<li id="socialArea">
								<ul class="social">
									<li>
										<p class="name">
											Lionel Messi
										</p>
										<p class="desc">
											Chelsea Football Club v FC Barcelona
										</p>
										<a href="#none" title="트위터">
											<span class="sns"><img src="img/twitter_white.png" alt="트위터 이미지"/></span>
										</a>
									</li>
									<li>
										<p class="name">
											Lionel Messi
										</p>
										<p class="desc">
											SD Eibar v FC Barcelona
										</p>
										<a href="#none" title="페이스북">
											<span class="sns"><img src="img/facebook_white.png" alt="페이스북 이미지"/></span>
										</a>
									</li>
									<li>
										<p class="name">
											Lionel Messi
										</p>
										<p class="desc">
											Ojalá que este Día Internacional del Cáncer Infantil sirva para reflexionar sobre las posibilidades de cura con un tratamiento correcto y sobre todo para que las mismas sean iguales para todos los...
										</p>
										<a href="#none" title="트위터">
											<span class="sns"><img src="img/twitter_white.png" alt="트위터 이미지"/></span>
										</a>
									</li>
									<li>
										<p class="name">
											Lionel Messi
										</p>
										<p class="desc">
											LONDON
										</p>
										<a href="#none" title="페이스북">
											<span class="sns"><img src="img/facebook_white.png" alt="페이스북 이미지"/></span>
										</a>
									</li>
									<li>
										<p class="name">
											Lionel Messi
										</p>
										<p class="desc">
											3
										</p>
										<a href="#none" title="트위터">
											<span class="sns"><img src="img/twitter_white.png" alt="트위터 이미지"/></span>
										</a>
									</li>
									<li>
										<p class="name">
											Lionel Messi
										</p>
										<p class="desc">
											
										</p>
										<a href="#none" title="페이스북">
											<span class="sns"><img src="img/facebook_white.png" alt="페이스북 이미지"/></span>
										</a>
									</li>
									<li>
										<p class="name">
											Lionel Messi
										</p>
										<p class="desc">
											Feliz Año Nuevo chino. Happy Chinese New Year. - LIO
										</p>
										<a href="#none" title="트위터">
											<span class="sns"><img src="img/twitter_white.png" alt="트위터 이미지"/></span>
										</a>
									</li>
									<li>
										<p class="name">
											Lionel Messi
										</p>
										<p class="desc">
											Siempre es mejor mirarlo juntos. #LaysUnited Its always better to watch together. #LaysUnited
										</p>
										<a href="#none" title="페이스북">
											<span class="sns"><img src="img/facebook_white.png" alt="페이스북 이미지"/></span>
										</a>
									</li>
									<li>
										<p class="name">
											Lionel Messi
										</p>
										<p class="desc">
											¡Participa en la campaña solidaria! Sube a tus redes un retrato de Leo con el hashtag #MessiArt y puedes ayudar al proyecto del Pediatric Cancer Center Barcelona del Hospital Sant Joan de Déu....
										</p>
										<a href="#none" title="트위터">
											<span class="sns"><img src="img/twitter_white.png" alt="트위터 이미지"/></span>
										</a>
									</li>
								</ul>
							</li>
							<li id="newsArea">
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
												https://www.fcbarcelona.com/football/first-team/news/2016-2017/messi-s-exhibition-at-the-calderon
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
							</li>
						</ul>
					</div>
					<div id="honours">
							<h3>HONOURS</h3>
							<div id="trophy">
								<ul>
									<li>						
										<p class="img"><img src="img/euCup.png" alt="EU CUP 이미지"/></p>	
										<p class="score">3</p>
										<p class="cupName">European Super Cup</p>
										<p class="years">2009/10, 2011/12, 2015/16</p>
									</li>
									<li>						
										<p class="img"><img src="img/champions.png" alt="Champions League cup 이미지"/></p>	
										<p class="score">4</p>
										<p class="cupName">Champions League</p>
										<p class="years">2005/06, 2008/09, 2010/11, 2014/15</p>
									</li>
									<li>						
										<p class="img"><img src="img/spanCup.png" alt="Spanish Super CUP 이미지"/></p>	
										<p class="score">7</p>
										<p class="cupName">Spanish Super Cup</p>
										<p class="years">2005/06,  2006/07, 2009/10, 2010/11, 2011/12, 2013/14, 2016/17</p>
									</li>
									<li>						
										<p class="img"><img src="img/clubCup.png" alt="Club CUP 이미지"/></p>	
										<p class="score">3</p>
										<p class="cupName">Club World Cup</p>
										<p class="years">2009/10, 2011/12, 2015/16</p>
									</li>
									<li>						
										<p class="img"><img src="img/copaCup.png" alt="Copa del CUP 이미지"/></p>	
										<p class="score">5</p>
										<p class="cupName">Copa del Rey</p>
										<p class="years">2008/09, 2011/12, 2014/15, 2015/16, 2016/17</p>
									</li>
									<li>						
										<p class="img"><img src="img/laLiga.png" alt="La Liga CUP 이미지"/></p>	
										<p class="score">8</p>
										<p class="cupName">European Super Cup</p>
										<p class="years">2004/05, 2005/06, 2008/09, 2009/10, 2010/11, 2012/13, 2014/15, 2015/16</p>
									</li>
								</ul>
							</div>
						</div>
				</section>
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
