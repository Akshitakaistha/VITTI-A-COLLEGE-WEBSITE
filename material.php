<?php
include("Vitti.php");
// first

$sql1="SELECT `Notes_Id`,  `Sub_Code`, `Subject`, `Notes_Path`, `Book_Path` FROM `notes` WHERE `Semester`='1'";
$result1=mysqli_query($con,$sql1);

$syl1=array();
while($row=mysqli_fetch_assoc($result1)){
    $syl1[]=$row;
}
// second
$sql2="SELECT `Notes_Id`,  `Sub_Code`, `Subject`, `Notes_Path`, `Book_Path` FROM `notes` WHERE `Semester`='2'";
$result2=mysqli_query($con,$sql2);

$syl2=array();
while($row=mysqli_fetch_assoc($result2)){
    $syl2[]=$row;
}
// third
$sql3="SELECT `Notes_Id`,  `Sub_Code`, `Subject`, `Notes_Path`, `Book_Path` FROM `notes` WHERE `Semester`='3'";
$result3=mysqli_query($con,$sql3);

$syl3=array();
while($row=mysqli_fetch_assoc($result3)){
    $syl3[]=$row;
}

// fourth
$sql4="SELECT `Notes_Id`,  `Sub_Code`, `Subject`, `Notes_Path`, `Book_Path` FROM `notes` WHERE `Semester`='4'";
$result4=mysqli_query($con,$sql4);

$syl4=array();
while($row=mysqli_fetch_assoc($result4)){
    $syl4[]=$row;
}

// fifth
$sql5="SELECT `Notes_Id`,  `Sub_Code`, `Subject`, `Notes_Path`, `Book_Path` FROM `notes` WHERE `Semester`='5'";
$result5=mysqli_query($con,$sql5);

$syl5=array();
while($row=mysqli_fetch_assoc($result5)){
    $syl5[]=$row;
}

// sixth
$sql6="SELECT `Notes_Id`,  `Sub_Code`, `Subject`, `Notes_Path`, `Book_Path` FROM `notes` WHERE `Semester`='6'";
$result6=mysqli_query($con,$sql6);

$syl6=array();
while($row=mysqli_fetch_assoc($result6)){
    $syl6[]=$row;
}

// seventh
$sql7="SELECT `Notes_Id`,  `Sub_Code`, `Subject`, `Notes_Path`, `Book_Path` FROM `notes` WHERE `Semester`='7'";
$result7=mysqli_query($con,$sql7);

$syl7=array();
while($row=mysqli_fetch_assoc($result7)){
    $syl7[]=$row;
}

// eighth
$sql8="SELECT `Notes_Id`,  `Sub_Code`, `Subject`, `Notes_Path`, `Book_Path` FROM `notes` WHERE `Semester`='8'";
$result8=mysqli_query($con,$sql8);

$syl8=array();
while($row=mysqli_fetch_assoc($result8)){
    $syl8[]=$row;
}

mysqli_close($con);
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Material</title>
    <link rel="stylesheet" href="material.css">
</head>
<body>
    <!-- Navbar -->
    <div class="navbar1">
        <h2><center>VITTI: Material</center></h2>
        </div>

        <!-- Table 1 -->

        <div class="container">
  
    <table>
        <tr>
            <th colspan="=4" class="head"><h3>Semester-1</h3></th>
        </tr>
        <tr>
        <th>Subject</th>
            <th>Subject Code</th>
            <th>Notes</th>
            <th>Book</th>
        </tr>
        <tr>
        <td><?php echo $syl1[0]['Subject']; ?> </td>
            <td><?php echo $syl1[0]['Sub_Code']; ?></td>
            <td><a href="<?php echo $syl1[0]['Notes_Path']; ?>" download>Notes</a></td>
            <td><a  href="<?php echo $syl1[0]['Book_Path']; ?>" download>Book</a></td>
        </tr>
        <tr>
        <td><?php echo $syl1[1]['Subject']; ?> </td>
            <td><?php echo $syl1[1]['Sub_Code']; ?></td>
            <td><a href="<?php echo $syl1[1]['Notes_Path']; ?>" download>Notes</a></td>
            <td><a  href="<?php echo $syl1[1]['Book_Path']; ?>" download>Book</a></td>
        </tr>
        <tr>
        <td><?php echo $syl1[2]['Subject']; ?> </td>
            <td><?php echo $syl1[2]['Sub_Code']; ?></td>
            <td><a href="<?php echo $syl1[2]['Notes_Path']; ?>" download>Notes</a></td>
            <td><a  href="<?php echo $syl1[2]['Book_Path']; ?>" download>Book</a></td>
        </tr>
        <tr>
        <td><?php echo $syl1[3]['Subject']; ?> </td>
            <td><?php echo $syl1[3]['Sub_Code']; ?></td>
            <td><a href="<?php echo $syl1[3]['Notes_Path']; ?>" download>Notes</a></td>
            <td><a  href="<?php echo $syl1[3]['Book_Path']; ?>" download>Book</a></td>
        </tr>
        <tr>
        <td><?php echo $syl1[4]['Subject']; ?> </td>
            <td><?php echo $syl1[4]['Sub_Code']; ?></td>
            <td><a href="<?php echo $syl1[4]['Notes_Path']; ?>" download>Notes</a></td>
            <td><a  href="<?php echo $syl1[4]['Book_Path']; ?>" download>Book</a></td>
        </tr>
        <tr>
        <td><?php echo $syl1[5]['Subject']; ?> </td>
            <td><?php echo $syl1[5]['Sub_Code']; ?></td>
            <td><a href="<?php echo $syl1[5]['Notes_Path']; ?>" download>Notes</a></td>
            <td><a  href="<?php echo $syl1[5]['Book_Path']; ?>" download>Book</a></td>
        </tr>
        
       
    </table>

    <!-- ṭable 2 -->
    
    <table>
        <tr>
            <th colspan="=4" class="head"><h3>Semester-2</h3></th>
        </tr>
        <tr>
            <th>Subject</th>
            <th>Subject Code</th>
            <th>Notes</th>
            <th>Book</th>
        </tr>
        <tr>
        <td><?php echo $syl2[0]['Subject']; ?> </td>
            <td><?php echo $syl2[0]['Sub_Code']; ?></td>
            <td><a href="<?php echo $syl2[0]['Notes_Path']; ?>" download>Notes</a></td>
            <td><a  href="<?php echo $syl2[0]['Book_Path']; ?>" download>Book</a></td>
        </tr>
        <tr>
        <td><?php echo $syl2[1]['Subject']; ?> </td>
            <td><?php echo $syl2[1]['Sub_Code']; ?></td>
            <td><a href="<?php echo $syl2[1]['Notes_Path']; ?>" download>Notes</a></td>
            <td><a  href="<?php echo $syl2[1]['Book_Path']; ?>" download>Book</a></td>
        </tr>
        <tr>
        <td><?php echo $syl2[2]['Subject']; ?> </td>
            <td><?php echo $syl2[2]['Sub_Code']; ?></td>
            <td><a href="<?php echo $syl2[2]['Notes_Path']; ?>" download>Notes</a></td>
            <td><a  href="<?php echo $syl2[2]['Book_Path']; ?>" download>Book</a></td>
        </tr>
        <tr>
        <td><?php echo $syl2[3]['Subject']; ?> </td>
            <td><?php echo $syl2[3]['Sub_Code']; ?></td>
            <td><a href="<?php echo $syl2[3]['Notes_Path']; ?>" download>Notes</a></td>
            <td><a  href="<?php echo $syl2[3]['Book_Path']; ?>" download>Book</a></td>
        </tr>
        <tr>
        <td><?php echo $syl2[4]['Subject']; ?> </td>
            <td><?php echo $syl2[4]['Sub_Code']; ?></td>
            <td><a href="<?php echo $syl2[4]['Notes_Path']; ?>" download>Notes</a></td>
            <td><a  href="<?php echo $syl2[4]['Book_Path']; ?>" download>Book</a></td>
        </tr>
        <tr>
        <td><?php echo $syl2[5]['Subject']; ?> </td>
            <td><?php echo $syl2[5]['Sub_Code']; ?></td>
            <td><a href="<?php echo $syl2[5]['Notes_Path']; ?>" download>Notes</a></td>
            <td><a  href="<?php echo $syl2[5]['Book_Path']; ?>" download>Book</a></td>       
         </tr>
        
        
    </table>

    <!-- table3 -->
  
    <table>
        <tr>
            <th colspan="=4" class="head"><h3>Semester-3</h3></th>
        </tr>
        <tr>
            <th>Subject</th>
            <th>Subject Code</th>
            <th>Notes</th>
            <th>Book</th>
        </tr>
        <tr>
        <td><?php echo $syl3[0]['Subject']; ?> </td>
            <td><?php echo $syl3[0]['Sub_Code']; ?></td>
            <td><a href="<?php echo $syl3[0]['Notes_Path']; ?>" download>Notes</a></td>
            <td><a  href="<?php echo $syl3[0]['Book_Path']; ?>" download>Book</a></td>
        </tr>
        <tr>
        <td><?php echo $syl3[1]['Subject']; ?> </td>
            <td><?php echo $syl3[1]['Sub_Code']; ?></td>
            <td><a href="<?php echo $syl3[1]['Notes_Path']; ?>" download>Notes</a></td>
            <td><a  href="<?php echo $syl3[1]['Book_Path']; ?>" download>Book</a></td>
        </tr>
        <tr>
        <td><?php echo $syl3[2]['Subject']; ?> </td>
            <td><?php echo $syl3[2]['Sub_Code']; ?></td>
            <td><a href="<?php echo $syl3[2]['Notes_Path']; ?>" download>Notes</a></td>
            <td><a  href="<?php echo $syl3[2]['Book_Path']; ?>" download>Book</a></td>
        </tr>
        <tr>
        <td><?php echo $syl3[3]['Subject']; ?> </td>
            <td><?php echo $syl3[3]['Sub_Code']; ?></td>
            <td><a href="<?php echo $syl3[3]['Notes_Path']; ?>" download>Notes</a></td>
            <td><a  href="<?php echo $syl3[3]['Book_Path']; ?>" download>Book</a></td>
        </tr>
        <tr>
        <td><?php echo $syl3[4]['Subject']; ?> </td>
            <td><?php echo $syl3[4]['Sub_Code']; ?></td>
            <td><a href="<?php echo $syl3[4]['Notes_Path']; ?>" download>Notes</a></td>
            <td><a  href="<?php echo $syl3[4]['Book_Path']; ?>" download>Book</a></td>
        </tr>
        <tr>
        <td><?php echo $syl3[5]['Subject']; ?> </td>
            <td><?php echo $syl3[5]['Sub_Code']; ?></td>
            <td><a href="<?php echo $syl3[5]['Notes_Path']; ?>" download>Notes</a></td>
            <td><a  href="<?php echo $syl3[5]['Book_Path']; ?>" download>Book</a></td>
        </tr>
       
    </table>

    <!-- Table 4 -->
    
    <table>
        <tr>
            <th colspan="=4" class="head"><h3>Semester-4</h3></th>
        </tr>
        <tr>
            <th>Subject</th>
            <th>Subject Code</th>
            <th>Notes</th>
            <th>Book</th>
        </tr>
        <tr>
        <td><?php echo $syl4[0]['Subject']; ?> </td>
            <td><?php echo $syl4[0]['Sub_Code']; ?></td>
            <td><a href="<?php echo $syl4[0]['Notes_Path']; ?>" download>Notes</a></td>
            <td><a  href="<?php echo $syl4[0]['Book_Path']; ?>" download>Book</a></td>
        </tr>
        <tr>
        <td><?php echo $syl4[1]['Subject']; ?> </td>
            <td><?php echo $syl4[1]['Sub_Code']; ?></td>
            <td><a href="<?php echo $syl4[1]['Notes_Path']; ?>" download>Notes</a></td>
            <td><a  href="<?php echo $syl4[1]['Book_Path']; ?>" download>Book</a></td>
        </tr>
        <tr>
        <td><?php echo $syl4[2]['Subject']; ?> </td>
            <td><?php echo $syl4[2]['Sub_Code']; ?></td>
            <td><a href="<?php echo $syl4[2]['Notes_Path']; ?>" download>Notes</a></td>
            <td><a  href="<?php echo $syl4[2]['Book_Path']; ?>" download>Book</a></td>
        </tr>
        <tr>
        <td><?php echo $syl4[3]['Subject']; ?> </td>
            <td><?php echo $syl4[3]['Sub_Code']; ?></td>
            <td><a href="<?php echo $syl4[3]['Notes_Path']; ?>" download>Notes</a></td>
            <td><a  href="<?php echo $syl4[3]['Book_Path']; ?>" download>Book</a></td>
        </tr>
        <tr>
        <td><?php echo $syl4[4]['Subject']; ?> </td>
            <td><?php echo $syl4[4]['Sub_Code']; ?></td>
            <td><a href="<?php echo $syl4[4]['Notes_Path']; ?>" download>Notes</a></td>
            <td><a  href="<?php echo $syl4[4]['Book_Path']; ?>" download>Book</a></td>
        </tr>
        <tr>
        <td><?php echo $syl4[5]['Subject']; ?> </td>
            <td><?php echo $syl4[5]['Sub_Code']; ?></td>
            <td><a href="<?php echo $syl4[5]['Notes_Path']; ?>" download>Notes</a></td>
            <td><a  href="<?php echo $syl4[5]['Book_Path']; ?>" download>Book</a></td>
        </tr>
       
    </table>

    <!-- table 5 -->
   
    <table>
        <tr>
            <th colspan="=4" class="head"><h3>Semester-5</h3></th>
        </tr>
        <tr>
            <th>Subject</th>
            <th>Subject Code</th>
            <th>Notes</th>
            <th>Book</th>
        </tr>
        <tr>
        <td><?php echo $syl5[0]['Subject']; ?> </td>
            <td><?php echo $syl5[0]['Sub_Code']; ?></td>
            <td><a href="<?php echo $syl5[0]['Notes_Path']; ?>" download>Notes</a></td>
            <td><a  href="<?php echo $syl5[0]['Book_Path']; ?>" download>Book</a></td>
        </tr>
        <tr>
        <td><?php echo $syl5[1]['Subject']; ?> </td>
            <td><?php echo $syl5[1]['Sub_Code']; ?></td>
            <td><a href="<?php echo $syl5[1]['Notes_Path']; ?>" download>Notes</a></td>
            <td><a  href="<?php echo $syl5[1]['Book_Path']; ?>" download>Book</a></td>
        </tr>
        <tr>
        <td><?php echo $syl5[2]['Subject']; ?> </td>
            <td><?php echo $syl5[2]['Sub_Code']; ?></td>
            <td><a href="<?php echo $syl5[2]['Notes_Path']; ?>" download>Notes</a></td>
            <td><a  href="<?php echo $syl5[2]['Book_Path']; ?>" download>Book</a></td>
        </tr>
        <tr>
        <td><?php echo $syl5[3]['Subject']; ?> </td>
            <td><?php echo $syl5[3]['Sub_Code']; ?></td>
            <td><a href="<?php echo $syl5[3]['Notes_Path']; ?>" download>Notes</a></td>
            <td><a  href="<?php echo $syl5[3]['Book_Path']; ?>" download>Book</a></td>
        </tr>
        <tr>
        <td><?php echo $syl5[4]['Subject']; ?> </td>
            <td><?php echo $syl5[4]['Sub_Code']; ?></td>
            <td><a href="<?php echo $syl5[4]['Notes_Path']; ?>" download>Notes</a></td>
            <td><a  href="<?php echo $syl5[4]['Book_Path']; ?>" download>Book</a></td>
        </tr>
        <tr>
        <td><?php echo $syl5[5]['Subject']; ?> </td>
            <td><?php echo $syl5[5]['Sub_Code']; ?></td>
            <td><a href="<?php echo $syl5[5]['Notes_Path']; ?>" download>Notes</a></td>
            <td><a  href="<?php echo $syl5[5]['Book_Path']; ?>" download>Book</a></td>
        </tr>
       
    </table>

    <!-- table 6 -->
   
    
    <table>
        <tr>
            <th colspan="=4" class="head"><h3>Semester-6</h3></th>
        </tr>
        <tr>
            <th>Subject</th>
            <th>Subject Code</th>
            <th>Notes</th>
            <th>Book</th>
        </tr>
        <tr>
        <td><?php echo $syl6[0]['Subject']; ?> </td>
            <td><?php echo $syl6[0]['Sub_Code']; ?></td>
            <td><a href="<?php echo $syl6[0]['Notes_Path']; ?>" download>Notes</a></td>
            <td><a  href="<?php echo $syl6[0]['Book_Path']; ?>" download>Book</a></td>
        </tr>
        <tr>
        <td><?php echo $syl6[1]['Subject']; ?> </td>
            <td><?php echo $syl6[1]['Sub_Code']; ?></td>
            <td><a href="<?php echo $syl6[1]['Notes_Path']; ?>" download>Notes</a></td>
            <td><a  href="<?php echo $syl6[1]['Book_Path']; ?>" download>Book</a></td>
        </tr>
        <tr>
        <td><?php echo $syl6[2]['Subject']; ?> </td>
            <td><?php echo $syl6[2]['Sub_Code']; ?></td>
            <td><a href="<?php echo $syl6[2]['Notes_Path']; ?>" download>Notes</a></td>
            <td><a  href="<?php echo $syl6[2]['Book_Path']; ?>" download>Book</a></td>
        </tr>
        <tr>
        <td><?php echo $syl6[3]['Subject']; ?> </td>
            <td><?php echo $syl6[3]['Sub_Code']; ?></td>
            <td><a href="<?php echo $syl6[3]['Notes_Path']; ?>" download>Notes</a></td>
            <td><a  href="<?php echo $syl6[3]['Book_Path']; ?>" download>Book</a></td>
        </tr>
        <tr>
        <td><?php echo $syl6[4]['Subject']; ?> </td>
            <td><?php echo $syl6[4]['Sub_Code']; ?></td>
            <td><a href="<?php echo $syl6[4]['Notes_Path']; ?>" download>Notes</a></td>
            <td><a  href="<?php echo $syl6[4]['Book_Path']; ?>" download>Book</a></td>
        </tr>
        <tr>
        <td><?php echo $syl6[5]['Subject']; ?> </td>
            <td><?php echo $syl6[5]['Sub_Code']; ?></td>
            <td><a href="<?php echo $syl6[5]['Notes_Path']; ?>" download>Notes</a></td>
            <td><a  href="<?php echo $syl6[5]['Book_Path']; ?>" download>Book</a></td>
        </tr>
        <tr>
       
    </table>
    <!-- table7 -->
   
    <table>
        <tr>
            <th colspan="=4" class="head"><h3>Semester-7</h3></th>
        </tr>
        <tr>
            <th>Subject</th>
            <th>Subject Code</th>
            <th>Notes</th>
            <th>Book</th>
        </tr>
        <tr>
        <td><?php echo $syl7[0]['Subject']; ?> </td>
            <td><?php echo $syl7[0]['Sub_Code']; ?></td>
            <td><a href="<?php echo $syl7[0]['Notes_Path']; ?>" download>Notes</a></td>
            <td><a  href="<?php echo $syl7[0]['Book_Path']; ?>" download>Book</a></td>
        </tr>
        <tr>
        <td><?php echo $syl7[1]['Subject']; ?> </td>
            <td><?php echo $syl7[1]['Sub_Code']; ?></td>
            <td><a href="<?php echo $syl7[1]['Notes_Path']; ?>" download>Notes</a></td>
            <td><a  href="<?php echo $syl7[1]['Book_Path']; ?>" download>Book</a></td>
        </tr>
        <tr>
        <td><?php echo $syl7[2]['Subject']; ?> </td>
            <td><?php echo $syl7[2]['Sub_Code']; ?></td>
            <td><a href="<?php echo $syl7[2]['Notes_Path']; ?>" download>Notes</a></td>
            <td><a  href="<?php echo $syl7[2]['Book_Path']; ?>" download>Book</a></td>
        </tr>
        <tr>
        <td><?php echo $syl7[3]['Subject']; ?> </td>
            <td><?php echo $syl7[3]['Sub_Code']; ?></td>
            <td><a href="<?php echo $syl7[3]['Notes_Path']; ?>" download>Notes</a></td>
            <td><a  href="<?php echo $syl7[3]['Book_Path']; ?>" download>Book</a></td>
        </tr>
        <tr>
        <td><?php echo $syl7[4]['Subject']; ?> </td>
            <td><?php echo $syl7[4]['Sub_Code']; ?></td>
            <td><a href="<?php echo $syl7[4]['Notes_Path']; ?>" download>Notes</a></td>
            <td><a  href="<?php echo $syl7[4]['Book_Path']; ?>" download>Book</a></td>
        </tr>
       
    </table>

    <!-- table 8 -->
  
    <table>
        <tr>
            <th colspan="=4" class="head"><h3>Semester-8</h3></th>
        </tr>
        <tr>
            <th>Subject</th>
            <th>Subject Code</th>
            <th>Notes</th>
            <th>Book</th>
        </tr>
        <tr>
        <td><?php echo $syl8[0]['Subject']; ?> </td>
            <td><?php echo $syl8[0]['Sub_Code']; ?></td>
            <td><a href="<?php echo $syl8[0]['Notes_Path']; ?>" download>Notes</a></td>
            <td><a  href="<?php echo $syl8[0]['Book_Path']; ?>" download>Book</a></td>
        </tr>
        <tr>
        <td><?php echo $syl8[1]['Subject']; ?> </td>
            <td><?php echo $syl8[1]['Sub_Code']; ?></td>
            <td><a href="<?php echo $syl8[1]['Notes_Path']; ?>" download>Notes</a></td>
            <td><a  href="<?php echo $syl8[1]['Book_Path']; ?>" download>Book</a></td>
        </tr>
        <tr>
        <td><?php echo $syl8[2]['Subject']; ?> </td>
            <td><?php echo $syl8[2]['Sub_Code']; ?></td>
            <td><a href="<?php echo $syl8[2]['Notes_Path']; ?>" download>Notes</a></td>
            <td><a  href="<?php echo $syl8[2]['Book_Path']; ?>" download>Book</a></td>
        </tr>
       
    </table>

    </div>
    <hr>

    <!-- Videos -->
<marquee direction="left" scrollamount="3" behaviour="scroll" >
    <!-- 1 -->

    <video width="320" height ="240" controls >
<source src="https://youtu.be/VIPiVmYuoqw?si=fXIFVVVGz9VNhvomO" type="video/mp4">
    </video>
    
    <!-- 2 -->
    <video width="320" height ="240" controls >
        <source src="https://youtu.be/_rl2yI9NHU?si=h3O8knyQfl3Tgef_" type="video/mp4">
            </video>
 
            <!-- 3 -->
            <video width="320" height ="240" controls >
                <source src="https://youtu.be/gyXB8HQkGg?siRV7sX3Q95OON5I2i" type="video/mp4">
                    </video>
<!-- 4 -->
<video width="320" height ="240" controls >
    <source src="https://youtu.be/TqqkZLHoY0o?si=j6RJBdTPWRKZSVeX" type="video/mp4">
        </video>


<!-- 5 -->
<video width="320" height ="240" controls >
    <source src="https://youtu.be/VIPiVmYuoqw?si=fXIFVVVGz9VNhvomO" type="video/mp4">
        </video>
</marquee>

    <!-- Footer -->
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