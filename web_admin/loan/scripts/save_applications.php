<?php
	//Connect to database
	require_once('../../db/connection.php');
	
	
	$l_amount =$_POST['loan_amount'];
    $pur_loan =$_POST['pur_loan'];
	$gender =$_POST['gender'];
	$f_name =$_POST['f_name'];
	$l_name =$_POST['l_name'];
	$num_depen = $_POST['num_depen'];
	$email = $_POST['email'];
	$p_number =$_POST['p_number'];
	$m_status=$_POST['m_status'];
    $town=$_POST['town'];
	$street =$_POST['street'];	
	$h_num = $_POST['h_num'];
	
	$m_income =$_POST['m_income'];
	$created_date = date("Y-m-d H:i:s");
	
	$INSERT = "INSERT Into user_applications(l_amount, pur_loan, gender, f_name, l_name, num_depen, email, p_number, m_status, town, street, h_num, m_income, created_date_time) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

	//Execute insert query
	$stmt = $conn->prepare($INSERT);
	$stmt->bind_param("ssssssssssssss", $l_amount, $pur_loan, $gender, $f_name, $l_name, $num_depen, $email, $p_number, $m_status, $town, $street, $h_num, $m_income, $created_date);
	$stmt->execute();
	$error = $stmt->error;
	if($error){
		echo "Failed to insert record. ERROR: ".$error;
	} else{
		echo "New record inserted susccessfully....";
		header('Location: ../apply.php');
		exit;
	}		
	
	//Close database connection
	$stmt->close();
	$conn->close(); 

?>