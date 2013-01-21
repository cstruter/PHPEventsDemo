<?

include "datagrid.php";

function databindEvent($sender, $e)
{
	if ($e->cells[1] == "PG13")
	{
		$e->cells[1] = '<span style="background-color:#550000;color:#FFFFFF">'.$e->cells[1].'</span>';
	}
}

$Grid = new DataGrid();
$Grid->AddRow("Ice Age","PG");
$Grid->AddRow("Star Wars","PG13");
$Grid->AddRow("Forrest Gump","PG13");
$Grid->ondatabind->Subscribe("databindEvent");

?>
<html>	
	<head>
		<title>Datagrid demo</title>		
	</head>
	<body>
		<form method="POST">			
			<? 				
				$Grid->Render();
			?>			
		</form>
	</body>	
</html>