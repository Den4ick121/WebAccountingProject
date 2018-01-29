<?php 
 include("includes/site-header.php");
?>

<br>
<div class="container">

        
</br>
	<div id = "tableDiv"> 
			<h2 class = "headDesign"> Inventory File </h2>
			<table class = "table table-bordered">

				<thead>
				<tr>
					<th scope="column"></th>
					<th scope="column">Item No.</th>
					<th scope="column">Name of Product</th>
					<th scope="column">Description</th>
					<th scope="column">Quantity</th>
					<th scope="column">Cost per Unit</th>
					<th scope="column">Total Cost</th>
					<th scope="column">Supplier</th>

				</tr>
				</thead>
				<tbody>
				<tr>
					<td><input id="checkBox" type="checkbox"/></td>
					<td>1235</td>
					<td>Pizza Fungi</td>
					<td>Mushroom Pizza</td>
					<td>420</td>			
					<td>420</td>
					<td>420</td>			
					<td>Italian Chef</td>
				</tr>
				<tr>
					<td><input id="checkBox" type="checkbox"/></td>
					<td>1236</td>
					<td>Pizza Fungi</td>
					<td>Mushroom Pizza</td>
					<td>420</td>			
					<td>420</td>
					<td>420</td>			
					<td>Italian Chef</td>
				</tr>
				<tr>
					<td><input id="checkBox" type="checkbox"/></td>
					<td>1237</td>
					<td>Pizza Fungi</td>
					<td>Mushroom Pizza</td>
					<td>420</td>			
					<td>420</td>
					<td>420</td>			
					<td>Italian Chef</td>
				</tr>
				<tr>
					<td><input id="checkBox" type="checkbox"/></td>
					<td>1238</td>
					<td>Pizza Fungi</td>
					<td>Mushroom Pizza</td>
					<td>420</td>			
					<td>420</td>
					<td>420</td>			
					<td>Italian Chef</td>
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
</br>		
	<div id = "inputDiv">
	<fieldset>
		<h2 class = "headDesign"> Inventory Form </h2>
		<hr>
		<div class = "form-row">
							<div class="form-group col-md-4">
								<form>
									<p> Item No. </p> 
									<input type="text" class="form-control">
								</form>
							</div>

							<div class ="form-group col-md-4">
								<form>
									<p> Name of Product </p>  
									<input type="text" class="form-control">
								</form>
							</div>

							<div class ="form-group col-md-4">
								<form>
									<p> Description </p>  
									<input type="text" class="form-control">
								</form>
							</div>

				</div>

				<div class = "form-row">
							<div class="form-group col-md-4">
								<form>
									<p> Quantity </p>  
									<input type="text" class="form-control">
								</form>
							</div>

							<div class ="form-group col-md-4">
								<form>
									<p> Cost per Unit </p>  
									<input type="text" class="form-control">
								</form>
							</div>

							<div class ="form-group col-md-4">
								<form>
									<p> Total Cost </p>  
									<input type="text" class="form-control">
								</form>
							</div>
				</div>

				<div class = "form-row">
							<div class="form-group col-md-4">
								<form>
									<p> Supplier </p>  
									<input type="text" class="form-control">
								</form>
							</div>
				</div>
				</br>
			<div class = "form-row">
				<div class ="form-group col-md-12">

					<input type ="button" value = "Add a line" id = "formButton" class="btn btn-primary btn-lg btn-block"/>
				</div>
			</div>
			
		</fieldset>
	</div>
</div>
</div>







<?php 
 include("includes/site-footer.php");
?>
