<header id="headerWrap">
			<h1>
				FC 바로셀로나
			</h1>
			<div id="infoTop">
				<div id="info">
					<h2>경기정보 및 스폰서 영역</h2>
					<div id="matchInfoWrap">
						<ul id="matchInfo">
							<li>
								<p>
									<span class="league"><strong>COPA DEL REY</strong></span>
									<span class="date">12/04/18</span>
									<span class="time">18:30</span>
									<span class="img"><img src="img/logo_high.png" alt="바로셀로나 로고 이미지"/></span>
									<span class="img"><img src="img/logo3_high.png" alt="레알마드리드 로고 이미지"/></span>
								</p>
							</li>
						</ul>
					</div>
					<div id="sponInfoWrap">
						<ul id="sponInfo">							
<?php if( empty($_SESSION["userid"]) ){ ?>
							<li class="spon1">
								<a href="login.php" title="LOGIN 사이트">Login</a>
							</li>
							<li class="spon2">
								<a href="signUp.html" title="회원가입 사이트">Sign Up</a>
							</li>
<?php } else{ ?>
							<li class="spon1">
								<a href="#" title="로그인 상태"><span style="color:#55f; font-size:17px;">[<?=$_SESSION["userid"]?>]</span>님 환영합니다.</a>
							</li>
							<li class="spon2">
								<a href="logout_control.php" title="로그아웃 하기">LOGOUT</a>
							</li>
<?php }?>
							<li class="spon3">
								<a href="#none" title="Rakuten 사이트"><img src="img/spon0_on1.png" alt="Nike 이미지"/></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div id="header">
				<div id="gnbWrap">
					<div id="logo">
						<p class="img">
							<a href="index.php" title="바로셀로나 주소"><img src="img/fcbLogo_300.png" alt="바로셀로나 로고"/></a>
						</p>
					</div>
					<ul id="gnb">
						<li><a href="newsMain.php" title="NEWS">NEWS</a></li>
						<li><a href="squad.php" title="BARCELONA">BARCELONA</a></li>
						<li><a href="tour.php" title="CAMP NOU">CAMP NOU</a></li>
						<li><a href="ticket_color.php" title="TICKETS">TICKETS</a></li>
						<li><a href="shopBuy.php" title="SHOP">SHOP</a></li>
					</ul>
				</div>
				<ul id="subGnb">
					<li class="sub sub0">
						<div class="subArea">
							<ul>
								<li><a href="newsMain.php" title="Photo Gallery">News</a></li>
								<li><a href="photoGallery.php" title="Photo Gallery">Photo Gallery</a></li>
								<li><a href="videoGallery.php" title="Video Gallery">Video Gallery</a></li>
								<li><a href="#none" title="클럽스케쥴">Club Schedule</a></li>
								<li><a href="#none" title="SNS">Social</a></li>
							</ul>
						</div>
						<div class="adArea">
							<p>
								<img src="img/subAd0.jpg" alt="이미지0"/>
							</p>
							<p>
								<img src="img/subAd1.jpg" alt="이미지1"/>
							</p>
						</div>
					</li>
					<li class="sub sub1">
						<div class="subArea">
							<ul>
								<li><a href="squad.php" title="Squad">Squad</a></li>
								<li><a href="campaign.php" title="Campaign">Campaign</a></li>
								<li><a href="legend.php" title="Legend">Legend</a></li>
								<li><a href="#none" title="History">History</a></li>
								<li><a href="#none" title="Honours">Honours</a></li>
								<li><a href="#none" title="Sponser">Sponser</a></li>
							</ul>
						</div>
						<div class="adArea">
							<p>
								<img src="img/subAd4.jpg" alt="이미지4"/>
							</p>
							<p>
								<img src="img/subAd2.jpg" alt="이미지3"/>
							</p>
						</div>
					</li>
					<li class="sub sub2">
						<div class="subArea">
							<ul>
								<li><a href="tour.php" title="camp nou tour">Tour Camp Nou Experience</a></li>
								<li><a href="shopBuy.php" title="Schedule">CampNou Store</a></li>	
								<li><a href="#none" title="Legend">Areas</a></li>												
								<li><a href="#none" title="History">Ice Rink</a></li>
								<li><a href="#none" title="Honours">Catering Service</a></li>
							</ul>
						</div>
						<div class="adArea">
							<p>
								<img src="img/tourSlide2.jpg" alt="이미지2"/>							
							</p>
							<p>
								<img src="img/tourSlide4.jpg" alt="이미지4"/>
							</p>
						</div>
					</li>
					<li class="sub sub3">
						<div class="subArea">
							<ul>
								<li><a href="ticket_color.php" title="Ticket">Ticket</a></li>
								<li><a href="ticket_color.php" title="Vip Ticket">Vip Ticket</a></li>
								<li><a href="ticketBuy.php" title="Vip Ticket">Next Match Ticket</a></li>
								<li><a href="tour.php" title="Schedule">Camp Nou Tour</a></li>
								<li><a href="#none" title="Schedule">All About Ticket</a></li>
							</ul>
						</div>
						<div class="adArea">
							<p>
								<img src="img/subAd3.jpg" alt="이미지3"/>
							</p>
							<p>
								<img src="img/subAd5.jpg" alt="이미지5"/>
							</p>
						</div>
					</li>
				</ul>
			</div>
		</header>