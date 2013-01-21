<?

include "button.php";

$btnDemo = new Button("btnDemo");
$btnDemo->text = "Click Here";
$btnDemo->onclick->Subscribe("btnDemo_Click");

function btnDemo_Click($sender)
{
	$sender->text = "Thank you for clicking";
}

if ($GLOBALS['eventTrigger'])
{
	$GLOBALS['eventTrigger']->Raise($GLOBALS['eventSender']);
}

?>
<html>	
	<head>
		<title>Click Event demo</title>
		<script type="text/javascript">
		
			function trigger(sender, e)
			{
				document.getElementById('_sender').value = sender.id + "," + e.type;
				document.forms[0].submit();
			}
		
		</script>		
	</head>
	<body>
		<form method="POST">
			<input type="hidden" id="_sender" name="_sender" />			
			<? 				
				$btnDemo->Render();
			?>			
		</form>
	</body>	
</html>