<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin_style.css">
    <title>Upload Blog Post</title>
</head>
<body>
    <div class="form-container">
        <form >
            <div class="input-container">
                <label for="heading">Heading:</label>
                <input type="text" id="heading" name="heading" required>
            </div>
            <div class="input-container">
                <label for="image">Upload Blog Image:</label>
                <input type="file" id="image" name="image" required>
            </div>
            <div class="input-container">
                <label for="first-para">First Paragraph:</label>
                <textarea name="first-para" id="first-para" cols="30" rows="10" required></textarea>
            </div>
            <div class="input-container">
                <label for="second-para">Second Paragraph:</label>
                <textarea name="second-para" id="second-para" cols="30" rows="10" required></textarea>
            </div>
            <div class="input-container">
                <label for="third-para">Third Paragraph:</label>
                <textarea name="third-para" id="third-para" cols="30" rows="10" required></textarea>
            </div>
            <div class="btn-container">
               <button type="submit" name="submit">Submit Your Blog</button>
            </div>
        </form>
    </div>
</body>
</html>