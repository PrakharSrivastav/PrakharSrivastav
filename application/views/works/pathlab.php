<?php $this->load->view("templates/header"); ?>
<div class="col-sm-12 col-lg-12 col-xs-12 col-md-12 border-top-colored">
    <div class="thumbnail padding-5">
        <div class="text-center bg-white text-yellow no-margin h2 padding-5">
            Simple Laravel / Bootstrap based CRUD Application to manage patients and their reports
        </div>
        <div class="thumbnail-body">
            <article class="">
                <div >
                    <header class="padding-5 bg-white h3 text-center text-yellow no-margin-bottom">
                        Project Details
                    </header>
                    <section class="border no-margin text-black padding-5">
                        <h4>This project implements a patient management system for a pathology lab. The Operator can perfom CRUD operations on patient. 
                            Once the reports are generated, operator can perform CRUD operations for report. Patients can login to check their reports.
                            Patients can then View, Download and email the reports to their email ids.
                        </h4>
                        <h5>Functional operation:</h5>
                        <ol>
                            <li>
                                Operator can create patients and perform other CRUD operations
                            </li>
                            <li>
                                Operator can create report for patient and perform CRUD operations on reports.
                            </li>
                            <li>
                                Login authentication. Access control provided for Operator and Patient. Patients can only View , Download and email reports.
                            </li>
                            <li>
                                Laravel (PHP) Framework on backend.
                            </li>
                            <li>
                                Auto suggest functionality for login.
                            </li>
                        </ol>
                        <h5>Technologies used :</h5>
                        <ol>
                            <li>
                                Frontend : Twitter Bootstrap Framework. HTML/CSS/JavaScript
                            </li>
                            <li>
                                Backend : PHP - Laravel 5.2 Framework
                            </li>
                            <li>
                                Authorization and Access Control
                            </li>
                        </ol>
                        <p>
                            Demo Url : <a target="_blank" href="http://prakharsrivastav.com/pathology_lab/public/dashboard">http://prakharsrivastav.com/pathology_lab/public/</a><br>
                            Operator Login : admin/12345<br>
                            Patient Login : prakhar/12345
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
                        Login Screen
                    </header>
                    <img src="<?php echo base_url(); ?>assets/img/pathlab_login.png" class="full-width img-responsive no-padding" />
                </section>
                <section class="padding-5">
                    <header class="text-black text-center h4">
                        Operator : List Patients
                    </header>
                    <img src="<?php echo base_url(); ?>assets/img/pathlab_admin_patientlist.png" class="full-width img-responsive no-padding" />
                </section>
                <section class="padding-5">
                    <header class="text-black text-center h4">
                        Operator : View Patient
                    </header>
                    <img src="<?php echo base_url(); ?>assets/img/pathlab_admin_patientview.png" class="full-width img-responsive no-padding" />
                </section>
                <section class="padding-5">
                    <header class="text-black text-center h4">
                        Operator : Create Patient
                    </header>
                    <img src="<?php echo base_url(); ?>assets/img/pathlab_admin_patientcreate.png" class="full-width img-responsive no-padding" />
                </section>
                <section class="padding-5">
                    <header class="text-black text-center h4">
                        Operator : Edit Patient
                    </header>
                    <img src="<?php echo base_url(); ?>assets/img/pathlab_admin_patientedit.png" class="full-width img-responsive no-padding" />
                </section>
                
                <section class="padding-5">
                    <header class="text-black text-center h4">
                        Operator : List Reports
                    </header>
                    <img src="<?php echo base_url(); ?>assets/img/pathlab_admin_reportlist.png" class="full-width img-responsive no-padding" />
                </section>
                <section class="padding-5">
                    <header class="text-black text-center h4">
                        Operator : View Reports
                    </header>
                    <img src="<?php echo base_url(); ?>assets/img/pathlab_admin_reportview.png" class="full-width img-responsive no-padding" />
                </section>
                <section class="padding-5">
                    <header class="text-black text-center h4">
                        Operator : Create Reports
                    </header>
                    <img src="<?php echo base_url(); ?>assets/img/pathlab_admin_reportcreate.png" class="full-width img-responsive no-padding" />
                </section>
                <section class="padding-5">
                    <header class="text-black text-center h4">
                        Operator : Edit Reports
                    </header>
                    <img src="<?php echo base_url(); ?>assets/img/pathlab_admin_reportedit.png" class="full-width img-responsive no-padding" />
                </section>
                
                <section class="padding-5">
                    <header class="text-black text-center h4">
                        Patient : List Reports
                    </header>
                    <img src="<?php echo base_url(); ?>assets/img/pathlab_patient_reportlist.png" class="full-width img-responsive no-padding" />
                </section>
                <section class="padding-5">
                    <header class="text-black text-center h4">
                        Patient : View Reports
                    </header>
                    <img src="<?php echo base_url(); ?>assets/img/pathlab_patient_reportview.png" class="full-width img-responsive no-padding" />
                </section>
            </div>
        </div>
    </div>
</div>
</div>
<!-- main body end -->
<?php $this->load->view("templates/footer"); ?>