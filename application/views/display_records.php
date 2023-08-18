<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table width="600" border="1" cellspacing="5" cellpadding="5">
        <tr style="background:#CCC">
        <th>Sr No</th>
        <th>id</th>
        <th>company_name</th>
        <th>company_mobile_number</th>
        <th>company_email</th>
        <th>street_address</th>
        <th>Landmark</th>
        <th>City</th>
        <th>district</th>
        <th>state</th>
        <th>pincode</th>
        <th>company_logo</th>
        <th>name</th>
        <th>role</th>
        <th>mobile_number</th>
        <th>email</th>
        <th>dateTime</th>
    </tr>
    <?php
    $i=1;
    foreach($data as $row)
    {
        echo "<tr>";
        echo "<td>".$i."</td>";
        echo "<td>".$row->name."</td>";
        echo "<td>".$row->phno."</td>";
        echo "<td>". $row->email."</td>";
        echo "<td>".$row->addr."</td>";
        echo "<td>".$row->landmark1."</td>";
        echo "<td>".$row->city1."</td>";
        echo "<td>".$row->district1."</td>";
        echo "<td>".$row->state1."</td>";
        echo "<td>".$row->pincode1."</td>";
        echo "<td>".$row->file."</td>";
        echo "<td>".$row->name1."</td>";
        echo "<td>".$row->role."</td>";
        echo "<td>".$row->phno1."</td>";
        echo "<td>".$row->mail1."</td>";
        echo "<td><a href='updatedata?id=".$row->id."'>Update</a></td>";
        echo "</tr>";
        $i++;
    }
    ?>

    </table>
    
</body>
</html>