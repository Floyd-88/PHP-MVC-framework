<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>name</th>
            <th>price</th>
            <th>quantity</th>
            <th>category</th>

        <?php foreach($array as $row) { ?>
            <tr> 
                <?php foreach($row as $row2) { ?>
                <td> <?php echo $row2; ?> </td>
                <?php } ?>
            </tr>
       <?php } ?>

    </table>
</body>
</html>