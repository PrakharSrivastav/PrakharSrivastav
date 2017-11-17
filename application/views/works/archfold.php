<?php $this->load->view("templates/header"); ?>
<div class="col-sm-12 col-lg-12 col-xs-12 col-md-12 border-top-colored">
    <div class="thumbnail padding-5">
        <div class="text-center bg-white text-yellow no-margin h2 padding-5">
            Archfold Interactive : Artist Promotion website
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
                                PHP-MariaDb database integration.
                            </li>
                            <li>
                                Admin-Panel / Login Authentication / Session Management.
                            </li>
                            <li>
                                Add modify twitter API settings and Add / Edit / Delete News feeds.
                            </li>
                            <li>
                                Controlling the website's homepage images using the Admin-Panel. Admin can Add / Remove and change the existing images for this page.
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
                                <strong>PHP-MariaDB</strong> : Codeigniter PHP Framework.
                            </li>
                            <li>
                                <strong>Linux Server setup</strong> : Installing new VPS and configuring and installing Apache / MariaDB on CentOs.
                            </li>
                        </ol>
                        <p>
                            <!-- Demo Url : <a target="_blank" href="http://www.prakharsrivastav.com/ArtistManagement/">http://www.prakharsrivastav.com/ArtistManagement/</a>
                            <br /> -->
                            Actual Url : <a target="_blank" href="http://archfold.com">http://archfold.com</a>
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
                    <img src="<?php echo base_url(); ?>assets/img/archfold_homepage.png" class="img-responsive no-padding full-width" />
                    <footer class="text-center text-black">
                        Slider Images, Twitter feeds and the News feeds. More options and links available at the bottom of the page.
                    </footer>
                </section>
                <section class="border-bottom padding-5">
                    <header class="text-black text-center h4">
                       About Page
                    </header>
                    <img src="<?php echo base_url(); ?>assets/img/archfold_about.png" class="img-responsive no-padding full-width" />
                    <footer class="text-center text-black">
                        Has further sub menus Mission / The Team / Contact / Jobs.
                    </footer>
                </section>
                <section class="border-bottom padding-5">
                    <header class="text-black text-center h4">
                        Music Page
                    </header>
                    <img src="<?php echo base_url(); ?>assets/img/archfold_music.png" class="img-responsive no-padding full-width" />
                    <footer class="text-center text-black">
                        You can view the Management Page and the Artist Profiles. 
                    </footer>
                </section>
                <section class="border-bottom padding-5">
                    <header class="text-black text-center h4">
                        Artist Preview with Social Media Links
                    </header>
                    <img src="<?php echo base_url(); ?>assets/img/archfold_artist.png" class="img-responsive no-padding full-width" />
                    <footer class="text-center text-black">
                       Modal preview of the artist's profile.
                    </footer>
                </section>
                <section class="padding-5">
                    <header class="text-black text-center h4">
                        Archfold Interactive Page
                    </header>
                    <img src="<?php echo base_url(); ?>assets/img/archfold_interactive.png" class="img-responsive no-padding full-width" />
                    <footer class="text-center text-black">
                        Page to show what are the various activities this website is involved with.
                    </footer>
                </section>
                <section class="padding-5">
                    <header class="text-black text-center h4">
                        Archfold Philanthrophy Page
                    </header>
                    <img src="<?php echo base_url(); ?>assets/img/archfold_phil.png" class="img-responsive no-padding full-width" />
                    <footer class="text-center text-black">
                        Philanthrophic activities by the website.
                    </footer>
                </section>
                <section class="padding-5">
                    <header class="text-black text-center h4">
                        News Feeds Page
                    </header>
                    <img src="<?php echo base_url(); ?>assets/img/archfold_news_feed.png" class="img-responsive no-padding full-width" />
                    <footer class="text-center text-black">
                        Get all the news feeds and bites for the artists on the page.
                    </footer>
                </section>
                <section class="padding-5">
                    <header class="text-black text-center h4">
                        News
                    </header>
                    <img src="<?php echo base_url(); ?>assets/img/archfold_news.png" class="img-responsive no-padding full-width" />
                    <footer class="text-center text-black">
                        Read the news feed in details.
                    </footer>
                </section>
            </div>
        </div>
    </div>
</div>
</div>
<?php $this->load->view("templates/footer"); ?>