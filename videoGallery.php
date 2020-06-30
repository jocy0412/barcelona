<!DOCTYPE html>
<html lang="ko">
 <head>
  <meta charset="utf-8"/>
  <title> BARCELONA VIDEO </title>
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
			

			/*##################### videoSection0 ##########################*/
			#videoSection0{width:100%; margin-top:125px;}
				#videoSection0 .videoTitle{width:100%; height:230px; background-color:#ebebeb; position:relative; overflow:hidden;}
					#videoSection0 .videoTitle h3{width:960px; margin:0 auto; font-size:50px; padding:40px 0 20px;}
					#videoSection0 .videoTitle .img{width:200px; position:absolute; right:370px; bottom:-49px; opacity:1;}
						#videoSection0 .videoTitle .img img{width:100%;}
				
				#videoGallery0{width:960px; margin:-100px auto 0;}
				#video0{width:100%;}
					#video0 h4{font-size:20px; background-color:blue; text-indent:15px; height:50px; line-height:50px; font-size:25px;}
					#video0 .videoWrap{width:100%; overflow:hidden;}
						#video0 .videoArea0{width:690px; margin-right:10px; float:left;}
							#video0 .videoArea0 li{width:690px; height:424px; position:relative;}
								#video0 .videoArea0 li a{display:block; width:100%; height:100%;}
									#video0 .videoArea0 li img{width:100%; height:100%;}
									#video0 .videoArea0 li .textArea{display:block; position:absolute; left:0; bottom:0; width:100%; height:50px; line-height:50px; background-color:rgba(0,0,0,0.5); color:#fff; text-indent:30px; font-size:20px;}
									#video0 .videoArea0 li .buttonImg{width:90px; height:90px; border:5px solid #fff; border-radius:50%; display:block; position:absolute; left:50%; top:50%; margin-left:-50px; margin-top:-50px; color:transparent; background-color:rgba(50,50,50,0.7); transition:background-color .5s linear;}
									#video0 .videoArea0 li .buttonImg:before{width:0px; height:0px; border-style:solid; border-width:30px 0 30px 40px; border-color:transparent transparent transparent #fff; margin-left:-15px; margin-top:-30px; position:absolute; display:block; left:50%; top:50%; content:"";}

									#video0 .videoArea0 li:hover .buttonImg{background-color:rgba(255,255,255,0.5);}

								



						#video0 .videoArea1{width:260px; float:left;}
							#video0 .videoArea1 li{width:100%; height:100px; margin-top:8px;}
							#video0 .videoArea1 li:first-child{margin-top:0;}
								#video0 .videoArea1 li a{display:block; width:100%; height:100%; position:relative;}
									#video0 .videoArea1 li img{width:100%; height:100%;}
									#video0 .videoArea1 li .descArea{display:block; width:80%; background-color:rgba(0,0,0,0.7); color:#fff; position:absolute; left:0; bottom:0; padding:10px 0 10px 20%;}
									
									/*############ 이벤트 클래스 ##########*/
									#video0 .videoArea1 .back .descArea{background-color:rgba(255,255,255,0.5); color:#000; font-weight:700;}


									#video0 .videoArea1 li .descArea:before{display:block; width:28px; height:28px; background-color:rgba(0,0,0,0.5); content:""; position:absolute; left:2px; top:2px; border:4px solid #fff; border-radius:50%;}
									#video0 .videoArea1 li .descArea:after{width:0px; height:0px; border-style:solid; border-width:9px 0 9px 11px; border-color:transparent transparent transparent #fff; margin-left:-3px; margin-top:-9px; position:absolute; display:block; left:20px; top:20px; content:"";}

									

			

			/*##################### videoSection1 ##########################*/
				#videoSection1{width:100%;}
					#videoGallery1{width:960px; margin:40px auto;}
						#videoGallery1 h3{padding:20px 0 10px; font-size:30px;}
						#video1{width:100%;}
							#video1 .videoArea{width:100%; overflow:hidden;}
								#video1 .videoArea li{width:310px; float:left; margin-right:15px; margin-top:15px;}
								#video1 .videoArea .section3{margin-right:0;}
									#video1 .videoArea li a{display:block; width:100%; position:relative; color:#333;}
										#video1 .videoArea li .img{display:block; width:100%; height:131px;}
											#video1 .videoArea li img{width:100%; height:100%;}
										#video1 .videoArea li .buttonImg{display:block; position:absolute; left:50%; top:50%; color:#fff; width:40px; height:40px; border:5px solid #fff; border-radius:50%; margin-left:-25px; margin-top:-45px; color:transparent;}
										#video1 .videoArea li .buttonImg:before{display:block; width:0px; height:0px; content:""; border-style:solid; border-width:10px 0 10px 15px; border-color:transparent transparent transparent #fff; position:absolute; left:50%; top:50%; margin-left:-6px; margin-top:-10px;}
										
										#video1 .videoArea li .text{display:block; width:100%; font-size:16px; height:40px; padding-top:5px; font-weight:700;}

  </style>
  <script>
	$(function(){

		/*
			.videoArea0 li 부분 첫번째 부분 빼고 다 숨기기
			대상: .videoArea0 li:not(:first)
			이벤트: hide
			이벤트 핸들러:자기 자신중에 첫번째 객체 빼고		
		*/
		$(".videoArea0 li:not(:first)").hide();	
		

		$(".videoArea1 li a").bind("click mouseover",function(){

			/*이벤트 클래스를 활용하여 .videoArea1 li에 이벤트 클래스를 이용하여 .descArea 배경 색깔 바꿔주기*/
			$(".videoArea1 li").removeClass();
			$(this).parent().addClass("back");
			/*
				.videoArea1 li a를 click하거나 focus하면 해당하는 객체의 href에 연결된 객체를 보이고 나머지는 숨기기

				대상: .videoArea0 li a
				이벤트: show
				이벤트 핸들러: jref에 연결된 객체
			*/

			$(".videoArea0 li").hide();
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
			<section id="videoSection0">
				<h2>비디오 갤러리 영역0</h2>
				<div class="videoTitle">
					<h3>Video Gallery</h3>
					<p class="img">
						<img src="img/logo_high.png" alt="바로셀로나 로고"/>
					</p>
				</div>
				<div id="videoGallery0">
					<div id="video0">
						<h4>VIDEOS</h4>
						<div class="videoWrap">
							<ul class="videoArea0">
								<li id="tab0">
									<a href="#none" title="비디오0">
										<img src="img/video0.png" alt="비디오 이미지0"/>
										<span class="textArea">Juventus 1 - FC Barcelona 3 (Champions League 2014-15)</span>
										<span class="buttonImg">play</span>
										<!--
											https://www.fcbarcelona.com/videos/champions-league-finals/juventus-1-fc-barcelona-3
										-->
									</a>
								</li>
								<li id="tab1">
									<a href="#none" title="비디오1">
										<img src="img/video1.jpg" alt="비디오 이미지1"/>
										<span class="textArea">Chelsea 1 - FC Barcelona 1 (1 minute)</span>
										<span class="buttonImg">play</span>
										<!--
											Chelsea 1 - FC Barcelona 1 (1 minute)
										-->
									</a>
								</li>
								<li id="tab2">
									<a href="#none" title="비디오2">
										<img src="img/video2.jpg" alt="비디오 이미지2"/>
										<span class="textArea">Move of the week #8: Busquets trickery</span>
										<span class="buttonImg">play</span>
										<!--
											https://www.fcbarcelona.com/videos/don-t-miss/move-of-the-week-8-busquets-trickery
										-->
									</a>
								</li>
								<li id="tab3">
									<a href="#none" title="비디오3">
										<img src="img/new1.jpg" alt="비디오 이미지3"/>
										<span class="textArea">Coutinho, Messi and Suárez, a new alliance at the Camp Nou</span>
										<span class="buttonImg">play</span>
										<!--
											https://www.fcbarcelona.com/videos/behind-the-scenes/coutinho-messi-and-suarez-a-new-alliance-at-the-camp-nou
										-->
									</a>
								</li>
							</ul>
							<ul class="videoArea1">
								<li class="back">
									<a href="#tab0" title="video0">
										<img src="img/video0.png" alt="비디오 이미지0"/>
										<span class="descArea">
											Juventus 1 - FC Barcelona 3 (Champions League 2014-15)
										</span>
									</a>
								</li>
								<li>
									<a href="#tab1" title="video1">
										<img src="img/video1.jpg" alt="비디오 이미지1"/>
										<span class="descArea">
											Chelsea 1 - FC Barcelona 1 (1 minute)
										</span>
										<!--
											https://www.fcbarcelona.com/videos/don-t-miss/chelsea-fc-barcelona-1-minute-
										-->
									</a>
								</li>
								<li>
									<a href="#tab2" title="video2">
										<img src="img/video2.jpg" alt="비디오 이미지2"/>
										<span class="descArea">
											Move of the week #8: Busquets trickery
										</span>
										<!--
											https://www.fcbarcelona.com/videos/don-t-miss/move-of-the-week-8-busquets-trickery
										-->
									</a>
								</li>
								<li>
									<a href="#tab3" title="video3">
										<img src="img/new1.jpg" alt="뉴스 이미지1"/>
										<span class="descArea">
											Coutinho, Messi and Suárez, a new alliance at the Camp Nou
										</span>
										<!--
											https://www.fcbarcelona.com/videos/behind-the-scenes/coutinho-messi-and-suarez-a-new-alliance-at-the-camp-nou
										-->
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</section>
			<section id="videoSection1">
				<h2>비디오 갤러리 영역1</h2>
				<div id="videoGallery1">
					<h3>VIDEOS</h3>
					<div id="video1">
						<ul class="videoArea">
							<li>
								<a href="#none" title="비디오4">
									<span class="img"><img src="img/video4.jpg" alt="이미지4"/></span>
									<span class="buttonImg">play</span>
									<span class="text">HIGHIGHTS: Las Palmas v Barça</span>
									<!--
										https://www.fcbarcelona.com/football/first-team/news/2017-2018/highlights-las-palmas-v-fc-barcelona-1-1-la-liga
									-->
								</a>
							</li>
							<li>
								<a href="#none" title="비디오5">
									<span class="img"><img src="img/video5.jpg" alt="이미지5"/></span>
									<span class="buttonImg">play</span>
									<span class="text">FC Barcelona 6 - Girona 1 (3 minutes)</span>
									<!--
										https://www.fcbarcelona.com/videos/fc-barcelona-girona/fc-barcelona-6-girona-1-3-minutes-
									-->
								</a>
							</li>
							<li class="section3">
								<a href="#none" title="비디오6">
									<span class="img"><img src="img/video6.jpg" alt="이미지6"/></span>
									<span class="buttonImg">play</span>
									<span class="text">Ernesto Valverde: 'We judged the game well'</span>
									<!--
										https://www.fcbarcelona.com/videos/fc-barcelona-girona/ernesto-valverde-we-judged-the-game-well-
									-->
								</a>
							</li>
							<li>
								<a href="#none" title="비디오7">
									<span class="img"><img src="img/video7.jpg" alt="이미지7"/></span>
									<span class="buttonImg">play</span>
									<span class="text">FC Barcelona - Girona (1 minute)</span>
									<!--
										https://www.fcbarcelona.com/videos/fc-barcelona-girona/fc-barcelona-girona-1-minute-
									-->
								</a>
							</li>
							<li>
								<a href="#none" title="비디오8">
									<span class="img"><img src="img/video8.jpg" alt="이미지8"/></span>
									<span class="buttonImg">play</span>
									<span class="text">Goal Morning! Today, Las Palmas - Barça...</span>
									<!--
										https://www.fcbarcelona.com/videos/top-goals/goal-morning-today-las-palmas-barca...
									-->
								</a>
							</li>
							<li class="section3">
								<a href="#none" title="비디오9">
									<span class="img"><img src="img/video9.jpg" alt="이미지9"/></span>
									<span class="buttonImg">play</span>
									<span class="text">Goals Lionel Messi, the only player to have scored against 36 different First Division clubs</span>
									<!--
										https://www.fcbarcelona.com/videos/top-goals/lionel-messi-the-only-player-to-have-scored-against-36-different-first-division-clubs?autoplay=true
									-->
								</a>
							</li>
						</ul>
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
