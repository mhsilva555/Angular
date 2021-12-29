<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">

	<style type="text/css">
		* {
			box-sizing: border-box;
		}
		table {
			border: 1px solid #EEE;
			padding: 0;
		}
		th {
			border: 1px solid #EEE;
			text-align: left;
			padding: 8px;
			margin: 0;
		}
		td {
			border: 1px solid #eee;
			padding: 8px;
		}
	</style>
</head>
<body ng-app="meuApp" ng-controller="meuCtrl">


	<?php
	$dados = file_get_contents('dados.json');
	$json_decode = json_decode($dados);

	echo '<pre>';
	//print_r($json_decode);
	echo '</pre>';
	?>
	
	<input type="text" ng-model="filtrar">

	<table border="0" width="100%">
		
		<tr>
			<th>Nome</th>
			<th>Gênero</th>
			<th>Idade</th>
		</tr>

		<?php
		foreach ($json_decode as $key):
			echo '<tr ng-repeat="filter:filtrar">';
			echo '<td>'.$key->name.'</td>';
			echo '<td>'.$key->gender.'</td>';
			echo '<td>'.$key->age.'</td>';
			echo '</tr>';

		endforeach;
		?>

	</table>

<script src="../angular.min.js"></script>
<script>
	
	var app.angular.module('meuApp', []);
	app.controller('meuCtrl', function(){
		
	});

</script>
</body>
</html>