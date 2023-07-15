<?php include './inc/header.php' ?>

<?php
$name = $email = $body = '';
$nameErr = $emailErr = $bodyErr = '';
if (isset($_POST['submit'])) {
    #Validate name
    if (empty($_POST['name'])) {
        $nameErr = 'Name is required';
    } else {
        $name = filter_input(
            INPUT_POST,
            'name',
            FILTER_SANITIZE_SPECIAL_CHARS
        );
    }
    #Validate email
    if (empty($_POST['email'])) {
        $emailErr = 'Email is required.';
    } else {
        $email = filter_input(
            INPUT_POST,
            'email',
            FILTER_SANITIZE_EMAIL
        );
    }
    #Validate body
    if (empty($_POST['body'])) {
        $bodyErr = 'Body is required.';
    } else {
        $body = filter_input(
            INPUT_POST,
            'body',
            FILTER_SANITIZE_FULL_SPECIAL_CHARS
        );
    }

    #Validate for all 
    if (empty($bodyErr) && empty($emailErr) && empty($nameErr)) {
        // Prepare the SQL statement to insert data into table
        $sql = "INSERT INTO feedback (name, email, body) VALUES ('$name', '$email', '$body')";
        if (mysqli_query($conn, $sql)) {
            header('Location: feedback.php');
        } else {
            // error
            echo 'Error: ' . mysqli_error($conn);
        }
    }
}
?>

<img src="/PhPLearning/feedback/img/logo.png" class="w-25 mb-3" alt="">
<h2>Feedback</h2>
<?php echo isset($name) ? $name : ''; ?>
<p class="lead text-center">Leave feedback for Traversy Media</p>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" class="mt-4 w-75">
    <div class="mb-3">
        <label for="name" class="form-label"></label>
        <input type="text" name="name" class="form-control <?php
                                                            !$nameErr ? 'is-invalid' : '';
                                                            ?>" placeholder="Enter your name" id="name" value=" <?php echo $name; ?> ">
        <div id="validationServerFeedback" class="invalid-feedback">
            Please provide a valid name.
        </div>
    </div>

    <div class="mb-3">
        <label for="email" class="form-label"></label>
        <input type="email" name="email" class="form-control <?php
                                                                !$emailErr ? 'is-invalid' : '';
                                                                ?>" placeholder="Enter your email" id="email" value=" <?php echo $email; ?> ">
        <div id="validationServerFeedback" class="invalid-feedback">
            Please provide a valid email.
        </div>
    </div>


    <div class="mb-3">
        <label for="body" class="form-label"></label>
        <input type="text" name="body" placeholder="Enter your feedback" value=" <?php echo $body; ?> " class="form-control <?php !$bodyErr ? 'is-invalid' : '' ?> ">
        <div id="validationServerFeedback" class="invalid-feedback">
            Please provide a valid content.
        </div>
    </div>

    <div class="mb-3">
        <input type="submit" value="Send" class="btn btn-dark w-100" name="submit">
    </div>

</form>

<?php include './inc/footer.php' ?>