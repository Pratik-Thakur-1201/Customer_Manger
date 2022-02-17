<?php include('includes/database.php');?>
<?php
//get variable from url
$id=$_GET['id'];
$query="select * from customer where id=$id";
$result=$mysqli->query($query);
if($result=$mysqli->query($query))
{
	while($row=$result->fetch_assoc())
	{
		$first_name=$row['first_name'];
		$last_name=$row['last_name'];	
		$email=$row['email'];
		$address=$row['address'];
	}
	$result->close();
	
}
?>
<?php
if($_POST )
{
	echo "Form Was Submitted";
	$first_name=$mysqli->real_escape_string($_POST['First_Name']);
	$last_name=$mysqli->real_escape_string($_POST['Last_Name']);
	$email=$mysqli->real_escape_string($_POST['Email']);
	$address=$mysqli->real_escape_string($_POST['Address']);
	$query="update customer set first_name='$first_name',last_name='$last_name',email='$email',address='$address' where id=$id";
	$mysqli->query($query)or die(msqli->error.__line__);
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

    <title>Edit Customer</title>

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
            <li role="presentation"><a href="add_customer.php">Add Customer</a></li>
          </ul>
        </nav>
        <h3 class="text-muted">Customer Manager</h3>
      </div>

      <div class="row marketing">
        <div class="col-lg-12">
          <h2> Edit Customer</h2>
		  <form role="form" method="POST" action="edit_customer.php?id=<?php echo $id?>">
               <div class="form-group">
                <label>First Name</label>
                    <input name="First_Name"type="text" class="form-control"  
					value=<?php echo $first_name;?> placeholder="Enter First Name">
					</div>
					<div class="form-group">
                <label>Last Name</label>
                    <input name="Last_Name"type="text" class="form-control" 
					value=<?php echo $last_name;?> placeholder="Enter Last Name">
					</div>
					<div class="form-group">
                <label>Email address</label>
                    <input name="Email"type="email" class="form-control"
					value=<?php echo $email;?> placeholder="Enter Email">
					</div>
					<div class="form-group">
				<label>Address</label>
					<input name="Address" type="text" class="form-control" 
					value=<?php echo $address;?>	placeholder="Enter Address">
				</div>
				
				<input type="submit"  class="btn btn-default value="Update Customer" />
		 </form>
        </div>
        

      

    </div> <!-- /container -->

  </body>
</html>
