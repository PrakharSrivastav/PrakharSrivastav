<?php $this -> load -> view("templates/header"); ?>
<div class="col-sm-12 col-lg-12 col-xs-12 col-md-12 border-top-colored">
	<div class="thumbnail padding-5">
		<div class="text-center bg-white text-yellow h2 padding-5">
			Script to split an xml file into smaller xml files
		</div>
		<div class="thumbnail-body ">
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
								Reads the huge xmls from URL, file and other sources .
							</li>
							<li>
								Splits it into smaller xmls with configurable number of items for each child xml.
							</li>
							<li>
								Perform database manipulations.
							</li>
							<li>
								Reads the configuration from a configuration file for url,number of child xmls etc.
							</li>
							<li>
								In case of abort, capable of resuming from the last record.
							</li>
						</ol>

						<h5>Technologies used : PHP</h5>
						<ol>
							<li>
								Complete PHP based solution
							</li>
							<li>
								Uses PHP XMLReader, XMLWriter apis for xml
							</li>
						</ol>

						<p>
							Tuned for high performance.
							<br />
							If this interests you, I would re write this code as per your requirement
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
					<img src="<?php echo base_url(); ?>assets/img/xml-splitter.jpeg" class="full-width img-responsive no-padding" />
					<footer class="text-center text-black">
						I try not to display any part of code which might reveal the client information or code details.
					</footer>
				</section>

			</div>
		</div>
	</div>
</div>
</div>
<!-- main body end -->
<?php $this -> load -> view("templates/footer"); ?>