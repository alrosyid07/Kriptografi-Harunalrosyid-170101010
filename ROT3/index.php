<?php
	include_once "header.php";
?>
		<div style="margin-top:100px;"></div>
		<!--BEGIN CONTENT-->
			<div class="container">

				<?php 
				if($menu == '')
				{
					include"rot3.php";	
				}

				else
				{
					if(file_exists("$menu.php"))
					{
						include"$menu.php";
					}
					
					else
					{
						echo"Modul tidak ditemukan...";
					}
				}
				
				?>
				
			</div>
		

		<div style="margin-top: 100px;"></div>

<?php
	include_once "footer.php";
?>
