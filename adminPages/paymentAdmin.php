
  <?php 
 include("includes/site-header.php");
?>

<br>
<div class="container">

        

<div id = "inputDiv">
	<fieldset>
			<h1 class = "headDesign"> Payment Screen </h1>
			<hr>
		<div class = "form-row">
			<div class ="form-group col-md-12">
				<p>Transaction No.</p>
				<input type="text" name="order" class="form-control"/>
			</div>

		</div>

		<div class = "form-row">
			<div class ="form-group col-md-12">
				<p>Vendor No.</p>
				<input type="text" name="order" class="form-control"/>
			</div>
			
		</fieldset>
	</div>
</br>
	<div id = "tablePaymentDiv"> 
			<h2 class = "headDesign"> Transaction Summmary </h2>
			<table class = "table">

				<thead>
				<tr>
					<th scope="column"></th>
					<th scope="column">Invoice No.</th>
					<th scope="column">Description</th>
					<th scope="column">Amount Due</th>

				</tr>
				</thead>
				<tbody>
				<tr>
					<td>Cell</td>
					<td>30th of Februrary</td>
					<td>1234</td>
					<td>Empty</td>			
				</tr>
				<tr>
					<td>Cell</td>
					<td>30th of Februrary</td>
					<td>1235</td>
					<td>Empty</td>
				</tr>
				<tr>
					<td>Cell</td>
					<td>30th of Februrary</td>
					<td>1236</td>
					<td>Empty</td>
				</tr>
				<tr>
					<td>Cell</td>
					<td>30th of Februrary</td>
					<td>1237</td>
					<td>Empty</td>
				</tr>
				</tbody>
				<tfoot>
				<tr>
					<td>TOTAL</td>
					<td></td>
					<td></td>
					<td></td>

				</tr>
				</tfoot>
			</table>
				<div class = "form-row">
					<div class ="form-group col-md-12">
					
						<form action="http://www.example.com/profile.php" >
							<p align="left">Payment method: </p>
							<select name="cash" class="form-control">
							<option value="visa">VISA </option>
							<option value="cash">CASH </option>
							<option value="direct dibit">DIRECT DIBIT </option>
							<option value="bank transfer">BANK TRANSFER </option>
							</select>
						</form>			
					</div>
				</div>
				
				<div class = "form-row">
					<div class ="form-group col-md-12">
					
					<input type ="button" value = "Pay and Save" id = "button" class="btn btn-primary btn-lg"/>
					</div>
				</div>		
				
		</div>
	</div>
</div>




</div>
</br>



<?php 
 include("includes/site-footer.php");
?>