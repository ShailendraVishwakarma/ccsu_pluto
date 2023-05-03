<?php
include("config.php");

if(!empty($_POST)){
   

    $q = "SELECT * FROM project WHERE status='1' ";

    if($_POST['year']){
        $q .= " AND year='".$_POST['year']."'";
    }

    if($_POST['enrollment_no']){
        $q .= " AND enrollment_no='".$_POST['enrollment_no']."'";
    }

    if($_POST['graduation']){
        $q .= " AND graduation ='".$_POST['graduation']."'";
    }

    if($_POST['roll_no']){
        $q .= " AND roll_no ='".$_POST['roll_no']."'";
    }
    $q .= " ORDER BY id DESC ";
   
    $result = mysqli_query($mysqli,$q);
    

}else{
    $result=mysqli_query($mysqli,"SELECT* from project");
}
 ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Pluto - Responsive Bootstrap Admin Panel Templates</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- site icon -->
      <link rel="icon" href="images/fevicon.png" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css" />
      <!-- site css -->
      <link rel="stylesheet" href="style.css" />
      <!-- responsive css -->
      <link rel="stylesheet" href="css/responsive.css" />
      <!-- color css -->
      <link rel="stylesheet" href="css/colors.css" />
      <!-- select bootstrap -->
      <link rel="stylesheet" href="css/bootstrap-select.css" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="css/perfect-scrollbar.css" />
      <!-- custom css -->
      <link rel="stylesheet" href="css/custom.css" />
      <!-- calendar file css -->
      <link rel="stylesheet" href="js/semantic.min.css" />
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body class="inner_page widgets">
      <div class="full_container">
         <div class="inner_container">
            <!-- Sidebar  -->
            <nav id="sidebar">
               <div class="sidebar_blog_1">
                  <div class="sidebar-header">
                     <div class="logo_section">
                        <a href="index.html"><img class="logo_icon img-responsive" src="images/logo/logo_icon.png" alt="#" /></a>
                     </div>
                  </div>
                  <div class="sidebar_user_info">
                     <div class="icon_setting"></div>
                     <div class="user_profle_side">
                        <div class="user_img"><img class="img-responsive" src="images/layout_img/shail.jpg" alt="#" /></div>
                        <div class="user_info">
                           <h6>Shailendra</h6>
                           <p><span class="online_animation"></span> Online</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="sidebar_blog_2">
                  <h4>Searchable Award Register System</h4>
                  <ul class="list-unstyled components">
                     <li class="active">
                        <a href="#dashboard" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-dashboard yellow_color"></i> <span>Dashboard</span></a>
                        <ul class="collapse list-unstyled" id="dashboard">
                        <li>
                              <a href="Dashboard.php"> <span>Dashboard</span></a>
                           </li>
                           
                        </ul>
                     </li>
                     <li><a href="Search_Record.php"><i class="fa fa-clock-o orange_color"></i> <span>Search Record</span></a></li>
                      <li><a href="New_Record.php"><i class="fa fa-diamond purple_color"></i> <span>New Record</span></a></li>
                     <li><a href="List_Of_Record.php"><i class="fa fa-table purple_color2"></i> <span>List Of Record</span></a></li>
                     <li>
                        
                     <li><a href="Verification_Request.php"><i class="fa fa-briefcase blue1_color"></i> <span>Verification Request</span></a></li>
                     <li>
                        <a href="Verified_Request.php">
                        <i class="fa fa-paper-plane red_color"></i> <span>Verified Request</span></a>
                     </li>
                     
                     <li><a href="Escalation_request.php"><i class="fa fa-map purple_color2"></i> <span>Escalation Request</span></a></li>
                     <li><a href="Log_out.php"><i class="fa fa-bar-chart-o green_color"></i> <span>Log Out</span></a></li>
                     
                  </ul>
               </div>
            </nav>
            <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
               <!-- topbar -->
               <div class="topbar">
                  <nav class="navbar navbar-expand-lg navbar-light">
                     <div class="full">
                        <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"></i></button>
                        <div class="logo_section">
                           <a href="index.html"><img class="img-responsive" src="images/logo/logo.png" alt="#" /></a>
                        </div>
                        <div class="right_topbar">
                           <div class="icon_info">
                              <ul>
                                 <li><a href="#"><i class="fa fa-bell-o"></i><span class="badge">2</span></a></li>
                                 <li><a href="#"><i class="fa fa-question-circle"></i></a></li>
                                 <li><a href="#"><i class="fa fa-envelope-o"></i><span class="badge">3</span></a></li>
                              </ul>
                              <ul class="user_profile_dd">
                                 <li>
                                    <a class="dropdown-toggle" data-toggle="dropdown"><img class="img-responsive rounded-circle" src="images/layout_img/shail.jpg" alt="#" /><span class="name_user">Shailendra</span></a>
                                    <div class="dropdown-menu">
                                       <a class="dropdown-item" href="profile.html">My Profile</a>
                                       <a class="dropdown-item" href="settings.html">Settings</a>
                                       <a class="dropdown-item" href="help.html">Help</a>
                                       <a class="dropdown-item" href="#"><span>Log Out</span> <i class="fa fa-sign-out"></i></a>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </nav>
               </div>
               <!-- end topbar -->
               <!-- dashboard inner -->
               <div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>Search Record</h2>
                           </div>
                        </div>
                     </div>
                     <!-- row -->
                    <div class="row">
                        <!-- table section -->
                        <div class="col-md-12">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>Basic Table</h2>
                                 </div>
                              </div>
                              

                           <div class="wrapper">
                              <form method="POST" action="">
   
    <div class="search-container">
      <!-- <input type="text" class="search" placeholder="Location"> -->
       <!-- <label for="cars"><b>Choose a Year:</b></label><br/> -->
                              
                              <select name="cars" id="cars">
                              <option value="year">--Select Year--</option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
                              </select>
                           
                              
                              <select name="graduation">
                                <option value="--Select Class--">--Select Class--</option>
                                <option value="Bsc">Bsc</option>
                                <option value="B.com">B.com</option>
                                <option value="BA">BA</option>
                                <option value="BCA">BCA</option>
                                <option value="BBA">BBA</option>
                              </select>
                           

      <input type="text"name="enrollment_no" class="date-from" placeholder="Enrollment No"class="form-control">
      <input type="text" class="date-to" placeholder="Roll Number"name="roll_no">
      <button type="submit" class="button">Search</button>
    </div>
  </div>
  </form>

                              <div class="table_section padding_infor_info">
                                 <div class="table-responsive-sm">
                                    <table class="table">
                                       <thead>
                                          <tr>
                                             <th>Roll No</th>
                                             <th>Enrollment No</th>
                                             <th>Previous Year Roll No</th>
                                             <th>Previous Year</th>
                                             <th>Class</th>
                                             <th>Year</th>
                                             <th>Tabulation Chars</th>

                                          </tr>
                                       </thead>
                                       <tbody>
                                       <?php
       
       while($data=mysqli_fetch_assoc($result)){  ?>
        <tr>
        <td><?php echo $data['roll_no']; ?></td>
        <td><?php echo $data['enrollment_no']; ?></td>
        <td><?php echo $data['previous_year_roll_no']; ?></td>
        <td><?php echo $data['previous_year']; ?></td>
        <td><?php echo $data['graduation']; ?></td>
        <td><?php echo $data['year']; ?></td>
      <!--  <td><?php echo $data['image']; ?></td>-->
      <td> <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal-<?=$data['id']?>"style="height:30px;">
      <p style="color:white"> View File</p>
  </button></td>
       </tr>
       

  <!-- The Modal -->
  <div class="modal" id="myModal-<?=$data['id']?>">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="image-header">
          <h4 class="modal-title">Tabulation Chart</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <img src="upload-images/<?php echo $data['image']; ?>" style="width:60%;">
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
       <?php } ?>
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                           </div>
                        </div>
                  <!-- footer -->
                  <div class="container-fluid">
                     <div class="footer">
                        <p>Copyright © 2018 Designed by html.design. All rights reserved.</p>
                     </div>
                  </div>
               </div>
               <!-- end dashboard inner -->
            </div>
         </div>
      </div>
      <!-- jQuery -->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <!-- wow animation -->
      <script src="js/animate.js"></script>
      <!-- select country -->
      <script src="js/bootstrap-select.js"></script>
      <!-- owl carousel -->
      <script src="js/owl.carousel.js"></script> 
      <!-- chart js -->
      <script src="js/Chart.min.js"></script>
      <script src="js/Chart.bundle.min.js"></script>
      <script src="js/utils.js"></script>
      <script src="js/analyser.js"></script>
      <!-- nice scrollbar -->
      <script src="js/perfect-scrollbar.min.js"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- custom js -->
      <script src="js/custom.js"></script>
      <!-- calendar file css -->    
      <script src="js/semantic.min.js"></script>
      <script></script>
   </body>
</html>
