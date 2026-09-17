<?php
<<<<<<< HEAD

require __DIR__ . '/config/config.php';

require __DIR__ . '/config/functions.php';




if (isset($_SESSION['user_id'])) {

    header('Location: ' . BASE_URL . '/app/' . $_SESSION['user_role'] . '/index.php');

    exit;

}

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $login = trim($_POST['login'] ?? '');
    $password = $_POST['password'] ?? '';

    if ($login === '' || $password === '') {

        $error = 'Invalid login credentials';

        logActivity(
            $pdo,
            null,
            $login,
            'login',
            'failed'
        );

    } else {

        if (loginUser($pdo, $login, $password)) {

            logActivity(
                $pdo,
                $_SESSION['user_id'],
                $_SESSION['user_email'],
                'login',
                'success'
            );

            header('Location: ' . BASE_URL . '/app/' . $_SESSION['user_role'] . '/index.php');

            exit;

        }

        $error = 'Invalid login credentials';
    }
}

?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login</title>

</head>

<body>

    <?php if ($error): ?>

        <p><?= htmlspecialchars($error) ?></p>

    <?php endif; ?>

    <h1>User Login</h1>

    <form method="POST">

        <label>Username or email</label>

        <input type="text"
               name="login"
               required
        >

        <br>

        <label>Password</label>

        <input type="password"
               name="password"
               required
        >

        <br>

        <button type="submit">Sign In</button>

    </form>

</body>

</html>
=======
require_once('config/config.php');

$user_id = "root" ?? null;
$user_email = "root" ?? null;

$buttons = [
'Login',
'Logout',
'Create Record',
'Update Record',
'Delete Record',
'View Record',
'Upload File',
'Download',
'Search',
'Generate Report'



];

?>

<table border="1" cellpadding ="1">
    <tr>
        <th>Action</th>
        <th>Test</th>
</tr>
            <?php foreach($buttons as $button):?>
                <tr>
            <td><?= htmlspecialchars($button)?></td>
            <td>

                <form method="post">
                    <input type="hidden" name="action"
                    value="<?= htmlspecialchars($button)?>">

                    <button type="submit">Test</button >
            </form>
                </td>
            </tr>
                

                <?php endforeach;?>
</table>

            <?php
            if($_SERVER['REQUEST_METHOD'] === 'POST'){
             $action = $_POST[ 'action' ]?? test_activity;

             $status = random_int(0,1) === 1? 'success' : 'failed';
            
             $success =logActivity(
                $pdo,
                $user_id,
                $user_email,
                $action,
                $status
             );

             if($success){
             echo "<p> Activity:" .htmlspecialchars($action) . 
             "Status:" .htmlspecialchars($status) . 
             "Log inserted successfully</p";
             }else{
                echo "<p>Failed to insert activity log</p>";


             }

            }
            ?>
>>>>>>> e6fa97461427607e78f486ad703109a0424e453b
