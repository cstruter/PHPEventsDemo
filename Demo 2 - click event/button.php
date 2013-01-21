<?
require_once("events.php");
require_once("controls.php");

class Button extends controls
{	
	public $text;
	public $onclick;
	
	public function Button($id)
	{
		$this->id = $id;
		$this->onclick = new Event();
		$this->ReconcileEvents();
	}
	
	public function Render()
	{
		echo '<input type="button" name="'.$this->id.'" id="'.$this->id.'" value="'.$this->text.'" onclick="trigger(this, event)" />';
	}	
}

?>