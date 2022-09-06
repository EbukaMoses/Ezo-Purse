<?php
    include("header.php");
?>
<div class="container-fluid pagehero pt-5 pb-5">
    <h1 class="text-center pt-5 pb-5 pagehero-title font-weight-bold">Contact Us</h1>
</div>
<div class="container">
    <div class="row mb-5">
        <div class="col-md-8">
            <h1 class="contact-title">General Contact</h1>
            <div class="contact-divider"></div>
            <br><br>
            <p>We’d love to hear from you! Drop us a line to enquire about our services for your new software launch or your latest software innovation.</p>
            <form action="">
                <div class="input-group mt-4">                                           
                    <input type="text" class="form-control" placeholder="Full Name" name="fullname" ">
                </div>
                
                <div class="input-group mt-4">                                           
                    <input type="text" class="form-control" placeholder="Email" name="email" ">
                </div>
                
                <div class="input-group mt-4">                                           
                    <input type="text" class="form-control" placeholder="Phone" name="phone" ">
                </div>
                
                <div class="input-group mt-4">
                    <textarea name="message" id="" cols="30" rows="10" class="form-control" placeholder="Message"></textarea>                                           
                    <!-- <input type="text"  placeholder="Full Name" name="fullname" "> -->
                </div>
                
                <div class="input-group mt-4">
                    <button type="submit" name="sendmsg" class="text-white bg-color btn w-100"><i class="fa-solid fa-paper-plane"></i>&nbsp;Send</button>                                         
                    <!-- <input type="text"  placeholder="Full Name" name="fullname" "> -->
                </div>
            </form>
        </div>
        <div class="col-md-4">
            <h1 class="contact-title">Details</h1>
            <div class="contact-divider"></div>
            <br><br>
            <p><a href="" class="text-decoration-none"><i class="contact-fa fa-solid fa-envelope"></i>&nbsp; <span class="contact-detail text-dark">ezopurse@outlook.com</span></a></p>
            <p><a href="" class="text-decoration-none"><i class="contact-fa fa-solid fa-phone"></i>&nbsp; <span class="contact-detail text-dark">07030000000</span></a></p>
            <p><a href="" class="text-decoration-none"><i class="contact-fa fa-brands fa-facebook-f"></i> <span class="contact-detail text-dark">&nbsp;Facebook</span></a></p>
            <p><a href="" class="text-decoration-none"><i class="contact-fa fa-brands fa-instagram"></i> <span class="contact-detail text-dark">&nbsp;Intsagram</span></a></p>
            <p><a href="" class="text-decoration-none"><i class="contact-fa fa-brands fa-youtube"></i> <span class="contact-detail text-dark">&nbsp;Youtube</span></a></p>
        </div>        
    </div>
</div>


<?php
    include("footer.php");
?>