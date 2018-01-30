<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/gh/atatanasov/gijgo@1.7.3/dist/combined/js/gijgo.min.js" type="text/javascript"></script>
    <link rel="stylesheet" type = "text/css" href="../css/adminCSS.css">
    <link href="https://cdn.jsdelivr.net/gh/atatanasov/gijgo@1.7.3/dist/combined/css/gijgo.min.css" rel="stylesheet" type="text/css" />
      <script src="https://use.fontawesome.com/dd40cb5b47.js"></script>
    <script src = "../js/dateTimePicker.js"> </script>
    <script src = "../js/search.js"> </script>
     <script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
    <script src="https://www.amcharts.com/lib/3/serial.js"></script>
    <script type="text/javascript" src="../js/chartHome.js"></script>

    <script src="https://www.amcharts.com/lib/3/themes/light.js"></script>
    <script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <title>Document</title>
</head>
<body>
    <div id="Home">

    <div id="logo">
     </div>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="navbar-header">
         <h1 class = "headerDesign">Skynet Pharmaceutical</h1>
      </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <a class="nav-link" href="homeAdmin.php"  role="button">
             <i class="fa fa-home" aria-hidden="true"></i> Home <span class="caret"></span>
            </a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-arrow-circle-down" aria-hidden="true"></i> Revenue <span class="caret"></span>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="cashCollectionAdmin.php">Cash Collection</a>
            <a class="dropdown-item" href="saleOrderAdmin.php">Sale Order</a>
            <a class="dropdown-item" href="invoiceAdmin.php">Invoice</a>
            <a class="dropdown-item" href="salesReportAdmin.php">Sales Report</a>
            <a class="dropdown-item" href="customerDetailsAdmin.php">Customer Details</a>    
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-arrow-circle-up" aria-hidden="true"></i> Expendeture <span class="caret"></span>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="purchasingOrderAdmin.php">Purchasing Order</a>
            <a class="dropdown-item" href="inventoryFileAdmin.php">Inventory</a>
            <a class="dropdown-item" href="supplierInfoAdmin.php">Supplier Information</a>
            <a class="dropdown-item" href="paymentAdmin.php">Payment</a>    
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-list-alt" aria-hidden="true"></i> Reports <span class="caret"></span>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="balancesheet.php">Balance Sheet</a>
            <a class="dropdown-item" href="incomestatement.php">Income Statement</a>
            <a class="dropdown-item" href="arageingreport.php">A/R Ageing Summary</a>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="chartOfAccountsAdmin.php"  role="button">
            <i class="fa fa-address-book" aria-hidden="true"></i> Charts of Accounts <span class="caret"></span>
            </a>
        </li>
        <ul style = "float: right">
        <li class="nav-item">
            <a class="nav-link" href="../home.php" role="button"> Exit <span class="caret"></span> </a>
        </li>
        </ul>
        <!-- 
        <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </li>-->
        </ul>
        <!-- 
        <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>-->
    </div>
    </nav>
    
    <div class="container-fluid">