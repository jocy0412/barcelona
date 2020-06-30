$(function(){
	/*###################### 서브 네비게이션 영역 ######################*/
	$("#subGnb .sub").hide();	
	
	$("#gnb li:eq(0)").hover(function(){
		$("#subGnb .sub").hide();
		$("#subGnb .sub:eq(0)").show();
	});
	
	$("#gnb li:eq(1)").hover(function(){
		$("#subGnb .sub").hide();
		$("#subGnb .sub:eq(1)").show();
	});
	$("#gnb li:eq(2)").hover(function(){
		$("#subGnb .sub").hide();
		$("#subGnb .sub:eq(2)").show();
	});
	$("#gnb li:eq(3)").hover(function(){
		$("#subGnb .sub").hide();
		$("#subGnb .sub:eq(3)").show();
	});
	$("#gnb li:eq(4)").hover(function(){
		$("#subGnb .sub").hide();
		$("#subGnb .sub:eq(4)").show();
	});
	$("#gnb li:eq(5)").hover(function(){
		$("#subGnb .sub").hide();
		$("#subGnb .sub:eq(5)").show();
	});
	$("#container, #footer").mouseover(function(){
		$("#subGnb .sub").hide();
	});
	
	/*
		for문으로 줄이는데 적용이 안됨
			
		for (var i=0; i<6; i++ ){
			$("#gnb li:eq("+i+")").hover(function(){
				$("#subGnb .sub").hide();
				$("#subGnb .sub:eq("+i+")").show();
			});
		}
	*/
	
});