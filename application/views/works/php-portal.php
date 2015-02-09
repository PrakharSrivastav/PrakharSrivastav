<?php $this -> load -> view("templates/header"); ?>
<div class="col-sm-12 col-lg-12 col-xs-12 col-md-12 border-top-colored">
	<div class="thumbnail padding-5">
		<div class="text-center bg-white text-yellow no-margin h2 padding-5">
			Web portal powered by PHP, HTML and Jquery
		</div>
		<div class="thumbnail-body">
			<article class="">
				<div >
					<header class="padding-5 bg-white h3 text-center text-yellow no-margin-bottom">
						Project Details
					</header>
					<section class="border no-margin text-black padding-5">
						<h4>This is a portal developed for one of my client where he wanted to upload few fixed named csv/Excel files on the server and then persist them to the database. Before updating the database, the users were presented with a page preview where they could preview 10 rows per page. For rest of the pages, simple pagination was provided.</h4>
						<h5>Functional operation</h5>
						<ol>
							<li>
								PHP session tracking.
							</li>
							<li>
								PHP file upload and file parsing functionality.
							</li>
							<li>
								Created my own MVC framework for this simple app.
							</li>
							<li>
								PHP -MySql integration.
							</li>
							<li>
								Table sorting and pagination using JQuery.
							</li>
							<li>
								Used Object oriented PHP for all the relevant functionality.
							</li>
							<li>
								Utilizes PHPExcel library for reading Excel
							</li>
						</ol>

						<h5>Technologies used</h5>
						<ol>
							<li>
								HTML5/CSS
							</li>
							<li>
								JQuery
							</li>
							<li>
								<strong>PHP</strong> : Mysqli for database interactions. Swiftmailer for SMTP operations. PHPExcel for reports generation
							</li>
							<li>
								Mysql database
							</li>
						</ol>

						<p>
							Project url : <a href="http://prakharsrivastav.byethost33.com/Demo/">http://prakharsrivastav.byethost33.com/Demo/</a>
							<br />
							Please note that this is not the url to the actual project because the client did not permit to reveal his URL. This points out to the working demo on my webhost.
						</p>
					</section>

				</div>
			</article>
			<header class="padding-5 bg-white h3 text-center text-yellow snapshot-heading no-margin-bottom">
				Project Snapshot <small>(Click to expand and view screenshots)</small>
			</header>
			<div class="padding-5 project-snapshot border no-margin">

				<section class="padding-5">
					<header class="text-black text-center h4">
						Reports
					</header>
					<img src="<?php echo base_url(); ?>assets/img/portal.png" class="img-responsive no-padding full-width" />
					<footer class="text-center text-black">
						Application home page. Try uploading the file to see further validations.
					</footer>
				</section>
			</div>
		</div>
	</div>
</div>
</div>
<!-- main body end -->
<?php $this -> load -> view("templates/footer"); ?>