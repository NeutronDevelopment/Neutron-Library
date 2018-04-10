<!DOCTYPE html>
<html>
<head>
  <?php include('connect.php'); ?>

  <?php $query = ("select * from employee");
  $result_employee = mysqli_query($db, $query);
  ?>

  <?php $query = ("select * from company");
  $result_company = mysqli_query($db, $query);
  ?>

  <title>PHP Table</title>
  <link rel="stylesheet" href="main.css"> <!-- The link to the style sheet -->
</head>
<body>

  <!-- Start of the emploee Table -->

  <table class="table">
             <thead>
                <tr>
                     <td>Customer ID</td>
                     <td>Customer First Name</td>
                     <td>Customer Last Name</td>
                </tr>
           </thead>
           <?php

           while ($row = mysqli_fetch_assoc($result_employee))
           {
                echo '
                <tr>
                     <td>'.$row["employeeID"].'</td>
                     <td>'.$row["employeefirstname"].'</td>
                     <td>'.$row["employeelastname"].'</td>
                </tr>
                ';
           }
           ?>
  </table>

<!-- End of the emploee Table -->

<br>

<!-- Start of the company Table -->

  <table class="table">
             <thead>
                <tr>
                     <td>Customer ID</td>
                     <td>Customer First Name</td>
                     <td>Customer Last Name</td>
                </tr>
            </thead>
           <?php

           while ($row = mysqli_fetch_assoc($result_employee))
           {
                echo '
                <tr>
                     <td>'.$row["employeeID"].'</td>
                     <td>'.$row["employeefirstname"].'</td>
                     <td>'.$row["employeelastname"].'</td>
                </tr>
                ';
           }
           ?>
  </table>

<!-- End of the company Table -->
</body>
</html>
