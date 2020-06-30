<!DOCTYPE html>
<html lang="ko">
 <head>
  <meta charset="utf-8"/>
  <title> Tour </title>  
  <script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
  <script type="text/javascript" src="js/subGnb.js"></script>
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&language=ko"></script>
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
	@font-face{font-family:"oswald"; src:url("font/Oswald.woff2");}
	@font-face{font-family:"icon"; src:url("font/Icons.woff");}
	
		
		/*##################### container ##########################*/
		#container{width:100%;}
			
		/*###################### visualWrap ##########################*/
		#visualWrap{width:100%; margin-top:125px; background-color:#efefef;}
			#visual{width:100%; height:400px; margin:0 auto; position:relative;}
				#visual .textWrap{width:500px; height:100%; position:absolute; right:58%; font-family:"oswald";}
					#visual .title{padding:50px 20px 0 10px; font-size:70px; line-height:80px;}
					#visual .desc{padding:10px 10px 10px 20px; font-size:15px;}
					#visual .price{padding:20px 10px 10px 20px; font-size:14px;}
						#visual .price .ticket{color:#aaa; font-weight:700; font-size:16px; padding-right:5px;}
						#visual .price .euro{font-weight:700; font-size:23px; padding-left:18px;}
					#visual .buyBtn{margin-left:15px; width:150px; height:37px; line-height:37px; text-align:center; background-color:#0255A5; border-radius:5px; font-size:14px; transition:all .3s linear .1s;}
						#visual .buyBtn a{display:block; width:100%; height:100%; color:#fff;}

					#visual .buyBtn:hover{background-color:#AE0917;}

				#visual .videoWrap{width:710px; height:100%; float:right; background-color:red; overflow:hidden;}
					#visual .videoArea{width:710px; height:100%; float:right;}
						#visual .videoArea a{display:block; width:100%; height:100%;}
							#visual .videoArea a img{width:100%; height:100%;}
			
			#visual:after{content:""; display:block; clear:both;}

		/*###################### slideVisualWrap ##########################*/
		#slideVisualWrap{width:100%;}
			#slideTitle{width:100%; height:40px; position:relative; padding-top:50px;}
				#slideTitle h3{position:absolute; right:64%; width:400px; height:40px; line-height:40px; font-family:"saria"; border-bottom: 4px solid #0255a5; border-right: 4px solid transparent; font-size:25px;}

			#slideVisual{width:1920px; padding-top:30px;}
				#slide{width:100%;}
					#slide li{width:470px; height:300px; margin-right:10px; background-color:lightblue; float:left;}
						#slide li a{display:block; width:100%; height:100%; overflow:hidden;}
							#slide li a img{width:100%; height:100%;}
							

				#slide:after{content:""; display:block; clear:both;}

		/*###################### tourRouteWrap ##########################*/
		#tourRouteWrap{width:100%; padding:50px 0;}
			#routeTitle{width:100%; height:50px; position:relative;}
				#routeTitle h3{position:absolute; right:64%; width:400px; height:40px; line-height:40px; font-family:"saria"; border-bottom: 4px solid #0255a5; border-right: 4px solid transparent; font-size:25px;}
			
			#tourRoute{width:100%; margin-top:40px;}
				#tourRoute .routeArea{width:1200px; margin:0 auto;}
					.routeArea li{width:300px; height:150px; float:left; position:relative;}
						.routeArea li a{display:block; width:100%; height:100%;}
							.routeArea li a img{width:100%; height:100%;}
						.routeArea li .desc{position:absolute; left:0; top:50px; width:100%; height:50px; text-shadow:1px 0 0 #000, -1px 0 0 #000, 0 -1px 0 #000, 0 2px 0 #000, 0 2px 2px #000; color:#fff; font-family:"saria";}
							.routeArea li .desc .number{width:44px; height:44px; border-radius:50%; border:3px solid white; box-shadow:1px 0 0 #000, -1px 0 0 #000, 0 -1px 0 #000, 0 2px 0 #000, 0 5px 5px #000; margin:0 10px; font-size:25px; text-align:center; line-height:50px; float:left;}
							.routeArea li .desc .course{width:230px; height:50px; line-height:50px; float:left; font-size:22px;}
							
				#tourRoute .tourTime{width:1200px; height:50px; line-height:50px; margin:0 auto; text-align:center; font-size:25px; background-color:#0255A5; color:#fff; font-family:"saria";}


				
				#tourRoute .routeArea:after{content:""; display:block; clear:both;}

		
		/*###################### bookWrap ##########################*/
		#bookWrap{width:100%;}
			#book{width:100%;}
				#book .imgText{width:100%; height:350px; position:relative;}
					#book .imgArea{width:100%; height:350px; text-align:center; background-color:rgba(0,0,0,0.7); position:relative; overflow:hidden;}
						#book .imgArea img{width:2000px; height:110%; position:absolute; left:50%; margin-left:-1000px;}

					#book .textArea{position:absolute; width:100%; height:350px; left:0; top:0;}
						#book .text{width:100%; margin-top:80px; text-align:center;}
							#book .title{width:100%; height:130px; color:#fff;}
								#book .title .text1{display:block; font-size:30px; font-family:"saria";}
								#book .title .text2{display:block; font-size:50px; font-family:"oswald";}
							#book .bookBtn{width:300px; height:50px; line-height:50px; margin:0 auto; background-color:#fff; font-size:20px; font-family:"saria"; font-weight:700;}
								#book .bookBtn a{display:block; width:100%; height:100%; color:#0255a5;}
		


		/*###################### noticeWrap ##########################*/
		#noticeWrap{width:100%; padding:50px 0;}
			#noticeTitle{width:100%; height:50px; position:relative;}
				#noticeTitle h3{position:absolute; right:56%; width:550px; height:40px; line-height:40px; font-family:"saria"; border-bottom: 4px solid #0255a5; border-right: 4px solid transparent; font-size:25px;}

			#noticeArea{width:1200px; margin:0 auto;}
				#noticeArea .noticeInfo{width:100%;}
					.noticeInfo li{width:50%; height:100px; float:left; font-family:"icon"; font-size:15px; padding-bottom:20px;}
					.noticeInfo .list0, .noticeInfo .list1{height:60px;} 
					.noticeInfo .list2, .noticeInfo .list3{height:70px;}
					.noticeInfo .list4, .noticeInfo .list5, .noticeInfo .list6, .noticeInfo .list7, .noticeInfo .list8{height:80px;}

						.noticeInfo .list0 .shape, .noticeInfo .list1 .shape, .noticeInfo .list2 .shape, .noticeInfo .list3 .shape, .noticeInfo .list4 .shape, .noticeInfo .list5 .shape, .noticeInfo .list6 .shape, .noticeInfo .list7 .shape, .noticeInfo .list8 .shape{float:left; width:30px; height:30px; padding:25px 15px;}
						
						.noticeInfo .list0 .shape:before{content:"\e914"; font-size:30px; display:inline-block;}
						.noticeInfo .list1 .shape:before{content:"\e917"; font-size:30px; display:inline-block;}
						.noticeInfo .list2 .shape:before{content:"\e916"; font-size:30px; display:inline-block;}
						.noticeInfo .list3 .shape:before{content:"\e90e"; font-size:25px; display:inline-block;}
						.noticeInfo .list4 .shape:before{content:"\e915"; font-size:30px; display:inline-block;}
						.noticeInfo .list5 .shape:before{content:"\e90f"; font-size:30px; display:inline-block;}
						.noticeInfo .list6 .shape:before{content:"\e918"; font-size:30px; display:inline-block;}
						.noticeInfo .list7 .shape:before{content:"\e910"; font-size:30px; display:inline-block;}
						.noticeInfo .list8 .shape:before{content:"\e90c"; font-size:30px; display:inline-block;}
						

						.noticeInfo .list0 .textArea, .noticeInfo .list1 .textArea, .noticeInfo .list2 .textArea, .noticeInfo .list3 .textArea, .noticeInfo .list4 .textArea, .noticeInfo .list5 .textArea, .noticeInfo .list6 .textArea, .noticeInfo .list7 .textArea, .noticeInfo .list8 .textArea{float:left; width:540px;}
						.noticeInfo .list0 .textArea, .noticeInfo .list2 .textArea, .noticeInfo .list3 .textArea{line-height:80px;} 
						.noticeInfo .list1 .textArea{line-height:20px; padding-top:20px;}
						.noticeInfo .list4 .textArea, .noticeInfo .list5 .textArea, .noticeInfo .list6 .textArea{font-size:14px;}
						.noticeInfo .list7 .textArea{line-height:20px; padding-top:20px;}			
				


				#noticeArea .noticeInfo:after{content:""; display:block; clear:both;}

		/*###################### mapWrap ##########################*/
		#mapWrap{width:100%;}
			#map{width:100%; height:400px;}


  </style>  
  <script>
	$(function(){
		var myLatlng = new google.maps.LatLng(41.380896,2.122819800000002);
		var mapOptions = { 
			zoom: 15, 
			center: myLatlng, 
			mapTypeId: google.maps.MapTypeId.ROADMAP 
		} 

		var map = new google.maps.Map(document.getElementById('map'), mapOptions);
		var marker = new google.maps.Marker({ 
				position: myLatlng, 
				map: map, 
				title: "Camp Nou" 
		}); 
		var infowindow = new google.maps.InfoWindow( 
			  { 
				content: "<h3>Camp Nou</h3>", 
				maxWidth: 300 
			  } 
		); 

		google.maps.event.addListener(marker, 'click', function() { 
		infowindow.open(map, marker); 
		}); 
	
	});
  </script>
 </head>
 <body>
	<div id="wrap">
<?php include "00_headerWrap.php"; ?>
		<div id="container">
			<section id="visualWrap">
				<h2>Camp Nou tour 비주얼 영역</h2>
				<div id="visual">
					<div class="textWrap">
						<div class="textArea">
							<p class="title">
								TOUR<br/>
								CAMP NOU
							</p>
							<p class="desc">
								COME TO TOUR CAMP NOU AND SEE LA DUODÉCIMA BY YOURSELF
							</p>
							<p class="price">
								<span class="ticket">TICKET</span> FROM <span class="euro">25€</span>
							</p>
							<p class="buyBtn">
								<a href="tourBuy.php" title="티켓 구매">BUY TICKET</a>
							</p>
						</div>
					</div>
					<div class="videoWrap">
						<div class="videoArea">
							<p>
								<a href="#none" title="투어 사이트"><img src="img/tour_visual.jpg" alt="비주얼 영역 이미지"/></a>
							</p>
						</div>
					</div>
				</div>
			</section>
			<section id="slideVisualWrap">
				<h2>슬라이드 비주얼 영역</h2>
				<div id="slideTitle">
					<h3>WHY VISIT THE CAMP NOU?</h3>
				</div>
				<div id="slideVisual">
					<ul id="slide">
						<li><a href="#none" title="슬라이드 비쥬얼1"><img src="img/tourSlide0.jpg" alt="슬라이드 비쥬얼1"/></a></li>
						<li><a href="#none" title="슬라이드 비쥬얼2"><img src="img/tourSlide2.jpg" alt="슬라이드 비쥬얼2"/></a></li>
						<li><a href="#none" title="슬라이드 비쥬얼3"><img src="img/tourSlide1.jpg" alt="슬라이드 비쥬얼3"/></a></li>
						<li><a href="#none" title="슬라이드 비쥬얼4"><img src="img/tourSlide3.jpg" alt="슬라이드 비쥬얼4"/></a></li>
					</ul>
				</div>
			</section>
			<section id="tourRouteWrap">
				<h2>투어 경로 안내 영역</h2>
				<div id="routeTitle">
					<h3>WHAT THE ROUTE INCLUDES</h3>
				</div>
				<div id="tourRoute">
					<ul class="routeArea">
						<li>
							<a href="#none" title="투어코스0"><img src="img/tour0.jpg" alt="투어코스0"/></a>
							<div class="desc">
								<p class="number">
									1
								</p>
								<p class="course">
									IN TOUR BAR
								</p>
							</div>
						</li>
						<li>
							<a href="#none" title="투어코스1"><img src="img/tour1.jpg" alt="투어코스1"/></a>
							<div class="desc">
								<p class="number">
									2
								</p>
								<p class="course">
									Estrella Damm Hall
								</p>
							</div>
						</li>
						<li>
							<a href="#none" title="투어코스2"><img src="img/tour2.jpg" alt="투어코스2"/></a>
							<div class="desc">
								<p class="number">
									3
								</p>
								<p class="course">
									Ice Rink
								</p>
							</div>
						</li>
						<li>
							<a href="#none" title="투어코스3"><img src="img/tour3.jpg" alt="투어코스3"/></a>
							<div class="desc">
								<p class="number">
									4
								</p>
								<p class="course">
									Pans &amp; Company
								</p>
							</div>
						</li>
						<li>
							<a href="#none" title="투어코스4"><img src="img/tour4.jpg" alt="투어코스4"/></a>
							<div class="desc">
								<p class="number">
									5
								</p>
								<p class="course">
									Virtual Experience
								</p>
							</div>
						</li>
						<li>
							<a href="#none" title="투어코스5"><img src="img/tour5.jpg" alt="투어코스5"/></a>
							<div class="desc">
								<p class="number">
									6
								</p>
								<p class="course">
									Audio guide service
								</p>
							</div>
						</li>
						<li>
							<a href="#none" title="투어코스6"><img src="img/tour6.jpg" alt="투어코스6"/></a>
							<div class="desc">
								<p class="number">
									7
								</p>
								<p class="course">
									Guide Service
								</p>
							</div>
						</li>
						<li>
							<a href="#none" title="투어코스7"><img src="img/tour7.jpg" alt="투어코스7"/></a>
							<div class="desc">
								<p class="number">
									8
								</p>
								<p class="course">
									Experience Guide
								</p>
							</div>
						</li>
						<li>
							<a href="#none" title="투어코스8"><img src="img/tour8.jpg" alt="투어코스8"/></a>
							<div class="desc">
								<p class="number">
									9
								</p>
								<p class="course">
									Tour and Museum
								</p>
							</div>
						</li>
						<li>
							<a href="#none" title="투어코스9"><img src="img/tour9.jpg" alt="투어코스9"/></a>
							<div class="desc">
								<p class="number">
									10
								</p>
								<p class="course">
									Tour VIP
								</p>
							</div>
						</li>
						<li>
							<a href="#none" title="투어코스10"><img src="img/tour10.jpg" alt="투어코스10"/></a>
							<div class="desc">
								<p class="number">
									11
								</p>
								<p class="course">
									Get your picture
								</p>
							</div>
						</li>
						<li>
							<a href="#none" title="투어코스11"><img src="img/tour11.jpg" alt="투어코스11"/></a>
							<div class="desc">
								<p class="number">
									12
								</p>
								<p class="course">
									Barça Coins
								</p>
							</div>
						</li>
					</ul>
					<div class="tourTime">
						<p>The approximate time of the visit is 1 hour and a half</p>
					</div>
				</div>
			</section>
			<section id="bookWrap">
				<h2>예약 광고 영역</h2>
				<div id="book">
					<div class="imgText">
						<p class="imgArea">
							<img src="img/ticket.jpg" alt="선수 관련 이미지"/>
						</p>
						<div class="textArea">
							<div class="text">
								<p class="title">
									<span class="text1">ARE YOU IN A GROUP?</span>
									<span class="text2">BOOK YOUR VISIT HERE</span>
								</p>
								<p class="bookBtn">
									<a href="tourBuy.php" title="예약">BOOK YOUR TICKETS</a>
								</p>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section id="noticeWrap">
				<h2>공지사항 영역</h2>
				<div id="noticeTitle">
					<h3>GENERAL INFORMATION CAMP NOU TOUR</h3>
				</div>
				<div id="noticeArea">
					<ul class="noticeInfo">
						<li class="list0">
							<p class="shape">								
							</p>
							<p class="textArea">
								(+34) 902 1899 00
							</p>
						</li>
						<li class="list1">
							<p class="shape">								
							</p>
							<p class="textArea">
								Tickets are sold at Box Office 10, beside Gate 7 (Paseo de la Castellana, entrance at Tower B) or you can buy in advance in order to avoid queues.	
							</p>
						</li>
						<li class="list2">
							<p class="shape">								
							</p>
							<p class="textArea">
								Open every day except the 25th of December and the 1st of January.
							</p>
						</li>
						<li class="list3">
							<p class="shape">								
							</p>
							<p class="textArea">
								tour@fcbarcelona.cat
							</p>
						</li>
						<li class="list4">
							<p class="shape">								
							</p>
							<p class="textArea">
								Adults €25, Children (up to 14 years old) €18.00, Adult Membership Card holders €17.00, Junior Membership Card holders €13.00. Season-ticket holders get in for free when they present their membership card (not their season-ticket) at the ticket office. Combined School Tickets
							</p>
						</li>
						<li class="list5">
							<p class="shape">								
							</p>
							<p class="textArea">
								On match days, fans can take the Tour up to 5 hours before kick-off. Up to 3 and a half hours beforehand, visitors can till access the "Best Club in History" room, "Sensations" room and take advantage of the Panoramic view of the stadium.
							</p>
						</li>
						<li class="list6">
							<p class="shape">								
							</p>
							<p class="textArea">
								Your visit to the Camp Nou comes with an optional audio guide and includes: a panoramic view of the stadium, the "Best Club in History" room, “Sensations” room, photo collages, the pitch, the presidential box, dressing rooms, players tunnel, bench and technical area, press room and official store.
							</p>
						</li>
						<li class="list7">
							<p class="shape">								
							</p>
							<p class="textArea">
								On non-match day the timetable is as follows:
								Monday to Saturday: from 10.00 to 19.00
								Sundays and public holidays: from 10.30 to 18.30.
							</p>
						</li>
						<li class="list8">
							<p class="shape">								
							</p>
							<p class="textArea">
								Wheelchair users: It is not currently possible to complete the entire Bernabéu Tour. We offer a free visit to the "Best Club in History" room, "Sensations" room and a visit to the substitutes bench with an accompanying visitor.
							</p>
						</li>
					</ul>
				</div>
			</section>
			<section id="mapWrap">
				<h2>Camp Nou 지도영역</h2>
				<div>
					<p id="map">
						
					</p>
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
