<?php 
    session_start();
?>

<html>
    <head><title>add product</title></head>
    <body>
        <fieldset>
        <legend>Add product</legend>
            <form action="../controllers/addProductCheck.php" method="post">
                <table border="0">
                    <tr>
                        <td>
                            Name <br>
                            <input type="text" name='name'>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Buying Price <br>
                            <input type="text" name='buyingPrice'>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Selling Price <br>
                            <input type="text" name='sellingPrice'>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <hr>
                            <input type="checkbox" name='checked'> Display
                            <hr>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" value="save" name="save">
                        </td>
                    </tr>
                </table>
            </form>
        </fieldset>



        <fieldset style="margin:50px 0 0 0">
            <legend>Search</legend>
            <form action="">
                <input type="text" >
                <input type="submit" name="search" value="Search By Name">
            </form>
        </fieldset>

        <?php 
            
            if(isset($_SESSION['updated']))
            {
                echo "Product Updated <br>";
            }else if(isset($_REQUEST['edit'])){
        ?>
        <fieldset style="margin:50px 0 0 0">
        <legend>Edit Product</legend>
            <form action="edit.php" method="post">
                <table border="0">
                    <tr>
                        <td>
                            Name <br>
                            <input type="text" name='name' value="<?php echo isset($_REQUEST['name'])?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Buying Price <br>
                            <input type="text" name='buyingPrice'>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Selling Price <br>
                            <input type="text" name='sellingPrice'>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <hr>
                            <input type="checkbox" name='checked'> Display
                            <hr>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" value="save" name="save">
                        </td>
                    </tr>
                </table>
            </form>
        </fieldset>

        <?php 
            }
        ?>
        

    </body>
</html>


<?php 
    $_SESSION = [];
?>