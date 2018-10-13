 <?php
  include 'partial/header.php';
 ?>

 <?php
  if(isset($_GET['payment_id']))
  {
eval('$mobileNo='.$_SESSION['u_phone'].';');
    echo $mobileNo;
$message = urlencode('Your order is Confirmed and will reach you by 18-10-2018 contact 8879217944');//your message
$authKey = "XXXXXXXXXXXXXXXXXXXXXXXXXxx";//your api key
$senderId = "SDesai";//shold be less than 6 char
$route = "4";
$postData = array(
    'authkey' => $authKey,
    'mobiles' => $mobileNo,
    'message' => $message,
    'sender' => $senderId,
    'route' => $route,
    'country'=>'0'
);
$url="https://control.msg91.com/api/sendhttp.php";
$ch = curl_init();
    curl_setopt_array($ch, array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $postData
));
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$output = curl_exec($ch);
 if(curl_errno($ch))
{
    echo 'error:' . curl_error($ch);
}
curl_close($ch);
echo '<script>alert("Message sent Successfully")</script>';
}
else{
    echo "string";
}


/*SMS ends here*/
 


 /*dislay the aymrnt details*/
  echo '
  <div class="container">
  <div>
  <img src="./img/send.jpg">
  <br>
  </div>
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