<header class="w3-container" style="padding-top:22px">
    <h5>I miei titoli</h5>
</header>
<div class="w3-container">
    <table class="w3-table w3-striped">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Simbolo</th>
                <th>Valuta</th>
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

                $sql = "SELECT * FROM Titoli ORDER BY Nome ASC";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($record = $result->fetch_assoc()) { ?>
                        <tr>
                            <td><?php echo $record["Nome"] ?></td>
                            <td><?php echo $record["Simbolo"] ?></td>
                            <td><?php echo $record["Valuta"] ?></td>
                            <td id=<?php echo "stock-id-".$record["ID"]; ?>>
                                <i class="fas fa-trash-alt" onclick="deleteStockFromDB(this.parentNode.id);"></i>
                            </td>
                        </tr>
                <?php
                    }
                    echo "</table>";
                }
                else {
                    echo $result->num_rows." results";
                    echo "</table>";
                }
                $conn->close();
            ?>
        </tbody>
    </table>
</div>
