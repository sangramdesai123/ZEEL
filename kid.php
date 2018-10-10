<?php
  include 'partial/header.php';
 ?>

  
<div class="container text-center">    
    <h3 style="font-family: monospace; background-color:#ff5454"><b>Kids Apparel</b></h3><br>

   <?php 
      include 'controller/db.php';
      $sql='SELECT * FROM product WHERE Type="Men"';
      $res=mysqli_query($con,$sql);
      while ($row=mysqli_fetch_array($res)) {
       echo $row['Color'];
       echo "<br>";

      }
   ?>


<!--for loop throug result and desplay imag on creen-->
  <div class="row">
      <div class="col-lg-4  w3-container w3-center w3-animate-left">
        <a href="info.php"><img src="img/kids/k1.jpg" class="img-responsive imgdb" hspace="50"></a>
       <br><p style="font-family: monospace;"><b>United Colors of Benetton Men White & Blue Printed Round Neck T-shirt Rs. 879</p></b>
      </div>
  </div>



</div>

<?php
  include 'partial/footer.php';
 ?>