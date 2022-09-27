<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("location: login.php");
}
if (isset($_POST["logout"])) {
    session_destroy();
    session_unset();
    header("location: login.php");
}
?>
<html>

<head>
    <title>Problem-15</title>
</head>

<body>
    <form action="<?php $_SERVER["PHP_SELF"] ?>" method="POST">
        <table border="0" align="center">
            <h1 style="text-align: center;">Home Page</h1>
            <tr>
                <td>Name: </td>
                <td><?php echo $_SESSION['name'] ?></td>
            </tr>
            <tr>
                <td>User Name: </td>
                <td><?php echo $_SESSION['uname'] ?></td>
            </tr>
            <tr>
                <td>Email: </td>
                <td><?php echo $_SESSION['email'] ?></td>
            </tr>
            <tr>
                <td>Contact Number: </td>
                <td><?php echo $_SESSION['contact'] ?></td>
            </tr>
            <tr>
                <td><input type="submit" value="logout" name="logout"></td>
            </tr>
        </table>
    </form>
</body>

</html>