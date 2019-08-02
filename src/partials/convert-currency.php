<header class="w3-container" style="padding-top:22px">
    <h5>Converti una valuta:</h5>
</header>
<div class="w3-container">
    <input type="number" id="valore iniziale" placeholder="1" required>
    <select class="" name="">
        <?php
            $json = file_get_contents("valute.json");
            $json_data = json_decode($json, true);
            print_r($json_data);

            // foreach ($json_data as $key => $value) {
            //
            // }
         ?>
    </select>
</div>
