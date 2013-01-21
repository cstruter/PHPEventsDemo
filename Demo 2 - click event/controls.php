<?

abstract class controls
{
	public $id;
	
	protected function ReconcileEvents()
	{		
		if ($_POST['_sender'])
		{			
			$_sender = explode(',', $_POST['_sender']);
			if ($_sender[0] == $this->id)
			{				
				switch($_sender[1])
				{
					case 'click': $GLOBALS['eventTrigger'] = &$this->onclick;
									$GLOBALS['eventSender'] = &$this;
									break;
				}
			}
		}
	}
}

?>