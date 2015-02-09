<?php $this -> load -> view("templates/header"); ?>
<div class="col-sm-12 col-lg-12 col-xs-12 col-md-12 border-top-colored">
	<div class="thumbnail padding-5">
		<div class="text-center bg-white text-yellow no-margin h2 padding-5">
			XML /CSV parsing using PHP
		</div>
		<div class="thumbnail-body">
			<article class="">
				<div >
					<header class="padding-5 bg-white h3 text-center text-yellow no-margin-bottom">
						Project Details
					</header>
					<section class="border no-margin text-black padding-5">
						<h4>This project involved developing a script for parsing the xml/csv feeds from internet and expose a PHP interface to insert the data into the database</h4>
						<h5>Functional operation:</h5>
						<ol>
							<li>
								Read the mime-type of the feed from the http url (and/or file system).
							</li>
							<li>
								If the mime type corresponds to xml, create a parser that converts the xml feed to an array and exposes an interface to write them to database.
							</li>
							<li>
								If the url corresponds to a csv file, then parse the csv into an array and expose it to be written onto the database.
							</li>
							<li>
								Optionally, write the file to a local disk.
							</li>
						</ol>

						<h5>Technologies used : PHP</h5>
						<ol>
							<li>
								Clean object oriented classes for parsing operations
							</li>
							<li>
								Uses PHP apis/libraries like XMLReader, SimpleXMLReader for xml
							</li>
						</ol>

						<p>
							Tuned for high performance. the scripts are capable of parsing more than 500 mb of data within a minute.(Depends on internet connection speed)
							<br />
							If you need something similar, I would be more than happy to rewrite this functionality for you.
							<br />
							I can provide you with a working demo url on request.
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
						Sample snapshot
					</header>
					<img src="<?php echo base_url(); ?>assets/img/xml.png" class="full-width img-responsive no-padding" />
					<footer class="text-center text-black">
						Screenshot of part of code. I try not to display any part of code which might reveal the client information or code details.
					</footer>
				</section>

			</div>
		</div>
	</div>
</div>
</div>
<!-- main body end -->
<?php $this -> load -> view("templates/footer"); ?>