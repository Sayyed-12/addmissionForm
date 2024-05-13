<?php

include 'dbConnection.php';


$fname =$_POST["first_name"];
$lname =$_POST["last_name"];
$gen=$_POST["gender"];
$dob =$_POST["date_of_birth"];
$add=$_POST["address"];
$city=$_POST["city"];
$state=$_POST["state"];
$postal_code=$_POST["postal_code"];
$country=$_POST["country"];
$email=$_POST["email"];
$phoneno = isset($_POST["phone_number"]) ? $_POST["phone_number"] : ''; // Use isset to avoid undefined index warning
$guardian_name=$_POST["guardian_name"];
$guardian_relationship=$_POST["guardian_relationship"];
$guardian_phone=$_POST["guardian_phone"];
$previous_school=$_POST["previous_school"];
$grade_applied_for=$_POST["grade_applied_for"];
$application_date=$_POST["application_date"];



if($conn){
    $query = "INSERT INTO students (first_name, last_name, gender, date_of_birth, address, city, state, postal_code, country, email, phone_number, guardian_name, guardian_relationship, guardian_phone, previous_school, grade_applied_for, application_date) VALUES ('$fname','$lname','$gen','$dob','$add','$city','$state','$postal_code','$country','$email','$phoneno','$guardian_name','$guardian_relationship','$guardian_phone','$previous_school','$grade_applied_for','$application_date')";
    $result=mysqli_query($conn,$query);

    if($result){
        echo " Addmission Form submitted succcessfully<br> <br>";



    }
    else{
        echo " submitted failed";
    }
}

if ($conn){
    $query = 'SELECT * FROM students';
    $result = $conn->query($query);
    echo "Here is all student's data...<br><br>";
    if ($result->num_rows > 0) {
        echo "<table border='1'>";
        echo "<tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Gender</th><th>Date of Birth</th><th>Address</th><th>City</th><th>State</th><th>Postal Code</th><th>Country</th><th>Email</th><th>Phone Number</th><th>Guardian Name</th><th>Guardian Relationship</th><th>Guardian Phone</th><th>Previous School</th><th>Grade Applied For</th><th>Application Date</th></tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['first_name']."</td>";
            echo "<td>".$row['last_name']."</td>";
            echo "<td>".$row['gender']."</td>";
            echo "<td>".$row['date_of_birth']."</td>";
            echo "<td>".$row['address']."</td>";
            echo "<td>".$row['city']."</td>";
            echo "<td>".$row['state']."</td>";
            echo "<td>".$row['postal_code']."</td>";
            echo "<td>".$row['country']."</td>";
            echo "<td>".$row['email']."</td>";
            echo "<td>".$row['phone_number']."</td>";
            echo "<td>".$row['guardian_name']."</td>";
            echo "<td>".$row['guardian_relationship']."</td>";
            echo "<td>".$row['guardian_phone']."</td>";
            echo "<td>".$row['previous_school']."</td>";
            echo "<td>".$row['grade_applied_for']."</td>";
            echo "<td>".$row['application_date']."</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No records found";
    }
}
?>