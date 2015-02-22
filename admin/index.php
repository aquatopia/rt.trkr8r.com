<?php include ('../includes/header.php'); 
include('validate.php');?>
<div class="row interior-header">

    <div class="visible-phone">
        <div class="four cols sml-logo">
            <img src="../assets/imgs/rt-logo.png">
        </div>

        <div class="eight cols">
            <h1>Admin</h1>
        </div>
    </div>

    <div class="hidden-phone">
        <div class="eight cols">
            <h1 class="left">Admin</h1>
        </div>
        
        <div class="four cols">
            <img src="../assets/imgs/rt-logo_small.png" class="right">
        </div>
    </div>
</div>

<div class="clear"></div>
<div class="row center">
    <div class="four cols">
        <a href="#">
            <button class="full-width">Export Today's .CSV</button>
        </a>
    </div>
    <div class="four cols">
        <a href="custom-csv.php">
            <button class="full-width">Export Custom .CSV</button>
        </a>
    </div>
    <div class="four cols">
        <a href="log-hours.php">
            <button class="full-width">Log Volunteer Hours</button>
        </a>
    </div>
</div>

<div class="row center">
    <div class="six cols">
        <a href="users.php">
            <button class="full-width">User Administration</button>
        </a>
    </div>
    <div class="six cols">
        <a href="print-waivers.php">
            <button class="full-width">Print Signed Waivers</button>
        </a>
    </div>
</div>


<?php include ('../includes/footer.php'); ?>
