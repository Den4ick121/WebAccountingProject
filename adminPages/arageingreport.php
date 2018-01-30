<?php include('../config/dbconfig.php'); ?>
<?php require('../config/db.php'); ?>
<?php include('includes/site-header.php'); ?>

<?php
    $query = "select Customer.CustName,
    SUM(IF(datediff(current_date(), Sale.DueDate) <= 0 , SaleProduct.Qty * SaleProduct.SalePrice, 0)) as Current,
    SUM(IF(datediff(current_date(), Sale.DueDate) BETWEEN 1 AND 30, SaleProduct.Qty * SaleProduct.SalePrice, 0)) as '1-30',
    SUM(IF(datediff(current_date(), Sale.DueDate) BETWEEN 31 AND 60, SaleProduct.Qty * SaleProduct.SalePrice, 0)) as '31-60',
    SUM(IF(datediff(current_date(), Sale.DueDate) BETWEEN 61 AND 90, SaleProduct.Qty * SaleProduct.SalePrice, 0)) as '61-90',
    SUM(IF(datediff(current_date(), Sale.DueDate) > 90, SaleProduct.Qty * SaleProduct.SalePrice, 0)) as '91 and over'
    from Sale, SaleProduct, Customer where Sale.SaleNo = SaleProduct.SaleNo and Sale.CustNo = Customer.CustNo and TrackStatus = 0
    group by Customer.CustName;";

    $result = mysqli_query($conn, $query);
    $ageingSummaries = mysqli_fetch_all($result, MYSQLI_ASSOC); 

    mysqli_free_result($result);
    mysqli_close($conn);
?>

<div class="container">
    <table class="table">
        <thead>
            <th>Customer</th>
            <th>Current</th>
            <th>1-30</th>
            <th>31-60</th>
            <th>61-90</th>
            <th>91 and over</th>
            <th>Total</th>
        </thead>
        <tbody>
            <?php 
                $totalCustomer = 0;$totalCurrent = 0;$total130 = 0;$total3160 = 0;$total6190 = 0;$total91=0;                
                foreach($ageingSummaries as $ageingSummary): ?>
                <tr>
                    <?php $totalCustomer= $ageingSummary['Current']+$ageingSummary['1-30']+$ageingSummary['31-60']+$ageingSummary['61-90']+$ageingSummary['91 and over'] ?>
                    <?php 
                        $totalCurrent += $ageingSummary['Current']; 
                        $total130 += $ageingSummary['1-30']; 
                        $total3160 += $ageingSummary['31-60']; 
                        $total6190 += $ageingSummary['61-90']; 
                        $total91 += $ageingSummary['91 and over']; 
                    ?>
                    <td><?php echo $ageingSummary['CustName']; ?></td>
                    <td><?php echo $ageingSummary['Current']; ?></td>
                    <td><?php echo $ageingSummary['1-30']; ?></td>
                    <td><?php echo $ageingSummary['31-60']; ?></td>
                    <td><?php echo $ageingSummary['61-90']; ?></td>
                    <td><?php echo $ageingSummary['91 and over']; ?></td>
                    <td><?php echo $totalCustomer; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
        <tfoot>
            <tr>
                <td>Total</td>
                <td><?php echo $totalCurrent; ?></td>
                <td><?php echo $total130; ?></td>
                <td><?php echo $total3160; ?></td>
                <td><?php echo $total6190; ?></td>
                <td><?php echo $total91; ?></td>
                <td><?php echo $totalCurrent+$total130+$total3160+ $total6190+ $total91; ?></td>
            </tr>
        </tfoot>
    </table>
</div>


<?php 
 include("includes/site-footer.php");
?>