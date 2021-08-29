<?php
include 'includes/conn.php'; 


	$output = array();

	$conn = $pdo->open();


    if (isset($_GET['province_id'])) {
    
		$stmt = $conn->prepare("SELECT * FROM amphures WHERE province_id={$_GET['province_id']}");
		$stmt->execute();
	
		
		foreach($stmt as $row){
			array_push($output, $row);
		}

		

    } elseif (isset($_GET['group_id'])) {

		$stmt = $conn->prepare("SELECT * FROM districts WHERE amphure_id={$_GET['group_id']}");
		$stmt->execute();
	
		foreach($stmt as $row){
			array_push($output, $row);
		}

	} elseif (isset($_GET['group_id2'])) {

		$stmt = $conn->prepare("SELECT * FROM districts WHERE id={$_GET['group_id2']}");
		$stmt->execute();
	
		foreach($stmt as $row){
			array_push($output, $row);
		}



	} elseif (isset($_GET['Proviance'])) {

		$stmt = $conn->prepare("SELECT id,name_th FROM provinces ");
		$stmt->execute();

		foreach($stmt as $row){
			array_push($output, $row);
		}

    }



	$pdo->close();
	echo json_encode($output);




