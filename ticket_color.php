<!DOCTYPE html>
<html lang="ko">
 <head>
  <meta charset="utf-8"/>
  <title> ticket </title>  
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
			#ticketWrap{width:100%;}

			/*############################ matchWrap #########################*/
				#matchWrap{width:100%; background-image:url("img/ticket_back.jpg"); height:650px; background-repeat:no-repeat;}
					#matchWrap .first{max-width:1100px; width:100%; margin:0 auto;}
						#matchWrap h3{width:100%; text-align:center; color:#fff; font-size:70px; padding:50px 0 10px;}
						
						#matchWrap .versus{width:100%; height:400px; overflow:hidden; background-color:rgba(0,0,0,0.6); color:#fff; border-radius:10px;}
							#matchWrap .day{width:25%; float:left;}
								#matchWrap .day strong{display:block; padding:30px 20px 58px; font-size:20px;}
								#matchWrap .day p{padding:2px 20px;}
								#matchWrap .day .league{color:#ccc; padding-top:120px; font-weight:700;}
								#matchWrap .day .matchDay{color:#aaa; font-weight:700;}
								#matchWrap .day .matchTime{color:#aaa; font-weight:700;}
								#matchWrap .day .location{color:#ccc; font-weight:700;}
								
							#matchWrap .team{padding-left:6%; padding-right:6%; width:37%; float:left; border-left:1px dashed rgba(255,255,255,0.15); border-right:1px dashed rgba(255,255,255,0.15); height:75%; margin-top:5%;}
								#matchWrap .team .home{width:35%; float:left; padding-top:8px;}
									#matchWrap .team .home img{width:96%; height:96%;}

								#matchWrap .team .vs{width:30%; text-align:center; padding-top:40px; font-size:40px; float:left; font-weight:700; color:rgba(255,255,255,0.5);}

								#matchWrap .team .away{width:35%; float:left;}
									#matchWrap .team .away img{width:100%; height:100%;}

								#matchWrap .teamName{clear:both; width:100%; padding:4% 0 10%; height:35px;}
									#matchWrap .teamName .home1{width:50%; display:block; float:left; font-size:20px; font-weight:700; text-indent:18px;}
									#matchWrap .teamName .away1{width:50%; display:block; font-weight:700; text-align:center; text-indent:60px; font-size:20px; float:left;}
								#matchWrap .buyBtn{width:100%; height:50px; outline:1px solid #000; line-height:50px; background-color:#AE0917; text-align:center; transition:all .3s linear .1s;}
									#matchWrap .buyBtn a{color:#fff; display:block; width:100%; height:100%;}
								
								#matchWrap .buyBtn:hover{background-color:#0255A5;}

								
							#matchWrap .priceArea{width:25%; float:left;}
								#matchWrap .priceArea a{display:block; padding:30px 20px; text-align:right; color:#96ccdb; font-size:18px;}
								#matchWrap .priceArea .normal{text-align:right; padding-right:20px; padding-top:190px; font-size:17px; line-height:30px;}
									#matchWrap .priceArea .normal .seat{font-weight:700;}
									#matchWrap .priceArea .normal .euro{font-weight:700;}

				
			


			/*############################ infoWrap #########################*/
			#infoWrap{width:100%; background-color:#ccc;}
				#gameAd{width:100%; max-width:1280px; margin:0 auto; overflow:hidden;}
					#gameAd h3{width:100%; text-align:center; color:#000; font-size:40px; padding:50px 0 60px;}
					#gameInfo{width:70%; float:left;}
						#gameInfo li{width:100%; padding-bottom:50px}
						#gameInfo .first{margin:0 auto;; max-width:800px; width:100%;}
							
							
							#gameInfo .versus{width:100%; height:260px; overflow:hidden; background-color:rgba(255,255,255,1); color:#000; border-radius:20px; box-shadow:2px 2px 10px rgba(0,0,0,0.1); border:1px solid #ccc;}
								#gameInfo .day{width:25%; float:left;}
									#gameInfo .day strong{display:block; padding:30px 0 100px 20px; font-size:15px;}
									#gameInfo .day p{padding:0 20px; font-size:15px;}
									#gameInfo .day .league{color:#000; font-weight:700;}
									#gameInfo .day .matchDay{color:#000; font-weight:700;}
									#gameInfo .day .matchTime{color:#000; font-weight:700;}
									#gameInfo .day .location{color:#000; font-weight:700;}
									
								#gameInfo .team{padding-left:6%; padding-right:6%; width:37%; float:left; border-left:1px dashed rgba(0,0,0,0.15); border-right:1px dashed rgba(0,0,0,0.15); height:75%; margin-top:5%;}
									#gameInfo .team .home{width:35%; float:left; padding-top:8px;}
										#gameInfo .team .home img{width:96%; height:96%;}

									#gameInfo .team .vs{width:30%; text-align:center; padding-top:30px; font-size:40px; float:left; font-weight:700; color:#000;}

									#gameInfo .team .away{width:35%; float:left;}
										#gameInfo .team .away img{width:96%; height:96%;}

									#gameInfo .teamName{clear:both; width:100%; height:35px; font-size:17px; padding-bottom:15px;}
										#gameInfo .teamName .home1{width:50%; display:block; float:left; font-weight:700; text-indent:16px;}
										#gameInfo .teamName .away1{width:50%; display:block; font-weight:700; text-align:center; text-indent:50px; float:left;}
									#gameInfo .buyBtn{width:100%; height:30px; outline:1px solid #000; line-height:30px; background-color:#0255A5; text-align:center; transition:all .3s linear .1s;}
										#gameInfo .buyBtn a{color:#fff; font-size:15px; display:block; width:100%; height:100%;}

									#gameInfo .buyBtn:hover{background-color:#AE0917;}

									
								#gameInfo .priceArea{width:25%; float:left;}
									#gameInfo .priceArea a{display:block; padding:30px 20px; text-align:right; font-size:15px; color:#00f;}
									#gameInfo .priceArea .normal{text-align:right; padding-right:20px; padding-top:90px; font-size:15px; line-height:30px;}
										#gameInfo .priceArea .normal .seat{font-weight:700;}
										#gameInfo .priceArea .normal .euro{font-weight:700;}

					
					#adArea{width:30%; float:left;}
						#adArea ul{margin:0 auto; width:300px;}
							#adArea li{width:300px; margin-bottom:30px;}
								#adArea li img{width:100%;}
				


						

  </style>
 </head>
 <body>
	<div id="wrap">
<?php include "00_headerWrap.php"; ?>
		<div id="container">
			<section id="ticketWrap">
				<h2>티켓 구매 영역</h2>
				<div id="matchWrap">
					<div class="first">
						<h3>Next Match Ticket</h3>
						<div class="versus">
							<div class="day">
								<strong>NEXT FIXTURE</strong>
								<p class="league">COPA DEL REY</p>
								<p class="matchDay">12/04/2018</p>
								<p class="matchTime">SAT 18:30</p>
								<p class="location">CAMP NOU</p>
							</div>
							<div class="team">
								<p class="home"><img src="img/logo_high.png" alt="바로셀로나 로고"/></p>
								<p class="vs"> VS </p>
								<p class="away"><img src="img/logo3_high.png" alt="레알마드리드 로고"/></p>
								<p class="teamName">
									<span class="home1">Barcelona</span>
									<span class="away1">Real Madrid</span>
								</p>
								<p class="buyBtn"><a href="ticketBuy.php" title="BUY">BUY TICKETS</a></p>
							</div>
							<div class="priceArea">
								<a href="#none" title="More Information">MORE INFORMATION</a>
								<p class="normal">
									<span class="seat">TICKET</span> FROM <span class="euro">45€</span><br/>
									<span class="seat">TICKET VIP</span> FROM <span class="euro">250€</span>
								</p>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section id="infoWrap">
				<h2>게임정보 및 광고영역</h2>
				<div id="gameAd">
					<h3>After Match</h3>
					<ul id="gameInfo">
						<li class="game1">
							<div class="first">								
								<div class="versus">
									<div class="day">
										<strong>NEXT FIXTURE</strong>
										<p class="league">COPA DEL REY</p>
										<p class="matchDay">19/04/2018</p>
										<p class="matchTime">SAT 16:45</p>
										<p class="location">CAMP NOU</p>
									</div>
									<div class="team">
										<p class="home"><img src="img/logo_high.png" alt="바로셀로나 로고"/></p>
										<p class="vs"> VS </p>
										<p class="away"><img src="img/logo2.png" alt="발렌시아 로고"/></p>
										<p class="teamName">
											<span class="home1">Barcelona</span>
											<span class="away1">Valencia</span>
										</p>
										<p class="buyBtn"><a href="#none" title="BUY">BUY TICKETS</a></p>
									</div>
									<div class="priceArea">
										<a href="#none" title="More Information">MORE INFORMATION</a>
										<p class="normal">
											<span class="seat">TICKET</span> FROM <span class="euro">45€</span><br/>
											<span class="seat">TICKET VIP</span> FROM <span class="euro">250€</span>
										</p>
									</div>
								</div>
							</div>
						</li>
						<li class="game2">
							<div class="first">								
								<div class="versus">
									<div class="day">
										<strong>NEXT FIXTURE</strong>
										<p class="league">COPA DEL REY</p>
										<p class="matchDay">26/04/2018</p>
										<p class="matchTime">SAT 18:45</p>
										<p class="location">CAMP NOU</p>
									</div>
									<div class="team">
										<p class="home"><img src="img/logo_high.png" alt="바로셀로나 로고"/></p>
										<p class="vs"> VS </p>
										<p class="away"><img src="img/logo5.png" alt="비아레알 로고"/></p>
										<p class="teamName">
											<span class="home1">Barcelona</span>
											<span class="away1">Villarreal</span>
										</p>
										<p class="buyBtn"><a href="#none" title="BUY">BUY TICKETS</a></p>
									</div>
									<div class="priceArea">
										<a href="#none" title="More Information">MORE INFORMATION</a>
										<p class="normal">
											<span class="seat">TICKET</span> FROM <span class="euro">45€</span><br/>
											<span class="seat">TICKET VIP</span> FROM <span class="euro">250€</span>
										</p>
									</div>
								</div>
							</div>
						</li>
						<li class="game3">
							<div class="first">								
								<div class="versus">
									<div class="day">
										<strong>NEXT FIXTURE</strong>
										<p class="league">COPA DEL REY</p>
										<p class="matchDay">05/05/2018</p>
										<p class="matchTime">SAT 18:30</p>
										<p class="location">CAMP NOU</p>
									</div>
									<div class="team">
										<p class="home"><img src="img/logo_high.png" alt="바로셀로나 로고"/></p>
										<p class="vs"> VS </p>
										<p class="away"><img src="img/logo1.png" alt="At. Madrid 로고"/></p>
										<p class="teamName">
											<span class="home1">Barcelona</span>
											<span class="away1">At. Madrid</span>
										</p>
										<p class="buyBtn"><a href="#none" title="BUY">BUY TICKETS</a></p>
									</div>
									<div class="priceArea">
										<a href="#none" title="More Information">MORE INFORMATION</a>
										<p class="normal">
											<span class="seat">TICKET</span> FROM <span class="euro">45€</span><br/>
											<span class="seat">TICKET VIP</span> FROM <span class="euro">250€</span>
										</p>
									</div>
								</div>
							</div>
						</li>
						<li class="game4">
							<div class="first">								
								<div class="versus">
									<div class="day">
										<strong>NEXT FIXTURE</strong>
										<p class="league">COPA DEL REY</p>
										<p class="matchDay">12/05/2018</p>
										<p class="matchTime">SAT 18:30</p>
										<p class="location">CAMP NOU</p>
									</div>
									<div class="team">
										<p class="home"><img src="img/logo_high.png" alt="바로셀로나 로고"/></p>
										<p class="vs"> VS </p>
										<p class="away"><img src="img/logo4.png" alt="Sevilla 로고"/></p>
										<p class="teamName">
											<span class="home1">Barcelona</span>
											<span class="away1">Sevilla</span>
										</p>
										<p class="buyBtn"><a href="#none" title="BUY">BUY TICKETS</a></p>
									</div>
									<div class="priceArea">
										<a href="#none" title="More Information">MORE INFORMATION</a>
										<p class="normal">
											<span class="seat">TICKET</span> FROM <span class="euro">45€</span><br/>
											<span class="seat">TICKET VIP</span> FROM <span class="euro">250€</span>
										</p>
									</div>
								</div>
							</div>
						</li>
						<li class="game5">
							<div class="first">								
								<div class="versus">
									<div class="day">
										<strong>NEXT FIXTURE</strong>
										<p class="league">COPA DEL REY</p>
										<p class="matchDay">19/05/2018</p>
										<p class="matchTime">SAT 18:30</p>
										<p class="location">CAMP NOU</p>
									</div>
									<div class="team">
										<p class="home"><img src="img/logo_high.png" alt="바로셀로나 로고"/></p>
										<p class="vs"> VS </p>
										<p class="away"><img src="img/logo6.png" alt="Eibar 로고"/></p>
										<p class="teamName">
											<span class="home1">Barcelona</span>
											<span class="away1">Eibar</span>
										</p>
										<p class="buyBtn"><a href="#none" title="BUY">BUY TICKETS</a></p>
									</div>
									<div class="priceArea">
										<a href="#none" title="More Information">MORE INFORMATION</a>
										<p class="normal">
											<span class="seat">TICKET</span> FROM <span class="euro">45€</span><br/>
											<span class="seat">TICKET VIP</span> FROM <span class="euro">250€</span>
										</p>
									</div>
								</div>
							</div>
						</li>
						<li class="game6">
							<div class="first">								
								<div class="versus">
									<div class="day">
										<strong>NEXT FIXTURE</strong>
										<p class="league">COPA DEL REY</p>
										<p class="matchDay">26/05/2018</p>
										<p class="matchTime">SAT 18:30</p>
										<p class="location">CAMP NOU</p>
									</div>
									<div class="team">
										<p class="home"><img src="img/logo_high.png" alt="바로셀로나 로고"/></p>
										<p class="vs"> VS </p>
										<p class="away"><img src="img/logo7.png" alt="Getafe 로고"/></p>
										<p class="teamName">
											<span class="home1">Barcelona</span>
											<span class="away1">Getafe</span>
										</p>
										<p class="buyBtn"><a href="#none" title="BUY">BUY TICKETS</a></p>
									</div>
									<div class="priceArea">
										<a href="#none" title="More Information">MORE INFORMATION</a>
										<p class="normal">
											<span class="seat">TICKET</span> FROM <span class="euro">45€</span><br/>
											<span class="seat">TICKET VIP</span> FROM <span class="euro">250€</span>
										</p>
									</div>
								</div>
							</div>
						</li>
					</ul>
					<aside id="adArea">
						<ul>
							<li><a href="#none" title="광고0"/><img src="img/ad0.jpg" alt="광고이미지0"/></li>
							<li><a href="#none" title="광고0"/><img src="img/ad1.jpg" alt="광고이미지0"/></li>
							<li><a href="#none" title="광고2"/><img src="img/ad2.png" alt="광고이미지0"/></li>
						</ul>
					</aside>
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
