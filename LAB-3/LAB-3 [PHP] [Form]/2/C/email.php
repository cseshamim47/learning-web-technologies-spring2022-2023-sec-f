<html>
    <head>
        <title>email</title>
    </head>
    <body>
        <fieldset style="width:550px">
            <legend>Email</legend>
            <form method="post" action="" enctype="">
                email: <br>
                <input type="email" name="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>"><br>
                <br>
                <input type="submit" name="submit" value="Submit">            
            </form>
        </fieldset>

        <?php
            
            if(isset($_POST['email']) && empty($_POST['email']) == false)
            {
                $email = $_POST['email'];
                echo "<p>Your email is: $email</p>";
            }else if(isset($_POST['email']))
            {
                echo "<p>Please input first</p>";

            }
        ?>

    </body>
</html>