<?php
/**
 * Template Name: Contact Us
 */

 get_header();?>
<div class="h-100 gradient-form py-5" style="background-color: #eee;">
 <!--Section: Contact v.2-->
<section class="mb-4 container border border-dark p-3">

<!--Section heading-->
<h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
<!--Section description-->
<p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly.</p>

<div class="row">

    <!--Grid column-->
    <div class="">
        <form id="contact-form" name="contact-form" action="" method="POST">

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-md-6">
                    <div class="md-form mb-0">
                    <label for="name" class="" style="font-weight:bold;">Your name</label>
                        <input style="padding-top:20px" type="text" id="fullname" name="fullname" class="form-control" placeholder="Enter your full names here">
                      
                    </div>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6">
                    <div class="md-form mb-0">
                    <label for="email" class="" style="font-weight:bold;">Your email</label>
                        <input style="padding-top:20px" type="text" id="email" name="email" class="form-control" placeholder="Enter your email here">
                        
                    </div>
                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

            <!--Grid row-->
            <div class="row">
                <div class="col-md-12">
                    <div class="md-form mb-0">
                    <label for="message" style="font-weight:bold;">Subject</label>
                        <input style="padding-top:20px" type="text" id="subject" name="subject" class="form-control" placeholder="Enter your subject matter here">
                        
                    </div>
                </div>
            </div>
            <!--Grid row-->

            <!--Grid row-->
            <div class="row">

               
                <div class="">

                    <div class="md-form">
                    <label for="message" style="font-weight:bold;">Your message</label>
                        <textarea style="padding-top:20px" type="text" id="message" name="message" rows="2" class="form-control md-textarea" placeholder="Add your message here"></textarea>
                        
                    </div>

                </div>
            </div>
            <!--Grid row-->
            -<div class="row justify-content-center" style="margin-top: 10px;">
            <div class="col-xs-4 col-sm-4 col-md-4 d-flex justify-content-center" >
                <input type="submit" value="Submit" name="submitinfo" class="btn btn-primary btn-block py-2 px-5">
            </div>
        </div>
    </div>
    
        </form>

       
     

   
</div>

</section>
<!--Section: Contact v.2-->
</section>
 <?php get_footer(); ?>