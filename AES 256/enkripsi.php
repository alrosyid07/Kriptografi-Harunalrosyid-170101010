<div class="row bg-form">
    <div class="col-md-6">
        <form action="" method="post" class="form">                          
            <h2>ENKRIPSI AES 256</h2>                                
            <p> Plaintext<br /><input class="form-control" rows="3" cols="50" type="text" name="enkrip"  required=""> </p>
            <p> <input type="submit" class="btn btn-success" value="Enkripsi"> </p>                           
        </form>
    </div>
    <div class="col-md-6 ">
        <div class="">
            <h2>HASIL ENRIPSI AES 256</h2>
            <?php

                if ( isset( $_POST['enkrip'] ) ) {

                    if(!empty($_POST[enkrip]))
                                    {
                                        $kata = $_POST[enkrip];
                                        $data = str_split($kata);

                                        
                                        }
                    echo "<h3>Plaintext </h3> <p>$kata</p>";
                    echo "<h3>Chipertext</h3> <p>" . enkripsi( $_POST['enkrip'] ) . "</p>";

                    
                ?>

            <?php } ?>
        </div>
    </div>
</div>
               
