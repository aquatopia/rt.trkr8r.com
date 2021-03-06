<?php
include ('../includes/header.php');
include('validate.php');

require_once('../db/db.php');

$readable_service_date = ($_REQUEST['service_date']) ? $_REQUEST['service_date'] : date("m/d/Y");
$service_date = date("Y-m-d", strtotime($readable_service_date));

if($_REQUEST['record']) {
	foreach($_REQUEST as $name => $value) {
		if(substr_count($name, "duration")) {
			$name_array = explode("_", $name);
			$volunteer_id = $name_array[1];
			record_volunteer_time($volunteer_id, $value, $service_date);
		}
	}
}

$volunteers = get_volunteers_of_day($service_date);

$html = <<<EOS
<div class="row interior-header">

    <div class="visible-phone">
        <div class="four cols sml-logo">
            <img src="../assets/imgs/rt-logo.png">
        </div>

        <div class="eight cols">
            <h1>Admin <br><span>Log Volunteer Hours</span></h1>
        </div>
    </div>

    <div class="hidden-phone">
        <div class="eight cols">
            <h1 class="left">Admin <span>Log Volunteer Hours</span></h1>
        </div>

        <div class="four cols">
            <img src="../assets/imgs/rt-logo_small.png" class="right">
        </div>
    </div>
</div>

  <script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  </script>

 
 
    
<div class="clear"></div>
<h4><a href="index.php">&laquo; Back to Admin Page</a></h4>

<h2>Choose Service Date</h2>
<form method="POST">
	<input type="text" id="datepicker" name="service_date" value="{$readable_service_date}"/>
	<input type="submit" value="OK" />
</form>
EOS;
print($html);

foreach($volunteers as $key => $volunteer) {
	if($key == 0) {
		$html = <<<EOS
<form style="margin-top:30px" method="POST">
	<input type="hidden" name="record" value="1" />
	<input type="hidden" name="service_date" value="{$service_date}" />
    <h3 class="left"><b>Volunteer Name</b></h3>
    <h3 class="right"><b>Hours</b></h3>
    <div class="clear"></div>
    <br />
EOS;
		print($html);
	}
	
	$html = <<<EOS
    <div class="log_vol-name">
        <span class="left">{$volunteer['firstname']} {$volunteer['lastname']}</span>
        <input type="text" class="right" name="duration_{$volunteer['volunteer_id']}" size="3" value="{$volunteer['duration']}">
    </div>
    <hr class="clear">
EOS;
	print($html);

	if($key + 1 == sizeof($volunteers)) {
		$html = <<<EOS
    <input type="submit" value="Log Hours" class="right">
    <div class="clear"></div>
</form>
EOS;
		print($html);
	}
}

include ('../includes/footer.php');

?>
