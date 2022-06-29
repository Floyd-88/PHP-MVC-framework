
<h1><?php echo "Спиоск товаров" ?></h1>

<table class = "table_price">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Count</th>

        <?php foreach($table as $row) { ?>
            <tr> 
                <?php foreach($row as $row2) { ?>
                <td> <?php echo $row2; ?> </td>
                <?php } ?>
            </tr>
       <?php } ?>

    </table>
