<?php
$Luxury_nights = isset($_POST['Luxury']) ? intval($_POST['Luxury']) : 0;
$Deluxe_nights = isset($_POST['Deluxe']) ? intval($_POST['Deluxe']) : 0;
$Single_nights = isset($_POST['Single']) ? intval($_POST['Single']) : 0;

$Luxury = 250;
$Deluxe = 150;
$Single = 100;

$tenth = 1/10;
$fifth = 1/20;

$total_amount = ($Luxury_nights * $Luxury) + ($Deluxe_nights * $Deluxe) + ($Single_nights * $Single);

if ($Luxury_nights >= "10") {
    $total_amount = $total_amount - ($total_amount * $tenth);
} 
elseif ($Deluxe_nights >= "10") {
    $total_amount = $total_amount - ($total_amount * $tenth);
}
elseif ($Single_nights >= "10") {
    $total_amount = $total_amount - ($total_amount * $tenth);
}
elseif ($Luxury_nights >= "5") {
    $total_amount = $total_amount - ($total_amount * $fifth);
} elseif ($Deluxe_nights >= "5") {
    $total_amount = $total_amount - ($total_amount * $fifth);
} elseif ($Single_nights >= "5") {
    $total_amount = $total_amount - ($total_amount * $fifth);
}

$total_amount_formatted = number_format($total_amount, 2);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Total Amount</title>
    <link rel="stylesheet" href="CSS/styles.css"> 
    <link rel="stylesheet" href="CSS/style2.css"> 
    <style>
        body {
            background-image: url('room.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
            font-family: Arial, sans-serif;
            color: #333;
            text-align: center;
            padding: 50px;
        }

        h1 {
            color: #fff;
            background-color: #333;
            padding: 10px 20px;
            border-radius: 5px;
        }

        p {
            font-size: 24px;
        }

        a {
            color: #333;
            text-decoration: none;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <h1>Total Amount</h1>
    <p><?php echo "Total Amount: $" . $total_amount_formatted; ?></p>
    <p><a href="01.html">Return To Reservation Page</a></p>
</body>
</html>
