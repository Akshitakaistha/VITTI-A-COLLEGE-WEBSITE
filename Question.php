<?php
include("Vitti.php");

$sql1="SELECT `Id`,  `Subject`, `Sub_code`, `Path` FROM `previous_question_year_paper` WHERE `Year`='1'";
$result1=mysqli_query($con,$sql1);

$syl1=array();
while($row=mysqli_fetch_assoc($result1)){
    $syl1[]=$row;
}

mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question Papers</title>
    <link rel="stylesheet" href="question.css">
    
</head>
<body>
    <!-- navbar -->
      
    <div class="navbar1">
        <h2><center>VITTI: Question Papers</center></h2>
        </div>
<!-- Subject List -->

<h1>List of Subjects</h1>
<table>
    <tr>
   <th>Subject Name</th>
   <th>Subject Code</th>
   <th>View</th>
   <th>Download</th>
   
   </tr>
<!-- 1 -->
   <tr>
    <td><?php echo $syl1[0]['Subject']; ?></td> 
    <td><?php echo $syl1[0]['Sub_code']; ?></td>
   <td><button class="view-link" data-pdf="<?php echo $syl1[0]['Path']; ?>">View</button></td>
    <td><a href="<?php echo $syl1[0]['Path'];?>" download >Download</a></td>
   </tr>
<!--2  -->
<tr>
<td><?php echo $syl1[1]['Subject']; ?></td> 
    <td><?php echo $syl1[1]['Sub_code']; ?></td>
   <td><button class="view-link" data-pdf="<?php echo $syl1[1]['Path']; ?>">View</button></td>
    <td><a href="<?php echo $syl1[1]['Path'];?>" download >Download</a></td>
   </tr>
<!-- 3 -->
<tr>
<td><?php echo $syl1[2]['Subject']; ?></td> 
    <td><?php echo $syl1[2]['Sub_code']; ?></td>
   <td><button class="view-link" data-pdf="<?php echo $syl1[2]['Path']; ?>">View</button></td>
    <td><a href="<?php echo $syl1[2]['Path'];?>" download >Download</a></td>
   </tr>
<!-- 4 -->
<tr>
<td><?php echo $syl1[3]['Subject']; ?></td> 
    <td><?php echo $syl1[3]['Sub_code']; ?></td>
   <td><button class="view-link" data-pdf="<?php echo $syl1[3]['Path']; ?>">View</button></td>
    <td><a href="<?php echo $syl1[3]['Path'];?>" download >Download</a></td>
   </tr>
<!-- 5 -->
<tr>
<td><?php echo $syl1[4]['Subject']; ?></td> 
    <td><?php echo $syl1[4]['Sub_code']; ?></td>
   <td><button class="view-link" data-pdf="<?php echo $syl1[4]['Path']; ?>">View</button></td>
    <td><a href="<?php echo $syl1[4]['Path'];?>" download >Download</a></td>
   </tr>
<!-- 6 -->
<tr>
<td><?php echo $syl1[5]['Subject']; ?></td> 
    <td><?php echo $syl1[5]['Sub_code']; ?></td>
   <td><button class="view-link" data-pdf="<?php echo $syl1[5]['Path']; ?>">View</button></td>
    <td><a href="<?php echo $syl1[5]['Path'];?>" download >Download</a></td>
   </tr>
<!-- 7 -->
<tr>
<td><?php echo $syl1[6]['Subject']; ?></td> 
    <td><?php echo $syl1[6]['Sub_code']; ?></td>
   <td><button class="view-link" data-pdf="<?php echo $syl1[6]['Path']; ?>">View</button></td>
    <td><a href="<?php echo $syl1[6]['Path'];?>" download >Download</a></td>
   </tr>
<!-- 8 -->
<tr>
<td><?php echo $syl1[7]['Subject']; ?></td> 
    <td><?php echo $syl1[7]['Sub_code']; ?></td>
   <td><button class="view-link" data-pdf="<?php echo $syl1[7]['Path']; ?>">View</button></td>
    <td><a href="<?php echo $syl1[7]['Path'];?>" download >Download</a></td>
   </tr>
<!-- 9 -->
<tr>
<td><?php echo $syl1[8]['Subject']; ?></td> 
    <td><?php echo $syl1[8]['Sub_code']; ?></td>
   <td><button class="view-link" data-pdf="<?php echo $syl1[8]['Path']; ?>">View</button></td>
    <td><a href="<?php echo $syl1[8]['Path'];?>" download >Download</a></td>
   </tr>
<!-- 10 -->
<tr>
<td><?php echo $syl1[9]['Subject']; ?></td> 
    <td><?php echo $syl1[9]['Sub_code']; ?></td>
   <td><button class="view-link" data-pdf="<?php echo $syl1[9]['Path']; ?>">View</button></td>
    <td><a href="<?php echo $syl1[9]['Path'];?>" download >Download</a></td>
   </tr>
<!-- 11 -->
<tr>
<td><?php echo $syl1[10]['Subject']; ?></td> 
    <td><?php echo $syl1[10]['Sub_code']; ?></td>
   <td><button class="view-link" data-pdf="<?php echo $syl1[10]['Path']; ?>">View</button></td>
    <td><a href="<?php echo $syl1[10]['Path'];?>" download >Download</a></td>
   </tr>
<!-- 12 -->
<tr>
<td><?php echo $syl1[11]['Subject']; ?></td> 
    <td><?php echo $syl1[11]['Sub_code']; ?></td>
   <td><button class="view-link" data-pdf="<?php echo $syl1[11]['Path']; ?>">View</button></td>
    <td><a href="<?php echo $syl1[11]['Path'];?>" download >Download</a></td>
   </tr>
<!-- 13 -->

</table>

<!-- model -->

<div class="overlay" id="pdf-overlay">
    <div class="pdf-container">
        <button id="close.pdf">Close</button>
        <iframe id="pdf-frame" src="" frameborder="0"></iframe>
    </div>
</div>

<!-- footer -->

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


<!-- script -->
<script>
const viewButton=document.querySelectorAll('.view-link')
const overlay=document.getElementById('pdf-overlay')
const pdfIframe=document.getElementById('pdf-frame')
const closePdfButton=document.getElementById('close.pdf')



viewButton.forEach((button,index) =>{
    button.addEventListener('click',() =>{
        const pdfFilePath=button.getAttribute('data-pdf');
        pdfIframe.src=pdfFilePath;
        overlay.style.display='block';
        document.body.style.overflow='hidden';
    });
});

closePdfButton.addEventListener('click', () =>{
    overlay.style.display='none';
    pdfIframe.src='';
    document.body.style.overflow='auto';
})
</script>
</body>
</html>