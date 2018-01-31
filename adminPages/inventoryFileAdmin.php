<?php include('../config/dbconfig.php'); ?>
<?php require('../config/db.php'); ?>
<?php include('includes/site-header.php'); ?>


<?php
	if(isset($_POST['submit'])){
		$name = mysqli_real_escape_string($conn, $_POST['name']);
		$descrip = mysqli_real_escape_string($conn, $_POST['descrip']);
		$unitcost = mysqli_real_escape_string($conn, $_POST['unitcost']);
		$supplier = mysqli_real_escape_string($conn, $_POST['supplier']);

		$insertquery = "insert into Product(ProductName, SupplierNo, Descrip ,UnitCost) values ('$name','$supplier','$descrip','$unitcost')";

		if(mysqli_query($conn, $insertquery)){
			header('Location: '. $_SERVER['PHP_SELF'].'');
		} else {
			echo 'Error'. mysqli_error($conn) ;
		}
	}
?>

<?php
	$query = "select ProductName, SupplierName, UnitCost, Descrip, sum(coalesce(Qty, 0)) as Qty
	from (select ProductNo, ProductName, SupplierName, UnitCost, Descrip from
	Product join Supplier on Product.SupplierNo = Supplier.SupplierNo) as A
	left join PurchaseProduct on A.ProductNo = PurchaseProduct.ProductNo
	group by ProductName, SupplierName, UnitCost, Descrip; ";
	$query2 = "select SupplierNo, SupplierName from Supplier; ";
	$result = mysqli_query($conn, $query);
	$result2 = mysqli_query($conn, $query2);
	$products = mysqli_fetch_all($result, MYSQLI_ASSOC);
	$suppliers = mysqli_fetch_all($result2, MYSQLI_ASSOC);

	mysqli_free_result($result);
	mysqli_free_result($result2);
	mysqli_close($conn);
?>

<div class="container-fluid">

        <div id="accordion">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
			<h1 class = "headDesign"> Create new Product </h1>
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
		<div id = "inputDiv">
				<div class = "form-row">
								<div class ="form-group col-md-6">
									<form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
									<p> Product Name </p>
									<input type="text" class="form-control" name="name">
									
								</div>
								
								<div class ="form-group col-md-6" >
									
										<p> Description </p>  
										<input type="text" class="form-control" name="descrip">
									
								</div>
				</div>

				<div class = "form-row">
								<div class="form-group col-md-3" >
									
										<p> Unit Cost</p>  
										<input type="text" class="form-control" name="unitcost">
									
								</div>
							
				</div>
				
				<div class = "form-row">

								<div class ="form-group col-md-8">
									
										<p> Supplier</p>  
										<select name="supplier" class="form-control">
											<?php foreach($suppliers as $supplier): ?>
												<option value="<?php echo $supplier['SupplierNo'] ?>"><?php echo $supplier['SupplierName'] ?></option>
											<?php endforeach; ?>
										</select>
									
								</div>
								
								<div class ="form-group col-md-4">
								<input type ="submit" name="submit" value = "Submit" id = "submitButton" class="btn btn-primary btn-lg btn-block"/>
								</form>
								</div>								
				</div>
				
			</div>
		</div>
    </div>
  </div>
		

</br>	
	<div id = "tableDiv">
	
				<h2 class = "headDesign"> Inventory Information</h2>				  

						<div class="collapse" id="collapseExample">
				    <div class="card card-body">
					</div>
					</div>
			<table class = "table table-bordered">
			
				<thead>
				<tr>
					<th>Product Name </th>
					<th>Supplier Name</th>
					<th>Description </th>
					<th>Quantity</th>
					<th>Unit Cost</th>	
					<th>Balance</th>				
				</tr>
				</thead>
				<tbody>
					<?php 
						$balance = 0;
						foreach($products as $product): ?>
						<tr>
							<?php $balance = $product['Qty'] * $product['UnitCost']; ?>
							<td id="Order"><?php echo $product['ProductName']; ?></td>
							<td><?php echo $product['SupplierName']; ?></td>
							<td><?php echo $product['Descrip']; ?></td>
							<td><?php echo $product['Qty']; ?></td>
							<td><?php echo $product['UnitCost']; ?></td>
							<td><?php echo $balance; ?></td>				
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
