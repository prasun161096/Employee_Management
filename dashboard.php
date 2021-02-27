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
    <title>Dasheboard</title>
</head>
<body>
<div>
    <?php
       
  echo '<div class="table-responsive">
  <table class="table table-bordered" id="dataTable" width="80%" cellspacing="0">
   <thead>
       <tr>
           <th>ID</th>
           <th>Employee Name</th>
           <th>Address</th>
           <th>Email</th>
           <th>Phone Number</th>
           <th>Department</th>
           <th>Employee Salary</th>
       </tr>
   </thead>
   <tbody>
       <tr>
           <td></td>
           <td></td>
           <td></td>
           <td></td>                       
           <td></td>
           <td></td>
           <td></td>
       </tr>
   </tbody>
</table>
</div>'
?>
   </div>
</body>
</html>