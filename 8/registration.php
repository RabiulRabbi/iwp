<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <style>
        h2 {
            text-align: center;
            color: black;
        }

        tr {
            line-height: 35px;
        }


        input {
            border-radius: 5px;
            padding: 5px;
        }

        table {
            border: 2px solid darkgreen;
            background-color: lightgray;
            border-radius: 10px;
            padding: 30px 10px;
        }

        a:hover {
            color: black;
        }
    </style>
</head>

<body>

    <form name="myForm" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data" onsubmit="return onsubmitFunc();">
        <table align="center" border="0">

            <h2>Employee Information</h3>
                <tr>
                    <td>Name:</td>
                    <td><input type="text" name="name" id="name" placeholder="name..." oninput="validateName()"><span id="nameErr"></span></td>
                </tr>
                <tr>
                    <td>Username:</td>
                    <td><input type="text" name="uname" id="uname" placeholder="uname..." oninput="validateUname();"><span id="unameErr"></span></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="email" name="email" placeholder="email..." oninput="validateEmail();"><span id="emailErr"></span></td>
                </tr>
                <tr>
                    <td>Nid:</td>
                    <td><input type="number" name="nid" id="nid" placeholder="nid..." oninput="validateNid()"><span id="nidErr"></span></td>
                </tr>
                <tr>
                    <td>Salary:</td>
                    <td><input type="number" name="salary" id="salary" placeholder="salary..." oninput="validateSalary()"><span id="salaryErr"></span></td>
                </tr>
                <tr>
                    <td>Contact:</td>
                    <td><input type="number" name="contact" id="contact" placeholder="contact..." oninput="validateContact()"><span id="contactErr"></span></td>
                </tr>
                <tr>
                    <td>password: </td>
                    <td><input type="password" name="password" placeholder="password..." oninput="validatePassword();"><span id="passwordErr"></span></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="submit" name="submit"></td>
                </tr>
        </table>
    </form>
</body>

</html>
<script>
    function validateName() {
        if (document.forms['myForm']['name'].value == "") {
            document.getElementById("nameErr").innerHTML = "Must be filled";
        } else {
            const name_validation = /[A-Za-z]{4,}/;
            if (!document.forms['myForm']['name'].value.match(name_validation)) {
                document.getElementById("nameErr").innerHTML = "Must be filled at least 4 letters";
                return false;
            } else {
                document.getElementById("nameErr").innerHTML = "OK";
                return true;
            }
        }
    }

    function validateUname() {
        if (document.forms['myForm']['uname'].value == "") {
            document.getElementById("unameErr").innerHTML = "Must be filled";
        } else {
            const uname_validation = /[A-Za-z0-9]{4,}/;
            if (!document.forms['myForm']['uname'].value.match(uname_validation)) {
                document.getElementById("unameErr").innerHTML = "Must be filled at least 4 characters";
                return false;
            } else {
                document.getElementById("unameErr").innerHTML = "OK";
                return true;
            }
        }
    }

    function validateEmail() {
        const myForm = document.forms['myForm'];
        if (myForm['email'].value == "") {
            document.getElementById("emailErr").innerHTML = "Must be filled";
        } else {
            const email_val = /^\w+@\w+(\.\w{2,3})+$/;
            if (!myForm['email'].value.match(email_val)) {
                document.getElementById("emailErr").innerHTML = "Email pattern mismatch";
                return false;
            } else {
                document.getElementById("emailErr").innerHTML = "OK";
                return true;
            }
        }
    }

    function validateNid() {
        const myForm = document.forms['myForm'];
        if (myForm['nid'].value == "") {
            document.getElementById("nidErr").innerHTML = "Must be filled";
        } else {
            const nid_val = /[0-9]{10}/;
            if (!myForm['nid'].value.match(nid_val)) {
                document.getElementById("nidErr").innerHTML = "Must be 10 digits of digital id";
                return false;
            } else {
                document.getElementById("nidErr").innerHTML = "OK";
                return true;
            }
        }
    }

    function validateSalary() {
        const myForm = document.forms['myForm'];
        if (myForm['salary'].value == "") {
            document.getElementById("salaryErr").innerHTML = "Must be filled";
        } else {
            const salary_val = /[0-9]{3,}/;
            if (!myForm['salary'].value.match(salary_val)) {
                document.getElementById("salaryErr").innerHTML = "Must be at least 3 digits";
                return false;
            } else {
                document.getElementById("salaryErr").innerHTML = "OK";
                return true;
            }
        }
    }

    function validateContact() {
        if (document.forms['myForm']['contact'].value == "") {
            document.getElementById("contactErr").innerHTML = "Must be filled";
        } else {
            const contact_validation = /^\(?([0][1][0-9]{9})\)?$/;
            if (!document.forms['myForm']['contact'].value.match(contact_validation)) {
                document.getElementById("contactErr").innerHTML = "Number must be filled 11 numeric numbers & start with 01";
                return false;
            } else {
                document.getElementById("contactErr").innerHTML = "OK";
                return true;
            }
        }
    }

    function validatePassword() {
        const myForm = document.forms['myForm'];
        if (myForm['password'].value == "") {
            document.getElementById("passwordErr").innerHTML = "Must be filled";
        } else {
            const password_val = /[A-Za-z0-9]{6}/;
            if (!myForm['password'].value.match(password_val)) {
                document.getElementById("passwordErr").innerHTML = "Must be at least 6 characters";
                return false;
            } else {
                document.getElementById("passwordErr").innerHTML = "OK";
                return true;
            }
        }
    }

    function onsubmitFunc() {
        if (!validateName() || !validateUname() || !validateEmail() || !validateNid() || !validateSalary() || !validateContact() || !validatePassword()) {
            return false;
        } else {
            return true;
        }
    }
</script>