<?php
include "db_conn.php";

if (isset($_POST["submit"])) {
   $FULL_NAME = $_POST['FULL_NAME'];
   $DOB = $_POST['DOB'];
   $EMAIL_ID = $_POST['EMAIL_ID'];
   
   $sql = "INSERT INTO `system`(`ROLL_NO`, `FULL_NAME`, `DOB`, `EMAIL_ID`) 
   VALUES (NULL,'$FULL_NAME','$DOB','$EMAIL_ID')";

   $result = mysqli_query($conn, $sql);

   if ($result) {
      header("Location: index.php?msg=SUCCESSFUL!");
   } else 
   {
      echo "Failed: " . mysqli_error($conn);
   }
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=2.0">

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   <title> STUDENT APPLICATION</title>
</head>

<body>
   <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: yellow;">
    STUDENT APPLICATION
   </nav>

   <div class="container">
      <div class="text-center mb-3
      ">
         <h3>NEW STUDENT</h3>
         <p class="text-muted">______KINDLY FILL THE BELOW FORM FOR INVOLVEMENT______</p>
      </div>

      <div class="container d-flex justify-content-center">
         <form action="" method="post" style="width:50vw; min-width:300px;">
            <div class="row mb-4">
               <div class="col">
                  <label class="form-label">FULL NAME:</label>
                  <input type="text" class="form-control" name="FULL_NAME" placeholder="Albert Bandekar">
               </div>

               <div class="col">
                  <label class="form-label">DOB:</label>
                  <input type="date" class="form-control" name="DOB">
               </div>
            </div>

            <div class="mb-3">
               <label class="form-label">EMAIL ID:</label>
               <input type="email" class="form-control" name="EMAIL_ID" placeholder="name@example.com">
            </div>

            <div>
               <button type="submit" class="btn btn-success" name="submit">SUBMIT</button>
               <a href="index.php" class="btn btn-danger">CANCEL</a>
            </div>
         </form>
      </div>
   </div>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>
