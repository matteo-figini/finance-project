<header class="w3-container" style="padding-top:22px">
    <h5>Le mie valute</h5>
</header>
<div class="w3-container">
    <select class="w3-select currency-selector" id="select-currency-db"></select>
    <input type="button" id="add-currency-db" value="Aggiungi valuta"
    onclick="addCurrencyToDB(document.getElementById('select-currency-db').value)">
    <table class="w3-table w3-striped">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Abbreviazione</th>
            </tr>
        </thead>
        <tbody>
            <?php
                define("DB_SERVER", "localhost");
                define("DB_USER", "root");
                define("DB_PASSWORD", "mysql");
                define("DB_NAME", "Portafoglio");

                $conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);

                if ($conn->connect_error) {
                    die("Connection failed: ".$conn->connect_error);
                }

                $sql = "SELECT * FROM Cambiavalute ORDER BY Nome ASC";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($record = $result->fetch_assoc()) { ?>
                        <tr>
                            <td><?php echo $record["Nome"] ?></td>
                            <td><?php echo $record["Abbreviazione"] ?></td>
                            <td id=<?php echo "currency-id-".$record["ID"]; ?>>
                                <i class="fas fa-trash-alt" onclick="deleteCurrencyFromDB(this.parentNode.id);"></i>
                            </td>
                        </tr>
                <?php
                    }
                    echo "</table>";
                }
                else {
                    echo "</table>";
                }
                $conn->close();
            ?>
        </tbody>
    </table>
</div>

<script type="text/javascript">
    var xmlhttp = new XMLHttpRequest();
    var url = "../../data/valute.json";

    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var jsonResponseData = JSON.parse(this.responseText).valute;
            for (i = 0; i < jsonResponseData.length; i++) {
                $('#select-currency-db').html(
                    $('#select-currency-db').html() +
                    '<option data-name="' + jsonResponseData[i].nome + '" value="' + jsonResponseData[i].abbreviazione + '">' + jsonResponseData[i].nome + ' (' + jsonResponseData[i].abbreviazione + ')' + '</option>'
                );
            }
        }
    };
    xmlhttp.open("GET", url, true);
    xmlhttp.send();
</script>
