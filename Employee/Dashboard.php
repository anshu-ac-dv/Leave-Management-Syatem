<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Employee Dashboard</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <!-- Side header -->
  <div class="side-header">
    <h1>Employee Dashboard</h1>
  </div>

  <!-- Side navbar -->
  <nav class="side-navbar">
    <ul>
      <li><a href="#">Dashboard</a></li>
      <li><a href="#">Update Profile</a></li>
      <li><a href="#">Attendance</a></li>
      <li><a href="#">Apply for Leave</a></li>
    </ul>
  </nav>

  <!-- Main content -->
  <div class="main-content">
    <!-- Dashboard -->
    <div class="container my-4">
      <h1>Dashboard</h1>
      <p>Welcome to your employee dashboard.</p>
    </div>

    <!-- Update Profile -->
    <div class="container my-4">
      <h1>Update Profile</h1>
      <form>
        <div class="form-group">
          <label for="fullName">Full Name</label>
          <input type="text" class="form-control" id="fullName">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email">
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>

    <!-- Attendance -->
    <div class="container my-4">
      <h1>Attendance</h1>
      <p>You have attended 20 out of 22 working days this month.</p>
    </div>

    <!-- Apply for Leave -->
    <div class="container my-4">
      <h1>Apply for Leave</h1>
      <form>
        <div class="form-group">
          <label for="startDate">Start Date</label>
          <input type="date" class="form-control" id="startDate">
        </div>
        <div class="form-group">
          <label for="endDate">End Date</label>
          <input type="date" class="form-control" id="endDate">
        </div>
        <div class="form-group">
          <label for="reason">Reason</label>
          <textarea class="form-control" id="reason" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
