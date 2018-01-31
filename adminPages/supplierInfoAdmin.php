<?php include('../config/dbconfig.php'); ?>
<?php require('../config/db.php'); ?>
<?php include('includes/site-header.php'); ?>

<?php
	if(isset($_POST['submit'])){
		$name = mysqli_real_escape_string($conn, $_POST['name']);
		$phone = mysqli_real_escape_string($conn, $_POST['phone']);
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$address = mysqli_real_escape_string($conn, $_POST['address']);
		$bankno = mysqli_real_escape_string($conn, $_POST['bankno']);

		$insertquery = "insert into Supplier(SupplierName, Address, PhoneNo, Email, BankAccNumber) values ('$name','$address','$phone','$email','$bankno')";

		if(mysqli_query($conn, $insertquery)){
			header('Location: '. $_SERVER['PHP_SELF'].'');
		} else {
			echo 'Error'. mysqli_error($conn) ;
		}
	}
?>

<?php
	$query = "select SupplierName, Address, PhoneNo, Email, BankAccNumber from Supplier;";
	$result = mysqli_query($conn, $query);
	$suppliers = mysqli_fetch_all($result, MYSQLI_ASSOC);
	mysqli_free_result($result);
	mysqli_close($conn);
?>

<br>
<div class="container">

    <div id="accordion">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
		<h2 class = "headDesign"> Create new supplier </h2>
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
<div id = "inputDiv">
	<fieldset>
		<hr>
		<div class = "form-row">
							<div class="form-group col-md-6">
								<form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
									<p> Name of company: </p> 
									<input type="text" class="form-control" name="name">
								
							</div>

							

				</div>

				<div class = "form-row">
							<div class="form-group col-md-4">
								
									<p> Bank account number: </p>  
									<input type="text" class="form-control" name="bankno">
								
							</div>

							<div class ="form-group col-md-4">
								
									<p> Email adress: </p>  
									<input type="email" class="form-control" name="email">
								
							</div>

							<div class ="form-group col-md-4">
								
									<p> Phone Number: </p>  
									<input type="text" class="form-control" name="phone">
								
							</div>
				</div>

				<div class = "form-row">
							<div class="form-group col-md-12">
								
									<p> Address </p>  
									<input type="text" class="form-control" name="address">
								
							</div>

				</div>
				</br>
			
			<div class = "form-row">
				<div class ="form-group col-md-12">
					<input type ="submit" name="submit" value = "Submit" id = "formButton" class="btn btn-primary btn-lg btn-block"/>
					</form>
				</div>
			</div>
			
		</fieldset>
	</div>      </div>
    </div>
  </div>
  
	
</br>
	<div id = "tableDiv"> 
			<h2 class = "headDesign"> Supplier Information</h2>
			<?php foreach($suppliers as $supplier): ?>
			<table class = "table table-bordered">

				<thead>
				<tr>
					<th></th>
					<th>Name of Company</th>
					<th>Phone Number</th>	
				</tr>
				</thead>
				<tbody>
				<tr>
					<td rowspan = "7"><input id="checkBox" type="checkbox"/></td>
					<td><?php echo $supplier['SupplierName']; ?></td>
					<td><?php echo $supplier['PhoneNo']; ?></td>							
				</tr>
				<tr>
					<th >Email Address</th>
					<th colspan = "2">Account Number</th>
				</tr>
				<tr>
					<td><?php echo $supplier['Email']; ?></td>
					<td colspan = "2"><?php echo $supplier['BankAccNumber']; ?></td>
				</tr>
				<tr>
					<th colspan = "3"> Address</th>

				</tr>
				<tr>
					<td colspan = "3"><?php echo $supplier['Address']; ?></td>
				</tr>
				
				</tbody>
			</table>
			</br>
			<?php endforeach; ?>
			
		</div>
		</fieldset>
	</div>
</div>
</br>		

</div>





</br>


<?php 
 include("includes/site-footer.php");
?>