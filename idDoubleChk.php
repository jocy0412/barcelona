<?php	
	include "00_conn.php";

	$q = $_REQUEST['q'];
	# 01) 넘겨받은 아이디 확인
	# echo "넘겨받은 아이디".$q;

	# 02 members에 해당하는 id가 있는지 검색하기
	
	$memSql = "SELECT *FROM members WHERE userid='$q'";
	$result = mysqli_query($conn,$memSql);
	
	# 03) 입력된 정보가 있는지 확인하기
	# phpMyAdmin
	# members 테이블 클릭 > 상단의 삽입 탭 클릭
	# no 제외하고 각각 입력하기
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

	

	# 정보가 있을때 숫자 1 출력
	# echo $row[0];
	# $row[0] 0 필드 한번만 비교하기 때문에 다음 필드를 읽지 못함
	# $row[필드명 호출] == $q 같은지 확인하면 계속해서 아이디 중복 체크 확인가능

	if($row["userid"] == $q){
		echo "<strong style='color:red'>아이디 중복불가</strong>";
	}
	else{
		echo "<strong style='color:blue'>아이디 사용가능</strong>";
	}
	


?>