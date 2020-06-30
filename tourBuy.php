<!DOCTYPE html>
<html lang="ko">
 <head>
  <meta charset="utf-8"/>
  <title> tourBuy </title>  
  <script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
  <script type="text/javascript" src="js/subGnb.js"></script>
  <link rel="stylesheet" href="css/reset.css" type="text/css">
  <link rel="stylesheet" href="css/header.css" type="text/css">
  <link rel="stylesheet" href="css/footer.css" type="text/css">
  <link rel="shortcut icon" href="img/logo.png"/>
  <link rel="apple-touch-icon" href="img/logo.png"/>
  <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
  <style>
	
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
		#paymentWrap{width:930px; margin:0 auto;}
			#paymentWrap:after{content:""; display:block; clear:both;}

		/*################### paymentArea ######################*/
		#paymentArea{width:600px; margin-right:30px; float:left;}
			#paymentArea fieldset{border:none;}
			#paymentArea legend{display:none;}


		/*################### calenderArea ######################*/
		#calenderArea{width:100%;}
			#calenderArea .title{width:100%; padding:20px 0 10px;}
				#calenderArea h3{text-indent:30px; color:#314f84; cursor:pointer;}
				#calenderArea h3:before{font-family:"barcelona"; content:"\f073"; margin-right:10px;}

		/*################### calender ######################*/
		#calender{width:548px; border:1px solid #314f84; margin:0 auto; border-radius:10px;}
			#calender .month4{width:100%; padding:10px 0;}
				#calender .month4 .month{text-align:center; width:200px; font-size:20px; margin:0 auto; border:3px solid #314f84; border-radius:50px; font-weight:700;}
			
			#calender .calender{width:530px; padding:0 10px; overflow:hidden;}
				#calender li{width:75px; height:50px; line-height:40px; float:left; text-align:center; font-weight:700;}
					#calender li input{display:block; width:34px; height:34px; border:1px solid #314f84; border-radius:16px; background-color:#fff; margin:7px auto; font-size:18px; font-weight:700; color:#314f84;}
					#calender li input.checked{color:#fff; background-color:#314f84;}
					#calender li input:hover{color:#fff; background-color:#314f84;}

		/*################### timeArea ######################*/
		#timeArea{width:600px;}
			#timeArea .title{width:100%; padding-top:20px;}
				#timeArea .title h3{text-indent:30px; color:#314f84; padding-top:15px; border-top:1px solid #999; cursor:pointer;}
				#timeArea .title h3:before{font-family:"barcelona"; content:"\f017"; margin-right:10px;}
			/*################### timeSelect ######################*/
			#timeSelect{width:100%;}
				#timeSelect .timeSelect{width:550px; margin:0 auto; overflow:hidden;}
					#timeSelect li{width:100px; height:40px; margin:10px 5px; float:left;}
						#timeSelect input{display:block; width:100%; height:40px; border-radius:10px; border:1px solid #314f84; background-color:#fff; color:#314fb4; font-size:18px; font-weight:700;}
						
						#timeSelect input.checked{color:#fff; background-color:#314f84;}
						#timeSelect input:hover{color:#fff; background-color:#314f84;}

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

		/*################### nextArea1 ######################*/
		#nextArea1{width:550px; height:50px; margin:20px auto;}			
			#nextArea1 .priceArea{float:left; width:350px; height:50px; font-size:22px; color:#333; font-weight:700; line-height:50px;}
			#nextArea1 .total{font-size:16px;}
				#nextArea1 .price{display:inline-block; text-align:right; width:80px; border:none; font-size:22px; color:#333; font-weight:700;}
				#nextArea1 .tax{font-weight:400; font-size:15px; padding-left:10px;}			

			#nextArea1 #nextBtn1{float:left; width:200px; height:50px; background-color:#D72D38; color:#fff; font-size:23px; border-radius:5px; border:1px solid #D72D38;}

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

	
		/*################### tipBoxArea ######################*/
		#tipBoxArea{width:300px; height:1100px; float:right; position:relative;}			

			#priceDesc{width:100%; max-width:300px; background-color:#313948; color:#fff; margin-top:80px;}
			
			#tipBoxArea .fixed{position:fixed; margin-top:0;}
			#tipBoxArea .fixed1{position:absolute; margin-top:0; bottom:0;}

				#priceDesc h3{width:90%; height:50px; line-height:50px; padding:10px 0; font-size:18px;}
					#priceDesc h3:before{display:block; width:20%; text-align:center; font-family:"barcelona"; content:"\f145";font-size:32px; float:left; line-height:50px;}

				#priceDesc .descArea{width:96%; margin:0 auto; background-color:#DDDDDD; color:#313948; height:330px;}					
					#priceDesc .title{padding:10px 10px 0; overflow:hidden;}
						#priceDesc .title b{width:20%; display:block; float:left;}
						#priceDesc .title input{width:80%; display:block; float:left; text-align:right; border:none; height:20px; font-size:18px; background-color:transparent;}					
				
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
	var idName = ["general70","general","generalTotal","older","older70","olderTotal","youth","youth6","youthTotal","children","children6","childrenTotal","num","ticketPrice","ticketPrice1","ticketPrice2","totalPrice","cardNum","firstName","visitDate","visitTime"];

	for (var i=0; i<idName.length; i++)
	{idName[i];}

	function genNum(){
		general.value = general70.value;
		generalTotal.value = general70.value*25+".00";
		ticketPrice.value = general70.value*25+older70.value*20+youth6.value*20+".00";
		totalPrice.value = general70.value*25+older70.value*20+youth6.value*20+".00";
		ticketPrice1.value = general70.value*25+older70.value*20+youth6.value*20+".00";
		ticketPrice2.value = general70.value*25+older70.value*20+youth6.value*20+".00";
	}
	function olderNum(){
		older.value = older70.value;
		olderTotal.value = older70.value*20+".00";
		ticketPrice.value = general70.value*25+older70.value*20+youth6.value*20+".00";
		totalPrice.value = general70.value*25+older70.value*20+youth6.value*20+".00";
		ticketPrice1.value = general70.value*25+older70.value*20+youth6.value*20+".00";
		ticketPrice2.value = general70.value*25+older70.value*20+youth6.value*20+".00";
	}
	function youthNum(){
		youth.value = youth6.value;
		youthTotal.value = youth6.value*20+".00";
		ticketPrice.value = general70.value*25+older70.value*20+youth6.value*20+".00";
		totalPrice.value = general70.value*25+older70.value*20+youth6.value*20+".00";
		ticketPrice1.value = general70.value*25+older70.value*20+youth6.value*20+".00";
		ticketPrice2.value = general70.value*25+older70.value*20+youth6.value*20+".00";
	}
	function childrenNum(){
		children.value = children6.value;
		childrenTotal.value = children6.value*00+".00";
		ticketPrice.value = general70.value*25+older70.value*20+youth6.value*20+".00";
		totalPrice.value = general70.value*25+older70.value*20+youth6.value*20+".00";
		ticketPrice1.value = general70.value*25+older70.value*20+youth6.value*20+".00";
		ticketPrice2.value = general70.value*25+older70.value*20+youth6.value*20+".00";
	}

	$(function(){
		/*#############숨길 영역 ###########*/
		$("#contactArea, #creditArea, .timeSelect, #peopleSelect").hide();

		/*############# 날짜 체크영역 ###########*/
		$("#calender li input").click(function(){
			$(".timeSelect").slideDown(700);
			$("#calender li input").removeClass("checked");
			$(this).addClass("checked");
			ddd = this
			/* ################# 고장 및 질문 ############## */
			visitDate.value = this.value+" April 2018";			
			console.log(ddd);
			
			
		});

		/*############# 시간 체크영역 ###########*/
		$("#timeSelect input").click(function(){
			$("#peopleSelect").slideDown(700);
			$("#timeSelect input").removeClass("checked");			
			$(this).addClass("checked");
			visitTime.value = this.value+"h";


			general.focus();
		});

		/*############## #nextBtn을 클릭하면 focus:#cardNum #############*/
		$("#nextBtn").click(function(){

			if(general.value+older.value+youth.value+children.value == 0){alert("Select your seat.");}
			else if(general.value+older.value+youth.value == 0){alert("Children should not be alone.");}
			else if(general.value > 6 || older.value > 6 || youth.value > 6 || children.value > 6 ){alert(" You can buy maximum is: 6 ");}
			else{
				$("#paymentArea").css({"marginTop":"-1100px"});
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

			if(nowScroll >= priceDescH-120 && nowScroll < priceDescH+400){
				priceDesc.addClass("fixed");
				priceDesc.removeClass("fixed1");
			}
			else if(nowScroll >= priceDescH+400){
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
						<fieldset id="calenderArea">
							<legend>날짜 선택 영역</legend>
							<div class="title">
								<h3>What day do you want to come?</h3>
							</div>
							<div id="calender">
								<div class="month4">
									<p class="month">April 2018</p>
								</div>
								<ul class="calender">
									<li>MON</li><li>TUE</li><li>WED</li><li>THU</li><li>FRI</li><li>SAT</li><li>SUN</li>
									<li></li><li></li><li></li><li></li><li></li><li></li>
									<li><input id="day1" type="button" name="01" value="01" title="버튼"/></li>
									<li><input id="day2" type="button" name="02" value="02" title="버튼"/></li>
									<li><input id="day3" type="button" name="03" value="03" title="버튼"/></li>
									<li><input id="day4" type="button" name="04" value="04" title="버튼"/></li>
									<li><input id="day5" type="button" name="05" value="05" title="버튼"/></li>
									<li><input id="day6" type="button" name="06" value="06" title="버튼"/></li>
									<li><input id="day7" type="button" name="07" value="07" title="버튼"/></li>
									<li><input id="day8" type="button" name="08" value="08" title="버튼"/></li>
									<li><input id="day9" type="button" name="01" value="09" title="버튼"/></li>
									<li><input id="day10" type="button" name="10" value="10" title="버튼"/></li>
									<li><input id="day11" type="button" name="11" value="11" title="버튼"/></li>
									<li><input id="day12" type="button" name="12" value="12" title="버튼"/></li>
									<li><input id="day13" type="button" name="13" value="13" title="버튼"/></li>
									<li><input id="day14" type="button" name="14" value="14" title="버튼"/></li>
									<li><input id="day15" type="button" name="15" value="15" title="버튼"/></li>
									<li><input id="day16" type="button" name="16" value="16" title="버튼"/></li>
									<li><input id="day17" type="button" name="17" value="17" title="버튼"/></li>
									<li><input id="day18" type="button" name="18" value="18" title="버튼"/></li>
									<li><input id="day19" type="button" name="19" value="19" title="버튼"/></li>
									<li><input id="day20" type="button" name="20" value="20" title="버튼"/></li>
									<li><input id="day21" type="button" name="21" value="21" title="버튼"/></li>
									<li><input id="day22" type="button" name="22" value="22" title="버튼"/></li>
									<li><input id="day23" type="button" name="23" value="23" title="버튼"/></li>
									<li><input id="day24" type="button" name="24" value="24" title="버튼"/></li>
									<li><input id="day25" type="button" name="25" value="25" title="버튼"/></li>
									<li><input id="day26" type="button" name="26" value="26" title="버튼"/></li>
									<li><input id="day27" type="button" name="27" value="27" title="버튼"/></li>
									<li><input id="day28" type="button" name="28" value="28" title="버튼"/></li>
									<li><input id="day29" type="button" name="29" value="29" title="버튼"/></li>
									<li><input id="day30" type="button" name="30" value="30" title="버튼"/></li>
									<li></li><li></li><li></li><li></li><li></li>
								</ul>
							</div>
						</fieldset>
						<fieldset id="timeArea">
							<legend>시간 선택 영역</legend>
							<div class="title">
								<h3>What time?</h3>
							</div>
							<div id="timeSelect">
								<ul class="timeSelect">
									<li><input id="time1000" type="button" name="time1000" value="10:00" title="10:00"/></li>
									<li><input id="time1030" type="button" name="time1030" value="10:30" title="10:30"/></li>
									<li><input id="time1100" type="button" name="time1100" value="11:00" title="11:00"/></li>
									<li><input id="time1130" type="button" name="time1130" value="11:30" title="11:30"/></li>
									<li><input id="time1200" type="button" name="time1200" value="12:00" title="12:00"/></li>
									<li><input id="time1230" type="button" name="time1230" value="12:30" title="12:30"/></li>
									<li><input id="time1300" type="button" name="time1300" value="13:00" title="13:00"/></li>
									<li><input id="time1330" type="button" name="time1330" value="13:30" title="13:30"/></li>
									<li><input id="time1400" type="button" name="time1400" value="14:00" title="14:00"/></li>
									<li><input id="time1430" type="button" name="time1430" value="14:30" title="14:30"/></li>
									<li><input id="time1500" type="button" name="time1500" value="15:00" title="15:00"/></li>
									<li><input id="time1530" type="button" name="time1530" value="15:30" title="15:30"/></li>
									<li><input id="time1600" type="button" name="time1600" value="16:00" title="16:00"/></li>
									<li><input id="time1630" type="button" name="time1630" value="16:30" title="16:30"/></li>
									<li><input id="time1700" type="button" name="time1700" value="17:00" title="17:00"/></li>
									<li><input id="time1730" type="button" name="time1730" value="17:30" title="17:30"/></li>
									<li><input id="time1800" type="button" name="time1800" value="18:00" title="18:00"/></li>
								</ul>
							</div>
						</fieldset>
						<fieldset id="peopleArea">
							<legend>인원 선택 영역</legend>	
							<div class="title">
								<h3>How many people will be coming?</h3>
							</div>
							<div id="peopleSelect">
								<ul class="peopleSelect">
									<li>
										<label for="general70">General</label><input id="general70" type="number" name="general" value="0" min="0" max="6" onclick="genNum();"/>
									</li>
									<li>
										<label for="older70">Older than 70</label><input id="older70" type="number" name="older70" value="0" min="0" max="6" onclick="olderNum();"/>
									</li>
									<li>
										<label for="youth6">Youth (from 6 to 13)</label><input id="youth6" type="number" name="youth6" value="0" min="0" max="6" onclick="youthNum();"/>
									</li>
									<li>
										<label for="children6">Children less than 6 (Free)</label><input id="children6" type="number" name="children6" value="0" min="0" max="6" onclick="childrenNum();"/>
									</li>
								</ul>
								<div id="nextArea0">
									<p class="priceArea">
										<span class="total">TOTAL TO PAY</span><input class="price" id="ticketPrice" type="text" name="ticketPrice" value="0.00" title="price" readonly/>€ 
										<span class="tax">(taxes included)</span>
									</p>
									<input id="nextBtn" type="button" name="nextBtn" value="NEXT" required/>
								</div>
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
							<h3>Camp Nou Experience Tour</h3>
							<div class="descArea">
								<p class="title dateArea">
									<b>Date</b><input class="date" id="visitDate" type="text" value="" readonly/>
								</p>
								<p class="title timeArea">
									<b>Time</b><input class="time" id="visitTime" type="text" value="" readonly/>
								</p>
								<div class="ticketNumArea">
									<b>Tickets</b>
									<p class="ticket general">
										<input class="number" id="general" type="text" name="num" value="0" readonly/>
										<span class="price">25.00€</span>
										<span class="age">General</span>
										<input class="total" id="generalTotal" type="text" name="total" readonly value="00.00"/>
										<span class="euro">€</span>
									</p>
									<p class="ticket older">
										<input class="number" id="older" type="text" name="older" value="0" readonly/>
										<span class="price">20.00€</span>
										<span class="age">Older</span>
										<input class="total" id="olderTotal" type="text" name="olderTotal" readonly value="00.00"/>
										<span class="euro">€</span>
									</p>
									<p class="ticket youth">
										<input class="number" id="youth" type="text" name="youth" value="0" readonly/>
										<span class="price">20.00€</span>
										<span class="age">Youth</span>
										<input class="total" id="youthTotal" type="text" name="youthTotal" readonly value="00.00"/>
										<span class="euro">€</span>
									</p>
									<p class="ticket children">
										<input class="number" id="children" type="text" name="children" value="0" readonly/>
										<span class="price">Free</span>
										<span class="age">Children</span>
										<input class="total" id="childrenTotal" type="text" name="childrenTotal" readonly value="00.00"/>
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
