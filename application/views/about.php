<?php $this->load->view("templates/header"); ?>
<section class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <article>
        <div>
            <div class="row border-top-colored border-bottom-colored padding-5">
                <div class="col-lg-3 col-md-5 col-sm-5 col-xs-12 hidden-xs">
                    <img class="img-responsive img-circle pull-left" id="profile-image" src='<?php echo base_url() . "assets/img/prakhar2.jpg"; ?>' />
                </div>
                <dialog class="col-lg-offset-1 col-lg-7 about-heading pull-right col-md-7 col-sm-7 col-xs-12">
                    <span class="intro-line h1">Hello, my name is Prakhar Srivastav.</span>
                    <label class="tags text-colored">HTML5 / JavaScript / PHP / Mysql / Java / Bootstrap / Spring / JQuery / Ajax / JEE / EJB / CSS</label
                </dialog>
            </div>
            <div class="row">
                <p class="h3">I am a software engineer based out of Oslo, Norway and have been serving clients scaling from small student entrepreneurs to the large multinational organizations and everything in between.
                    I currently operate as the CTO for <a href="https://bedrebest.no">bedrebest.no</a> and take care of the sophesticated price comparison engine that focuses on listing the best personal finance products in Norway.
                    <br /><br />
                    I have previously worked with Infosys Limited and have served multiple clients across the globe for over 8 years. 
                    <br /><br />
                    I love to create awesome, clean and easy to use interfaces using <span class="text-colored">HTML5</span>, <span class="text-colored">CSS</span>  and <span class="text-colored">JavaScript.</span>  
                    I am highly inspired by various new grid systems introduced in the open source community and the way they make prototyping and web layouts so simple.
                    <br /><br />
                    I am also a big fan of <span class="text-colored">JQuery</span> framework and the way it has made JavaScript development so much easier. 

                    For server side scripting and development, <span class="text-colored">PHP</span> and <span class="text-colored">Python</span> are the best tools I have found so far . 
                    I like to use these languages in object oriented fashion but also utilize the power of frameworks like Laravel and CodeIgniter for larger projects to reduce the development time.
                    <br /><br />
                    Now that you know a little about me, feel free to get in touch with me through my Contact form <a href="<?php echo base_url("developer/contact"); ?>">here</a>. 
                    <br /><br />
                    Thanks for stopping by,
                    <br />
                    Prakhar
                </p>

            </div>
        </div>
    </article>
</section>
</div>



<?php $this->load->view("templates/footer"); ?>