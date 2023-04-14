<?php 

echo $product_name = $_POST["product_name"] ;
echo $price = $_POST["product_price"];
echo $name = $_POST["name"];
// echo $phone = $_POST["mobile"];
// echo $email = $_POST["email"];

include '/instamojo/Instamojo.php';

// $api = new Instamojo\Instamojo('test_8d43aea7dbe6c6885a9b7b43509', 'test_410b14a47fd3b967f9a2598e703','https://test.instamojo.com/api/1.1/');

// try {
//         $response = $api->paymentRequestCreate(array(
//         "purpose" => $product_name,
//         "amount" => $price,
//         "buyer_name" => $name,
//         // "phone" => $phone,
//         // "send_email" => true,
//         // "send_sms" => true,
//         // "email" => $email,
//         // "mobile" => $phone,
//         // "shipping_city" => $shipping_city,
//         // 'allow_repeated_payments' => false,
//         "redirect_url" => "https://www.djtechblog.com/php/projects/payments/thankyou.php",
//         "webhook" => "https://www.djtechblog.com/php/projects/payments/webhook.php"
//         ));
 
//     $pay_ulr = $response['longurl'];
    
 

//     header("Location: $pay_ulr");
//     exit();

// }
// catch (Exception $e) {
//     print('Error: ' . $e->getMessage());
// }     
  ?>