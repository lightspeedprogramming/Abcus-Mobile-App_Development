<?php
    $title = "Contact Us || Xyz";
?>

<?php include('header.php'); ?>
    
    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/14.jpg)">
        <div class="auto-container">
            <span class="sub-title">Get in touch with us</span>
            <h1>Contact Us</h1>
        </div>
    </section>
    <!--End Page Title-->

    
    <!-- Form Section -->
    <section class="form-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                 
                 <h2>Have a Question? Get In Touch!</h2>
            </div>

            <div class="contact-form">
                <form method="post" action="sendemail.php" id="contact-form">
                    <div class="row clearfix">
                        <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                            <label>Your Name</label>
                            <input type="text" name="username" placeholder="" required="">
                        </div>
                        
                        <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                            <label>Phone</label>
                            <input type="text" name="number" placeholder="" required="">
                        </div>

                        <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                            <label>Email</label>
                            <input type="email" name="email" placeholder="" required="">
                        </div>

                        <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                            <label>Massage</label>
                            <textarea name="message" placeholder=""></textarea>
                        </div>
                        
                        <div class="col-md-12 col-sm-12 col-xs-12 form-group text-center">
                            <button class="theme-btn btn-style-four" type="submit" name="Submit Now">send message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!--End Form Section -->
	
	
<?php include('footer.php'); ?>