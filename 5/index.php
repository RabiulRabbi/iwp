<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Employee Information form</title>
</head>

<body>
  <form action="show.php" method="POST" enctype="multipart/form-data">
    <table align="center" class="center" border="0" width="50%">
      <h1 align="center">Employee's Information Form</h1>
      <tr>
        <td class="item">Name</td>
        <td>
          <input type="text" value="" name="name" placeholder="Enter name.." />
        </td>
      </tr>
      <tr>
        <td class="item">Father's Name</td>
        <td>
          <input type="text" value="" name="fname" placeholder="Enter father's name.." />
        </td>
      </tr>
      <tr>
        <td class="item">Mother's Name</td>
        <td>
          <input type="text" value="" name="mname" placeholder="Enter mother's name.." />
        </td>
      </tr>
      <tr>
        <td class="item">Email</td>
        <td>
          <input type="email" value="" name="email" placeholder="Enter email.." />
        </td>
      </tr>
      <tr>
        <td class="item">Education Level</td>
        <td>
          <select name="education" id="education">
            <option value="">None</option>
            <option value="SSC">SSC</option>
            <option value="HSC">HSC</option>
            <option value="BSc">BSc</option>
            <option value="MSc">MSc</option>
            <option value="PhD">PhD</option>
          </select>
        </td>
      </tr>
      <tr>
        <td class="item">Employee's Id:</td>
        <td>
          <input type="number" value="" name="employeeid" placeholder="Enter employee's id.." />
        </td>
      </tr>
      <tr>
        <td class="item">Address</td>
        <td>
          <input type="text" name="address" id="address" placeholder="Enter address.." />
        </td>
      </tr>
      <tr>
        <td class="item">Blood Group</td>
        <td>
          <input type="radio" name="blood" id="blood" value="A+" />A+
          <input type="radio" name="blood" id="blood" value="A-" />A-
          <input type="radio" name="blood" id="blood" value="B+" />B+
          <input type="radio" name="blood" id="blood" value="B-" />B-
          <input type="radio" name="blood" id="blood" value="AB+" />AB+
          <input type="radio" name="blood" id="blood" value="AB-" />AB-
          <input type="radio" name="blood" id="blood" value="O+" />O+
          <input type="radio" name="blood" id="blood" value="O-" />O-
        </td>
      </tr>
      <tr>
        <td class="item">Salary</td>
        <td><input type="number" name="salary" id="salary" /></td>
      </tr>
      <tr>
        <td></td>
        <td><button type="submit" name="submit">Submit</button></td>
      </tr>
    </table>
  </form>
</body>

</html>