<?php session_start() ?> 
<?php
/*
Template Name: Contact Page
*/

?>
<?php get_header(); ?>
	<div class="grid group">
		<section class="latest-news grid-1-1 single-blog-post">
			<h1 class="site-section-title latest-news-title contact-title h1"><span>&amp;</span><?php echo the_title(); ?></h1>
			<article class="module-contact">
				<div class="opacity-circles sb-circle1"></div><div class="opacity-circles sb-circle2"></div>
				<div class="contact-form-tiki">
<div id="contact-form">
	<h1>Get in Touch!</h1>
	<h2>Fill out our contact form below to get in touch with us!</h2>
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
                <li id="info">There were some problems with your form submission:</li>
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
            <p id="success" class="<?php echo ($sr && $cf['form_ok']) ? 'visible' : ''; ?>">Thanks for your message! We will get back to you ASAP!</p>            
            <form method="post" action="<?php bloginfo('stylesheet_directory'); ?>/process.php">
              
                <label for="name">Name: <span class="required">*</span></label>
                <input type="text" id="name" name="name" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['name'] : '' ?>" placeholder="John Doe" />
                
                <label for="email">Email Address: <span class="required">*</span></label>
                <input type="email" id="email" name="email" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['email'] : '' ?>" placeholder="johndoe@example.com" />
                
                <label for="telephone">Telephone: </label>
                <input type="tel" id="telephone" name="telephone" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['telephone'] : '' ?>" />
                
                <label for="message">Message: <span class="required">*</span></label>
                <textarea id="message" name="message" placeholder="Your message must be greater than 20 charcters" data-minlength="20"><?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['message'] : '' ?></textarea>
                
                <span id="loading"></span>
                <input type="submit" value="SENDDD!!" id="submit-button" />
                <p id="req-field-desc"><span class="required">*</span> indicates a required field</p>
            </form>
            <?php unset($_SESSION['cf_returndata']); ?>
</div>
				</div>
				<div class="opacity-circles sb-circle3"></div><div class="opacity-circles sb-circle4"></div>
			</article>
		</section>
	</div> <!-- END main-content-wrap -->
	</div> <!-- END main-bg -->
	</div> <!-- END GRID -->
	<?php get_footer(); ?>