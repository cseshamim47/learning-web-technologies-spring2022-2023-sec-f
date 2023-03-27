<html>
    <title>
        Create
    </title>
    <body>
        
    <form action="createhandle.php" method="POST" enctype="multipart/form-data">
    <fieldset>
        <legend>Create Specification</legend>
        <table>
            <tr>
                <td>
                    Specification Name: 
                </td>
                <td>
               <input type="text" name="name" value=""/> <br>
                   
                </td>
            </tr>
            <tr>
                <td>
                
                    Specification Role: 
                </td>
                <td>
                <input type="text" name="role" value=""/> <br>
                    
                </td>
            </tr>
            <tr>
                <td>
                
                    Screen Defination: 
                </td>
                <td>
              
                <input type="text" name="screendefination" value=""/> <br>
                    
                </td>
            </tr>
            <tr>
                <td>
                
                    User Story: 
                </td>
                <td>
               <input type="text" name="story" value=""/> <br>
                    
                </td>
            </tr>
            <tr>
                <td>
               
                    Acceptance Criterea: 
                </td>
                <td>
                 <input type="text" name="criteria" value=""/> <br>
                    
                </td>
            </tr>
            <tr>
                <td>
                
                    UI screen : 
                </td>
                <td>
                 <input type="file" name="file" value="" /> <br>
                   
                </td>
            </tr>
            <tr>
                <td>
                
                    Tags: 
                </td>
                <td>
                <input type="text" name="tags" value=""/> <br>
                </td>
            </tr>
        </table>
                 
                <input type="submit" name="submit" value="Submit"/>
            </fieldset>
            <a href="createspecification.php">Back</a>
    </form>
    </body>
</html>