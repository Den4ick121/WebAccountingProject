<?php 
 include("includes/site-header.php");
?>

<br>
<div class="container">

        

<div id = "inputDiv">
	<fieldset>
			<h1 class = "headDesign"> Purchasing Order </h1>
						<hr>
		<div class = "form-row">
				<div class ="form-group col-md-4">
				<form action="http://www.example.com/profile.php">
			<p>Choose payer: </p>
					<select name="payer" class="form-control">
						<option value="MacDonalds">MacDonalds </option>
						<option value="BurgerKing"> BurgerKing </option>
						<option value="KFC">KFC </option>
					</select>
				</form>
			</div>

			<div class ="form-group col-md-4">
				<form action="http://www.example.com/profile.php">
				<p>Cash and cash equivalents: </p>
			<select name="cash" class="form-control">
				<option value="dollars"> Dollars </option>
				<option value="Gold"> Gold </option>
				<option value="Kidney">Kidney </option>
			</select>
				</form>
			</div>

			<div class ="form-group col-md-4">
			<h1 class = "headingDesighn"> Balance <span id="balance">000$</span></h1>
			</div>

		</div>

		<div class = "form-row">
			<div class ="form-group col-md-4">
				<form action="http://www.example.com/bookings/method="post" >
					<p> Date </p>
					<input type="date" name="date" class="form-control"/><br />
				</form>
			</div>

			<div class ="form-group col-md-4">
				<form action="http://www.example.com/profile.php">
					<p>Choose payment method: </p>
					<select name="payment" class="form-control">
						<option value="Visa"> Visa </option>
						<option value="Bitcoin"> Bitcoin </option>
						<option value="Dollars"> Dollars </option>
					</select>
				</form>
			</div>

			<div class ="form-group col-md-4">
				<p>Order No.</p>
				<input type="text" name="order" class="form-control"/>
			</div>

		</div>

			<div class = "form-row">
				<div class ="form-group col-md-12">
					<input type ="button" value = "Submit a line" id = "anotherSubmitButton" class="btn btn-primary btn-lg btn-block"/>
				</div>
			</div>
		</fieldset>
	</div>
</br>
	<div id = "tableDiv"> 

			<table class = "table table-bordered" >

				<thead>
				<tr>
					<th scope="column"></th>
					<th scope="column">Purchase No.</th>
					<th scope="column">Date</th>
					<th scope="column">Order No.</th>
					<th scope="column">Quantity</th>
					<th scope="column">TOTAL</th>
					<th scope="col">More details</th>

				</tr>
				</thead>
				<tbody>
				<tr>
					<td scope = "row"><input id="checkBox" type="checkbox"/></td>
					
					<td>1</td>
					<td>2018-1-2</td>
					<td id = "Order">1234</td>
					<td>2</td>
					<td>2000$</td>
					<td><a href="saledetail.php">Details</a></td>
					
				</tr>
				<tr>
					<td scope = "row"><input id="checkBox" type="checkbox"/></td>
					<td>2</td>
					<td>2018-1-2</td>
					<td id = "Order">1235</td>
					<td>1</td>
					<td>2000$</td>
					<td><a href="saledetail.php">Details</a></td>

				</tr>
				<tr>
					<td scope = "row"><input id="checkBox" type="checkbox"/></td>
					<td>3</td>
					<td>2018-1-2</td>
					<td id = "Order">1236</td>
					<td>4</td>
					<td>2000$</td>
					<td><a href="saledetail.php">Details</a></td>

				</tr>
				<tr>
					<td scope = "row"><input id="checkBox" type="checkbox"/></td>
					<td>4</td>
					<td>2018-1-2</td>
					<td id = "Order">1237</td>
					<td>4</td>
					<td>2000$</td>
					<td><a href="saledetail.php">Details</a></td>

				</tr>
				<tr>
					<td scope = "row"><input id="checkBox" type="checkbox"/></td>
					<td>5</td>
					<td>2018-1-2</td>
					<td id = "Order">1238</td>
					<td>2</td>
					<td>2000$</td>
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