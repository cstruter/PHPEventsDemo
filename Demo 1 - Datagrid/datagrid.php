<?

require_once("events.php");

class DataGridRow
{
	public $cells;
	function DataGridRow()
	{
		$array = func_get_args();
		$this->cells = $array[0];
	}
}

class DataGrid
{
	public $rows;
	public $ondatabind;
	
	public function DataGrid()
	{
		$this->ondatabind = new Event();
	}
	
	public function AddRow()
	{
		$this->rows[] = new DataGridRow(func_get_args());
	}
	
	public function Render()
	{
		$html='<table border="1">';		
		foreach($this->rows as $row)
		{
			$this->ondatabind->Raise($this, $row);
			$html.='<tr>
						<td>'.implode('</td><td>', $row->cells).'</td>
					</tr>';
		}
		echo $html.'</table>';
	}	
}

?>