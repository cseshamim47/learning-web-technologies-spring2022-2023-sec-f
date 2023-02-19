<html>
    <head>
        <title>name</title>
    </head>
    <body>
        <fieldset style="width:550px">
            <legend>Name</legend>
            <form method="post" action="" enctype="">
                Name: <br>
                <input type="text" name="name"><br>
                <br>
                <input type="submit" name="submit" value="Submit">            
            </form>
        </fieldset>

        <?php
            
            if(isset($_POST['name']) && empty($_POST['name']) == false)
            {
                $name = $_POST['name'];
                echo "<p>Your name is: $name</p>";
            }else if(isset($_POST['name']))
            {
                echo "<p>Please input first</p>";

            }
        ?>

    </body>
</html>