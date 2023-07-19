<?php 
    if(isset($_POST['submit'])){
        echo $_POST['name'] . "<br>";
        echo $_POST['age'] . "<br>";
    }
?>

<a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=John&age=20">Click</a>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <div>
        <label for="name">Name: </label>
        <input type="text" name="name">
    </div>
    <div>
        <label for="age">Age: </label>
        <input type="number" name="age">
    </div>
    <input type="submit" value="Submit" name="submit">
</form>