<!DOCTYPE html>
<html lang="ko">
 <head>
  <meta charset="utf-8"/>
  <title> BARCELONA SHOP </title>
  <script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
  <script type="text/javascript" src="js/jquery.color.js"></script>  
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
	@font-face{font-family:"oswald"; src:url("font/Oswald.woff2");}
	@font-face{font-family:"nikeshop"; src:url("font/nikeShop.woff");}



		/*##################### container ##########################*/
		#container{width:100%; margin-top:125px; overflow:hidden; font-family:"exo";}
			#productWrap{width:100%;}
				#productDescWrap{width:1230px; margin:30px auto; 0}
					#productArea{width:800px; float:left; position:relative; overflow:hidden;}
						#film{width:2400px;}
						#productArea li{width:800px; float:left;}
							#productArea li img{width:100%;}

						#film:after{content:""; display:block; clear:both;}
						#blackBtn p{width:70px; height:70px; cursor:pointer;}
						#blackBtn .prev{position:absolute; left:10px; top:50%; margin-top:-35px;}
						#blackBtn .next{position:absolute; right:10px; top:50%; margin-top:-35px;}
							#blackBtn img{width:100%; height:100%;}

					#descArea{width:380px; margin-left:50px; float:left; font-family:'saria';}
						#descArea .title{font-size:30px; font-family:'nikeshop';}
						#descArea .price{font-size:14px; margin:5px 0 20px; font-family:'nikeshop';}
						#descArea .choose{font-size:16px; font-family:'nikeshop';}
						#descArea .size{width:100%; margin:10px 0; overflow:hidden; font-family:'nikeshop';}
							#descArea .size li{width:20%; float:left;}
								#descArea .size li input{width:100%; height:48px; background-color:#fff; border:1px solid #ccc;}
								#descArea .size li input:hover{border:1px solid #333;}
						#descArea .likeArea{width:100%; overflow:hidden; margin:30px 0;}
							#descArea #addCart{width:300px; height:40px; float:left; box-sizing:border-box; text-align:center; background-color:#000; color:#fff; border:1px solid transparent; transition:all 1s;}
							#descArea #like{width:79px; margin-left:1px; height:40px; line-height:40px; float:left; box-sizing:border-box; text-align:center; background-color:#000; color:#fff; border:1px solid transparent; transition:all 1s; font-size:25px;}

							#descArea #addCart:hover{background-color:#777;}
							#descArea #like:hover{background-color:#777; font-size:40px;}

						#descArea .desc0{margin:10px 0; font-size:14px;}
						#descArea .desc1{margin:20px 0; font-size:14px;}
							#descArea .desc1 li{list-style-type:disc; list-style-position:inside;}

						#descArea .desc2{width:100%;}
							.desc2 li{width:100%; border-top:1px solid #ccc;}
							.desc2 li:last-child{border-bottom:1px solid #ccc;}
								.desc2 .descTitle0{padding:20px 0; cursor:pointer;}
									.desc2 .title0{width:90%; float:left;}
									.desc2 .minus{width:10%; float:right; font-size:40px; line-height:20px;}
								.desc2 .descTitle0:after{content:""; display:block; clear:both;}
								
								.desc2 .descTitle1{width:100%;}
									.desc2 .info0{margin:10px 0;}
								.descTitle1 ul{width:100%; margin-bottom:10px;}
									.descTitle1 ul li{margin-left:5%; width:95%; list-style-type:disc; list-style-position:inside; border:none;}
									.descTitle1 ul li:last-child{border-bottom:none;}
						
				#productDescWrap:after{content:""; display:block; clear:both;}
					
			
		
  </style>
  <script>
	$(function(){
		/*############# .desc2 영역 아코디언################*/
		$(".desc2 .descTitle1").hide();
		$(".desc2 li:eq(0) .descTitle1").show();
		$(".descTitle0").click(function(){
			$(".descTitle0").children(".minus").text("-");
			$(this).children(".minus").text("+");
			$(".descTitle1").slideUp(500);
			$(this).next().slideDown(500);
		});

		/*############# .size영역 background-color################*/
		$(".size li input").click(function(){
			$(".size li input").stop().animate({"backgroundColor":"#fff","color":"#000"},500);
			$(this).stop().animate({"backgroundColor":"#000","color":"#fff"},500);
		});

		/*####################### 슬라이딩 윈도우 #########################*/
		$("#film").prepend($("#film li:last"));
		sceneW = $("#film li").width();
		$("#film").css({"marginLeft":"-"+sceneW+"px"});

		$(".next").click(function(){
			
			$("#film:not(:animated)").stop().animate({"marginLeft":"-=100%"},1000,"swing",function(){
				$("#film").append($("#film li:first"));
				$("#film").css({"marginLeft":"-"+sceneW+"px"});
			});
		});

		$(".prev").click(function(){
			$("#film:not(:animated)").stop().animate({"marginLeft":"+=100%"},1000,"swing",function(){
				$("#film").prepend($("#film li:last"));
				$("#film").css({"marginLeft":"-"+sceneW+"px"});
			});
		});

	});
  </script>
 </head>
 <body>
	<div id="wrap">
<?php include "00_headerWrap.php"; ?>
		<div id="container">
			<section id="productWrap">
				<h2>제품 상세 페이지 영역</h2>
				<div id="productDescWrap">
					<div id="productArea">
						<ul id="film">
							<li>
								<img src="img/product2_0.jpg" alt="이미지0"/>
							</li>
							<li>
								<img src="img/product2_1.jpg" alt="이미지1"/>
							</li>
							<li>
								<img src="img/product2_2.jpg" alt="이미지2"/>
							</li>
						</ul>
						<div id="blackBtn">
							<p class="prev">
								<img src="img/prevBlack.png" alt="이전버튼"/>
							</p>
							<p class="next">
								<img src="img/nextBlack.png" alt="다음버튼"/>
							</p>
						</div>
					</div>
					<div id="descArea">
						<h3 class="title">2017/18 FC BARCELONA<br/> STADIUM HOME</h3>
						<p class="price">Men's Soccer Jersey 90€</p>
						<p class="choose">CHOOSE SIZE</p>
						<ul class="size">
							<li><input id="sSize" type="button" name="sSize" value="S" title="S" readonly/></li>
							<li><input id="mSize" type="button" name="mSize" value="M" title="M" readonly/></li>
							<li><input id="lSize" type="button" name="lSize" value="L" title="L" readonly/></li>
							<li><input id="xlSize" type="button" name="xlSize" value="XL" title="XL" readonly/></li>
							<li><input id="xxlSize" type="button" name="xxlSize" value="2XL" title="2XL" readonly/></li>
						</ul>
						<p class="likeArea">
							<input id="addCart" type="button" name="addCart" value="ADD TO CART" title="ADD TO CART" readonly/>
							<input id="like" type="button" name="like" value="♥" title="like" readonly/>			
						</p>
						<p class="desc0">
							The 2017/18 FC Barcelona Home Men's Soccer Jersey is made with lightweight sweat-wicking fabric to help keep you cool, dry and comfortable.
						</p>
						<ul class="desc1">
							<li>
								Shown: Deep Royal Blue/University Gold
							</li>
							<li>
								Style: 847255-456
							</li>
						</ul>
						<ul class="desc2">
							<li>
								<div class="descTitle0">
									<p class="title0">FREE SHIPPING & RETURNS</p>
									<p class="minus">+</p>
								</div>
								<div class="descTitle1">
									<p class="info0">
										Free standard shipping and 30-day free returns, only with NikePlus. Exclusions apply
									</p>
									<ul>
										<li>Standard / Arrives 2-4 Business Days</li>
										<li>Two-Day / Arrives 2-3 Business Days</li>
										<li>Next-Day / Arrives 1-2 Business Days</li>
									</ul>
								</div>						
							</li>
							<li>
								<div class="descTitle0">
									<p class="title0">REVIEWS</p>
									<p class="minus">-</p>
								</div>
								<div class="descTitle1">
									<p class="info0">
										Wounderful outfit love it. I appreciate the works for a great club FCB
									</p>
								</div>						
							</li>
							<li>
								<div class="descTitle0">
									<p class="title0">MORE INFO</p>
									<p class="minus">-</p>
								</div>
								<div class="descTitle1">
									<p class="info0">
										Shop All Soccer Fan Gear Jerseys Here.
									</p>
								</div>						
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
