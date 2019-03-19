

<section class="contact py-5">
    <div class="container py-sm-3">
        <h3 class="heading text-capitalize mb-lg-5 mb-4"> Contact Us - <span>Get In Touch</span> </h3>
        <div class="address row">
            <div class="col-md-4 address-grid">
                <a href="contact_form.php"></a>
                <div class="address-info">
                    <div class="address-left text-center">
                        <i class="far fa-map"></i>
                    </div>
                    <div class="address-right text-center">
                        <h6 class="ad-info text-uppercase mb-2">Address</h6>
                        <p> 2466H 5th Street Parking, King Block, New York City.

                        </p>
                    </div>
                </div>

            </div>
            <div class="col-md-4 address-grid">
                <div class="address-info">
                    <div class="address-left text-center">
                        <i class="far fa-envelope"></i>
                    </div>
                    <div class="address-right text-center">
                        <h6 class="ad-info text-uppercase mb-2">Email</h6>
                        <a href="mailto:example@email.com"> mail@example.com</a>
                        <a href="mailto:example@email.com"> mail@example.com</a>
                    </div>

                </div>
            </div>
            <div class="col-md-4 address-grid">
                <div class="address-info">
                    <div class="address-left text-center">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <div class="address-right text-center">
                        <h6 class="ad-info text-uppercase mb-2">Phone</h6>
                        <p>+1 234 567 8901</p>
                        <p>+1 234 567 8901</p>

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
               <!-- <form  action="../connect.php" method="POST">  --> 
                    <form  action="../process.php" method="POST" enctype='multipart/form-data'> 
                    <div class="row">
                        <div class="col-lg-6">

                            <div class="form-group">
                                <label>First Name:</label>
                                <input type="text" class="form-control" placeholder="First Name" name="fname" required="true">
                            </div>
                            <div class="form-group">
                                <label>Email:</label>
                                <input type="email" class="form-control" placeholder="Email" name="email" required="true" >                    
                            </div>


                        </div>
                        <div class="col-lg-6">

                            <div class="form-group">
                                <label>Last Name:</label>
                                <input type="text" class="form-control"  placeholder="Last Name" name="lname" required="true">
                            </div>
                            <div class="form-group">
                                <label>Mobile No:</label>
                                <input type="tel" class="form-control"  placeholder="Mobile No" name="mobile" required="true">
                            </div>


                        </div>
                        <div class="col-lg-12 form-group">
                            <label for="comment">Message:</label>
                            <textarea name="message" class="form-control" rows="5"></textarea>
                        </div>
                        <input class="px-3" type="radio" name="opt" value="friend">friend &nbsp;
                        <input class="px-3" type="radio" name="opt" value="social">social &nbsp;
                        <input class="px-3" type="radio" name="opt" value="other">other &nbsp;
                        <input type="file" name="myfile">
                        <input type="submit" name="submit" value="submit">
                        
                        
                    </div>
                </form>
            </div>
        

            <div class="col-lg-6 mt-lg-0 mt-5">
                <div class="bg-img">
                    <div class="contact-layer">
                        <h3 class="mb-3">Dont hesitate to contact us for any kind of information</h3>
                        <p><i class="fas mr-2 fa-phone"></i> +12 327 8976 2334</p>
                    </div>
                </div>
            </div>
            </div>

        </div>
   

    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387142.84010033106!2d-74.25819252532891!3d40.70583163828471!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1475140387172"
                style="border:0"></iframe>
    </div>

</section>	


