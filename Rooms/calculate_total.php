<!DOCTYPE html>
<html>
<head>
    <title>Total Amount</title>
    <style>
    body {
          background-image: url('room.jpg');
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-size: 100% 100%;
        }
        </style>
</head>
<body>
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
            echo "<p>Total Amount: $" . number_format($total_amount = $total_amount - ($total_amount * $tenth), 2) . "</p>";
          } 
        elseif ($Deluxe_nights >= "10") {
            echo "<p>Total Amount: $" . number_format($total_amount = $total_amount - ($total_amount * $tenth), 2) . "</p>";
          }
            elseif ($Single_nights >= "10") {
            echo "<p>Total Amount: $" . number_format($total_amount = $total_amount - ($total_amount * $tenth), 2) . "</p>";
          }
          elseif ($Luxury_nights >= "5") {
            echo "<p>Total Amount: $" . number_format($total_amount = $total_amount - ($total_amount * $fifth), 2) . "</p>";
          } elseif ($Deluxe_nights >= "5") {
            echo "<p>Total Amount: $" . number_format($total_amount = $total_amount - ($total_amount * $fifth), 2) . "</p>";
          } elseif ($Single_nights >= "5") {
            echo "<p>Total Amount: $" . number_format($total_amount = $total_amount - ($total_amount * $fifth), 2) . "</p>";
          } else {
            echo "<p>Total Amount: $" . number_format($total_amount, 2) . "</p>";
          }

        ?>
        <p><a href="01.html">Return To Reservation Page</a></p>
    </div>
</body>
</html>

