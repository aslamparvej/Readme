<?php
include "./head.php";
include "./config.php";
?>

<link rel="stylesheet" href="../css/admin_style.css">

<?php include "./header.php" ?>

<?php
if (isset($_POST['submit'])) {

    if (isset($_FILES['image'])) {
        $errors = array();

        $file_name = $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_tmp = $_FILES['image']['tmp_name'];
        $file_type = $_FILES['image']['type'];
        $file_ext = strtolower(end(explode('.', $file_name)));
        $extensions = array('jpeg', 'jpg', 'png');

       // Checking file extensions
        if (in_array($file_ext, $extensions) === false) {
            $errors[] = "This  extension file not allowed, Please choose a JPG or PNG file";
        }

        // if file is greater than 2MB 
        if ($file_size > 2097152) {
            $errors[] = "File size must be 2MB or lower";
        }

        // Upload file if there is no error
        if (empty($errors) == true) {
            move_uploaded_file($file_tmp, "upload/" . $file_name);
        } else {
            print_r($errors);
            die();
        }
    }


    $heading = mysqli_real_escape_string($conn, $_POST['main-heading']);
    $paragraph_1 = mysqli_real_escape_string($conn, $_POST['editor']);
    // $paragraph_1 = mysqli_real_escape_string($conn, $_POST['first-para']);
    // $paragraph_2 = mysqli_real_escape_string($conn, $_POST['second-para']);
    // $paragraph_3 = mysqli_real_escape_string($conn, $_POST['second-para']);
    $contributer_id = $_SESSION['contributer_id'];
    $category_id = mysqli_real_escape_string($conn, $_POST['category']);

    $sql = "INSERT INTO blog_post (blog_title,blog_para1,blog_image,blog_category_id,blog_contributer_id)
    VALUES ('{$heading}','{$paragraph_1}','{$file_name}',{$category_id},{$contributer_id})";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("Location: {$hostname}/contributer/home.php");
    } else {
        echo "<div>Query Failed!</div>";
    }
}
?>

<!-- <div class="form-container">
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
        <div class="input-container">
            <label for="heading">*Heading:</label>
            <input type="text" id="heading" name="heading" required>
        </div>
        <div class="input-container">
            <label for="image">*Upload Blog Image:</label>
            <input type="file" id="image" name="image" required>
        </div>
        <div class="input-container">
            <label for="first-para">*First Paragraph:</label>
            <textarea name="first-para" id="first-para" cols="30" rows="10" required></textarea>
        </div>
        <div class="input-container">
            <label for="second-para">*Second Paragraph:</label>
            <textarea name="second-para" id="second-para" cols="30" rows="10" required></textarea>
        </div>
        <div class="input-container">
            <label for="third-para">*Third Paragraph:</label>
            <textarea name="third-para" id="third-para" cols="30" rows="10" required></textarea>
        </div>
        <div class="input-container">
            <label for="category">*Category:</label>
            <select name="category" id="category">
                <option disabled selected>Select category</option>
                <?php
                $sql = "SELECT * FROM category";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<option value='{$row['category_id']}'>{$row['category_name']}</option>";
                    }
                }
                ?>
            </select>
        </div>
        <div class="btn-container">
            <button type="submit" name="submit">Submit Your Blog</button>
        </div>
    </form>
</div> -->

<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
                <div class="form-group mt-3">
                    <label for="main-heading" class="form-label write-blog-label">Blog Main Heading</label>
                    <input type="text" class="form-control" name="main-heading" id="main-heading">
                </div>
                <div class="form-group mt-3">
                    <label for="image" class="form-label write-blog-label">Upload Blog Image:</label>
                    <input type="file" class="form-control" id="image" name="image" required>
                </div>
                <div class="form-group mt-3">
                    <label for="editor" class="form-label write-blog-label">Blog Body</label>
                    <textarea id="editor" name="editor"></textarea>
                </div>
                <div class="form-group mt-3">
                    <label for="category" class="form-label write-blog-label">Blog Category</label>
                    <select name="category" class="form-control" id="category">
                        <option disabled selected>Select category</option>
                        <?php
                        $sql = "SELECT * FROM category";
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<option value='{$row['category_id']}'>{$row['category_name']}</option>";
                            }
                        }
                        ?>
                    </select>
                </div>
                <div class="write-blog-btn-container btn-group mt-4">
                    <button type="submit" name="submit" class="btn btn-primary write-blog-btn">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script src="~/Scripts/tinymce/plugins/code/plugin.min.js"></script>
<script>
    tinymce.init({
        selector: 'textarea#editor',
        skin: 'bootstrap',
        plugins: 'lists, link, image, media, codesample',
        toolbar: 'h1 h2 h3 h4 bold italic strikethrough blockquote bullist numlist backcolor | link image media codesample | removeformat help',
        menubar: false,
    });
</script>

<?php include "../footer.php" ?>