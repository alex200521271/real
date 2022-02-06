<!DOCTYPE html>
<html>
<head>
	<?php 
	$title = "Our team";
	require_once "blocks/head.php";
	/*$players = getPlayers ();*/
	 ?>
</head>
<body>
	<?php require_once "blocks/header.php" ?>
	<div id = "wrapper">
		<div id = "leftCol">

			<div id = "Team">
				<table>	
							<tr style="background-color: orange; ">
								<td>
								Name
								</td>
								<td>
								Surname
								</td>
								<td>
								T-shirt number
								</td>
								<td>
								Role
								</td>																
							</tr>
							<tr>
								<td>
								*Text*
								</td>
								<td>
								*Text*
								</td>
								<td>
								*Text*
								</td>
								<td>
								*Text*
								</td>
							</tr>
						</table>
			</div>	
		</div>
		<?php require_once "blocks/rightCol.php"?>
	</div>
	<?php require_once "blocks/footer.php" ?>
</body>	
</html>