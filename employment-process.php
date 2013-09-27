<?php
if( isset($_POST) ){
	
	//form validation vars
	$formok = true;
	$errors = array();
	
	//sumbission data
	$ipaddress = $_SERVER['REMOTE_ADDR'];
	$date = date('m/d/Y');
	$time = date('g:i a');
	
	//form data

	$fullname = $_POST['fullname'];	
	$homeAdd = $_POST['street-address'];
	$cityStateZip = $_POST['csz'];
	$homePhone = $_POST['home-telephone'];
	$cellPhone = $_POST['cell'];
	$theEmail = $_POST['the-email'];
	$workLegally = $_POST['legal'];
	$transportation = $_POST['transport'];

	$positionOne = $_POST['position1'];
	$positionTwo = $_POST['position2'];
	$wage = $_POST['wage'];
	$hours = $_POST['hours'];
	$oldEnough = $_POST['oldEnough'];
	$skills = $_POST['skills'];

	$monday = $_POST['monday'];
	$tuesday = $_POST['tuesday'];
	$wednesday = $_POST['wednesday'];
	$thursday = $_POST['thursday'];
	$friday = $_POST['friday'];
	$saturday = $_POST['saturday'];
	$sunday = $_POST['sunday'];

	$startWork = $_POST['start-work'];
	$endWork = $_POST['end-work'];

	$applied = $_POST['applied'];
	$ifYesApplied = $_POST['ifYesApplied'];
	$everWorked = $_POST['everWorked'];
	$ifYesWorked = $_POST['ifYesWorked'];
	$everFired = $_POST['everFired'];
	$ifYesFired = $_POST['ifYesFired'];
	$convicted = $_POST['convicted'];
	$ifYesJail = $_POST['ifYesJail'];
	$sickness = $_POST['sickness'];
	$ifYesSick = $_POST['ifYesSick'];

	$schoolName1 = $_POST['schoolName1'];
	$schoolLoc1 = $_POST['schoolLoc1'];
	$diploma1 = $_POST['diploma1'];
	$schoolName2 = $_POST['schoolName2'];
	$schoolLoc2 = $_POST['schoolLoc2'];
	$diploma2 = $_POST['diploma2'];

	$contactEmployer = $_POST['contactEmployer'];
	$CompanyName1 = $_POST['CompanyName1'];
	$companyAdd1 = $_POST['companyAdd1'];
	$companyTel1 = $_POST['companyTel1'];
	$supervisor1 = $_POST['supervisor1'];
	$jobtitle1 = $_POST['jobtitle1'];
	$dateStartedComp1 = $_POST['dateStartedComp1'];
	$dateEndComp1 = $_POST['dateEndComp1'];
	$weeklyPayComp1 = $_POST['weeklyPayComp1'];
	$reasonLeavingComp1 = $_POST['reasonLeavingComp1'];

	$CompanyName2 = $_POST['CompanyName2'];
	$companyAdd2 = $_POST['companyAdd2'];
	$companyTel2 = $_POST['companyTel2'];
	$supervisor2 = $_POST['supervisor2'];
	$jobtitle2 = $_POST['jobtitle2'];
	$dateStartedComp2 = $_POST['dateStartedComp2'];
	$dateEndComp2 = $_POST['dateEndComp2'];
	$weeklyPayComp2 = $_POST['weeklyPayComp2'];
	$reasonLeavingComp2 = $_POST['reasonLeavingComp2'];

	$coverLetter = $_POST['coverLetter'];

	$mustAgree = $_POST['mustAgree'];

// --------- END OF FORM DATA LIST

	//validate form data
	
	//validate name is not empty
	if(empty($fullname)){
		$formok = false;
		$errors[] = "You didn't enter your name";
	}
	
	//validate address is not empty
	if(empty($homeAdd)){
		$formok = false;
		$errors[] = "You didn't enter an address";
	}

		//validate city / state / zip is not empty
	if(empty($cityStateZip)){
		$formok = false;
		$errors[] = "You didn't enter anything for City / State / Zip";
	}

			//validate home phone is not empty
	if(empty($homePhone)){
		$formok = false;
		$errors[] = "You didn't enter your Home Phone Number";
	}

				//validate cell phone is not empty
	if(empty($cellPhone)){
		$formok = false;
		$errors[] = "You didn't enter your Cell Phone Number";
	}

	//validate email address is not empty
	if(empty($theEmail)){
		$formok = false;
		$errors[] = "You didn't enter an email address";
	//validate email address is valid
	}elseif(!filter_var($theEmail, FILTER_VALIDATE_EMAIL)){
		$formok = false;
		$errors[] = "You didn't enter a valid email address";
	}
	
				//validate legal is not empty
	if(empty($workLegally)){
		$formok = false;
		$errors[] = "You didn't check if you work legally";
	}

					//validate trans is not empty
	if(empty($transportation)){
		$formok = false;
		$errors[] = "You didn't check if you have transportation";
	}

					//validate positionOne is not empty
	if(empty($positionOne)){
		$formok = false;
		$errors[] = "You didn't check position 1";
	}

					//validate positionOne is not empty
	if(empty($positionTwo)){
		$formok = false;
		$errors[] = "You didn't check position 2";
	}

					//validate wage is not empty
	if(empty($wage)){
		$formok = false;
		$errors[] = "You didn't tell us your required wage";
	}

					//validate hours is not empty
	if(empty($hours)){
		$formok = false;
		$errors[] = "You didn't tell us your needed hours";
	}

						//validate oldEnough is not empty
	if(empty($oldEnough)){
		$formok = false;
		$errors[] = "Are you old enough???";
	}

	//validate skills is not empty
	if(empty($skills)){
		$formok = false;
		$errors[] = "You didn't tell us what your good at!";
	}

	//validate monday is not empty
	if(empty($monday)){
		$formok = false;
		$errors[] = "Hours available Mondays?!";
	}

		//validate tuesday is not empty
	if(empty($tuesday)){
		$formok = false;
		$errors[] = "Hours available Tuesdays?!";
	}

			//validate wed is not empty
	if(empty($wednesday)){
		$formok = false;
		$errors[] = "Hours available Wednesdays?!";
	}

				//validate thurs is not empty
	if(empty($thursday)){
		$formok = false;
		$errors[] = "Hours available Thursdays?!";
	}

				//validate fri is not empty
	if(empty($friday)){
		$formok = false;
		$errors[] = "Hours available Fridays?!";
	}

				//validate sat is not empty
	if(empty($saturday)){
		$formok = false;
		$errors[] = "Hours available Saturdays?!";
	}
					//validate sun is not empty
	if(empty($sunday)){
		$formok = false;
		$errors[] = "Hours available Sundays?!";
	}

		if(empty($startWork)){
		$formok = false;
		$errors[] = "When can you Start?!";
	}

			if(empty($endWork)){
		$formok = false;
		$errors[] = "When are you leaving?!";
	}

			if(empty($applied)){
		$formok = false;
		$errors[] = "Ever apply here before?!";
	}



				if(empty($everWorked)){
		$formok = false;
		$errors[] = "Ever work here before?!";
	}


				if(empty($everFired)){
		$formok = false;
		$errors[] = "Ever been fired before?!";
	}


					if(empty($convicted)){
		$formok = false;
		$errors[] = "Ever been convicted?!";
	}



					if(empty($sickness)){
		$formok = false;
		$errors[] = "Are you ILL?!";
	}



					if(empty($schoolName1)){
		$formok = false;
		$errors[] = "Whats your school's name?!";
	}

						//validate sun is not empty
	if(empty($schoolLoc1)){
		$formok = false;
		$errors[] = "Where is your school?";
	}

	//validate message is not empty
	if(empty($diploma1)){
		$formok = false;
		$errors[] = "What did you graduate with?";
	}

						if(empty($schoolName2)){
		$formok = false;
		$errors[] = "Whats your school's name?!";
	}

						//validate sun is not empty
	if(empty($schoolLoc2)){
		$formok = false;
		$errors[] = "Where is your school?";
	}

	//validate message is not empty
	if(empty($diploma2)){
		$formok = false;
		$errors[] = "What did you graduate with?";
	}

	if(empty($contactEmployer)){
		$formok = false;
		$errors[] = "Can we contact your employer?";
	}

						//validate sun is not empty
	if(empty($CompanyName1)){
		$formok = false;
		$errors[] = "Whats the name of the company?";
	}

	//validate message is not empty
	if(empty($companyAdd1)){
		$formok = false;
		$errors[] = "Whats the address of the company?";
	}

	if(empty($companyTel1)){
		$formok = false;
		$errors[] = "Whats the Phone number?";
	}

						//validate sun is not empty
	if(empty($supervisor1)){
		$formok = false;
		$errors[] = "Who was your supervisor?";
	}

	//validate message is not empty
	if(empty($jobtitle1)){
		$formok = false;
		$errors[] = "What was your job title?";
	}

	if(empty($dateStartedComp1)){
		$formok = false;
		$errors[] = "When did you start?";
	}

						//validate sun is not empty
	if(empty($dateEndComp1)){
		$formok = false;
		$errors[] = "When did you stop?";
	}

	//validate message is not empty
	if(empty($weeklyPayComp1)){
		$formok = false;
		$errors[] = "What was your weekly pay?";
	}

	//validate message is not empty
	if(empty($reasonLeavingComp1)){
		$formok = false;
		$errors[] = "What was the reason you left?";
	}

				//validate sun is not empty
	if(empty($CompanyName2)){
		$formok = false;
		$errors[] = "Whats the name of the company?";
	}

	//validate message is not empty
	if(empty($companyAdd2)){
		$formok = false;
		$errors[] = "Whats the address of the company?";
	}

	if(empty($companyTel2)){
		$formok = false;
		$errors[] = "Whats the Phone number?";
	}

						//validate sun is not empty
	if(empty($supervisor2)){
		$formok = false;
		$errors[] = "Who was your supervisor?";
	}

	//validate message is not empty
	if(empty($jobtitle2)){
		$formok = false;
		$errors[] = "What was your job title?";
	}

	if(empty($dateStartedComp2)){
		$formok = false;
		$errors[] = "When did you start?";
	}

						//validate sun is not empty
	if(empty($dateEndComp2)){
		$formok = false;
		$errors[] = "When did you stop?";
	}

	//validate message is not empty
	if(empty($weeklyPayComp2)){
		$formok = false;
		$errors[] = "What was your weekly pay?";
	}

	//validate message is not empty
	if(empty($reasonLeavingComp2)){
		$formok = false;
		$errors[] = "What was the reason you left?";
	}

	//validate message is not empty
	if(empty($mustAgree)){
		$formok = false;
		$errors[] = "Click agree or disagree..YOU MUST!";
	}

	//send email if all is ok

	if($formok){
		$headers = "From: info@tikibar.com" . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		
		$emailbody = "<p>Martell's Tiki Bar Online Job Application Form</p>

						<h1>Personal Information</h1>

					  <p><strong>Full Name: </strong> {$fullname} </p>
					  <p><strong>Home Address: </strong> {$homeAdd} </p>
					  <p><strong>City / State / Zip: </strong> {$cityStateZip} </p>
					  <p><strong>Home Phone: </strong> {$homePhone} </p>
					  <p><strong>Cell Phone: </strong> {$cellPhone} </p>
					  <p><strong>Email Address: </strong> {$theEmail} </p>
					  <p><strong>Legal Right to work here: </strong> {$workLegally} </p>
					  <p><strong>Transportation: </strong> {$transportation} </p>

						<h1>Placement Information</h1>

					  <p><strong>Job Position 1: </strong> {$positionOne} </p>
					  <p><strong>Job Position 1: </strong> {$positionTwo} </p>
					  <p><strong>Required Wage: </strong> {$wage} </p>
					  <p><strong>Total Hours Needed: </strong> {$hours} </p>
					  <p><strong>Old enough to handle liquor: </strong> {$oldEnough} </p>
					  <p><strong>Skills related to job being sought: </strong> {$skills} </p>

					  <h1>Hours Available</h1>

					  <p><strong>Mondays: </strong> {$monday} </p>
					  <p><strong>Tuesdays: </strong> {$tuesday} </p>
					  <p><strong>Wednesdays: </strong> {$wednesday} </p>
					  <p><strong>Thursdays: </strong> {$thursday} </p>
					  <p><strong>Fridays: </strong> {$friday} </p>
					  <p><strong>Saturdays: </strong> {$saturday} </p>
					  <p><strong>Sundays: </strong> {$sunday} </p>

					  <h1>Position Start & End Dates</h1>

					  <p><strong>Date can Start: </strong> {$startWork} </p>
					  <p><strong>Date plan to leave: </strong> {$endWork} </p>

					  <h1>General Information</h1>

					  <p><strong>Ever Applied at Martell's: </strong> {$applied} </p>
					  <p><strong>If yes, Dates and Locations: </strong> {$ifYesApplied} </p>
					  <p><strong>Ever worked for Martell's: </strong> {$everWorked} </p>
					  <p><strong>If yes, Dates and Locations: </strong> {$ifYesWorked} </p>
					  <p><strong>Ever been fired: </strong> {$everFired} </p>
					  <p><strong>If yes, Explain: </strong> {$ifYesFired} </p>
					  <p><strong>Ever been convicted of a crime: </strong> {$convicted} </p>
					  <p><strong>If yes, Explain: </strong> {$ifYesJail} </p>
					  <p><strong>Do you have Hepatitus, Salmonella Typhi or any illness which can be spread by serving or preparing food?: </strong> {$sickness} </p>
					  <p><strong>If yes, Explain: </strong> {$ifYesSick} </p>

					  <h1>Education / Qualifications</h1>

					  <p><strong>School 1: </strong> {$schoolName1} </p>
					  <p><strong>School location: </strong> {$schoolLoc1} </p>
					  <p><strong>Diploma, Training: </strong> {$diploma1} </p>
					  <p><strong>School 2: </strong> {$schoolName2} </p>
					  <p><strong>School location: </strong> {$schoolLoc2} </p>
					  <p><strong>Diploma, Training: </strong> {$diploma2} </p>

 						<h1>Employment History</h1>

 						<p><strong>May we contact your present employer: </strong> {$contactEmployer} </p>

 						<h2>Current / Previous Employer 1</h2>

					  <p><strong>Company Name: </strong> {$CompanyName1} </p>
					  <p><strong>Company Address: </strong> {$companyAdd1} </p>
					  <p><strong>Company Telephone: </strong> {$companyTel1} </p>
					  <p><strong>Supervisor's Name: </strong> {$supervisor1} </p>
					  <p><strong>Job title: </strong> {$jobtitle1} </p>
 						<p><strong>Date Started: </strong> {$dateStartedComp1} </p>
					  <p><strong>Date Ended: </strong> {$dateEndComp1} </p>
					  <p><strong>Weekly Pay: </strong> {$weeklyPayComp1} </p>
					  <p><strong>Reason for leaving: </strong> {$reasonLeavingComp1} </p>

 						<h2>Current / Previous Employer 2</h2>

					  <p><strong>Company Name: </strong> {$CompanyName2} </p>
					  <p><strong>Company Address: </strong> {$companyAdd2} </p>
					  <p><strong>Company Telephone: </strong> {$companyTel2} </p>
					  <p><strong>Supervisor's Name: </strong> {$supervisor2} </p>
					  <p><strong>Job title: </strong> {$jobtitle2} </p>
 						<p><strong>Date Started: </strong> {$dateStartedComp2} </p>
					  <p><strong>Date Ended: </strong> {$dateEndComp2} </p>
					  <p><strong>Weekly Pay: </strong> {$weeklyPayComp2} </p>
					  <p><strong>Reason for leaving: </strong> {$reasonLeavingComp2} </p>

						<h1>Cover Letter</h1>

						<p>{$coverLetter}</p>





					  

					  <p>This message was sent from the Tiki Bar Employee Application Form: on {$date} at {$time}</p>";
		
		mail("info@tikibar.com","New Job Application from Tiki Bar Website!",$emailbody,$headers);
		
	}
	
	//what we need to return back to our form
	$returndata = array(
		'posted_form_data' => array(
			'fullname' => $fullname,
			'homeAdd' => $homeAdd,
			'cityStateZip' => $cityStateZip,
			'homePhone' => $homePhone,
			'cellPhone' => $cellPhone,
			'theEmail' => $theEmail,
			'workLegally' => $workLegally,
			'transportation' => $transportation,
			'positionOne' => $positionOne,
			'positionTwo' => $positionTwo,
			'wage' => $wage,
			'hours' => $hours,
			'oldEnough' => $oldEnough,
			'skills' => $skills,
			'monday' => $monday,
			'tuesday' => $tuesday,
			'wednesday' => $wednesday,
			'thursday' => $thursday,
			'friday' => $friday,
			'saturday' => $saturday,
			'sunday' => $sunday,
			'startWork' => $startWork,
			'endWork' => $endWork,
			'applied' => $applied,
			'ifYesApplied' => $ifYesApplied,
			'everWorked' => $everWorked,
			'ifYesWorked' => $ifYesWorked,
			'everFired' => $everFired,
			'ifYesFired' => $ifYesFired,
			'convicted' => $convicted,
			'ifYesJail' => $ifYesJail,
			'sickness' => $sickness,
			'ifYesSick' => $ifYesSick,
			'schoolName1' => $schoolName1,
			'schoolLoc1' => $schoolLoc1,
			'diploma1' => $diploma1,
			'schoolName2' => $schoolName2,
			'schoolLoc2' => $schoolLoc2,
			'diploma2' => $diploma2,
			'contactEmployer' => $contactEmployer,
			'CompanyName1' => $CompanyName1,
			'companyAdd1' => $companyAdd1,
			'companyTel1' => $companyTel1,
			'supervisor1' => $supervisor1,
			'jobtitle1' => $jobtitle1,
			'dateStartedComp1' => $dateStartedComp1,
			'dateEndComp1' => $dateEndComp1,
			'weeklyPayComp1' => $weeklyPayComp1,
			'reasonLeavingComp1' => $reasonLeavingComp1,
			'CompanyName2' => $CompanyName2,
			'companyAdd2' => $companyAdd2,
			'companyTel2' => $companyTel2,
			'supervisor2' => $supervisor2,
			'jobtitle2' => $jobtitle2,
			'dateStartedComp2' => $dateStartedComp2,
			'dateEndComp2' => $dateEndComp2,
			'weeklyPayComp2' => $weeklyPayComp2,
			'reasonLeavingComp2' => $reasonLeavingComp2,
			'coverLetter' => $coverLetter,
			'mustAgree' => $mustAgree
		),
		'form_ok' => $formok,
		'errors' => $errors
	);
		
	
	//if this is not an ajax request
	if(empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) !== 'xmlhttprequest'){
		//set session variables
		session_start();
		$_SESSION['cf_returndata'] = $returndata;
		
		//redirect back to form
		header('location: ' . $_SERVER['HTTP_REFERER']);
	}
}
