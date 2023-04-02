<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Employee Dashboard</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!-- Bootstrap JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Logo or brand name -->
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Employee Dashboard</a>
    </div>
    <!-- Navigation links -->
    <ul class="nav navbar-nav">
      <li><a href="#">Home</a></li>
      <li><a href="#">Profile</a></li>
      <li><a href="#">Settings</a></li>
    </ul>
  </div>
</nav>

<div class="container-fluid">
  <div class="row">
    <!-- Sidebar -->
    <div class="col-sm-3 col-md-2 sidebar">
      <ul class="nav nav-sidebar nav-pills">
        <li><a href="#dashboard">Dashboard</a></li>
        <li><a href="#employees">Employees</a></li>
        <li><a href="#projects">Projects</a></li>
        <li><a href="#reports">Reports</a></li>
      </ul>
    </div>
    <!-- Main content -->
    <div class="col-sm-9 col-md-10 main">
      <!-- Dashboard section -->
      <section id="dashboard">
        <h1>Dashboard</h1>
        <!-- Dashboard content goes here -->
      </section>
      <!-- Employees section -->
      <section id="employees">
        <h1>Employees</h1>
        <!-- Employees content goes here -->
      </section>
      <!-- Projects section -->
      <section id="projects">
        <h1>Projects</h1>
        <!-- Projects content goes here -->
      </section>
      <!-- Reports section -->
      <section id="reports">
        <h1>Reports</h1>
        <!-- Reports content goes here -->
      </section>
    </div>
  </div>
</div>

</body>
</html>
