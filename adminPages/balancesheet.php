<?php 
 include("includes/site-header.php");
?>

<br>


<div class="row">
<div class="container alert alert-dark">

<!--Details Acct Part Starts -->
    <div class="row">
        <!--Assets part starts-->
        <div class="col">
            <div class="row"><h2>Assets</h2></div>
            
            
            <div class="row">
                <h5>Current Assests</h5>
            <div class="row">            
                <div class="col-sm-1"></div>
                <div class="col sm-11">
                    <dl class="row">
                        <dd class="col-sm-9">Cash</dd>
                        <dd class="col-sm-2">500.00$</dd>
                        <dd class="col-sm-9">Investment Account</dd>
                        <dd class="col-sm-2">453.00$</dd>
                        <dd class="col-sm-9">Saving Account</dd>
                        <dd class="col-sm-2">152.00$</dd>
                        <dt class="col-sm-9" style="text-align:right">Total current assets</dt>
                        <dt class="col-sm-2">2543.44$</dd>
                    </dl>                    
                </div>    
            </div>
            </div>

            
            <div class="row">
                <h5>Other Assests</h5>
            <div class="row">            
                <div class="col-sm-1"></div>
                <div class="col sm-11">
                    <dl class="row">
                        <dd class="col-sm-9">Credit Card Account</dd>
                        <dd class="col-sm-2">564.00$</dd>
                        <dd class="col-sm-9">Personal Loan Account</dd>
                        <dd class="col-sm-2">785.00$</dd>
                        <dd class="col-sm-9">Auto Loan Account</dd>
                        <dd class="col-sm-2">254.00$</dd>
                        <dt class="col-sm-9" style="text-align:right">Total other assets</dt>
                        <dt class="col-sm-2">3575.87$</dd>
                    </dl>                    
                </div>    
            </div>
            </div>

        </div>
        <!--Assets part ends-->
        <div class="col-sm-auto border-left border-dark"></div>
        <!--L+E part starts-->
        <div class="col ">            
            <div class="row"><h2>Liabilities</h2></div>
            
            <div class="row">
                <h5>Current Liabilities</h5>
            <div class="row">            
                <div class="col-sm-1"></div>
                <div class="col sm-11">
                    <dl class="row">
                        <dd class="col-sm-9">Account Payable</dd>
                        <dd class="col-sm-2">500.00$</dd>
                        <dd class="col-sm-9">Wages Payagle</dd>
                        <dd class="col-sm-2">453.00$</dd>
                        <dd class="col-sm-9">Warranty Liability</dd>
                        <dd class="col-sm-2">152.00$</dd>
                        <dd class="col-sm-9">Unearned revenue</dd>
                        <dd class="col-sm-2">458.00$</dd>
                        <dt class="col-sm-9" style="text-align:right">Total current liabilities</dt>
                        <dt class="col-sm-2">2214.35$</dt>
                    </dl>                    
                </div>    
            </div>
            </div>
            
            <div class="row">
                <h5>Long-term Liabilities</h5>
            <div class="row">            
                <div class="col-sm-1"></div>
                <div class="col sm-11">
                    <dl class="row">
                        <dd class="col-sm-9">Notes Payable</dd>
                        <dd class="col-sm-2">500.00$</dd>
                        <dd class="col-sm-9">Bonds Payagle</dd>
                        <dd class="col-sm-2">453.00$</dd>
                        <dt class="col-sm-9" style="text-align:right">Total long-term liabilities</dt>
                        <dt class="col-sm-2">953.00$</dt>
                    </dl>                    
                </div>    
            </div>
            </div>
            
            <div class="row">            
                <dl class="row">
                        <dd class="col-sm-9">Total liabilities</dd>
                        <dd class="col-sm-3">4286.52$</dd>
                </dl>
                
            </div>
            <div class="row"><h2>Equity</h2></div>            
            <div class="row">
                <dl class="row">
                        <dd class="col-sm-9">Capital</dd>
                        <dd class="col-sm-3">4286.52$</dd>
                </dl>
            </div>
        </div>
        <!--L+E part ends-->
    </div>
    <div class="row border-bottom border-dark"></div>
<!--Details Acct Part Ends -->


<!--Total Asset and L+E Part Start-->
    <div class="row">
        <div class="col">
        <div class="row">
            <dl class="row">
                <dd class="col-sm-9">Total assets</dd>
                <dd class="col-sm-3">4215.12$</dd>
            </dl>
        </div>        
        </div>

        <div class="col-sm-auto border-left border-dark"></div>

        <div class="col">
        <div class="row">
            <dl class="row">
                <dd class="col-sm-9">Total liabilities &amp; equity</dd>
                <dd class="col-sm-3">3985.93$</dd>
            </dl>
        </div>
        </div>
    </div>
</div>
</div>
<br><br><br><br>


<?php 
include("includes/calendar.php");
?>

<?php 
 include("includes/site-footer.php");
?>