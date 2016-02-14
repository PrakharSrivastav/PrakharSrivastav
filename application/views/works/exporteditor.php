<?php $this->load->view("templates/header"); ?>
<div class="col-sm-12 col-lg-12 col-xs-12 col-md-12 border-top-colored">
    <div class="thumbnail padding-5">
        <div class="text-center bg-white text-yellow no-margin h2 padding-5">
            ExportEditor : A web based tool to upload/parse CSV, JS validate and email
        </div>
        <div class="thumbnail-body">
            <article class="">
                <div >
                    <header class="padding-5 bg-white h2 text-center text-yellow no-margin-bottom">
                        Project Details
                    </header>
                    <section class="border no-margin text-black padding-5">
                        <h4>This project involved:</h4>
                        <h5>Functional operation</h5>
                        <ol>
                            <li>
                                Uploading the CSV file to the server.
                            </li>
                            <li>
                                Displaying the data in the text boxes available for edits.
                            </li>
                            <li>
                                Options to generate, view, download and delete reports(previous reports as well).
                            </li>
                            <li>
                                After data validation and report generation, present the user with an option to customize an email, based on the data edited on previous page.
                            </li>
                            <li>
                                Configure email settings (To, CC, subject line, email body) on the web page.
                            </li>
                            <li>
                                Send the email to test and real accounts.
                            </li>
                        </ol>

                        <h5>Technologies used</h5>
                        <ol>
                            <li>
                                <strong>HTML5/CSS</strong> : Utilized Twitter Bootstrap's grid system with custom CSS
                            </li>
                            <li>
                                <strong>Javascript</strong> (no JQuery)
                            </li>
                            <li>
                                <strong>PHP</strong> : Mysqli for database interactions. Swiftmailer for SMTP operations. PHPExcel for reports generation
                            </li>
                        </ol>

                        <p>
                            The application is higly optimized for performance and no performance issues has been reported so far by the client.
                            <br />
                            I can provide you with a working demo url on request.
                        </p>
                    </section>

                </div>
            </article>
            <header class="padding-5 bg-white h2 text-center text-yellow snapshot-heading no-margin-bottom">
                Project Snapshot <small>(Click to expand and view screenshots)</small>
            </header>
            <div class="padding-5 project-snapshot border no-margin">

                <section class="border-bottom padding-5">
                    <header class="text-black text-center h4">
                        Home Page
                    </header>
                    <img src="<?php echo base_url(); ?>assets/img/homepage.png" class="img-responsive no-padding" />
                    <footer class="text-center text-black">
                        Home page of the application
                    </footer>
                </section>
                <section class="border-bottom padding-5">
                    <header class="text-black text-center h4">
                        Upload preview
                    </header>
                    <img src="<?php echo base_url(); ?>assets/img/upload_preview_50.png" class="img-responsive no-padding full-width" />
                    <footer class="text-center text-black">
                        Preview page. Options to generate,download and delete reports. Link to proceed to next page
                    </footer>
                </section>
                <section class="border-bottom padding-5">
                    <header class="text-black text-center h4">
                        Email configurations
                    </header>
                    <img src="<?php echo base_url(); ?>assets/img/draft_email.png" class="img-responsive no-padding full-width" />
                    <footer class="text-center text-black">
                        Email configuration page. Set To and CC fields. Edit the subject and body, if required. select test or production
                    </footer>
                </section>
                <section class="border-bottom padding-5">
                    <header class="text-black text-center h4">
                        Succesful email
                    </header>
                    <img src="<?php echo base_url(); ?>assets/img/successful_email.png" class="img-responsive no-padding full-width" />
                    <footer class="text-center text-black">
                        Ajax response message on successful email
                    </footer>
                </section>
                <section class="padding-5">
                    <header class="text-black text-center h4">
                        Reports
                    </header>
                    <img src="<?php echo base_url(); ?>assets/img/reports.png" class="img-responsive no-padding full-width" />
                    <footer class="text-center text-black">
                        Option to preview the reports for the earlier emails
                    </footer>
                </section>
            </div>
        </div>
    </div>
</div>
</div>
<?php $this->load->view("templates/footer"); ?>