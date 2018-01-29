<?php 
 include("includes/site-header.php");
?>

<br>
<div class="container">
    <fieldset>
<div class="row mt-3">
<dl class="row">
    <dt class=col-sm-4>Date Start</dt>
    <dd class=col-sm-8><input type="text" id="datepicker"></dd>

    <dt class=col-sm-4>Date End</dt>
    <dd class=col-sm-8><input type="text" id="datepicker2"></dd>
</dl>
</div>
</fieldset>
</div>

<div class="row">
<div class="container alert alert-dark">
<div class="col">
    <div class="row justify-content-center">
        <div class="d-flex flex-column ">
            <div><h3>Income Statement</h3></div>
            <div>As of 2018-1-28</div>
        </div>
    </div>
    <div class="row">
        <h3>Revenue</h3></div>
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-11">
                    <dl class="row">
                        <dd class="col-sm-9">Sale</dd>
                        <dd class="col-sm-2">458.41</dd>
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
                        <dd class="col-sm-9">Supplies</dd>
                        <dd class="col-sm-2">458.41</dd>
                        <dd class="col-sm-9">Equipments</dd>
                        <dd class="col-sm-2">852.41</dd>
                    </dl>
            </div>
        </div>
    <div class="row border-bottom border-dark"></div>
    <div class="row">
        <div class="col">
        <dl class="row">
            <dt class="col-sm-9"><h3>Net Income</h3></dt>
            <dd class="col-sm-3">321.85</dd>
        </dl>
        </div>
    </div>
</div>
</div>
</div>
<br><br><br><br><br><br>


<?php 
include("includes/calendar.php");
?>

<?php 
 include("includes/site-footer.php");
?>