<?php

// Reference style guide
echo "<html><head><link rel=\"stylesheet\" href=\"style.css\"/>";

$username = $_POST["username"];
$password = $_POST["password"];
$shipping = $_POST["shipping"];
$A = $_POST["A"];
$B = $_POST["B"];
$C = $_POST["C"];

// produce summary
echo "Username: " . $username . "<br>";
echo "Password: " . $password . "<br>";

// Calculate costs
if ($shipping == "free") {
	$shipping_cost = 0;
} else if ($shipping == "three-day") {
	$shipping_cost = 5;
} else {
	$shipping_cost = 50;
}
$total_cost = $A + $B * 2 + $C * 3 + $shipping_cost;

// Generate table summary
echo "<table>";

echo "<tr>";
echo "<th></th>";
echo "<th>Quantity</th>";
echo "<th>Cost-Per-Item</th>";
echo "<th>Subtotal</th>";
echo "</tr>";

echo "<tr>";
echo "<td>Item A</td><td>" . $A . "</td><td>$1</td><td>" . ($A * 1) . "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>Item B</td><td>" . $B . "</td><td>$2</td><td>" . ($B * 2) . "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>Item C</td><td>" . $C . "</td><td>$3</td><td>" . ($C * 3) . "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>Shipping</td><td>" . $shipping . "</td><td></td><td>" . $shipping_cost . "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>Total</td><td></td><td></td><td>" . $total_cost . "</td>";
echo "</tr>";

echo "</table>";
?>
