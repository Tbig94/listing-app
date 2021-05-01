<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listing App - Advertisements</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <h2>Advertisement List</h2>
    <table>
    <tbody>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>User</th>
        </tr>
        <?php foreach ($data['ads'] as $ads): ?>
            <tr>
                <td><?php echo $ads->id; ?></td>
                <td><?php echo $ads->title; ?></td>
                <td><?php echo $ads->name; ?></td>
            </tr>
        <?php endforeach;?>
    </tbody>
    </table>

</body>
</html>


 
