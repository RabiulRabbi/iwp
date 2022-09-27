<?php
$conn = mysqli_connect('localhost', 'root', '', 'labwork');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $email = $_POST['email'];
    $education = $_POST['education'];
    $employeeid = $_POST['employeeid'];
    $address = $_POST['address'];
    $blood = $_POST['blood'];
    $salary = $_POST['salary'];
    $sql = "INSERT INTO employee (name, fname, mname, email, education, employeeid, address, blood, salary)
          VALUES ('$name', '$fname','$mname','$email', '$education', '$employeeid', '$address', '$blood', '$salary')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "Data created Successfully";
    } else {
        echo "Data created failed!!!";
    }
} else {
    $_SESSION['error'] = 'Fill up add form first';
}
