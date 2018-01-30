<?php 
 include("includes/site-header.php");
?>

<br>
<div class="container-fluid">

        <div id="accordion">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
			<h1 class = "headDesign"> Create new Customer </h1>
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
		<div id = "inputDiv">
				<div class = "form-row">
								<div class ="form-group col-md-6">
									<form>
									<p> Customer Name </p>
									<input type="text" class="form-control">
									</form>
								</div>
								
								<div class ="form-group col-md-6" >
									<form>
										<p> Phone Number </p>  
										<input type="text" class="form-control">
									</form>
								</div>
				</div>

				<div class = "form-row">
								<div class="form-group col-md-3" >
									<form>
										<p> E-Mail</p>  
										<input type="email" class="form-control">
									</form>
								</div>
								
								<div  class ="form-group col-md-3">
									<form>
										<p>Contact Person Name</p>  
										<input type="text" class="form-control">
									</form>
								</div>
								
								<div class ="form-group col-md-6">
									<form>
										<p> Contact Person Phone </p>  
										<input type="text" class="form-control">
									</form>
								</div>
				</div>
				
				<div class = "form-row">
								<div class ="form-group col-md-12">
									<form>
										<p> Remark</p>  
										<input type="text" class="form-control">
									</form>
								</div>							
				</div>
				
				<div class = "form-row">

								<div class ="form-group col-md-8">
									<form>
										<p> Address</p>  
										<input type="text" class="form-control">
									</form>
								</div>
								
								<div class ="form-group col-md-4">
								<input type ="button" value = "Create a new customer file" id = "submitButton" class="btn btn-primary btn-lg btn-block"/>
								</div>								
				</div>
				
			</div>
		</div>
    </div>
  </div>
		

</br>	
	<div id = "tableDiv">
	
				<h2 class = "headDesign"> Customer Information</h2>				  

						<div class="collapse" id="collapseExample">
				    <div class="card card-body">
					</div>
					</div>
			<table class = "table table-bordered">
			
				<thead>
				<tr>
					<th></th>
					<th>Customer Name </th>
					<th>Phone Number</th>
					<th colspan = "2"> Address </th>
					
				</tr>
				</thead>
				<tbody>
				<tr> 
				
				<tr>
					<td rowspan = "5"><input id="checkBox" type="checkbox"/></td>
					<td id="Order">Homer Simspon</td>
					<td>420-420-666</td>
					<td colspan = "2">Home ave 4/20</td>
				
				</tr>
				
				
				<tr>
				
					<th >Email Address</th>
					<th colspan = "3"> Personal phone number</th>
				</tr>
				<tr>
					<td>wow@mail.omg</td>
					<td colspan = "3">8-916-664-20-69</td>
				</tr>
				
				

				</tbody>
			</table>				  
</br>
			<table class = "table table-bordered">

				<thead>
				<tr>
					<th></th>
					<th>Customer Name </th>
					<th>Phone Number</th>
					<th colspan = "2"> Address</th>
					
				</tr>
				</thead>
				<tbody>
				<tr>
					<td rowspan = "5"><input id="checkBox" type="checkbox"/></td>
					<td id="Order">Aperture Science</td>
					<td>420-420-666</td>
					<td colspan = "2">Springfield Spooning St. 4/20</td>
					
				</tr>
				<tr>
					<th >Email Address</th>
					<th colspan = "3"> Personal phone number</th>
				</tr>
				<tr>
					<td>wow@mail.omg</td>
					<td colspan = "3">8-916-664-20-69</td>
				</tr>
				
				
				</tbody>
			</table>
</br>
			<table class = "table table-bordered">

				<thead>
				<tr>
					<th></th>
					<th>Customer Name </th>
					<th>Phone Number</th>
					<th colspan = "2"> Address</th>
					
				</tr>
				</thead>
				<tbody>
				<tr>
					<td rowspan = "5"><input id="checkBox" type="checkbox"/></td>
					<td id="Order">I dont remember</td>
					<td>420-420-666</td>
					<td colspan = "2">Where?</td>
					
				</tr>
				<tr>
					<th >Email Address</th>
					<th colspan = "3"> Personal phone number</th>
				</tr>
				<tr>
					<td>I think it's on gmail</td>
					<td colspan = "3">8-916-664-20-69</td>
				</tr>
				
				
				</tbody>
			</table>
</br>			
			<table class = "table table-bordered">

				<thead>
				<tr>
					<th></th>
					<th>Customer Name </th>
					<th>Phone Number</th>
					<th colspan = "2"> Address</th>
					
				</tr>
				</thead>
				<tbody>
				<tr>
					<td rowspan = "5"><input id="checkBox" type="checkbox"/></td>
					<td id="Order">Egor</td>
					<td>420-420-666</td>
					<td colspan = "2">Where?</td>
					
				</tr>
				<tr>
					<th >Email Address</th>
					<th colspan = "3"> Personal phone number</th>
				</tr>
				<tr>
					<td>I think it's on gmail</td>
					<td colspan = "3">8-976-644-20-69</td>
				</tr>
				
				
				</tbody>
			</table>			
		</div>
	
</div>
</div>
</div>
</br>


<?php 
 include("includes/site-footer.php");
?>