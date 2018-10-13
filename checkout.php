<?php
  include 'partial/header.php';
 ?>
<div class="container">

<div class="row">
  
  <div class="check col">
    <table class="table table-bordered">
      <?php
      include 'controller/db.php';
       echo "<br>";   

      echo '
        <th colspan="2"> User Information </th>
            <tr>
              <td>Name:</td>
              <td>'.$_SESSION['u_name'].' </td>
            </tr>
            <tr>
              <td>Email:</td>
              <td>'.$_SESSION['u_email'].' </td>
            </tr>
            <tr>
              <td>Mobile No:</td>
              <td>'.$_SESSION['u_phone'].' </td>
            </tr>
            <tr>
              <td>Address :</td>
              <td>'.$_SESSION['u_address'].' </td>
            </tr>
          </table>
        </div>';
      $pid=$_GET['btn'];
      $price="";
        echo "<br>";   
                  //for product trable
                  $sqll="SELECT * FROM product WHERE Product_Id='$pid'";
                  $ress=mysqli_query($con,$sqll);
                  while ($row=mysqli_fetch_array($ress)) {
                    $price=$row['Price'];
                      echo '
                      <form action="payment.php" method="GET">
                          <div class="check col">
                          <table class="table table-bordered">
                             <th colspan="2"> Product Information </th>

                              <tr>
                                <td>Product Id :</td>
                                <td>'.$row['Product_Id'].' </td>
                              </tr>
                              <tr>
                                <td>Brand :</td>
                                <td>'.$row['Brand'].' </td>
                              </tr>
                              <tr>
                                <td>Color :</td>
                                <td>'.$row['Color'].' </td>
                              </tr>
                              <tr>
                                <td>Size :</td>
                                <td>'.$row['Size'].' </td>
                              </tr>
                              <tr>
                                <td>Material :</td>
                                <td>'.$row['Material'].' </td>
                              </tr>
                              <tr class="table-success">
                                <td>Total Price :</td>
                                <td>'.$row['Price'].' </td>
                              </tr>

                            </table>
                          
                            <button class="btn cc btn-success" name="btn" value="'.$row['Price'].'">proceed to checkout</button>
                          </form></div></div>';
                        }


                        
?>
<br>





</div>


 <?php
  include 'partial/footer.php';
 ?>