<?php 
            if(isset($_SESSION['display']))
            {
        ?>
        <fieldset style="margin:50px 0 0 0">
            <legend>Display</legend>
            <table border="1">
                <tr>
                    <td>Name</td>
                    <td>Profit</td>
                    <td colspan="2"></td>
                </tr>
                <?php 
                    require_once('../models/allModels.php');
                    $result = display();
                    while($row = mysqli_fetch_assoc($result))
                    {
                        echo "<tr>";
                        echo "<td>".$row['name']."</td>";
                        $sell = $row['sellingPrice'];
                        $buy = $row['buyingPrice'];
                        $profit = $sell-$buy;
                        echo "<td>".$profit."</td>";
                        
                ?>
                    <td><a href="index.php?edit=true&name=<?php $row['name']?>&buyingPrice=<?php $row['buyingPrice']?>&sellingPrice=<?php $row['sellingPrice']?>"></a></td>
                <?php 
                        echo "<td><a href='#'>delete</a></td>";
                        echo "</tr>";
                    }
                ?>
            </table>
        </fieldset>
        <?php 
            }
            $_SESSION = [];
        ?>