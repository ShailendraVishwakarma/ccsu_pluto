<?php
include("config.php");
// echo $id=$_GET['id'];die;

if(isset($_POST['Submit']))
  {
       $file_name=$_FILES['image']['name'];
        $file_size=$_FILES['image']['size'];
        $file_tmp=$_FILES['image']['tmp_name'];
        $file_type=$_FILES['image']['type'];
       move_uploaded_file($file_tmp,"upload-images/".$file_name);
       $image = @$file_name;

  $name=$_POST['name'];
  $roll_no=$_POST['roll_no'];
  $phone_no=$_POST['phone_no'];
  $email_id=$_POST['email_id'];
  $type=$_POST['type'];
 
  //$image=$_POST['image'];
  
  $transaction_id=$_POST['transaction_id'];
  $purpose=$_POST['purpose'];

  
  $req_no = "REQ".rand(9999,1000);
  $esc_no = "ESC".rand(9999,1000);
  $level_no="Level".rand(1,2);

 //echo "INSERT into project 
 //('roll_no','name','phone_no','email_id','type','upload_document','transaction_id','purpose','')
  
  //VALUES($roll_no,$name,$phone_no,$email_id,$type,$upload_document,$transaction_id,$purpose,)";die;
"insert into process 
(name,roll_no,phone_no,email_id,type,transaction_id,purpose,image,request_no,complaint_id,escalation_level)

values('$name','$roll_no','$phone_no','$email_id','$type','$transaction_id','$purpose','$image','$req_no','$esc_no','$level_no')";
	$result=mysqli_query($mysqli,"insert into process 
  (name,roll_no,phone_no,email_id,type,transaction_id,purpose,image,request_no,complaint_id,escalation_level)
  
  values('$name','$roll_no','$phone_no','$email_id','$type','$transaction_id','$purpose','$image','$req_no','$esc_no','$level_no')");
	if($result)
  {
		$msg ="Registration Submit successfully";
}
	else{
		$msg = "Registration Submit failed";
  }
}
$result=mysqli_query($mysqli,"SELECT* from process order by id  DESC limit 1");
 $num_data=mysqli_num_rows($result);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ganerate</title>
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/style.css">
    <script src="./"></script>
    <style>
        li a {
            text-decoration: none;
            color:yellow;
        }

       

    </style>
</head>

<body>
    <header class="sticky-top" style="border-bottom: 2px solid black;">
        <nav class="navbar navbar-expand-lg navbar-light"
            style="background-color: #fffc3a;padding-top:0;padding-bottom: 0;">
            <div class="container">
                <a class="navbar-brand pt-0 pb-0" hef="/"><img src="./2.jpeg" alt="" width="80"></a>
                
                <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
                    <div class="row">
                    

                    <div class="col-md-8"></div>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                
                                    <h2>Tabulation Chart Digitization</h2>
                                </a>
                            </li>
                        </ul>
                       </div>
            </div>
        </nav>
    </header> </div>
            

<section>


</section>



    <section>
    <form method="POST" action="log_out.php"enctype="multipart/form-data">
        <div class="pt-4 pb-4">
            <div class="container">
                <div class="row">
                                    <div class="col-md-2"></div>
                    <div class="col-md-10 card border-primary">
                        <div style="padding: 12% 20%;">
                            <div class="row text-center">

                            <h2 style="color:blue"> Congratulations</h2><br>

                            <h4>Your request has been received.</h4>
                           
                                <div class="section_active">
                                
                                <?php
          while($data=mysqli_fetch_array($result)){  ?>
       <h4>   Request No .is
            <?php echo $data['request_no']; ?>
       </h4>
          
      <?php } ?>

      
        <button type="submit" name="Submit" class="btn btn-danger"style="width:120px;margin-left:30px;margin-top:30px;">OK</button>
                  </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    </section>

</body>

</html>