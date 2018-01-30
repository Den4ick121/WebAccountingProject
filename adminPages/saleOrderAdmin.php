<?php 
 include("includes/site-header.php");
?>

<br>
<div class="container-fluid">

        
		
	<div id = "inputDiv">
			<fieldset>
			<h1 class = "headDesign"> Sale Order Form </h1>
<hr>
			<div class = "form-row">
							<div class ="form group col-md-4">
								<form action="http://www.example.com/bookings/method="post" >
									<p> Date </p>
									<input type="date" name="date" class="form-control"/>
								</form>
							</div>
							
							<div class ="form-group col-md-4" >
								<form id = "numberForm">
									<p> Sale Order No. </p>  
									<input type="text" class="form-control">
								</form>
							</div>
							
							<div class="form-group col-md-4">
								<form id = "numberForm">
									<p> Customers Name </p>  
									<input type="text" class="form-control">
								</form>
							</div>

			</div>

			<div class = "form-row">
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
							
							<div  class ="form-group col-md-2">
								<form id = "numberForm">
									<p>Product No.</p>  
									<input type="text" class="form-control">
								</form>
							</div>	
							
							<div class ="form-group col-md-6">
								<form>
									<p> Total </p>  
									<input type="text" class="form-control">
								</form>
							</div>

							

							
			</div>

			<div class = "form-row">
							
							
							
							<div class ="form-group col-md-8">
								<form>
									<p> Description </p>  
									<input type="text" class="form-control">
								</form>
							</div>
							
							<div class ="form-group col-md-4">
								<input type ="button" value = "Submit" id = "submitButton" class="btn btn-primary btn-lg btn-block"/>
							</div>

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