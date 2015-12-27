<?php $this->load->view("templates/header"); ?>
<div class="col-sm-12 col-lg-12 col-xs-12 col-md-12 border-top-colored">
    <div class="thumbnail padding-5">
        <div class="text-center bg-white text-yellow no-margin h2 padding-5">
            Ayjo Consulting : Website for Software Development Agency
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
                                Animated Homepage with Carousal and transition effect.
                            </li>
                            <li>
                                Services page for details list of services provided by the company.
                            </li>
                            <li>
                                Prices page for displaying the products and the services offered.
                            </li>
                            <li>
                                Contact page with feedback.
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
                                <strong>PHP-MySql</strong> 
                            </li>
                        </ol>
                        <p>
                            Website Url : <a target="_blank" href="http://www.ayjoconsulting.com/">http://www.ayjoconsulting.com/</a>
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
                    <img src="<?php echo base_url(); ?>assets/img/ayjo_home.png" class="img-responsive no-padding full-width" />
                    <footer class="text-center text-black">
                        Sliding images, Smooth transition effects and scroll based animation showcasing the diverse profile of the company.
                    </footer>
                </section>
                <section class="border-bottom padding-5">
                    <header class="text-black text-center h4">
                        Contact Page
                    </header>
                    <img src="<?php echo base_url(); ?>assets/img/ayjo_contact.png" class="img-responsive no-padding full-width" />
                </section>
                <section class="border-bottom padding-5">
                    <header class="text-black text-center h4">
                        Prices Page
                    </header>
                    <img src="<?php echo base_url(); ?>assets/img/ayjo_price.png" class="img-responsive no-padding full-width" />
                </section>
                
                <section class="border-bottom padding-5">
                    <header class="text-black text-center h4">
                        Services Page
                    </header>
                    <img src="<?php echo base_url(); ?>assets/img/ayjo_service.png" class="img-responsive no-padding full-width" />
                </section>
                

            </div>
        </div>
    </div>
</div>
</div>
<?php $this->load->view("templates/footer"); ?>