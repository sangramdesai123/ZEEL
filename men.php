<?php
  include 'partial/header.php';
 ?>
<div class="container text-center">    
  <h3 style="font-family: monospace; background-color:#ff5454"><b>Men Apparel</b></h3><br>


<?php 

/*Here i have added te button which need to style at the end*/
include 'controller/db.php';
$sql='SELECT * FROM product WHERE Type="Men"';
$res=mysqli_query($con,$sql);
echo '<div class="row">';
  while ($row=mysqli_fetch_array($res)) {
   echo '
        <!--for loop throug result and desplay imag on creen-->
                <div class="col-lg-4 w3-container w3-center w3-animate-left ">
                    <form action="info.php" method="GET">

                      <button name="btn" value="';echo $row['Product_Id'].'"><img  src='.$row['Url'].' class="img-responsive imgdb"  hspace="50"></button>
                    </form>
                    
                      <br><p style="font-family: monospace;  margin-left:50px; margin-right:57px"><b>SASSAFRAS Women Pink Floral Print A-Line Top
                      Rs. 1399(50% OFF) Rs. 700</b>
                </div>
   ';

}
echo "</div>";
 ?>

</div>


<?php
  include 'partial/footer.php';
 ?>