<?php include('../config/dbconfig.php'); ?>
<?php require('../config/db.php'); ?>
<?php include('includes/site-header.php'); ?>

<?php
	if(isset($_POST['submit'])){
		$quantity = mysqli_real_escape_string($conn, $_POST['quantity']);
		$descrip = mysqli_real_escape_string($conn, $_POST['descrip']);
		$unitcost = mysqli_real_escape_string($conn, $_POST['unitcost']);
		$supplier = mysqli_real_escape_string($conn, $_POST['supplier']);
		$product = mysqli_real_escape_string($conn, $_POST['product']);
		$purchaseno = mysqli_real_escape_string($conn, $_POST['purchaseno']);
		$date=date('Y-m-d');

		$insertquery = "insert into Purchase(PurchaseNo, SupplierNo, DatePurchase ,Descrip) values ('$purchaseno','$supplier','$date','$descrip')";
		$insertquery2 = "insert into PurchaseProduct(PurchaseNo, ProductNo, Qty ,PurchasePrice) values ('$purchaseno','$product','$quantity','$unitcost')";
		if(mysqli_query($conn, $insertquery)){
			if(mysqli_query($conn, $insertquery2)){
				header('Location: '. $_SERVER['PHP_SELF'].'');
			}
		}else {
			echo 'Error'. mysqli_error($conn) ;
		}
	}
?>

<?php
	$query = "select ProductNo, ProductName from Product";
	$query2 = "select SupplierNo, SupplierName from Supplier; ";
	$query3 = "select Purchase.PurchaseNo, Purchase.DatePurchase, Supplier.SupplierName, Purchase.TrackStatus, 
	sum(PurchaseProduct.Qty * PurchaseProduct.PurchasePrice) as Total
	from Purchase join Supplier on Purchase.SupplierNo = Supplier.SupplierNo
	join PurchaseProduct on Purchase.PurchaseNo = PurchaseProduct.PurchaseNo
	group by Purchase.PurchaseNo, Purchase.DatePurchase, Supplier.SupplierName, Purchase.TrackStatus
	order by Purchase.DatePurchase DESC;";
	$result = mysqli_query($conn, $query);
	$result2 = mysqli_query($conn, $query2);
	$result3 = mysqli_query($conn, $query3);
	$products = mysqli_fetch_all($result, MYSQLI_ASSOC);
	$suppliers = mysqli_fetch_all($result2, MYSQLI_ASSOC);
	$purchaseOrders = mysqli_fetch_all($result3, MYSQLI_ASSOC);
	mysqli_free_result($result);
	mysqli_free_result($result2);
	mysqli_free_result($result3);
	mysqli_close($conn);
?>

<br>
<div class="container-fluid">

        

<div id = "inputDiv">
	<fieldset>
			<h1 class = "headDesign"> Purchasing Order </h1>
						<hr>
		<div class = "form-row">
		<div class ="form-group col-md-3">
		<form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
				<p>Purchase No:</p>
					<input type="text" name="purchaseno" class="form-control"/>
					
			</div>
				<div class ="form-group col-md-3">
				
			<p>Choose supplier: </p>
					<select name="supplier" class="form-control">
						<?php foreach($suppliers as $supplier): ?>
						<option value="<?php echo $supplier['SupplierNo'] ?>"><?php echo $supplier['SupplierName'] ?></option>
						<?php endforeach; ?>
					</select>

			</div>

			

			<div class ="form-group col-md-3">
				<p>Description:</p>
					<input type="text" name="descrip" class="form-control"/>

			</div>

		</div>

		<div class = "form-row">

			<div class ="form-group col-md-3">
				
					<p>Choose product: </p>
					<select name="product" class="form-control">
						<?php foreach($products as $product): ?>
						<option value="<?php echo $product['ProductNo'] ?>"><?php echo $product['ProductName'] ?></option>
						<?php endforeach; ?>
					</select>
				
			</div>

			<div class ="form-group col-md-3">
				
					<p>Quantity: </p>
					<input type="text" name="quantity">
			</div>
			<div class ="form-group col-md-3">
				<p>Cost per Unit </p>
					<input type="text" name="unitcost" class="form-control"/>

			</div>
			</div>
			<div class ="form-group col-md-3">
					<input type ="submit" name="submit" value = "Submit" id = "anotherSubmitButton" class="btn btn-primary btn-lg"/>
			</div>
			</form>
		</fieldset>

			<table class = "table table-bordered" >

				<thead>
				<tr>
				<th scope="column">Purchase No</th>
					<th scope="column">Date</th>
					<th scope="column">Supplier</th>
					<th scope="column">Description</th>
					<th scope="column">TOTAL</th>

				</tr>
				</thead>
				<tbody>
				<?php foreach($purchaseOrders  as $purchaseOrder): ?>
					<tr>		
					<td id = "Order"><?php echo $purchaseOrder['PurchaseNo']; ?></td>				
						<td><?php echo $purchaseOrder['DatePurchase']; ?></td>
						<td><?php echo $purchaseOrder['SupplierName']; ?></td>
						<td><?php echo $purchaseOrder['Descrip']; ?></td>
						<td><?php echo $purchaseOrder['Total']; ?></td>						
					</tr>
				<?php endforeach; ?>
				
				</tbody>
			</table>
	
		</div>
	</div>
</div>





</br>


<?php 
 include("includes/site-footer.php");
?>