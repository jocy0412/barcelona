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
	
	#wrap{width:100%; max-width:1920px; margin:0 auto; font-family:"pontano";}


		/*############### container #################*/
		#container{width:100%; margin-top:125px; background-color:#000; overflow:hidden;}
			#sectionWrap{width:1280px; margin:0 auto 100px; background-color:#000; color:#fff; text-align:center;}
				.section0{width:940px; margin:40px auto 0;}
					.section0 .textArea{margin:20px 0 40px; font-size:20px; line-height:40px;}
				
				.section1, .section2{width:800px; margin:100px auto 0;}
					video{text-align:center;}
					.section1 .head1,.section2 .head1{font-size:40px; color:#fdc52c;}
						.section1 .textArea, .section2 .textArea{font-size:20px; margin:20px 0; line-height:40px;}
						

		
		





		/*############# footer ###############*/
		#footer{width:100%;}
			#sponsers{width:100%; background-color:#131519;}
				.floor0{width:100%; padding-top:40px; height:130px;}
					.floor0 .img{width:90px; height:90px; margin:0 auto;}
						.floor0 .img img{width:100%; height:100%;}
						.floor0 .teamName{color:#9C1737;padding-top:10px; text-align:center; font-size:18px; font-family:"saria";}
				
				.floor1{width:100%; overflow:hidden;}
					.floor1 ul{width:540px; height:54px; padding:10px 0; margin:20px auto 0;}
						.floor1 ul li{width:130px; height:54px; float:left; margin:0 20px;}
							.floor1 a{display:block; width:100%; height:100%;}
								.floor1 a img{width:100%; height:100%;}
				
				.floor2{width:100%; overflow:hidden;}
					.floor2 ul{max-width:1080px; width:100%; height:54px; padding:30px 0 10px; margin:0 auto;}
						.floor2 ul li{width:130px; height:54px; float:left; margin:0 20px;}
							.floor2 a{display:block; width:100%; height:100%;}
								.floor2 a img{width:100%; height:100%;}
				
				.floor3{width:100%; padding-top:40px; height:50px;}
					.floor3 p{width:100%; height:130px; text-align:center;}
						.floor3 p strong{font-size:18px; color:#fff;}
			
			#leftRightWrap{width:100%; background-color:#0F245F;}
				#footerArea{width:100%; max-width:1280px; background-color:#0F245F; height:120px; padding:30px 0; margin:0 auto;}
					#footerArea div{float:left;}
					#footerArea .left{width:50%; height:120px;}
						#footerArea .left .img{margin-left:10px; width:165px; height:40px;}
							#footerArea .left .img img{width:100%; height:100%;}
						#footerArea .left span{padding-left:10px; color:#9C1737; font-size:13px; font-weight:700;}
						#footerArea .left ul{width:1200px;}
							#footerArea .left ul li{display:inline; color:#777;}
								#footerArea .left ul li a{padding:10px; color:#fff; font-size:14px;}
					
					#footerArea .right{width:50%; color:#fff; font-size:14px; height:120px; text-align:right; position:relative;}
						#footerArea .right .img{width:190px; height:40px; position:absolute; right:0; top:0;}
							#footerArea .right .img img{width:100%; height:100%;}
						#footerArea .right .text{padding-top:62px;}
						

  </style>
  <script>
	$(function(){
		/*scroll을 이용한 기능구현*/
		var section0 = $(".section0");
		var section1 = $(".section1");
		var section2 = $(".section2");
		section1.css({"opacity":"0"});
		section2.css({"opacity":"0"});
		var section0H = section0.height();
		var section1H = section1.height();
		var section2H = section2.height();

		$(window).scroll(function(){
			var nowScroll = $(document).scrollTop();

			if(nowScroll >= section0H-100){
				$(".section1").css({"opacity":"1","transition":"all 1s linear"});
			}
			if(nowScroll >= section1H+section2H-300){
				$(".section2").css({"opacity":"1","transition":"all 1s linear"});
			}
		});
	});
  </script>
 </head>
 <body>
	<div id="wrap">
<?php include "00_headerWrap.php"; ?>
		<div id="container">
			<div id="sectionWrap">
				<div class="section0">
					<p class="campImg">
						<img src="img/dream0.png" alt="nujeen 로고"/>
					</p>
					<p class="textArea">
						At FC Barcelona, we are firm believers in dreams. In dreams of overcoming adversity. In dreams that convert deep desires into reality. One such dream has inspired the FC Barcelona Christmas message for this year: Nujeen’s Dream. It is a human story of fighting, determination and overcoming adversity that we want to share, not only with the millions of Barça fans but with the entire world.
					</p>
				</div>
				<div class="section1">
					<h3 class="head1">NUJEEN'S STORY</h3>
					<p class="textArea">
						In September 2015, Nujeen Mustafá made a 5000km journey to take him away from the horror and barbarity of Aleppo, his city of birth. In December 2017, Nujeen is beginning a new journey alongside Manu, the Barça bus driver. It is a trip that will turn one of his biggest dreams into reality.
					</p>
					<div class="video1">
						<video controls poster="img/campaign.jpg">
							<source src="video/dream0.mp4" type="video/mp4"/>
						</video>
					</div>
				</div>
				<div class="section2">
					<h3 class="head1">THE MAKING OF</h3>
					<p class="textArea">
						Want to know how Nujeen’s journey was organised? What anecdotes came about during filming? What was the relationship like between Manu and Nujeen? Find out all the details of this amazing story here.
					</p>
					<div class="video2">
						<video controls poster="img/campaign1.png">
							<source src="video/dream1.mp4" type="video/mp4"/>
						</video>
					</div>
				</div>
			</div>
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
