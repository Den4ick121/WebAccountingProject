
<?php 
 include("includes/site-header.php");
?>
	   
   
   <br>
	<div class="container-fluid">
	<div id = "sideMenu">
    <div class="row">
        <div class="col-md-3 collapse show" id="sideBar">

                <a style="background:lightgrey" href="#menuNonCurrentAsset" class="list-group-item collapsed" data-toggle="collapse" data-parent="#sidebar" aria-expanded="false" >
				<i class="fa fa-book"></i> <span class="hidden-sm-down">Non Current Asset</span></a>
                
				<div class="collapse" id="menuNonCurrentAsset">
                    <a href="#" class="list-group-item" data-parent="#menu" 
					data-toggle="collapse"  role="button" aria-expanded="false" aria-controls="collapseExample">Machinery </a>
                </div>
				
				<a style="background:lightgrey" href="#menuCurrentAsset" class="list-group-item collapsed" data-toggle="collapse" data-parent="#sidebar" aria-expanded="false" >
				<i class="fa fa-book"></i> <span class="hidden-sm-down">Current Assets</span></a>	
                <div class="collapse" id="menuCurrentAsset">
                    <a href="#inventoryFile" class="list-group-item" data-parent="#menuCurrentAsset" 
					data-toggle="collapse"  role="button" aria-expanded="false" aria-controls="collapseExample">Inventory </a>
					 <a href="#" class="list-group-item" data-parent="#menuCurrentAsset" 
					data-toggle="collapse"  role="button" aria-expanded="false" aria-controls="collapseExample">Accounts Receivable </a>
					 <a href="#" class="list-group-item" data-parent="#menuCurrentAsset" 
					data-toggle="collapse"  role="button" aria-expanded="false" aria-controls="collapseExample">Bank Account </a>
					 <a href="#" class="list-group-item" data-parent="#menuCurrentAsset" 
					data-toggle="collapse"  role="button" aria-expanded="false" aria-controls="collapseExample">Petty Cash Account </a>
                </div>
				
				<a style="background:lightgrey" href="#menu" class="list-group-item collapsed" data-toggle="collapse" data-parent="#sidebar" aria-expanded="false" >
				<i class="fa fa-book"></i> <span class="hidden-sm-down">Equity </span></a>
				
				<a style="background:lightgrey" href="#menu" class="list-group-item collapsed" data-toggle="collapse" data-parent="#sidebar" aria-expanded="false" >
				<i class="fa fa-book"></i> <span class="hidden-sm-down">Long Term Liabilities </span></a>
				
               	<a style="background:lightgrey" href="#menu" class="list-group-item collapsed" data-toggle="collapse" data-parent="#sidebar" aria-expanded="false" >
				<i class="fa fa-book"></i> <span class="hidden-sm-down">Current Liabilities</span></a>
				
				<a style="background:lightgrey" href="#menuRevenue" class="list-group-item collapsed" data-toggle="collapse" data-parent="#sidebar" aria-expanded="false" >
				<i class="fa fa-book"></i> <span class="hidden-sm-down">Revenue</span></a>
				<div class="collapse" id="menuRevenue">
                    <a href="#sales" class="list-group-item" data-parent="#menuRevenue" 
					data-toggle="collapse"  role="button" aria-expanded="false" aria-controls="collapseExample">Sales Revenue </a>
					<a href="#" class="list-group-item" data-parent="#menuRevenue" 
					data-toggle="collapse"  role="button" aria-expanded="false" aria-controls="collapseExample">Other Income</a>
                </div>
				
				<a style="background:lightgrey" href="#menuExpenses" class="list-group-item collapsed" data-toggle="collapse" data-parent="#sidebar" aria-expanded="false" >
				<i class="fa fa-book"></i> <span class="hidden-sm-down">Expenses</span></a>
				<div class="collapse" id="menuExpenses">
                    <a href="#" class="list-group-item" data-parent="#menuExpenses" 
					data-toggle="collapse"  role="button" aria-expanded="false" aria-controls="collapseExample">Rental </a>
					<a href="#" class="list-group-item" data-parent="#menuExpenses" 
					data-toggle="collapse"  role="button" aria-expanded="false" aria-controls="collapseExample">Cost of Goods</a>
					<a href="#" class="list-group-item" data-parent="#menuExpenses" 
					data-toggle="collapse"  role="button" aria-expanded="false" aria-controls="collapseExample">Interest on Loan</a>
                </div>
				
				<a style="background:lightgrey" href="#menuEquity" class="list-group-item collapsed" data-toggle="collapse" data-parent="#sidebar" aria-expanded="false" >
				<i class="fa fa-book"></i> <span class="hidden-sm-down">Net Profit</span></a>

         </div>
		 
        <div class="col-md-9">
				<div class="page-header">
					<h1 class = "headDesign">Chart of accounts</h1>
				</div>
				<hr>
			<div  class="collapse" id = "invoice">
				 <div class="card card-body">
					<div id = "tableDiv"> 		
				
				<h2 class = "headDesign">Invoice</h2>
				<table class = "table table-bordered">
				<thead>
				<tr>
				<th scope="column">Date</th>
				<th scope="column">Sale Order No.</th>
				<th scope="column">Invoice No.</th>
				<th scope="column">Customer Name</th>
				<th scope="column">Description</th>
				<th scope="column">Unit Price</th>
				<th scope="column">Quantity</th>
				<th scope="column">Total</th>
				</tr>
				</thead>
				<tbody>
			<tr>
				<td>3242</td>
				<td>Bitcoins</td>
				<td>It's Bitcoins</td>
				<td>Bitcoins</td>
				<td>420</td>
				<td>15k$</td>
				<td>420</td>
				<td>15k$</td>
			</tr>
			<tr>
				<td>3242</td>
				<td>Bitcoins</td>
				<td>It's Bitcoins</td>
				<td>Bitcoins</td>
				<td>420</td>
				<td>15k$</td>
				<td>420</td>
				<td>15k$</td>
			</tr>
			<tr>
				<td>3242</td>
				<td>Bitcoins</td>
				<td>It's Bitcoins</td>
				<td>Bitcoins</td>
				<td>420</td>
				<td>15k$</td>
				<td>420</td>
				<td>15k$</td>
			</tr>
				</tbody>
				</table>		
					</div>
				</div>
			</div>
			
			<div  class="collapse" id = "sales">
				 <div class="card card-body">
					<div id = "tableDiv">
					<h2 class = "headDesign">Sales</h2>
					<table class = "table table-bordered">
					<thead>
				<tr>
				<th scope="column">Invoice No.</th>
				<th scope="column">Date</th>
				<th scope="column">Order No.</th>
				<th scope="column">Customer Name</th>
				<th scope="column">Quantity</th>
				<th scope="column">Description</th>
				<th scope="column">Total</th>
				</tr>
				</thead>
					<tbody>
				<tr>
					<td>1679898</td>
					<td>2018-1-2</td>
					<td>6868968865</td>
					<td>Yuri Plotnikov</td>
					<td>3</td>
					<td>Consectetuer adipiscing elit.</td>
					<td>1500$</td>
				</tr>
				<tr>
					<td>1679898</td>
					<td>2018-1-2</td>
					<td>6865568865</td>
					<td>Vladimir Stojkovic</td>
					<td>1</td>
					<td>Consectetuer adipiscing elit.</td>
					<td>1500$</td>
				</tr>
				<tr>
					<td>1679898</td>
					<td>2018-1-2</td>
					<td>7778968865</td>
					<td>Radovan Damjanovic</td>
					<td>2</td>
					<td>Consectetuer adipiscing elit.</td>
					<td>1500$</td>
				</tr>
						</tbody>
					</table>
					</div>
				</div>
			</div>
			
			<div  class="collapse" id = "inventoryFile">
				 <div class="card card-body">
					<div id = "tableDiv"> 		
						<h2 class = "headDesign">Inventory File</h2>
			<table class = "table table-bordered">

				<thead>
				<tr>
				<th scope="column">Item No.</th>
				<th scope="column">Name of Product</th>
				<th scope="column">Description</th>
				<th scope="column">Quantity</th>
				<th scope="column">Cost per Unit</th>
				<th scope="column">Total Cost</th>
				<th scope="column">Supplier</th>
				</tr>
				</thead>
				<tbody>
				<tr>
					<td>1235</td>
					<td>Pizza Fungi</td>
					<td>Mushroom Pizza</td>
					<td>420</td>			
					<td>420</td>
					<td>420</td>			
					<td>Italian Chef</td>
				</tr>
				<tr>
					<td>1236</td>
					<td>Pizza Fungi</td>
					<td>Mushroom Pizza</td>
					<td>420</td>			
					<td>420</td>
					<td>420</td>			
					<td>Italian Chef</td>
				</tr>
				<tr>
					<td>1237</td>
					<td>Pizza Fungi</td>
					<td>Mushroom Pizza</td>
					<td>420</td>			
					<td>420</td>
					<td>420</td>			
					<td>Italian Chef</td>
				</tr>
				<tr>
					<td>1238</td>
					<td>Pizza Fungi</td>
					<td>Mushroom Pizza</td>
					<td>420</td>			
					<td>420</td>
					<td>420</td>			
					<td>Italian Chef</td>
				</tr>
				</tbody>
			</table>
					
			</div>
				</div>
					</div>		
			<div  class="collapse" id = "cash">
				 <div class="card card-body">
					<div id = "tableDiv"> 		
						<h2 class = "headDesign">Cash</h2>
							<table class = "table table-bordered">
					<thead>
						<tr>
						<th scope="column">Invoice No.</th>
						<th scope="column">Date</th>
						<th scope="column">Order No.</th>
						<th scope="column">Customer Name</th>
						<th scope="column">Quantity</th>
						<th scope="column">Description</th>
						<th scope="column">Total</th>
						</tr>
					</thead>
					<tbody>
					<tr>
						<td>1679898</td>
						<td>2018-1-2</td>
						<td>6868968865</td>
						<td>Yuri Plotnikov</td>
						<td>3</td>
						<td>Сonsectetuer adipiscing elit.</td>
						<td>1500$</td>
					</tr>
					<tr>
						<td>1679898</td>
						<td>2018-1-2</td>
						<td>6865568865</td>
						<td>Vladimir Stojkovic</td>
						<td>1</td>
						<td>Сonsectetuer adipiscing elit.</td>
						<td>1500$</td>
					</tr>
					<tr>
						<td>1679898</td>
						<td>2018-1-2</td>
						<td>7778968865</td>
						<td>Radovan Damjanovic</td>
						<td>2</td>
						<td>Сonsectetuer adipiscing elit.</td>
						<td>1500$</td>
					</tr>
					</tbody>
				</table>					
					</div>
				</div>
			</div>
        </div>
	</div>

    </div>
</div>
</div>


<br><br><br><br>

	
<?php 
 include("includes/site-footer.php");
?>