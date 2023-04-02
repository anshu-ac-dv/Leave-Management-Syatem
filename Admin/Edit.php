<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update Employee Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <scrip src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    
    <?php
      //include 'Session.php';
      include "dbcon.php";
      $sql = "SELECT * FROM employee_profile";
      $r = mysqli_query($conn,$sql);
    ?>

    <a href="Dashboard.php">Go To Dashboard</a>

    <table class="container mt-3 shadow table table-light table-danger bg-primary table-bordered">
      <thead>
        <tr>
          <th scope="col">First Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">Email</th>
          <th scope="col">Password</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
          while($row=mysqli_fetch_assoc($r))
          {
          ?>
          <tr>
              <td><?php echo $row['First Name'];?></td>
              <td><?php echo $row['Last Name'];?></td>
              <td><?php echo $row['Email'];?></td>
              <td><?php echo $row['Password'];?></td>
              <td><a class="btn btn-primary" href="Update.php">Update</a></td>
          </tr>
      <?php
          }
          ?>
      </tbody>

    </table>

  </body>
</html>