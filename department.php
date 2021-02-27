<?php
require_once('config.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register New Department</title>
</head>
<body>
<?php
if(isset($_POST['submit'])){
    $department            =$_POST['departmentname'];
    $departmentcode        =$_POST['departmentcode'];
    $sql = "INSERT INTO department (name,dept_code)
     VALUES ('$department ','$departmentcode')";
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);

 
}

?>
<h2>Register New Department</h2>
<form action="department.php" method="post">
    <label for="departmentname">Department Name</label>
        <select name="departmentname">
            <option value="finance">Finance</option>
            <option value="human resources">Human Resources</option>
            <option value="technical">Technical</option>
            <option value="servics">Servics</option>
        </select>
    <label for="departmentcode">Department Code</label>
    <input class="form-control" type="text" name="departmentcode">  
    <button type="submit" name="submit">submit</button>
</form>
    
</body>
</html>