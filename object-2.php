<?php

$title = 'PHIC Regional VII Office Supplies System';

$ris_number = 'Requisition and Issuance Slip Number: 1000-1000';

$request_section = 'Fund Management Section';

$request_user = 'John Doe';

$request_details = 'Item Purchase';

$request_date = 'January 24, 2017';

$request_purpose = 'For use in the office.';

?>
<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $title; ?></title>
	</head>
	<body>

		<?php echo $_REQUEST['variable'] ?>

		<h1><?php echo $ris_number; ?></h1>
		<p><?php echo $request_section; ?></p>
		<p><?php echo $request_user; ?></p>
		<p><?php echo $request_details; ?></p>
		<p><?php echo $request_date; ?></p>
		<p><?php echo $request_purpose; ?></p>
	</body>
</html>
