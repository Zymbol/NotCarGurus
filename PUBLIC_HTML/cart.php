<?php
session_start();

function cart_search($id) {
    if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $i => $item) {
            if ($item['id'] == $id) {
                return $i;
            }
        }
    }
    return false;
}
if (isset($_POST['VIN']) && !empty($_POST['VIN'])) {
    $id = htmlspecialchars($_POST['VIN']);
    if (($i = cart_search($id)) !== false) {
        $_SESSION['cart'][$i]['qty']++;
    } else {
        $_SESSION['cart'][] = array(
            'id' => $id,
            'qty' => 1
        );
    }
}

echo "<div class='cart'><h1> Cart</h1><hr>";
foreach ($_SESSION['cart'] as $i => $item) {
    $query = "SELECT * FROM AffordableVehicles WHERE VIN = '{$item['id']}'";
    if ($result = $conn->query($query)) {
        $row = $result->fetch_assoc();
        echo "<p>{$row['Make']} @ $ {$row['Price']} ({$_SESSION['cart'][$i]['qty']})</p>";
        $temp = $row['Price'] * $_SESSION['cart'][$i]['qty'];
        $result->free();
        $total += $temp;
    } else {
        echo $conn->error;
    }
}
echo "Total: $".number_format($total, 2)."<br>";
?><button  class="btn btnPrimary" type=submit value="destroy" name="s1">Clear Cart</button>
<?php echo "</div>";
?>