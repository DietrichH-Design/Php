<!Doctype html>
<html>
    <head>
       <title>Insert Update and Delete in PHP and MySQLi</title>    
    </head>
    <style>
    *{
        margin: 0;
    }
    .header{
        background-color: black;
        color: yellow;
        padding: 1%;
        text-align: center;
    }
    .main{
        width: 80%;
        border: 1px solid black;
        margin: 1% auto;
        padding: 3%;
        
    }
    .footer{
        background-color: black;
        color: yellow;
        padding: 1%;
        text-align: center;
     }
     table,tr,th,td{
        border: 1px solid black;
        border-collapse: collapse;
        padding: 0.4%;
     }   
    
    </style>
    <body>
    <header class="header">
    <h1>INSERT UPDATE AND DELETE</h1>
    </header>
    <div class="main">
    <h2>Updating Firstname and Lastname</h2>
    <form method="post" action="add_action.php">add_action.php

    <table>
    <tr>
    <td>First Name:</td>
    <td><input type="text" name="first_name" placeholder="First name" /></td>
    </tr>
    <tr>  
    <td>Last Name:</td>
    <td><input type="text" name="last_name" placeholder="Last Name" /></td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="submit" value="Update Member" /></td>
    </tr>
    
    </table>
    </form>
    <br />
    <hr />
    <br />    
    
    </div>
    <footer class="footer">
    All Rights reserved. &COPY;Dietrich Hein 2020
    </footer>            
    </body>
</html>