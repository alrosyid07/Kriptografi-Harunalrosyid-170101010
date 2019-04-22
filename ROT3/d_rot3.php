<div class="row bg-form">
	<div class="col-md-6">
		<form action="" method="post" class="form">
			<h2>DEKRIPSI ROT3</h2>
			<p>Chipertext<br /><input class="form-control" rows="3" cols="50" name="chiper" onKeyPress="return goodchars(event,'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',this)" required=""/></p>
			<p><button type="submit" class="btn btn-success" name="Dekripsi">Dekripsi</button></p>
		</form>
	</div>
	<div class="col-md-6 ">
		<div class="">
			<h2>HASIL DEKRIPSI ROT3</h2>
			<?php 
			if ($_SERVER['REQUEST_METHOD'] == 'POST')
			{
				if(!empty($_POST[chiper]))
				{
					$kata = $_POST[chiper];
					$data = str_split($kata);

					$i=0;
					foreach($data as $aaa){
						$ee = d_rot3($aaa);
						$r[$i]=$ee;
						$i++;
					}
					
					
					$dekrip = implode($r);
				
					echo"
					<h3>Chipertext</h3>
					<p>$_POST[chiper]</p>
					
					<h3>Plaintext</h3>
					<p>$dekrip</p>";
					
					
				}
				else
				{
					echo"<span style=\"color:#f00;\">Masukkan Chipertext...</span>";
				}
			}
			?>
		</div>
	</div>
</div>
