<?php
include "head.php";
?>
<link rel="stylesheet" href="css/contact.css">

<?php
include "header.php";
?>
<div class="contact-container">
    <h2>Contact Us</h2>
    <form>
        <div class="input-element">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name">
        </div>
        <div class="input-element">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email">
        </div>
        <div class="input-element">
            <label for="name">Your Message:</label>
            <textarea name="" id="" cols="30" rows="5"></textarea>
        </div>
        <div class="input-element">
            <button type="submit" name="submit">Send Message</button>
        </div>
    </form>
</div>
<?php
include "footer.php"
?>