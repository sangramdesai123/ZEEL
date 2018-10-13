 <?php
  include 'partial/header.php';
 ?>

 <?php
                      echo '
                      <div class="container">
                        <div class="row">
                          <div class="check col">
                          <table class="table table-bordered">
                             <th colspan="2"> Payment Information </th>
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
                              <tr>
                                <td>Payment Id :</td>
                                <td>'.$_GET['payment_id'].' </td>
                              </tr>
                              <tr>
                                <td>Payment Request Id :</td>
                                <td>'.$_GET['payment_request_id'].' </td>
                              </tr>
                              <tr>
                                <td>Buyer Email :</td>
                                <td>'.$_SESSION['u_email'].' </td>
                              </tr>
                              <tr>
                                <td>Recivers Name :</td>
                                <td>Sangram Desai</td>
                              </tr>
                              <tr>
                                <td>Recivers Email :</td>
                                <td>sangram.desai@somaiya.edu</td>
                              </tr>
                              <tr>
                                <td>Purpose :</td>
                                <td>Purpose of the Payment request</td>
                              </tr>
                              <tr>
                                <td>Status of Payment:</td>
                                <td>Credit</td>
                              </tr>

                            </table>
                          </div></div></div>';
                        
?>
 <?php
  include 'partial/footer.php';
 ?>