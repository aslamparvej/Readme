<?php
include "head.php";
session_start();
if(isset($_SESSION['username'])){
    header("Location: localhost:8080/readme/contributer/home.php");
}
?>
<link rel="stylesheet" href="../css/user_login_style.css">

<?php 
    if(isset($_POST['submit'])){
        // connection database
        include './config.php';

        // Getting all the input value from form element
        $first_name = mysqli_real_escape_string($conn, $_POST['first-name']);
        $last_name = mysqli_real_escape_string($conn, $_POST['last-name']);
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, md5($_POST['password']));
        $Confrim_password = mysqli_real_escape_string($conn, md5($_POST['confirm-password']));

        // Check User already exits or not
        $sql = "SELECT username FROM contributer WHERE username= '{$username}'";
        $result = mysqli_query($conn, $sql) or die("Query Failed");

        if(mysqli_num_rows($result)>0){
            echo "<p class='error'>User already exit.</p>";
        }else{

            // Query to insert data into contributer table
            $sql1 = "INSERT INTO contributer(first_name, last_name, username, password)
            VALUES ('{$first_name}', '{$last_name}', '{$username}', '{$password}')";

            if(mysqli_query($conn, $sql1)){
                header("Location: {$hostname}/contributer/index.php");
            }
        }
        
    }
?>

<!-- form section  starts here-->
<div class="login-form-cotainer">
    <h2>Sign Up</h2>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" autocomplete="off">
        <div class="input-element">
            <label for="first-name">First Name:</label>
            <input type="text" id="first-name" name="first-name" required>
        </div>
        <div class="input-element">
            <label for="last-name">Last Name:</label>
            <input type="text" id="last-name" name="last-name" required>
        </div>
        <div class="input-element">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div class="input-element">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div class="input-element">
            <label for="confirm-password">Confirm Password:</label>
            <input type="password" id="confirm-password" name="confirm-password" required>
        </div>
        <div class="btn-element">
            <button type="submit" name="submit">Sign Up</button>
        </div>
    </form>
    <p>Already Have an Account <a href="./index.php">Login.</a></p>
</div>
<!-- form section  ends here-->
<?php
include "../footer.php"
?>