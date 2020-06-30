<!DOCTYPE html>
<html lang="ko">
 <head>
  <meta charset="utf-8"/>
  <title> BARCELONA PRODUCT </title>
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
	@font-face{font-family:"oswald"; src:url("font/Oswald.woff2");}
	@font-face{font-family:"nikeshop"; src:url("font/nikeShop.woff");}
	
	
		/*##################### container ##########################*/
		#container{width:100%; margin-top:125px; overflow:hidden; font-family:"exo";}

			/*############# slideWrap ###############*/
			#slideWrap{width:100%;}
				#screen{width:100%; height:210px; overflow:hidden;}
				#film{width:400%;}
					.scene{float:left; width:25%; position:relative;}
					.scene img{ width:100%; }

					.scene .visual{position:absolute; left:100px; top:-8px; width:100%; margin:0 auto; overflow:hidden;}

					.scene .visual .textArea{width:600px; overflow:hidden; margin:50px; background-color:rgba(0,0,0,0); font-family:"saria";}
						.scene .visual .textArea h3{font-size:30px; line-height:30px; color:#efefef;}
						.scene .visual .textArea .title{font-size:18px; line-height:20px; color:#fff; padding:2% 0 2%;}
						.scene .visual .textArea .desc{width:100px; height:40px; line-height:40px; text-align:center; cursor:pointer; border-radius:5px;}
						.scene .visual .textArea .desc a{transition:all 1s; font-weight:700; font-size:12px; letter-spacing:0px; color:#333; background-color:#fff; width:100%; height:100%; display:block; border-radius:5px;}
						.scene .visual .textArea .desc:hover a{color:#fff; background-color:#333;}


				#film:after{content:""; display:block; clear:both;}

			


			/*########################### storeWrap ################################*/
			#storeWrap{width:100%;}
			#storeWrap:after{content:""; display:block; clear:both;}

			#selectWrap{width:20%; float:left;}
				#selectArea{width:90%; margin-top:30px; float:right;}					
					.sponLogo{width:220px; height:96px; margin:0 auto 20px;}
						.sponLogo a{display:block; width:100%; height:100%;}
							.sponLogo a img{width:100%; height:100%;}

			#selectWrap:after{content:""; display:block; clear:both;}

					#selectArea .title{font-size:18px;}

					.selectArea{width:100%;}
						.selectArea li{width:100%;}
						.selectArea .section{width:100%;}
							.section p{width:100%; margin-top:10px;}
								.section p a{color:#333;}
									.section p a:hover{text-decoration:underline;}
							.section h3{margin:30px 0 10px; font-size:20px;}
					
					.section1{width:100%; border-top:1px solid #ccc; padding:15px 0;}
						.section1 .title{width:100%; overflow:hidden; cursor:pointer;}
							.title span{display:block; width:50%; float:left;}
							.title .minus{text-align:right; width:45%; font-size:25px; font-weight:700; padding-right:5%;}
						
						.titleList{width:100%;}
							.titleList p{margin:10px 0;}
							.titleList input{margin-right:10px; cursor:pointer;}
							.titleList label{cursor:pointer;}
					




			#shopWrap{width:77%; padding-left:3%; float:left;}
				#titleWrap{width:1150px; margin-top:30px; font-family:"nikeshop";}
				#titleWrap h3{width:100%; font-size:55px; text-align:center;}
				#titleWrap .sub{font-size:28px; display:block;}

				#shopArea{width:1150px;}
					#shopArea .title{width:100%; overflow:hidden;}
					#shopArea h3{width:80%; float:left; font-size:25px; margin-bottom:30px;}
					#shopArea .sort{width:19%; float:left; font-size:25px; font-weight:700; text-align:right; padding-right:1%; cursor:pointer;}

			
			

		#goods{width:100%;}
			#goods li{width:220px; height:300px; float:left; margin:0 5px 50px;}
				#goods li a{display:block; width:100%; height:100%; position:relative; color:#000;}

					#goods li .img{display:block; width:100%; height:220px; overflow:hidden;}
							#goods li img{width:100%; height:100%; transition:all 1s;}
					
					#goods li .img:hover img{transform:scale(1.2);}
					
					#goods li a .desc{display:block; width:94%; padding:10px 3% 0; height:60px; margin-top:10px; background-color:rgba(0,0,0,0.01); border-top:1px solid #ccc;}
						#goods li .desc strong, #goods li .desc b,#goods li .desc .price{display:block; font-size:15px;}
						#goods li .desc strong, #goods li .desc b{overflow:hidden; white-space:nowrap; text-overflow:ellipsis;}
						#goods li .desc b{font-weight:400; font-size:14px; padding:2px 0;}
						#goods li .desc .price{font-size:17px;}
					
					#goods li a:hover .desc{color:#9C1737;}/*호버 색상 바꾸기*/


						
		#goods:after{display:block; content:""; clear:both;}
					
			
			
			

  </style>
  <script>
	$(function(){
		/*################visual영역 슬라이드 기능 ##############*/
		$("#btn li:eq(0)").addClass("red");
		
		$("#btn li").click(function(){
			
			var btnIndex = $(this).index();
			//console.log(btnIndex);
			$("#btn li").removeClass("red");
			$("#btn li:eq("+btnIndex+")").addClass("red");

			width = $("#screen").width();

			for(var i=0; i<btnIndex+1; i++){
					if(btnIndex == i){
					$("#film").stop().animate({"marginLeft":"-"+width*btnIndex+"px"},500,"swing");
				}
			}		
		});
		var now = 1;
		$(".selectArea .title").click(function(){
			if(now == 1){
				$(this).next().slideUp(500);
				$(this).children('.minus').text("+");
				now=0;
			}
			else{
				$(this).next().slideDown(500);
				$(this).children('.minus').text("-");
				now=1;
			}

		});
		
		good = 0;
		$("#men").click(function(){
			if(good==0){
				$("#goods li").hide();
				$("#goods li.man").show();
				good = 1;
			}else{
				$("#goods li").show();
				good = 0;
			}
		});
	});


  </script>
 </head>
 <body>
	<div id="wrap">
<?php include "00_headerWrap.php"; ?>
		<div id="container">
			<div id="slideWrap">
				<div id="screen">
					<ul id="film">
						<li class="scene">
							<img src="img/main.jpg" alt="img3"/>
							<div class="visual">
								<div class="textArea">
									<h3>WE PLAY THE SAME GAME</h3>
									<p class="title">
										FC Barcelona’s style of play is what<br/>
										really matters.
									</p>
									<p class="desc">
										<a href="#none" title="kit">SHOP NIKE</a>
									</p>
								</div>
							</div>
						</li>					
					</ul>
				</div>
			</div>
			<div id="storeWrap">
				<aside id="selectWrap">
					<div id="selectArea">
						<p class="sponLogo">
							<a href="#none" title="나이키"><img src="img/spon0_on.png" alt="나이키 이미지"/></a>
						</p>
						<h3 class="title">SOCCER CLUBS FC BARCELONA</h3>
						<ul class="selectArea">
							<li class="section">
								<p>
									<a href="#none" title="Tops">Tops &amp; T-Shirts</a>
								</p>
								<p>
									<a href="#none" title="Tops">Hoodies &amp; Pullovers</a>
								</p>
								<p>
									<a href="#none" title="Tops">Accessories &amp; Equipment</a>
								</p>
								<h3>FILTERS</h3>
							</li>
							<li class="section1">
								<p class="title">
									<span>Gender</span>
									<span class="minus">-</span>
								</p>
								<div class="titleList">
									<p>
										<input id="men" type="checkbox" name="men"/><label for="men">Men</label>
									</p>
									<p>
										<input id="women" type="checkbox" name="women"/><label for="women">Women</label>
									</p>
									<p>
										<input id="boys" type="checkbox" name="boys"/><label for="boys">Boys</label>
									</p>
									<p>
										<input id="girl" type="checkbox" name="girl"/><label for="girl">Girls</label>
									</p>
								</div>
							</li>
							<li class="section1">
								<p class="title">
									<span>Brand</span>
									<span class="minus">-</span>
								</p>
								<div class="titleList">
									<p>
										<input id="nike" type="checkbox" name="nike"/><label for="nike">Nike</label>
									</p>
									<p>
										<input id="nikeSport" type="checkbox" name="nikeSport"/><label for="nikeSport">Nike Sport</label>
									</p>
								</div>
							</li>
							<li class="section1">
								<p class="title">
									<span>Sport</span>
									<span class="minus">-</span>
								</p>
								<div class="titleList">
									<p>
										<input id="soccer" type="checkbox" name="soccer"/><label for="soccer">Soccer</label>
									</p>
									<p>
										<input id="lifestyle" type="checkbox" name="lifestyle"/><label for="lifestyle">Life style</label>
									</p>
								</div>
							</li>
							<li class="section1">
								<p class="title">
									<span>Team</span>
									<span class="minus">-</span>
								</p>
								<div class="titleList">
									<p>
										<input id="fcb" type="checkbox" name="fcb"/><label for="fcb">FC Barcelona</label>
									</p>
									<p>
										<input id="forward" type="checkbox" name="forward"/><label for="forward">FOWARD</label>
									</p>
									<p>
										<input id="midfield" type="checkbox" name="midfield"/><label for="midfield">MIDFIELDER</label>
									</p>
									<p>
										<input id="goal" type="checkbox" name="goal"/><label for="goal">GOALKEEPER</label>
									</p>
								</div>
							</li>
						</ul>
					<div>
				</aside>
				<section id="shopWrap">
					<h2>shop 구매 영역</h2>
					<div id="titleWrap">
						<h3>FC BARCELONA <span class="sub">THE OFFICIAL ONLINE STORE</span></h3>
					</div>
					<div id="shopArea">
						<div class="title">
							<h3>BARCELONA SHOP</h3>
							<p class="sort">
								Sort by
							</p>
						</div>
						<ul id="goods">
							<li class="man">
								<a href="product0.php" title="상품0">
									<span class="img"><img src="img/shop0.jpg" alt="상품이미지0"/></span>
									<span class="desc">
										<strong>2017/18 FC Barcelona Stadium Home</strong>
										<b>Men's Soccer Jersey</b>
										<span class="price">90€</span>
									</span>
								</a>
							</li>
							<li class="man">
								<a href="product1.php" title="상품1">
									<span class="img"><img src="img/shop1.jpg" alt="상품이미지1"/></span>
									<span class="desc">
										<strong>FC Barcelona Dry Squad Drill</strong>
										<b>Men's Soccer Top</b>
										<span class="price">80€</span>
									</span>
								</a>
							</li>
							<li>
								<a href="product2.php" title="상품2">
									<span class="img"><img src="img/shop2.jpg" alt="상품이미지2"/></span>
									<span class="desc">
										<strong>FC Barcelona</strong>
										<b>Men's Full-Zip Hoodie</b>
										<span class="price">100€</span>
									</span>
								</a>
							</li>
							<li>
								<a href="#none" title="상품3">
									<span class="img"><img src="img/shop3.jpg" alt="상품이미지3"/></span>
									<span class="desc">
										<strong>FC Barcelona Crest</strong>
										<b>Men's T-shirt</b>
										<span class="price">30€</span>
									</span>
								</a>
							</li>
							<li>
								<a href="#none" title="상품4">
									<span class="img"><img src="img/shop4.jpg" alt="상품이미지4"/></span>
									<span class="desc">
										<strong>2017/18 FC Barcelona Vapor Match Home</strong>
										<b>Men's Soccer Jersey</b>
										<span class="price">165€</span>
									</span>
								</a>
							</li>
							<li>
								<a href="#none" title="상품5">
									<span class="img"><img src="img/shop5.jpg" alt="상품이미지5"/></span>
									<span class="desc">
										<strong>2017/18 FC Barcelona Stadium Away</strong>
										<b>Men's Soccer Jersey</b>
										<span class="price">90€</span>
									</span>
								</a>
							</li>
							<li>
								<a href="#none" title="상품6">
									<span class="img"><img src="img/shop6.jpg" alt="상품이미지6"/></span>
									<span class="desc">
										<strong>2017/18 FC Barcelona Stadium Home</strong>
										<b>Big Kids's Soccer Jersey</b>
										<span class="price">75€</span>
									</span>
								</a>
							</li>
							<li>
								<a href="#none" title="상품7">
									<span class="img"><img src="img/shop7.jpg" alt="상품이미지7"/></span>
									<span class="desc">
										<strong>FC Barcelona VaporKnit Strike Drill</strong>
										<b>Men's Soccer Top</b>
										<span class="price">145€</span>
									</span>
								</a>
							</li>
							<li>
								<a href="#none" title="상품8">
									<span class="img"><img src="img/shop8.jpg" alt="상품이미지8"/></span>
									<span class="desc">
										<strong>FC Barcelona Crest</strong>
										<b>Big Kids' (Boys') T-Shirt</b>
										<span class="price">25€</span>
									</span>
								</a>
							</li>
							<li>
								<a href="#none" title="상품9">
									<span class="img"><img src="img/shop9.jpg" alt="상품이미지9"/></span>
									<span class="desc">
										<strong>FC Barcelona Dri-FIT Squad</strong>
										<b>Big Kids' Long Sleeve Soccer Top</b>
										<span class="price">75€</span>
									</span>
								</a>
							</li>
							<li>
								<a href="#none" title="상품10">
									<span class="img"><img src="img/shop10.jpg" alt="상품이미지10"/></span>
									<span class="desc">
										<strong>FC Barcelona Dri-FIT Squad</strong>
										<b>Big Kids' (Boys') Short Sleeve Soccer Top</b>
										<span class="price">55€</span>
									</span>
								</a>
							</li>
							<li>
								<a href="#none" title="상품11">
									<span class="img"><img src="img/shop11.jpg" alt="상품이미지11"/></span>
									<span class="desc">
										<strong>FC Barcelona</strong>
										<b>Beanie</b>
										<span class="price">30€</span>
									</span>
								</a>
							</li>
							<li>
								<a href="#none" title="상품12">
									<span class="img"><img src="img/shop12.jpg" alt="상품이미지12"/></span>
									<span class="desc">
										<strong>FC Barcelona Racerback</strong>
										<b>Women's Tank</b>
										<span class="price">35€</span>
									</span>
								</a>
							</li>
						</ul>
					</div>
				</section>
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
