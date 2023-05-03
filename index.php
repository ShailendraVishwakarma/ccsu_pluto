<?php
include("config.php");
// echo $id=$_GET['id'];die;
//$result=mysqli_query($mysqli,"SELECT* from project");sc
 //$num_data=mysqli_num_rows($result);
 
 if(!empty($_POST)){
   
       
   

    $q = "SELECT * FROM process WHERE status='1' ";

    $result=mysqli_query($mysqli,"SELECT* from process WHERE add_data = 0");
}
 
?>
<?php
include("config.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>index</title>
  <link rel="stylesheet" href="./css/bootstrap.css">
  <link rel="stylesheet" href="./css/style.css">
  <script src="./js/bootstrap.js"></script>
</head>

<body>
  <header class="sticky-top" style="border-bottom: 2px solid black;">
    <nav class="navbar navbar-expand-lg navbar-light"
      style="background-color: #fffc3a;padding-top:0;padding-bottom: 0;">
      <div class="container">
        <a class="navbar-brand pt-0 pb-0" hrf="/"><img src="./2.jpeg" alt="" width="80"></a>

        <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
          <div class="row">

            <h2>Tabulation Chart Digitization</h2>
            </a>
            </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </header>


  
  <section class="p-5">
    <h2 style="text-align: center;background-color: black;color: beige;border-radius: 15px;margin-top:-10px;">Registration For Verification of Award Sheet</h2>
    <div class="card border-primary">
      <div class="container">
        <div class="row p-4">
          <section>
          <p class="text-success"style="margin-left:400px;"><?=@$msg?></p>
            <div class="container-fluid p-2">
                  <div class="row">
                <div class="col-md-6">
                  <form method="POST" action="generate_request.php"enctype="multipart/form-data">
                  <label for="">Name: </label>
                  <input type="text"name="name" class="form-control"id="name"autocomplete="off"required>
                  <span id="name"class="text-danger font-weight-bold"></span>
                </div>

                <div class="col-md-6">
                  <label for="">Roll No</label>
                  <input type="number" name="roll_no" class="form-control"autocomplete="off"required>
                </div>

                <div class="col-md-6">
                  <label for="">Phone No</label>
                  <input type="number"name="phone_no" class="form-control"autocomplete="off"required>
                </div>

                <div class="col-md-6">
                <label for="">Email Id</label>
                  <input type="email"name="email_id" class="form-control"autocomplete="off"required>
                </div>
                <div class="col-md-6">
                  <label for="">Type</label>
                  
                  <select class="form-select"name="type"required>
                    <option value="">--Select Type--</option>
                    <option>Student</option>
                    <option>Agent</option>
                    <option>Other</option>
                    
                  </select>
                  
                  <span class="required">
                    Amount to Pay: 500/-
                    <a href="https://magecomp.com/media/catalog/product/i/m/img_16022016_165507_1_.png"
                      target="_blank">Pay Now</a>
                  </span>
                </div>

                <div class="col-md-6">
                  <label for="">Purpose</label>
                  <input type="text"name="purpose" class="form-control"autocomplete="off"required>
                </div>
                <div class="col-md-6">
                  <label for="">Transaction ID</label>
                  <input type="text"name="transaction_id" class="form-control mt-0"autocomplete="off"required>
                </div>
                <div class="col-md-6">
                  <label for=""> Upload Document</label><br>
                  <input type="file" id="myfile"name="image"class="form-control" name="myfile"autocomplete="off"required>
                </div>
                <section>
                <div class="col-md-6 mt-2">
                
                    <!-- <button type="submit" name="Submit" class="btn btn-danger"style="width:20%;margin-left:0px;">Submit</button> -->
                    <button type="submit" class="btn btn-primary"name="Submit">Submit</button>
                  </div>
                </div>
                <div class="col-md-6 mt-2">
                  <!-- <div class="d-grid gap-2"style="margin-top:-6px;"> -->
                    <button type="submit" class="btn btn-danger"name="Submit">Reset</button>
                  </div>
                  
                </div>
              </div>
              </form>
              </section>
          </section>
        </div>
      </div>
    </div>
    </div>
  </section>


</body>

</html>