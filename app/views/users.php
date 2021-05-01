<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listing App - Users</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <h2>User List</h2>
    <table>
    <tbody>
        <tr>
            <th>Name</th>
            <th>ID</th>
        </tr>
        <?php foreach ($data['users'] as $user): ?>
            <tr>
                <td><?php echo $user->name; ?></td>
                <td><?php echo $user->id; ?></td>
            </tr>
        <?php endforeach;?>
    </tbody>
    </table>

</body>
</html>

 
