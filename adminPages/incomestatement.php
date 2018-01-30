<?php include('../config/dbconfig.php'); ?>
<?php require('../config/db.php'); ?>
<?php include("includes/site-header.php"); ?>

<?php 
    $queryExpenseAccounts = "select accountname,
    sum(coalesce(case when actiontype = 'debit' then amount end,0)) -
    sum(coalesce(case when actiontype = 'credit' then amount end,0)) as balance
    from Transaction_Records as A join Account as B on A.accountid = B.accountid
    join Account_Details as C on B.type = C.type and C.category = 'expense'
    group by accountname
    having balance <> 0;";
    $queryRevenueAccounts = "select accountname,
    sum(coalesce(case when actiontype = 'debit' then amount end,0)) -
    sum(coalesce(case when actiontype = 'credit' then amount end,0)) as balance
    from Transaction_Records as A join Account as B on A.accountid = B.accountid
    join Account_Details as C on B.type = C.type and C.category = 'revenue'
    group by accountname
    having balance <> 0;";

    $resultExpenseAccount = mysqli_query($conn, $queryExpenseAccounts);
    $resultRevenueAccount = mysqli_query($conn, $queryRevenueAccounts);

    $expenseAccounts = mysqli_fetch_all($resultExpenseAccount, MYSQLI_ASSOC);
    $revenueAccounts = mysqli_fetch_all($resultRevenueAccount, MYSQLI_ASSOC);

    mysqli_free_result($resultExpenseAccount);
    mysqli_free_result($resultRevenueAccount);
    mysqli_close($conn);

?>


<div class="row">
<div class="container alert alert-dark">
<div class="row justify-content-center">
    <div class="d-flex flex-column ">
        <div><h3>Income Statement</h3></div>
        <div>As of <?php $mydate=getdate(date("U")); echo "$mydate[month] $mydate[mday], $mydate[year]"; ?></div>
    </div>
</div>
<div class="row">
<div class="col">
    <div class="row">
        <h3>Revenue</h3></div>
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-11">
                    <dl class="row">
                        <?php 
                        $totalrevenue = 0;
                        foreach($revenueAccounts as $revenueAccount): ?>
                        <dd class="col-sm-9"><?php echo $revenueAccount['accountname']; ?></dd>
                        <dd class="col-sm-2"><?php echo $revenueAccount['balance']; ?></dd>
                        <?php $totalrevenue += $revenueAccount['balance']; ?>
                        <?php endforeach; ?> 
                    </dl>
            </div>
        </div>
    
    
    <div class="row">
        <h3>Expense</h3>
    </div>
    <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-11">
                    <dl class="row">
                        <?php 
                        $totalexpense = 0;
                        foreach($expenseAccounts as $expenseAccount): ?>
                        <dd class="col-sm-9"><?php echo $expenseAccount['accountname']; ?></dd>
                        <dd class="col-sm-2"><?php echo $expenseAccount['balance']; ?></dd>
                        <?php $totalexpense += $expenseAccount['balance']; ?>
                        <?php endforeach; ?>
                    </dl>
            </div>
        </div>
    <div class="row border-bottom border-dark"></div>
    <div class="row">
        <div class="col">
        <dl class="row">
            <dt class="col-sm-9"><h3>Net Income</h3></dt>
            <dd class="col-sm-3"><?php echo $totalrevenue + $totalexpense ?></dd>
        </dl>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
<br><br><br><br><br><br><br><br>



<?php 
 include("includes/site-footer.php");
?>