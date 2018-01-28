<?php 
 include("includes/site-header.php");
?>

<br>
<div class="container">

        
		
	<div id = "inputDiv">
			<fieldset>
			<h1 class = "headDesign"> Cash Collection Form </h1>
<hr>
			<div class = "form-row">
							<div class ="form-group col-md-6">
								<p> Date </p>  
								<div class='input-group date' id='datetimepicker1'>
									<input type='text' class="form-control" />
										<span class="input-group-addon">
										<span class="glyphicon glyphicon-calendar"></span>
										</span>
								</div>
							</div>
							
							<div class ="form-group col-md-3">
								<form>
									<p> Invoice No. </p>  
									<input type="text" class="form-control"/>
								</form>
							</div>
							
							<div class="form-group col-md-3">
								<form>
									<p> Item No. </p>  
									<input type="text" class="form-control"/>
								</form>
							</div>

			</div>

			<div class = "form-row">
							<div class="form-group col-md-2">
								<form>
									<p> Quantity </p>  
									<input type="text" class="form-control"/>
								</form>
							</div>
							
							<div class ="form-group col-md-2">
								<form>
									<p>Unit Price</p>  
									<input type="text" class="form-control"/>
								</form>
							</div>
							
							
							<div class ="form-group col-md-8">
								<form>
									<p> Total Amount</p>  
									<input type="text" class="form-control"/>
								</form>
							</div>
							

							
			</div>

			<div class = "form-row">
							
							
							<div class ="form-group col-md-8">
								<form>
									<p> Description </p>  
									<input type="text" class="form-control"/>
								</form>
							</div>
							<div class ="form-group col-md-4">
								<input type ="button" value = "Submit" id = "submitButton" class="btn btn-primary btn-lg btn-block"/>
							</div>
			</div>
			</fieldset>


			
		</div>
</br>		
	<div id = "tableDiv"> 		
		
		<h2 class = "headDesign"> Cash Collection Form </h2>
		<table class = "table table-bordered">
		<thead>
			<tr>
				<th scope="row"></th>
				<th scope="column">Invoice No.</th>
				<th scope="column">Date</th>
				<th scope="column">Order No.</th>
				<th scope="column">Customer Name</th>
				<th scope="column">Quantity</th>
				<th scope="column">Description</th>
				<th scope="column">Total</th>
				<th scope="col">More details</th>
			</tr>
		</thead>

		<tbody>
	<tr>
		<td><input id="checkBox" type="checkbox"/></td>
		<td>1679898</td>
		<td>2018-1-2</td>
		<td>6868968865</td>
		<td>Yuri Plotnikov</td>
		<td>3</td>
		<td>consectetuer adipiscing elit.</td>
		<td>1500$</td>
		<td><a href="saledetail.php">Details</a></td>
	</tr>
	<tr>
		<td><input id="checkBox" type="checkbox"/></td>
		<td>1679898</td>
		<td>2018-1-2</td>
		<td>6865568865</td>
		<td>Vladimir Stojkovic</td>
		<td>1</td>
		<td>consectetuer adipiscing elit.</td>
		<td>1500$</td>
		<td><a href="saledetail.php">Details</a></td>
	</tr>
	<tr>
		<td><input id="checkBox" type="checkbox"/></td>
		<td>1679898</td>
		<td>2018-1-2</td>
		<td>7778968865</td>
		<td>Radovan Damjanovic</td>
		<td>2</td>
		<td>consectetuer adipiscing elit.</td>
		<td>1500$</td>
		<td><a href="saledetail.php">Details</a></td>
	</tr>
			</tbody>
	</table>
						<div class = "form-row">
							<div class ="form-group col-md-3 col-md-offset-5">
								<input type="search" id="search" placeholder="Seach by order No.">
							</div>
							<div class ="form-group col-md-2">
									<input type ="button" value = "Edit a line" id = "button" class="btn btn-primary btn-md"/>
							</div>
							<div class ="form-group col-md-2">

									<input type ="button" value = "Clear a line" id = "button" class="btn btn-primary btn-md"/>
							</div>
						</div>
	</div>
		
		
	
</div>
</div>
</br>





<?php 
 include("includes/site-footer.php");
?>
