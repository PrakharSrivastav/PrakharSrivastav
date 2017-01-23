<?php $this->load->view("templates/header"); ?>
<div class="col-sm-12 col-lg-12 col-xs-12 col-md-12 border-top-colored">
    <div class="thumbnail padding-5">
        <div class="text-center bg-white text-yellow no-margin h2 padding-5">
            Magic Meal : An online food ordering website
        </div>
        <div class="thumbnail-body">
            <article class="">
                <div >
                    <header class="padding-5 bg-white h2 text-center text-yellow no-margin-bottom">
                        Project Details
                    </header>
                    <section class="border no-margin text-black padding-5">
                        <p>
                            This project involved creating the mockup of the website from the provided design documents and website references. The webpages contain custom JavaScript and CSS animations with sleek HTML Inerfaces.
                            The website also involves html5 - video integration on the homepage while maintaining the website responsive at all the viewports. The wesite involves Google Maps API integration and a fancy JavaScript driven price calculator.
                        </p>
                        <h4>Functional operation</h4>
                        <ol>
                            <li>
                                Food ordering website with Google Maps API Integration. Uses JavaScript Location API to calculate Latitude and Longitude.
                            </li>
                            <li>
                                JavaScript / JQuery Driven price Calculator. Custom CSS and JavaScript based animations.
                            </li>
                            <li>
                                Custom scrollable sidebar (<a target="_blank" href="http://prakharsrivastav.com/restaurant/menu-loggedin.html">click</a> to view)
                            </li>
                            <li>
                                Bootstrap Modal based location finder and login system
                            </li>
                            <li>
                                Completely responsive at all the viewports.
                            </li>
                        </ol>

                        <h5>Technologies used</h5>
                        <ol>
                            <li>
                                <strong>HTML5 / CSS / Javascript / JQuery</strong> : Twitter Bootstrap's grid system with custom CSS
                            </li>
                        </ol>
                        <p>
                            Demo Url : <a target="_blank" href="http://prakharsrivastav.com/restaurant/">http://prakharsrivastav.com/restaurant/</a>
                            <br />
                            Logged-in Version : <a target="_blank" href="http://prakharsrivastav.com/restaurant/index-loggedin.html">http://prakharsrivastav.com/restaurant/index-loggedin.html</a>
                            <br>
                            List page : <a target="_blank" href="http://prakharsrivastav.com/restaurant/list.html">http://prakharsrivastav.com/restaurant/list,html</a>
                        </p>
                    </section>

                </div>
            </article>
            <header class="padding-5 bg-white h2 text-center text-yellow snapshot-heading no-margin-bottom">
                Project Snapshot <small>(Click to expand and view screenshots)</small>
            </header>
            <div class="padding-5 project-snapshot border no-margin">
                <section class="border-bottom" align="center">
                    <header class="text-black text-center h4">
                        Home Page
                    </header>
                    <div align="center">
                        <img src="<?php echo base_url('assets/img/magicmeal_home.png'); ?>" class="img-responsive no-padding " />
                    </div>
                    <footer class="text-center text-black">
                        Video Integration on the homepage. Video is replaced by static image on the lower screen widths.
                    </footer>
                </section>
                <section class="border-bottom padding-5">
                    <header class="text-black text-center h4">
                        List of Restaurants based on selections
                    </header>
                    <div align="center">
                        <img src="<?php echo base_url('assets/img/magicmeal_list_nofilter.png'); ?>" class="img-responsive no-padding " />
                    </div>
                    <footer class="text-center text-black">
                        This page shows the list of the restaurants based on the selection on the homepage.
                    </footer>
                </section>
                <section class="border-bottom padding-5">
                    <header class="text-black text-center h4">
                        List Page with more filter options
                    </header>
                    <div align="center">
                        <img src="<?php echo base_url('assets/img/magicmeal_list.png'); ?>" class="img-responsive no-padding " />
                    </div>
                    <footer class="text-center text-black">
                        This page shows more filters that can be applied on the page to narrow down restaurant search.
                    </footer>
                </section>
                <section class="border-bottom padding-5">
                    <header class="text-black text-center h4">
                        Login Modal
                    </header>
                    <div align="center">
                        <img src="<?php echo base_url('assets/img/magicmeal_login.png'); ?>" class="img-responsive no-padding " />
                    </div>
                    <footer class="text-center text-black">
                        Present on all the pages if the user is not logged-in. for logged-in version of the page please click <a target="_blank" href="http://prakharsrivastav.com/restaurant/list-loggedin.html">here</a> 
                    </footer>
                </section>
                <section class="border-bottom padding-5">
                    <header class="text-black text-center h4">
                        Google Map integration on the homepage to select location
                    </header>
                    <div align="center">
                        <img src="<?php echo base_url('assets/img/magicmeal_maps.png'); ?>" class="img-responsive no-padding " />
                    </div>
                </section>
                <section class="padding-5">
                    <header class="text-black text-center h4">
                        Restaurant Menu page
                    </header>
                    <div align="center">
                        <img src="<?php echo base_url('assets/img/magicmeal_menu.png'); ?>" class="img-responsive no-padding " />
                    </div>
                </section>
                <section class="padding-5">
                    <header class="text-black text-center h4">
                        Javascript driven price calculator
                    </header>
                    <div align="center">
                        <img src="<?php echo base_url('assets/img/magicmeal_pricecalculator.png'); ?>" class="img-responsive no-padding " />
                    </div>
                    <footer class="text-center text-black">
                        The price calculator calculates the time of cooking as well as the price estimate to deliver the food to the customer.
                    </footer>
                </section>
                <section class="padding-5">
                    <header class="text-black text-center h4">
                       Magicmeal Signup page
                    </header>
                    <div align="center">
                        <img src="<?php echo base_url('assets/img/magicmeal_signup.png'); ?>" class="img-responsive no-padding " />
                    </div>
                </section>
                <section class="padding-5">
                    <header class="text-black text-center h4">
                        Food delivery and payment options
                    </header>
                    <div align="center">
                        <img src="<?php echo base_url('assets/img/magicmeal_delivery.png'); ?>" class="img-responsive no-padding " />
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
</div>
<?php $this->load->view("templates/footer"); ?>