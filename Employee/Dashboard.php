<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Employee Dashboard</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Employee Dashboard</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Attendance</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Apply for Leave</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Dashboard -->
  <div class="container my-4">
    <h1>Dashboard</h1>
    <p>Welcome to your employee dashboard.</p>
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

  <!-- Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
