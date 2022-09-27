<?php
$nameErr = $fatherErr = $motherErr = $nidErr = $dobrr = $genderErr = $salaryErr = $phoneErr = "";
$name = $father = $mother = $nid =  $dob = $gender = $salary = $phone = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
    }

    if (empty($_POST["father"])) {
        $fatherErr = "Father name is required";
    } else {
        $father = test_input($_POST["father"]);
    }

    if (empty($_POST["mother"])) {
        $motherErr = "Mother name is required";
    } else {
        $mother = test_input($_POST["mother"]);
    }
    if (empty($_POST["nid"])) {
        $nidErr = "NID is required";
    } else {
        $nid = test_input($_POST["nid"]);
    }
    if (empty($_POST["dob"])) {
        $dobErr = "Date of birth is required";
    } else {
        $dob = test_input($_POST["dob"]);
    }
    if (empty($_POST["gender"])) {
        $genderErr = "  Gender is required";
    } else {
        $gender = test_input($_POST["gender"]);
    }
    if (empty($_POST["salary"])) {
        $salaryErr = "Salary is required";
    } else {
        $salary = test_input($_POST["salary"]);
    }
    if (empty($_POST["contact"])) {
        $phoneErr = "Contact number is required";
    } else {
        $phone = test_input($_POST["contact"]);
    }
}
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
<!DOCTYPE html>
<html lang="">

<head></head>

<body>
    <form action="" method="post" enctype="multipart/form-data" name="studentprofile">
        <h1 align="center">Employee's Information</h1>
        <table align="center" class="table table-hover" border="0">
            <tr>
                <td>NAME</td>
                <td><input type="text" value="" name="name"></td>
                <td><span style="color: red;" class="error"><?php echo $nameErr; ?> </span></td>
            </tr>
            <tr>
                <td>Father's Name</td>
                <td><input type="text" value="" name="father"></td>
                <td><span style="color: red;" class="error"><?php echo $fatherErr; ?></span></td>
            </tr>
            <tr>
                <td>Mother's Name</td>
                <td><input type="text" value="" name="mother"></td>
                <td><span style="color: red;" class="error"> <?php echo $motherErr; ?></span></td>
            </tr>
            <tr>
                <td>NID No.</td>
                <td><input type="text" value="" name="nid"></td>
                <td><span style="color: red;" class="error"> <?php echo $nidErr; ?></span></td>
            </tr>
            <tr>
                <td>Date of Birth</td>
                <td><input type="date" name="dob"></td>
                <td><span style="color: red;" class="error"><?php echo $dobrr; ?></span></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td><input type="radio" name="gender" value="male"> Male&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="gender" value="female">Female&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="gender" value="female">Other<br>
                <td><span style="color: red;" class="error"> <?php echo $genderErr; ?></span></td>
                </td>
            </tr>
            <tr>
                <td>Blood group</td>
                <td><input type="radio" value="A+" name="blood">A+ &nbsp;
                    <input type="radio" value="A-" name="blood">A- &nbsp;
                    <input type="radio" value="B+" name="blood">B+ &nbsp;
                    <input type="radio" value="B-" name="blood">B- &nbsp;<br>
                    <input type="radio" value="O+" name="blood">O+ &nbsp;
                    <input type="radio" value="O-" name="blood">O- &nbsp;
                    <input type="radio" value="AB+" name="blood">AB+ &nbsp;
                    <input type="radio" value="AB-" name="blood">AB-
                </td>
            </tr>
            <tr>
                <td>Salary</td>
                <td><input type="text" value="" name="salary"></td>
                <td><span style="color: red;" class="error"><?php echo $salaryErr; ?></span></td>
            </tr>
            <tr>
                <td>Contact No.</td>
                <td><input type="text" value="" name="contact"></td>
                <td><span style="color: red;" class="error"> <?php echo $phoneErr; ?></span></td>
            </tr>
            <tr>
                <td><input id="submit" type="submit" value="Submit" name="submit>
                <input id=" reset" type="reset" value="Reset" name="reset"></td>
            </tr>
        </table>
    </form>
</body>

</html>