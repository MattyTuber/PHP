<html>
    <body>
    <div>
        <datalist id="suggestions">
            <?php
                $file = fopen("iata_codes.csv", "r");
                while(($data = fgetcsv($file, 1000, ",")) !== FALSE) {
                    echo "<option value='$data[0]'>$data[1]</option>";
                }
            ?>
        </datalist>
        <input  autoComplete="on" list="suggestions"/> 
    </div>                    
    </body>
</html>