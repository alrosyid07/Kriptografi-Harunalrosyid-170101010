
<div class="row bg-form">
    <div class="col-md-6">
        <form action="" method="post" class="form">                            
            <h2>DEKRIPSI AES 256</h2>                                
            <p> Chipertext<br /><input class="form-control" rows="3" cols="50" type="text" name="dekrip"  required=""> </p>
            <p> <input type="submit" class="btn btn-success" value="Enkripsi"> </p>                           
        </form>
    </div>
    <div class="col-md-6 ">
        <div class="">
            <h2>HASIL DEKRIPSI AES 256</h2>
            <?php

                if ( isset( $_POST['dekrip'] ) ) {

                    if(!empty($_POST[dekrip]))
                                    {
                                        $kata = $_POST[dekrip];
                                        $data = str_split($kata);

                                        
                                        }
                    echo "<h3> Chipertext </h3> <p>$kata</p>";
                    echo "<h3>Plaintext</h3> <p>" . dekripsi( $_POST['dekrip'] ) . "</p>";

                    
                ?>

            <?php } ?>
        </div>
    </div>
</div>
