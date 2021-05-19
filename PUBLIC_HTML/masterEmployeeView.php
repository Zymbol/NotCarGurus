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
<div class="container-md" style="text-align: center;"><hr><h3><b>NotCarGurus</b> Employee List</h3><hr></div>
<?php $result = $conn->query("CALL masterView('$username')"); ?>
        <form method="POST">
        <?php $i = 0;
        // Establish the output variable
        $dyn_table = '<table style="margin-left: auto;
        margin-right: auto;">';
        while ($row = $result->fetch_assoc()): 
            $emp_id = $row['E_ID'];
            $f_name = $row['F_name'];
            $l_name = $row['L_name'];
            $bdate = $row['Birthdate'];
            $socSecNum = $row['SSN'];
            $WID = $row['W_ID'];
            $hireDate = $row['Hire_Date'];
            $eUsername = $row['Username'];
            
            if ($i % 2 == 0) { // if $i is divisible by our target number (in this case "2")
                $dyn_table .= '
                <tr>
                    <td>
                        <div class="container" style="padding: 1em">
                            <div class="card-group">' . 
                                '<p class="card-text">' . 
                                    'Employee ID: ' . $emp_id . '<br>' . 
                                    'First Name: ' . $f_name . '<br>' .
                                    'Last Name: ' . $l_name . '<br>' .
                                    'Birthdate: ' . $bdate . '<br>' .
                                    'SSN: ' . $socSecNum . '<br>' .
                                    'Warehouse: ' . $WID . '<br>' .        
                                    'Username: ' . $eUsername . '<br>' .        
                                '</p>' .
                            '</div>
                        </div>
                    </td>';
            } else {
                $dyn_table .= '<td>
                <div class="container" style="padding: 2em">
                    <div class="container" style="padding: 1em">
                        <div class="card-group">' . 
                            '<p class="card-text">' . 
                                'Employee ID: ' . $emp_id . '<br>' . 
                                'First Name: ' . $F_name . '<br>' .
                                'Last Name: ' . $l_name . '<br>' .
                                'Birthdate: ' . $bdate . '<br>' .
                                'SSN: ' . $socSecNum . '<br>' .
                                'Warehouse: ' . $WID . '<br>' .        
                                'Username: ' . $eUsername . '<br>' .        
                            '</p>' .
                        '</div>
                    </div>
                </div>
            </td>';
            }
            $i++;
        endwhile;
        $dyn_table .= '</tr></table>';
        echo $dyn_table;
        ?>
</div>
<?php include "./footer.php"?>