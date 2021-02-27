<?php
require_once('config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>
    <title>Employee Registration</title>

    <?php
     if(isset($_POST['signup'])){
      $employeeName        =$_POST['employeename'];
      $address             =$_POST['address'];
      $birthday            =$_POST['birthday'];
      $gender              =$_POST['gender'];
      $email               =$_POST['email'];
      $phoneNumber         =$_POST['pnumber'];
      $isAdmin=1;
      $deperment           =$_POST['department'];
      $dateOfJoing         =$_POST['dateofjoing'];
      $employeeSalary      =$_POST['employeesalary'];
      $password            =$_POST['password'];
      
     $sql = "INSERT INTO users (employee_name, address, birth_day, gender,email, phone_number, isadmin,department, date_of_joing, employee_salary, password)
     VALUES ('$employeeName', '$address', '$birthday', '$gender', '$email', '$phoneNumber', '$isAdmin', '$deperment', '$dateOfJoing', '$employeeSalary', '$password' )";
     $result=mysqli_query($conn,$sql);
     }
     
     ?>    
</head>

<body>
    <div>
        <form action="registration.php" method="post" onsubmit="return checkForm(this)">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h2>Employee Registration</h2>
                        <hr class="mb-3">
                        <label for="employeename">Employee Name</label>
                        <input class="form-control" type="text" name="employeename" placeholder="employee name">                                       
                        <label for="address">Address</label>
                        <input class="form-control" type="text" name="address" placeholder="your address">
                        <label for="birthday">Birth Day</label>
                        <input class="form-control" type="date" name="birthday" placeholder="your birthday">
                        <label for="gender">Gender :</label>  
                        <input type="radio"name="gender" value="Male">                      
                        <label for="male">Male</label>
                        <input type="radio"name="gender" value="female">
                        <label for="female">Female</label>
                        <input type="radio"name="gender" value="other">
                        <label for="other">Other</label><br>
                        <label for="Email">Email</label>
                        <input class="form-control" type="text" name="email" placeholder="your email">
                        <label for="Phone">Phone Number</label>
                        <input class="form-control" type="tel" name="pnumber" placeholder="your number">
                        <label for="deperment">Department</label>
                        <input class="form-control" type="text" name="department">  
                        <label for="birthday">Date Of Joing</label>
                        <input class="form-control" type="date" name="dateofjoing">
                        <label for="employeesalary">Employee Salary</label>
                        <input class="form-control" type="text" name="employeesalary">  
                       <!-- <label for="image">Image</label>
                        <input class="form-control" type="text" id="image" name="image"> -->
                        <label for="password">Password</label>
                        <input class="form-control" id="paw" type="password" name="password" placeholder="Your Password" required>
                        <hr class="mb-3">
                        <input class="btn btn-success" type="submit" name="signup">singup</input>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
 
<script>

function checkForm(form)
{
  // validation fails if the input is blank
  if(form.password.value == "") {
    alert("Error: Input is empty!");
    form.password.focus();
    return false;
  }
  if(from.password.value.length<8){  
  alert("Password must be at least 8 characters long.");  
  return false;  
  }  

  return true;
}

</script>

   
</html>