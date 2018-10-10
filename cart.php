<?php
  include 'partial/header.php';
 ?>
<div class="container cart">
	
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Image</th>
        <th scope="col">Product Id</th>
        <th scope="col">Brand</th>
        <th scope="col">Color</th>
        <th scope="col">Size</th>
        <th scope="col">Material</th>
        <th scope="col">Total Price</th>
        <th scope="col">Remove</th>
      </tr>
    </thead>
    <tbody>
           <?php 
              include 'controller/db.php';
              $sql='SELECT * FROM product WHERE Type="Men"';
              $res=mysqli_query($con,$sql);
              while ($row=mysqli_fetch_array($res)) {
               echo $row['Color'];
               echo "<br>";   

              }
           ?>




      <tr>
        <th class="imgtable"><img src="img/men/m1.jpg"></th>
        <td><div>Mark</div></td>
        <td><div>Mark</div></td>
        <td><div>Mark</div></td>
        <td><div>Mark</div></td>
        <td><div>Mark</div></td>
        <td><div>Mark</div></td>
        <td style="width: 15px;">
          <div>
              <button  type="button" class="close remove">
                <span aria-hidden="true">&times;</span>
              </button>
        </div>
        </td>
      </tr>
      


    </tbody>
  </table>



</div>
 <?php
  include 'partial/footer.php';
 ?>