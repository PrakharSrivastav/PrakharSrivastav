<?php $this->load->view("templates/header"); ?>
<div class="col-sm-12 col-lg-12 col-xs-12 col-md-12 border-top-colored">
    <div class="thumbnail padding-5">
        <div class="text-center bg-white text-yellow no-margin h2 padding-5">
            Moxie CRM  : Blazing Fast CRM system
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
                                Customer , Expense and Invoice modules. Contains options for uploading images.
                            </li>
                            <li>
                                Each module having options to Add / Delete / Edit / List and Search Items .
                            </li>
                            <li>
                                Results display in a paginated fashion. Number of results per page can be adjusted through configuration settings.
                            </li>
                            <li>
                                On first run, application does the automatic database installation. User needs to provide the database settings via the configuration option. 
                            </li>
                            <li>
                                All deletes are soft deletes. No data is actually deleted from the application.
                            </li>
                        </ol>

                        <h5>Technologies used</h5>
                        <ol>
                            <li>
                                <strong>HTML5 / CSS / JQuery</strong> : Twitter Bootstrap's grid system with custom CSS.
                            </li>
                            <li>
                                <strong>PHP - MySQL</strong> : PHP - Fat Free Framework  for blazing fast performance .
                            </li>
                        </ol>
                        <p>
                            Demo Url : <a target="_blank" href="http://www.prakharsrivastav.com/crm/">http://www.prakharsrivastav.com/crm</a>
                            <br />
                            <small>The data in the demo is prepared using PHP Faker library. I take no responsibility for any accidental matches. Please feel free to drop a note if you find any objectionable data and want it to be removed.</small>
                        </p>
                    </section>

                </div>
            </article>
            <header class="padding-5 bg-white h2 text-center text-yellow snapshot-heading no-margin-bottom">
                Project Snapshot <small>(Click to expand and view screenshots)</small>
            </header>
            <div class="padding-5 project-snapshot border no-margin">
                <h3 class="text-center">I am only showing the Customer module here. You can visit the demo link for view other modules and their functionality.</h3>
                <section class="border-bottom padding-5">
                    <header class="text-black text-center h4">
                        Installation Page
                    </header>
                    <img src="<?php echo base_url(); ?>assets/img/crm_home.png" class="img-responsive no-padding full-width" />
                    <footer class="text-center text-black">
                        On first run, application notifies the user and asks user to Install the application. Alternatively, user can manually run the SQL queries on that database and application will verify the setup before proceeding to further sections. Once the application is installed, the user would not see this page again.
                    </footer>
                </section>
                <section class="border-bottom padding-5">
                    <header class="text-black text-center h4">
                        List Customers Page
                    </header>
                    <img src="<?php echo base_url(); ?>assets/img/crm_cust_list.png" class="img-responsive no-padding full-width" />
                    <footer class="text-center text-black">
                        List of all active customers. The related options for deleting , viewing and editing the customer is marked against each customer. Click on any row to view customer details.
                    </footer>
                </section>
                <section class="border-bottom padding-5">
                    <header class="text-black text-center h4">
                        View Customer Details
                    </header>
                    <img src="<?php echo base_url(); ?>assets/img/crm_cust_view.png" class="img-responsive no-padding full-width" />
                </section>
                <section class="border-bottom padding-5">
                    <header class="text-black text-center h4">
                        Edit Customer Details
                    </header>
                    <img src="<?php echo base_url(); ?>assets/img/crm_cust_edit.png" class="img-responsive no-padding full-width" />
                </section>
                <section class="border-bottom padding-5">
                    <header class="text-black text-center h4">
                        Add Customer Details
                    </header>
                    <img src="<?php echo base_url(); ?>assets/img/crm_cust_add.png" class="img-responsive no-padding full-width" />
                </section>
                <section class="border-bottom padding-5">
                    <header class="text-black text-center h4">
                        Search Customer Details
                    </header>
                    <img src="<?php echo base_url(); ?>assets/img/crm_cust_search.png" class="img-responsive no-padding full-width" />
                </section>
            </div>
        </div>
    </div>
</div>
</div>
<?php $this->load->view("templates/footer"); ?>