<?php
 include("Vitti.php");
 error_reporting(0);
 
    $name ="";
    $roll=""; 
    $sem="";
    $subject1 ="";
    $subject1_marks ="";
    $subject1_grade ="";
    $subject2 ="";
    $subject2_marks ="";
    $subject2_grade ="";
    $subject3 ="";
    $subject3_marks ="";
    $subject3_grade ="";
    $subject4 ="";
    $subject4_marks ="";
    $subject4_grade ="";
    $subject5 ="";
    $subject5_marks ="";
    $subject5_grade="";
    $subject6 ="";
    $subject6_marks ="";
    $subject6_grade ="";
    $subject7 ="";
    $subject7_marks ="";
    $subject7_grade ="";
    $total ="";
    $remarks="";


    if($_SERVER["REQUEST_METHOD"]=="POST")
{

    $name=($_POST['name']);
    $roll=($_POST['rollNo']);
    $sem=($_POST['sem']);


    $sql=mysqli_prepare($con,"SELECT * FROM `result` WHERE  `Roll_No`='$roll' ");

    if($sql){
        mysqli_stmt_execute($sql);

        mysqli_stmt_bind_result($sql,$name,
        $roll, 
        $sem,$subject1,
        $subject1_marks,
        $subject1_grade,
        $subject2,
        $subject2_marks,
        $subject2_grade,
        $subject3,
        $subject3_marks,
        $subject3_grade,
        $subject4,
        $subject4_marks,
        $subject4_grade,
        $subject5,
        $subject5_marks,
        $subject5_grade,
        $subject6,
        $subject6_marks,
        $subject6_grade,
        $subject7,
        $subject7_marks,
        $subject7_grade,
        $total,
        $remarks);


        mysqli_stmt_fetch($sql);

        mysqli_stmt_close($sql);
    }

  
    else{
        echo "no data found";
        echo "error".mysqli_error($con);
    }
    
mysqli_stmt_close($sql);
}
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results</title>
    <link rel="Stylesheet" href="result.css">
</head>
<body>
    <!--navbar-->
    <div class="navbar1">
        <center><h2>VITTI: Results</h2></center>
        </div>
    
    <!--First section-->
    
        <div class="First">
                <h1>
                    <center>
                        Student Evaluation Program:
                        Center of Enhancement and Learning
                    </center>  
                </h1>
                </div>
    <!-- REsults -->
    <h3 id="det">Enter Student Details</h3>
    <div class="Container" id="container">
       
            <form id="StudentForm"  method="POST">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required><br><br>

                <label for="rollNo">University Roll No:</label>
                <input type="number" id="rollNo" name="rollNo" required><br><br>

                <label for="sem">Semester:</label>
                <input type="number" id="sem" name="sem" required><br><br>

                <a class="switch-link" href="#" onclick="showResult()">
                <button type="submit" id="SubmitBtn" name="bt" value="bt">Submit</button></a>
            </form>
            
        </div>
    </div>

    <!-- REsult card -->
    <div class="ResultCard" id="result">
        <h5>VITTI</h5>
        <center><p>School Of Computer Science and Engineering
            Government P.G College Dharamshala</p>
            <p><b>MID SEM RESULTS</b></p></center>

        <table>
            <tr>
                <th>Name:</th>
                <td id="nameResults"><?php echo $name; ?></td>
            </tr>
            <tr>
                <th>Roll No.</th>
                <td id="rollNoResult"><?php echo $roll; ?></td>
            </tr>
            <tr>
                <th>Semester</th>
                <td id="semResults"><?php echo $sem; ?></td>
            </tr>
            <tr>   
            <th>Subject</th>
            <th>Marks</th>
            <th>Grade</th>
            </tr>
            <tr>
                <td><?php echo $subject1; ?></td>
                <td><?php echo $subject1_marks; ?></td>
                <td><?php echo $subject1_grade; ?></td>
            </tr>
            <tr>
            <td><?php echo $subject2; ?></td>
                <td><?php echo $subject2_marks; ?></td>
                <td><?php echo $subject2_grade; ?></td>
            </tr>
            <tr>
            <td><?php echo $subject3; ?></td>
                <td><?php echo $subject3_marks; ?></td>
                <td><?php echo $subject3_grade; ?></td>
            </tr>
            <tr>
            <td><?php echo $subject4; ?></td>
                <td><?php echo $subject4_marks; ?></td>
                <td><?php echo $subject4_grade; ?></td>
            </tr>
            <tr>
            <td><?php echo $subject5; ?></td>
                <td><?php echo $subject5_marks; ?></td>
                <td><?php echo $subject5_grade; ?></td>
            </tr>
            <tr>
            <td><?php echo $subject6; ?></td>
                <td><?php echo $subject6_marks; ?></td>
                <td><?php echo $subject6_grade; ?></td>
            </tr>
            <tr>
            <td><?php echo $subject7; ?></td>
                <td><?php echo $subject7_marks; ?></td>
                <td><?php echo $subject7_grade; ?></td>
            </tr>
            <tr>
                <th>Total</th>
                <td id="totalResults"><?php echo $total; ?></td>
            </tr>
            <tr>
                <th>Remarks:</th>
                <td id="remarks"><?php echo $remarks ?></td>
            </tr>
        </table>
<a class="switch-link" href="#" onclick="showform()" >Search Another Result</a>
    </div>


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

    <script>
        function showResult(){
            document.getElementById('container').style.display='none';
            document.getElementById('result').style.display='block';
            document.getElementById('det').style.display='none';
        }
        function showform(){
            document.getElementById('container').style.display='block';
            document.getElementById('result').style.display='none';
            document.getElementById('det').style.display='block';
        }


    </script>
</body>
</html>



