<?php 

    include 'db.php';

?>

<html>
    <head>
        <title>Table of Student</title>
    </head>
    <body>
       <table>
           <thead>
               <tr>
                   <th>ID</th>
                   <th>Roll Number</th>
                   <th>Password</th>
                   <th>Time</th>
               </tr>
           </thead>
           <tbody>
               <?php
               
                    $query = "SELECT * FROM std_table";
                    $viewStd = mysqli_query($connection, $query);

                    while($row = mysqli_fetch_assoc($viewStd)){
                        echo("<tr>");
                            echo("<td>{$row['s_id']}</td>");
                            echo("<td>{$row['s_rollnum']}</td>");
                            echo("<td>{$row['s_password']}</td>");
                            echo("<td>{$row['s_time']}</td>");
                        echo("</tr>");
                    }
               ?>
           </tbody>
       </table>
       <br>
       <hr>
       <label>
            Click Here<a href='form.php'>To Insert New Student</a>
       </label>
    </body>
</html>