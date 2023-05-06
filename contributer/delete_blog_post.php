<?php 
    include "./config.php";
    $blog_id = $_GET['id'];
    echo $blog_id;
    $sql = "DELETE FROM blog_post WHERE blog_id = '$blog_id'";
    $del = mysqli_query($conn, $sql);

    if($del){
        mysqli_close($conn);
        // header("http://localhost:8080/readme/contributer/blogs.php");
        header("Location: {$hostname}/contributer/blogs.php");
        exit;
    }else{
        echo "<h2 class='text-danger'>Some this is wrong!!!</h2>";
    }
?>