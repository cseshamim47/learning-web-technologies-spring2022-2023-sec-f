<?php include '../../repeat/activity.php';?>
<html>
<head>
    <title>Conversion</title>
</head>
<body>
    <?php 
        include '../../repeat/headerUserExplorer.php';
    ?>

        <tr height=400px>
            <td width=20%>
                <table width=100%>
                    <tr>
                        <th><h2>Conversion</h2></th>
                    </tr>
                    <tr>
                        <td>
                            <table>
                                <tr>
                                    <td width=70%></td>
                                    <td><a href="../explorer.php">Back</a></td>
                                    <td></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
            <td colspan="2">
                <form method = "get" action="conversion.php" >
                <fieldset>
                    <legend>Conversion</legend>
                    <table border="1" width=200px>
                        <tr>
                            <td>From</td>
                            <td>To</td>
                            <td>Value</td>
                        </tr>
                        <tr>
                                <td>
                                    <select name="from">
                                        <option value="usd">USD</option>
                                        <option value="bdt">BDT</option>
                                        <option value="btc">BTC</option>
                                    </select>
                                </td>
                                <td>
                                    <select name="to">
                                        <option value="bdt">BDT</option>
                                        <option value="usd">USD</option>
                                        <option value="btc">BTC</option>
                                    </select>
                                </td>
                                <td rowspan="2">0</td>
                        </tr>
                        <tr>
                            <td><input type="number" name="fromValue"></td>
                            <td><input type="number" name="toValue"></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input type="submit" value="Submit" name="submit">
                            </td>
                        </tr>
                            
                        </table>
                    </fieldset>
                </form>

            </td>
        </tr>
        
        <tr height="80px">
            <td colspan="3" align="center">
                <p>copyright © 2023</p>
            </td>
        </tr>
    </table>
</body>
</html>

