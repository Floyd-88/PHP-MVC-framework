<h1><?= $header ?></h1>
<table>
    <tr>
        <th>ID</th>
        <th>Наименование</th>
        <th>Перейти к товару</th>
    </tr>
    <?php 
    foreach($products as $product) { ?>
        <tr>
           <?php foreach($product as $elem) { ?>
            <td><?php echo $elem ?></td>
            <?php } ?>
            <td> <a href="/productshop/<?php echo $product['id'] ?>">Ссылка на товар</a> </td>
        </tr>
    <?php } ?>
</table>