<script type='text/javascript'>
	$('document').ready(function(){
		$('button').click(function(){
			$('#dialogform').dialog('open');
		});
		
		$('#dialogform').dialog(
			{
				autoOpen:false,
				modal:true,
				width:400
			});
	});
</script>
<h1>Markregistration webapp<button>login</button></h1>
<div id='dialogform'>
	<table>
		<form action='<?php echo BASE_URL; ?>users/login' method='post'>
			<tr>
				<td>gebruikersnaam</td>
				<td><input type='text' name='username' size=30 /></td>
			</tr>
			<tr>
				<td>wachtwoord</td>
				<td><input type='password' name='password' size=30 /></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td><input type='submit' name='submit' /></td>
			</tr>
		</form>
	</table>
</div>
