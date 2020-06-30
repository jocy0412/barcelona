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
	/*############ 초기화 ############*/
	*{margin:0; padding:0;}
	li{list-style-type:none;}
	a:link, a:visited{text-decoration:none;}
	img{border:none;}
	/*############# 버리는 영역#####################*/
	h1,h2{position:absolute; left:-9999px; overflow:hidden; width:1px; height:1px; line-height:0; font-size:1px;}

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
						#sideArea .newsAd p{padding:10px 0}
					


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
						<h3 class="headLine">Leo Messi reaches 20 goals in the league for the 10th season in a row</h3>
						<div class="publish">
							<p class="date"><strong>WWW.FCBARCELONA.COM</strong> - 29/01/2018 | 11:51</p>
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
							The Argentine star’s form is never less than spectacular and with his match-winning goal against Alavés, he reaches 20 goals in the league for the 10th year in succession
						</p>
					</div>
				</div>
				<div id="newsAreaWrap">
					<div id="newsArea">
						<p class="imgArea">
							<img src="img/new2.jpg" alt="news2 이미지"/>
							<span class="bottomTitle">
								Leo Messi continues in unstoppable form	
							</span>
						</p>
						<div id="textSideWrap">
							<div class="textArea">
								It never stops. <strong>Leo Messi</strong>’s latest match-winning contribution, his free-kick in the second half to give Barça a 2-1 come from behind win against Alavés, means he has reached 20 league goals for the 10th successive season. He reached the figure in his 200th league game at Camp Nou, thus equalling a feat he first achieved back in the 2008/09 season when scored 23 goals in La Liga in 31 appearances.<br/><br/>

								In five of those 10 seasons he has surpassed the 30 goal barrier in the league and this season he is well on the way once again as he currently has 20 in just 21 matches. Messi’s goal against Alavés was his 30th from a free kick in the league, a figure that from the 2003/04 season no-one else has been able to match.<br/><br/>

								The Barça number 10 continues to astound and he is also top of the goalscoring charts in La Liga this season ahead of his team mate <strong>Luis Suárez</strong>. The Argentine is on course to claim his fifth Golden Shoe award as Europe’s top scorer, following on from last season’s success when he ended the campaign with a total of 37 goals.
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
