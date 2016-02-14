<?php $this -> load -> view("templates/header"); ?>
<div class="col-sm-12 col-lg-12 col-xs-12 col-md-12 border-top-colored">
	<div class="thumbnail padding-5">
		<div class="text-center bg-white text-yellow no-margin h2 padding-5">
			Fully Responsive fixed left menu website utilizing twitter Bootstrap and Laravel frameworks
		</div>
		<div class="thumbnail-body">
			<article class="">
				<div >
					<header class="padding-5 bg-white h3 text-center text-yellow no-margin-bottom">
						Project Details <small>(This is a demo project)</small>
					</header>
					<section class="border no-margin text-black padding-5">
						<h4>This project involved developing a script for parsing the xml/csv feeds from internet and expose a PHP interface to insert the data into the database</h4>
						<h5>Functional operation:</h5>
						<ol>
							<li>
								Fixed left side menu.
							</li>
							<li>
								Fully responsive.
							</li>
							<li>
								Uses bootstrap 3.2 features to accommodate aesthetically nice webpages.
							</li>
							<li>
								Laravel (PHP) framework on backend.
							</li>
							<li>
								Menu shifts to top when browser size is reduced.
							</li>
							<li>
								Features Jquery slider to show hidden content on mouse hover on Products menu Item.
							</li>
							<li>
								Menu items toggle between text and icons
							</li>
						</ol>
						<h5>Technologies used :</h5>
						<ol>
							<li>
								HTML5, Twitter Bootstrap framework components
							</li>
							<li>
								CSS3
							</li>
							<li>
								JQuery
							</li>
							<li>
								PHP: Laravel framework
							</li>
						</ol>
						<p>
							Demo Url : <a target="_blank" href=" http://prakharsrivastav.byethost33.com/WindowsLikeTheme/public/index">http://prakharsrivastav.byethost33.com/ WindowsLikeTheme/public/index</a>
						</p>
					</section>

				</div>
			</article>
			<header class="padding-5 bg-white h3 text-center text-yellow snapshot-heading no-margin-bottom">
				Project Snapshot <small>(Click to expand and view screenshots)</small>
			</header>
			<div class="padding-5 project-snapshot border no-margin">

				<section class="padding-5 border-bottom">
					<header class="text-black text-center h4">
						Sample snapshot
					</header>
					<img src="<?php echo base_url(); ?>assets/img/laravel-homepage.png" class="full-width img-responsive no-padding" />
					<footer class="text-center text-black">
						Hover over the menu item 3 for awesome scrolling effect to reveal the hidden content.
					</footer>
				</section>
				<section class="padding-5">
					<header class="text-black text-center h4">
						Sample snapshot
					</header>
					<img src="<?php echo base_url(); ?>assets/img/slider.png" class="full-width img-responsive no-padding" />
					<footer class="text-center text-black">
						Hidden content on menu hover
					</footer>
				</section>
			</div>
		</div>
	</div>
</div>
</div>
<!-- main body end -->
<?php $this -> load -> view("templates/footer"); ?>