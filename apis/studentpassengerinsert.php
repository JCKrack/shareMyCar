<?php
	//access control
	//allow access from outside the server
	header('Access-Control-Allow-Origin: *');
	//allow methods
	header('Access-Control-Allow-Methods: POST');

	require_once($_SERVER['DOCUMENT_ROOT'].'/apis/models/studentpassenger.php');
	require_once($_SERVER['DOCUMENT_ROOT'].'/apis/models/university.php');
	require_once($_SERVER['DOCUMENT_ROOT'].'/apis/models/user.php');

	//POST
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		//check parameters
		if (isset($_POST['lastName']) &&
			isset($_POST['secondLastName']) &&
			isset($_POST['name']) &&
			isset($_POST['birthDate']) &&
			isset($_POST['email']) &&
			isset($_POST['university']) &&
			isset($_POST['cellphone']) &&
			isset($_POST['controlNumber']) &&
			isset($_POST['studentId']) &&
			isset($_POST['password']) &&
			isset($_POST['payAccount'])) {
				//validation
				$errorU = false;

				try 
				{
					$u = new University($_POST['university']);
				}
				catch(RecordNotFoundException $ex) 
				{
					$errorU = true; //found error
					echo json_encode(array(
						'status' => 3,
						'errorMessage' => 'Invalid University'
					));
				}

				if (!$errorU) 
				{
					$sp = new StudentPassenger();

					//assign values
					$sp->setName($_POST['name']);
					$sp->setLastName($_POST['lastName']);
					$sp->setSecondLastName($_POST['secondLastName']);
					$sp->setBirthDate($_POST['birthDate']);
					$sp->setEmail($_POST['email']);
					$sp->setCellphone($_POST['cellphone']);
					$sp->setUniversity($u);
					$sp->setControlNumber($_POST['controlNumber']);
					$sp->setStudentId($_POST['studentId']);
					$sp->setPayAccount($_POST['payAccount']);

					$us = new User();
					$us->setPassword($_POST['password']);

					//add
					if ($sp->add())
					{


						echo json_encode(array(
							'status' => 0,
							'errorMessage' => 'User added successfully'
						));

					}
					else
					{
						echo json_encode(array(
							'status' => 3,
							'errorMessage' => 'Could not add user'
						));
						
					}
						
				}
			}
		else
			echo json_encode(array(
				'status' => 1,
				'errorMessage' => 'Missing Parameters'
			));
			
		
	}
	
?>