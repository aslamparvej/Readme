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
        <div class="col">
            <h1>Your Blogs</h1>
            <table class="table table-striped table-bordered table-hover" id="blogTable">
                <tr>
                    <!-- <th scope="col">#</th> -->
                    <th scope="col">Blog Title</th>
                    <th scope="col">Update</th>
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
                        <td><button type="button" class="btn  btn-warning">Update</button></td>
                        <td><button type="button" class="btn  btn-danger">Delete</button></td>
                    </tr>
                <?php } ?>
                <table>
        </div>
    </div>

</div>
<?php include "../footer.php" ?>
