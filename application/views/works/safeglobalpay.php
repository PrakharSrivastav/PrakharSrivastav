<?php $this->load->view("templates/header"); ?>
<div class="col-sm-12 col-lg-12 col-xs-12 col-md-12 border-top-colored">
    <div class="thumbnail padding-5">
        <div class="text-center bg-white text-yellow no-margin h2 padding-5">
            Safeglobalpay : Payment gateway website
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
                                Single page website. JavaScript / JQuery based section to section scrolling.
                            </li>
                            <li>
                                Responsive design using @media queries and Twitter Bootstrap grids.
                            </li>
                            <li>
                                Hover based CSS effects. Accordian effect Terms and Condition section.
                            </li>
                            <li>
                                Feedback based contact form.
                            </li>
                            <li>
                                Social Media Integration (Twitter -feeds / Youtube).
                            </li>
                        </ol>

                        <h5>Technologies used</h5>
                        <ol>
                            <li>
                                <strong>HTML5 / CSS / Javascript / JQuery</strong> : Twitter Bootstrap's grid system with custom CSS
                            </li>
                            <li>
                                <strong>PHP</strong> : PHP-Codeigniter Framework/ Ajax based contact form submission.
                            </li>
                        </ol>
                        <p>
                            Demo Url : <a target="_blank" href="http://www.prakharsrivastav.com/safeglobal/">http://www.prakharsrivastav.com/safeglobal</a>
                            <br />
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
                    <img src="<?php echo base_url(); ?>assets/img/safeglobalpay.png" class="img-responsive no-padding full-width" />
                    <footer class="text-center text-black">
                        This single page application shows various sections of the page on the same webpage. You can click on the section titles (Home / About Us / Terms and Conditions / Contact ) on the header and the page automatically scrolls to the corresponding section.
                        <br>
                        You can also click on the next icon on each section to go to the next section and page smoothly transits to the corresponding section.  
                        <br>
                        The terms and condition section is put in a beautiful accordion section which can be expanded and collapsed on the button click. This page also has a contact section with a feedback option having a simple question that end user can answer to send a message.
                    </footer>
                </section>
                
            </div>
        </div>
    </div>
</div>
</div>
<?php $this->load->view("templates/footer"); ?>