<?php
include '../includes/config/config.php';
include 'auth.php';

?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zarządzaj Użytkownikami</title>
</head>
<body>
<h1>Zarządzaj Użytkownikami</h1>
<table>
    <tr>
        <th>ID</th>
        <th>Nazwa użytkownika</th>
        <th>Email</th>
        <th>Rola</th>
        <th>Data utworzenia</th>
        <th>Akcje</th>
    </tr>
    <?php foreach ($users as $user): ?>
        <tr>
            <td><?php echo $user['id']; ?></td>
            <td><?php echo htmlspecialchars($user['username']); ?></td>
            <td><?php echo htmlspecialchars($user['email']); ?></td>
            <td><?php echo htmlspecialchars($user['role']); ?></td>
            <td><?php echo $user['created_at']; ?></td>
            <td>
                <a href="edit_user.php?id=<?php echo $user['id']; ?>">Edytuj</a>
                <a href="delete_user.php?id=<?php echo $user['id']; ?>">Usuń</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>
