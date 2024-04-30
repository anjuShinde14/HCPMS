<?php
	session_start();
	if(ISSET($_POST['login'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$conn = new mysqli("localhost", "root", "", "hcpms") or die(mysqli_error());
		$query = $conn->query("SELECT * FROM `user` WHERE `username` = '$username' && `password` = '$password'") or die(mysqli_error());
		$fetch = $query->fetch_array();
		$valid = $query->num_rows;
		$section = $fetch['section'];	
			if($valid > 0){
				if($section == "Fecalysis"){
					$_SESSION['user_id'] = $fetch['user_id'];
					echo("<script> location.replace(' fecalysis.php');</script>");
				}
				if($section == "Maternity"){
					$_SESSION['user_id'] = $fetch['user_id'];
					echo("<script> location.replace(' maternity.php');</script>");
				}
				if($section == "Hematology"){
					$_SESSION['user_id'] = $fetch['user_id'];
					echo("<script> location.replace(' hematology.php');</script>");
				}
				if($section == "Dental"){
					$_SESSION['user_id'] = $fetch['user_id'];
					echo("<script> location.replace(' dental.php');</script>");
				}
				if($section == "Xray"){
					$_SESSION['user_id'] = $fetch['user_id'];
					echo("<script> location.replace(' xray.php');</script>");
				}
				if($section == "Rehabilitation"){
					$_SESSION['user_id'] = $fetch['user_id'];
					echo("<script> location.replace(' rehabilitation.php');</script>");
				}
				if($section == "Sputum"){
					$_SESSION['user_id'] = $fetch['user_id'];
					echo("<script> location.replace(' sputum.php');</script>");
				}
				if($section == "Urinalysis"){
					$_SESSION['user_id'] = $fetch['user_id'];
					echo("<script> location.replace(' urinalysis.php');</script>");
				}
			}else{
				echo "<script>alert('Account Does Not Exist!')</script>";
				echo "<script>window.location = 'index.php'</script>";
			}
						
		
		}
		$conn->close();
	