<?php
  include 'partial/header.php';
 ?>
  
<div class="container text-center">    
  <h3 style="font-family: monospace;  background-color:#ff5454"><b>Women Apparel</b></h3><br>

<?php 
include 'controller/db.php';
$sql='SELECT * FROM product WHERE Type="Women"';
$res=mysqli_query($con,$sql);
while ($row=mysqli_fetch_array($res)) {
 echo $row['Color'];
 echo "<br>";

}
 ?>


<!--for loop throug result and desplay imag on creen-->
     <div class="row">
          <div class="col-lg-4 w3-container w3-center w3-animate-left ">
              <a href="info.php"><img src="img/women/f1.jpg" class="img-responsive imgdb"  hspace="50"></a>
                <br><p style="font-family: monospace;  margin-left:50px; margin-right:57px"><b>SASSAFRAS Women Pink Floral Print A-Line Top
                Rs. 1399(50% OFF) Rs. 700</b>
          </div>
    </div>


</div>

<?php
  include 'partial/footer.php';
 ?>