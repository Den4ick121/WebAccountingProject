<?php 
 include("includes/site-header.php");
?>

<br>
<div class="container-fluid">

        
		
	<div id = "inputDiv">
			<fieldset>
			<h1 class = "headDesign"> Sale Order</h1>
<hr>
			<div class = "form-row">
							<div class ="form group col-md-3">
								<form action="http://www.example.com/bookings/method="post" >
									<p> Date </p>
									<input type="date" name="date" class="form-control"/>
								</form>
							</div>
							
							<div class ="form-group col-md-2">
				<form action="http://www.example.com/profile.php">
					<p>Sale order No. : </p>
					<select name="order" class="form-control">
						<option value="1"> 1 </option>
						<option value="2"> 2 </option>
						<option value="3"> 3 </option>
						<option value="4"> 4 </option>
					</select>
				</form>
			</div>
							
							<div class="form-group col-md-3">
								<form id = "numberForm">
									<p> Customers Name </p>  
									<input type="text" class="form-control">
								</form>
							</div>

			</div>
							
			<div class = "form-row">

				<div class ="form-group col-md-2">
				<form id = "numberForm">
					<p>Choose product: </p>
					<select name="payment" class="form-control">
						<option value="Burgers"> Burgers </option>
						<option value="Hot Dog"> Hot Dog </option>
						<option value="Water"> Fresh Clean Water </option>
					</select>
				</form>
			</div>
							<div class ="form-group col-md-3">
								<form>
									<p> Description </p>  
									<input type="text" class="form-control">
								</form>
							</div>
							<div class="form-group col-md-2" >
								<form id = "numberForm">
									<p> Quantity</p>  
									<input type="text" class="form-control">
								</form>
							</div>
							
							<div  class ="form-group col-md-2">
								<form id = "numberForm">
									<p>Unit Price</p>  
									<input type="text" class="form-control">
								</form>
							</div>
							
			</div>

			<div class = "form-row">

							<div class ="form-group col-md-2">
								<form>
									<p> Total </p>  
									<input type="text" class="form-control">
								</form>
							</div>
							


			</div>

										<div class ="form-group col-md-2">
								<input type ="button" value = "Submit" id = "submitButton" class="btn btn-primary btn-lg btn-block"/>
							</div>
			
			</fieldset>


			
	</div>
</br>
		
	
	


			
	</div>
</div>

</br>


<?php 
 include("includes/site-footer.php");
?>