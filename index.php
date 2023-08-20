<?php
include "header.php";
include "./contributer/config.php";

$sql =  'SELECT * FROM blog_post';
$result = mysqli_query($conn, $sql);

if (!$result) {
    echo "Somethis is wrong!";
}
?>
<main>
    <div class="container">
        <div class="row mt-lg-5">
            <div class="col-lg-10 home-blog-container">
                <h2>Latest Blog Posts</h2>
                <div class="row mt-lg-5">
                    <div class="col-lg-9">
                        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                            <div class="card blog-container mb-3">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="./contributer/upload/<?php echo $row['blog_image']; ?>" class="img-fluid rounded-start blog-card-image" alt="blog post image">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h3 class="card-title"><?php echo $row['blog_title'] ?></h3>
                                            <p><?php echo substr($row['blog_para1'], 0, 300) ?></p>
                                            <div class="text-center">
                                                <a href="./blog_post.php?id=<?php echo $row['blog_id'] ?>">Read More.</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php }  ?>
                    </div>
                    <div class="col-lg-3">
                        <h4>Related Blog</h4>
                        <p>Data coming soon</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</main>
<?php
include "footer.php";
?>