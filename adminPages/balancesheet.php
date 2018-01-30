<?php include('../config/dbconfig.php'); ?>
<?php require('../config/db.php'); ?>
<?php include("includes/site-header.php"); ?>


<?php 
    $queryAssetAccounts = "select accountname,
    sum(coalesce(case when actiontype = 'debit' then amount end,0)) -
    sum(coalesce(case when actiontype = 'credit' then amount end,0)) as balance
    from Transaction_Records as A join Account as B on A.accountid = B.accountid
    join Account_Details as C on B.type = C.type and C.category = 'asset'
    group by accountname
    having balance <> 0;";
    $queryLiabilityAccounts = "select accountname,
    sum(coalesce(case when actiontype = 'debit' then amount end,0)) -
    sum(coalesce(case when actiontype = 'credit' then amount end,0)) as Balance
    from Transaction_Records as A join Account as B on A.accountid = B.accountid
    join Account_Details as C on B.type = C.type and C.category = 'liability'
    group by accountname
    having balance <> 0;";
    $queryEquityAccounts = "select accountname,
    sum(coalesce(case when actiontype = 'debit' then amount end,0)) -
    sum(coalesce(case when actiontype = 'credit' then amount end,0)) as Balance
    from Transaction_Records as A join Account as B on A.accountid = B.accountid
    join Account_Details as C on B.type = C.type and C.category = 'equity'
    group by accountname
    having balance <> 0;";
    $resultAssetAccount = mysqli_query($conn, $queryAssetAccounts);
    $resultLiabilityAccount = mysqli_query($conn, $queryLiabilityAccounts);
    $resultEquityAccount = mysqli_query($conn, $queryEquityAccounts);

    $assetAccounts = mysqli_fetch_all($resultAssetAccount, MYSQLI_ASSOC);
    $liabilityAccounts = mysqli_fetch_all($resultLiablityAccount, MYSQLI_ASSOC);
    $equityAccounts = mysqli_fetch_all($resultEquityAccount, MYSQLI_ASSOC);

    mysqli_free_result($resultAssetAccount);
    mysqli_free_result($resultLiablityAccount);
    mysqli_free_result($resultEquityAccount);
    mysqli_close($conn);

?>


<div class="row">
<div class="container alert alert-dark">
<div class="row">
<div class="container alert alert-dark">
<div class="row justify-content-center">
    <div class="d-flex flex-column ">
        <div><h3>Balance Sheet</h3></div>
        <div>As of <?php $mydate=getdate(date("U")); echo "$mydate[month] $mydate[mday], $mydate[year]"; ?></div>
    </div>
</div>
<!--Details Acct Part Starts -->
    <div class="row">
        <!--Assets part starts-->
        <div class="col">
            <div class="row"><h2>Asset</h2></div>
            <div class="row">               
                <div class="col-sm-1"></div>
                <div class="col-sm-11">
                    <dl class="row">
                        <?php 
                            $totalasset = 0;
                            foreach($assetAccounts as $assetAccount): ?>
                            <dd class="col-sm-9"><?php echo $assetAccount['accountname']; ?></dd>
                            <dd class="col-sm-2"><?php echo $assetAccount['balance']; ?></dd>
                            <?php $totalasset += $assetAccount['balance']; ?>
                        <?php endforeach; ?>                        
                    </dl>                    
                </div>    
            </div>
        </div>

        <!--Assets part ends-->
        <div class="col-sm-auto border-left border-dark"></div>
        <!--L+E part starts-->
        <div class="col">            
            <div class="row"><h2>Liability</h2></div>
            <div class="row">               
                <div class="col-sm-1"></div>
                <div class="col-sm-11">
                    <dl class="row">
                        <?php 
                        $totalliability = 0;
                        foreach($liabilityAccounts as $liabilityAccount): ?>
                        <dd class="col-sm-9"><?php echo $liabilityAccount['accountname']; ?></dd>
                        <dd class="col-sm-2"><?php echo $liabilityAccount['balance']; ?></dd>
                        <?php $totalliability += $liabilityAccount['balance']; ?>
                        <?php endforeach; ?>
                    </dl>                    
                </div>    
            </div>
                       
            <dl class="row">
                    <dd class="col-sm-9">Total liability</dd>
                    <dd class="col-sm-3"><?php echo $totalliability ?></dd>
            </dl>
            

            <div class="row"><h2>Equity</h2></div>
            <div class="row">               
                <div class="col-sm-1"></div>
                <div class="col-sm-11">
                    <dl class="row">
                        <?php 
                        $totalequity = 0;
                        foreach($equityAccounts as $equityAccount): ?>
                        <dd class="col-sm-9"><?php echo $equityAccount['accountname']; ?></dd>
                        <dd class="col-sm-2"><?php echo $equityAccount['balance']; ?></dd>
                        <?php $totalequity += $equityAccount['balance']; ?>
                        <?php endforeach; ?>
                    </dl>                    
                </div>    
            </div>
                        
            <dl class="row">
                    <dd class="col-sm-9">Total equity</dd>
                    <dd class="col-sm-3"><?php echo $totalequity ?></dd>
            </dl>
            
            
        </div>
            
        </div>
        <!--L+E part ends-->
        <div class="row border-bottom border-dark"></div>
<!--Details Acct Part Ends -->


<!--Total Asset and L+E Part Start-->
    <div class="row">
        <div class="col">
        <div class="row">
            <dl class="row">
                <dd class="col-sm-9">Total asset</dd>
                <dd class="col-sm-3"><?php echo $totalasset ?></dd>
            </dl>
        </div>        
        </div>

        <div class="col-sm-auto border-left border-dark"></div>

        <div class="col">
        
        <dl class="row">
            <dd class="col-sm-9">Total liability &amp; equity</dd>
            <dd class="col-sm-3"><?php echo $totalliability + $totalequity  ?></dd>
        </dl>
        
        </div>
    </div>
    </div>
    
</div>
</div>




<?php 
 include("includes/site-footer.php");
?>