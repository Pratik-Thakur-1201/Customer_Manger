<?php include("includes/database.php");?>
<?php
//select Queries
$query="select * from customer";
//get results
$result= $mysqli->query($query)or die($mysqli->error._line_);
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

    <title>Customer Manager Dashboard</title>

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
            <li role="presentation" class="active"><a href="index.php">Home</a></li>
            <li role="presentation"><a href="add_customer.php">Add Customer</a></li>
          </ul>
        </nav>
        <h3 class="text-muted">Customer Manager</h3>
      </div>

      <div class="row marketing">
        <div class="col-lg-12">
          <h2> Customers</h2>
		  <table class="table table-striped">
               <tr>
			   <th>Customer Name</th>
			   <th>Email</th>
			   <th>Address</th>
			   <th></th>
			   <th></th>
			   </tr>
			   <tr>
			   <!check if atleast one row is found!>
			   <?php if($result->num_rows>0)
			   {
				   while($row=$result->fetch_assoc())
				   {
					   //Display Customer info
					   $output='<tr>';
					   $output .='<td>'.$row['first_name'].' '.$row['last_name'].'</td>';
					   $output .='<td>'.$row['email'].'</td>';
					   $output .='<td>'.$row['address'].'</td>';
					   $output .='<td>'.'<a href="edit_customer.php?id='.$row['id'].'" class="btn btn-light btn-sm">Edit</a>'.'</td>';
					   $output .='<td>'.'<a href="delete_customer.php?id='.$row['id'].'" class="btn btn-light btn-sm">delete</a>'.'</td>';
					  $output .= '</tr>';
					   echo $output;
					   
				   }
			   }
			   else
			   {
				   echo "Sorry No Customers Found !!";
			   }
			   ?>
          </table>
        </div>

        

      

    </div> <!-- /container -->

  </body>
</html>
