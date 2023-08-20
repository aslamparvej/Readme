 <?php

   use function PHPSTORM_META\type;

   include "head.php";
   include "./contributer/config.php";

   $blogId = $_GET['id'];
   
   $sql =  "SELECT * FROM blog_post WHERE blog_id = '{$blogId}'";
   $result = mysqli_query($conn, $sql);

   if (!$result) {
      echo "Somethis is wrong!";
   }

   ?>
 <?php
   include "header.php";
   ?>
 <main>
    <div class="container">
       <div class="row">
          <div class="col-lg-10 blog_post-container">
             <div class="row">
                <div class="col-lg-9">
                   <article>
                      <?php
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                         <h1><?php echo $row['blog_title'] ?></h1>
                         <div class="blog-post-image-container">
                            <img src="./contributer/upload/<?php echo $row['blog_image']; ?>" class="img-fluid blog-post-image" alt="blog post image">
                         </div>

                         <div class="para-content">
                            <p><?php echo $row['blog_para1'] ?></p>
                         </div>

                         <div class="blog-post-details d-flex justify-content-between">
                            <p id="blog-date">Blog Date: <?php echo $row['blog_date_and_time'] ?></p>
                            <?php
                              $category_id = $row['blog_category_id'];
                              $sql1 = "SELECT category_name FROM category WHERE category_id = {$category_id}";
                              $result1 = mysqli_query($conn, $sql1);
                              while ($row1 = mysqli_fetch_assoc($result1)) {
                              ?>
                               <p id="blog-topic">Topic: <?php echo $row1['category_name'] ?></p>
                            <?php } ?>
                         </div>

                      <?php } ?>
                      <div class="blog-comment-btn-container text-center">
                         <a href="./contact.php"><button class="btn btn-danger">Comment</button></a>
                      </div>
                   </article>
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