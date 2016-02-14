<?php $this -> load -> view("templates/header"); ?>
<section class="col-lg-12 col-md-12 col-sm-12 col-xs-12 border-top-colored">
	<article>
		<div>
			<div class="row ">
				<div class="contact-page-intro">
					<strong>Hello! </strong>
				</div>
				<div class="contact-page-intro">
					I am always open to making new contacts, friends and folks to bounce cool ideas with.
					To get in touch with me for general information, to discuss particulars of a project or simply toss around some interesting ideas, drop me a note via contact details below.
					<br />
					<br />
					I will do my best to get back to you as soon as I can.
				</div>
			</div>
			<hr />
		</div>
		<div class="row">
			<div id="status" class="text-center bold text-white bg-colored h3">
				<?php 
					if(isset($success) AND $success) 
						echo "Message is sent successfully."; 
				?>
			</div>
			<?php if(isset($success) AND $success){ ?>
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<form action="<?php echo base_url()."developer/send_message"; ?>" method ="POST" id="contact-form" class="form-horizontal bold">
					<fieldset>
						<div class = "input-group">
							<div class="input-group-addon bg-colored text-white border-colored">
								<i class="fa fa-user"></i>
							</div>
							<input type = "text" id="name" name="name" placeholder="Your Name (at least 3 characters)" 
							class="contact input-sm form-control border-colored"  value="" required>
						</div>
						<span id ="name-error" class="error-message"><?php echo form_error('name'); ?></span>
						<br />
						<div class = "input-group">
							<div class="input-group-addon bg-colored border-colored text-white">
								<i class="fa fa-envelope"></i>
							</div>
							<input type = "email" id="email" name="email" placeholder="Your Email-id so that I can reply to you" 
							class="contact input-sm border-colored form-control" value="" required>
						</div>
						<span id ="email-error" class="error-message"><?php echo form_error('email'); ?></span>
						<br />
						<div class = "input-group">
							<div class="input-group-addon border-colored bg-colored text-white">
								<i class="fa fa-star"></i>
							</div>
							<select id="subject" name="subject" class="contact input-sm form-control border-colored"  required>
								<option selected value="">What's your purpose</option>
								<option value="general-enquiry">General Enquiry</option>
								<option value="recruitment">Recruitment</option>
								<option value="feedback">Feedback</option>
								<option value="other">Other</option>
							</select>
						</div>
						<span id ="subject-error" class="error-message"><?php echo form_error('subject'); ?></span>
						<br />
						<div class = "input-group">
							<div class="input-group-addon bg-colored border-colored text-white">
								<i class="fa fa-comment"></i>
							</div>
							<textarea name="message_content" id="message_content" required
								class="contact form-control border-colored"  rows="5" 
								placeholder="How can I help? What's your timeline? Do you have a budget in mind? Tell me all your queries and I would get back to you at my earliest."></textarea>
						</div>
						<span id ="message_content-error" class="error-message"><?php echo form_error('message_content'); ?></span>
						<br />
						<div class = "input-group">
							<div class="input-group-addon border-colored bg-colored text-white">
								<i class="fa fa-plus"></i>
							</div>
							<input type = "text" id="question" name="question" value="" required
							placeholder="What is 1+3 ??" class="contact input-sm form-control border-colored" pattern="\d" title="Your answer should be a number">
						</div>
						<span id ="question-error" class="error-message"><?php echo form_error('question'); ?></span>
						<br />
						<input type="submit" value="Send Message" id="send_message" class="form-control bold text-white input-sm btn bg-colored btn-block">
					</fieldset>
				</form>
			</div>
			<?php } else { ?>
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<form action="<?php echo base_url()."developer/send_message"; ?>" method ="POST" id="contact-form" class="form-horizontal bold">
					<fieldset>
						<div class = "input-group">
							<div class="input-group-addon bg-colored text-white border-colored">
								<i class="fa fa-user"></i>
							</div>
							<input type = "text" id="name" name="name" placeholder="Your Name (at least 3 characters)" 
							class="contact input-sm form-control border-colored"  value="<?php echo set_value('name'); ?>" required>
						</div>
						<span id ="name-error" class="error-message"><?php echo form_error('name'); ?></span>
						<br />
						<div class = "input-group">
							<div class="input-group-addon bg-colored border-colored text-white">
								<i class="fa fa-envelope"></i>
							</div>
							<input type = "email" id="email" name="email" placeholder="Your Email-id so that I can reply to you" 
							class="contact input-sm border-colored form-control" value="<?php echo set_value('email'); ?>" required>
						</div>
						<span id ="email-error" class="error-message"><?php echo form_error('email'); ?></span>
						<br />
						<div class = "input-group">
							<div class="input-group-addon border-colored bg-colored text-white">
								<i class="fa fa-star"></i>
							</div>
							<select id="subject" name="subject" class="contact input-sm form-control border-colored"  required>
								<option selected value="">What's your purpose</option>
								<option value="general-enquiry" <?php echo  set_select('subject', 'general-enquiry'); ?>>General Enquiry</option>
								<option value="recruitment" <?php echo  set_select('subject', 'recruitment'); ?>>Recruitment</option>
								<option value="feedback" <?php echo  set_select('subject', 'feedback'); ?>>Feedback</option>
								<option value="other" <?php echo  set_select('subject', 'other'); ?>>Other</option>
							</select>
						</div>
						<span id ="subject-error" class="error-message"><?php echo form_error('subject'); ?></span>
						<br />
						<div class = "input-group">
							<div class="input-group-addon bg-colored border-colored text-white">
								<i class="fa fa-comment"></i>
							</div>
							<textarea name="message_content" id="message_content" required
								class="contact form-control border-colored"  rows="5" 
								placeholder="How can I help? What's your timeline? Do you have a budget in mind? Tell me all your queries and I would get back to you at my earliest."><?php echo trim(set_value('message_content')); ?></textarea>
						</div>
						<span id ="message_content-error" class="error-message"><?php echo form_error('message_content'); ?></span>
						<br />
						<div class = "input-group">
							<div class="input-group-addon border-colored bg-colored text-white">
								<i class="fa fa-plus"></i>
							</div>
							<input type = "text" id="question" name="question" value="<?php echo set_value('question'); ?>" required
							placeholder="What is 1+3 ??" class="contact input-sm form-control border-colored" pattern="\d" title="Your answer should be a number">
						</div>
						<span id ="question-error" class="error-message"><?php echo form_error('question'); ?></span>
						<br />
						<input type="submit" value="Send Message" id="send_message" class="form-control bold text-white input-sm btn bg-colored btn-block">
					</fieldset>
				</form>
			</div>
			<?php } ?>
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" id="contact-info">
				<div>
					<span class="contact-page-intro">I keenly look forward to your requests, feedback and comments. If this form does not suffice your needs, here are few alternate ways to get in touch with me. </span>
					<br />
					<hr />
					<br />
					<br />
					<div class="h4 text-black text-center" id="alternate-contact">

						<a href="mailto:srivprakhar@gmail.com" target="_blank" class="gmail text-red" ><i class="fa fa-3x fa-google"></i></a>&nbsp;

						<a href="http://in.linkedin.com/pub/prakhar-srivastav/12/574/2b9/" target="_blank" class="linkedin text-blue" 	><i class="fa fa-3x fa-linkedin-square "></i></a>&nbsp;

						<a href="skype:prakhar.srivastav1?chat" class="skype text-lightblue"><i class="fa fa-3x fa-skype"></i></a>
						<a href="https://www.freelancer.in/affiliates/email/11649299/" target="_blank">
							<img style="height:45px;margin-bottom:25px;border-radius: 5px" src="https://www.freelancer.in/favicon.ico">
						</a>
					</div>
					<br />
					<br />
					<hr />
					<span class="h5 bold">PS : Please do not contact me if you are selling something or about link exchanges and similar stuff. I will not reply to those requests. </span>
				</div>
			</div>
		</div>
	</article>
</section>
</div>

<?php $this -> load -> view("templates/footer"); ?>