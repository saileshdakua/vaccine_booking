<?php
session_start();
if(!isset($_SESSION['username']))
  header('location:login.php')


?>

<?php 
$i = 1; 
 $connect = mysqli_connect("localhost", "root", "", "vaccine_booking");  
 $query ="SELECT * FROM user_regd ORDER BY ID DESC";  
 $result = mysqli_query($connect, $query);  
 ?> 

<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
 
    <title>Admin Panel</title>
    <link rel="stylesheet" href="admin.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

          <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      
    <a class="navbar-brand" href="#" style="padding-left:30px ;"><img  src="photos/img/nettantra-logo-2019.svg" width="130px"class="d-inline-block align-top" alt="" loading="lazy" ></a>

    </div>
      <ul class="nav-links">
        <li>
          <a href="#" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="registration.php">
            <i class='bx bx-message' ></i>
            <span class="links_name">Register</span>
          </a>
        </li>
        <li class="log_out">
          <a href="logout.php">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
      <div class="profile-details">
        <img src="photos/img/profile-img.jpg" alt="">
        <span class="admin_name">Admin</span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>

    <div class="home-content">
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Booking</div>
            <div class="number">
            <?php
                $connection = mysqli_connect("localhost", "root", "", "vaccine_booking");
                $query1 = "SELECT * FROM user_regd";
                $result1 = mysqli_query($connection, $query1);
                if ($result1)
                {
                    $row1 = mysqli_num_rows($result1);
                       if ($row1)
                          {
                             printf( $row1);
                          }
                    mysqli_free_result($result1);
                }
                mysqli_close($connection);
              ?>
              </div>
           <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Up from yesterday</span>
            </div>
          </div>
         
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Male</div>
            <div class="number">
            <?php
                $connection = mysqli_connect("localhost", "root", "", "vaccine_booking");
                $query2 = "SELECT * FROM user_regd where gender='Male' ";
                $result2 = mysqli_query($connection, $query2);
                if ($result2)
                {
                    $row2 = mysqli_num_rows($result2);
                       if ($row2)
                          {
                             printf( $row2);
                          }
                    mysqli_free_result($result2);
                }
                mysqli_close($connection);
              ?>
              </div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Up from yesterday</span>
            </div>
          </div>
          <i class='fa fa-male' style="font-size:48px;color:blue"></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Female</div>
            <div class="number">
            <?php
                $connection = mysqli_connect("localhost", "root", "", "vaccine_booking");
                $query3 = "SELECT * FROM user_regd where gender='Female' ";
                $result3 = mysqli_query($connection, $query3);
                if ($result3)
                {
                    $row3 = mysqli_num_rows($result3);
                       if ($row3)
                          {
                             printf( $row3);
                          }
                    mysqli_free_result($result3);
                }
                mysqli_close($connection);
              ?>
              </div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Up from yesterday</span>
            </div>
          </div>
          <i class='fa fa-female' style="font-size:48px;color:red" ></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Above 18+</div>
            <div class="number">
            <?php
                $connection = mysqli_connect("localhost", "root", "", "vaccine_booking");
                $query4 = "SELECT * FROM user_regd where age BETWEEN 18 and 100 ";
                $result4 = mysqli_query($connection, $query4);
                if ($result4)
                {
                    $row4 = mysqli_num_rows($result4);
                       if ($row4)
                          {
                             printf( $row4);
                          }
                    mysqli_free_result($result4);
                }
                mysqli_close($connection);
              ?>
              </div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Down From Today</span>
            </div>
          </div>
          
        </div>
      </div>

      <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="title">Recent Bookings</div>
          <div class="sales-details">
 
                    <table id="booking_data" class="table table-striped table-bordered">  
                          <thead>  
                               <tr>  
                                    <td>sl No</td> 
                                    <td>Application No</td> 
                                    <td>Name</td>  
                                    <td>Email</td> 
                                    <td>Code</td> 
                                    <td>Phone No</td>  
                                    <td>Adhar No</td>  
                                    <td>Age</td> 
                                    <td>Date</td> 
                                    <td>Gender</td>  
                                    <td>Adress</td> 
                                    
                               </tr>  
                          </thead>  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {
                               echo '  
                               <tr>  
                                    <td>'.$i++.'</td> 
                                    <td>'.$row["application_no"].'</td> 
                                    <td>'.$row["name"].'</td>  
                                    <td>'.$row["email"].'</td>  
                                    <td>'.$row["code"].'</td>  
                                    <td>'.$row["phone"].'</td>  
                                    <td>'.$row["adhar"].'</td>  
                                    <td>'.$row["age"].'</td>  
                                    <td>'.$row["date"].'</td>
                                    <td>'.$row["gender"].'</td>  
                                    <td>'.$row["adress"].'</td>    
                               </tr>  
                               ';  
                          }  
                          ?>  
                     </table>  






          </div>

        </div>
      </div>
    </div>
  </section>

  <script>
   let sidebar = document.querySelector(".sidebar");
  let sidebarBtn = document.querySelector(".sidebarBtn");
  sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}

$(document).ready(function(){  
      $('#booking_data').DataTable();  
 }); 
 </script>

</body>
</html>

