<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>photo</h3>
    <ul>
        <?php foreach($data as $key => $value): ?>
            <li><?=$key?><?=$value?></li>
            <?php endforeach?>
        </ul>
        <img src="<?baseurl().'/uploads/'.$data['file_name']?>" width="200" height="160">
</body>
</html>