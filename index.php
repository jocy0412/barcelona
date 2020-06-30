<?php
	include "00_conn.php";
	session_cache_expire(30);
	session_start();
?>
<!DOCTYPE html>
<html lang="ko">
 <head>
  <meta charset="utf-8"/>
  <title> BARCELONA </title>
  <script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
  <script type="text/javascript" src="js/subGnb.js"></script>
  <link rel="stylesheet" href="css/reset.css" type="text/css">
  <link rel="stylesheet" href="css/header.css" type="text/css">
  <link rel="stylesheet" href="css/footer.css" type="text/css">
  <link rel="shortcut icon" href="img/logo.png"/>
  <link rel="apple-touch-icon" href="img/logo.png"/>
  <!--[if lt IE 8]> 
	<link rel="stylesheet" href="css/ie8.css" type="text/css">
  <![endif]-->
  <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"/>  
  <style>

	/*############### 폰트 영역################*/
	@font-face{font-family:"exo"; src:url("font/Exo2-Regular.woff");}
	@font-face{font-family:"saria"; src:url("font/Saira-Regular.woff");}
	@font-face{font-family:"pontano"; src:url("font/PontanoSans-Regular.woff");}

		/*############# container ###############*/
		#container{width:100%;}
			

		/*############# container + visual ###############*/
		#visualWrap{width:100%; height:100%; max-height:966px;}
			
				
		/*############# slideWrap ###############*/
		#slideWrap{width:100%;}
			#screen{width:100%; position:relative; overflow:hidden;}
			#film{width:400%;}
				.scene{float:left; width:25%; position:relative;}
				.scene img{ width:100%; }

				.scene .visual{position:absolute; left:0; top:0; width:100%; margin:0 auto; overflow:hidden;}

				.scene .visual .textArea{max-width:1920px; width:80%; margin:14% auto 0; overflow:hidden; background-color:rgba(0,0,0,0); font-family:"saria"; text-align:center;}
					.scene .visual .textArea h3{font-size:80px; color:#efefef;}
					.scene .visual .textArea .title{font-size:40px; color:#fff; padding:7% 0 2%;}
					.scene .visual .textArea .desc{width:90%; font-size:23px; color:#fff; margin:5% auto 0; line-height:30px;}


			#film:after{content:""; display:block; clear:both;}

		#btn{position:absolute; left:50%; bottom:40px; margin-left:-50px; width:100px; height:20px;}
			#btn li{background-color:#fff; position:absolute; width:20px; height:20px; border-radius:10px; cursor:pointer;}
			#btn .btn1{left:0px;}
			#btn .btn2{left:40px;}
			#btn .btn3{left:80px;}

		#btn .red{background-color:#CC1737;}

		#btn1 li{width:59px; height:104px; margin-top:-52px; cursor:pointer; position:absolute;}
		#btn1 li img{width:100%; height:100%;}
		#btn1 .left{left:4%; top:50%;}
		#btn1 .right{right:4%; top:50%;}




		/*############# container + conten0 ###############*/
		#content0{width:100%; overflow:hidden; background-color:#efefef; padding:80px 0 100px;}
			#content0 h3{width:1280px; font-size:40px; margin:0 auto; text-indent:10px; font-family:"saria";}
				#content0 h3 a{color:#1d3b72;}


		/*############# container + conten0 + fcbInfo ###############*/
		#fcbInfo{width:1280px; overflow:hidden; margin:0 auto; padding-bottom:10px;}
			#fcbInfo li{float:left; width:300px; height:255px; margin-left:10px; margin-top:10px; overflow:hidden;}
				#fcbInfo li a{display:block; width:100%; height:100%; position:relative; color:#fff;}
					#fcbInfo li a img{height:100%; transition:all .3s ease-in .2s; margin-left:-40px;}
					#fcbInfo li a .text{position:absolute; left:0; bottom:0; display:block; width:100%; padding:0 10px; height:18%; background-color:rgba(0,0,0,0.5); transition:all .3s ease-in .2s;}
					
					#fcbInfo li:hover a .text{height:100%;}
				#fcbInfo li:hover a{text-decoration:none;}
				#fcbInfo li:hover a img{transform:scale(1.1);}
			
			#fcbInfo .fcbTv{width:640px; height:520px;}
					#fcbInfo .fcbTv a .img{display:block; width:100%; height:350px; overflow:hidden;}
						#fcbInfo .fcbTv a .img img{width:100%; height:100%; margin:0;}
					#fcbInfo .fcbTv a .textMain{display:block; width:620px; padding:10px 10px 0; height:170px; background-color:#222733; font-size:18px; color:#eee;}
						#fcbInfo .fcbTv a .textMain .title{display:block; font-size:20px;}
						#fcbInfo .fcbTv a .textMain strong{font-size:25px; display:block; padding:10px 0; color:#eee;}			
		


		/*############# container + content1 ###############*/
		#content1{width:100%; padding:50px 0 30px; background-color:#0F2A56;}
			#content1 h3{width:100%; height:60px; line-height:60px; text-align:center; font-size:40px; color:#fff; font-family:"saria";}
				#content1 h3 a{color:#fff;}
			#content1 h3:before{content:"──────────  "; color:#777;}
			#content1 h3:after{content:"  ──────────"; color:#777;}

		/*############# container + content1 + player ###############*/
		#playerArea{width:100%; position:relative;}
			#screen1{width:1080px; margin:0 auto; overflow:hidden;}

			#playerWrap{width:6480px;}
			#playerWrap:after{content:""; display:block; clear:both;}
				#playerWrap .scene1{width:1080px; float:left;}
					.player{width:1080px; height:360px; padding:40px 0;  overflow:hidden; margin:0 auto;}
						.player li{width:250px; height:360px; margin:0 10px; float:left;}
							.player li a {display:block; width:100%; height:360px;}
								
								.player li a .img{display:block; float:left; width:100%; height:281px;}
									.player li a .img img{width:100%;}
								
								.player li a .number{display:block; float:left; width:70px; height:79px; text-align:center; line-height:79px; font-size:30px; font-weight:700; color:#fff;  background-color:#72142E; transition:background-color 0.5s;}
								.player li a .playerInfo{display:block; float:left; width:150px; height:54px; padding:15px 0 10px 30px; font-size:20px; background-color:#9C1737; color:#fff; transition:background-color 0.5s;}
									.player li a span.position{font-size:14px;}
							
				.player li:hover a span.number{background-color:#1b3058;}
				.player li:hover a span.playerInfo{background-color:#1d3b72;}

		
			#playerBtn p{position:absolute; width:70px; height:70px; top:50%; margin-top:-35px; cursor:pointer;}
			#playerBtn p img{width:100%; height:100%;}
				#playerBtn .prevBtn{left:10%;}
				#playerBtn .nextBtn{right:10%;}

		
		/*############# container + content2 ###############*/
		#content2{width:100%; padding:60px 0 80px; overflow:hidden; background-color:#eee;}
			#content2 h3.matchUp{width:1226px; height:45px; line-height:45px; padding-bottom:15px; text-align:center; font-size:40px; margin:0 auto; font-family:"saria";}
				#content2 h3 a{color:#0f2a56;}
			#league{width:1246px; overflow:hidden; margin:0 auto;}

		/*############# container + content2 + shopAd ###############*/
		#shopAd{width:300px; height:364px; float:left; margin-right:20px;}
			#shopAd a img{width:100%; height:100%;}

		
		/*############# container + content2 + match ###############*/
		#match{float:left; width:602px; height:364px; margin-right:20px;}
			#match li{float:left; border:1px solid transparent; background-color:rgba(200,200,200,0.7);}			
			#match .matchUp{width:600px; height:220px; margin-bottom:10px;} 
				#match .matchUp h4{text-align:center; width:100%; height:30px; line-height:30px; color:#9C1737; font-size:21px; padding-top:10px; font-family:"saria";}
				#match .matchUp .date{text-align:center; width:100%; height:30px; line-height:30px; font-weight:700;}
				#match .matchUp .team{width:360px; height:90px; margin:0 auto;}
					#match .matchUp .home{float:left; padding-right:40px; width:90px; height:90px;}
						#match .matchUp .home img{width:100%; height:100%;}				
					#match .matchUp .versus{float:left;width:100px; height:90px; line-height:90px; font-size:40px; text-align:center;}
					#match .matchUp .away{float:left; padding-left:40px; width:90px; height:90px; text-align:left;}
						#match .matchUp .away img{width:100%; height:100%;}
				#match .matchUp .btn{margin:0 auto; width:100%; padding-top:5px; height:35px; text-align:center; clear:both;}
					#match .matchUp .btn button{width:120px; height:35px; border:none;}
						#match .matchUp .btn button a{display:block; width:100%; height:100%; line-height:35px; cursor:pointer; background-color:#AE0917; color:#fff; transition:all .3s linear .1s; }
					#match .matchUp .btn button a:hover{background-color:#0255A5;}
			
			#match .result0{width:294px; height:130px; margin-right:10px;}
				#match .result0 h4{text-align:center; padding-top:10px; width:100%; height:20px; color:#9C1737; font-size:14px;  font-family:"saria";}
				#match .result0 .date{text-align:center; width:100%; height:25px; line-height:23px; font-weight:700; font-size:13px;}

				#match .result0 .team{width:194px; height:50px; margin:0 auto;}
					#match .result0 .home{float:left; width:50px; height:50px; text-align:right;}
						#match .result0 .home img{width:100%; height:100%;}
					#match .result0 .versus{float:left;width:94px; height:50px; line-height:50px; font-size:25px; text-align:center;}
					#match .result0 .away{float:left; width:50px; height:50px; text-align:left;}
						#match .result0 .away img{width:100%; height:100%;}

			#match .result1{width:294px; height:130px;}
				#match .result1 h4{text-align:center; padding-top:10px; width:100%; height:20px; color:#9C1737; font-size:14px;  font-family:"saria";}
				#match .result1 .date{text-align:center; width:100%; height:25px; line-height:23px; font-weight:700; font-size:13px;}
				#match .result1 .team{width:194px; height:50px; margin:0 auto;}
					#match .result1 .home{float:left; width:50px; height:50px; text-align:right;}
						#match .result1 .home img{width:100%; height:100%;}
					#match .result1 .versus{float:left;width:94px; height:50px; line-height:50px; font-size:25px; text-align:center;}
					#match .result1 .away{float:left; width:50px; height:50px; text-align:left;}
						#match .result1 .away img{width:100%; height:100%;}
		

		/*############# container + content2 + stand ###############*/	
		#stand{float:left; width:300px; height:360px; border:2px solid transparent; font-weight:700;}
			#stand li{width:300px; height:40px; background-color:#fff;}
			#stand .orange{background-color:#AE0917; color:#fff;}
			#stand .gray{background-color:#ccc;}

				#stand h3{width:100%; height:100%; line-height:40px; text-indent:10px; font-size:15px; background-color:rgba(15,42,86,0.7); color:#fff; font-family:"saria"; text-align:center;}
				
				#stand li p{float:left; height:40px; line-height:40px; text-align:center;}
				#stand li .rank{width:50px;}
				#stand li .teamLogo{width:50px;}
					#stand li .teamLogo img{height:40px;}
				#stand li .teamName{width:120px;}
					
				#stand li .score{width:80px;}		


		/*############# container + content3 ###############*/
		#content3{width:100%; padding:60px 0 70px; background-color:#fff;}
			#content3 h3{width:1270px; height:40px; line-height:40px; margin:0 auto; text-indent:10px; color:#0f2a56; font-size:40px; font-family:"saria";}
			#offset0{width:1px; height:1px; font-size:1px; background-color:rgba(0,0,100,0.5); position:absolute; left:0; top:0; text-align:center; transition:all 0.7s ease 0.3s; z-index:1;}

		/*############# container + content3 + photoVideo ###############*/
			#photoVideo{width:1270px; height:595px; margin:0 auto;}
				#photoVideo li{width:305px; height:185px; float:left; margin-left:10px; margin-top:10px; overflow:hidden;}
					#photoVideo li a{width:100%; height:100%;}
						#photoVideo li a img{width:100%; height:100%; transition:all .3s ease-in .2s;}
						#photoVideo li:hover a img{transform:scale(1.1);}
				#photoVideo li.mainPhoto{width:620px; height:380px;}
						#photoVideo li.mainPhoto a img{width:100%; height:100%;}



		/*############# content4 + adArea ###############*/
		#content4{width:100%;}

			#adArea{width:100%; height:600px; background-image:url("img/appAd.jpg"); background-repeat:no-repeat; background-attachment:fixed; position:relative; overflow:hidden;}
				#adArea .img{width:199px; height:399px; position:absolute; top:100px; right:1200px; opacity:0; transition:all .7s ease-in .2s;}
				#adArea .text1{width:600px; height:130px; position:absolute; top:130px; right:-500px; opacity:0; transition:all .7s ease-in .4s;}
						#adArea .text1 strong{display:block; padding:10px 0; font-size:30px; color:#CD3322; font-family:"saria";}
						#adArea .text1 span{display:block; font-size:20px; color:#fff;}
				#adArea .text2{width:600px; height:220px; position:absolute; top:270px; right:-500px; opacity:0; transition:all .8s ease-in .4s; font-size:17px; color:#fff;}
					#adArea .appImg{width:100%; padding-top:20px;}

				#adArea:hover .img{top:100px; right:800px; opacity:1;}
				#adArea:hover .text1{top:130px; right:170px; opacity:1;}
				#adArea:hover .text2{top:270px; right:170px; opacity:1;}
			
		/*############# campaign ###############*/
		#campaign{width:100%; background-color:#ccc; padding:100px 0;}
			#campaign h3{width:1120px; height:80px; color:#0f2a56; margin:0 auto; font-size:40px;  font-family:"saria";}
			#campaign ul{width:1120px; overflow:hidden; margin:0 auto;}
				#campaign ul li{float:left;}
				#campaign ul .video{width:700px; margin-right:20px;}
					#campaign ul .video video{width:100%;}

				#campaign ul .img{width:400px; height:250px;}
					#campaign ul .img img{width:100%; height:100%;}

				#campaign ul .text{width:380px; height:120px; padding:5px 10px 10px 10px ; margin-top:10px; background-color:#ddd;}
					#campaign ul .text a{color:#000;}
					#campaign ul .text p{text-align:right;}
						#campaign ul .text p a{color:#194081;}



		/*######################## pc 작업 1 ########################*/
		@media all and (min-width:1300px){}
		

		/*######################## pc 작업 2 ########################*/
		@media all and (min-width:1025px) and (max-width:1299px){

			/*############# gnbWrap ###############*/
			#gnbWrap{max-width:1299px; width:100%; margin:0 auto;}
		
			/*로고높이 300 * 82 */
			#logo{width:32%; float:left;}
		
			/*############# header + gnb ###############*/
			#gnb{width:66%; height:85px; font-family:"exo"; float:left; padding-right:2%}
				#gnb li{display:inline; line-height:85px; padding-left:37px; font-size:18px;}



			/*############# film + .scene ###############*/
			.scene .visual .textArea{max-width:1920px; width:80%; margin:19% auto 0; overflow:hidden; background-color:rgba(0,0,0,0); font-family:"saria"; text-align:center;}
					.scene .visual .textArea h3{font-size:50px; color:#efefef;}
					.scene .visual .textArea .title{font-size:30px; color:#fff; padding:2% 0 1%;}
					.scene .visual .textArea .desc{width:100%; font-size:18px; color:#fff; margin:1% auto 0; line-height:30px;}


			/*############# container + conten0 ###############*/
			#content0{width:100%; overflow:hidden; background-color:#efefef; padding:80px 0 100px;}
				#content0 h3{width:100%; text-indent:50px;}


		/*############# container + conten0 + fcbInfo ###############*/
		#fcbInfo{width:1025px;}
			#fcbInfo li{float:left; width:235px; height:205px;}
					#fcbInfo li a .text{height:20%;}
			
			#fcbInfo .fcbTv{width:500px; height:420px;}
					#fcbInfo .fcbTv a .img{height:250px;}

		
		/*############# container + content1 ###############*/
		#content1 h3:before{content:""; color:transparent;}
			#content1 h3:after{content:""; color:transparent;}


		/*############# container + content1 + player ###############*/
		#playerArea{width:100%; position:relative;}
			#screen1{width:1080px; margin:0 auto; overflow:hidden;}

			#playerWrap{width:6480px;}
			#playerWrap:after{content:""; display:block; clear:both;}
				#playerWrap .scene1{width:1080px; float:left;}
					.player{width:1080px; height:360px; padding:40px 0;  overflow:hidden; margin:0 auto;}
						.player li{width:250px; height:360px; margin:0 10px; float:left;}
							.player li a {display:block; width:100%; height:360px;}
								
								.player li a .img{display:block; float:left; width:100%; height:281px;}
									.player li a .img img{width:100%;}
								
								.player li a .number{display:block; float:left; width:70px; height:79px; text-align:center; line-height:79px; font-size:30px; font-weight:700; color:#fff;  background-color:#72142E; transition:background-color 0.5s;}
								.player li a .playerInfo{display:block; float:left; width:150px; height:54px; padding:15px 0 10px 30px; font-size:20px; background-color:#9C1737; color:#fff; transition:background-color 0.5s;}
									.player li a span.position{font-size:14px;}
							
				.player li:hover a span.number{background-color:#1b3058;}
				.player li:hover a span.playerInfo{background-color:#1d3b72;}

		
			#playerBtn p{position:absolute; width:60px; height:60px; top:0; margin-top:-50px; cursor:pointer;}
			#playerBtn p img{width:100%; height:100%;}
				#playerBtn .prevBtn{left:15%;}
				#playerBtn .nextBtn{right:15%;}

		/*############# container + content2 ###############*/
			#content2 h3.matchUp{width:100%;}
			#league{width:926px;}

		/*############# container + content2 + shopAd ###############*/
		#shopAd{display:none;}

		/*############# container + content3 ###############*/
			#content3 h3{width:100%; text-align:center; text-indent:0;}

		/*############# container + content3 + photoVideo ###############*/
			#photoVideo{width:1010px;}
				#photoVideo li{width:235px; height:185px;}
				#photoVideo .photo5,#photoVideo .photo6{width:245px;}
				#photoVideo li.mainPhoto{width:500px;}

		
		/*############# campaign ###############*/
		#campaign{width:100%; background-color:#ccc; padding:40px 0;}
			#campaign h3{width:975px; color:#0f2a56; margin:0 auto; font-size:40px;}
			#campaign ul{width:975px; height:350px;}
				#campaign ul .video{width:585px; margin-right:10px;}
				#campaign ul .img{width:380px; height:194px;}
				#campaign ul .text{width:360px; height:120px; margin-top:0;}

		/*############# sponsor ###############*/	
			.floor2 ul{max-width:900px;}
				.floor2 ul li{margin:0 10px;}

			
					#footerArea{max-width:1025px;}
						#footerArea .left{width:60%;}
							#footerArea .left ul{width:98%; padding-left:2%;}
									#footerArea .left ul li a{padding:0 3px;}
						
						#footerArea .right{width:40%;}
							#footerArea .right .img{right:10px;}
							#footerArea .right .text{padding-right:10px;}


		
		}


		/*######################## 테블릿 작업 ########################*/
		@media all and (min-width:768px) and (max-width:1024px){

			/*############# headerWrap + info ###############*/
			#infoTop{width:100%;}
				#info{max-width:1024px; width:100%; height:40px;}
				
			/*############## headerWrap + info + matchInfo  ###############*/
			#matchInfoWrap{width:50%;}
			#matchInfo{width:100%; margin:0 auto;}
				#matchInfo li{width:300px;}
					#matchInfo p{width:100%; height:30px; padding:5px 0; line-height:30px;}
							#matchInfo p span.league{width:100px; padding-left:5px; padding-right:5px;}
							#matchInfo p span.date{width:60px;}
							#matchInfo p span.time{width:40px;}

			/*############# gnbWrap ###############*/
			#gnbWrap{max-width:1024px; width:100%; margin:0 auto;}
		
			/*로고높이 300 * 82 */
			#logo{width:32%; float:left;}
				#logo .img{margin-left:10px; width:200px; height:62px; padding:10px 0;}
		
			/*############# header + gnb ###############*/
			#gnb{width:65%; height:85px; float:left; padding-right:3%;}
				#gnb li{display:inline; line-height:85px; padding-left:20px; font-size:15px;}

			
			.scene .visual .textArea{margin:17% auto 0;}
					.scene .visual .textArea h3{font-size:35px;}
					.scene .visual .textArea .title{font-size:20px; padding:3% 0 2%;}
					.scene .visual .textArea .desc{font-size:16px; margin:1% auto 0; line-height:20px;}


			#btn1 li{width:40px; height:80px; margin-top:-15px; cursor:pointer; position:absolute;}
				#btn1 .left{left:4%; top:50%;}
				#btn1 .right{right:4%; top:50%;}

		
			/*############# container + conten0 ###############*/
			#content0{padding:0;}
				#content0 h3{width:100%; padding:30px 0 10px; font-size:40px; text-align:center; margin:0 auto; text-indent:0;}


			/*############# container + conten0 + fcbInfo ###############*/
			#fcbInfo{width:768px; padding-bottom:10px; margin:0 auto;}
				#fcbInfo li{width:354px; height:190px; margin-left:0; margin-top:10px; overflow:hidden;}
				#fcbInfo .new1, #fcbInfo .new3{margin:10px 20px 0;}
					
					#fcbInfo li a{width:100%;}
						#fcbInfo li a img{width:100%; margin:0;}
						#fcbInfo li a{width:100%;}
						#fcbInfo li a span.text{height:25%; width:90%; padding:0 5%;}
				
				#fcbInfo .fcbTv{width:100%; height:500px; float:none;}
						#fcbInfo .fcbTv a .img{height:350px;}
						#fcbInfo .fcbTv a .textMain{width:94%; height:140px; text-align:center; padding:5px 3%; font-size:18px; color:#eee;}
							#fcbInfo .fcbTv a .textMain .title{font-size:20px; padding-top:10px;}
							#fcbInfo .fcbTv a .textMain strong{font-size:22px;}

			/*############# container + content1 ###############*/
			#content1{width:100%; padding:0; padding-bottom:20px;}
				#content1 h3{width:100%; padding:50px 0 0; height:45px; line-height:45px; font-size:40px;}
				#content1 h3:before{content:"";}
				#content1 h3:after{content:"";}

			/*############# container + content1 + player ###############*/
			#screen1{width:650px; margin:50px auto 0; overflow:hidden;}
				#playerWrap .scene1{width:320px;}
					.player{width:320px; height:360px; padding:0; overflow:hidden;}
						.player li{width:320px; height:360px; margin:10px;}
								
								.player li a .number{width:90px;}
								.player li a .playerInfo{width:200px;}
		
			#playerBtn p{width:50px; height:50px; top:0; margin-top:-100px;}




			/*############# container + content2 ###############*/
			#content2{width:100%; padding:0; overflow:hidden; background-color:#eee;}
				#content2 h3.matchUp{width:768px; padding:40px 0 20px;}
				#league{width:768px; overflow:hidden; margin:0 auto;}

			/*############# container + content2 + shopAd ###############*/
			#shopAd{display:none;}

			
			/*############# container + content2 + match ###############*/
			#match{float:left; width:768px; height:364px; margin-right:0;}			
				#match .matchUp{width:768px; height:220px; margin-bottom:10px;}			
				#match .result0{width:377px;}
				#match .result1{width:377px;}


			

			/*############# container + content2 + stand ###############*/	
			#stand{float:none; clear:both; margin:380px auto 20px;}
					#stand h3{width:100%; height:100%;}
			

			/*############# container + content3 ###############*/
			#content3{padding:0;}
				#content3 h3{width:100%; height:45px; line-height:45px; padding:40px 0 20px; text-align:center; margin:0 auto; text-indent:0; font-size:40px;}


			/*############# container + content3 + photoVideo ###############*/
				#photoVideo{width:748px; height:1250px; overflow:hidden;}
					#photoVideo li{width:367px; height:200px; margin-left:14px;}
					#photoVideo li.mainPhoto{width:768px; height:400px; float:none; margin:0;}
					#photoVideo .photo1,#photoVideo .photo3,#photoVideo .photo5,#photoVideo .photo7{margin-left:0;}



			
			/*############# content4 + adArea ###############*/
			#adArea .text1{width:500px;}
			#adArea .text2{width:500px;}

			#adArea:hover .img{right:510px;}
			#adArea:hover .text1{right:-20px;}
			#adArea:hover .text2{right:-20px;}


			/*############# campaign ###############*/
			#campaign{padding:0; padding-bottom:30px;}
				#campaign h3{width:100%; height:45px; line-height:45px; padding-bottom:0; padding:40px 0 20px; text-align:center; font-size:40px;}
				#campaign ul{width:748px; height:650px;}
					#campaign ul li{float:none;}
					#campaign ul .video{width:748px; margin-right:0;}
					#campaign ul .img{width:374px; height:200px; margin-top:30px;  float:left;}
					#campaign ul .text{width:344px; height:160px;  margin-top:30px; padding:40px 15px 0; float:left;}


			/*############# footer ###############*/
			#footer{width:100%;}
				#sponsers{width:100%;}
					
					.floor1{width:100%; height:54px; overflow:hidden; padding:10px 0;}
						.floor1 ul{width:510px; padding:0; margin:0 auto;}
							
					
					.floor2{width:100%; height:163px; overflow:hidden;}
						.floor2 ul{max-width:510px; height:148px; padding:0; margin:0 auto;}
							.floor2 ul li{margin:10px 20px;}
					
					.floor3{padding-top:10px; height:40px;}
						.floor3 p{height:50px;}


					#footerArea{max-width:768px;}
						#footerArea .left{width:60%;}
							#footerArea .left ul{width:98%; padding-left:2%;}
									#footerArea .left ul li a{padding:0 3px;}
						
						#footerArea .right{width:40%;}
							#footerArea .right .img{right:10px;}
							#footerArea .right .text{padding-right:10px;}
		
		}
			

		


		/*######################## 스마트폰 가로 작업########################*/
		@media all and (min-width:481px) and (max-width:767px){
			#headerWrap{height:243px; position:static;}
			
			/*############# headerWrap + info ###############*/
			#infoTop{width:100%;}
				#info{max-width:767px; width:100%; height:40px;}
				
			/*############## headerWrap + info + matchInfo  ###############*/
			#matchInfoWrap{width:100%;}
			#matchInfo{width:100%; margin:0 auto;}
				#matchInfo li{width:300px; margin:0 auto;}
					#matchInfo p{width:100%; height:30px; padding:5px 0; line-height:30px;}
							#matchInfo p span.league{width:100px; padding-left:5px; padding-right:5px;}
							#matchInfo p span.date{width:60px;}
							#matchInfo p span.time{width:40px;}
					
			/*############## headerWrap + info + sponInfo  ###############*/
			#sponInfoWrap{float:none; position:absolute; left:-9999px; width:1px; height:1px; overflow:hidden;}

			/*############# header ###############*/	
			#header{width:100%; height:202px;}
			
				/*############# gnbWrap ###############*/
				#gnbWrap{max-width:720px; width:100%; margin:0 auto;}
			
				/*로고높이 300 * 82 */
				#logo{width:100%; float:none;}
					#logo .img{width:300px; margin:0 auto;}
			
				/*############# header + gnb ###############*/
				#gnb{width:100%; height:120px; float:none;}
					#gnb li{width:50%; float:left; display:block; height:40px; line-height:40px; padding-left:0px; font-size:18px; text-align:center; border:1px solid #ccc; border-bottom:none; box-sizing:border-box;}
					#gnb li:last-child{width:100%; border-bottom:1px solid #ccc;}

			/*############# film + .scene ###############*/
			.scene .visual .textArea{margin:5% auto 0;}
					.scene .visual .textArea h3{font-size:25px;}
					.scene .visual .textArea .title{font-size:18px; padding:4% 0 1%;}
					.scene .visual .textArea .desc{width:100%; font-size:12px; margin:5% auto 0; line-height:20px;}

			#btn{bottom:20px; margin-left:-33px; width:75px; height:20px;}
			#btn li{ width:15px; height:15px; cursor:pointer;}
			#btn .btn1{left:0px;}
			#btn .btn2{left:30px;}
			#btn .btn3{left:60px;}

			#btn1 li{width:20px; height:40px; margin-top:-15px; cursor:pointer; position:absolute;}
				#btn1 li img{width:100%; height:100%;}
				#btn1 .left{left:4%; top:50%;}
				#btn1 .right{right:4%; top:50%;}

			
			/*############# container + conten0 ###############*/
			#content0{padding:0;}
				#content0 h3{width:100%; padding:30px 0 10px; font-size:26px; text-align:center; margin:0 auto; text-indent:0;}


			/*############# container + conten0 + fcbInfo ###############*/
			#fcbInfo{max-width:460px; width:100%; padding-bottom:0; margin:0 auto 30px;}
				#fcbInfo li{width:230px; height:170px; margin-left:0; margin-top:0; overflow:hidden;}
					
					#fcbInfo li a{width:100%;}
						#fcbInfo li a img{width:100%; margin:0;}
						#fcbInfo li a{width:100%;}
						#fcbInfo li a span.text{height:25%; width:90%; padding:0 5%;}
				
				#fcbInfo .fcbTv{width:460px; height:430px; float:none;}
						#fcbInfo .fcbTv a .img{height:250px;}
						#fcbInfo .fcbTv a .textMain{width:90%; height:170px; text-align:center; padding:5px 5%; font-size:18px; color:#eee;}
							#fcbInfo .fcbTv a .textMain .title{font-size:20px;}
							#fcbInfo .fcbTv a .textMain strong{font-size:22px;}

			/*############# container + content1 ###############*/
			#content1{width:100%; padding:0;}
				#content1 h3{width:100%; padding:20px 0 10px; height:45px; line-height:45px; font-size:28px;}
				#content1 h3:before{content:"";}
				#content1 h3:after{content:"";}

			/*############# container + content1 + player ###############*/
			#screen1{width:320px; margin:0 auto; overflow:hidden;}
				#playerWrap .scene1{width:320px;}
					.player{width:320px; height:360px; padding:0; overflow:hidden;}
						.player li{width:320px; height:360px; margin:0;}
								
								.player li a .number{width:90px;}
								.player li a .playerInfo{width:200px;}
		
			#playerBtn p{width:50px; height:50px; top:0; margin-top:-60px;}

			


			/*############# container + content2 ###############*/
			#content2{width:100%; padding:0; overflow:hidden; background-color:#eee;}
				#content2 h3.matchUp{width:100%; height:45px; line-height:45px; padding:20px 0 10px; font-size:26px;}
				#league{width:100%;}

			/*############# container + content2 + shopAd ###############*/
			#shopAd{display:none;}

			
			/*############# container + content2 + match ###############*/
			#match{float:none; width:100%; height:200px; margin-right:0;}
				#match li{float:none; border:none;}			
				#match .matchUp{width:100%; height:200px; margin-bottom:0;} 
					#match .matchUp h4{height:30px; line-height:30px; font-size:16px; margin-top:0;}
					#match .matchUp .date{font-size:14px;}
					#match .matchUp .team{width:280px;}
						#match .matchUp .home{padding-right:10px; width:80px; height:80px;}			
						#match .matchUp .versus{height:80px; font-size:30px;}
						#match .matchUp .away{padding-left:10px; width:80px; height:80px;}
					#match .matchUp .btn{padding-top:0; height:30px;}
						#match .matchUp .btn button{height:30px;}
							#match .matchUp .btn button a{line-height:30px;}

					#match .result0, #match .result1{display:none;}

			/*############# container + content2 + stand ###############*/
			#stand{display:none;}

			
			/*############# container + content3 ###############*/
			#content3{padding:0;}
				#content3 h3{width:100%; height:45px; line-height:45px; padding:20px 0 10px; text-align:center; margin:0 auto; text-indent:0; font-size:24px;}


			/*############# container + content3 + photoVideo ###############*/
				#photoVideo{width:481px; height:530px; margin:0 auto;}
					#photoVideo li{width:240px; height:140px; float:left; margin-left:0; margin-top:0; overflow:hidden; margin:0 auto;}
						#photoVideo li a{width:100%; height:100%;}
						#photoVideo .photo5,#photoVideo .photo6,#photoVideo .photo7,#photoVideo .photo8{display:none;}
					#photoVideo li.mainPhoto{width:481px; height:250px; float:none;}

			/*############# content4 + adArea ###############*/
			#content4{width:100%;}

				#adArea{height:500px; background-position:-530px 0;}

				#adArea:before{content:"FC Barcelona App"; display:block; background-color:#fff; font-size:24px; text-align:center; padding:20px 0 10px; font-family:"saria"; font-weight:700; color:#0f2a56;}
					#adArea .img{width:150px; height:300px; padding-top:30px; position:static; opacity:1; margin:0 auto;}
						#adArea .img img{width:100%; height:100%}
					#adArea .text1{display:none;}
							#adArea .text1 strong{display:none;}
							#adArea .text1 .text{display:none;}
					#adArea .text2{width:284px; height:80px; margin:0 auto; position:static; opacity:1;}
						#adArea .text2 .text{display:none;}
						#adArea .appImg{width:100%; padding-top:30px;}

			/*############# campaign ###############*/
			#campaign{width:100%; background-color:#ccc; padding:0 0 30px;}
				#campaign h3{width:100%; height:45px; line-height:45px; padding-bottom:0; padding:30px 0 10px; text-align:center; font-size:24px;  font-family:"saria";}
				#campaign ul{width:481px; margin:0 auto;}
					#campaign ul li{float:none;}
					#campaign ul .video{display:none;}
					#campaign ul .img{width:481px; height:270px;}
					#campaign ul .text{width:461px; height:100px; padding:10px 10px; margin-top:0px;}

			
			/*############# footer ###############*/
			#footer{width:100%;}
				#sponsers{width:100%; overflow:hidden;}
					.floor0{padding-top:20px; height:85px;}
						.floor0 .img{width:50px; height:50px; margin:0 auto;}
							.floor0 .teamName{padding-top:10px; font-size:16px;}
					
						.floor1 ul{width:270px; height:50px; padding:0; margin:0 auto;}
							.floor1 ul li{width:70px; height:30px; margin:10px 10px;}
					
						.floor2 ul{width:270px; height:50px; padding:0; margin:0 auto;}
							.floor2 ul li{width:70px; height:30px; margin:10px 10px;}
					
					.floor3{padding-top:0; line-height:40px; height:40px;}
						.floor3 p{height:40px;}
							.floor3 p strong{font-size:14px;}


			/*######## leftRightWrap #########*/
			#leftRightWrap{width:100%; background-color:#0F245F;}
					#footerArea{width:100%; background-color:#0F245F; height:80px; padding:20px 0; margin:0 auto;}
						#footerArea div{float:left;}
						#footerArea .left{width:100%; height:80px;}
							#footerArea .left .img{display:none;}
							#footerArea .left .copy{padding-left:0; font-size:12px; font-weight:700; display:block; text-align:center;}
							#footerArea .left ul{width:100%; overflow:hidden; padding-top:10px;}
								#footerArea .left ul li{display:block; width:50%; float:left; color:transparent; text-align:center;}
									#footerArea .left ul li a{padding:0 5px; color:#fff; font-size:14px;}
						
						#footerArea .right{display:none;}		

		}
		
		
		
		/*######################스마트폰 세로 작업#####################*/

		@media all and (min-width:320px) and (max-width:480px){
			#headerWrap{height:328px; position:static;}
			/*############# headerWrap + info ###############*/
			#infoTop{width:100%;}
				#info{max-width:480px; width:100%; height:40px;}
				
			/*############## headerWrap + info + matchInfo  ###############*/
			#matchInfoWrap{width:100%;}
			#matchInfo{float:none; width:100%; margin:0 auto;}
				#matchInfo li{width:300px; margin:0 auto;}
					#matchInfo p{width:100%; height:30px; padding:5px 0; line-height:30px;}
							#matchInfo p span.league{width:100px; padding-left:5px; padding-right:5px;}
							#matchInfo p span.date{width:60px;}
							#matchInfo p span.time{width:40px;}
					
			/*############## headerWrap + info + sponInfo  ###############*/
			#sponInfoWrap{float:none; position:absolute; left:-9999px; width:1px; height:1px; overflow:hidden;}

			/*############# header ###############*/	
			#header{width:100%; height:322px;}
			
				/*############# gnbWrap ###############*/
				#gnbWrap{max-width:480px; width:100%; margin:0 auto;}
			
				/*로고높이 300 * 82 */
				#logo{width:100%; float:none;}
					#logo .img{width:300px; margin:0 auto;}
			
				/*############# header + gnb ###############*/
				#gnb{width:100%; height:240px; float:none;}
					#gnb li{display:block; height:40px; line-height:40px; padding-left:0px; font-size:18px; text-align:center; border-top:1px solid #ccc;}
					#gnb li:last-child{border-bottom:1px solid #ccc;}
			
			/*############# film + .scene ###############*/
			.scene .visual .textArea{margin:5% auto 0;}
					.scene .visual .textArea h3{font-size:14px;}
					.scene .visual .textArea .title{display:none;}
					.scene .visual .textArea .desc{width:100%; font-size:10px; margin:1% auto 0; line-height:20px;}
			

			#btn{bottom:10px; margin-left:-25px; width:50px; height:20px;}
				#btn li{width:10px; height:10px;}
					#btn .btn1{left:0px;}
					#btn .btn2{left:20px;}
					#btn .btn3{left:40px;}

			#btn1 li{width:20px; height:30px; margin-top:-15px; cursor:pointer; position:absolute;}
				#btn1 li img{width:100%; height:100%;}
				#btn1 .left{left:3%; top:50%;}
				#btn1 .right{right:3%; top:50%;}

			
			/*############# container + conten0 ###############*/
			#content0{padding:0;}
				#content0 h3{width:100%; padding-top:10px; font-size:24px; text-align:center; margin:0 auto; text-indent:0;}


			/*############# container + conten0 + fcbInfo ###############*/
			#fcbInfo{max-width:481px; width:100%; padding-bottom:0;}
				#fcbInfo li{float:none; width:300px; height:255px; margin-left:0; margin-top:0; margin:0 auto;}			
				
				#fcbInfo .fcbTv{width:300px; height:330px;}
						#fcbInfo .fcbTv a .img{height:200px;}
						#fcbInfo .fcbTv a .textMain{width:100%; height:120px; text-align:center; padding:5px 0; font-size:18px; color:#eee;}
							#fcbInfo .fcbTv a .textMain .title{font-size:20px;}
							#fcbInfo .fcbTv a .textMain strong{font-size:22px;}

			/*############# container + content1 ###############*/
			#content1{width:100%; padding:0;}
				#content1 h3{width:100%; padding:20px 0 10px; height:45px; line-height:45px; font-size:24px;}
				#content1 h3:before{content:"";}
				#content1 h3:after{content:"";}

			/*############# container + content1 + player ###############*/
			#screen1{width:320px; margin:0 auto; overflow:hidden;}
				#playerWrap .scene1{width:320px;}
					.player{width:320px; height:360px; padding:0; overflow:hidden;}
						.player li{width:320px; height:360px; margin:0;}
								
								.player li a .number{width:90px;}
								.player li a .playerInfo{width:200px;}
		
			#playerBtn p{width:50px; height:50px; top:0; margin-top:-60px;}







			


			/*############# container + content2 ###############*/
			#content2{width:100%; padding:0; overflow:hidden; background-color:#eee;}
				#content2 h3.matchUp{width:100%; height:45px; line-height:45px; padding:20px 0 10px; font-size:24px;}
				#league{width:100%;}

			/*############# container + content2 + shopAd ###############*/
			#shopAd{width:300px; height:364px; float:none; margin:0 auto; display:none;}

			
			/*############# container + content2 + match ###############*/
			#match{float:none; width:100%; height:200px; margin-right:0;}
				#match li{float:none; border:none;}			
				#match .matchUp{width:100%; height:200px; margin-bottom:0;} 
					#match .matchUp h4{height:30px; line-height:30px; font-size:16px; margin-top:0;}
					#match .matchUp .date{font-size:14px;}
					#match .matchUp .team{width:280px;}
						#match .matchUp .home{padding-right:10px; width:80px; height:80px;}			
						#match .matchUp .versus{height:80px; font-size:30px;}
						#match .matchUp .away{padding-left:10px; width:80px; height:80px;}
					#match .matchUp .btn{padding-top:0; height:30px;}
						#match .matchUp .btn button{height:30px;}
							#match .matchUp .btn button a{line-height:30px;}

					#match .result0, #match .result1{display:none;}
		

			/*############# container + content2 + stand ###############*/
			#stand{display:none;}

			
			/*############# container + content3 ###############*/
			#content3{padding:0;}
				#content3 h3{width:100%; height:45px; line-height:45px; padding:20px 0 10px; text-align:center; margin:0 auto; text-indent:0; font-size:24px;}

			/*############# container + content3 + photoVideo ###############*/
				#photoVideo{width:320px; height:365px; background-color:blue; margin:0 auto;}
					#photoVideo li{width:160px; height:90px; float:left; margin-left:0; margin-top:0; overflow:hidden; margin:0 auto;}
						#photoVideo .photo5,#photoVideo .photo6,#photoVideo .photo7,#photoVideo .photo8{
							display:none;
						}
					#photoVideo li.mainPhoto{width:320px; height:185px; float:none;}

			/*############# content4 + adArea ###############*/
			#content4{width:100%;}

				#adArea{height:500px; background-position:-530px 0;}

				#adArea:before{content:"FC Barcelona App"; display:block; background-color:#fff; font-size:24px; text-align:center; padding:20px 0 10px; font-family:"saria"; font-weight:700; color:#0f2a56;}
					#adArea .img{width:150px; height:300px; padding-top:30px; position:static; opacity:1; margin:0 auto;}
						#adArea .img img{width:100%; height:100%}
					#adArea .text1{display:none;}
							#adArea .text1 strong{display:none;}
							#adArea .text1 .text{display:none;}
					#adArea .text2{width:284px; height:80px; margin:0 auto; position:static; opacity:1;}
						#adArea .text2 .text{display:none;}
						#adArea .appImg{width:100%; padding-top:30px;}


			/*############# campaign ###############*/
			#campaign{width:100%; background-color:#ccc; padding:0;}
				#campaign h3{width:100%; height:45px; line-height:45px; padding-bottom:0; padding:30px 0 10px; text-align:center; font-size:24px;  font-family:"saria";}
				#campaign ul{width:320px; margin:0 auto;}
					#campaign ul li{float:none;}
					#campaign ul .video{display:none;}
					#campaign ul .img{width:320px; height:180px;}
					#campaign ul .text{width:300px; height:140px; padding:10px 10px; margin-top:0px;}

			
			/*############# footer ###############*/
			#footer{width:100%;}
				#sponsers{width:100%; overflow:hidden;}
					.floor0{padding-top:20px; height:85px;}
						.floor0 .img{width:50px; height:50px; margin:0 auto;}
							.floor0 .teamName{padding-top:10px; font-size:16px;}
					
						.floor1 ul{width:270px; height:50px; padding:0; margin:0 auto;}
							.floor1 ul li{width:70px; height:30px; margin:10px 10px;}
					
						.floor2 ul{width:270px; height:50px; padding:0; margin:0 auto;}
							.floor2 ul li{width:70px; height:30px; margin:10px 10px;}
					
					.floor3{padding-top:0; line-height:40px; height:40px;}
						.floor3 p{height:40px;}
							.floor3 p strong{font-size:14px;}


			/*######## leftRightWrap #########*/
			#leftRightWrap{width:100%; background-color:#0F245F;}
					#footerArea{width:100%; background-color:#0F245F; height:80px; padding:20px 0; margin:0 auto;}
						#footerArea div{float:left;}
						#footerArea .left{width:100%; height:80px;}
							#footerArea .left .img{display:none;}
							#footerArea .left .copy{padding-left:0; font-size:12px; font-weight:700; display:block; text-align:center;}
							#footerArea .left ul{width:100%; overflow:hidden; padding-top:10px;}
								#footerArea .left ul li{display:block; width:50%; float:left; color:transparent; text-align:center;}
									#footerArea .left ul li a{padding:0 5px; color:#fff; font-size:14px;}
						
						#footerArea .right{display:none;}	
		
		
		}
							

  </style>
  <script>
	$(function(){
		/*################visual영역 슬라이드 기능 ##############*/
		$("#btn li:eq(0)").addClass("red");

		setInterval(function(){$("#btn1 .right").click()},4000);
		
		var count = 0;
		$("#btn1 .right").click(function(){
			count++;
			width = $("#screen").width();
				
			if(count==3){ count=0; }
			$("#btn li").removeClass("red");
			$("#btn li:eq("+count+")").addClass("red");

			for(var i=0; i<width; i++){
				if(count==i){
					$("#film:not(:animated)").stop().animate({"marginLeft":"-"+width*count+"px"},1000);
				}
			}
		});

		$("#btn1 .left").click(function(){
			count--;
				width = $("#screen").width();
				
				if(count==-1){ count=2; }
				$("#btn li").removeClass("red");
				$("#btn li:eq("+count+")").addClass("red");

				 for(var i=0; i<width; i++){
						if(count==i){
							$("#film:not(:animated)").stop().animate({"marginLeft":"-"+width*count+"px"},1000);
						}
				 }
		});

		$("#btn li").click(function(){
			count++;
			var btnIndex = $(this).index();
			width = $("#screen").width();

			count = btnIndex;
			if(count==3){ count=0;}

			$("#btn li").removeClass("red");
			$("#btn li:eq("+btnIndex+")").addClass("red");		

			

			for(var i=0; i<width; i++){
				if(count==i){
					$("#film:not(:animated)").stop().animate({"marginLeft":"-"+width*count+"px"},1000);
				}
			}
		});



		/*################visual영역 arrw 슬라이드 기능 ##############*/
		/*
		var slideCont = $('#slideWrap');

		var arrwBtnCont = slideCont.find('.js-arw-btns');
		var arrwBtns = arrwBtnCont.find('li.js-arw-btn');

		console.log(arrwBtns);

		var now = 0
		, width = $("#screen").width()
		, sceneCnt = $(".scene").size();
		

		arrwBtns.on('click',function(e){
			var curTarget = $(e.currentTarget);
			if(curTarget.hasClass('left')){
				if(now == 0){
					now = sceneCnt-1;
				}else{
					now -= 1;
				}
				
			}else if(curTarget.hasClass('right')){
				if(now == sceneCnt-1){
					now = 0;
				}else{
					now += 1;
				}
				
			}
			console.log(now);
			console.log(sceneCnt);
		});
		*/
		/*

		var now = 1;

		$("#btn1 .right").click(function(){
			width = $("#screen").width()

			if(now == 0){
				$("#film").stop().animate({"marginLeft":"0"});
				now = now+1;
			}
			else if(now == 1){
				$("#film").stop().animate({"marginLeft":"-"+width+"px"},500,"swing");
				now = now+1;
			}
			else if(now == 2){
				$("#film").stop().animate({"marginLeft":"-"+width*2+"px"},500,"swing");
				now = now+1;
			}
			else if(now == 3){
				$("#film").stop().animate({"marginLeft":"-"+width*3+"px"},500,"swing");
				now = now+1;
			}
			else if(now == 4){
				 
				$("#film").stop().animate({"marginLeft":"-"+width*4+"px"},500,"swing");
				$("#film").delay(1000).css({"marginLeft":"0"});
				
				now = 0;
			}

		});
		*/
			


		/*################ 선수 영역 슬라이딩 윈도우 만들기 ##################*/
		var scene1W = $(".scene1").width();


		$("#playerWrap").prepend($(".scene1:last"));
		$("#playerWrap").css({"marginLeft":-(scene1W)+"px"});

		$(".nextBtn").click(function(){
			$("#playerWrap").stop().animate({"marginLeft":"-="+scene1W+"px"},1,"linear",function(){
				$("#playerWrap").append($(".scene1:first"));
				$("#playerWrap").css({"marginLeft":-(scene1W)+"px"});

			});			
		});

		$(".prevBtn").click(function(){			
			$("#playerWrap").stop().animate({"marginLeft":"+="+scene1W+"px"},1,"linear",function(){
			
				$("#playerWrap").prepend($(".scene1:last"));
				$("#playerWrap").css({"marginLeft":-(scene1W)+"px"});
			});
		});
		

		/*################offset box 기능 ##############*/
		$("#photoVideo li").mouseover(function(){
			$("#offset0").css({"width":$(this).width(),"height":$(this).height(),"left":$(this).offset().left,"top":$(this).offset().top,"fontSize":"16px","lineHeight":$(this).height()+"px"});
		});

		$("#content4").mouseover(function(){
			$("#offset0").css({"width":"1px","height":"1px","fontSize":"1px","backgroundColor":"rgba(0,0,100,0.5)","lineHeight":"1px"});
		});	



		/*##################### 스크롤 높이를 이용한 기능 구현 ###########################*/
		/*
		content0 = $("#content0");
		content1 = $("#content1");
		content2 = $("#content2");
		content3 = $("#content3");
		content4 = $("#content4");
		
		// 50px? 50으로 표현되는건지 확인하기
		visualWrapH = 964;
		content0H = content0.height();
		content1H = content1.height();
		content2H = content2.height();
		content3H = content3.height();
		content4H = content4.height();


		adH = visualWrapH + content0H + content1H + content2H + content3H

		/// 여기까지 수정
		/*################ 스크롤의 위치값 ################*/

		/*
		$(window).scroll(function(){
			
			var nowScroll = $(document).scrollTop();

			if(nowScroll >= adH && nowScroll <= adH + 600){
				$("#adArea .img").css({"top":"100px","right":"800px","opacity":"1"});
				$("#adArea .text1").css({"top":"130px","right":"170px","opacity":"1"});
				$("#adArea .text2").css({"top":"270px","right":"170px","opacity":"1"});
			}else{
				$("#adArea .img").css({"top":"100px","right":"1200px","opacity":"0"});
				$("#adArea .text1").css({"top":"130px","right":"-500px","opacity":"0"});
				$("#adArea .text2").css({"top":"270px","right":"-500px","opacity":"0"});
			}


		});
		*/

	
	});
  </script>
 </head>
 <body>
	<div id="wrap">
<?php include "00_headerWrap.php"; ?>
		<div id="container">
			<h2>컨텐츠 영역</h2>
			<section id="visualWrap">
				<h2>메인 영상 및 축구동영상 영역</h2>
				<div id="slideWrap">
					<div id="screen">
						<ul id="film">
							<li class="scene">
								<img src="img/main.jpg" alt="img0"/>
								<div class="visual">
									<div class="textArea">
										<h3>Welcome to FC Barcelona</h3>
										<p class="title">
											CONSTANTLY CHALLENGE
										</p>
										<p class="desc">
											Very few clubs anywhere in the world have won so many titles. The club's greatest pride and joy remain <span class="delete">the four European Cup titles won in Wembley, Paris, Rome, Berlin the FIFA Club World Cup</span>
										</p>
									</div>
								</div>
							</li>
							<li class="scene">
								<img src="img/main1.jpg" alt="img1"/>
								<div class="visual">
									<div class="textArea">
										<h3>PRO EVOLUTION SOCCER 2018</h3>
										<p class="title">
											PES2018 RELEASE!
										</p>
										<p class="desc">
											The free-to-play Winning Eleven 2018 Lite has been officially released and will include myClub Mode where users can build their own team and the e-Sports PES LEAGUE Mode.
										</p>
									</div>
								</div>
							</li>
							<li class="scene">
								<img src="img/main2.jpg" alt="img2"/>
								<div class="visual">
									<div class="textArea">
										<h3>Camp Nou Experience: Tour &amp; Museum</h3>
										<p class="title">
											Enjoy Camp Nou!
										</p>
										<p class="desc">
											Live the emotion of entering the field of play from the tunnel, discover the area dedicated to Leo Messi, see the five European Cups and interact with the history of the Club at the Museum.
										</p>
									</div>
								</div>
							</li>
						</ul>
						<div id="btn">
							<ul>
								<li class="btn1"></li>
								<li class="btn2"></li>
								<li class="btn3"></li>
							</ul>
						</div>
						<div id="btn1" class="js-arw-btns">
							<ul>
								<li class="left js-arw-btn"><img src="img/left_arrow.png" alt="leftArw"/></li>
								<li class="right js-arw-btn"><img src="img/right_arrow.png" alt="rightArw"/></li>
							</ul>
						</div>
					</div>
				</div>
			</section>
			<section id="content0">
				<h2>바로셀로나 TV 및 뉴스 영역</h2>
				<h3><a href="newsMain.php" title="뉴스 사이트">BARCELONA NEWS</a></h3>
				<ul id="fcbInfo">
					<li class="fcbTv new0">
						<a href="barTv.php" title="FC바로셀로나 TV 주소">
							<span class="img"><img src="img/barTv.jpg" alt="FC바로셀로나 TV"/></span>
							<span class="textMain">
								<span class="title">MATCH REPORT</span>
								<strong>Derby delight (2-0)</strong>
								Philippe Coutinho’s debut, and goals from Lionel Messi and Luis Suárez bring the Camp Nou to its feet as Barça sweep aside local rivals Espanyol to reach the semi-finals of the Copa del Rey
							</span>
						</a>
						<!--
							https://www.fcbarcelona.com/football/first-team/news/2017-2018/match-report-fc-barcelona-v-espanyol-derby-delight-2-0- 상세페이지
						-->
					</li>
					<li class="newsTop new1">
						<a href="news1.php" title="뉴스이미지1">
							<img src="img/new1.jpg" alt="뉴스이미지1"/>
							<span class="text">
								#INSIDE VIEW<br/>
								<strong>A new alliance at the Camp Nou</strong><br/>
								During Barça-Alavés, the Club's cameras recorded the movements of the Brazilian, ​​and also showed his closeness to the Argentinian and the Uruguayan
							</span>
						</a>
					</li>
					<li class="newsTop new2">
						<a href="news2.php" title="뉴스이미지2">
							<img src="img/new2.jpg" alt="뉴스이미지2"/>
							<span class="text">
								#FOOTBALL<br/>
								<strong>Leo Messi reaches 20 goals in the League</strong><br/>
								The Argentine star’s form is never less than spectacular and with his match-winning goal against Alavés, he reaches 20 goals in the league for the 10th year in succession
							</span>
						</a>
					</li>
					<li	class="newsBot new3">
						<a href="news3.php" title="뉴스이미지3">
							<img src="img/new3.jpg" alt="뉴스이미지3"/>
							<span class="text">
								#ESPANYOLBARÇA<br/>
								<strong>Philippe Coutinho 'It's going to be a special</strong><br/>
								Coutinho, who once played for Espanyol, will be going back to their ground for the first time since joining Barça
							</span>
						</a>
					</li>
					<li class="newsBot new4">
						<a href="news4.php" title="뉴스이미지4">
							<img src="img/new4.jpg" alt="뉴스이미지4"/>
							<span class="text">
								#FOOTBALL<br/>
								<strong>Luis Suárez hits jackpot with pinball goal</strong><br/>
								During a recent training session, Jordi Alba's efforts to keep the ball out of the net were quashed by the Barça number 9
							</span>
						</a>
					</li>
				</ul>
			</section>
			<section id="content1">
				<h2>선수 리스트 영역</h2>
				<h3><a href="squad.php" title="선수정보 사이트">Player</a></h3>
				<div id="playerArea">
					<div id="screen1">
						<ul id="playerWrap">
							<li class="scene1">
								<ul class="player">
									<li>
										<a href="#none" title="선수이미지0 주소">
											<span class="img">
												<img src="img/player8.jpg" alt="선수이미지8"/>
											</span>
											<span class="number">
												8
											</span>
											<span class="playerInfo">
												A. iniesta<br/>
												<span class="position">MIDFIELDER</span>
											</span>
										</a>
									</li>
									<li>
										<a href="#none" title="선수이미지1 주소">
											<span class="img">
												<img src="img/player9.jpg" alt="선수이미지9"/>
											</span>
											<span class="number">
												9
											</span>
											<span class="playerInfo">
												Luis Suárez<br/>
												<span class="position">FORWARD</span>
											</span>
										</a>
									</li>
									<li>
										<a href="player10.php" title="선수이미지2 주소">
											<span class="img">
												<img src="img/player10.jpg" alt="선수이미지10"/>
											</span>
											<span class="number">
												10
											</span>
											<span class="playerInfo">
												Messi<br/>
												<span class="position">FORWARD</span>
											</span>
										</a>
									</li>
									<li>
										<a href="#none" title="선수이미지3 주소">
											<span class="img">
												<img src="img/player11.jpg" alt="선수이미지11"/>
											</span>
											<span class="number">
												11
											</span>
											<span class="playerInfo">
												Dembélé<br/>
												<span class="position">FORWARD</span>
											</span>
										</a>
									</li>
								</ul>
							</li>
							<li class="scene1">
								<ul class="player">
									<li>
										<a href="player13.php" title="선수이미지13 주소">
											<span class="img">
												<img src="img/player13.jpg" alt="선수이미지13"/>
											</span>
											<span class="number">
												13
											</span>
											<span class="playerInfo">
												Cillessen<br/>
												<span class="position">GOALKEEPER</span>
											</span>
										</a>
									</li>
									<li>
										<a href="player14.php" title="선수이미지14 주소">
											<span class="img">
												<img src="img/player14.jpg" alt="선수이미지14"/>
											</span>
											<span class="number">
												14
											</span>
											<span class="playerInfo">
												Coutinho<br/>
												<span class="position">MIDFIELDER</span>
											</span>
										</a>
									</li>
									<li>
										<a href="player15.php" title="선수이미지15 주소">
											<span class="img">
												<img src="img/player15.jpg" alt="선수이미지15"/>
											</span>
											<span class="number">
												15
											</span>
											<span class="playerInfo">
												Paulinho<br/>
												<span class="position">MIDFIELDER</span>
											</span>
										</a>
									</li>
									<li>
										<a href="player16.php" title="선수이미지16 주소">
											<span class="img">
												<img src="img/player16.jpg" alt="선수이미지16"/>
											</span>
											<span class="number">
												16
											</span>
											<span class="playerInfo">
												Deulofeu<br/>
												<span class="position">FORWARD</span>
											</span>
										</a>
									</li>
								</ul>
							</li>
							<li class="scene1">
								<ul class="player">
									<li>
										<a href="player17.php" title="선수이미지17 주소">
											<span class="img">
												<img src="img/player17.jpg" alt="선수이미지17"/>
											</span>
											<span class="number">
												17
											</span>
											<span class="playerInfo">
												Paco Alcacer<br/>
												<span class="position">FORWARD</span>
											</span>
										</a>
									</li>
									<li>
										<a href="player18.php" title="선수이미지18 주소">
											<span class="img">
												<img src="img/player18.jpg" alt="선수이미지18"/>
											</span>
											<span class="number">
												18
											</span>
											<span class="playerInfo">
												Jordi Alba<br/>
												<span class="position">DEFENDER</span>
											</span>
										</a>
									</li>
									<li>
										<a href="player19.php" title="선수이미지19 주소">
											<span class="img">
												<img src="img/player19.jpg" alt="선수이미지19"/>
											</span>
											<span class="number">
												19
											</span>
											<span class="playerInfo">
												Digne<br/>
												<span class="position">DEFENDER</span>
											</span>
										</a>
									</li>
									<li>
										<a href="player20.php" title="선수이미지20 주소">
											<span class="img">
												<img src="img/player20.jpg" alt="선수이미지20"/>
											</span>
											<span class="number">
												20
											</span>
											<span class="playerInfo">
												S. Roberto<br/>
												<span class="position">MIDFIELDER</span>
											</span>
										</a>
									</li>
								</ul>
							</li>
							<li class="scene1">
								<ul class="player">
									<li>
										<a href="player21.php" title="선수이미지21 주소">
											<span class="img">
												<img src="img/player21.jpg" alt="선수이미지21"/>
											</span>
											<span class="number">
												21
											</span>
											<span class="playerInfo">
												Andre Gomes<br/>
												<span class="position">MIDFIELDER</span>
											</span>
										</a>
									</li>
									<li>
										<a href="player22.php" title="선수이미지22 주소">
											<span class="img">
												<img src="img/player22.jpg" alt="선수이미지22"/>
											</span>
											<span class="number">
												22
											</span>
											<span class="playerInfo">
												Aleix Vidal<br/>
												<span class="position">MIDFIELDER</span>
											</span>
										</a>
									</li>
									<li>
										<a href="player23.php" title="선수이미지23 주소">
											<span class="img">
												<img src="img/player23.jpg" alt="선수이미지23"/>
											</span>
											<span class="number">
												23
											</span>
											<span class="playerInfo">
												Umtiti<br/>
												<span class="position">DEFENDER</span>
											</span>
										</a>
									</li>
									<li>
										<a href="player24.php" title="선수이미지24 주소">
											<span class="img">
												<img src="img/player24.jpg" alt="선수이미지24"/>
											</span>
											<span class="number">
												24
											</span>
											<span class="playerInfo">
												Y.Mina<br/>
												<span class="position">DEFENDER</span>
											</span>
										</a>
									</li>
								</ul>
							</li>
							<li class="scene1">
								<ul class="player">
									<li>
										<a href="player25.php" title="선수이미지25 주소">
											<span class="img">
												<img src="img/player25.jpg" alt="선수이미지25"/>
											</span>
											<span class="number">
												25
											</span>
											<span class="playerInfo">
												Vermaelen<br/>
												<span class="position">DEFENDER</span>
											</span>
										</a>
									</li>
									<li>
										<a href="player1.php" title="선수이미지1 주소">
											<span class="img">
												<img src="img/player1.jpg" alt="선수이미지1"/>
											</span>
											<span class="number">
												1
											</span>
											<span class="playerInfo">
												Ter Stengen<br/>
												<span class="position">GOALKEEPER</span>
											</span>
										</a>
									</li>
									<li>
										<a href="player2.php" title="선수이미지2 주소">
											<span class="img">
												<img src="img/player2.jpg" alt="선수이미지2"/>
											</span>
											<span class="number">
												2
											</span>
											<span class="playerInfo">
												Nelson Semedo<br/>
												<span class="position">DEFENDER</span>
											</span>
										</a>
									</li>
									<li>
										<a href="player3.php" title="선수이미지3 주소">
											<span class="img">
												<img src="img/player3.jpg" alt="선수이미지3"/>
											</span>
											<span class="number">
												3
											</span>
											<span class="playerInfo">
												Pique<br/>
												<span class="position">DEFENDER</span>
											</span>
										</a>
									</li>
								</ul>
							</li>
							<li class="scene1">
								<ul class="player">
									<li>
										<a href="player4.php" title="선수이미지4 주소">
											<span class="img">
												<img src="img/player4.jpg" alt="선수이미지4"/>
											</span>
											<span class="number">
												4
											</span>
											<span class="playerInfo">
												I. Rakitic<br/>
												<span class="position">MIDFIELDER</span>
											</span>
										</a>
									</li>
									<li>
										<a href="player5.php" title="선수이미지5 주소">
											<span class="img">
												<img src="img/player5.jpg" alt="선수이미지5"/>
											</span>
											<span class="number">
												5
											</span>
											<span class="playerInfo">
												Sergio Busquets<br/>
												<span class="position">MIDFIELDER</span>
											</span>
										</a>
									</li>
									<li>
										<a href="player6.php" title="선수이미지6 주소">
											<span class="img">
												<img src="img/player6.jpg" alt="선수이미지6"/>
											</span>
											<span class="number">
												6
											</span>
											<span class="playerInfo">
												Denis Suarez<br/>
												<span class="position">MIDFIELDER</span>
											</span>
										</a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
					<div id="playerBtn">
						<p class="prevBtn">
							<img src="img/prev.png" alt="이전버튼" class="prev"/>
						</p>
						<p class="nextBtn">
							<img src="img/next.png" alt="다음버튼" class="next"/>
						</p>
					</div>
				</div>
			</section>
			<section id="content2">
				<h2>경기일정 및 티켓 구매 및 순위표</h2>
				<h3 class="matchUp"><a href="ticket_color.php" title="경기일정">Match Up</a></h3>
				<div id="league">
					<div id="shopAd">
						<a href="#none" title="shop광고"><img src="img/shop_gift.jpg" alt="shop광고 이미지"/></a>
					</div>
					<ul id="match">
						<li class="matchUp">
							<h4>Copa del Rey | Round of 16 - 1st Leg</h4>
							<p class="date">24/03/2018 | 19:00 FCB</p>
							<div class="team">
								<p class="home">
									<img src="img/logo.png" alt="바로셀로나 로고"/>
								</p>
								<p class="versus">
									VS
								</p>
								<p class="away">
									<img src="img/logo3.png" alt="레알마드리드 로고"/>
								</p>
							</div>
							<p class="btn">
								<button><a href="ticket_color.php" title="경기구매">Ticket Buy</a></button>
							</p>
						</li>
						<li class="result0">
							<h4>Copa del Rey | Round of 17 - 1st Leg</h4>
							<p class="date">01/04/2018 | 18:30 FCB</p>
							<div class="team">
								<p class="home">
									<img src="img/logo.png" alt="바로셀로나 로고"/>
								</p>
								<p class="versus">
									VS
								</p>
								<p class="away">
									<img src="img/logo4.png" alt="레알마드리드 로고"/>
								</p>
							</div>
						</li>
						<li class="result1">
							<h4>Copa del Rey | Round of 18 - 1st Leg</h4>
							<p class="date">12/04/2018 | 14:00 FCB</p>
							<div class="team">
								<p class="home">
									<img src="img/logo.png" alt="바로셀로나 로고"/>
								</p>
								<p class="versus">
									VS
								</p>
								<p class="away">
									<img src="img/logo5.png" alt="레알마드리드 로고"/>
								</p>
							</div>
						</li>
					</ul>
					<ul id="stand">
						<li class="standing">
							<h3>STANDINGS</h3>
						</li>
						<li class="orange">
							<p class="rank">1</p>
							<p class="teamLogo"><img src="img/logo.png" alt="바로셀로나 로고"/></p>
							<p class="teamName">FC Barcelona</p>
							<p class="score">45</p>
						</li>
						<li>
							<p class="rank">2</p>
							<p class="teamLogo"><img src="img/logo1.png" alt="로고1 이미지"/></p>
							<p class="teamName">At. Madrid</p>
							<p class="score">36</p>
						</li>
						<li class="gray">
							<p class="rank">3</p>
							<p class="teamLogo"><img src="img/logo2.png" alt="로고2 이미지"/></p>
							<p class="teamName">Valencia</p>
							<p class="score">34</p>
						</li>
						<li>
							<p class="rank">4</p>
							<p class="teamLogo"><img src="img/logo3.png" alt="로고3 이미지"/></p>
							<p class="teamName">Real Madrid</p>
							<p class="score">31</p>
						</li>
						<li class="gray">
							<p class="rank">5</p>
							<p class="teamLogo"><img src="img/logo4.png" alt="로고4 이미지"/></p>
							<p class="teamName">Sevilla</p>
							<p class="score">29</p>
						</li>
						<li>
							<p class="rank">6</p>
							<p class="teamLogo"><img src="img/logo5.png" alt="로고5 이미지"/></p>
							<p class="teamName">Villarreal</p>
							<p class="score">27</p>
						</li>
						<li class="gray">
							<p class="rank">7</p>
							<p class="teamLogo"><img src="img/logo6.png" alt="로고6 이미지"/></p>
							<p class="teamName">Eibar</p>
							<p class="score">24</p>
						</li>
						<li>
							<p class="rank">8</p>
							<p class="teamLogo"><img src="img/logo7.png" alt="로고7 이미지"/></p>
							<p class="teamName">Getafe</p>
							<p class="score">23</p>
						</li>					
					</ul>
				</div>
			</section>
			<section id="content3">
				<h2>선수 사진 및 동영상</h2>
				<h3>
					Photo and Video
				</h3>
				<p id="offset0">
				</p>
				<ul id="photoVideo">
					<li class="mainPhoto"><a href="#none" title="사진0"><img src="img/pv0.jpg" alt="사진0"/></a></li>
					<li class="photo1"><a href="#none" title="사진1"><img src="img/pv1.jpg" alt="사진1"/></a></li>
					<li class="photo2"><a href="#none" title="사진2"><img src="img/pv2.jpg" alt="사진2"/></a></li>
					<li class="photo3"><a href="#none" title="사진3"><img src="img/pv3.jpg" alt="사진3"/></a></li>
					<li class="photo4"><a href="#none" title="사진4"><img src="img/pv4.jpg" alt="사진4"/></a></li>
					<li class="photo5"><a href="#none" title="사진5"><img src="img/pv5.jpg" alt="사진5"/></a></li>
					<li class="photo6"><a href="#none" title="사진6"><img src="img/pv6.jpg" alt="사진6"/></a></li>
					<li class="photo7"><a href="#none" title="사진7"><img src="img/pv7.jpg" alt="사진7"/></a></li>
					<li class="photo8"><a href="#none" title="사진8"><img src="img/pv8.jpg" alt="사진8"/></a></li>
				</ul>			
			</section>
			<section id="content4">
				<h2>앱 광고 및 캠페인 영역</h2>
				<div id="adArea">					
					<p class="text1">
						<strong>FC Barcelona App</strong>
						<span class="text">You'll always be connected to the <br/>Barça World on your mobile phone!</span>
					</p>
					<p class="img"><img src="img/app.png" alt="아이폰 이미지"/></p>
					<div class="text2">
						<span class="text">
							If you're a Barça fan, download the new official FC Barcelona App.<br/>
							With its updated design and improved navigation,<br/>
							the new app is full of new feature to ensure<br/>
							you never miss a single detail of the Barça World!
						</span>
						<p class="appImg">
							<a href="#none" title="GooglePlay 사이트"><img src="img/googlePlay.png" alt="구글플레이 사진"/></a>
							<a href="#none" title="AppStore 사이트"><img src="img/appStore.png" alt="앱스토어 사진"/></a>
						</p>						
					</div>
				</div>
				<div id="campaign">
					<h3>Holiday Campaign</h3>
					<ul>
						<li class="video">
							<video controls poster="img/campaign.jpg">
								<source src="video/campaign.mp4" type="video/mp4"/>
							</video>
						</li>
						<li class="img"><a href="campaign.php" title="캠페인 사이트"><img src="img/campaign.jpg" alt="캠페인 이미지"/></a></li>
						<li class="text">
							<a href="campaign.php" title="기사내용 사이트">
								At FC Barcelona, we are firm believers in dreams. In dreams of overcoming adversity. In dreams that convert deep desires into reality. One such dream has inspired the FC Barcelona Christmas message for this year: Nujeen’s Dream. <!--It is a human story of fighting...-->
							</a>
							<p><a href="campaign.php" title="기사내용 사이트">more</a></p>
						</li>
					</ul>
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
<!--
	https://www.fcbarcelona.com/football/first-team/news/2017-2018/video-highlights-fcbarcelona-v-levante
-->
