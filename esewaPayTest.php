<?php
// send_mail('aaushaaush22222@gmail.com','testing','hello bro');
mail('aaushaaush22222@gmail.com',"hello","test");
function send_mail($to, $title_msg, $msg)
{
$to = $to;
$title = $title_msg;
$message = $msg;
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From:gfood98765@gmail.com";
if (mail($to, $title, $message, $headers)) {
echo "Message sent successfully...";
} else {
echo "Message could not be sent...";
}
}

?>
<?php

function order_mail($conn,$checkout_id,$email){
    $q_payment = "SELECT * from checkout_data where checkout_id = '$checkout_id'";
    $result = mysqli_query($conn,$q_payment);
    $payment = mysqli_fetch_assoc($result);
    $q_order = "SELECT orders.quantity,orders.price as order_price, products.title,products.image, products.description, payments.total_amt  FROM orders inner join products on orders.product_id = products.product_id inner join payments on orders.payment_id = payments.payment_id where checkout_data.checkout_id = " .$payment['payment_id'];
    $result = mysqli_query($conn,$q_order);
    $msg = "<!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <style>
        * {
            margin: 0px;
        }
        .logo{
            height: 80px;
            width: auto;
            display: block;
            margin: 10px auto;
        }
        .title{
            text-align:center ;
        }
        .sub_head{
            text-align: center;
        }
        .container{
            box-sizing: border-box;
            width: 80%;
            margin: auto;
        }
        .items_order{
            display: flex;
            justify-content: space-between;
        }
        .items_info{
            width: 30%;
        }
        .item_text{
            width: 70%;
        }
        .img{
            height: 120px;
            width: 120px;
        }
    </style>
    </head>";
    $html = "
    <body>
    <div class='container'>
        <img class='logo' src='img/foodlogo.png' alt='logo'>
        <h2 class='sub_head'>Thank you for your order!</h2>
        <h3>ITEMS ORDERED</h3><hr/>
    ";
    $msg = $msg.$html;

            while($product = mysqli_fetch_assoc($result)){
                $text_product = "
        <div class='items_order'>
            <div class='item_info'>
                <img class='img' src='".$product['item_image']."' alt='item_1' >
            </div>
            <div class='item_text'>
                <h1>". $product['item_name']."</h1>
                <p>Price:". $product['item_price'] ."</p>
                <p>Quantity :".$product['product_quantity'] ."</p>
            </div>
        </div>";
                $msg = $msg.$text_product;
            }
        
        $msg = $msg."
        <hr>
        <div class='item_total'>
            Total: ".$payment['total_amount'] ."
        </div>
    </div>
        
</body>
</html>
    ";
    send_mail($email,"Order Have Been Placed",$msg);
}

?>