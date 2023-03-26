<link rel="stylesheet" href="css/main.css">
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
        <h2>Latest Blog Posts</h2>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <div class="blog-container">
                <div class="content-container">
                    <div class="image-container">
                    <img src="./contributer/upload/<?php echo $row['blog_image'];?>" alt="blog post image">
                    </div>
                    <div class="text-container">
                        <h3 class="title"><?php echo $row['blog_title'] ?></h3>
                        <p><?php echo substr($row['blog_para1'], 0, 400) ?></p>
                        <div class="btn">
                            <a href="./blog_post.php?id=<?php echo $row['blog_id'] ?>">Read More.</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php }  ?>
    </div>
    <!-- <div class="container">
        <h2>App Development Blog</h2>
        <div class="content-container">
            <div class="image-container">
                <img src="./images/blog-2.jpg" alt="blog image">
            </div>
            <div class="text-container">
                <h3 class="title">How to Become an App Developer</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis, deserunt delectus natus quidem tenetur quibusdam quos veniam, iste alias dolorum necessitatibus quae atque adipisci. Aut quae eligendi assumenda voluptates .</p>
                <div class="btn">
                    <a href="">Read More.</a>
                </div>
            </div>
        </div>
    </div> -->
    <!-- <div class="container">
        <h2>Machine Learning Blog</h2>
        <div class="content-container">
            <div class="image-container">
                <img src="./images/blog-3.jpg" alt="blog image">
            </div>
            <div class="text-container">
                <h3 class="title">How to Become an App Developer</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis, deserunt delectus natus quidem tenetur quibusdam quos veniam, iste alias dolorum necessitatibus quae atque.</p>
                <div class="btn">
                    <a href="">Read More.</a>
                </div>
            </div>
        </div>
    </div> -->
</main>
<?php
include "footer.php";
?>