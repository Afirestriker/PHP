<html>
<head>
    <title> List Users </title>
</head>
<body>
    <h1> List users </h1>

    <table>
        <thead>
            <tr> 
                <th> ID </th>
                <th> First Name </th>
                <th> Second Name </th>
                <th> Email </th>
                <th> Mobile </th>
            </tr>
        </thead>

        <tbody>
            <?php foreach($users as $user) { ?>
                <tr> 
                    <td> <?= $user['sr_no']; ?> </td>
                    <td> <?= $user['name']; ?> </td>
                    <td> <?= $user['surname']; ?> </td>
                    <td> <?= $user['email']; ?> </td>
                    <td> <?= $user['mobile_no']; ?> </td>
                </tr>
            <?php } ?>
        </tbody>

    </table>

</body>
</html>