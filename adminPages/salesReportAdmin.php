<?php 
 include("includes/site-header.php");
?>

<br>
<div class="container">

        
	
	<div id = "tableDiv"> 		
		
		<h2 class = "headDesign"> Sales Report </h2>
		<table class = "table table-bordered">
		<thead>
			<tr>
			  <th scope="row"></th>
			  <th scope="col">Date</th>
			  <th scope="col">Type</th>
			  <th scope="col">#</th>
			  <th scope="col">Customer</th>
			  <th scope="col">Due Date</th>
			  <th scope="col">Balance</th>
			  <th scope="col">Total</th>
			  <th scope="col">Status</th>
			  <th scope="col">Action</th>
			</tr>
		</thead>

		<tbody>
	<tr>
			  <td><input id="checkBox" type="checkbox"/></td>
			  <td>1st January</td>
			  <td>Extreme</td>
			  <td>420</td>
			  <td>Ahmed</td>
			  <td>Tomorrow</td>
			  <td>420</td>
			  <td>420</td>
			  <td>Done</td>
			  <td>Wasted</td>
	</tr>
	<tr>
			  <td><input id="checkBox" type="checkbox"/></td>
			  <td>1st January</td>
			  <td>Extreme</td>
			  <td>420</td>
			  <td>Ahmed</td>
			  <td>Tomorrow</td>
			  <td>420</td>
			  <td>420</td>
			  <td>Done</td>
			  <td>Wasted</td>
	</tr>
	<tr>
			  <td><input id="checkBox" type="checkbox"/></td>
			  <td>1st January</td>
			  <td>Extreme</td>
			  <td>420</td>
			  <td>Ahmed</td>
			  <td>Tomorrow</td>
			  <td>420</td>
			  <td>420</td>
			  <td>Done</td>
			  <td>Wasted</td>
	</tr>
			</tbody>
	</table>
					<div class = "form-row">
					<div class ="form-group col-md-4 col-md-offset-4">
						<input type="search" id="search" placeholder="Seach by Number"/>
					</div>
					<div class ="form-group col-md-2">
						<input type ="button" value = "Edit a line" id = "button" class="btn btn-primary btn-md"/>
					</div>
					<div class ="form-group col-md-2">
						<input type ="button" value = "Delete a line" id = "button" class="btn btn-primary btn-md"/>
					</div>
					
				</div>	
				</div>
	</div>	
	</div>
</br>

			
	</div>
	

</br>


<?php 
 include("includes/site-footer.php");
?>