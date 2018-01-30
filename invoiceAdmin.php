<?php 
 include("includes/site-header.php");
?>

<br>
<div class="container-fluid">

        
		
	<div id = "inputDiv">
	<fieldset>
		<h1 class = "headDesign"> Invoice</h1>
<hr>
			<div class = "form-row">
							<div class ="form-group col-md-3">
								<form action="http://www.example.com/bookings/method="post" >
									<p> Date </p>
									<input type="date" name="date" class="form-control"/>
								</form>
							</div>
							

							<div class ="form-group col-md-2">
				<form id = "numberForm">
					<p>Order No. : </p>
					<select name="order" class="form-control">
						<option value="1"> 1 </option>
						<option value="2"> 2 </option>
						<option value="3"> 3 </option>
						<option value="4"> 4 </option>
					</select>
				</form>
			</div>
							
							<div class="form-group col-md-2">
								<form id = "numberForm">
									<p> Invoice No. </p>  
									<select name="invoice" class="form-control">
						<option value="1"> 1 </option>
						<option value="2"> 2 </option>
						<option value="3"> 3 </option>
						<option value="4"> 4 </option>
					</select>
								</form>
							</div>

							<div class ="form-group col-md-3">
								<form>
									<p> Customer Name </p>  
									<input type="text" class="form-control">
								</form>
							</div>

			</div>

			<div class = "form-row">

				<div class ="form-group col-md-2">
				<form id = "numberForm">
					<p>Choose product: </p>
					<select name="product" class="form-control">
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
			
<div class ="form-group col-md-3">
					<input type ="button" value = "Submit" id = "anotherSubmitButton" class="btn btn-primary btn-lg"/>
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