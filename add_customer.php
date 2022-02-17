<?php include('includes/database.php');?>
<?php
if($_POST )
{
	echo "Form Was Submitted";
	$first_name=$mysqli->real_escape_string($_POST['First_Name']);
	$last_name=$mysqli->real_escape_string($_POST['Last_Name']);
	$email=$mysqli->real_escape_string($_POST['Email']);
	$address=$mysqli->real_escape_string($_POST['Address']);
	$query="insert into customer(first_name,last_name,email,address) values('$first_name','$last_name','$email','$address')";
	$mysqli->query($query);
	header('location: index.php');
	exit;
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <link rel="canonical" href="https://getbootstrap.com/docs/3.4/examples/jumbotron-narrow/">

    <title>Add Customer</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/jumbotron-narrow.css" rel="stylesheet"> 
  </head>

  <body>

    <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation" ><a href="index.php">Home</a></li>
            <li role="presentation" class="active"><a href="add_customer.php">Add Customer</a></li>
          </ul>
        </nav>
        <h3 class="text-muted">Customer Manager</h3>
      </div>

      <div class="row marketing">
        <div class="col-lg-12">
          <h2> Add Customer</h2>
		  <form role="form" method="POST" action="add_customer.php">
               <div class="form-group">
                <label>First Name</label>
                    <input name="First_Name"type="text" class="form-control"  placeholder="Enter First Name">
					</div>
					<div class="form-group">
                <label>Last Name</label>
                    <input name="Last_Name"type="text" class="form-control"  placeholder="Enter Last Name">
					</div>
					<div class="form-group">
                <label>Email address</label>
                    <input name="Email"type="email" class="form-control"  placeholder="Enter Email">
					</div>
					<div class="form-group">
				<label>Address</label>
					<input name="Address" type="text" class="form-control"  placeholder="Enter Address">
				</div>
				
				<input type="submit" class="btn btn-default value="Add Customer"/>
		 </form>
        </div>
        

      

    </div> <!-- /container -->

  </body>
</html>
