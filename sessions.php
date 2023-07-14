<?php
session_start();

if (isset($_POST['submit'])) {
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);

    if ($username == 'Minh' && $password == '123') {
        // Set Session variable
        $_SESSION['username'] = $username;
        // Redirect user to another page
        header('Location: /PhPLearning/extras/dashboard.php');
    } else {
        echo 'Username or password is incorrect';
    }
}

?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
    <div>
        <label for="username">Name: </label>
        <input type="text" name="username">
    </div>
    <br>
    <div>
        <label for="password">Password: </label>
        <input type="password" name="password">
    </div>

    <input type="submit" value="Submit" name="submit">
</form>