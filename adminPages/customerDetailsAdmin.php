<?php include('../config/dbconfig.php'); ?>
<?php require('../config/db.php'); ?>
<?php include('includes/site-header.php'); ?>

<?php
	if(isset($_POST['submit'])){
		$name = mysqli_real_escape_string($conn, $_POST['name']);
		$phone = mysqli_real_escape_string($conn, $_POST['phone']);
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$address = mysqli_real_escape_string($conn, $_POST['address']);

		$insertquery = "insert into Customer(CustName, Address, PhoneNo, Email) values ('$name','$address','$phone','$email')";

		if(mysqli_query($conn, $insertquery)){
			header('Location: '. $_SERVER['PHP_SELF'].'');
		} else {
			echo 'Error'. mysqli_error($conn) ;
		}
	}
?>

<?php
	$query = "select CustName, Address, PhoneNo, Email from Customer; ";
	$result = mysqli_query($conn, $query);
	$customers = mysqli_fetch_all($result, MYSQLI_ASSOC);
	mysqli_free_result($result);
	mysqli_close($conn);
?>

<div class="container-fluid">

        <div id="accordion">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
			<h1 class = "headDesign"> Create new Customer </h1>
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
		<div id = "inputDiv">
				<div class = "form-row">
								<div class ="form-group col-md-6">
									<form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
									<p> Customer Name </p>
									<input type="text" class="form-control" name="name">
									
								</div>
								
								<div class ="form-group col-md-6" >
									
										<p> Phone Number </p>  
										<input type="text" class="form-control" name="phone">
									
								</div>
				</div>

				<div class = "form-row">
								<div class="form-group col-md-3" >
									
										<p> E-Mail</p>  
										<input type="email" class="form-control" name="email">
									
								</div>
							
				</div>
				
				<div class = "form-row">

								<div class ="form-group col-md-8">
									
										<p> Address</p>  
										<input type="text" class="form-control" name="address">
									
								</div>
								
								<div class ="form-group col-md-4">
								<input type ="submit" name="submit" value = "Create a new customer file" id = "submitButton" class="btn btn-primary btn-lg btn-block"/>
								</form>
								</div>								
				</div>
				
			</div>
		</div>
    </div>
  </div>
		

</br>	
	<div id = "tableDiv">
	
				<h2 class = "headDesign"> Customer Information</h2>				  

						<div class="collapse" id="collapseExample">
				    <div class="card card-body">
					</div>
					</div>
			<table class = "table table-bordered">
			
				<thead>
				<tr>
					<th>Customer Name </th>
					<th>Phone Number</th>
					<th> Address </th>
					<th>Email</th>					
				</tr>
				</thead>
				<tbody>
					<?php foreach($customers as $customer): ?>
						<tr>
							<td id="Order"><?php echo $customer['CustName']; ?></td>
							<td><?php echo $customer['PhoneNo']; ?></td>
							<td><?php echo $customer['Address']; ?></td>
							<td><?php echo $customer['Email']; ?></td>				
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>				  

		</div>
	
</div>
</div>
</div>
</br>


<?php 
 include("includes/site-footer.php");
?>