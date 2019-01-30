<?php
	ini_set('memory_limit', '2924M'); // 2.9G

	$list = [];
	$i = 0;

	for($a = 0; $a < 256; $a++)
	{
		for($b = 0; $b < 256; $b++)
		{
			for($c = 0; $c < 256; $c++)
			{
				$color = $a . ',' . $b . ',' . $c;
				$list[$i] = 'rgb(' . $color . ')';
				$i++;
			}
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>All RGB possible colors</title>

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

		<style>
			.col-md-2
			{
				height: 65px;
				font-weight: bolder;
				padding-top: 10px;
				margin: 1.5px;
			}
		</style>
	</head>
	<body class="text-center bg-light">
		<h1 class="text-primary text-center">Color grid</h1>
		<h3 class="text-center text-danger"> 
			Total : <span class="btn btn-dark badge"><?= $i; ?> </span> 
		</h3>
		<a href="https://skpassegna.me" target="_blank" class="btn btn-outline-dark text-center">#skpassegna</a>

		<div class="container-fluid mt-2">
			<div class="row justify-content-between align-content-around p-0 m-0">
				
				<?php
					if(is_array($list) && count($list) > 2)
					{

						for($s = 0; $s < count($list); $s+=2555):
				?>

				<div class="col-md-2 text-center border rounded" style="color:<?= $list[$s]; ?>;  border-color: <?= $list[$s]; ?> !important;">
					<?= $list[$s]; ?>
				</div>

				<?php
					endfor;
					}
					else
					{
						echo 'Error !';
					}
				?>
				
			</div>
		</div>
	</body>
</html>
