<?php session_start() ?> 
<?php
/*
Template Name: Employment
*/

?>

<?php get_header(); ?>

	<div class="grid group">

		<section class="latest-news grid-1-1 single-blog-post">

			<h1 class="site-section-title employment-title h1"><span>.</span><?php echo the_title(); ?></h1>

			<article class="module-contact">

				<div class="opacity-circles sb-circle1"></div><div class="opacity-circles sb-circle2"></div>
				
				<div class="contact-form-tiki">

					<div id="contact-form">

						<h1>Employment Application</h1>
						
						<p>As we look forward to an upcoming fun and successful upcoming Season, Martell's Tiki Bar is accepting applications for employment.

If you wish to apply for our upcoming Season Employment, complete the following information. If selected for consideration, you will be contacted via email and/or phone.</p>

						<h2>Personal Information</h2>

					            <?php
								//init variables
								$cf = array();
								$sr = false;
								
								if(isset($_SESSION['cf_returndata'])){
									$cf = $_SESSION['cf_returndata'];
								 	$sr = true;
								}
					            ?>
					            <ul id="errors" class="<?php echo ($sr && !$cf['form_ok']) ? 'visible' : ''; ?>">
					                <li id="info">There were some problems with your Job Application:</li>
					                <?php 
									if(isset($cf['errors']) && count($cf['errors']) > 0) :
										foreach($cf['errors'] as $error) :
									?>
					                <li><?php echo $error ?></li>
					                <?php
										endforeach;
									endif;
									?>
					            </ul>

					            <p id="success" class="<?php echo ($sr && $cf['form_ok']) ? 'visible' : ''; ?>">Thank You for Applying! We will review your application carefully and get back to you ASAP!</p>

					            <form method="post" action="<?php bloginfo('stylesheet_directory'); ?>/employment-process.php">

					                <label for="fullname"> Full Name: <span class="required">*</span></label>
					                <input type="text" id="fullname" name="fullname" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['fullname'] : '' ?>" placeholder="John Doe" />
					                
					                <label for="street-address"> Street Address: <span class="required">*</span></label>
					                <input type="text" id="street-address" name="street-address" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['homeAdd'] : '' ?>" placeholder="123 Your Street" />

					               	<label for="csz"> City / State / Zip:  <span class="required">*</span></label>
					                <input type="text" id="csz" name="csz" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['cityStateZip'] : '' ?>" placeholder="e.g. Point Pleasant, NJ 08742" />

					                <label for="home-telephone">Home Telephone: </label>
					                <input type="tel" id="home-telephone" name="home-telephone" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['homePhone'] : '' ?>" placeholder="111-222-3333" />

					               	<label for="cell">Cell Phone: </label>
					                <input type="tel" id="cell" name="cell" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['cellPhone'] : '' ?>" placeholder="111-222-3333" />

													<label for="the-email">Email Address: <span class="required">*</span></label>
                					<input type="email" id="the-email" name="the-email" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['theEmail'] : '' ?>" placeholder="johndoe@example.com" />
					                
					               	<label for="legal">Do you have the legal right to work in the U.S.? <span class="required">*</span></label>
													<small>Yes</small><input type="radio" id="legal" name="legal" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['workLegally'] : '' ?>yes"><small> No </small><input type="radio" id="legal" name="legal" value="no">

													<label for="transport">Do you have reliable transportation? <span class="required">*</span></label>
													<small>Yes</small><input id="transport" type="radio" name="transport" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['transportation'] : '' ?>yes"><small> No </small><input id="transport" type="radio" name="transport" value="no"> 

													<h2>Placement Information</h2>

													<label for="position1">Position Sought:<small>  (choice one)</small> <span class="required">*</span> </label>
									        <select id="position1" name="position1" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['positionOne'] : '' ?>">  
									            <option value="General" <?php echo ($sr && !$cf['form_ok'] && $cf['posted_form_data']['enquiry'] == 'General') ? "selected='selected'" : '' ?>>Bartender</option>  
									            <option value="Sales" <?php echo ($sr && !$cf['form_ok'] && $cf['posted_form_data']['enquiry'] == 'Sales') ? "selected='selected'" : '' ?>>Bar Back</option>  
									            <option value="Support" <?php echo ($sr && !$cf['form_ok'] && $cf['posted_form_data']['enquiry'] == 'Support') ? "selected='selected'" : '' ?>>Bathroom Attendant</option>  
															<option value="Support" <?php echo ($sr && !$cf['form_ok'] && $cf['posted_form_data']['enquiry'] == 'Support') ? "selected='selected'" : '' ?>>Beach Badge Attendant</option>									       
							            		<option value="General" <?php echo ($sr && !$cf['form_ok'] && $cf['posted_form_data']['enquiry'] == 'General') ? "selected='selected'" : '' ?>>Bus Person</option>  
									            <option value="Sales" <?php echo ($sr && !$cf['form_ok'] && $cf['posted_form_data']['enquiry'] == 'Sales') ? "selected='selected'" : '' ?>>Candy Maker</option>  
									            <option value="Support" <?php echo ($sr && !$cf['form_ok'] && $cf['posted_form_data']['enquiry'] == 'Support') ? "selected='selected'" : '' ?>>Candy Preparation</option>  
															<option value="Support" <?php echo ($sr && !$cf['form_ok'] && $cf['posted_form_data']['enquiry'] == 'Support') ? "selected='selected'" : '' ?>>Cashier</option>									         
									            <option value="General" <?php echo ($sr && !$cf['form_ok'] && $cf['posted_form_data']['enquiry'] == 'General') ? "selected='selected'" : '' ?>>Clam Opener</option>  
									            <option value="Sales" <?php echo ($sr && !$cf['form_ok'] && $cf['posted_form_data']['enquiry'] == 'Sales') ? "selected='selected'" : '' ?>>Cook</option>  
									            <option value="Support" <?php echo ($sr && !$cf['form_ok'] && $cf['posted_form_data']['enquiry'] == 'Support') ? "selected='selected'" : '' ?>>Counter Person</option>  
															<option value="Support" <?php echo ($sr && !$cf['form_ok'] && $cf['posted_form_data']['enquiry'] == 'Support') ? "selected='selected'" : '' ?>>Floor Personnel / Security</option>									       
							            		<option value="General" <?php echo ($sr && !$cf['form_ok'] && $cf['posted_form_data']['enquiry'] == 'General') ? "selected='selected'" : '' ?>>Ice Cream Maker</option>  
									            <option value="Sales" <?php echo ($sr && !$cf['form_ok'] && $cf['posted_form_data']['enquiry'] == 'Sales') ? "selected='selected'" : '' ?>>Grill Person</option>  
									            <option value="Support" <?php echo ($sr && !$cf['form_ok'] && $cf['posted_form_data']['enquiry'] == 'Support') ? "selected='selected'" : '' ?>>Hostess / Host</option>  
															<option value="Support" <?php echo ($sr && !$cf['form_ok'] && $cf['posted_form_data']['enquiry'] == 'Support') ? "selected='selected'" : '' ?>>Maintenance Personnel</option>									         
									            <option value="Support" <?php echo ($sr && !$cf['form_ok'] && $cf['posted_form_data']['enquiry'] == 'Support') ? "selected='selected'" : '' ?>>Night Security</option>  
															<option value="Support" <?php echo ($sr && !$cf['form_ok'] && $cf['posted_form_data']['enquiry'] == 'Support') ? "selected='selected'" : '' ?>>Office / Clerical</option>									         
									            <option value="General" <?php echo ($sr && !$cf['form_ok'] && $cf['posted_form_data']['enquiry'] == 'General') ? "selected='selected'" : '' ?>>Pantry Personnel</option>  
									            <option value="Sales" <?php echo ($sr && !$cf['form_ok'] && $cf['posted_form_data']['enquiry'] == 'Sales') ? "selected='selected'" : '' ?>>Pizza Maker</option>  
									            <option value="Support" <?php echo ($sr && !$cf['form_ok'] && $cf['posted_form_data']['enquiry'] == 'Support') ? "selected='selected'" : '' ?>>Preparation Person</option>  
															<option value="Support" <?php echo ($sr && !$cf['form_ok'] && $cf['posted_form_data']['enquiry'] == 'Support') ? "selected='selected'" : '' ?>>Salt Water Taffy Maker</option>									       
							            		<option value="General" <?php echo ($sr && !$cf['form_ok'] && $cf['posted_form_data']['enquiry'] == 'General') ? "selected='selected'" : '' ?>>Sushi Chef</option>  
									            <option value="Sales" <?php echo ($sr && !$cf['form_ok'] && $cf['posted_form_data']['enquiry'] == 'Sales') ? "selected='selected'" : '' ?>>Waiter / Waitress</option>  
					                </select>

													<label for="position2">Position Sought:<small>  (choice two)</small> <span class="required">*</span> </label>
									        <select id="position2" name="position2" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['positionTwo'] : '' ?>">  
									            <option value="General" <?php echo ($sr && !$cf['form_ok'] && $cf['posted_form_data']['enquiry'] == 'General') ? "selected='selected'" : '' ?>>Bartender</option>  
									            <option value="Sales" <?php echo ($sr && !$cf['form_ok'] && $cf['posted_form_data']['enquiry'] == 'Sales') ? "selected='selected'" : '' ?>>Bar Back</option>  
									            <option value="Support" <?php echo ($sr && !$cf['form_ok'] && $cf['posted_form_data']['enquiry'] == 'Support') ? "selected='selected'" : '' ?>>Bathroom Attendant</option>  
															<option value="Support" <?php echo ($sr && !$cf['form_ok'] && $cf['posted_form_data']['enquiry'] == 'Support') ? "selected='selected'" : '' ?>>Beach Badge Attendant</option>									       
							            		<option value="General" <?php echo ($sr && !$cf['form_ok'] && $cf['posted_form_data']['enquiry'] == 'General') ? "selected='selected'" : '' ?>>Bus Person</option>  
									            <option value="Sales" <?php echo ($sr && !$cf['form_ok'] && $cf['posted_form_data']['enquiry'] == 'Sales') ? "selected='selected'" : '' ?>>Candy Maker</option>  
									            <option value="Support" <?php echo ($sr && !$cf['form_ok'] && $cf['posted_form_data']['enquiry'] == 'Support') ? "selected='selected'" : '' ?>>Candy Preparation</option>  
															<option value="Support" <?php echo ($sr && !$cf['form_ok'] && $cf['posted_form_data']['enquiry'] == 'Support') ? "selected='selected'" : '' ?>>Cashier</option>									         
									            <option value="General" <?php echo ($sr && !$cf['form_ok'] && $cf['posted_form_data']['enquiry'] == 'General') ? "selected='selected'" : '' ?>>Clam Opener</option>  
									            <option value="Sales" <?php echo ($sr && !$cf['form_ok'] && $cf['posted_form_data']['enquiry'] == 'Sales') ? "selected='selected'" : '' ?>>Cook</option>  
									            <option value="Support" <?php echo ($sr && !$cf['form_ok'] && $cf['posted_form_data']['enquiry'] == 'Support') ? "selected='selected'" : '' ?>>Counter Person</option>  
															<option value="Support" <?php echo ($sr && !$cf['form_ok'] && $cf['posted_form_data']['enquiry'] == 'Support') ? "selected='selected'" : '' ?>>Floor Personnel / Security</option>									       
							            		<option value="General" <?php echo ($sr && !$cf['form_ok'] && $cf['posted_form_data']['enquiry'] == 'General') ? "selected='selected'" : '' ?>>Ice Cream Maker</option>  
									            <option value="Sales" <?php echo ($sr && !$cf['form_ok'] && $cf['posted_form_data']['enquiry'] == 'Sales') ? "selected='selected'" : '' ?>>Grill Person</option>  
									            <option value="Support" <?php echo ($sr && !$cf['form_ok'] && $cf['posted_form_data']['enquiry'] == 'Support') ? "selected='selected'" : '' ?>>Hostess / Host</option>  
															<option value="Support" <?php echo ($sr && !$cf['form_ok'] && $cf['posted_form_data']['enquiry'] == 'Support') ? "selected='selected'" : '' ?>>Maintenance Personnel</option>									         
									            <option value="Support" <?php echo ($sr && !$cf['form_ok'] && $cf['posted_form_data']['enquiry'] == 'Support') ? "selected='selected'" : '' ?>>Night Security</option>  
															<option value="Support" <?php echo ($sr && !$cf['form_ok'] && $cf['posted_form_data']['enquiry'] == 'Support') ? "selected='selected'" : '' ?>>Office / Clerical</option>									         
									            <option value="General" <?php echo ($sr && !$cf['form_ok'] && $cf['posted_form_data']['enquiry'] == 'General') ? "selected='selected'" : '' ?>>Pantry Personnel</option>  
									            <option value="Sales" <?php echo ($sr && !$cf['form_ok'] && $cf['posted_form_data']['enquiry'] == 'Sales') ? "selected='selected'" : '' ?>>Pizza Maker</option>  
									            <option value="Support" <?php echo ($sr && !$cf['form_ok'] && $cf['posted_form_data']['enquiry'] == 'Support') ? "selected='selected'" : '' ?>>Preparation Person</option>  
															<option value="Support" <?php echo ($sr && !$cf['form_ok'] && $cf['posted_form_data']['enquiry'] == 'Support') ? "selected='selected'" : '' ?>>Salt Water Taffy Maker</option>									       
							            		<option value="General" <?php echo ($sr && !$cf['form_ok'] && $cf['posted_form_data']['enquiry'] == 'General') ? "selected='selected'" : '' ?>>Sushi Chef</option>  
									            <option value="Sales" <?php echo ($sr && !$cf['form_ok'] && $cf['posted_form_data']['enquiry'] == 'Sales') ? "selected='selected'" : '' ?>>Waiter / Waitress</option>  
					                </select> 

					                <label for="wage">Wage Rate Required: <span class="required">*</span></label>
					                <input type="text" id="wage" name="wage" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['wage'] : '' ?>" placeholder="$$$$" />

					               	<label for="hours">Total Hours Needed Per Week: <span class="required">*</span></label>
					                <input type="text" id="hours" name="hours" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['hours'] : '' ?>" placeholder="Hours???" />

					                <label for="oldEnough">If you are applying for a Server or Bartender Position, you must be old enough to handle liquor. Can you establish that age if offered a position? <span class="required">*</span></label>
													<small>Yes</small><input type="radio" id="oldEnough" name="oldEnough" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['oldEnough'] : '' ?>yes"><small> No </small><input type="radio" id="oldEnough" name="oldEnough" value="no"> 

					                <label for="skills">List Skills you have related to the job you are seeking: <span class="required">*</span></label>
					                <textarea id="skills" name="skills" placeholder="List all your awsome skills here!"><?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['skills'] : '' ?></textarea>
					                
					                <h2>Hours Available</h2>

					                <label for="monday">Monday: <span class="required">*</span></label>
					                <input type="text" id="monday" name="monday" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['monday'] : '' ?>" placeholder="From When to When??" />

					                <label for="tuesday">Tuesday: <span class="required">*</span></label>
					                <input type="text" id="tuesday" name="tuesday" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['tuesday'] : '' ?>" placeholder="From When to When??" />

					                <label for="wednesday">Wednesday: <span class="required">*</span></label>
					                <input type="text" id="wednesday" name="wednesday" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['wednesday'] : '' ?>" placeholder="From When to When??" />					                

					                <label for="thursday">Thursday: <span class="required">*</span></label>
					                <input type="text" id="thursday" name="thursday" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['thursday'] : '' ?>" placeholder="From When to When??" />

					                <label for="friday">Friday: <span class="required">*</span></label>
					                <input type="text" id="friday" name="friday" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['friday'] : '' ?>" placeholder="From When to When??" />

					                <label for="saturday">Saturday: <span class="required">*</span></label>
					                <input type="text" id="saturday" name="saturday" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['saturday'] : '' ?>" placeholder="From When to When??" />

					                <label for="sunday">Sunday: <span class="required">*</span></label>
					                <input type="text" id="sunday" name="sunday" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['sunday'] : '' ?>" placeholder="From When to When??" />

					                 <h2>Position Start & End Dates</h2>

					               	<label for="start-work">Date You Can Begin Employment: <span class="required">*</span></label>
					                <input type="date" id="start-work" name="start-work" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['startWork'] : '' ?>" placeholder="11/22/3344" />

					               	<label for="end-work">Date You Can Plan to End Employment: <span class="required">*</span></label>
					                <input type="date" id="end-work" name="end-work" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['endWork'] : '' ?>" placeholder="11/22/3344" />

					                <h2>General Information</h2>

													<label for="applied">Have you ever applied at Martell's? <span class="required">*</span></label>
													<small>Yes</small><input type="radio" id="applied" name="applied" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['applied'] : '' ?>yes"><small> No </small><input type="radio" id="applied" name="applied" value="no">

					               	<label for="ifYesApplied">If Yes, dates and locations: </label>
					                <input type="text" id="ifYesApplied" name="ifYesApplied" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['ifYesApplied'] : '' ?>" placeholder="11/22/3344 @ Big Momma's House" />

													<label for="everWorked">Have you ever worked for Martell's? </label>
													<small>Yes</small><input type="radio" id="everWorked" name="everWorked" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['everWorked'] : '' ?>yes"><small> No </small><input type="radio" id="everWorked" name="everWorked" value="no">

					               	<label for="ifYesWorked">If Yes, dates and locations: </label>
					                <input type="text" id="ifYesWorked" name="ifYesWorked" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['ifYesWorked'] : '' ?>" placeholder="11/22/3344 @ Big Momma's House" />

													<label for="everFired">Have you ever been fired? </label>
													<small>Yes</small><input type="radio" id="everFired" name="everFired" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['everFired'] : '' ?>yes"><small> No </small><input type="radio" id="everFired" name="everFired" value="no">

					               	<label for="ifYesFired">If Yes, Explain: </label>
					                <input type="text" id="ifYesFired" name="ifYesFired" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['ifYesFired'] : '' ?>" placeholder="Plead your case" />

													<label for="convicted">Have you ever been convicted of a crime, recieved a deffered adjudication, pled no contest, or been placed on probation for a crime (other than a minor traffic violation)? </label>
													<small>Yes</small><input type="radio" id="convicted" name="convicted" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['convicted'] : '' ?>yes"><small> No </small><input type="radio" id="convicted" name="convicted" value="no">

					               	<label for="ifYesJail">If Yes, Explain: </label>
					                <input type="text" id="ifYesJail" name="ifYesJail" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['ifYesJail'] : '' ?>" placeholder="Plead your case" />
					                <p><span class="required">** </span><small>Note - A yes answer is not an automatic disqualification</small></p>

													<label for="sickness">Do you have Hepatitus, Salmonella Typhi or any illness which can be spread by serving or preparing food?</label>
													<small>Yes</small><input type="radio" id="sickness" name="sickness" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['sickness'] : '' ?>yes"><small> No </small><input type="radio" id="sickness" name="sickness" value="no">

					               	<label for="ifYesSick">If Yes, Explain: </label>
					                <input type="text" id="ifYesSick" name="ifYesSick" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['ifYesSick'] : '' ?>" placeholder="Your answer here..." />

													<h2>Education / Qualifications</h2>

													<h4>School 1</h4>

					                <label for="schoolName1">School 1: <span class="required">*</span></label>
					                <input type="text" id="schoolName1" name="schoolName1" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['schoolName1'] : '' ?>" placeholder="the school you went to.." />

					                <label for="schoolLoc1">School location: <span class="required">*</span></label>
					                <input type="text" id="schoolLoc1" name="schoolLoc1" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['schoolLoc1'] : '' ?>" placeholder="Where was the School?" />

					                <label for="diploma1">Diploma, Training: <span class="required">*</span></label>
					                <input type="text" id="diploma1" name="diploma1" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['diploma1'] : '' ?>" placeholder="What did you finish with?" />

													<h4>School 2</h4>

					                <label for="schoolName2">School 1: <span class="required">*</span></label>
					                <input type="text" id="schoolName2" name="schoolName2" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['schoolName2'] : '' ?>" placeholder="the school you went to.." />

					                <label for="schoolLoc2">School location: <span class="required">*</span></label>
					                <input type="text" id="schoolLoc2" name="schoolLoc2" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['schoolLoc2'] : '' ?>" placeholder="Where was the School?" />

					                <label for="diploma2">Diploma, Training: <span class="required">*</span></label>
					                <input type="text" id="diploma2" name="diploma2" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['diploma2'] : '' ?>" placeholder="What did you finish with?" />

					                <h2>Employment History</h2>

					                <label for="contactEmployer">May we contact your Present Employer? <span class="required">*</span></label>
													<small>Yes</small><input type="radio" name="contactEmployer" id="contactEmployer" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['contactEmployer'] : '' ?>yes"><small> No </small><input type="radio" id="contactEmployer" name="contactEmployer" value="no"> 

													<h4>Current / Previous Employer 1</h4>

					                <label for="CompanyName1">Company Name: <span class="required">*</span></label>
					                <input type="text" id="CompanyName1" name="CompanyName1" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['CompanyName1'] : '' ?>" placeholder="the name of the company" />

					                <label for="companyAdd1">Address: <span class="required">*</span></label>
					                <input type="text" id="companyAdd1" name="companyAdd1" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['companyAdd1'] : '' ?>" placeholder="the address of the company" />

					                <label for="companyTel1">Telephone: <span class="required">*</span></label>
					                <input type="tel" id="companyTel1" name="companyTel1" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['companyTel1'] : '' ?>" placeholder="the phone number of the company" />

					                <label for="supervisor1">Supervisor's Name: <span class="required">*</span></label>
					                <input type="text" id="supervisor1" name="supervisor1" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['supervisor1'] : '' ?>" placeholder="Your supervisor's Name" />

					                <label for="jobtitle1 - Descripton">Job Title - Descripton: <span class="required">*</span></label>
					                <input type="text" id="jobtitle1" name="jobtitle1" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['jobtitle1'] : '' ?>" placeholder="description of what you did there" />

					                <label for="dateStartedComp1">Date Started: <span class="required">*</span></label>
					                <input type="date" id="dateStartedComp1" name="dateStartedComp1" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['dateStartedComp1'] : '' ?>" placeholder="11/22/3333" />

					                <label for="dateEndComp1">Date Ended: <span class="required">*</span></label>
					                <input type="date" id="dateEndComp1" name="dateEndComp1" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['dateEndComp1'] : '' ?>" placeholder="11/22/3333" />
					                
					                <label for="weeklyPayComp1">Weekly Pay: <span class="required">*</span></label>
					                <input type="text" id="weeklyPayComp1" name="weeklyPayComp1" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['weeklyPayComp1'] : '' ?>" placeholder="$$$$" />
					                
					                <label for="reasonLeavingComp1">Reason for Leaving: <span class="required">*</span></label>
					                <input type="text" id="reasonLeavingComp1" name="reasonLeavingComp1" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['reasonLeavingComp1'] : '' ?>" placeholder="reason why your not there anymore" />

													<h4>Current / Previous Employer 2</h4>

					                <label for="CompanyName2">Company Name: <span class="required">*</span></label>
					                <input type="text" id="CompanyName2" name="CompanyName2" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['CompanyName2'] : '' ?>" placeholder="the name of the company" />

					                <label for="companyAdd2">Address: <span class="required">*</span></label>
					                <input type="text" id="companyAdd2" name="companyAdd2" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['companyAdd2'] : '' ?>" placeholder="the address of the company" />

					                <label for="companyTel2">Telephone: <span class="required">*</span></label>
					                <input type="tel" id="companyTel2" name="companyTel2" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['companyTel2'] : '' ?>" placeholder="the phone number of the company" />

					                <label for="supervisor2">Supervisor's Name: <span class="required">*</span></label>
					                <input type="text" id="supervisor2" name="supervisor2" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['supervisor2'] : '' ?>" placeholder="Your supervisor's Name" />

					                <label for="jobtitle2">Job Title - Descripton: <span class="required">*</span></label>
					                <input type="text" id="jobtitle2" name="jobtitle2" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['jobtitle2'] : '' ?>" placeholder="description of what you did there" />

					                <label for="dateStartedComp2">Date Started: <span class="required">*</span></label>
					                <input type="date" id="dateStartedComp2" name="dateStartedComp2" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['dateStartedComp2'] : '' ?>" placeholder="11/22/3333" />

					                <label for="dateEndComp2">Date Ended: <span class="required">*</span></label>
					                <input type="date" id="dateEndComp2" name="dateEndComp2" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['dateEndComp2'] : '' ?>" placeholder="11/22/3333" />
					                
					                <label for="weeklyPayComp2">Weekly Pay: <span class="required">*</span></label>
					                <input type="text" id="weeklyPayComp2" name="weeklyPayComp2" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['weeklyPayComp2'] : '' ?>" placeholder="$$$$" />
					                
					                <label for="reasonLeavingComp2">Reason for Leaving: <span class="required">*</span></label>
					                <input type="text" id="reasonLeavingComp2" name="reasonLeavingComp2" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['reasonLeavingComp2'] : '' ?>" placeholder="reason why your not there anymore" />

					                <h2>Cover Letter</h2>

					                <label for="coverLetter">Cover Letter: <span class="required">*</span></label>
					                <textarea id="coverLetter" name="coverLetter" placeholder="Your awsome cover letter!" data-minlength="20"><?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['coverLetter'] : '' ?></textarea>
					                
					                <h2>Submission Notice</h2>

					                <small><p>I certify that the information provided in this on-line application by me is correct and understand that falsification of any information on this application or any interview or resume may result in denial of employment or immediate dismissal.
I authorize the references listed above to give you any and all information concerning my previous employment and any pertinent information they may have, personal or otherwise, and release all parties of all liability for any damage that may result from furnishing information to you. In return for being considered for employment, I release all Martell's from any liability which might arise from any investigation of me. I understand that nothing contained in this on-line employment application or in the granting of an interview creates an employment contract between Martell's Sea Breeze/Tiki Bar and myself for either employment or for the provision of any benefit. If an employment relationship is established, I understand that I have the right to terminate my employment at any time and that Martell's retains the same right.

Martell's Sea Breeze/Tiki Bar is an equal opportunity employer and complies with all discrimination laws. All qualified applicants receive consideration for employment without regard to sex, religion, race, color, national origin, age, disability or other classification protected by law. All offers are conditioned upon satisfactory evidence of identity and legal authority to work in the United States.</p></small>

													<label for="mustAgree">Your must choose one<span class="required">*</span></label>
													<small>I AGREE</small><input type="radio" id="mustAgree" name="mustAgree" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['mustAgree'] : '' ?>yes"><small> I DISAGREE </small><input type="radio" id="mustAgree" name="mustAgree" value="no">

					                <span id="loading"></span>
					                <input type="submit" value="SENDDD!!" id="submit-button" />
					                <p id="req-field-desc"><span class="required">*</span> indicates a required field</p>

					            </form>
					            <?php unset($_SESSION['cf_returndata']); ?>

					</div>

				</div>
				
				<div class=" opacity-circles sb-circle3"></div><div class="opacity-circles sb-circle4"></div>

			</article>

		</section>

	</div> <!-- END main-content-wrap -->

	</div> <!-- END main-bg -->

	</div> <!-- END GRID -->

	<?php get_footer(); ?>
