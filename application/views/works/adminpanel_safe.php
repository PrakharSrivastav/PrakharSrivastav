<?php $this->load->view("templates/header"); ?>
<div class="col-sm-12 col-lg-12 col-xs-12 col-md-12 border-top-colored">
    <div class="thumbnail padding-5">
        <div class="text-center bg-white text-yellow no-margin h2 padding-5">
            Admin Panel  :  Invoicing System
        </div>
        <div class="thumbnail-body">
            <article class="">
                <div >
                    <header class="padding-5 bg-white h2 text-center text-yellow no-margin-bottom">
                        Project Details
                    </header>
                    <section class="border no-margin text-black padding-5">
                        <h4>This project involved:</h4>
                        <h5>Functional operations</h5>
                        <p>
                            This application is based on reseller model of operation. The application has an Administrator who can create different vendors who in turn can create different customers under them. Vendors can now create invoices for these customers and charge them based on the consulting and support service that they provide to the customers. 
                            <br>The invoices are sent to the email address of the customers. Customers can click on a secure link sent in the email and they are proceeded to a page where they can make a secure payment with their credit cards.
                        </p>
                        <ol>
                            <li>
                                Login authenticated system. Admin can create vendors and send an activation link on email. Vendor can click on the link to activate their accounts. Features available for resetting and retrieving username and passwords.
                            </li>
                            <li>
                                Create / Edit / View and Delete Vendor information. Change the vendor activation status.
                            </li>
                            <li>
                                Generate custom reports based on dates. Process customer payments, refunds and charge-backs. Settle customer accounts and download reports.
                            </li>
                            <li>
                                Transaction alerts and notifications. Get an email notification on events like Invoice creation , Invoice payments, vendor registration etc.
                            </li>
                            <li>
                                Automated database backups. Options for taking the manual backup of the website.
                            </li>
                        </ol>

                        <h5>Technologies used</h5>
                        <ol>
                            <li>
                                <strong>HTML5 / CSS / Javascript / JQuery</strong> : Twitter Bootstrap's grid system with custom CSS
                            </li>
                            <li>
                                <strong>PHP-MySql</strong> : Codeigniter PHP Framework.
                            </li>
                            <li>
                                <strong>API Integration</strong> : Firstdata payment gateway.
                            </li>
                        </ol>
                        <p>
                            Demo Url : <a target="_blank" href="http://www.safeglobal.prakharsrivastav.com/admin">http://safeglobal.prakharsrivastav.com/admin</a>
                            <br>
                            The links to the admin panel can be shared on request.
                            <br>
                            The screenshots below  contain dummy data and I do not take any responsibility for any matches with an actual person , organization place or thing. Please inform me if you find any objectionable data and you want it to be removed.
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
                        Login Screen
                    </header>
                    <div align="center">
                        <img src="<?php echo base_url(); ?>assets/img/safe_admin_s.png" class="img-responsive no-padding" />
                    </div>
                </section>
                <section class="border-bottom padding-5">
                    <header class="text-black text-center h4">
                        Dashboard After Login
                    </header>
                    <img src="<?php echo base_url(); ?>assets/img/safe_admin_dashboard.png" class="img-responsive no-padding full-width" />
                </section>
                <section class="border-bottom padding-5">
                    <header class="text-black text-center h4">
                        Create Vendor Page
                    </header>
                    <img src="<?php echo base_url(); ?>assets/img/safe_admin_createvendor.png" class="img-responsive no-padding full-width" />
                </section>
                <section class="border-bottom padding-5">
                    <header class="text-black text-center h4">
                        Manage Vendor Page
                    </header>
                    <img src="<?php echo base_url(); ?>assets/img/safe_admin_managevendor.png" class="img-responsive no-padding full-width" />
                </section>
                <section class="padding-5">
                    <header class="text-black text-center h4">
                        Manage Reports
                    </header>
                    <img src="<?php echo base_url(); ?>assets/img/safe_admin_reports.png" class="img-responsive no-padding full-width" />
                </section>
                <section class="padding-5">
                    <header class="text-black text-center h4">
                        Select duration for generating reports
                    </header>
                    <img src="<?php echo base_url(); ?>assets/img/safe_admin_report_selectdate.png" class="img-responsive no-padding full-width" />
                </section>
                <section class="padding-5">
                    <header class="text-black text-center h4">
                        Generated report for the Vendor
                    </header>
                    <img src="<?php echo base_url(); ?>assets/img/safe_admin_report.png" class="img-responsive no-padding full-width" />
                </section>
                <section class="padding-5">
                    <header class="text-black text-center h4">
                        Sample responsive email sent for Invoices
                    </header>
                    <div align="center">
                        <img src="<?php echo base_url(); ?>assets/img/safe_admin_email.png" class="img-responsive no-padding " />
                    </div>
                </section>
                <section class="padding-5">
                    <header class="text-black text-center h4">
                        Edit Vendors
                    </header>
                    <div align="center">
                        <img src="<?php echo base_url(); ?>assets/img/safe_admin_edit.png" class="img-responsive no-padding" />
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
</div>
<?php $this->load->view("templates/footer"); ?>