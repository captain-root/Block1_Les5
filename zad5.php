<?php
$str = file_get_contents('addressbook.json');
$data = json_decode($str, true);
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		dl {
			display: table-row;
		}
		dt,dd {
			display: table-cell;
			padding: 10px 15px;
		}
	</style>
</head>
<body>
		<h2>-=< My AddressBook >=-</h2>
	<?php foreach($data as $first => $last) : ?>
	
	<dl>
		<dt><?=$first ?></dt>
		<dd><?=$last ?></dd>
	</dl>

	<?php endforeach ?>
</html>
