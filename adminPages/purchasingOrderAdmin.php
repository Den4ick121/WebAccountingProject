<?php 
 include("includes/site-header.php");
?>

<br>
<div class="container-fluid">

        

<div id = "inputDiv">
	<fieldset>
			<h1 class = "headDesign"> Purchasing Order </h1>
						<hr>
		<div class = "form-row">
				<div class ="form-group col-md-4">
				<form action="http://www.example.com/profile.php">
			<p>Choose supplier: </p>
					<select name="payer" class="form-control">
						<option value="MacDonalds">MacDonalds </option>
						<option value="BurgerKing"> BurgerKing </option>
						<option value="KFC">KFC </option>
					</select>
				</form>
			</div>

			<div class ="form-group col-md-4">
				<p>Cost per Unit </p>
					<input type="text" name="order" class="form-control"/>

			</div>

			<div class ="form-group col-md-4">
			<h1 class = "headingDesighn"> Balance <span id="balance">000$</span></h1>
			</div>

		</div>

		<div class = "form-row">

			<div class ="form-group col-md-4">
				<form action="http://www.example.com/profile.php">
					<p>Choose product: </p>
					<select name="payment" class="form-control">
						<option value="Burgers"> Burgers </option>
						<option value="Hot Dog"> Hot Dog </option>
						<option value="Water"> Fresh Clean Water </option>
					</select>
				</form>
			</div>

			<div class ="form-group col-md-4">
				<p>Order No.</p>
				<input type="text" name="order" class="form-control"/>
			</div>
			
			<div class ="form-group col-md-4">
					<input type ="button" value = "Submit" id = "anotherSubmitButton" class="btn btn-primary btn-lg"/>
			</div>
			</div>
		</fieldset>

			<table class = "table table-bordered" >

				<thead>
				<tr>
					<th scope="column">Product</th>
					<th scope="column">Cost per Unit</th>
					<th scope="column">Quantity</th>
					<th scope="column">Order No.</th>
					<th scope="column">TOTAL</th>

				</tr>
				</thead>
				<tbody>
				<tr>
					
					<td>1</td>
					<td>2018-1-2</td>
					<td id = "Order">1234</td>
					<td>2</td>
					<td>2000$</td>
					
				</tr>
				<tr>
					<td>2</td>
					<td>2018-1-2</td>
					<td id = "Order">1235</td>
					<td>1</td>
					<td>2000$</td>

				</tr>
				<tr>
					<td>3</td>
					<td>2018-1-2</td>
					<td id = "Order">1236</td>
					<td>4</td>
					<td>2000$</td>

				</tr>
				<tr>
					<td>4</td>
					<td>2018-1-2</td>
					<td id = "Order">1237</td>
					<td>4</td>
					<td>2000$</td>

				</tr>
				<tr>
					<td>5</td>
					<td>2018-1-2</td>
					<td id = "Order">1238</td>
					<td>2</td>
					<td>2000$</td>

				</tr>
				</tbody>
			</table>
	
		</div>
	</div>
</div>





</br>


<?php 
 include("includes/site-footer.php");
?>