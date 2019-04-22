<div class="row bg-form">
	<div class="col-md-6">
		<form action="" method="post" class="form">
			<h2>ENKRIPSI ROT3</h2>
			<p>Plaintext<br /><input class="form-control" rows="3" cols="50" name="plain" onKeyPress="return goodchars(event,'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',this)" required="" /></p>
			<p><button type="submit" class="btn btn-success" name="Enkripsi">Enkripsi</button></p>
		</form>
	</div>
	<div class="col-md-6 ">
		<div class="">
			<h2>HASIL ENKRIPSI ROT3</h2>
			<?php 
				if ($_SERVER['REQUEST_METHOD'] == 'POST')
				{
					if(!empty($_POST[plain]))
					{
						$kata = $_POST[plain];
						$data = str_split($kata);

						$i=0;
						foreach($data as $aaa){
							$ee = rot3($aaa);
							$r[$i]=$ee;
							$i++;
						}
						$rot3 = implode($r);
						echo"<h3>Plaintext</h3>
						<p>$kata</p>
						<h3>Chipertext</h3>
						<p>$rot3</p>
					";
					}
					else
					{
						echo"<span style=\"color:#f00;\">Masukkan Plaintext...</span>";
					}
				}
				?>
		</div>
	</div>
</div>
