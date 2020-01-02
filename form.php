<?php 
    include 'db.php';
?>

<html>
    <head>
        <title></title>
    </head>
    <body>
        <form action="insertData.php" method="POST">
            <label for="rollNum">
                Roll Number: <input id="rollNum" name="rollNum" type="text">
            </label>

            <br>
            
            <label for="pass">
                Password:<input type="text" id="pass", name="pass">
            </label>

            <br>

            <button type="submit" name="insertStd">
                Insert Student
            </button>
        </form>
        
           <br>
           <hr>
           <label>
                Click Here<a href='index.php'>To View Students</a>
           </label>
    </body>
</html>