<!DOCTYPE html>
<html lang="ko">
 <head>
  <meta charset="utf-8"/>
  <title> ticketBuy </title>  
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

	input[type="button"],input[type="checkbox"]{cursor:pointer;}
	input[type="button"]{transition:all .3s linear .1s;}

	/*############### 폰트 영역################*/
	@font-face{font-family:"exo"; src:url("font/Exo2-Regular.woff");}
	@font-face{font-family:"saria"; src:url("font/Saira-Regular.woff");}
	@font-face{font-family:"pontano"; src:url("font/PontanoSans-Regular.woff");}
	@font-face{font-family:"oswald"; src:url("font/Oswald.woff2");}
	@font-face{font-family:"barcelona"; src:url("font/barcelonaFont.woff2");}
	@font-face{font-family:"glyphicons"; src:url("font/glyphicons-halflings-regular.woff");}

		/*############### container #################*/
		#container{width:100%; margin-top:125px;}


		/*############### paymentWrap  #################*/
		#paymentWrap{width:930px; margin:0 auto; overflow:hidden;}
			#paymentWrap:after{content:""; display:block; clear:both;}



		/*################### paymentArea ######################*/
		#paymentArea{width:600px; margin-right:30px; float:left;}
			#paymentArea fieldset{border:none;}
			#paymentArea legend{display:none;}
		
		/*################### seatArea ######################*/
		#seatArea{width:600px;}
			#seatArea .seatTitle{text-align:center; padding-top:20px; font-size:20px;}

			#seatSelect{width:100%; position:relative;}
				#seatSelect .wholeSeat{width:100%; position:relative;}
				
				#seatSelect .selectSeat li{position:absolute; cursor:pointer; opacity:0;}
				#seatSelect .selectSeat .topSeat{left:122px; top:23px; /*background-color:rgba(255,0,0,0.5);*/}
				#seatSelect .selectSeat .botSeat{left:135px; bottom:25px; /*background-color:rgba(0,255,0,0.5);*/}
				#seatSelect .selectSeat .leftSeat{left:12px; top:35px; /*background-color:rgba(0,0,255,0.5);*/}
				#seatSelect .selectSeat .rightSeat{right:1px; top:32px; /*background-color:rgba(255,255,0,0.5);*/}


				#detailSeat{width:100%; border:1px solid #ccc; padding:10px 0; border-radius:20px;}
					#detailSeat h3{text-align:center; margin:10px 0 10px;}
					#detailSeat ul{width:50%; overflow:hidden; margin:0 auto;}
						#detailSeat ul li{width:40px; height:40px; margin:10px; border-radius:50%; float:left; }
							#detailSeat input{width:38px; height:38px; border-radius:40%; display:block; border:1px solid #314f84; background-color:#fff; cursor:pointer; font-size:20px;}
							#detailSeat input:hover{background-color:#314f84; color:#fff;}

							#detailSeat .select{background-color:#314f84; color:#fff;}




		/*################### peopleArea ######################*/
		#peopleArea{width:600px;}
			#peopleArea .title{width:100%; padding-top:20px;}
				#peopleArea .title h3{text-indent:26px; color:#314f84; padding-top:15px; border-top:1px solid #999; cursor:pointer;}
					#peopleArea .title h3:before{font-family:"barcelona"; content:"\f145"; margin-right:10px;}

			/*################### peopleSelect ######################*/
			#peopleSelect{width:100%;}
				#peopleSelect .peopleSelect{width:550px; margin:0 auto;}
					.peopleSelect li{width:100%;}
						.peopleSelect label{display:block; width:510px; float:left; height:44px; line-height:44px; font-size:18px; font-weight:700;}
						.peopleSelect input{display:block; width:38px; height:42px; border:1px solid #ccc; text-align:center; font-size:18px; font-weight:700;}

		/*################### nextArea0 ######################*/
		#nextArea0{width:550px; margin:0 auto; padding-top:20px;}
			#nextArea0 .priceArea{float:left; width:350px; height:50px; font-size:22px; color:#333; font-weight:700; line-height:50px;}
			#nextArea0 .total{font-size:16px;}
				#nextArea0 .price{display:inline-block; text-align:right; width:80px; border:none; font-size:22px; color:#333; font-weight:700;}
				#nextArea0 .tax{font-weight:400; font-size:15px; padding-left:10px;}
			#nextArea0 #nextBtn{float:left; width:200px; height:50px; margin-bottom:30px; background-color:#D72D38; color:#fff; font-size:23px; border-radius:5px; border:1px solid #D72D38;}

		
		/*################### contactArea ######################*/
		#contactArea{width:100%;}
			#contactArea .title{width:100%; padding-top:20px;}
				#contactArea .title h3{text-indent:30px; color:#314f84; padding-top:15px; border-top:1px solid #999; cursor:pointer; position:relative;}
				#contactArea .title .prev{display:block; width:60px; height:20px; line-height:20px; cursor:pointer; position:absolute; right:29px; top:50%; color:#fff; background-color:#D72D38; border-radius:10px; text-indent:0; text-align:center; font-size:16px;}

			#contactInfo{width:100%;}
				#contactInfo .contactInfo{width:550px; margin:0 auto; padding-top:20px; overflow:hidden;}
					.contactInfo li{width:263px; height:48px; border-radius:5px; border:1px solid #ccc; margin:0 5px; float:left; position:relative; background-color:#fff;}
						.contactInfo li label{position:absolute; left:5px; top:2px; font-size:13px; color:#9b9b9b;}
						.contactInfo li input{position:absolute; left:10px; top:20px; width:250px; height:25px; border:none; outline:none;}
						.contactInfo li select{position:absolute; left:10px; top:20px; width:250px; height:25px; border:none;}
			#checkBoxArea{width:100%; font-size:15px;}
				#checkBoxArea p{padding-top:10px;}
					#checkBoxArea label{cursor:pointer;}
						#checkBoxArea label a{color:#D72D38;}

		/*################### creditArea ######################*/
		#creditArea{width:100;}
			#creditArea .title{width:570px; margin:0 auto; padding-top:20px;}
				#creditArea .title h3{text-indent:20px; color:#fff; height:35px; line-height:35px; background-color:#314f84;}
				#creditArea .title h3 .price{width:70px; height:35px; line-height:35px; font-size:22px; background-color:transparent; border:none; color:#fff; text-align:right;}
				
			#creditCard{width:570px; margin:20px auto 0; border:1px solid #e0e0e0;}
				#creditCard h3{height:40px; line-height:40px; text-indent:20px; background-color:#F6F6F6; margin-bottom:20px;}
				#creditCard p{overflow:hidden;}
					#creditCard label{display:inline-block; width:200px; height:30px; line-height:30px; text-indent:20px;}
					#creditCard input{display:inline-block; height:28px; border:1px solid #ccc;}
					#creditCard select{height:28px; border:1px solid #ccc;}
					#creditCard #cvcNum{margin-bottom:20px;}

	/*################### nextArea1 ######################*/
		#nextArea1{width:550px; height:50px; margin:20px auto;}			
			#nextArea1 .priceArea{float:left; width:350px; height:50px; font-size:22px; color:#333; font-weight:700; line-height:50px;}
			#nextArea1 .total{font-size:16px;}
				#nextArea1 .price{display:inline-block; text-align:right; width:80px; border:none; font-size:22px; color:#333; font-weight:700;}
				#nextArea1 .tax{font-weight:400; font-size:15px; padding-left:10px;}			

			#nextArea1 #nextBtn1{float:left; width:200px; height:50px; background-color:#D72D38; color:#fff; font-size:23px; border-radius:5px; border:1px solid #D72D38;}
					


	/*################### tipBoxArea ######################*/
		#tipBoxArea{width:300px; height:900px; float:right; position:relative;}			

			#priceDesc{width:100%; max-width:300px; background-color:#313948; color:#fff; margin-top:80px;}
			
			#tipBoxArea .fixed{position:fixed; margin-top:0;}
			#tipBoxArea .fixed1{position:absolute; margin-top:0; bottom:0;}

				#priceDesc h3{width:80%; height:50px; line-height:50px; padding:10px 0; font-size:18px;}
					#priceDesc h3:before{display:block; width:20%; text-align:center; font-family:"barcelona"; content:"\f145";font-size:32px; float:left; line-height:50px;}

				#priceDesc .descArea{width:96%; margin:0 auto; background-color:#DDDDDD; color:#313948; height:330px;}					
					#priceDesc .title{padding:10px 10px 0; overflow:hidden;}
						#priceDesc .title b{width:20%; display:block; float:left;}
						#priceDesc .title span{width:80%; display:block; float:left; text-align:right;}					
				
				#priceDesc .ticketNumArea b{display:block; padding:10px;}
				#priceDesc .ticket{padding:10px; height:30px; overflow:hidden;}
					#priceDesc .ticketNumArea .ticket span{display:block; text-align:center; float:left; height:40px; line-height:40px;}
					#priceDesc .ticketNumArea .ticket .number{display:block; text-align:center; width:10%; float:left; height:40px; line-height:40px; font-size:20px; border:none; background-color:transparent;}
					#priceDesc .ticketNumArea .ticket .price{width:20%; font-size:15px; color:#999;}
					#priceDesc .ticketNumArea .ticket .age{width:35%; font-weight:700;}
					#priceDesc .ticketNumArea .ticket .total{width:27%;display:block; text-align:center; float:left; height:40px; line-height:40px; font-size:20px; border:none; background-color:transparent;}
					#priceDesc .ticketNumArea .ticket .euro{width:3%; font-size:20px; font-weight:700;} 

				
				#priceDesc .purchaseTotal{padding:20px; overflow:hidden;}
					#priceDesc .purchaseTotal .totalPrice{display:block; width:50%; font-size:18px; font-weight:700; float:left;}
					#priceDesc .purchaseTotal .price{display:block; padding-top:10px; width:50%; float:left; text-align:right; font-weight:700; font-size:20px;}
					#priceDesc .price .total{width:90px; height:30px; font-size:25px; font-weight:700; text-align:right; border:none; background-color:transparent; color:#fff;}
						

  </style>
  <script>
	/*################### 아이디 생성 영역############################*/
	var idName = ["general","num","ticketPrice","ticketPrice1","ticketPrice2","total","totalPrice","cardNum","firstName"];

	for (var i=0; i<idName.length; i++)
	{idName[i];}

	/*####################### 금액 계산 영역 #############################*/	
	function number(){
		num.value = general.value;
		ticketPrice.value = general.value*25+".00";
		ticketPrice1.value = ticketPrice.value;
		ticketPrice2.value = ticketPrice1.value;
		total.value = ticketPrice2.value;
		totalPrice.value = total.value;
	}
	

	/*################ jQuery 영역 ##############*/
	$(document).ready(function(){

		/*############## detailSeat 숨기기 #############*/
		$("#detailSeat, #peopleArea").hide();
		$("#contactArea, #creditArea").hide();
			

		/*############## 경기장 영역 선택하면 선택한 영역 보이기 #############*/
		$(".selectSeat li").click(function(){
			$(".wholeSeat").css({"opacity":"0.5"});
			$(".selectSeat li").css({"opacity":"0"});
			$(this).css({"opacity":"1"});		
		});
		$(".selectSeat li:eq(0)").click(function(){
			$("#detailSeat").slideDown(500);
			$("#peopleArea, #nextArea0").show();
		});

		$(".selectSeat li:eq(0)").siblings().click(function(){
			$("#detailSeat").slideUp(500);
			$("#peopleArea, #nextArea0").hide();
			alert("Seats are not available");
		});

		
		/*############## 상세 좌석을 선택하면 버튼 배경색상 변화 #############*/
		$("#detailSeat ul li input").click(function(){
			$("#detailSeat ul li input").removeClass("select");
			$(this).addClass("select");
			general.focus();
		});
		
		
		$(".botSeat").click(function(){
			$("#tipBoxArea").css({"height":"1100px"});
		});
		/*############## #nextBtn을 클릭하면 focus:#cardNum #############*/
		$("#nextBtn").click(function(){

			if(general.value == 0){alert("Select your seat");}
			else if(general.value > 6){alert(" You can buy maximum is: 6 ");}
			else{
				$("#paymentArea").css({"marginTop":"-1050px"});
				$("#contactArea, #creditArea").show();
				firstName.focus();
				
				
				priceDesc.removeClass("fixed");
				priceDesc.removeClass("fixed1");
			}			
		});
		
		/*############## #prevBtn을 클릭하면 뒤로 돌아가기 #############*/
		$("#prevBtn").click(function(){
			$("#paymentArea").css({"marginTop":"0"});
			$("#contactArea, #creditArea").hide();
		});



		/*############## fixed 이용해서 priceDesc 영역 움직이기 #############*/

		priceDesc = $("#priceDesc");
		priceMT = parseInt(priceDesc.css("marginTop"));
		headerH = $("#headerWrap").height();

		priceDescH = priceMT+headerH;
		console.log(priceDescH);

		$(window).scroll(function(){
			var nowScroll = $(document).scrollTop();

			if(nowScroll >= priceDescH-120 && nowScroll < priceDescH+200){
				priceDesc.addClass("fixed");
				priceDesc.removeClass("fixed1");
			}
			else if(nowScroll >= priceDescH+200){
				priceDesc.removeClass("fixed");
				priceDesc.addClass("fixed1");
			}
			else{priceDesc.removeClass("fixed");}
		});
		



		
		
		
	});
  </script>
 </head>
 <body>
	<div id="wrap">
<?php include "00_headerWrap.php"; ?>
		<div id="container">			
			<section id="ticketBuyWrap">
				<h2>티켓 구매 영역</h2>
				<div id="paymentWrap">					
					<form id="paymentArea" action="complete.php" method="post">
						<div id="seatArea">
							<h2>좌석 선택 영역</h2>
							<div class="seatTitle">
								<h3>Select your seats</h3>
								<p>The maximum of seats that you can buy is: 6</p>
							</div>
							<div id="seatSelect">
								<div class="seatSelect">
									<div class="wholeSeat">
										<img src="img/stadium_full.jpg" alt="stadium_full 이미지"/>
									</div>
									<ul class="selectSeat">
										<li class="topSeat">
											<img src="img/camp_top.png" alt="leftSeat"/>
										</li>
										<li class="botSeat">
											<img src="img/camp_bot.png" alt="leftSeat"/>
										</li>
										<li class="leftSeat">
											<img src="img/camp_left.png" alt="leftSeat"/>
										</li>
										<li class="rightSeat">
											<img src="img/camp_right.png" alt="leftSeat"/>
										</li>
									</ul>
								</div>
							</div>
							<div id="detailSeat">
								<h3>Select Detail Seat</h3>
								<ul>
									<li><input id="seat1" type="button" name="seat1" value="1" title="seat1"/></li>
									<li><input id="seat2" type="button" name="seat2" value="2" title="seat2"/></li>
									<li><input id="seat3" type="button" name="seat3" value="3" title="seat3"/></li>
									<li><input id="seat4" type="button" name="seat4" value="4" title="seat4"/></li>
									<li><input id="seat5" type="button" name="seat5" value="5" title="seat5"/></li>
									<li><input id="seat6" type="button" name="seat6" value="6" title="seat6"/></li>
									<li><input id="seat7" type="button" name="seat7" value="7" title="seat7"/></li>
									<li><input id="seat8" type="button" name="seat8" value="8" title="seat8"/></li>
									<li><input id="seat9" type="button" name="seat9" value="9" title="seat9"/></li>			
									<li><input id="seat10" type="button" name="seat10" value="10" title="seat10"/></li>
									<li><input id="seat11" type="button" name="seat11" value="11" title="seat11"/></li>
									<li><input id="seat12" type="button" name="seat12" value="12" title="seat12"/></li>
									<li><input id="seat13" type="button" name="seat13" value="13" title="seat13"/></li>
									<li><input id="seat14" type="button" name="seat14" value="14" title="seat14"/></li>
									<li><input id="seat15" type="button" name="seat15" value="15" title="seat15"/></li>
								</ul>
							</div>
						</div>
						<fieldset id="peopleArea">
							<legend>인원 선택 영역</legend>	
							<div class="title">
								<h3>How many people will be coming?</h3>
							</div>
							<div id="peopleSelect">
								<ul class="peopleSelect">
									<li>
										<label for="general">General</label><input id="general" type="number" name="general" value="0" min="0" max="6" onclick="number();"/>
									</li>
								</ul>
							</div>
							<div id="nextArea0">
								<p class="priceArea">
									<span class="total">TOTAL TO PAY</span><input class="price" id="ticketPrice" type="text" name="ticketPrice" value="0.00" title="price" readonly/>€ 
									<span class="tax">(taxes included)</span>
								</p>
								<input id="nextBtn" type="button" name="nextBtn" value="NEXT"/>
							</div>
						</fieldset>
						<fieldset id="contactArea">
							<legend>개인정보 입력 영역</legend>
							<div class="title">
								<h3>Contact information<span id="prevBtn" class="prev">PREV</span></h3>
							</div>
							<div id="contactInfo">
								<ul class="contactInfo">
									<li>
										<label for="firstName">FIRST NAME</label>
										<input id="firstName" type="text" name="firstName" required/>
									</li>
									<li>
										<label for="surName">SURNAME(S)</label>
										<input id="surName" type="text" name="surName" required/>
									</li>
									<li>
										<label for="country">COUNTRY</label>
										<select id="country" name="country" required>
											<option value="" selected="selected"></option>
											<option value="eng">USA</option>
											<option value="kor" >South Korea</option>
											<option value="france" >France</option>
											<option value="italy" >Italy</option>
											<option value="spn">Spain</option>
										</select>
									</li>
									<li>
										<label for="postCode">POSTAL CODE</label>
										<input id="postCode" type="text" name="postCode" required/>
									</li>
								</ul>
							</div>
							<div class="title">
								<h3>Where do you want to receive your tickets?</h3>
							</div>
							<div id="contactInfo">
								<ul class="contactInfo">
									<li class="email">
										<label for="email">EMAIL</label>
										<input id="email" type="email" name="email" required/>
									</li>
									<li>
										<label for="prefix">PREFIX</label>
										<select id="prefix" name="country" required>
											<option value="" selected="selected"></option>
											<option value="eng">USA</option>
											<option value="kor" >South Korea</option>
											<option value="france" >France</option>
											<option value="italy" >Italy</option>
											<option value="spn">Spain</option>										
										</select>
									</li>
									<li>
										<label for="mobTel">MOBILE PHONE optional</label>
										<input id="mobTel" type="tel" name="mobTel" required/>
									</li>
								</ul>
							</div>
							<div id="checkBoxArea">
								<p>
									<input id="accept0" type="checkbox" name="accept0" required/>
									<label for="accept0">
										I accept <a href="#none" title="terms">Terms and Conditions</a> and confirm I have read the following <a href="#none" title="notice">Legal Notice</a>
									</label>
								</p>
								<p>
									<input id="accept1" type="checkbox" name="accept1" required/>
									<label for="accept1">
										I want to receive information and commercial communications from FC Barcelona. <a href="#none" title="info">(More info)</a>
									</label>
								<p>
							</div>
						</fieldset>
						<fieldset id="creditArea">
							<legend>카드 정보 입력 영역</legend>
							<div class="title">
								<h3>Total payment amount EUR <input id="ticketPrice2" class="price" type="text" name="ticketPrice2" readonly/> €</h3>
							</div>
							<div id="creditCard">
								<h3>Credit Card</h3>
								<p class="cardNumArea">
									<label for="cardNum">Card Number</label>
									<input id="cardNum" type="text" name="cardNum" required/>
								</p>
								<p class="holderArea">
									<label for="holderName">Card Holder Name</label>
									<input id="holderName" type="text" name="holderName" required/>
								</p>
								<p class="expiryArea">
									<label for="expiryMonth">Card Expiry Date</label>
									<select id="expiryMonth" name="expiryMonth" required>
										<option value="">&nbsp;</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
										<option value="10">10</option>
										<option value="11">11</option>
										<option value="12">12</option>
									</select>
									&nbsp; / &nbsp;
									<select id="expiryYear" name="expiryYear" title="expiryYear" required>
										<option value="">&nbsp;</option>
										<option value="2018">2018</option>
										<option value="2019">2019</option>
										<option value="2020">2020</option>
										<option value="2021">2021</option>
										<option value="2022">2022</option>
										<option value="2023">2023</option>
										<option value="2024">2024</option>
										<option value="2025">2025</option>
										<option value="2026">2026</option>
										<option value="2027">2027</option>
									</select>
								</p>
								<p class="cvcArea">
									<label for="cvcNum">CVC/CVV/CID</label>
									<input id="cvcNum" type="text" name="cvcNum" required/>
								</p>
							</div>
							<div id="nextArea1">
								<p class="priceArea">
									<span class="total">TOTAL TO PAY</span><input class="price" id="ticketPrice1" type="text" name="ticketPrice1" value="0.00" title="price" readonly/>€ 
									<span class="tax">(taxes included)</span>
								</p>
								<input id="nextBtn1" type="submit" name="nextBtn1" value="NEXT"/>
							</div>
						</fieldset>
					</form>
					<aside id="tipBoxArea">
						<div id="priceDesc">
							<h3>Camp Nou Match Ticket</h3>
							<div class="descArea">
								<p class="title dateArea">
									<b>Match</b><span class="team">FC Barcelona VS Real Madrid</span>
								</p>
								<p class="title dateArea">
									<b>Date</b><span class="date">Saturday 24 Aprill</span>
								</p>
								<p class="title timeArea">
									<b>Time</b><span class="time">17:30h</span>
								</p>
								<div class="ticketNumArea">
									<b>Tickets</b>
									<p class="ticket general">
										<input class="number" id="num" type="text" name="num" value="0" readonly/>
										<span class="price">25.00€</span>
										<span class="age">General</span>
										<input class="total" id="total" type="text" name="total" readonly value="00.00"/>
										<span class="euro">€</span>
									</p>
								</div>
							</div>
							<p class="purchaseTotal">
								<span class="totalPrice">PURCHASE<br/>TOTAL</span>								
								<span class="price">
									<input class="total" id="totalPrice" type="text" name="totalPrice" readonly value="00.00"/> €
								</span>
							</p>
						</div>
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
