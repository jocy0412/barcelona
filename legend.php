<!DOCTYPE html>
<html lang="ko">
 <head>
  <meta charset="utf-8"/>
  <title> BARCELONA LEGEND</title>  
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
			

		/*############### container + titleWrap #################*/
		#titleWrap{width:100%; height:70px; line-height:70px; border-bottom:4px solid #9C1737; background-color:#E4E6E7;}
			.title{width:54%; margin:0 auto;}
				.title strong{font-size:30px;}

		/*############### container + legendWrap #################*/
		#legendWrap{width:100%; background-color:#ddd; overflow:hidden;}
			#legendArea{width:1000px; margin:0 auto 50px;}

				#legendSection{width:680px; margin-right:20px; float:left;}
					#legend{width:100%; margin-top:50px;}
						#legend li{width:100%; overflow:hidden; margin-top:20px; background-color:#fff; border:1px solid #ccc;}
							#legend li .img{width:320px; height:180px; float:left;}
								#legend li .img img{width:100%; height:100%;}
							#legend li .desc{width:320px; padding:20px; float:left;}
								#legend li .desc{font-size:15px;}
								#legend li .desc strong{display:block; font-size:20px; margin-bottom:10px;}
								
				
				#legendAd{width:300px; float:left;}
					#legendAd ul{width:100%; margin-top:50px;}
						#legendAd ul li{margin-top:20px;}
			
			#legendArea:after{content:""; display:block; clear:both;}
						

  </style>
  <script>
	$(function(){

		
	});
  </script>
 </head>
 <body>
	<div id="wrap">
<?php include "00_headerWrap.php"; ?>
		<div id="container">
			<div id="titleWrap">
				<div class="title">
					<strong>Legends</strong>
				</div>
			</div>
			<section id="legendWrap">
				<h2>레전드 정보 영역</h2>
				<div id="legendArea">
					<div id="legendSection">
						<ul id="legend">
							<li>
								<p class="img">
									<img src="img/legend0.jpg" alt="레전드0"/>
								</p>
								<p class="desc">
									<strong>Dani Alves</strong>
									The Brazilian is considered the best right back in Barça’s long history. He arrived in 2008 from fellow La Liga club Sevilla, already with a reputation as one of the best defenders in the country
								</p>
							</li>
							<li>
								<p class="img">
									<img src="img/legend1.jpg" alt="레전드0"/>
								</p>
								<p class="desc">
									<strong>Dani Alves</strong>
									The Brazilian is considered the best right back in Barça’s long history. He arrived in 2008 from fellow La Liga club Sevilla, already with a reputation as one of the best defenders in the country
								</p>
							</li>
							<li>
								<p class="img">
									<img src="img/legend2.jpg" alt="레전드0"/>
								</p>
								<p class="desc">
									<strong>Dani Alves</strong>
									The Brazilian is considered the best right back in Barça’s long history. He arrived in 2008 from fellow La Liga club Sevilla, already with a reputation as one of the best defenders in the country
								</p>
							</li>
							<li>
								<p class="img">
									<img src="img/legend3.jpg" alt="레전드0"/>
								</p>
								<p class="desc">
									<strong>Dani Alves</strong>
									The Brazilian is considered the best right back in Barça’s long history. He arrived in 2008 from fellow La Liga club Sevilla, already with a reputation as one of the best defenders in the country
								</p>
							</li>
							<li>
								<p class="img">
									<img src="img/legend4.jpg" alt="레전드0"/>
								</p>
								<p class="desc">
									<strong>Dani Alves</strong>
									The Brazilian is considered the best right back in Barça’s long history. He arrived in 2008 from fellow La Liga club Sevilla, already with a reputation as one of the best defenders in the country
								</p>
							</li>
							<li>
								<p class="img">
									<img src="img/legend5.jpg" alt="레전드0"/>
								</p>
								<p class="desc">
									<strong>Dani Alves</strong>
									The Brazilian is considered the best right back in Barça’s long history. He arrived in 2008 from fellow La Liga club Sevilla, already with a reputation as one of the best defenders in the country
								</p>
							</li>
							<li>
								<p class="img">
									<img src="img/legend6.jpg" alt="레전드0"/>
								</p>
								<p class="desc">
									<strong>Dani Alves</strong>
									The Brazilian is considered the best right back in Barça’s long history. He arrived in 2008 from fellow La Liga club Sevilla, already with a reputation as one of the best defenders in the country
								</p>
							</li>
							<li>
								<p class="img">
									<img src="img/legend7.jpg" alt="레전드0"/>
								</p>
								<p class="desc">
									<strong>Dani Alves</strong>
									The Brazilian is considered the best right back in Barça’s long history. He arrived in 2008 from fellow La Liga club Sevilla, already with a reputation as one of the best defenders in the country
								</p>
							</li>
							<li>
								<p class="img">
									<img src="img/legend8.jpg" alt="레전드0"/>
								</p>
								<p class="desc">
									<strong>Dani Alves</strong>
									The Brazilian is considered the best right back in Barça’s long history. He arrived in 2008 from fellow La Liga club Sevilla, already with a reputation as one of the best defenders in the country
								</p>
							</li>
						</ul>
					</div>
					<aside id="legendAd">
						<ul>
							<li><a href="#none" title="광고0"><img src="img/ad2.png" alt="ad2"/></a></li>
							<li><a href="#none" title="광고0"><img src="img/legendAd0.gif" alt="광고0"/></a></li>
							<li><a href="#none" title="광고0"><img src="img/legendAd1.jpg" alt="광고1"/></a></li>
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
