<!DOCTYPE html>
<html lang="ko">
 <head>
  <meta charset="utf-8"/>
  <title> BARCELONA PHOTO </title>
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

		

		/*##################### container ##########################*/
		#container{width:100%;}
			

			/*##################### photoSection0 ##########################*/
			#photoSection0{width:100%; margin-top:125px;}
				#photoSection0 .photoTitle{width:100%; height:230px; background-color:#ebebeb; position:relative; overflow:hidden;}
					#photoSection0 .photoTitle h3{width:960px; margin:0 auto; font-size:50px; padding:40px 0 20px;}
					#photoSection0 .photoTitle .img{width:200px; position:absolute; right:350px; bottom:-30px; opacity:1;}
						#photoSection0 .photoTitle .img img{width:100%;}
				
				#photoGallery0{width:1280px; margin:-100px auto 0;}
				#photo0{width:100%;}
					#photo0 h4{font-size:20px; text-indent:15px; height:50px; line-height:50px; font-size:25px;}
					#photo0 .photoWrap{width:100%;}
						#photo0 .photoArea0{width:100%; overflow:hidden;}
							#photo0 .photoArea0 li{width:420px; height:420px; float:left; position:relative; margin-right:10px; overflow:hidden;}
							#photo0 .photoArea0 li:last-child{margin-right:0;}
								#photo0 .photoArea0 li a{display:block; width:100%;}
									#photo0 .photoArea0 li .img{display:block; position:relative; width:100%; height:100%;}
										#photo0 .photoArea0 li .img img{position:absolute; left:-50%; top:-10px; width:800px;}

									#photo0 .photoArea0 li .textArea{display:block; position:absolute; left:0; bottom:0; width:100%; height:50px; line-height:50px; background-color:rgba(0,0,0,0.5); color:#fff; text-indent:30px; font-size:20px;}

		/*############### photoArea #################*/
		#photoArea{width:1920px;}
			#photoArea .photoVideo{width:100%; overflow:hidden; margin-top:40px;}
				#photoArea .photoVideo li{width:320px; height:200px; float:left; margin:0;}
				#photoArea .photoVideo .photo1{width:640px; height:400px;}
				#photoArea .photoVideo .photo7{width:640px; height:400px; float:right;}
					#photoArea .photoVideo li a{display:block; width:100%; height:100%; position:relative;}
						#photoArea .photoVideo li .text{display:block; width:100%; text-indent:30px; height:64px; line-height:64px; position:absolute; left:0; bottom:0; background-color:rgba(0,0,0,0.5); color:#fff; font-weight:700; letter-spacing:1px; transition:all 0.3s;}
						#photoArea .photoVideo li:hover .text{background-color:rgba(0,0,0,0.8);}
						#photoArea .photoVideo li img{width:100%; height:100%;}
			#photoArea .photoVideo:after{content:""; display:block; clear:both;}
			
			#photoArea .btnArea{width:100%; height:50px; margin-bottom:40px;}
				#moreBtn{width:100%; height:100%; display:block; font-size:25px; font-weight:700; font-family:"saria"; color:#9C1737;}

	
				
		/*############### 모달팝업 #################*/	
		#view{width:720px; height:480px; border:5px solid #fff; position:absolute; left:50%; top:50%; margin-left:-360px; margin-top:300px; box-shadow:10px 10px 10px rgba(0,0,0,0.5); z-index:99;}
			#view p {width:100%; height:100%;}
				#view p img{width:100%; height:100%;}


		#full{width:100%; height:100%; background-color:rgba(0,0,0,0.9); position:fixed; left:0; top:0; z-index:98;}

  </style>
  <script>
	
	jQuery(document).ready(function(){
		/*####### 사진 영역 크기 늘이고 줄이기#######*/
		jQuery("#photoArea .photoVideo").css({"height":"600px"});

		var now = 0;
		jQuery("#moreBtn").click(function(){
			if(now == 0){
				jQuery(this).val("Read Less").css({"color":"#1d3b72"});
				jQuery("#photoArea .photoVideo").css({"height":"1200px"});
				now = 1;
			}
			else{
				jQuery(this).val("Read More").css({"color":"#9C1737"});
				jQuery("#photoArea .photoVideo").css({"height":"600px"});
				now = 0;
			}
		});


		/*####################### 모달 팝업 #####################*/
		jQuery("#full, #view").hide();

		jQuery(".photoArea0 li").click(function(){
			
			var num = jQuery(this).children('a').attr("href");
			//alert(num);
			
			jQuery("#view").html("<p><img src="+num+" alt='이미지1'/></p>");
			jQuery("#view").css({"marginTop":"-240px"});
			jQuery("#full, #view").show();

			return false
		});

		jQuery(".photoVideo li").click(function(){
			
			var num = jQuery(this).children('a').attr("href");
			//alert(num);

			jQuery("#view").html("<p><img src="+num+" alt='이미지1'/></p>");
			jQuery("#view").css({"marginTop":"300px"});
			jQuery("#full, #view").show();


			return false
		});

		
		jQuery("#full, #view").click(function(){
			jQuery("#full, #view").hide();
		});
		
	});
  </script>
 </head>
 <body>
	<div id="wrap">
<?php include "00_headerWrap.php"; ?>
		<div id="container">
			<section id="photoSection0">
				<h2>포토 갤러리 영역0</h2>
				<div class="photoTitle">
					<h3>Photo Gallery</h3>
					<p class="img">
						<img src="img/logo_high.png" alt="바로셀로나 로고"/>
					</p>
				</div>
				<div id="photoGallery0">
					<div id="photo0">
						<h4>photoS</h4>
						<div class="photoWrap">
							<ul class="photoArea0">
								<li>
									<a href="img/video0.png" title="사진0">
										<span class="img"><img src="img/video0.png" alt="사진 이미지0"/></span>
										<span class="textArea">Juventus 1 - FC Barcelona 3 (Champions League 2014-15)</span>
									</a>
								</li>
								<li>
									<a href="img/video1.jpg" title="사진1">
										<span class="img"><img src="img/video1.jpg" alt="사진 이미지1"/></span>
										<span class="textArea">Chelsea 1 - FC Barcelona 1 (1 minute)</span>
									</a>
								</li>
								<li>
									<a href="img/video2.jpg" title="사진2">
										<span class="img"><img src="img/video2.jpg" alt="사진 이미지2"/></span>
										<span class="textArea">Move of the week #8: Busquets trickery</span>
									</a>
								</li>							
							</ul>
						</div>
					</div>
				</div>
			</section>
			<section id="photoArea">
				<h2>포토 갤러리 영역1</h2>
				<ul class="photoVideo">
					<li class="photo1">
						<a href="img/photo0.jpg" title="사진0">
							<img src="img/photo0.jpg" alt="사진0"/>
							<span class="text">Chelsea FC 1-1 FC Barcelona</span>
						</a>
					</li>
					<li>
						<a href="img/photo1.jpg" title="사진1">
							<img src="img/photo1.jpg" alt="사진1"/>
							<span class="text">Training at Stamford Bridge</span>
						</a>
					</li>
					<li>
						<a href="img/photo2.jpg" title="사진2">
							<img src="img/photo2.jpg" alt="사진2"/>
							<span class="text">Arrival In London</span>
						</a>
					</li>
					<li>
						<a href="img/photo3.jpg" title="사진3">
							<img src="img/photo3.jpg" alt="사진3"/>
							<span class="text">The Champions return journey</span>
						</a>
					</li>
					<li>
						<a href="img/photo4.jpg" title="사진4">
							<img src="img/photo4.jpg" alt="사진4"/>
							<span class="text">Copa del Rey celebrations</span>
						</a>
					</li>
					<li>
						<a href="img/photo5.jpg" title="사진5">
							<img src="img/photo5.jpg" alt="사진5"/>
							<span class="text">Photos form training and the mixed zone</span>
						</a>
					</li>
					<li>
						<a href="img/photo6.jpg" title="사진6">
							<img src="img/photo6.jpg" alt="사진6"/>
							<span class="text">The best photos from first team training</span>
						</a>
					</li>
					<li class="photo7">
						<a href="img/photo7.jpg" title="사진7">
							<img src="img/photo7.jpg" alt="사진7"/>
							<span class="text">Last training session before Eibar</span>
						</a>
					</li>
					<li>
						<a href="img/photo8.jpg" title="사진8">
							<img src="img/photo8.jpg" alt="사진8"/>
							<span class="text">The trip to Eibar</span>
						</a>
					</li>
					<li>
						<a href="img/photo9.jpg" title="사진9">
							<img src="img/photo9.jpg" alt="사진9"/>
							<span class="text">Eibar - FC Barcelona (0-2)</span>
						</a>
					</li>
					<li>
						<a href="img/barTv.jpg" title="사진10">
							<img src="img/barTv.jpg" alt="사진10"/>
							<span class="text">Derby delight(2-0)</span>
						</a>
					</li>
					<li>
						<a href="img/n2.jpg" title="사진11">
							<img src="img/n2.jpg" alt="사진11"/>
							<span class="text">Training at Camp Nou</span>
						</a>
					</li>
					<li class="photo1">
						<a href="img/photo0.jpg" title="사진0">
							<img src="img/photo0.jpg" alt="사진0"/>
							<span class="text">Chelsea FC 1-1 FC Barcelona</span>
						</a>
					</li>
					<li>
						<a href="img/photo1.jpg" title="사진1">
							<img src="img/photo1.jpg" alt="사진1"/>
							<span class="text">Training at Stamford Bridge</span>
						</a>
					</li>
					<li>
						<a href="img/photo2.jpg" title="사진2">
							<img src="img/photo2.jpg" alt="사진2"/>
							<span class="text">Arrival In London</span>
						</a>
					</li>
					<li>
						<a href="img/photo3.jpg" title="사진3">
							<img src="img/photo3.jpg" alt="사진3"/>
							<span class="text">The Champions return journey</span>
						</a>
					</li>
					<li>
						<a href="img/photo4.jpg" title="사진4">
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
				<p class="btnArea"><input id="moreBtn" type="button" value="Read More" class="red"/></p>
			</section>
			<div id="full">
			</div>
			<div id="view">
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
