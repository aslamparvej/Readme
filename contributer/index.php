<?php
include "head.php";

session_start();
if(isset($_SESSION['username'])){
    header("Location: localhost:8080/readme/contributer/home.php");
}

?>
<link rel="stylesheet" href="../css/user_login_style.css">

<div class="login-form-cotainer">
    <h2>Login</h2>
    <form action="<?PHP $_SERVER['PHP_SELF']; ?>" method="POST" autocomplete="FALSE">
        <div class="input-element">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div class="input-element">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div class="btn-element">
            <button type="submit" name="login">Login</button>
        </div>
    </form>
    <p>Create New Account <a href="./signup.php">Signup.</a></p>
</div>
<?php 
    if(isset($_POST['login'])){
        include 'config.php';

        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, md5($_POST['password']));

        $sql = "SELECT username, contributer_id,password FROM contributer WHERE username = '{$username}' AND password = '{$password}'";
        $result = mysqli_query($conn, $sql) or die("Query Failed!");
        
        if(mysqli_num_rows($result)>0){
            while($row = mysqli_fetch_assoc($result)){

                session_start();
                $_SESSION['username'] = $row['username'];
                $_SESSION['contributer_id'] = $row['contributer_id'];

                header("Location: {$hostname}/contributer/home.php");
            }
        }else{
            echo '<p class="error">Username and Password not matched!</p>';
        }
    }
?>

<?php
include "../footer.php"
?>