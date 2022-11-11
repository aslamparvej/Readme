<?php include "./head.php" ?>

<link rel="stylesheet" href="../css/admin_style.css">

<?php include "./header.php" ?>

    <div class="form-container">
        <form >
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
            <div class="btn-container">
               <button type="submit" name="submit">Submit Your Blog</button>
            </div>
        </form>
    </div>

<?php include "../footer.php" ?>