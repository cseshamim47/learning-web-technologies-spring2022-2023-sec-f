<html>
    <head>
        <title>Form practice</title>
    </head>
    <body>
        <form method="post" action="" enctype="">
            <fieldset style="width:550px">
                <legend><b>Date of Birth</b></legend>
                <table>
                    <tr align="center">
                        <td>
                            <h4>dd</h4>
                            <input type="number" name="date" value="<?php echo isset($_POST['date']) ? $_POST['date'] : ''  ?>"/> /
                        </td>
                        <td>
                            <h4>mm</h4>
                            <input type="number" name="month" value="<?php echo isset($_POST['month']) ? $_POST['month'] : ''  ?>"/> /
                        </td>
                        <td>
                            <h4>yyyy</h4>
                            <input type="number" name="year" value="<?php echo isset($_POST['year']) ? $_POST['year'] : ''  ?>"/>
                        </td>
                    </tr>
                    
                </table>
                <hr>
            </fieldset>
            <br>
            <input type="submit" name="" value="Submit">            
        </form>

        <?php
            if(isset($_POST['date']) && isset($_POST['month']) && isset($_POST['year']))
            {
                echo "DD : " . $_POST['date'] . " / MM : ". $_REQUEST['month']. " / YY : ". $_REQUEST['year'];
            }
        ?>
    </body>
</html>