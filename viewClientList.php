<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/instructor.css" rel="stylesheet" type="text/css"/>
        <title>Client List</title>
    </head>
    <body>
   <h1 id="pghead"><b>Driving School System</b></h1> 
        <?php
        require_once 'include/dbconn.php';
        ?>
   <div >
        <table cellpadding="2" cellspacing="2" border="1">
            <thead>
                <tr>
                    <th colspan="6">Clients List</th>
                </tr>
                <tr>
                    <th>Identity Number</th><th>Name</th><th>Gender</th><th>License Code</th><th>Address</th><th>Contact Number</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $html = "";
                $recset = $conn->query("SELECT* FROM client");
                if (mysqli_num_rows($recset) > 0) {
                    while ($row = $recset->fetch_assoc()) {
                        $html .= "<tr><td>$row[client_id]</td><td>$row[name]</td><td>$row[surname]</td><td>$row[gender]</td><td>$row[address]</td><td>$row[contact_number]</td></tr>";
                    }
                    echo $html;
                } else {
                    exit("<p class='err'>Client list not found.</p>");
                }

                mysqli_free_result($recset);
                 
                ?>
            </tbody>
        </table> 
   </div>
    </body>
</html>
