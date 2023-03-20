<?php include '../../repeat/activity.php';?>
<html>
<head>
    <title>Block Details</title>
</head>
<body>
    <?php 
        include '../../repeat/headerUserExplorer.php';
    ?>
        <!-- <input type="hidden" value="Text"> -->
        <tr height=100px>
            <td>
                <table width=100%>
                    <tr>
                        <th><h2>Block Details</h2></th>
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
            <td colspan="2"></td>
        </tr>

        <tr height=400px>
            <td></td>
            <td colspan="2">
                <fieldset>
                    <legend>Block Details</legend>
                    <?php 
                        $curtime = time()*1000;
                        // echo $curtime;
                        $link = "https://blockchain.info/blocks/".$curtime."?format=json";

                        $ch = curl_init();
                        curl_setopt($ch,CURLOPT_URL,$link);
                        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                        $result = curl_exec($ch);
                        curl_close($ch);
                        $result=json_decode($result,true);
                        
                        echo "<table border='1'>"; 
                        echo "<tr> <th> Hash</th>";
                        echo "<th> Block Number </th>";
                        echo "<th> Time </th> </tr>";
                        foreach($result as $key)
                        {
                            // echo $key['hash'];
                            echo "<tr>";
                            echo "<td><a href='singleBlockDetails.php?hash=".$key['hash']."'>".$key['hash']."</a></td>";
                            echo "<td>".$key['height']."</td>";
                            $time = date('d-m-Y h:i:s',($key['time']+18000));
                            echo "<td>".$time."</td>";
                            echo "</tr>";

                        }
                        echo "</table>";
                        // echo "<pre>";
                        // print_r($result);
                    ?>
                </fieldset>
                        
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

