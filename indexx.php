<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body style="margin:0; padding:0; background-image:url(https://www.homespakistan.com/blog/wp-content/uploads/2020/02/Purchasing.jpeg); background-repeat:no-repeat; background-size:cover; background-position:fixed;">
    
 <div class="container mt-3" style="background-color:rgba(255,255,255,0.3);">
 <h1 class="mx-4" style="color:green;">Pakistan Housing Scheme</h1> 
    
    <form method="post" action="">
        <div class="form-group py-1 px-5">
            <label for="name"  style="">Name:</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Enter your name">
         <!-- <p class="info" style="display:none"></p> -->
        </div>
        <div class="form-group py-1 px-5">
            <label for="age">Age:</label>
            <input type="number" name="age" id="age" class="form-control" placeholder="Enter your age">
        </div>
        <div class="form-group py-1 px-5">
            <label for="salary">Salary</label>
            <input type="number" name="salary" id="salary" class="form-control" placeholder="Enter your salary">
        </div>

        <h1 class="mx-4"  style="color:green;">Enter Your mortgage You Need</h1> 

        <div class="form-group py-1 px-5">
            <label for="loan">Loan:</label>
            <input type="number" name="loan" id="loan" class="form-control" placeholder="Enter your Loan">
        </div>
        
        <div class="form-group py-1 px-5">
            <label for="advanced">Advanced payment:</label>
            <input type="number" name="advanced" id="advanced" class="form-control" placeholder="Enter your advanced you need">
        </div>
        <div class="form-group py-1 px-5">
            <label for="year">Year:</label>
            <input type="number" name="year" id="year" class="form-control" placeholder="Enter year of returing Loan">
        </div>
        <input type="submit" name="" id="submit" class="btn btn-info py-1 px-3 mx-5 mb-2" value="Submit">

</form>
</div>
  

<?php
   if(isset($_POST['age']) && isset($_POST['salary'])){
       $current = $_POST["loan"] - $_POST["advanced"] ;   
     
       $montly = ($current * 2.5)/100;
       $ins_year = $_POST['year']*12;
       $agee = $_POST['age'];
    $sal= $_POST['salary'];
     if ($agee >= 30) {
       
         $amount= ($current + $montly)/ $ins_year;
     

      if ($amount > ($_POST['salary'])) { ?>
      <h1 class="text-center text-upprcase" style= "color:#2B7DE9"> hello.. ! <?php echo $_POST['name'] ?> </h1>
      <h3  class="px-5 pt-5 text-center" style= "color:#2B7DE9">  your monthly payable amount <?php echo ceil($amount ) ?> rupees is more than  <?php  echo $_POST['salary'] ?> rupees </h3>
   
   <?php 
   }
   else {
    ?>
   <h1 class="text-center text-upprcase" style= "color:#2B7DE9"> Dear <?php  echo $_POST['name'] ?></h1>
      <h3 class="px-5 text-center" style= "color:#2B7DE9">
          You will pay  <?php echo ceil($amount ) ?> Rupees everymonth for <?php  echo $_POST['year'] ?> years </h3>
 <?php 
   }
}
else{ ?>

  <h1  class="text-center upprcase-text" style= "color:#2B7DE9" > dear  <?php echo $_POST['name'] ?>  <br> You are under age </h1>
  <?php
}

} 
?>
      
  





</body>
</html>