<?php 
 include("includes/site-header.php");
?>

<br>
<div class="container-fluid">
	
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
				<div class ="form-group col-md-8">

					<input type ="button" value = "Submit" id = "formButton" class="btn btn-primary"/>
				</div>
			</div>
			
		</fieldset>
	</div>
</div>
</div>




</br>


<?php 
 include("includes/site-footer.php");
?>
