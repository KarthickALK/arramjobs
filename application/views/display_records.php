<html>
    <head>
        <tittle>Display records</tittle>
        <style>
            table, th, td {
                border:1px solid black;
                border-collapse:collapse;
            }
        </style>
    </head>
    <body>
        <table width="600" border="0" cellspacing="5">
            <tr style="background:#CCC">
            <th>Se No</tr>
            <th>first_name</tr>
            <th>last_name</tr> 
            <th>email</tr>
            </tr>


    <?php

    $i=1;
    foreach($data as $row)
    {
        echo "<tr>";
        echo "<td>".$i."</td>";
        echo "<td>".$row->first_name."</td>";
        echo "<td>".$row->last_name."</td>";
        echo "<td>".$email."</td>";
        echo "</tr>";
        $i++;
       
    }
    ?>  
    </table>      
    </body>
</html>