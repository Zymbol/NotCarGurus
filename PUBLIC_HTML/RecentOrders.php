<div >
<?php
error_reporting(E_ALL);
include "connect.php";?>
<div data-aos="zoom-in-down">
<?php
include "employeeNav.php";?>
</div>
<?php
include "header.php";?>
<div>
<div class="container-md" style="text-align: center;"><hr><h3>View of Recent Orders (2019-2020)</h3><hr></div>
<?php $result = $conn->query("SELECT * FROM RecentOrders"); ?>

<form method="POST">
<?php $i = 0;
// Establish the output variable
$dyn_table = '<table style="margin-left: auto;
margin-right: auto;">';
while ($row = $result->fetch_assoc()): 
    $account_id = $row['Account_ID'];
    $f_name = $row['f_name'];
    $l_name = $row['l_name'];
    $order_id = $row['Order_ID'];
    $order_date = $row['Order_Date'];
    $vehicle_id = $row['VIN'];
    
    if ($i % 2 == 0) { // if $i is divisible by our target number (in this case "2")
        $dyn_table .= '
        <tr>
            <td>
                <div class="container" style="padding: 1em">
                    <div class="card-group">' . 
                        '<p class="card-text">' . 
                            'Account ID: ' . $account_id . '<br>' . 
                            'First Name: ' . $f_name . '<br>' .
                            'Last Name: ' . $l_name . '<br>' .
                            'Order ID: ' . $order_id . '<br>' .
                            'Order Date: ' . $order_date . '<br>' .
                            'VIN: ' . $vehicle_id . '<br>' .        
                        '</p>' .
                    '</div>
                </div>
            </td>';
    } else {
        $dyn_table .= '<td>
        <div class="container" style="padding: 2em">
            <div class="card-group">' . 
                '<p class="card-text">' . 
                    'Account ID: ' . $account_id . '<br>' . 
                    'First Name: ' . $f_name . '<br>' .
                    'Last Name: ' . $l_name . '<br>' .
                    'Order ID: ' . $order_id . '<br>' .
                    'Order Date: ' . $order_date . '<br>' .
                    'VIN: ' . $vehicle_id . '<br>' .        
                '</p>' .
            '</div>
        </div>
    </td>';
    }
    $i++;
endwhile;
$dyn_table .= '</tr></table>';
echo $dyn_table;
?>
<hr>
</form>
</div>
     
<?php include './footer.php';?> 

