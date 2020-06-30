<?php
	
	include "00_conn.php";
	
	$userid = $_POST['userid'];
	$userpass = $_POST['userpass'];
	$firstname = $_POST['firstname'];
	$surname = $_POST['surname'];
	$useremail = $_POST['useremail'];
	$userphone = $_POST['userphone'];

	# 우편번호
	$post1 = $_POST['post1'];
	$add1 = $_POST['add1'];
	$add2 = $_POST['add2'];
	# 상세주소
	$address = $post1." ".$add1." ".$add2;


	# 대입되는 공간 빈칸이 아닌경우 입력받기
	if(!empty($userid) && !empty($userpass) && !empty($firstname) && !empty($surname) && !empty($useremail) && !empty($userphone) && !empty($post1) && !empty($add1) && !empty($add2)){
		$sql = "INSERT INTO members (userid,userpass,firstname,surname,useremail,userphone,address) values ('$userid','$userpass','$firstname','$surname','$useremail','$userphone','$address')";

		$result = mysqli_query($conn,$sql) or die(mysqli_error());
	}

	# 정보가 있을때 회원가입에 성공했습니다.
	# 아니라면 회원가입에 실패했습니다.

	# row[0] == 1, $result == true, $result
	if($result){
		echo "<p style='text-align:center; color:blue;'>회원가입에 성공 했습니다.</p>";
		echo "<meta http-equiv='Refresh' content='1; url=login.php'/>";
	}
	else{
		echo "<script>alert('회원가입에 실패 했습니다.'); history.go(-1);</script>";
	}


?>