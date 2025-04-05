<?php
$con = pg_connect("host=192.168.0.10 port=5432 dbname=tydb174 user=ty174 password=") or die("Could not connect");

// Fetch teacher names for the dropdown
if (isset($_POST["action"]) && $_POST["action"] == "getTeachers") {
    $sql = "SELECT tno,tname FROM TEACHER";
    $result = pg_query($con,$sql);
    $options = "<option value=''>--Select Teacher--</option>";

    while ($row = pg_fetch_assoc($result)) {
        $options .= "<option value='".$row['tno']."'>".$row['tname']."</option>";
    }

    echo $options;
}

// Fetch teacher details based on selection
if (isset($_POST["tname"])) {
    $tname = intval($_POST["tname"]);
    $sql = "SELECT * FROM TEACHER WHERE tno=".$tname;
    $result = pg_query($con,$sql);

    if (pg_num_rows($result) > 0) {
        $row = pg_fetch_assoc($result);
        echo "<p><strong>Teacher No:</strong> " . $row["tno"] . "</p>";
        echo "<p><strong>Name:</strong> " . $row["tname"] . "</p>";
        echo "<p><strong>Qualification:</strong> " . $row["qualification"] . "</p>";
        echo "<p><strong>Salary:</strong> $" . number_format($row["salary"], 2) . "</p>";
    } else {
        echo "No details found!";
    }
}

pg_close($con);
?>
