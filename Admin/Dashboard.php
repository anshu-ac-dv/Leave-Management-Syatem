<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="style.css">
    <title>Admin Dashboard</title>
</head>
   
<body>
    <?php
        //include 'Session.php';
    ?>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<div class="container">
<section>
	<div class="row">
		<div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="glyphicon glyphicon-thumbs-up"></span> Admin Dashboard</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                          <!-- dblue -->
                          <a href="Register.php" class="btn btn-dblue btn-lg" role="button"><span class="glyphicon glyphicon-user glyphsize"></span> <br />Add <span class="glyphicon glyphicon-plus green"></span><br />Employee</a>
                          <a href="ViewUsers.php" class="btn btn-dblue btn-lg" role="button"><span class="glyphicon glyphicon-user glyphsize"></span> <br />View <span class="glyphicon glyphicon-eye-open"></span><br />Employee</a>
                          <a href="Edit.php" class="btn btn-dblue btn-lg" role="button"><span class="glyphicon glyphicon-user glyphsize"></span> <br />Edit <span class="glyphicon glyphicon-edit yellow"></span><br />Employee</a>
                          <a href="Delete.php" class="btn btn-dblue btn-lg" role="button"><span class="glyphicon glyphicon-user glyphsize"></span> <br />Delete <span class="glyphicon glyphicon-minus red"></span><br />Employee</a>
                          <a href="Attendance.php" class="btn btn-dblue btn-lg" role="button"><span class="glyphicon glyphicon-user glyphsize"></span> <br />Verfy Employee<br />Attendance <span class="glyphicon glyphicon-signal"></span></a>
                          <a href="Leave.php" class="btn btn-dblue btn-lg" role="button"><span class="glyphicon glyphicon-user glyphsize"></span> <br />Manage <br />Leave <span class="glyphicon glyphicon-book"></span></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">      
                          <a href="Login.php" class="btn btn-dred btn-lg" role="button"><span class="glyphicon glyphicon-user glyphsize"></span> <br />Login<br />Employee <span class="glyphicon glyphicon"></span></a>
                          <a href="Logout.php" class="btn btn-dred btn-lg" role="button"><span class="glyphicon glyphicon-user glyphsize"></span> <br />Logout<br />Amdin <span class="glyphicon glyphicon"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
</body>
</html>