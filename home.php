<?php
session_start();



?>

<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="style.css">

        
        <title>Vaccine Booking</title>
        <link href="photos/img/nettantra-logo-2019.svg" rel="icon">

        <script src="index.js"></script>
   </head>

   <body>

  <div id="has_tag"> 
    <div id="my_body">
      <div id="navigation">
        <nav class="navbar navbar-expand-lg navbar-light">
         <a class="navbar-brand" href="home.php" style="padding-left:50px ;"><img  src="photos/img/nettantra-logo-2019.svg" width="130px"class="d-inline-block align-top" alt="" loading="lazy" ></a>

         <button class="navbar-toggler btn-outline-success" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          
        
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto " style="padding-right: 150px;">
              <li class="nav-item active">
                <a class="nav-link" href="home.php"> Home <span class="sr-only">(current)</span></a>  
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="#about"> About <span class="sr-only">(current)</span></a>  
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="#contact">CONTACT</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="registration.php">Register</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="logout.php">Logout</a>
              </li>
            </ul>
          </div>
        </nav>
     </div>

     <div id="carouselExampleCaptions" class="carousel slide bg-dark" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="photos/img/Covid-19-vaccine.jpg" class="d-block w-100" alt="..." style="width: 100%; height:600px;">
            <div class="carousel-caption d-none d-md-block" style="color: black;">
            
              <h1>Nettantra</h1>
              <h3>Vaccine slot Booking</h3>
              
            </div>
          </div>
        </div>
      </div>
    </div>    
    <section id="about">
      <div id="otherbg" class="other bg-dark">
        <nav class="bar navbar-dark bg-dark" style="padding: 10px; ;">
          <b>Welcome To Nettantra Vaccination</b>
        </nav>
      <div class="row row-cols-0 row-cols-md-3" style="margin-top:10px;">
        <div class="col mb-4">
          <div class="card">
            <img src="photos/img/Step_1.svg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title" style="text-align: center;">Step-1</h5>
              <p class="card-text" style="text-align: center;">Book Your Slot</p>
              
            </div>
          </div>
        </div>
        <div class="col mb-4">
          <div class="card">
            <img src="photos/img/step_2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title" style="text-align: center;">Step-2</h5>
              <p class="card-text" style="text-align: center;"> Go to Nearest Hospital</p>
              
            </div>
          </div>
        </div>
        <div class="col mb-4">
          <div class="card">
            <img src="photos/img/Step_3.svg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title" style="text-align: center;">Step-3</h5>
              <p class="card-text" style="text-align: center;">Take your Vaccine</p>
              
            </div>
          </div>
        </div>
      </div>
      </div>


      <div id="middlepage">
        <div class="row featurette">
          <div class="col-md-8" style="padding: 150px; background-color: rgba(100, 148, 237, 0.422);">
            <h2 class="featurette-heading" >
              Free COVID Precaution Dose
            </h2>
            <p class="lead" ><b>
              Now Precaution dose for 18-59 age group free at Government Vaccination Centre.</b>
            </p>
            <a href="#" class="btn btn-primary">Login/Register</a>
          </div>
          <div class="cols-md-5"  style="padding: 51px; background-color: rgba(100, 148, 237, 0.422);">
            <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="400" height="200" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="placeholder: 500*500" src="photos/img/vaccine_booking.svg">
            </img>
          </div>
        </div>
        <!-- <hr class="featurette-divider"> -->
        <div class="row featurette">
          <div class="col-md-7 order-md-2" style=" padding: 100px; background-color: rgb(22, 167, 224);">
            <h2 class="featurette-heading">
              Children Vaccination 
            </h2>
            <p class="lead"><b>
             Covovax vaccine is now available for Children of the age group 12+ yrs in Private Vaccination Centre.The time span between first and second dose of Covovax is 21 days.</b>
            </p>
          </div>
          <div class="col-md-5 order-md-1" style=" padding: 51px; background-color: rgb(22, 167, 224);">
            <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="600" height="300" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="placeholder: 500*500" src="photos/img/Children_Vaccination.svg"></img>
          </div>
        </div>
        <!-- <hr class="featurette-divider"> -->
        <div class="row featurette">
          <div class="col-md-7" style="padding: 150px; background-color: rgba(100, 148, 237, 0.422);">
            <h2 class="featurette-heading">
              
              Vaccination Date Correction
              
            </h2>
            <p class="lead"><b>If the date printed on your vaccination certificate differs from the actual date of vaccine administration, you may raise a request for correction of the same by submitting a valid proof of correct vaccination date.</b>
            </p>
            <a href="login.php" class="btn btn-primary">Login</a>
          </div>
          <div class="col-md-5" style="padding-top:41px; background-color: rgba(100, 148, 237, 0.422);">
            <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="600" height="300" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="placeholder: 500*500" src="photos/img/vaccine_booking-2.svg">
            </img>
          </div>
        </div>
      </div>
    

    </div>
    </section> 
    
    <div id="text">
    <nav class="text-center text-light bg-secondary">FAQs - Frequently Asked Questions</nav>
    </div>
    <div id="question">
      <div class="row">
        <div class="col-md-6">
          <div id="accordion" class="my-2">
            <div class="card bg-modal box-shadow">
              <button class="btn btn-warning text-left collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" id="headingone">
                Where can I register for COVID-19 vaccination? 
              </button>
              <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion" style>
                <div class="card-body bg-info">
                  <p class="text-justify">You can open the Nettantra vaccine portal using the link www.nettantra.vaccine.in and click on the “Make An Appointment” tab to Appointment for COVID-19 vaccination, and follow the steps thereafter.</p>
                </div>
              </div>
            </div>
            <div class="card bg-modal box-shadow">
              <button class="btn btn-danger text-left collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" id="headingTwo">
                Is there a mobile app that needs to be installed to register for vaccination? 
              </button>
              <div id="collapsetwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion" style>
                <div class="card-body bg-info">
                  <p class="text-justify">There is no authorised mobile app for registering for vaccination in India except Aarogya Setu and Umang Apps. You need to log into the nettantra vaccine portal at www.nettantra.vaccine.in. Alternatively, you can also register for vaccination through the Aarogya Setu App or Umang apps.</p>
                </div>
              </div>
            </div>
            <div class="card bg-modal box-shadow">
              <button class="btn btn-primary text-left collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" id="headingThree">
                Can I get vaccination without appointment?
              </button>
              <div id="collapsethree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion" style>
                <div class="card-body bg-info">
                  <p class="text-justify">Appointments for vaccination can be taken either in online or onsite mode. Vaccination is recorded only after appointment.</p>
                </div>
              </div>
            </div>
            <div class="card bg-modal box-shadow">
              <button class="btn btn-success text-left collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" id="headingFour">
                Who are eligible for Precaution dose?
              </button>
              <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion" style>
                <div class="card-body bg-info">
                  <p class="text-justify">The following types of beneficiaries who are fully vaccinated (with 2 doses) and have completed 6 months (26 weeks) after the 2nd dose, as per the records available on Co-WIN, are eligible to take precaution dose.</p>
                </div>
              </div>
            </div>
          </div>
      </div>
      <div class="col-md-6">
        <div id="accordion1" class="my-2">
            <div class="card bg-modal box-shadow">
                <button class="btn btn-dark text-left collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive" id="headingFive">
                  Which age groups can register for vaccination on the NeTtaNtRa Vaccine portal?
                </button>
                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion" style>
                  <div class="card-body bg-info">
                    <p class="text-justify">All beneficiaries who have completed 12 years of age and above on the day of registration (birth year 2010 or earlier) can register for vaccination.</p>
                  </div>
                </div>
              </div>
            <div class="card bg-modal box-shadow">
                <button class="btn btn-secondary text-left collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix" id="headingSix">
                  Is online registration mandatory for COVID-19 vaccination?
                </button>
                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion" style>
                  <div class="card-body bg-info">
                    <p class="text-justify">No, vaccination centers provide for a limited number of on-spot registration slots every day. Beneficiaries can register online or walk-in to vaccination centers where the vaccination team staff can register a beneficiary. In general, all beneficiaries are recommended to register online and schedule vaccination in advance for a hassle-free vaccination experience.</p>
                  </div>
                </div>
              </div>
              <div class="card bg-modal box-shadow">
                <button class="btn btn-success text-left collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven" id="headingSeven">
                  Can I book an online appointment for vaccination?
                </button>
                <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion" style>
                  <div class="card-body bg-info">
                    <p class="text-justify">Yes, you can book appointment for vaccination through vaccine booking portal or through the Aarogya Setu App, after signing-in through your registered mobile number. The persons who are partially vaccinated outside country, need to get vaccination in onsite mode only.</p>
                  </div>
                </div>
              </div>
              <div class="card bg-modal box-shadow">
                <button class="btn btn-danger text-left collapsed" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight" id="headingEight">
                  Do I require new registration for Precaution dose?
                </button>
                <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordion" style>
                  <div class="card-body bg-info">
                    <p class="text-justify">No, new registration is required for precaution dose. If you are fully vaccinated (received two doses) and already registered on Co-WIN, precaution dose can be administered through same Co-WIN account. In fact, precaution dose can only be recorded for those beneficiaries for whom the record of both doses are available in the system. The persons who are partially vaccinated outside country, need to be registered on Co-WIN in onsite mode only prior to get vaccination.</p>
                  </div>
                </div>
              </div>

        </div>
    </div>
    </div>
    <section id="contact">
    <footer id="foot">
      <div id="myc">
      <button class="main btn btn-dark" style="margin-left: 41.5%;"><b><u>CONTACT US</u></b></button>
      <div class="conc text-center text-md-left mt-5">
        <div class="row mt-3">
          <div class="col-md-3 col-lg-4 col-xl-2 mx-auto mb-4">
            <h6 class="text-uppercase font-weight-bold">Nettantra Technologies</h6>
            <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
            <p>GA-430, S.S. Vihar Road <br>
                Neeladri Vihar, Chandrasekharpur<br>
                Bhubaneswar, Odisha 751021 <br><br>
            </p>
          </div>
          <div class="col-md-3 col-lg-2 colxl-2 mx-auto mb-4">
            <h6 class="text-uppercase font-weight-bold">Useful links</h6>
            <hr  class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;" style="color: rgba(255, 255, 255, 0.76);">
            <p>
              <a href="home.php" class="text-dark">Home</a>
            </p>
            <p>
              <a href="registration.php" class="text-dark">Register/Login</a>
            </p>

          </div>
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <h6 class="text-uppercase font-weight-bold">Contact</h6>
            <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
            <p>
              <i class="fa fa-envelope mr-0" style="font-size: 20px;">

              </i>
              <a href="" class="text-dark">saileshdakua@gmail.com</a>
                                       
            </p>
            <p>
              <i class="fa fa-phone mr-0" style="font-size: 20px;">

              </i> <span><a href="" class="text-dark">+91-7077059596</a>
              
                                
                              
            </p>

          </div>
        </div>
      </div>
      <div id="coc" style="background-color: #191f70;">
        <div class="contain">
          <div>
            

            <h6>Get connected with us on social media</h6>

          </div>
          <a href="#" class="fa fa-facebook"></a>
          <span><a href="#" class="fa fa-twitter"></a>
          <span><a href="https://google.com" class="fa fa-google"></a>
          <span><a href="#" class="fa fa-linkedin"></a>
          <span><a href="https://youtu.be/PiEd6-r_dKU" class="fa fa-youtube"></a>
          <span><a href="#" class="fa fa-instagram"></a>

        </div>

      </div>
    </div>
    </footer>
    <div class="card-footer text-muted">
      @ Nettantra.COM | 2022 | vaccinebooking.com
    </div>
   </footer>
   </section>
  </div>
    </body>
</html>