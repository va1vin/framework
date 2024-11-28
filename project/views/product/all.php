<!DOCTYPE html>
<html lang="en">

<head>
</head>

<body>
<h1>Список всех продуктов</h1>
    <table border="1">
    <tr>
        <th>Название</th>
        <th>Цена</th>
        <th>Количество</th>
        <th>Категория</th>
        <th>Стоимость</th>
    </tr>
    <?php foreach ($products as $product): ?>
        <tr>
            <td><?php echo $product['name']; ?></td>
            <td><?php echo $product['price']; ?>$</td>
            <td><?php echo $product['quantity']; ?></td>
            <td><?php echo $product['category']; ?></td>
            <td><?php echo $product['price'] * $product['quantity']; ?>$</td>
        </tr>
    <?php endforeach; ?>
    </table>
</body>
</html>