 <?php

use function PHPSTORM_META\type;

   include "head.php";
   include "./contributer/config.php";

   $blogId = (int) $_GET['id'];

   $sql =  "SELECT * FROM blog_post WHERE blog_id = {$blogId}";
   $result = mysqli_query($conn, $sql);

   if (!$result) {
      echo "Somethis is wrong!";
   }

   ?>
 <link rel="stylesheet" href="./css/blog_post.css">
 <?php
   include "header.php";
   ?>
 <main>
    <div class="blog_post-container">
       <article>
         <?php
            while ($row = mysqli_fetch_assoc($result)) {
         ?>
         <h1><?php echo $row['blog_title'] ?></h1>
         <img src="./contributer/upload/<?php echo $row['blog_image'];?>" alt="blog post image">

         <div class="para-content">
            <p><?php echo $row['blog_para1']?></p>
         </div>

         <div class="blog-details">
             <p id="blog-date">Blog Date: <?php echo $row['blog_date_and_time'] ?></p>
             <?php 
               $category_id = $row['blog_category_id'];
               $sql1 = "SELECT category_name FROM category WHERE category_id = {$category_id}";
               $result1 = mysqli_query($conn, $sql1);
               while($row1 = mysqli_fetch_assoc($result1)){
             ?>
             <p id="blog-topic">Topic: <?php echo $row1['category_name']?></p>
             <?php } ?>
          </div>

          <?php } ?>
          <div class="comment-container">
             <a href="./contact.php"><button>Comment</button></a>
          </div>
       </article>
    </div>
 </main>
 <?php
   include "footer.php";
   ?>