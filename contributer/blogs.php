<?php
include "./head.php";
include "./config.php";

$sql =  'SELECT * FROM blog_post';
$result = mysqli_query($conn, $sql);
$index = 0;
?>

<?php
include "./header.php"
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <h4>Your Blogs</h4>
            <table class="table table-striped table-bordered table-hover" id="blogTable">
                <tr>
                    <!-- <th scope="col">#</th> -->
                    <th scope="col">Blog Title</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <tr>
                        <!-- <td></td> -->
                        <td>
                            <p><?php echo $row['blog_title'] ?></p>
                        </td>
                        <td><button type="button" class="btn  btn-warning">Edit</button></td>
                        <td><a href="delete_blog_post.php?id=<?php echo $row['blog_id']; ?>"><button type="button" class="btn  btn-danger">Delete</button></a></td>
                    </tr>
                <?php } ?>
                <table>
        </div>
    </div>

</div>
<?php include "../footer.php" ?>
