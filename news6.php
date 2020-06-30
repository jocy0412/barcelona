<!DOCTYPE html>
<html lang="ko">
 <head>
  <meta charset="utf-8"/>
  <title> NEWS </title>  
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

		/*############### newsWrap + newsHeaderWrap #################*/
		#newsWrap{width:100%;}
		#newsHeaderWrap{width:100%; border-bottom:3px solid #9C1737;}

			/*############### newsHeader #################*/
			#newsHeader{width:1000px; margin:0 auto;}
				#newsHeader .hashTag{font-size:18px; padding-top:20px;}
				#newsHeader h3{font-size:35px; font-family:"saria"; padding:20px 0 15px;}
				#newsHeader .publish{background-color:#E3E5E6; overflow:hidden;}
					#newsHeader .publish .date{width:865px; height:40px; line-height:40px; font-size:18px; float:left;}
					#newsHeader .publish .shareArea{width:135px; float:right;}
						.shareArea ul{width:135px; overflow:hidden;}
							.shareArea ul li{width:40px; height:40px; float:left; margin-left:5px;}
								.shareArea ul li a{display:block; width:100%; height:100%;}
									.shareArea ul li a img{width:100%; height:100%;}
				#newsHeader .descText{color:#4C5159; font-size:22px; padding:20px 0;}

		
		/*############### newsAreaWrap #################*/				
		#newsAreaWrap{width:100%; overflow:hidden;}
			#newsArea{width:1000px; margin:50px auto 0;}
				#newsArea .imgArea{width:100%; height:562px; position:relative;}
					#newsArea .imgArea img{width:100%; height:100%;}
				#newsArea .imgArea .bottomTitle{width:100%; height:40px; line-height:40px; text-indent:10px; display:block; position:absolute; left:0; bottom:0; background-color:rgba(0,0,0,0.5); color:#fff; font-family:"saria"}
			
			#textSideWrap{width:100%; overflow:hidden;}
				#textSideWrap .textArea{width:660px; padding:20px; float:left; font-size:20px; line-height:30px;}
					#textSideWrap h4{font-size:30px; padding:30px 0 10px;}
					#textSideWrap .highLight{background-color:#ccc; padding:10px; margin:20px 0;}

				#sideArea{width:300px; float:right; padding-top:20px;}
					#sideArea .latest{width:298px; border:1px solid #ccc;}
						#sideArea .latest h3{border-top:3px solid #9C1737; padding:20px 0 15px; text-indent:10px;}
						#sideArea .latest ul{width:100%;}
							#sideArea .latest li{width:100%; height:100px; border-top:1px solid #ccc;}
								#sideArea .latest li a{display:block; width:100%; height:100%; overflow:hidden; color:#325082; font-weight:700;}
									#sideArea .latest a .newsImg{display:block; width:108px; height:60px; float:left; padding:20px 0 20px 10px;}
										#sideArea .latest a .newsImg img{width:100%; height:100%;}
										
									#sideArea .latest a .newsTitle{display:block; width:170px; height:60px; float:left; padding:20px 5px;}
						
						#sideArea .newsMain{text-align:center; outline:1px solid #ccc; padding:10px 0; background-color:#D2D5D6;}
							#sideArea .newsMain a{display:block; width:100%; color:#325082; font-weight:700;}

					#sideArea .newsAd{width:100%; padding-top:10px;}
						#sideArea .newsAd p{padding:10px 0;}
					

  </style>
 </head>
 <body>
	<div id="wrap">
<?php include "00_headerWrap.php"; ?>
		<div id="container">
			<section id="newsWrap">
				<h2>뉴스 영역</h2>
				<div id="newsHeaderWrap">
					<h2>뉴스 헤더 영역</h2>
					<div id="newsHeader">
						<p class="hashTag">FOOTBALL</p>
						<h3 class="headLine">The team congratulate coach Valverde on his birthday</h3>
						<div class="publish">
							<p class="date"><strong>WWW.FCBARCELONA.COM</strong> - 09/02/2018 | 10:57</p>
							<div class="shareArea">
								<ul>
									<li><a href="#none" title="트위터 공유"><img src="img/twitter.png" alt="트위터 이미지"/></a></li>
									<li>
										<a href="#none" title="페이스북 공유"><img src="img/facebook.png" alt="페이스북 이미지"/></a>
									</li>
									<li>
										<a href="#none" title="구글+ 공유"><img src="img/googleplus.png" alt="구글 플러스 이미지"/></a>
									</li>
								</ul>
							</div>
						</div>
						<p class="descText">
							The first team carried out a recovery sessoon at the Ciutat Esportiva on Friday and took the opportunity to congratulate the coach on his 54th birthday
						</p>
					</div>
				</div>
				<div id="newsAreaWrap">
					<div id="newsArea">
						<p class="imgArea">
							<img src="img/new6.jpg" alt="news6 이미지"/>
							<span class="bottomTitle">
								Luis Suárez wishing the coach happy birthday
							</span>
						</p>
						<div id="textSideWrap">
							<div class="textArea">
								Smiles all round at the Ciutat Esportiva with Barça having reached their <strong>fifth Copa del Rey final</strong> in a row thanks to their <strong>0-3 aggregate win</strong> over Valencia in the semi-finals. The players returned to work and took the opportunity to congratulate coach Ernesto Valverde on the day of this 54th birthday. The session was a recovery one for the first team squad and they were joined by Samu Araujo, R.Tarín, Morer from the B squad and by U19 player Iñaki Peña.

								Ernesto Valverde continues breaking records in his debut season in the FC Barcelona dugout. Having already taken the team to their best ever unbeaten start to a LaLiga season, he continues to reach new milestones and has led Barça to a fifth consecutive Copa del Rey final. The coach has won over his players with his personal touch and that is not just something that we have seen in training this Friday. Coinciding with the Barça coach's 54th birthday, we hear from some of the players he has helped to success thus far in 2017/18.

								Leo Messi, Luis Suárez, Andrés Iniesta, Jordi Alba and Ivan Rakitic are among those praising Valverde's work since he arrived last summer. Since he joined the club, they have been in spectacular form in LaLiga, the Copa del Rey and the Champions League. Don't miss the players' words about their coach in the following video!
							</div>
							<aside id="sideArea">
								<div class="latest">
									<h3>LATEST NEWS</h3>
									<ul>
										<li>
											<a href="#none" title="최근뉴스0">
												<span class="newsImg">
													<img src="img/barTv.jpg" alt="barTv 이미지"/>
												</span>
												<span class="newsTitle">
													FC Barcelona v Espanyol: Derby delight (2-0)
												</span>
											</a>
										</li>
										<li>
											<a href="#none" title="최근뉴스1">
												<span class="newsImg">
													<img src="img/new4.jpg" alt="new4 이미지"/>
												</span>
												<span class="newsTitle">
													Luis Suárez hits jackpot with pinball goal
												</span>
											</a>
										</li>
										<li>
											<a href="#none" title="최근뉴스2">
												<span class="newsImg">
													<img src="img/new5.jpg" alt="new5 이미지"/>
												</span>
												<span class="newsTitle">
													Do you believe in BARÇA's magic?
												</span>
											</a>
										</li>
									</ul>
									<p class="newsMain">
										<a href="news.php" title="뉴스 전체 영역">View all articles</a>
									</p>
								</div>
								<div class="newsAd">
									<p>
										<a href="#none" title="shopAd"><img src="img/news_ad0.jpg" alt="뉴스 광고0"/></a>
									</p>
									<p>
										<a href="#none" title="sponserAd"><img src="img/news_ad1.jpg" alt="뉴스 광고1"/></a>
									</p>
								</div>
							</aside>
						<div>
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
