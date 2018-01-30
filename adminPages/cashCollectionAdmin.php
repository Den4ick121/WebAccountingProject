<?php 
 include("includes/site-header.php");
?>

<br>
<div class="container-fluid">

        
		
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
	
		
		
	
</div>
</div>
</br>





<?php 
 include("includes/site-footer.php");
?>
