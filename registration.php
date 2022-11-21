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

        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	  	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

        <link rel="stylesheet" href="style.css">

        
        <title>Vaccine Booking</title>
        <link href="photos/img/nettantra-logo-2019.svg" rel="icon">

        <script src="index.js"></script>
   </head>

   <script>
    function getISODate(){
    var d = new Date();
    return d.getFullYear() + '-' + 
          ('0' + (d.getMonth()+1)).slice(-2) + '-' +
          ('0' + d.getDate()).slice(-2);
     }

      window.onload = function() {
      document.getElementById('minToday').setAttribute('min',getISODate());
      }
      
	  	</script>


   <style>
     @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}
#login{
   /* height: 100vh; */
  /* display: flex; */
  justify-content: center;
  align-items: center;
  padding: 10px; 
  /* background: linear-gradient(135deg, #71b7e6, #9b59b6); */
}
.container{
  max-width: 700px;
  width: 100%;
  background: linear-gradient(135deg, #2d9de7, #b540e3);
  padding: 25px 30px;
  border-radius: 5px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.15);
}
.container .title{
  font-size: 25px;
  font-weight: 500;
  position: relative;
}
.container .title::before{
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  width: 30px;
  border-radius: 5px;
  background: linear-gradient(135deg, #71b7e6, #9b59b6);
}
.content form .user-details{
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  margin: 20px 0 12px 0;
}

form .user-details .input-box{
  margin-bottom: 15px;
  width: calc(100% / 2 - 20px);
}
form .user-details .input-box1{
  margin-bottom: 15px;
  width: calc(100% / 2 - 20px);
}

form .input-box span.details{
  display: block;
  font-weight: 500;
  margin-bottom: 5px;
}
form .input-box1 span.details{
  display: block;
  font-weight: 500;
  margin-bottom: 5px;
}


.user-details .input-box select{
  height: 45px;
  width: 100%;
  outline: none;
  font-size: 16px;
  border-radius: 5px;
  padding-left: 15px;
  border: 1px solid #ccc;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
}

.user-details .input-box input{
  height: 45px;
  width: 100%;
  outline: none;
  font-size: 16px;
  border-radius: 5px;
  padding-left: 15px;
  border: 1px solid #ccc;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
}
.user-details .input-box1 input{
  height: 45px;
  width: 78%;
  outline: none;
  font-size: 16px;
  border-radius: 5px;
  padding-left: 15px;
  border: 1px solid #ccc;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
}

.user-details .input-box input:focus,
.user-details .input-box input:valid{
  border-color: #59b66c;
}
.user-details .input-box1 input:focus,
.user-details .input-box1 input:valid{
  border-color: #59b66c;
}
 form .gender-details .gender-title{
  font-size: 17px;
  font-weight: 500;
  margin-left: 12px;
 }


 form .button{
   height: 45px;
   margin: 35px 0
 }
 form .button input{
   height: 100%;
   width: 100%;
   border-radius: 5px;
   border: none;
   color: #fff;
   font-size: 18px;
   font-weight: 500;
   letter-spacing: 1px;
   cursor: pointer;
   transition: all 0.3s ease;
   background: linear-gradient(135deg, #71e6b9, #72b659);
 }
  form .button input:hover{
  transform: scale(0.99); 
  background: linear-gradient(-135deg, #71e686, #b65991);
  }
 @media(max-width: 584px){
 .container{
  max-width: 100%;
}
form .user-details .input-box{
    margin-bottom: 15px;
    width: 100%;
  }
  form .category{
    width: 100%;
  }
  .content form .user-details{
    max-height: 500px;
    overflow-y: scroll;
  }
  .user-details::-webkit-scrollbar{
    width: 5px;
  }
  }
  @media(max-width: 459px){
  .container .content .category{
    flex-direction: column;
  }
} 


   </style>

   <body>

  <div id="has_tag"> 
    <div id="my_body">
      <div id="navigation">
        <nav class="navbar navbar-expand-lg navbar-light">
         <a class="navbar-brand" href="index.html" style="padding-left:50px ;"><img  src="photos/img/nettantra-logo-2019.svg" width="130px"class="d-inline-block align-top" alt="" loading="lazy" ></a>

         <button class="navbar-toggler btn-outline-success" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          
        
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto " style="padding-right: 150px;">
              <li class="nav-item active">
                <a class="nav-link" href="index.php"> Home <span class="sr-only">(current)</span></a>  
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="#about"> About <span class="sr-only">(current)</span></a>  
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="#contact">CONTACT</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="login.php">Login</a>
              </li>
            </ul>
          </div>
        </nav>
     </div>
    </div>    
    
    </div>


    <section id="booking" style="background: linear-gradient(135deg, #71b7e6, #9b59b6);" >


        <div id="login" class="container">
            <div class="title"><b>Registration</b></div>
            <div class="content">
              <form action="" name="Regform" method="post">
                <div class="user-details">
                  <div class="input-box">
                    <span class="details">Full Name</span>
                    <input type="text" name="name" id="Name" placeholder="Enter your name" autocomplete="off" required>
                    <p></p>
                  </div>
                  <div class="input-box">
                    <span class="details">Email</span>
                    <input type="email" name="email" id="email" placeholder="Enter your email" autocomplete="off" required>
                    <p></p>
                  </div>
                  <div class="input-box1">
                    <span class="details">Phone Number</span>
                    <select name="code" id="code">
                      <option value="+91">+91</option>
                      <option value="+92">+92</option>
                      <option value="+125">+125</option>
                      <option value="+133">+133</option>
                    </select>
                    <input type="text" id="phone" onblur="myFunction()" name="pnum" autocomplete="off" placeholder="Enter 10 digit number" required>
                    <p id="demo"></p>
                  </div>
                  <div class="input-box">
                    <span class="details">Aadhar Number</span>
                    <input type="text" name="adhar" id="adhar" data-type="adhaar-number" autocomplete="off" onblur="myFunctionn()" title="Adhar No Will Be 12 Digit and In this format XXXXXXXXXXXX" placeholder="Enter Aadhar Number" required>
                    <p id="demoo"></p>
                  </div>
                  <div class="input-box">
                    <span class="details">Age</span>
                    <input type="number" name="age" id="age" placeholder="Enter your Age" autocomplete="off" required>
                  </div>
                  <div class="input-box">
                    <span class="details">Date</span>
                    <input  name="date" type="date" id="minToday" placeholder="Enter Date" autocomplete="off"required>
                  </div>
                  <div class="input-box">
                    <span class="details">Password</span>
                    <input type="password" name="pass" id="pass"  autocomplete="off"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 6 or more characters" placeholder="Enter your password" required>
                  </div>

                  <div class="input-box">
                    <span class="details">Gender</span>
                    <select name="gender" id="gender">
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                      <option value="Prefer not to Say">Prefer not to Say</option>
                    </select>
                  </div>
                </div>

                <div class="form-group mt-3">
                    <label for="adress">Adress:</label>
                    <textarea class="form-control" id="adress" name="adress" type="text" autocomplete="off" placeholder="Enter Your Adress:"></textarea>
                </div>
                <div class="button">
                  <input type="submit" onclick="test()" name="submit" value="Register">
                </div>


                <?php
                
                   $random=(rand(1,10000));

                   $con = new mysqli("localhost","root","","vaccine_booking");

                    if($con->connect_error){
                        die("connection failed" );
                    
                    }
                    if(isset($_POST['submit'])){
                      $name=$_POST['name'];
                      $email=$_POST['email'];
                      $code=$_POST['code'];
                      $pnum=$_POST['pnum'];
                      $adhar=$_POST['adhar'];
                      $age=$_POST['age'];
                      $date=$_POST['date'];
                      $pass=$_POST['pass'];
                      $gender=$_POST['gender'];
                      $adress=$_POST['adress'];

                      $emailquery = "select * from user_regd where email='$email'  ";
                      $query1 = mysqli_query($con,$emailquery);

                      $emailcount = mysqli_num_rows($query1);

                      if($emailcount>0){
                        
                        ?>
                        <script>
                          alert("Email Id Alredy Exist");
                        </script>
                        <?php
                        
                      }else{

                    
                     $sql = "insert into user_regd values ('0','$name','$email','$code','$pnum','$adhar','$age','$date','$pass','$gender','$adress','user','$random')";
                    
                    if($con->query($sql)){
                      
                      ?>
                      <script>
                        alert("Thank You for Booking your Slot");
                      </script>
                      <?php

                      ?>
                      <script>
                        location.replace("home.php");
                      </script>
                      <?php
                    
                    }else{
                      
                      ?>
                      <script>
                        alert("Something Went Wrong");
                      </script>
                      <?php
                    
                    }
                    
                    }
                  }
                   
                   ?>



              </form>
            </div>
          </div>
      </section>

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
              <a href="index.php" class="text-dark">Home</a>
            </p>
            <p>
              <a href="login.php" class="text-dark">Register/Login</a>
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
  
    </body>
</html>

