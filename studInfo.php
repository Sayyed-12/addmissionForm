<?php
include('dbConnection.php');

$query = "SELECT * FROM `students`";
$result = mysqli_query($conn, $query);

foreach ($result as $row) {
    echo "<tr>";

}

?>