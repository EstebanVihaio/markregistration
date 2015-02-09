<div id='link'>
	<ul>
		<?php if (isset($_SESSION['userrole']))
		{
			echo "<li><a href='../users/logout'>logout</a></li>";
			switch ($_SESSION['userrole'])
			{
				case 'student':
					
				break;
				case 'teacher':
				break;
				case 'root':
				break;
				case 'administrator':
					echo "<li><a href='".BASE_URL."users/adduser'>voeg gebruiker toe</a></li>";
					echo "<li><a href='".BASE_URL."users/viewall'>alle gebruikers</a></li>";
				break;				
			}		
		}
		else
		{
			echo "<li><a href=''>TODO1</a></li>";
			echo "<li><a href=''>TODO2</a></li>";
			echo "<li><a href=''>TODO3</a></li>";
			echo "<li><a href=''>TODO4</a></li>";
			echo "<li><a href=''>TODO5</a></li>";
		}
		?>		
	</ul>
</div>
