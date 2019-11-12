<?php include('header.php');?>

    <!-- About Section -->
    <div class="row aboutrow">
        <div class="col-12 text-center">
            <h1 class="about">CONTACT US</h1>
        </div>
    </div> 

    <!-- Contact form -->
   <div class="formbox">
        <div class="container">
            <div class="row mt-3 mb-3">
                <div class="col-12 text-center">
                    <h2 class="cntctform">Leave a Reply</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-left">
                    <p class="contctdetails">Enter Contact Details Here: </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6">
                    <form action="">
                        <input type="text" placeholder="First Name" class="form-control gapingandsetting rounded-0">
                    </form>
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                    <form action="">
                        <input type="text" placeholder="Last Name" class="form-control gapingandsetting rounded-0">
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6">
                    <form action="">
                        <input type="text" placeholder="Father's Name" class="form-control gapingandsetting rounded-0">
                    </form>
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                    <form action="">
                        <input type="text" placeholder="CNIC" class="form-control gapingandsetting rounded-0">
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6">
                    <form action="">
                        <input type="text" placeholder="Username" class="form-control gapingandsetting rounded-0">
                    </form>
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                    <form action="">
                        <input type="email" placeholder="Email" class="form-control gapingandsetting rounded-0">
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                <textarea placeholder="Enter Message Here" class="form-control gapingandsetting rounded-0" rows="4" cols="50"></textarea>
                </div>
            </div>
        </div>
   </div>

   <div class="socialmediaaccounts">
       <div class="container">
           <div class="row">
               <div class="col-12 col-md-6 col-lg-6 foraftersidelines">
                    <div class="row">
                        <div class="col-12 text-center">
                            <p class="socialtext">Follow Us</p>
                        </div>
                    </div>
                    <div class="row no-gutters text-center">
                        <div class="col-4 forinsidepadss">
                            <i id="fbs" class="fab fa-facebook forfntawesize"></i>
                        </div>
                        <div class="col-4 forinsidepadss">
                            <i id="tws" class="fab fa-twitter-square forfntawesize"></i>
                        </div>
                        <div class="col-4 forinsidepadss">
                            <i id="pins" class="fab fa-pinterest forfntawesize"></i>
                        </div>
                    </div>
               </div>
               <div class="col-12 col-md-6 col-lg-6">
                    <div class="row">
                        <div class="col-12 text-center">
                            <p class="socialtext">Message Us</p>
                        </div>
                    </div>
                    <div class="row no-gutters text-center">
                        <div class="col-4 forinsidepadss">
                            <i id="insts" class="fab fa-instagram forfntawesize"></i>
                        </div>
                        <div class="col-4 forinsidepadss">
                            <i id="whts" class="fab fa-whatsapp forfntawesize"></i>
                        </div>
                        <div class="col-4 forinsidepadss">
                            <i id="msngrs" class="fab fa-facebook-messenger forfntawesize"></i>
                        </div>
                    </div>
               </div>
           </div>
       </div>
   </div>

   <!-- Map Area -->
   <div class="container-fluid">
       <div class="row">
           <div class="col-12 text-center">
               <h2 class="mapheading">OUR LOCATIONS</h2>
           </div>
       </div>
       <div class="row">
           <div class="col-12 col-md-6 col-lg-6 text-center">
                <h2 class="headofc">Head Office North</h2>
                <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 500px;">
                    <iframe src="https://maps.google.com/maps?q=hyderabad&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
                        style="border:0 ;   height: 100%; width: 100%;" allowfullscreen></iframe>
                </div>
           </div>
           <div class="col-12 col-md-6 col-lg-6 text-center">
                <h2 class="headofc">Head Office East</h2>
                <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 500px;">
                    <iframe src="https://maps.google.com/maps?q=karachi&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
                        style="border:0 ;   height: 100%; width: 100%;" allowfullscreen></iframe>
                </div>
           </div>
       </div>
   </div>

   <!-- Mail Delivery -->
   <div class="mailbox">
       <div class="row">
           <div class="col-12 text-center">
               <div class="backtruck">
                    <h2 class="maildelivery">Deliver Us a Mail</h2>
               </div>
           </div>
       </div>
   </div>

<?php include('footer.php');?>