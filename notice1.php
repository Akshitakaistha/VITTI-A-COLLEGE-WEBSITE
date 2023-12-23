<?php
include("Vitti.php");

// first
$sql1="SELECT `Notice_Id`, `File_Path`, `Description` FROM `notice` WHERE `Section`='1'; ";
$result1=mysqli_query($con,$sql1);

$syl1 =array();
while($row=mysqli_fetch_assoc($result1)){
    $syl1[]=$row;
}

// second

$sql2="SELECT `Notice_Id`, `File_Path`, `Description` FROM `notice` WHERE `Section`='2'; ";
$result2=mysqli_query($con,$sql2);

$syl2 =array();
while($row=mysqli_fetch_assoc($result2)){
    $syl2[]=$row;
}

// third

$sql3="SELECT `Notice_Id`, `File_Path`, `Description` FROM `notice` WHERE `Section`='3'; ";
$result3=mysqli_query($con,$sql3);

$syl3 =array();
while($row=mysqli_fetch_assoc($result3)){
    $syl3[]=$row;
}
// fourth
$sql4="SELECT `Notice_Id`, `File_Path`, `Description` FROM `notice` WHERE `Section`='4'; ";
$result4=mysqli_query($con,$sql4);

$syl4 =array();
while($row=mysqli_fetch_assoc($result4)){
    $syl4[]=$row;
}
// fifth

$sql5="SELECT `Notice_Id`, `File_Path`, `Description` FROM `notice` WHERE `Section`='5'; ";
$result5=mysqli_query($con,$sql5);

$syl5 =array();
while($row=mysqli_fetch_assoc($result5)){
    $syl5[]=$row;
}

// sixth
$sql6="SELECT `Notice_Id`, `File_Path`, `Description` FROM `notice` WHERE `Section`='6'; ";
$result6=mysqli_query($con,$sql6);

$syl6 =array();
while($row=mysqli_fetch_assoc($result6)){
    $syl6[]=$row;
}

// seventh

$sql7="SELECT `Notice_Id`, `File_Path`, `Description` FROM `notice` WHERE `Section`='7'; ";
$result7=mysqli_query($con,$sql7);

$syl7 =array();
while($row=mysqli_fetch_assoc($result7)){
    $syl7[]=$row;
}

// eighth
$sql8="SELECT `Notice_Id`, `File_Path`, `Description` FROM `notice` WHERE `Section`='8'; ";
$result8=mysqli_query($con,$sql8);

$syl8 =array();
while($row=mysqli_fetch_assoc($result8)){
    $syl8[]=$row;
}

// ninth
$sql9="SELECT `Notice_Id`, `File_Path`, `Description` FROM `notice` WHERE `Section`='9'; ";
$result9=mysqli_query($con,$sql9);

$syl9 =array();
while($row=mysqli_fetch_assoc($result9)){
    $syl9[]=$row;
}


mysqli_close($con);


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notice</title>
    <link rel="stylesheet" href="notice1.css">
</head>
<body>
    <!-- navbar -->

    <div class="navbar1">
        <h2><center>VITTI: Notice</center></h2>
        </div>


        <!-- marquee -->

        <div class="marq">
            <marquee direction="left">
              <span class="sd">  <a href="" download>1.Notice for Holiday on 23rd August due to excessive rainfall</a></span>
          <span class="sd"> <a href="" download>2.Notice for Holiday on 21st August due to excessive rainfall</a></span>  
            </marquee>
        </div>
    <!-- div modules -->
    <div class="container">
        
 
<div class="box">

    <h1>Holiday</h1>
    <div class="part-1">
    
   <form  method="POST">
  
   <?php  foreach($syl1 as $notice) : ?>
        <a href= "<?php echo $notice['File_Path']; ?>" download><?php echo $notice['Description']; ?></a>
    <br><br>
<?php endforeach; ?>
    <br><br> 
   </form> 
   
    </div>
</div>


<div class="box">
    <h1>Coding Club</h1>
    <div class="part-1">
        <form  method="POST">
        <?php  foreach($syl2 as $notice) : ?>
        <a href= "<?php echo $notice['File_Path']; ?>" download><?php echo $notice['Description']; ?></a>
    <br><br>
<?php endforeach; ?>
    <br><br> 
        </form> 
         </div>
</div>

<div class="box">
    <h1>Practical</h1>
    <div class="part-1">
        <form  method="POST">
        <?php  foreach($syl3 as $notice) : ?>
        <a href= "<?php echo $notice['File_Path']; ?>" download><?php echo $notice['Description']; ?></a>
    <br><br>
<?php endforeach; ?>
    <br><br> 
        </form> 
         </div>
</div>

</div>

<div class="container">


 <div class="box">
    <h1>Time-Table</h1>
    <div class="part-1">
        <form  method="POST">
        <?php  foreach($syl4 as $notice) : ?>
        <a href= "<?php echo $notice['File_Path']; ?>" download><?php echo $notice['Description']; ?></a>
    <br><br>
<?php endforeach; ?>
    <br><br> 
        </form> 
         </div>
</div>

<div class="box">
    <h1>Internship</h1>
    <div class="part-1">
        <form  method="POST">
        <?php  foreach($syl5 as $notice) : ?>
        <a href= "<?php echo $notice['File_Path']; ?>" download><?php echo $notice['Description']; ?></a>
    <br><br>
<?php endforeach; ?>
    <br><br> 
        </form> 
         </div>
</div>

<div class="box">
    <h1>Mid Semester</h1>
    <div class="part-1">
    <?php  foreach($syl6 as $notice) : ?>
        <a href= "<?php echo $notice['File_Path']; ?>" download><?php echo $notice['Description']; ?></a>
    <br><br>
<?php endforeach; ?>
    <br><br> 
        </form> 
         </div>
</div>
</div>

<div class="container">
<div class="box">
    <h1>Results</h1>
    <div class="part-1">
        <form  method="POST">
        <?php  foreach($syl7 as $notice) : ?>
        <a href= "<?php echo $notice['File_Path']; ?>" download><?php echo $notice['Description']; ?></a>
    <br><br>
<?php endforeach; ?>
    <br><br> 
        </form> 
         </div>
</div>

<div class="box">
    <h1>Fee-Deposit</h1>
    <div class="part-1">
        <form  method="POST">
        <?php  foreach($syl8 as $notice) : ?>
        <a href= "<?php echo $notice['File_Path']; ?>" download><?php echo $notice['Description']; ?></a>
    <br><br>
<?php endforeach; ?>
    <br><br> 
        </form> 
         </div>
</div>

<div class="box">
    <h1>Events</h1>
    <div class="part-1">
        <form  method="POST">
        <?php  foreach($syl9 as $notice) : ?>
        <a href= "<?php echo $notice['File_Path']; ?>" download><?php echo $notice['Description']; ?></a>
    <br><br>
<?php endforeach; ?>
    <br><br> 
        </form> 
         </div> 
</div>

</div> 

<!-- fOOTER -->
<div class="footer">
    <h2>VITTI</h2>
    <h2>School of Computer Science and Engineering, Government P.G. College Dharamshala</h2>
    <div class="social-links">
        <a href="https://www.facebook.com"class="social-link" >Facebook</a>
        <a href="https://www.instagram.com" class="social-link">Instagram</a>
        <a href="https://www.youtube.com" class="social-link">Youtube</a>
    </div>
    <p>@ 2023 VITTI.All rights reserved.</p>
</div>

   
    
</body>
</html>