<?php 
 include("includes/site-header.php");
?>

<br>
<div class="container">

    <div id="accordion">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
		<h2 class = "headDesign"> Create new supplier </h2>
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
<div id = "inputDiv">
	<fieldset>
		<hr>
		<div class = "form-row">
							<div class="form-group col-md-6">
								<form>
									<p> Name of company: </p> 
									<input type="text" class="form-control">
								</form>
							</div>

							<div class ="form-group col-md-6">
								<form>
									<p> Name of contact: </p>  
									<input type="text" class="form-control">
								</form>
							</div>

				</div>

				<div class = "form-row">
							<div class="form-group col-md-4">
								<form>
									<p> Account number: </p>  
									<input type="text" class="form-control">
								</form>
							</div>

							<div class ="form-group col-md-4">
								<form>
									<p> Email adress: </p>  
									<input type="email" class="form-control">
								</form>
							</div>

							<div class ="form-group col-md-4">
								<form>
									<p> Supplier Number: </p>  
									<input type="text" class="form-control">
								</form>
							</div>
				</div>

				<div class = "form-row">
							<div class="form-group col-md-12">
								<form>
									<p> Address </p>  
									<input type="text" class="form-control">
								</form>
							</div>

				</div>
				</br>
			<div class = "form-row">
				<div class ="form-group col-md-12">
								<form action="http://www.example.com/profile.php" >
									<p align="left">Supplier Status: </p>
										<select name="status" class="form-control">
										<option value="good" class = "green" >Good Supplier </option>
										<option value= "okay">Okay! </option>
										<option value="bad"> Bad </option>
										<option value="reallyBad">Awful Do Not Work With</option>
									</select>
								</form>
				</div>
			<div class = "form-row">
				<div class ="form-group col-md-12">
					<input type ="button" value = "Add a line" id = "formButton" class="btn btn-primary btn-lg btn-block"/>

				</div>
			</div>
			
		</fieldset>
	</div>      </div>
    </div>
  </div>
  
	
</br>
	<div id = "tableDiv"> 
			<h2 class = "headDesign"> Supplier Information File  </h2>
			
			<table class = "table table-bordered">

				<thead>
				<tr>
					<th></th>
					<th>Name of Company</th>
					<th>Name of Contact</th>
					<th>Supplier Number</th>	
				</tr>
				</thead>
				<tbody>
				<tr>
					<td rowspan = "7"><input id="checkBox" type="checkbox"/></td>
					<td>Aperture Science</td>
					<td>Glados</td>
					<td>420-420-666</td>							
				</tr>
				<tr>
					<th >Email Address</th>
					<th colspan = "2">Account Number</th>
				</tr>
				<tr>
					<td>wow@mail.omg</td>
					<td colspan = "2">8-916-664-20-69</td>
				</tr>
				<tr>
					<th colspan = "3"> Address</th>

				</tr>
				<tr>
					<td colspan = "3">Springfield Spooning St. 4/20</td>
				</tr>
				
				</tbody>
			</table>
			</br>
			<table class = "table table-bordered">

				<thead>
				<tr>
					<th></th>
					<th>Name of Company</th>
					<th>Name of Contact</th>
					<th>Supplier Number</th>	
				</tr>
				</thead>
				<tbody>
				<tr>
					<td rowspan = "7"><input id="checkBox" type="checkbox"/></td>
					<td>Aperture Science</td>
					<td>Glados</td>
					<td>420-420-666</td>							
				</tr>
				<tr>
					<th >Email Address</th>
					<th colspan = "2">Account Number</th>
				</tr>
				<tr>
					<td>wow@mail.omg</td>
					<td colspan = "2">8-916-664-20-69</td>
				</tr>
				<tr>
					<th colspan = "3"> Address</th>

				</tr>
				<tr>
					<td colspan = "3">Springfield Spooning St. 4/20</td>
				</tr>
			
				</tbody>
			</table>
			</br>
			<table class = "table table-bordered">

				<thead>
				<tr>
					<th></th>
					<th>Name of Company</th>
					<th>Name of Contact</th>
					<th>Supplier Number</th>	
				</tr>
				</thead>
				<tbody>
				<tr>
					<td rowspan = "7"><input id="checkBox" type="checkbox"/></td>
					<td>Aperture Science</td>
					<td>Glados</td>
					<td>420-420-666</td>							
				</tr>
				<tr>
					<th >Email Address</th>
					<th colspan = "2">Account Number</th>
				</tr>
				<tr>
					<td>wow@mail.omg</td>
					<td colspan = "2">8-916-664-20-69</td>
				</tr>
				<tr>
					<th colspan = "3"> Address</th>

				</tr>
				<tr>
					<td colspan = "3">Springfield Spooning St. 4/20</td>
				</tr>
				
				</tbody>
			</table>
			</br>
			<table class = "table table-bordered">

				<thead>
				<tr>
					<th></th>
					<th>Name of Company</th>
					<th>Name of Contact</th>
					<th>Supplier Number</th>	
				</tr>
				</thead>
				<tbody>
				<tr>
					<td rowspan = "7"><input id="checkBox" type="checkbox"/></td>
					<td>Aperture Science</td>
					<td>Glados</td>
					<td>420-420-666</td>							
				</tr>
				<tr>
					<th >Email Address</th>
					<th colspan = "2">Account Number</th>
				</tr>
				<tr>
					<td>wow@mail.omg</td>
					<td colspan = "2">8-916-664-20-69</td>
				</tr>
				<tr>
					<th colspan = "3"> Address</th>

				</tr>
				<tr>
					<td colspan = "3">Springfield Spooning St. 4/20</td>
				</tr>
				
				</tbody>
			</table>
		</div>
		</fieldset>
	</div>
</div>
</br>		

</div>





</br>


<?php 
 include("includes/site-footer.php");
?>