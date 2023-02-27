<html>
    <head>
        <title>Form practice</title>
    </head>
    <body>
        <form method="post" action="" enctype="">
            <fieldset>
                <legend>Gender</legend>
                <input type="radio" name="Gender" value="Male"/> Male
                <input type="radio" name="Gender" value="Female"/> Female
                <input type="radio" name="Gender" value="Other"/> Other <br>
            </fieldset>
            <input type="submit" name="" value="Submit">            
        </form>

        <?php
            if(isset($_REQUEST['Gender']))
            {
                echo $_REQUEST['Gender'];
            }
        ?>
    </body>
</html>