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


.user-details .input-box input:focus,
.user-details .input-box input:valid{
  border-color: #59b66c;
}
.user-details .input-box1 input:focus,
.user-details .input-box1 input:valid{
  border-color: #59b66c;
}

 form .category{
   display: flex;
   width: 100%;
   margin: 10px 0 ;
   justify-content: space-between;
 }
 form .category label{
   display: flex;
   align-items: center;
   cursor: pointer;
 }


 form .button{
   height: 45px;
   
   margin: 35px 250px;
 }
 form .button input{
   height: 100%;
   width: 200%;
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
            </ul>
          </div>
        </nav>
     </div>
    </div>    
    
    </div>


    <section id="booking" style="background: linear-gradient(135deg, #71b7e6, #9b59b6);" >


        <div id="login" class="container">
            <div class="title"><b>Login</b></div>
            <div class="content">
              <form action="" method="post">
                <div class="user-details">

                  <div class="input-box">
                    <span class="details">Email</span>
                    <input type="email" name="email" id="email" placeholder="Enter your email" autocomplete="off" required>
                  </div>
                  <div class="input-box">
                    <span class="details">Password</span>
                    <input type="password" name="pass" id="pass" onblur="myClick()" autocomplete="off" placeholder="Enter your password" required>
                    <p id="demooo"></p>
                  </div>


                <div class="button">
                  <input type="submit" onclick="test()" name="submit" value="Login" style="margin:10px;">
                </div>


                <?php
                   

                   $con = new mysqli("localhost","root","","vaccine_booking");

                    if($con->connect_error){
                        die("connection failed" );
                    
                    }
                    if(isset($_POST['submit'])){
                      
                      $email=$_POST['email'];

                      $pass=$_POST['pass'];


                      $sql = "select * from user_regd where email='$email' &&  password='$pass' ";
                      $result = mysqli_query($con,$sql);

                      $row = mysqli_fetch_array($result);

                      if($row["usertype"]=="user"){
                        $_SESSION['username']=$email;
                        ?>
                        <script>
                          alert("Welcome!");
                          location.replace("index.php");
                        </script>
                        <?php
                      }
                      elseif($row["usertype"]=="admin"){
                        $_SESSION['username']=$email;
                        ?>
                        <script>
                          alert("Welcome Back!");
                          location.replace("admin.php");
                        </script>
                        <?php
                      }
                        
                      else{
                        ?>
                        <script>
                          alert("Credential Mismatch");
                          location.replace("login.php");
                        </script>
                        <?php
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
              <a href="home.php" class="text-dark">Home</a>
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

