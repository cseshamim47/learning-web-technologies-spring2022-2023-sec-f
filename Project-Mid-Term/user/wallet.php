<?php 
include '../repeat/activity.php';
// print_r($_SESSION);
?>

<html>
<head>
    <title>Wallet</title>
</head>
<body>
    <?php 
        include '../repeat/headerUser.php';
    ?>

        <tr>
            <td width=20%>
                <table width=100%>
                    <tr>
                        <th><h2>Wallet</h2></th>
                    </tr>
                    <tr>
                        <td>
                            <?php 
                                include '../repeat/userMenuLink.php';
                            ?>
                        </td>
                    </tr>
                </table>
            </td>
            <td colspan="2">
                <fieldset>
                    <legend><h3>Wallet</h3></legend>
                    <table border="0" width=100%>
                        <tr>
                            <td width=20%>Current Balance</td>
                            <td width=30%>
                            <b>0.123123BTC</b>
                            </td>
                            <td width=40%></td>
                        </tr>
                        <tr height=0>
                            <td colspan="2"><hr></td>
                        </tr>
                        <tr>
                            <td>Transaction History</td>
                            <td>
                                <a href="#">click to view</a>
                            </td>
                            <td></td>
                        </tr>
                        <tr height=0>
                            <td colspan="2"><hr></td>
                        </tr>
                        <tr>
                            <td>Unconfirmed Transactions</td>
                            <td>
                                <a href="#">click to view</a>
                            </td>
                            <td></td>
                        </tr>
                        <tr height=0>
                            <td colspan="2"><hr></td>
                        </tr>
                        <tr>
                            <td>Confirmed Transactions</td>
                            <td>
                                <a href="#">click to view</a>
                            </td>
                            <td></td>
                        </tr>
                        <tr height=0>
                            <td colspan="2"><hr></td>
                        </tr>
                                           
                    </table>
                </fieldset>

            </td>
        </tr>
        
        <tr height="80px">
            <td colspan="3" align="center">
                <p>copytight © 2023</p>
            </td>
        </tr>
    </table>
</body>
</html>