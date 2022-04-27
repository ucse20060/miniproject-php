<?php 
session_start();
include_once $_SERVER['sdckbank']. 'C:\wamp\www\PROJECT1\Bankpage\conn.php';

if (isset($_POST['transfer'])) {
	$Account_number = trim(mysqli_real_escape_string($conn,$_POST['account_number']));
	$amount_to_send   = trim(mysqli_real_escape_string($conn,$_POST['amount_to_send']));
	$Account_name    = trim(mysqli_real_escape_string($conn,$_POST['account_name']));

	if(empty($Account_number) || empty($amount_to_send) || empty($Account_name)){
		header("Transfer.php? please fill the space ");
		exit();
	}


	else{
		$check_data = "SELECT  * FROM banksystem WHERE accountnumber = '".$Account_number."' and username  = '".$Account_name."' ";

		$query_database = mysqli_query($conn,$check_data);

		if (mysqli_num_rows($query_database) > 0) {
			if ($row_data = mysqli_fetch_assoc($query_database)) {
				$_SESSION['total'] = $row_data['totalamount'];
				if ($_SESSION['totalamount'] >= $amount_to_send) {
				mysqli_begin_transaction($conn);
				$update_amount = "UPDATE banksystem SET totalamount= '".$_SESSION['totalamount']."' - '".$amount_to_send."'   where username = '".$_SESSION['username']."'  ";
				mysqli_query($conn,$update_amount);

				$update_totalamount  = "UPDATE banksystem SET totalamount = '".$amount_to_send."' + '".$_SESSION['total']."'   where username= '".$Account_name."'  ";
				mysqli_query($conn,$update_totalamount);
				mysqli_commit($conn);
				header("Transfer.php");
			
				exit();

				}else{
						header("traansfererror.php");
			
						exit();

				}
			}
			
		}else{
			echo "<h1> Account  number does not exit";
		}

		

	}

}