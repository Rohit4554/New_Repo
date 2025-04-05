<?php
$servername = "localhost";
$username = "root"; // Change if necessary
$password = ""; // Change if necessary
$database = "shop"; // Change to your database name

$conn = pg_connect("192.168.0.10/tydb180", "ty180","");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch customer names for dropdown
if (isset($_POST["action"]) && $_POST["action"] == "getCustomers") {
    $sql = "SELECT cno, cname FROM CUSTOMER";
    $result = $conn->query($sql);
    $options = "<option value=''>--Select Customer--</option>";

    while ($row = $result->fetch_assoc()) {
        $options .= "<option value='" . $row['cno'] . "'>" . $row['cname'] . "</option>";
    }

    echo $options;
}

// Fetch order details based on selected customer
if (isset($_POST["cno"])) {
    $cno = intval($_POST["cno"]);
    $sql = "SELECT ono, odate, shipping_address FROM ORDERS WHERE cno = $cno";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table border='1'><tr><th>Order No</th><th>Order Date</th><th>Shipping Address</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['ono']}</td>
                    <td>{$row['odate']}</td>
                    <td>{$row['shipping_address']}</td>
                  </tr>";
        }
        echo "</table>";
    } else {
        echo "No orders found for this customer!";
    }
}

$conn->close();
?>
