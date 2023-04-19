

<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body">
       <!-- header -->
        <?php include '../repeat/header.php';  ?>
        <!-- body -->

        <tr height="200px">
            <td width=20%></td>
            <td>
                <form method="get" action="forgotPassword.php">
                    <fieldset>
                        <legend>Login</legend>
                        <table align="center" >
                            
                            <tr height=40px>
                                <td>
                                    Username : 
                                </td>
                                <td>
                                    <input id="username" class="edit" type="text" name="username" value="">
                                </td>
                            </tr>

                            <tr>
                                <td colspan="2">
                                <input id="button" onclick="ajax()" class="clearDB_btn" type="button" name="submit" value="Submit"> 
                                </td>              
                            </tr>
                           
                        </table>
                    </fieldset>

                </form>

            </td>
            <td width=20%></td>
        </tr>
        

<!-- footer -->

</table>
<h1 id="alert" class="alert" align='center'></h1>
<table border="1" align="center" id="myTable" style="display:none;">
  <tr>
    <td>Name</td>
    <td id="name"></td>
    <td rowspan="3" id="image">
        
    </td>
  </tr>
  <tr>
    <td>Username</td>
    <td id="tusername"></td>
  </tr>
  <tr>
    <td>Email</td>
    <td id="email"></td>
  </tr>
</table>

<h3 id="sendAlert"></h3>
<input type="button" name="send" value="Send New Password">

<table align="center">
<tr height="80px">
        <td colspan="3" align="center">
            <p>copyright © 2023</p>
        </td>
    </tr>
</table>

<script>

    function showTable() {
        var table = document.getElementById("myTable");
        if (table.style.display === "none") {
            table.style.display = "table";
        } else {
            table.style.display = "none";
        }
    }
    var imageShown = false;
    function ajax()
    {
        let username = document.getElementById('username').value;

        let xhttp = new XMLHttpRequest();
        xhttp.open('get', '../../controllers/ajaxForgotPassword.php?username='+username, true);
        // xhttp.open('post', 'abc.php', true);
        xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhttp.send();
        // console.log('working');
        xhttp.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
                //alert(this.responseText);
                let user = JSON.parse(this.responseText);
                if(user === null)
                {
                    alert('No user found!!');
                }else
                {
                    console.log(user.name);
                    document.getElementById('sendAlert').innerHTML = "Get new password to your gmail?";
                    document.getElementById('alert').innerHTML = "Is this you?";
                    document.getElementById('name').innerHTML = user.name;
                    document.getElementById('tusername').innerHTML = user.username;
                    document.getElementById('email').innerHTML = user.email;

                    var imgElement = document.createElement("img");
  
                    // Set the image source and alt text
                    imgElement.src = "../../includes/"+user.profilePicture;
                    imgElement.alt = "pp";
                    
                    // Get the container element where the image will be displayed
                    var container = document.getElementById("image");
                    
                    // Add the image element to the container
                    container.appendChild(imgElement);

                    
                    showTable();
                }
                // console.log(user.name);
            }
        }
    }
</script>
</body>